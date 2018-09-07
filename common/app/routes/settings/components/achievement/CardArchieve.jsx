import React, {Component, PropTypes} from 'react';

class CardArchieve extends Component {
    static propTypes = {
        remaining: PropTypes.number.isRequired,
        percent: PropTypes.number.isRequired
    };

    render() {
        return (
            <div className="card-archive">
                <div className="card-archive-text">残り{this.props.remaining}レッスン</div>
                <div className="card-archive-num">{this.props.percent}%</div>
            </div>
        );
    }
}

export default CardArchieve;