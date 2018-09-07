import React, { PropTypes } from 'react';
import ReactDom from 'react-dom';
import { createSelector } from 'reselect';
import { connect } from 'react-redux';
import PureComponent from 'react-pure-render/component';
import { Col, Row } from 'react-bootstrap';

import TestSuite from '../Test-Suite.jsx';
import Output from '../Output.jsx';
import ToolPanel from './Tool-Panel.jsx';
import { challengeSelector } from '../../redux/selectors';
import {
  openBugModal,
  updateHint,
  executeChallenge,
  unlockUntrustedCode
} from '../../redux/actions';
import { descriptionRegex } from '../../utils';
import { makeToast } from '../../../../toasts/redux/actions';

const mapDispatchToProps = {
  makeToast,
  executeChallenge,
  updateHint,
  openBugModal,
  unlockUntrustedCode
};
const mapStateToProps = createSelector(
  challengeSelector,
  state => state.app.windowHeight,
  state => state.app.navHeight,
  state => state.challengesApp.tests,
  state => state.challengesApp.output,
  state => state.challengesApp.hintIndex,
  state => state.challengesApp.isCodeLocked,
  state => state.challengesApp.helpChatRoom,
  (
    {
      challenge: {
        description,
        hints = []
      } = {},
      title
    },
    windowHeight,
    navHeight,
    tests,
    output,
    hintIndex,
    isCodeLocked,
    helpChatRoom
  ) => ({
    title,
    description,
    height: windowHeight - navHeight - 20,
    tests,
    output,
    hint: hints[hintIndex],
    isCodeLocked,
    helpChatRoom
  })
);

export class SidePanel extends PureComponent {
  static displayName = 'SidePanel';

  static propTypes = {
    description: PropTypes.arrayOf(PropTypes.string),
    height: PropTypes.number,
    helpChatRoom: PropTypes.string,
    hint: PropTypes.string,
    isCodeLocked: PropTypes.bool,
    output: PropTypes.string,
    tests: PropTypes.arrayOf(PropTypes.object),
    title: PropTypes.string,

    executeChallenge: PropTypes.func,
    openBugModal: PropTypes.func,
    makeToast: PropTypes.func,
    unlockUntrustedCode: PropTypes.func,
    updateHint: PropTypes.func,
    runTest: PropTypes.func,
    resetChallenge: PropTypes.func
  };

  renderDescription(description = [ 'Happy Coding!' ]) {
    return description.map((line, index) => {
      if (descriptionRegex.test(line)) {
        return (
          <div
            dangerouslySetInnerHTML={{ __html: line }}
            key={ line.slice(-6) + index }
          />
        );
      }
      return (
        <p
          className='wrappable'
          dangerouslySetInnerHTML= {{ __html: line }}
          key={ line.slice(-6) + index }
        />
      );
    });
  }

  componentWillReceiveProps(nextProps) {
    if (this.props.title !== nextProps.title) {
      ReactDom.findDOMNode(this).scrollTop = 0;
    }
  }

  render() {
    const {
      title,
      description,
      height,
      tests = [],
      output,
      hint,
      executeChallenge,
      updateHint,
      makeToast,
      helpChatRoom,
      openBugModal,
      isCodeLocked,
      unlockUntrustedCode,
      resetChallenge,
      runTest
    } = this.props;
    const style = {};
    if (height) {
      style.height = height + 'px';
    }
    return (
      <div
        className='challenges-instructions-panel'
        ref='panel'
        style={ style }
        >
        <div>
          <h4 className='text-center challenge-instructions-title'>
            { title || 'Happy Coding!' }
          </h4>
          <hr />
          <Row>
            <Col
              className='challenge-instructions'
              xs={ 12 }
              >
              { this.renderDescription(description) }
            </Col>
          </Row>
        </div>
        <ToolPanel
          executeChallenge={ executeChallenge }
          helpChatRoom={ helpChatRoom }
          hint={ hint }
          isCodeLocked={ isCodeLocked }
          makeToast={ makeToast }
          openBugModal={ openBugModal }
          resetChallenge={resetChallenge}
          runTest = {runTest}
          unlockUntrustedCode={ unlockUntrustedCode }
          updateHint={ updateHint }
        />
      </div>
    );
  }
}

export default connect(
  mapStateToProps,
  mapDispatchToProps
)(SidePanel);
