import React, { PropTypes } from 'react';
import { connect } from 'react-redux';
import { contain } from 'redux-epic';
import { createSelector } from 'reselect';
import { compose } from 'redux';

import { Row } from 'react-bootstrap';

import SKWave from '../../../components/SK-Wave.jsx';

import { userSelector } from '../../../redux/selectors.js';
import { updateTitle } from '../../../redux/actions.js';
import { fetchChallenges } from '../../challenges/redux/actions';

import Board from './Board.jsx';
import Footer from './Footer.js';

const bindableActions = { updateTitle };
const fetchOptions = {
  fetchAction: 'fetchChallenges',
  isPrimed({ superBlocks }) {
    return Array.isArray(superBlocks) && superBlocks.length > 1;
  }
};

const mapStateToProps = createSelector(
  userSelector,
  state => state.app.isSignInAttempted,
  state => state.challengesApp.superBlocks,
  state => state.entities,
  (
    {
      user: {
        username,
        email,
        isLocked,
        isGithubCool,
        isTwitter,
        isLinkedIn,
        sendMonthlyEmail,
        sendNotificationEmail,
        sendQuincyEmail
      }
    },
    isSignInAttempted,
    superBlocks,
    entities
  ) => ({
    showLoading: isSignInAttempted,
    username,
    email,
    isLocked,
    isGithubCool,
    isTwitter,
    isLinkedIn,
    sendMonthlyEmail,
    sendNotificationEmail,
    sendQuincyEmail
  })
);
const propTypes = {
  children: PropTypes.element,
  username: PropTypes.string,
  isLocked: PropTypes.bool,
  isGithubCool: PropTypes.bool,
  isTwitter: PropTypes.bool,
  isLinkedIn: PropTypes.bool,
  showLoading: PropTypes.bool,
  email: PropTypes.string,
  sendMonthlyEmail: PropTypes.bool,
  sendNotificationEmail: PropTypes.bool,
  sendQuincyEmail: PropTypes.bool,
  updateTitle: PropTypes.func.isRequired,
  lang: PropTypes.string,
  initialLang: PropTypes.string,
  updateMyLang: PropTypes.func
};

export class Settings extends React.Component {
  constructor(...props) {
    super(...props);
    this.updateMyLang = this.updateMyLang.bind(this);
  }

  updateMyLang(e) {
    e.preventDefault();
    const lang = e.target.value;
    this.props.updateMyLang(lang);
  }

  componentWillMount() {
    // this.props.updateTitle('Settings');
  }

  render() {
    const {
      children,
      username,
      isLocked,
      isGithubCool,
      isTwitter,
      isLinkedIn,
      showLoading,
      email,
      sendMonthlyEmail,
      sendNotificationEmail,
      sendQuincyEmail
    } = this.props;

    if (!username && !showLoading) {
      return <SKWave />;
    }

    if (children) {
      return (
          <div>
              <div className="container main">
                  <Row />
                  { children }
              </div>
              <Footer/>
          </div>
      );
    }
    return (
      <div>
        <Board/>
      </div>
    );
  }
}

Settings.displayName = 'Settings';
Settings.propTypes = propTypes;

export default connect(
  mapStateToProps,bindableActions
)(Settings);
