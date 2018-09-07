import React, { PropTypes } from 'react';

export default class Bottom extends React.Component {
    constructor(props) {
        super(props);
        this.handleCompleteCLick = this.handleCompleteCLick.bind(this);
    }

    handleCompleteCLick() {
        const {executeChallenge} = this.props;
        console.log('click');
        executeChallenge()
    }

    render() {
        const {executeChallenge} = this.props;

        return (
            <div className="note-bottom">
                <div className="row">
                    <div className="col-sm-4">
                        <div className="card-button fleft" data-toggle="modal" data-target="#hintoModal">
                            <img src="/img/icons/light_white.png" className="button-icon" />
                            ヒント
                        </div>
                        <div className="card-button fleft" data-toggle="modal" data-target="#answerModal">
                            <img src="/img/icons/eye_white.png" className="button-icon" />
                            答え
                        </div>
                    </div>

                    <div className="col-sm-2 col-sm-offset-6" onClick={this.handleCompleteCLick}>
                        <div className="card-button">完了</div>
                    </div>
                </div>
            </div>
        );
    }
}
