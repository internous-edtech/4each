import React, { PropTypes } from 'react';

export default class LeftNote extends React.Component {

    static propTypes = {
        practiceModel: PropTypes.string.isRequired
    }

    constructor(props) {
        super(props);
    }

    render() {
        const {practiceModel} = this.props;
        return (
            <div className="col-sm-6 left-note">
                <div className="code">
                    <div className="code-title">問題</div>
                    <pre><code>
                        {practiceModel}
                    </code></pre>
                </div>
            </div>
        );
    }
}
