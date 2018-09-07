import { Observable } from 'rx';
import React, { PropTypes } from 'react';
import { connect } from 'react-redux';
import { Button, Col, Row, Radio, Alert, Label } from 'react-bootstrap';
import { createSelector } from 'reselect';
import debug from 'debug';

import { submitChallenge } from '../../redux/actions';
import { challengeSelector } from '../../redux/selectors';
import { makeToast } from '../../../../toasts/redux/actions';

const log = debug('fcc:questions');

const mapStateToProps = createSelector(
  challengeSelector,
  ({
    challenge: {
      quiz
    }
  }) => ({
    quiz
  })
);

function scrollTo (element, to, duration) {
      if (duration <= 0) return;
      var difference = to - element.scrollTop;
      var perTick = difference / duration * 10;

      setTimeout(function() {
          element.scrollTop = element.scrollTop + perTick;
          if (element.scrollTop === to) return;
          scrollTo(element, to, duration - 10);
      }, 10);
 }

export class Questions extends React.Component {
  static propTypes = {
    // actions
    submitChallenge: PropTypes.func,
    // ui
    quiz: PropTypes.array
  };

  constructor(...props) {
    super(...props);
    this._checkAnswer = this._checkAnswer.bind(this);
    this._onChange = this._onChange.bind(this);
    this._scrollToErrorElement = this._scrollToErrorElement.bind(this);
    this._hasError = this._hasError.bind(this);

    this.state = {
        errors : new Array(this.props.quiz.length),
        answers : new Array(this.props.quiz.length)
    };

  }

  handleError: log;

  _onChange(event){
        let answers = this.state.answers;
        const index = parseInt(event.target.getAttribute("data-qindex"),10) - 1;
        const value =event.target.value;
        answers[index] = value;
        this.setState({ answers });
  }

  renderChoices(choices,qindex) {
      return choices.map((label,index) =>
      <li className={'challenges-quiz-choices-list'} key={`list_${qindex}_${index}`}>
          <Radio
              className={'challenges-quiz-choices-radio'}
              onChange={this._onChange}
              key={`radio_${qindex}_${index}`}
              value={index}
              name={`question${qindex}`}
              data-qindex={qindex}
          >{label}</Radio>
      </li>
      );
  }

  renderQuestion(rows,index) {
      let alert = this.state.errors[index] ? <Label bsStyle='danger'>不正解</Label> : '';

      return <div key={`row_${index}`} className={['challenges-quiz-question-wrap', this.state.errors[index] ? 'challenges-quiz-question-error' : ''].join(' ')}>
          {alert}
          <p className='lead'>問題{index+1}.<span className='challenges-quiz-question-title'>{rows.question}</span></p>
          <ul className='challenges-quiz-choices-wrap'>{ this.renderChoices(rows.choices,index+1) }</ul>
      </div>
  }

  renderQuiz(quiz) {
      return quiz.map( (rows, index) => {
          return this.renderQuestion(rows,index);
      });
  }

  _scrollToErrorElement(errors) {
      const errorElementOffsetTop = window.document.querySelectorAll('.challenges-quiz-question-wrap')[errors.indexOf(true)].offsetTop;

      scrollTo(window.document.body, errorElementOffsetTop, 400);
  }

  _checkAnswer() {
      const {
          submitChallenge,
          quiz,
      } = this.props;

      let errors = quiz.map((item,index) => {
          return item.answer != this.state.answers[index];
      });

      this.setState({errors})

      const hasError = this._hasError(errors);

      if( !hasError ){
          submitChallenge()
      } else {
          this._scrollToErrorElement(errors);
      }
  }

  _hasError(errors = []){
      if(errors.length){
          return errors.some(isError => {return isError;});
      }
      return this.state.errors.some(isError => {return isError;});
  }

  render() {
    const {
      quiz = [],
    } = this.props;

    const alert = this._hasError() ? <Alert bsStyle='danger'>不正解の問題があります。</Alert> : '';

    return (
      <Col xs={ 12 }>
        <Row>
          <Col
            md={ 10 }
            mdOffset={ 1 }
            xs={ 12 }
            >
            {alert}
            { this.renderQuiz(quiz) }
            <div className='spacer' />
            <Button
              block={ true }
              bsSize='large'
              bsStyle='primary'
              onClick={ this._checkAnswer }
              >
              判定
            </Button>
            <div className='spacer' />
          </Col>
        </Row>
      </Col>
    );
  }
}

export default connect(
  mapStateToProps,
  { submitChallenge }
)(Questions);
