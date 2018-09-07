import React, {Component, PropTypes} from 'react';


import Achivement from './achievement/Achievement.jsx';
import Schedule from './schedule/Schedule.jsx';
import Courses from './courses/Courses.jsx';

import { connect } from 'react-redux';
import { contain } from 'redux-epic';
import { createSelector } from 'reselect';
import { compose } from 'redux';
import { fetchChallenges } from '../../challenges/redux/actions';

const bindableActions = { fetchChallenges };
const fetchOptions = {
  fetchAction: 'fetchChallenges',
  isPrimed({ superBlocks }) {
    return Array.isArray(superBlocks) && superBlocks.length > 1;
  }
};

const mapStateToProps = createSelector(
  state => state.app.user,
  state => state.challengesApp.superBlocks,
  state => state.entities,
  (
    username,
    superBlocks,
    entities
  ) => ({
    username,
    superBlocks,
    entities
  })
);

class Board extends Component {

    // TODO
    // できれば汎用的なものにしたい
    courses(){
        const {
          username,
          superBlocks,
          entities
        } = this.props;

        let achievement_graph = {
            dataset_g : "",
            dataset_a : "",
            data_labels : "",
            x_label_array: []
        };
        let lesson_schedule = {
            index : 0,
            lessons: []
        }

        let all_challenges_count = {};
        let competed_challenges_count = {};
        let lessons_data = {};

        if(!Object.keys(entities.superBlock).length){
            return {
                achievement_graph,
                lesson_schedule,
                all_challenges_count,
                competed_challenges_count
            }
        }

        // 学習可能なコース 進捗率（分母）
        superBlocks.map(superBlockName => {
            if (!entities.superBlock[superBlockName]){
                return null;
            }
            let lessons = entities.superBlock[superBlockName].blocks;
            competed_challenges_count[superBlockName] = 0;
            lessons.map(lessonName => {
                entities.block[lessonName].challenges.map(challengeName => {
                    all_challenges_count[superBlockName] ? all_challenges_count[superBlockName]++ : all_challenges_count[superBlockName] = 1;
                    if(!lessons_data[lessonName]){
                        lessons_data[lessonName] = [];
                    }
                    if(entities.challenge[challengeName]){
                        lessons_data[lessonName].push(entities.challenge[challengeName].id)
                    }

                });
            });
        });

        const user = entities.user[username];
        if(!user){
            return {
                achievement_graph,
                lesson_schedule,
                all_challenges_count,
                competed_challenges_count
            }
        }

        const currentChallengeId = user.currentChallengeId;

        if(!currentChallengeId){
            return {
                achievement_graph,
                lesson_schedule,
                all_challenges_count,
                competed_challenges_count
            }
        }

        // 学習可能なコース 進捗率（分子）
        let complete_challenges = []; // 目標の達成度
        Object.keys(user.challengeMap).map(challengeId => {
            let challengeName = entities.challengeIdToName[challengeId]
            let challenge = entities.challenge[challengeName];
            if(challenge){
                competed_challenges_count[challenge.superBlock.toLowerCase()]++;
                complete_challenges.push(user.challengeMap[challengeId])
            }
        });

        // 今日の学習内容
        let challengeName = entities.challengeIdToName[currentChallengeId];

        // no data
        if(!challengeName){
            return {
                achievement_graph,
                lesson_schedule,
                all_challenges_count,
                competed_challenges_count
            }
        }

        let superBlockName = entities.challenge[challengeName].superBlock.toLowerCase();
        lesson_schedule.index = entities.challenge[challengeName].order;

        let blocks = entities.superBlock[superBlockName].blocks;

        blocks.map(blockName => {
            let block = entities.block[blockName];
            lesson_schedule.lessons.push(block);
        });

        // 目標の達成度
        let milestone = user.milestone;

        complete_challenges.sort(function(a,b){
            if(a.completedDate<b.completedDate) return -1;
            if(a.completedDate > b.completedDate) return 1;
            return 0;
        });

        // no data
        if(!complete_challenges.length){
            return {
                achievement_graph,
                lesson_schedule,
                all_challenges_count,
                competed_challenges_count
            }
        }

        const strat_date = complete_challenges[0].completedDate;
        const last_date = strat_date + (milestone * 24 * 60 * 60 * 1000 );

        let complete_lessons = [];
        const all_lesson_count = Object.keys(lessons_data).length;

        complete_challenges.map(comp=>{
            Object.keys(lessons_data).map(key=>{
                if(lessons_data[key].indexOf(comp.id) > -1){
                    lessons_data[key].splice(lessons_data[key].indexOf(comp.id),1);
                    // 最後に残ったやるが動画かスライドなら完了とする
                    if(lessons_data[key].length == 1 &&
                        entities.challenge[entities.challengeIdToName[lessons_data[key][0]]].suborder - 2 <= 0
                    ){
                        delete lessons_data[key];
                        complete_lessons.push(comp.completedDate)
                    }
                }
            })
        });

        const PER_DAY = 10;
        let per_y = Math.ceil(all_lesson_count/PER_DAY)
        let per_y_array = [];
        for(let i=per_y;i<all_lesson_count+per_y;i+=per_y){
            per_y_array.push(i);
        }

        achievement_graph.dataset_g = per_y_array.join(",")

        let x_label_array = [];
        let getDateStr = (timestamp) => {
            let date = new Date(timestamp);
            return (date.getMonth()+1) + "/" + (date.getDate())
        }

        per_y_array.forEach((item,index)=>{
            x_label_array.push(strat_date + (Math.ceil((last_date-strat_date) *index)))
        });

        achievement_graph.data_labels = x_label_array.map(item => { return getDateStr(item) }).join(",")

        let achievement_graphcnt = 0;
        achievement_graph.dataset_a = x_label_array.map((x_label_date,index) => {
            complete_lessons.map((date) => {
                if(index == 0 && date <= x_label_date ){
                    achievement_graphcnt++;
                } else if(index == x_label_array.length-1 && x_label_date <= date ){
                    achievement_graphcnt++;
                } else if(x_label_date <= date && date < x_label_array[index+1]){
                    achievement_graphcnt++;
                }
            });

            return achievement_graphcnt;
        }).join(",");


        achievement_graph.all_cnt = all_lesson_count
        achievement_graph.complete_cnt = complete_lessons.length
        achievement_graph.x_label_array = x_label_array

        return {
            achievement_graph,
            lesson_schedule,
            all_challenges_count,
            competed_challenges_count
        }

    }

    render() {
        const {
          username,
          superBlocks,
          entities
        } = this.props;

        let statics = this.courses()

        return (
            <div>
                <div className="top-top">
                    <div className="container">
                        <div className="row board-area courses-area">

                            {(() => {
                               if (statics.achievement_graph.dataset_g)
                                 return <Achivement achievement_graph={statics.achievement_graph}/>
                             })()}
                            {(() => {
                               if (statics.lesson_schedule.lessons.length)
                                 return <Schedule lesson_schedule={statics.lesson_schedule}/>
                             })()}
                        </div>
                    </div>
                </div>
                <div>
                    <div className="container">
                        <div className="row">
                            <div className="col-sm-12 text-area middle-title">
                                <img src="/img/03.png" />
                                学習可能なコース
                            </div>
                        </div>
                        <div className="row board-area">
                            <Courses superBlocks={this.props.superBlocks} entities={entities} all={statics.all_challenges_count} completed={statics.competed_challenges_count} />

                        </div>
                    </div>
                </div>
            </div>
        );
    }
}

export default compose(
  connect(mapStateToProps, bindableActions),
  contain(fetchOptions)
)(Board);
