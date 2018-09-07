import React, {PropTypes} from 'react';

export default class RightNote extends React.Component {
    constructor(props) {
        super(props);
    }

    render() {

        const style = {
            left: '2px'
        }

        return (
            <div className="col-sm-6 right-note">
                <div className="code black">
                    <div className="code-title" style={style}>Editor</div>
                    <div id="editor" className="editor"></div>
                </div>
            </div>
        );
    }
}