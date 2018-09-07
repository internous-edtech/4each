import React, {PropTypes} from 'react';

import CourseProgress from './CourseProgress.jsx';
import AttendButton from './AttendButton.jsx';

export default class CoursePreview extends React.Component {
    static propTypes = {
        title: PropTypes.string.isRequired,
        subtitle: PropTypes.string.isRequired,
        desc: PropTypes.string.isRequired,
        progress: PropTypes.number.isRequired,
        superBlockName: PropTypes.string.isRequired,
        lessons: PropTypes.array.isRequired,
        challenge: PropTypes.string.isRequired,
    }

    render() {
        /* ハードコーディング(コース画像) */
        let image = {
            html: "/img/05.png",
            css: "/img/06.png",
            js: "/img/24.png",
            php: "/img/04.png",
            "mysql" : "/img/26.png",
            "jquery" : "/img/07.png",
            "java" : "/img/23.png",
        };

        return (
            <div className="col-sm-3">
                <div className="card card-separated center">
                    <img className="card-top-image" src={image[this.props.superBlockName]} />
                    <h3 className="card-title">{this.props.title}</h3>
                    <hr className="card-line" />
                    <div className="card-sub-title">全{this.props.lessons.length}レッスン</div>
                    <div className="card-description">{this.props.desc}</div>
                    <CourseProgress progress={this.props.progress}/>
                    <AttendButton href={`/lessons/${this.props.superBlockName}`}/>
                    <br/>
                </div>
            </div>
        );
    }
}
