import React, {Component, PropTypes} from 'react';

class CardLabel extends Component {
    static propTypes = {
        title: PropTypes.string.isRequired,
        pic: PropTypes.string.isRequired
    };
    
    render() {
        return (
            <div className="card-top">
                <span className="card-label"><img className="card-label-icon small" src={this.props.pic}/> {this.props.title}</span>
            </div>
        );
    }
}

export default CardLabel;