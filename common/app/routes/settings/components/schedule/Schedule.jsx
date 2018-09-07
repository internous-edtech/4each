import React, { Component, PropTypes } from 'react';

import BoxNav from './BoxNav.jsx';
import PlanBoxes from './PlanBoxes.jsx';

class Schedule extends Component {
    render() {
        return (
            <div className="col-sm-6">
                    <div className="top-card-top">
                        <span className="card-label"><img className="card-label-icon" src="/img/02.png" />今日の学習内容</span>
                    </div>
                    <div className="card card-separated">
                        <div className="plan-area">
                            <div className="row">
                                <BoxNav/>
                                <PlanBoxes lesson_schedule={this.props.lesson_schedule}/>
                            </div>
                        </div>
                    </div>
            </div>
        );
    }
}

export default Schedule;
