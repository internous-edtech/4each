import React, {PropTypes} from 'react';

import QA from '../../components/QA/QA.jsx';
import {QAs} from './QA-data.js';

export default class HelpModal extends React.Component {
    render() {
        return (
            <div className="modal fade" id="faqModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                <div className="modal-dialog" role="document">
                    <div className="modal-content">
                        <div className="modal-header">
                            <button type="button" className="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                            <h4 className="modal-title" id="myModalLabel">よくある質問</h4>
                        </div>
                        <div className="modal-body">
                            <div className="">
                                <div className="row">
                                    <QA QAs={QAs}/>
                                </div>
                            </div>

                        </div>
                        <div className="modal-footer">
                            <button type="button" className="btn btn-default" data-dismiss="modal">閉じる</button>
                        </div>
                    </div>
                </div>
            </div>
        );
    }
}