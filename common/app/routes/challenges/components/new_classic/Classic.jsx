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
import ResetModal from '../Reset-Modal.jsx';

import Footer from './Footer.jsx';

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

import * as jsDiff from 'diff';

import Note from './Note.jsx';

const title = 'Note';


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
    successMessage
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
    updateSuccessMessage: PropTypes.func
  };

  constructor(props) {
    super(props);
    this.state = {
      taskEditorHTML: [this.props.content],
      practiceEditorHTML: [],
      practiceCode: '',
      openResetModal: false,
      openSuccessModal: false
    };
    this.handlePracticeEditorChange = this.handlePracticeEditorChange.bind(this);
    this.runTest = this.runTest.bind(this);
    this.resetChallenge = this.resetChallenge.bind(this);
    this.openResetModal = this.openResetModal.bind(this);
    this.closeResetModal = this.closeResetModal.bind(this);
    this.openSuccessModal = this.openSuccessModal.bind(this);
    this.closeSuccessModal = this.closeSuccessModal.bind(this);
  }

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
    return null;
  }

  resetChallenge() {
    this.setState({
      taskEditorHTML: [this.props.content],
      practiceEditorHTML: [],
      practiceCode: ''
    });
    this.closeResetModal();
  }

  openResetModal() {
    this.setState({
      openResetModal: true
    });
  }

  closeResetModal() {
    this.setState({
      openResetModal: false
    });
  }

  openSuccessModal() {
    this.setState({
      openSuccessModal: true
    });
  }

  closeSuccessModal() {
    this.setState({
      openSuccessModal: false
    });
  }

  render() {
    var {
      id,
      entities,
      challengesApp,
      content,
      mode,
      showPreview,
      executeChallenge,
      submitChallenge,
      successMessage,
      isChallengeModalOpen,
      closeChallengeModal,
      updateFile,
      file
    } = this.props;

    showPreview = false;
    const challenge = entities.challenge[challengesApp.challenge];
    const parent = entities.block[challenge.block];
    const lessonIndex = challengesApp.currentIndex;
    const title = challenge.title;
    const description = challenge.description.join('\n');

    return (
      <div>
        <Note title={title} index={lessonIndex} description={description} />
        <Footer />
      </div>
    );
  }

  handlePracticeEditorChange(e) {
    this.setState({ practiceCode: e }, () => {
      // console.log(this.state.practiceCode, 'diff');
    });
  }

  runTest() {
    var orig = this.props.content;
    var practiceCode = this.state.practiceCode;

    // console.log(practiceCode, 'diff');

    var diffOpt = {
      ignoreWhitespace: true
    };

    var diff = jsDiff.diffLines(orig, practiceCode, diffOpt);

    var taskEditorHTML = [];
    var practiceEditorHTML = [];

    var countDiff = 0;

    diff.forEach(x => {
      if (x.added) {
        if (x.value == '\n')
          practiceEditorHTML.push(x.value);
        else {
          practiceEditorHTML.push(<span style={{ color: 'red' }}>{x.value}</span>);
          countDiff++;
        }
        // console.log(x.value, 'added', 'diff');
      } else if (x.removed) {
        if (x.value == '\n')
          taskEditorHTML.push(x.value);
        else {
          taskEditorHTML.push(<span style={{ color: 'red' }}>{x.value}</span>);
          countDiff++;
        }
        // console.log(x.value, 'removed');
      } else {
        taskEditorHTML.push(x.oldValue);
        practiceEditorHTML.push(x.value);

        // console.log(x.value, 'equal', 'diff');
      }
    });

    this.setState({
      practiceEditorHTML: practiceEditorHTML,
      taskEditorHTML: taskEditorHTML
    }, () => {
      console.log(this.state.practiceCode, 'practiceCode', 'diff');
      console.log(this.state.taskEditorHTML, 'taskEditor', 'diff');
      console.log(this.state.practiceEditorHTML, 'praticeEditor');
    });

    if (countDiff === 0) {
      this.setState({
        openSuccessModal: true
      });
    }
  }
}

export default connect(mapStateToProps, bindableActions)(Challenge);
