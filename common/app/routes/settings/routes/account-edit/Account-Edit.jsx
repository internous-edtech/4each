import React, { PropTypes } from 'react';
import { Button, HelpBlock, FormControl, FormGroup } from 'react-bootstrap';
import { LinkContainer } from 'react-router-bootstrap';
import { reduxForm } from 'redux-form';
import { isEmail, isInt } from 'validator';
import { getValidationState } from '../../../../utils/form';
import { updateMyAccount } from '../../redux/actions';

const mapDispatchToProps = {
  updateMyAccount
};
const fields = [
  'email',
  'name',
  'milestone'
];
const validateFields = ({ email, name, milestone }) => {
  const errors = {};
  if (!isEmail('' + email)) {
    errors.email = 'メールアドレスの形式が正しくありません。';
  }

  if(name == ""){
      errors.name = 'ニックネームが入力されていません。';
  }

  if(milestone == ""){
      errors.milestone = '完了目標日数が入力されていません。';
  }

   if (!isInt("" + milestone)) {
      errors.milestone = '完了目標日数には数値を入力してください。';
  }

  // if (duplicate && email !== duplicate) {
  //   errors.duplicate = 'This email does not match the one above.';
  // }
  return errors;
};
const mapStateToProps = state => {
  const {
    app: { user: username },
    entities: { user: userMap }
  } = state;
  const { email, name, milestone, emailVerified } = userMap[username] || {};
  return {
    username: { username },
    initialValues: { email, name, milestone },
    isEmailThere: !!email,
    isVerified: !!emailVerified
  };
};

export class AccountEdit extends React.Component {
  constructor(...props) {
    super(...props);
    this.handleSubmit = this.handleSubmit.bind(this);
    this.handleChange = this.handleChange.bind(this);
  }
  static displayName = 'AccountEdit';
  static propTypes = {
    username: PropTypes.object,
    isEmailThere: PropTypes.bool,
    isVerified: PropTypes.bool,
    fields: PropTypes.object.isRequired,
    submitting: PropTypes.bool,
    handleSubmit: PropTypes.func.isRequired,
    updateMyAccount: PropTypes.func.isRequired
  };

  handleSubmit(e) {
    e.preventDefault();
    this.props.handleSubmit(({ email, name, milestone }) => this.props.updateMyAccount({email,name,milestone}))(e);
  }
  handleChange(e) {
    e.preventDefault();
    this.props.fields[e.target.name].onChange(e);
  }
  render() {
    const {
      isEmailThere,
      isVerified,
      username,
      fields: { email, name, milestone },
      submitting
    } = this.props;

    const buttonCopy = !isEmailThere || isVerified ?
      'Update my Email' :
      'Verify Email';

    return (
        <div className="login-area card col-sm-4 col-sm-offset-4">
            <div className="card-header">アカウント編集</div>
            <img className="card-prof-image" src="https://gravatar.com/avatar/55502f40dc8b7c769880b10874abc9d0?s=200&amp;d=retro" />
            <form className="card-form" name='update-account' onSubmit={ this.handleSubmit }><input type="hidden" name="_csrf" />
                <h2 className="card-sub-title">ニックネーム</h2>
                <div className="form-group"><input className="form-control" type="text" placeholder="ニックネーム" name="name" id="name" value={name.value} onChange={ this.handleChange } /></div>
                {
                  !name.error ?
                    null :
                    <HelpBlock bsClass="text-danger">{ name.error }</HelpBlock>
                }
                <h2 className="card-sub-title">登録メールアドレス</h2>
                <div className="form-group"><input className="form-control" type="email" placeholder="メールアドレス" name="email" id="email" value={email.value} onChange={ this.handleChange } /></div>
                {
                  !email.error ?
                    null :
                    <HelpBlock bsClass="text-danger">{ email.error }</HelpBlock>
                }
                {/* <h2 className="card-sub-title">登録パスワード</h2>
                <div className="form-group"><input className="form-control" type="password" placeholder="パスワード" name="password" id="password" value="password.value" onChange={ this.handleChange } /></div> */}
                <h2 className="card-sub-title">完了目標日数</h2>
                <div className="form-group"><input className="form-control" type="number" placeholder="60" name="milestone" id="milestone" value={milestone.value} onChange={ this.handleChange } /></div>
                {
                  !milestone.error ?
                    null :
                    <HelpBlock bsClass="text-danger">{ milestone.error }</HelpBlock>
                }
                <div className="space-10"></div>
                <input className="btn" type="submit" value="保存する" />
                <div className="space-10"></div>
            </form>
        </div>
    );
  }
}

export default reduxForm(
  {
    form: 'account-edit',
    fields,
    validate: validateFields
  },
  mapStateToProps,
  mapDispatchToProps
)(AccountEdit);
