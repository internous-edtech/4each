import React, {PropTypes} from 'react';

import LessonItem from './LessonItem.jsx';

export default class LessonsList extends React.Component {

    static propTypes = {
        lessons: PropTypes.object.isRequired
    }

    constructor(props) {
        super(props);
    }

    render() {

        const lessonKeys = this.props.lessons.superBlock['Php'].blocks;
        const challenges = this.props.lessons.challenge;
        const blocks = this.props.lessons.block;

        const lessons = blocks['php---section-1'].challenges.map((lessonKey,index) => {
            const lesson = challenges[lessonKey];
            const active = Math.random() > 0.5 ? true : false;
            return <LessonItem title={lesson.title} desc={lesson.description.join('')} label={`Lesson ${index+1}`} key={lesson.id} active={active} />
        });

        return (
            <div className="container">
                <div className="row board-area">
                    {lessons}
                </div>
            </div>
        );
    }
}
