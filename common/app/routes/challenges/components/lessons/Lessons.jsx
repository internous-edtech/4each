import React, { PropTypes } from 'react';
import { compose } from 'redux';
import { contain } from 'redux-epic';
import { connect } from 'react-redux';
import { createSelector } from 'reselect';
import PureComponent from 'react-pure-render/component';
import { Col } from 'react-bootstrap';

import { fetchChallenges } from '../../redux/actions';
import { updateTitle } from '../../../../redux/actions';

import Banner from './Banner.jsx';
import Footer from '../Footer.jsx';
import LessonsList from './LessonsList.jsx';

const bindableActions = { fetchChallenges, updateTitle };
const mapStateToProps = createSelector(
  state => state.app.user,
  state => state.app.windowHeight,
  state => state.app.navHeight,
  state => state.challengesApp.superBlocks,
  state => state.entities,
  state => state.challengesApp,
  (username, windowHeight, navHeight, superBlocks, entities) => ({
    username,
    superBlocks,
    entities,
    height: windowHeight - navHeight - 150
  }),
);
const fetchOptions = {
  fetchAction: 'fetchChallenges',
  isPrimed({ superBlocks }) {
    return Array.isArray(superBlocks) && superBlocks.length > 1;
  }
};
export class ShowLessons extends PureComponent {
  static displayName = 'Lessons';
  static propTypes = {
    username: PropTypes.string,
    entities: PropTypes.object,
    superBlocks: PropTypes.array,
    height: PropTypes.number,
    updateTitle: PropTypes.func.isRequired,
    params: PropTypes.object,
    fetchChallenges: PropTypes.func.isRequired
  };

  componentWillMount() {
    // if no params then map is open in drawer
    // do not update title
    if (!this.props.params) {
      return;
    }
    this.props.updateTitle(
      'コース'
    );
  }

  completeLessons() {
      const { username, entities, block, superBlocks } = this.props;
      let complete_lessons = []

      let user = entities.user[username];
      if(!user){
          return complete_lessons
      }

      // 学習可能なコース 進捗率（分子）
      let complete_challenges = []; // 目標の達成度
      Object.keys(user.challengeMap).map(challengeId => {
          let challengeName = entities.challengeIdToName[challengeId]
          let challenge = entities.challenge[challengeName];
          if(challenge){
              complete_challenges.push(user.challengeMap[challengeId])
          }
      });

      let lessons_data = {};
      superBlocks.map(superBlockName => {
          if (!entities.superBlock[superBlockName]){
              return null;
          }
          let lessons = entities.superBlock[superBlockName].blocks;
          lessons.map(lessonName => {
              entities.block[lessonName].challenges.map(challengeName => {
                  if(!lessons_data[lessonName]){
                      lessons_data[lessonName] = [];
                  }
                  if(entities.challenge[challengeName]){
                      lessons_data[lessonName].push(entities.challenge[challengeName].id)
                  }
              });
          });
      });

      complete_challenges.map(comp=>{
          Object.keys(lessons_data).map(key=>{
              if(lessons_data[key].indexOf(comp.id) > -1){
                  lessons_data[key].splice(lessons_data[key].indexOf(comp.id),1);
                  // 最後に残ったやるが動画かスライドなら完了とする
                  if(lessons_data[key].length == 1 &&
                      entities.challenge[entities.challengeIdToName[lessons_data[key][0]]].suborder - 2 <= 0
                  ){
                      delete lessons_data[key];
                      complete_lessons.push(key)
                  }
              }
          })
      });

      return complete_lessons
  }

  render() {
    const { username, entities, block } = this.props;
    const blockname = this.props.params.block;
    const blocks = entities.block;

    // case:superBlock = {}
    if(!Object.keys(entities.superBlock).length){
        return null;
    }

    const lessonKeys = entities.superBlock[blockname].blocks;
    const completeLessonKeys = this.completeLessons()

    return (
        <div style={{background:"white"}}>
          <Banner
              title={blockname.toUpperCase()}
              block={blockname}
              count={20}
              desc={""} />
          <LessonsList
              blockname={blockname}
              lessonKeys={lessonKeys}
              completeLessonKeys={completeLessonKeys}
              blocks={blocks}
              challenges={entities.challenge}
          />
          <Footer />
        </div>
    );
  }
}

export default compose(
  connect(mapStateToProps, bindableActions),
  contain(fetchOptions)
)(ShowLessons);
