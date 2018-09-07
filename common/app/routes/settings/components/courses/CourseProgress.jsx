import React, {PropTypes} from 'react';

export default class CourseProgress extends React.Component {

    static propTypes = {
        progress: PropTypes.number.isRequired
    }

    render() {
        return (
            <div className="card-progress">
                <div id="progress-bar" className="progress-bar" data-count={this.props.progress} style={{"width": this.props.progress + "%"}}>
                    <div id="progress-text">
                        {this.props.progress}% 終了
                    </div>
                </div>
            </div>
        );
    }
}
