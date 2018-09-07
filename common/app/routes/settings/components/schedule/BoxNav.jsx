import React, {Component} from 'react';

export default class BoxNav extends Component {
    render() {
        return (            
            <div className="col-sm-2 col-xs-1">
              <div className="button-up" id="button-up"><i className="fa fa-angle-up"></i></div>
              <div className="button-down" id="button-down"><i className="fa fa-angle-down"></i></div>
            </div>
        );
    }
}