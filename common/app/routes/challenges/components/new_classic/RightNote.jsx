import React, {PropTypes} from 'react';
import Editor from './Editor.jsx';

export default class RightNote extends React.Component {

    static propTypes = {
        onChange: PropTypes.func.isRequired,
        title: PropTypes.string.isRequired
    }

    constructor(props) {
        super(props);
        this.onChange = this.onChange.bind(this);
    }

    onChange(e) {
        // const note = ace.edit("editor").getValue();
        // this.props.onChange(note);
    }

    render() {
        const style = {
            left: '2px'
        }
        const {
          content,
          updateFile,
          file,
          mode,
          showPreview,
          executeChallenge,
          title
        } = this.props;

        return (
            <div className="col-sm-12 right-note">
                <div className="code black">
                    <div className="code-title" style={style}>{title}</div>
                    {/* <div id="editor" className="editor" onKeyUp={this.onChange}></div> */}
                    <Editor
                      id={"editor"}
                      content={ content }
                      executeChallenge={ executeChallenge }
                      mode={ mode }
                      updateFile={ content => updateFile(content, file) }
                    />
                </div>
            </div>
        );
    }
}
