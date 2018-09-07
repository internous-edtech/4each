import React, {PropTypes} from 'react';

export default class CheckBox extends React.Component {

    static propTypes = {
        flag: PropTypes.string.isRequired
    }

    constructor(props) {
        super(props);
    }

    render() {
        const flag = this.props.flag;
        let className = "check-box-square nocheck";
        if(flag === "yes") {
            className = "check-box-square";
        }

        return (
          <div className="col-sm-1 col-xs-2 icon-box" id="check-box-square">
            <div className={className} data-flag={flag} id="check-box">
                <img src="img/icons/check_green.png" className="icon-image"/>
            </div>
          </div>
        )
    }
}