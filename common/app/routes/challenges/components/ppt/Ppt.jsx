import React, { PropTypes } from 'react';
import { connect } from 'react-redux';
import { Col } from 'react-bootstrap';
import { createSelector } from 'reselect';

import PptFrame from './PptFrame.jsx';
import { resetUi } from '../../redux/actions';
import { updateTitle } from '../../../../redux/actions';
import { challengeSelector } from '../../redux/selectors';
//import HelpModal from './HelpModal.jsx';

const bindableActions = { resetUi, updateTitle };
const mapStateToProps = createSelector(
  challengeSelector,
  state => state.entities,
  state => state.challengesApp,
  state => state.challengesApp.shouldShowQuestions,
  ({ title }, entities, challengesApp, shouldShowQuestions) => ({
    title,
    entities,
    challengesApp,
    shouldShowQuestions
  })
);

// export plain component for testing
export class Ppt extends React.Component {
  static displayName = 'Ppt';

  static propTypes = {
    // actions
    resetUi: PropTypes.func,
    // challenge
    entities: PropTypes.object,
    challengesApp: PropTypes.object,
    // ui
    title: PropTypes.string,
    params: PropTypes.object,
    shouldShowQuestions: PropTypes.bool,
    updateTitle: PropTypes.func
  };

  componentWillMount() {
    const { updateTitle, title } = this.props;
    updateTitle(title);
  }

  componentWillUnmount() {
    this.props.resetUi();
  }

  componentWillReceiveProps({ title }) {
    if (this.props.title !== title) {
      this.props.resetUi();
    }
  }

  render() {
      const {
        title,
        entities,
        challengesApp,
      } = this.props;

    const challenge = entities.challenge[challengesApp.challenge];
    const lessonIndex = challengesApp.currentIndex;
    const challengeTitle = challenge.title;
    const description = challenge.description.join('\n');

    return (
      <div>
          <PptFrame />
          {/* <HelpModal /> */}
        </div>


    );
  }
}

// export redux aware component
export default connect(
  mapStateToProps,
  bindableActions
)(Ppt);
