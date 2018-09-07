import React from 'react';

import PlanBox from './PlanBox.jsx';

export default class PlanBoxes extends React.Component {
    constructor(props) {
        super(props);
    }
    render() {
        const titles = ["前回の学習内容","今日の学習内容","次の学習内容"];
        this.planboxes = this.props.lesson_schedule.lessons.map((plan,planIndex) => {
            let isToday = (this.props.lesson_schedule.index == planIndex);
            let title = "";
            if(isToday){
                title = titles[1]
            } else if(this.props.lesson_schedule.index >= planIndex){
                title = titles[0]
            } else {
                title = titles[2]
            }

            let href = `/ja/challenges/${plan.dashedName}/${plan.challenges[0]}`

            return <PlanBox title={title} content={plan.description[0]} key={plan.id} href={href} isToday={isToday}/>
        })
        return (
            <div className="plan-boxes" id="plan-boxes">
                {this.planboxes}
            </div>
        );
    }
}
