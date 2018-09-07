import React, {PropTypes} from 'react';

export default class Label extends React.Component {

    static propTypes = {
        label: PropTypes.string.isRequired
    }

    constructor(props) {
        super(props);
    }

    render() {
        return (
            <div className="card-top">
                <span className="card-label">{this.props.label}</span>
            </div>
        );
    }
}