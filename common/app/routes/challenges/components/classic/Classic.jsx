import React, { PropTypes } from 'react';
import { connect } from 'react-redux';
import { Col } from 'react-bootstrap';
import { createSelector } from 'reselect';
import PureComponent from 'react-pure-render/component';

import Editor from './Editor.jsx';
import SidePanel from './Side-Panel.jsx';
import Preview from './Preview.jsx';
import BugModal from '../Bug-Modal.jsx';
import ClassicModal from '../Classic-Modal.jsx';

import LeftNote from './LeftNote.jsx';
import RightNote from './RightNote.jsx';
import Bottom from './Bottom.jsx';
import HintModal from './HintModal.jsx';
import AnswerModal from './AnswerModal.jsx';

import { challengeSelector } from '../../redux/selectors';
import {
  executeChallenge,
  updateFile,
  loadCode,
  submitChallenge,
  closeChallengeModal,
  updateSuccessMessage
} from '../../redux/actions';
import { randomCompliment } from '../../../../utils/get-words';

const mapStateToProps = createSelector(
  challengeSelector,
  state => state.challengesApp.id,
  state => state.entities,
  state => state.challengesApp,
  state => state.challengesApp.tests,
  state => state.challengesApp.files,
  state => state.challengesApp.key,
  state => state.challengesApp.isChallengeModalOpen,
  state => state.challengesApp.successMessage,
  state => state.challengesApp.output,
  (
    { showPreview, mode },
    id,
    entities,
    challengesApp,
    tests,
    files = {},
    key = '',
    isChallengeModalOpen,
    successMessage,
    output
  ) => ({
    id,
    entities,
    challengesApp,
    content: files[key] && files[key].contents || '',
    file: files[key],
    showPreview,
    mode,
    tests,
    isChallengeModalOpen,
    successMessage,
    output
  })
);

const bindableActions = {
  executeChallenge,
  updateFile,
  loadCode,
  submitChallenge,
  closeChallengeModal,
  updateSuccessMessage
};

export class Challenge extends PureComponent {
  static displayName = 'Challenge';

  static propTypes = {
    id: PropTypes.string,
    // challenge
    entities: PropTypes.object,
    challengesApp: PropTypes.object,
    showPreview: PropTypes.bool,
    content: PropTypes.string,
    mode: PropTypes.string,
    file: PropTypes.object,
    updateFile: PropTypes.func,
    executeChallenge: PropTypes.func,
    loadCode: PropTypes.func,
    submitChallenge: PropTypes.func,
    isChallengeModalOpen: PropTypes.bool,
    closeChallengeModal: PropTypes.func,
    successMessage: PropTypes.string,
    updateSuccessMessage: PropTypes.func,
    output: PropTypes.string,
  };

  componentDidMount() {
    this.props.loadCode();
    this.props.updateSuccessMessage(randomCompliment());
  }

  componentWillReceiveProps(nextProps) {
    if (this.props.id !== nextProps.id) {
      this.props.loadCode();
      this.props.updateSuccessMessage(randomCompliment());
    }
  }

  renderPreview(showPreview) {
    if (!showPreview) {
      return null;
    }
    return (
      <Col
        lg={ 3 }
        md={ 4 }
        >
        <Preview />
      </Col>
    );
  }

  uuid() {
    var uuid = "", i, random;
    for (i = 0; i < 32; i++) {
      random = Math.random() * 16 | 0;

      if (i == 8 || i == 12 || i == 16 || i == 20) {
        uuid += "-"
      }
      uuid += (i == 12 ? 4 : (i == 16 ? (random & 3 | 8) : random)).toString(16);
    }
    return uuid;
  }

  nl2br (text) {
      var regex = /(\n)/g;
      var self = this;
      return text.split(regex).map(function (line) {
          if (line.match(regex)) {
              return React.createElement('br',{key:self.uuid()})
          }
          else {
              return line;
          }
      });
  }
    render() {
    const {
      entities,
      challengesApp,
      content,
      updateFile,
      file,
      mode,
      showPreview,
      executeChallenge,
      submitChallenge,
      successMessage,
      isChallengeModalOpen,
      closeChallengeModal,
      output
    } = this.props;

    const challenge = entities.challenge[challengesApp.challenge];
    const lessonIndex = challengesApp.currentIndex;
    const challengeTitle = challenge ? challenge.title : '';
    const description = challenge ? challenge.description.join('\n') : '';
    const source = challenge ? challenge.source.join('\n') : '';

    return (
      <div>
          {/* <SidePanel /> */}
          {/* <BugModal /> */}

          <div className="container main">
              <div className="row">
                  <div className="col-sm-10 col-sm-offset-1 col-xs-12 note-area" id="movie-frame">
                      <div className="card basecolor">
                          <div className="circle-button-left" onClick={ submitChallenge }><i className="fa fa-angle-left"></i></div>
                          <div className="circle-button-right" onClick={ submitChallenge }><i className="fa fa-angle-right"></i></div>
                          <div className="card-top mb-no-display"><span className="card-top-text">左の問題の答えを右のEditorに記入していきましょう。</span></div>
                          <div className="note-content">
                              {/* <LeftNote practiceModel= {practiceModel}/>
                              <RightNote /> */}
                              <div className="col-sm-6 left-note">
                                  <div className="code">
                                      <div className="code-title">問題</div>
                                      <pre>
                                          { source }
                                      </pre>
                                  </div>
                              </div>
                              <div className="col-sm-6 right-note">
                                  <div className="code black">
                                      <Editor
                                        content={ content }
                                        executeChallenge={ executeChallenge }
                                        mode={ mode }
                                        updateFile={ content => updateFile(content, file) }
                                      />
                                </div>
                            </div>
                          </div>
                          <div className="output">
                              <div className="col-sm-12">{this.nl2br(output)}</div>
                          </div>
                          <Bottom executeChallenge={ executeChallenge } />
                      </div>
                  </div>
              </div>
              <HintModal />
              <AnswerModal />
      </div>

    {/* <ClassicModal
      close={ closeChallengeModal }
      open={ isChallengeModalOpen }
      submitChallenge={ submitChallenge }
      successMessage={ successMessage }
    />           */}


        {/* { this.renderPreview(showPreview) } */}

      </div>
    );
  }
}

export default connect(mapStateToProps, bindableActions)(Challenge);
