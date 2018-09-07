import React, { PropTypes } from 'react';
import { Button, Modal } from 'react-bootstrap';
import PureComponent from 'react-pure-render/component';
import FontAwesome from 'react-fontawesome';

const propTypes = {
  close: PropTypes.func,
  open: PropTypes.bool.isRequired,
  successMessage: PropTypes.string.isRequired
};

export default class ClassicModal extends PureComponent {
  constructor(...props) {
    super(...props);
    this.handleKeyDown = this.handleKeyDown.bind(this);
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
      successMessage
    } = this.props;
    return (
      <Modal
        animation={ true }
        dialogClassName='challenge-success-modal'
        keyboard={ true }
        onHide={ close }
        onKeyDown={ this.handleKeyDown }
        show={ open }
        >
        <Modal.Header
          className='challenge-list-header'
          closeButton={ true }
          >
          <Modal.Title>{ successMessage }</Modal.Title>
        </Modal.Header>
        <Modal.Body>
          <div className='text-center'>
            <div className='row'>
              <div>
                <FontAwesome
                  className='completion-icon text-primary'
                  name='check-circle'
                />
              </div>
            </div>
          </div>
        </Modal.Body>
        <Modal.Footer>
          <Button
            block={ true }
            bsSize='large'
            bsStyle='primary'
            >
            Submit and go to next challenge
          </Button>
        </Modal.Footer>
      </Modal>
    );
  }
}

ClassicModal.displayName = 'ClassicModal';
ClassicModal.propTypes = propTypes;
