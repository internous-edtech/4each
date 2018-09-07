import React, {PropTypes} from 'react';

export default class CompleteButton extends React.Component {

    static propTypes = {
        runTest: PropTypes.func.isRequired
    }

    constructor(...props) {
        super(...props);
        this.runTest = this.runTest.bind(this);
        this.handleExecute = this.handleExecute.bind(this);
    }

    runTest() {
        this.props.runTest();
    }

    handleExecute() {
        this.props.handleExecute();
    }


    render() {
        return (
            <div className="note-bottom">
                <div className="row">
                    <div className="col-sm-4">
                        <div className="card-button fleft" onClick={this.props.handleExecute}>
                            実行
                        </div>
                    </div>
                    <div className="col-sm-2 col-sm-offset-6">
                        <div className="card-button"
                            onClick={this.runTest}
                        >
                            完了
                        </div>
                    </div>
                </div>
            </div>
        );
    }
}
