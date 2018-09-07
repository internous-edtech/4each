import React, { PropTypes } from 'react';
import { Button, HelpBlock, FormControl, FormGroup } from 'react-bootstrap';
import { LinkContainer } from 'react-router-bootstrap';
import { reduxForm } from 'redux-form';
import { isEmail } from 'validator';
import { getValidationState } from '../../../../utils/form';
import { updateMyEmail } from '../../redux/actions';

const actions = {
  updateMyEmail
};
const fields = [
  'email',
  'duplicate'
];
const validateFields = ({ email, duplicate }) => {
  const errors = {};
  if (!isEmail('' + email)) {
    errors.email = 'This email is invalid.';
  }
  if (duplicate && email !== duplicate) {
    errors.duplicate = 'This email does not match the one above.';
  }
  return errors;
};
const mapStateToProps = state => {
  const {
    app: { user: username },
    entities: { user: userMap }
  } = state;
  const { email, emailVerified } = userMap[username] || {};
  return {
    initialValues: { email },
    isEmailThere: !!email,
    isVerified: !!emailVerified
  };
};

export class LogoutConfirm extends React.Component {
  constructor(...props) {
    super(...props);
    this.handleSubmit = this.handleSubmit.bind(this);
  }
  static displayName = 'LogoutConfirm';
  static propTypes = {
    isEmailThere: PropTypes.bool,
    isVerified: PropTypes.bool,
    fields: PropTypes.object.isRequired,
    submitting: PropTypes.bool,
    handleSubmit: PropTypes.func.isRequired,
    updateMyEmail: PropTypes.func.isRequired
  };

  handleSubmit(e) {
    e.preventDefault();
    this.props.handleSubmit(({ email }) => this.props.updateMyEmail(email))(e);
  }

  render() {
    const {
      isEmailThere,
      isVerified,
      fields: { email, duplicate },
      submitting
    } = this.props;
    const buttonCopy = !isEmailThere || isVerified ?
      'Update my Email' :
      'Verify Email';
    return (
        <div className="login-area card col-sm-4 col-sm-offset-4">
              <div className="card-header">本当に退会しますか？</div>
              <img className="card-prof-image" src="https://gravatar.com/avatar/55502f40dc8b7c769880b10874abc9d0?s=200&amp;d=retro" />
              <h1 className="card-name">{email.value}</h1>
              <div className="space-10"></div>
              <a href="/logout">
                  <div className="card-button block-center">退会する</div>
              </a>
              <div className="space-10"></div>
          </div>
    );
  }
}

export default reduxForm(
  {
    form: 'logout-confirm',
    fields,
    validate: validateFields
  },
  mapStateToProps,
  actions
)(LogoutConfirm);
