import React, {Component, PropTypes} from 'react';

class Banner extends Component {
    render() {
        const faceStyle = {
            backgroundImage: `url('/img/face.jpg')`
        }

        return (
            <div className="eyecatch">
                <div className="container">
                    <div className="row goal">
                        <div className="col-sm-1 col-xs-3">
                            <div className="face" style={faceStyle}></div>
                        </div>
                        <div className="col-sm-9 col-xs-9">
                            <p className="goal-text">絶対webサービスを３ヶ月以内にローンチするぞ！！</p>
                        </div>
                    </div>
                </div>
            </div>
        );
    }
}

export default Banner;
