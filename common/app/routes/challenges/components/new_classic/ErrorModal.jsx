import React, { PropTypes } from 'react';
import { Button, Modal } from 'react-bootstrap';
import FontAwesome from 'react-fontawesome';

const propTypes = {
  close: PropTypes.func,
  open: PropTypes.bool.isRequired,
  title: PropTypes.string.isRequired,
  tryMessage: PropTypes.string.isRequired,
  errorMessage: PropTypes.string.isRequired
};

export default class ErrorModal extends React.Component {
  constructor(...props) {
    super(...props);
    this.handleKeyDown = this.handleKeyDown.bind(this);
    this.close = this.close.bind(this);
  }

  close() {
    this.props.close();
  }

  handleKeyDown(e) {
    const { open } = this.props;
    if (
      e.keyCode === 13 &&
      (e.ctrlKey || e.meta) &&
      open
      ) {
        e.preventDefault();
      }
  }

  render() {
    const {
      close,
      open,
      errorMessage,
      tryMessage,
      title
    } = this.props;

    return (
      <Modal
        animation={ true }
        dialogClassName='challenge-error-modal'
        keyboard={ true }
        onHide={ close }
        onKeyDown={ this.handleKeyDown }
        show={ open }
        >
        <Modal.Header
          className='challenge-list-header'
          closeButton={ true }
          >
          <Modal.Title>{ title }</Modal.Title>
        </Modal.Header>
        <Modal.Body>
          <div className='text-center'>
            <div className='row'>
              {errorMessage}
            </div>
          </div>
        </Modal.Body>
        <Modal.Footer>
          <Button
            block={ true }
            bsSize='large'
            bsStyle='primary'
            onClick={this.close}
            >
            { tryMessage }
          </Button>
        </Modal.Footer>
      </Modal>
    );
  }
}

ErrorModal.displayName = 'ErrorModal';
ErrorModal.propTypes = propTypes;
