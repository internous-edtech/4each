import React, { PropTypes } from 'react';
import { connect } from 'react-redux';
import { Button, Col, Row } from 'react-bootstrap';
import { createSelector } from 'reselect';
import debug from 'debug';

import { submitChallenge } from '../../redux/actions';
import { challengeSelector } from '../../redux/selectors';

const log = debug('fcc:videos');

const mapStateToProps = createSelector(
  challengeSelector,
  state => state.entities,
  ({
    challenge: {
      id = 'foo',
      dashedName,
      description,
      challengeSeed: [ iframeSrc ] = [ '1' ]
    }
  }, entities) => ({
    id,
    iframeSrc,
    dashedName,
    description,
    entities
  })
);

const embedOpts = {
  width: '1080',
  height: '555'
};

export class PptFrame extends React.Component {
  static displayName = 'PptFrame';

  static propTypes = {
    // actions
    submitChallenge: PropTypes.func,
    // challenge
    entities: PropTypes.object,
    // ui
    id: PropTypes.string,
    iframeSrc: PropTypes.string,
    description: PropTypes.array,
    dashedName: PropTypes.string
  };

  constructor(props) {
      super(props);
      this.onNextChallenge = this.onNextChallenge.bind(this);
      this.onPreviousChallenge = this.onPreviousChallenge.bind(this);
  }
  shouldComponentUpdate(nextProps) {
    const { props } = this;
    return nextProps.id !== props.id;
  }

  handleError: log;

  renderTranscript(transcript, dashedName) {
    return transcript.map((line, index) => (
      <p
        className='lead text-left'
        dangerouslySetInnerHTML={{__html: line}}
        key={ dashedName + index }
      />
    ));
  }

  onPreviousChallenge(){
      const { submitChallenge } = this.props;
      return submitChallenge(-1);
  }

  onNextChallenge() {
      const { submitChallenge } = this.props;
      return submitChallenge(1);
  }

  render() {
    const {
      id,
      iframeSrc,
      description = [],
      submitChallenge,
      entities
    } = this.props;

    const challenge = entities.challenge[entities.challengeIdToName[id]];

    let prevPageButton = null
    let nextPageButton = null

    console.log(challenge.challengeType,'challenge.challengeType');
    if(iframeSrc.match(/vimeo/)){
        prevPageButton = <span className="prev-text">前の動画へ</span>
        nextPageButton = <span className="next-text">次の動画へ</span>
    } else {
        prevPageButton = <span className="prev-text">前のスライドへ</span>
        nextPageButton = <span className="next-text">次のスライドへ</span>
    }

    return (
      <div className="container main">
          <div className="row" id="movie-frame">
              <div className="col-sm-10 col-sm-offset-1 slide-area" id="slide-area">
                  <div className="card basecolor">
                      <div className={"circle-button-left"} onClick={ this.onPreviousChallenge }><i className="fa fa-angle-left"></i>{ prevPageButton }</div>
                      <div className="circle-button-right" onClick={ this.onNextChallenge }><i className="fa fa-angle-right"></i>{ nextPageButton }</div>

                      <iframe
                        className=''
                        id={ id }
                        src={ iframeSrc }
                        width= { '100%' }
                        height= { embedOpts.height }
                        frameBorder='0'
                      />

                  </div>
              </div>
          </div>
      </div>

    );
  }
}

export default connect(
  mapStateToProps,
  { submitChallenge }
)(PptFrame);
