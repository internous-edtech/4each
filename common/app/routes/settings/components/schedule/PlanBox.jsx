import React, {Component, PropTypes} from 'react';

export default class PlanBox extends Component {
    static propTypes = {
        title: PropTypes.string.isRequired,
        href: PropTypes.string.isRequired,
        content: PropTypes.string.isRequired,
        isToday: PropTypes.bool.isRequired
    }

    render() {
        let divClass = "plan-box";
        let id = "";
        if(this.props.isToday) {
            divClass = "plan-box today";
            id = "plan-box";
        }
        return (
            <div className={divClass} id={id}>
                <div className="plan-title">{this.props.title}</div>
                <a href={this.props.href}><div className="plan-content">{this.props.content}</div></a>
            </div>
        );
    }
}
