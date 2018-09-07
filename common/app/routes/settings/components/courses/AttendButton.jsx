import React, {PropTypes} from 'react';

export default class AttendButton extends React.Component {

    render() {
        return (
            <a href={this.props.href}>
                <div className="card-button block-center">
                    受講する
                </div>
            </a>
        );
    }
}
