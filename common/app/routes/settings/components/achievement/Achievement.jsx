import React, { Component, PropTypes } from 'react';

import ChartCanvas from './ChartCanvas.jsx';
import CardLabel from '../CardLabel.jsx';
import CardArchieve from './CardArchieve.jsx';


class Achievement extends Component {

    render() {

        let x_dates = this.props.achievement_graph.x_label_array;
        const today = +new Date()
        let index = 0
        x_dates.map((date,dateIndex) =>{
            if(date < today){
                index = dateIndex
                if(index > 1){
                    index -= 1
                }
            }
        })

        let position_left = 2.8 + 84/10*index;


        const percent = Math.ceil(100 * this.props.achievement_graph.complete_cnt/this.props.achievement_graph.all_cnt);
        const remain = this.props.achievement_graph.all_cnt - this.props.achievement_graph.complete_cnt;
        return (
            <div className="col-sm-6">
                <div className="top-card-top">
                  <span className="card-label"><img className="card-label-icon" src="/img/01.png" />目標の達成度</span>
                </div>

                <div className="card card-separated basecolor">
                  <div className="card-archive" style={{backgroundImage: "url('/img/08.png')","left":position_left+"%"}}>
                    <div className="card-archive-text">残り<br/>{remain}レッスン</div>
                    <div className="card-archive-num">{percent}%</div>
                  </div>
                  <ChartCanvas achievement_graph={this.props.achievement_graph} />
                </div>
            </div>
        );
    }
}

export default Achievement;
