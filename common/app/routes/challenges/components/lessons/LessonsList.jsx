import React, {PropTypes} from 'react';

import LessonItem from './LessonItem.jsx';

export default class LessonsList extends React.Component {

    static propTypes = {
        completeLessonKeys: PropTypes.array.isRequired,
        lessonKeys: PropTypes.array.isRequired,
        blockname: PropTypes.string.isRequired,
        blocks: PropTypes.object.isRequired,
        challenges:  PropTypes.object.isRequired
    }

    constructor(props) {
        super(props);
    }

    render() {
        const lessons = this.props.lessonKeys.map((lessonKey,index) => {
            const lesson = this.props.blocks[lessonKey];
            const active = this.props.completeLessonKeys.indexOf(lessonKey) > -1
            const challenges_array = Object.keys(this.props.challenges).map((key, index) => {
                return this.props.challenges[key];
            }).filter((item) => item.name.match(this.props.blockname))

            return <LessonItem
                title={lesson.description[0]}
                desc={lesson.description[1]}
                label={`Lesson ${index+1}`}
                key={lesson.id}
                active={active}
                index={index+1}
                block={this.props.blockname}
                challenges={this.props.challenges}
                items={challenges_array.filter((item) => item.order == index )}
            />
        });

        return (
            <div className="container">
                <div className="row board-area">
                    {lessons}
                    <div className="clear"></div>
                    <br />
                </div>
            </div>
        );
    }
}
