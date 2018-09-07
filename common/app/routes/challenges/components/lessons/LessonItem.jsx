import React, {PropTypes} from 'react';

export default class LessonsList extends React.Component {
    static propTypes = {
        index: PropTypes.number.isRequired,
        title: PropTypes.string.isRequired,
        active: PropTypes.bool.isRequired,
        block: PropTypes.string.isRequired,
        desc: PropTypes.string.isRequired,
        label: PropTypes.string.isRequired,
        items: PropTypes.object.isRequired,
        challenges: PropTypes.object.isRequired,
    }

    constructor(props) {
        super(props);
    }

    render() {
        let kunsho = <img src="/img/kunsho_gray.png" />
        if(this.props.active){
            kunsho = <img src="/img/kunsho_red.png" />
        }
        let padIndex = this.props.index <  10 ? "0" + this.props.index : this.props.index;
        let practice_challenges =  this.props.items.filter((item) => item.challengeType == 9);
        let syakyo_challenges =  this.props.items.filter((item) => item.challengeType == 11);


        return (
            <div className="col-sm-6 top-20">
                    <div className={`card lesson-card ${this.props.active && "active"}`}>
                    <div className="lesson-card-top">
                        <span className="card-label">LESSON<br/>{padIndex}</span>
                        <h2 className="lesson-card-title">
                            {this.props.title}
                            <hr className="bottom-line" />
                        </h2>
                        {kunsho}
                        <div className="clear"></div>
                    </div>
                    <div className="row in-card">
                        <div className="lesson-card-description">                            {this.props.desc}
                        </div>
                        <div className="col-sm-2 col-sm-offset-2 col-xs-3 mb-no-padding">
                          <div className="icon-box">
                            {/* TODO */}
                            <a href={`/challenges/${this.props.block}-lesson${padIndex}/${this.props.block}${this.props.index}2`}>
                              <img src="/img/presen_green.png" className="icon-image" />
                              <p className="icon-text">スライド学習</p>
                            </a>
                          </div>
                        </div>
                        <div className="col-sm-2 col-xs-3 mb-no-padding">
                          <div className="icon-box">
                            <a href={`/challenges/${this.props.block}-lesson${padIndex}/${this.props.block}${this.props.index}1`}>
                              <img src="/img/movie_green.png" className="icon-image" />
                              <p className="icon-text">動画学習</p>
                            </a>
                          </div>
                        </div>
                        {(() => {
                            if ( syakyo_challenges.length ) {
                              return <div className="col-sm-2 col-xs-3 mb-no-padding">
                                <div className="icon-box">
                                  <a href={`/challenges/${this.props.block}-lesson${padIndex}/${this.props.block}${this.props.index}3`}>
                                    <img src="/img/note_green.png" className="icon-image" />
                                    <p className="icon-text">写経学習</p>
                                  </a>
                                </div>
                              </div>
                          } else {
                              return null
                          }
                        })()}
                        {(() => {
                            if ( practice_challenges.length ) {
                              return <div className="col-sm-2  col-xs-3 mb-no-padding">
                                <div className="icon-box">
                                  <a href={`/challenges/${this.props.block}-lesson${padIndex}/${practice_challenges[0].name}`}>
                                    <img src="/img/list_green.png" className="icon-image" />
                                    <p className="icon-text">練習問題</p>
                                  </a>
                                </div>
                              </div>
                            } else {
                                return null
                            }
                        })()}


                    </div>

                </div>
            </div>
        );
    }
}
