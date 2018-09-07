import React, { PropTypes } from 'react';

export default class LeftNote extends React.Component {

    static propTypes = {
        codeModel: PropTypes.string.isRequired,
        title: PropTypes.string.isRequired
    }

    constructor(props) {
        super(props);
    }

    render() {
        const {codeModel, title} = this.props;
        return (
            <div className="col-sm-12 left-note">
                <div className="code">
                    <div className="code-title">{title}</div>
                    <pre><code>
                        {codeModel}
                    </code></pre>
                </div>
            </div>
        );
    }
}
