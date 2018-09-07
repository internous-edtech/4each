import React, {PropTypes} from 'react';

import Label from './Label.jsx';
import CheckBox from './CheckBox.jsx';

export default class LessonsList extends React.Component {
    static propTypes = {
        title: PropTypes.string.isRequired,
        active: PropTypes.bool.isRequired,
        desc: PropTypes.string.isRequired,
        label: PropTypes.string.isRequired
    }

    constructor(props) {
        super(props);
    }

    render() {
        let kunsho = <img src="/img/kunsho_gray.png" />
        if(this.props.active){
            kunsho = <img src="/img/kunsho_red.png" />
        }
        return (
            <div className="col-sm-6 top-20">
                    <div className={`card lesson-card ${this.props.active && "active"}`}>
                    <div className="lesson-card-top">
                        <span className="card-label">LESSON<br/>01</span>
                        <h2 className="lesson-card-title">
                            タイトルタイトルタイトルタイトルタイトル
                            <hr className="bottom-line" />
                        </h2>
                        {kunsho}
                        <div className="clear"></div>
                    </div>
                    <div className="row in-card">
                        <div className="lesson-card-description">説明説明説明説明説明説明説明説明説明説明説明説明説明説明説明説明説明説明説明説明説明説明説明説明説明説明説明説明説明説明説明説明説明</div>
                        <div className="col-sm-2 col-sm-offset-2 col-xs-3 mb-no-padding">
                          <div className="icon-box">
                            <a href="slide.html">
                              <img src="/img/presen_green.png" className="icon-image" />
                              <p className="icon-text">スライド学習</p>
                            </a>
                          </div>
                        </div>
                        <div className="col-sm-2 col-xs-3 mb-no-padding">
                          <div className="icon-box">
                            <a href="movie.html">
                              <img src="/img/movie_green.png" className="icon-image" />
                              <p className="icon-text">動画学習</p>
                            </a>
                          </div>
                        </div>
                        <div className="col-sm-2 col-xs-3 mb-no-padding">
                          <div className="icon-box">
                            <a href="note.html">
                              <img src="/img/note_green.png" className="icon-image" />
                              <p className="icon-text">写経学習</p>
                            </a>
                          </div>
                        </div>
                        <div className="col-sm-2  col-xs-3 mb-no-padding">
                          <div className="icon-box">
                            <a href="practice.html">
                              <img src="/img/list_green.png" className="icon-image" />
                              <p className="icon-text">練習問題</p>
                            </a>
                          </div>
                        </div>
                    </div>

                </div>
            </div>
        );
    }
}
