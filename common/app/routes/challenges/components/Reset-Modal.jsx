import React, { PropTypes } from 'react';
import { Button, Modal } from 'react-bootstrap';
import PureComponent from 'react-pure-render/component';

const propTypes = {
  close: PropTypes.func,
  open: PropTypes.bool.isRequired,
  confirm: PropTypes.func.isRequired
};

export default class ResetModal extends PureComponent {
  constructor(...props) {
    super(...props);
    this.handleKeyDown = this.handleKeyDown.bind(this);
  }

  handleKeyDown(e) {
    const { open, confirm } = this.props;
    if (
      e.keyCode === 13 &&
      (e.ctrlKey || e.meta) &&
      open
      ) {
        e.preventDefault();
        confirm();
      }
  }

  render() {
    const {
      close,
      open,
      confirm
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
          <Modal.Title>Reset</Modal.Title>
        </Modal.Header>
        <Modal.Body>
          <div className='text-center'>
            <div className='row'>
              <div>
                <h3>Are you sure to reset your challenge editor?</h3>
              </div>
            </div>
          </div>
        </Modal.Body>
        <Modal.Footer>
          <Button
            block={ true }
            bsSize='large'
            bsStyle='primary'
            onClick={ close }
            >
            No
          </Button>
          <Button
            block={ true }
            bsSize='large'
            bsStyle='primary'
            onClick={ confirm }
            >
            Confirm
          </Button>
        </Modal.Footer>
      </Modal>
    );
  }
}

ResetModal.displayName = 'ResetModal';
ResetModal.propTypes = propTypes;
