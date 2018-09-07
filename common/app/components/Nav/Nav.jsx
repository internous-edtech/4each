import React, { PropTypes } from 'react';
import ReactDOM from 'react-dom';
import { LinkContainer } from 'react-router-bootstrap';
import {
  Col,
  MenuItem,
  Nav,
  NavDropdown,
  NavItem,
  Navbar,
  NavbarBrand
} from 'react-bootstrap';
import noop from 'lodash/noop';

import navLinks from './links.json';
import AvatarPointsNavItem from './Avatar-Points-Nav-Item.jsx';

const toggleButtonChild = (
  <Col xs={ 12 }>
    <span className="sr-only">Toggle navigation</span><span className="icon-bar"></span><span className="icon-bar"></span><span className="icon-bar"></span>
  </Col>
);

function handleNavLinkEvent(content) {
  this.props.trackEvent({
    category: 'Nav',
    action: 'clicked',
    label: `${content} link`
  });
}

const propTypes = {
  closeDropdown: PropTypes.func.isRequired,
  isNavDropdownOpen: PropTypes.bool,
  loadCurrentChallenge: PropTypes.func.isRequired,
  openDropdown: PropTypes.func.isRequired,
  picture: PropTypes.string,
  points: PropTypes.number,
  showLoading: PropTypes.bool,
  signedIn: PropTypes.bool,
  trackEvent: PropTypes.func.isRequired,
  updateNavHeight: PropTypes.func,
  username: PropTypes.string
};

export default class FCCNav extends React.Component {
  constructor(...props) {
    super(...props);
    this.handleMapClickOnMap = this.handleMapClickOnMap.bind(this);
    this.handleLogoClick = this.handleLogoClick.bind(this);
    this.gotoPractice = this.gotoPractice.bind(this);

    navLinks.forEach(({ content }) => {
      this[`handle${content}Click`] = handleNavLinkEvent.bind(this, content);
    });
  }

  componentWillMount() {
      this.inChallengePage = !!this.props.params.block && !!this.props.params.dashedName;
  }
  componentDidMount() {
    const navBar = ReactDOM.findDOMNode(this);
    this.props.updateNavHeight(navBar.clientHeight);
    this.pathname = window.location.pathname;
  }

  handleMapClickOnMap(e) {
    e.preventDefault();
    this.props.trackEvent({
      category: 'Nav',
      action: 'clicked',
      label: 'map clicked while on map'
    });
  }

  handleNavClick() {
    this.props.trackEvent({
      category: 'Nav',
      action: 'clicked',
      label: 'map clicked while on map'
    });
  }

  handleLogoClick(e) {
    // e.preventDefault();
    // this.props.loadCurrentChallenge();
  }

  renderLink(isNavItem, { isReact, isDropdown, content, link, links, target }) {
    const Component = isNavItem ? NavItem : MenuItem;
    const {
      isNavDropdownOpen,
      openDropdown,
      closeDropdown
    } = this.props;

    if (isDropdown) {
      // adding a noop to NavDropdown to disable false warning
      // about controlled component
      return (
        <NavDropdown
          id={ `nav-${content}-dropdown` }
          key={ content }
          noCaret={ true }
          onClick={ openDropdown }
          onClose={ closeDropdown }
          onMouseEnter={ openDropdown }
          onMouseLeave={ closeDropdown }
          onToggle={ noop }
          open={ isNavDropdownOpen }
          title={ content }
          >
          { links.map(this.renderLink.bind(this, false)) }
        </NavDropdown>
      );
    }
    if (isReact) {
      return (
        <LinkContainer
          key={ content }
          onClick={ this[`handle${content}Click`] }
          to={ link }
          >
          <Component
            target={ target || null }
            >
            { content }
          </Component>
        </LinkContainer>
      );
    }
    return (
      <Component
        href={ link }
        key={ content }
        onClick={ this[`handle${content}Click`] }
        target={ target || null }
        >
        { content }
      </Component>
    );
  }


  isChallengePage() {
      if(this.inChallengePage){
          return true;
      }
      return false;
  }
  isTopPage(){
      if(!this.pathname){
          return false;
      }

      if(this.pathname.match(/settings\/?$/)){
          return true;
      }
      return false;
  }
  isMapPage(){
      if(!this.pathname){
          return false;
      }

      if(this.pathname.match(/map\/?$/)){
          return true;
      }
      return false;
  }
  renderFukidashi(){
      if(this.isTopPage()){
          return [
            <li className="fukidashi">絶対webサービスを３ヶ月以内にローンチするぞ！！</li>,
            <li className="fukidashi-after mb-no-display">&nbsp;</li>
          ]
      }

  }
  goto(path) {
      window.location.href = path
  }
  gotoLessons() {
      // TODO
      // データ構造、チャレンジの構造が変わると動かなくなる可能性
      let href = window.location.href.split('/');
      href.pop();
      let path = href.pop();
      let superBlock = path.match(/(.*?)\-lesson(\d+)/)
      let lessonNum = parseInt(superBlock[2],10)
      window.location.href = `/js/lessons/${superBlock[1]}`
  }
  gotoSlide(){
      // TODO
      // データ構造、チャレンジの構造が変わると動かなくなる可能性
      let href = window.location.href.split('/');
      href.pop();
      let path = href.pop();
      let superBlock = path.match(/(.*?)\-lesson(\d+)/)
      let lessonNum = parseInt(superBlock[2],10)
      window.location.href = `/ja/challenges/${path}/${superBlock[1]}${lessonNum}2`
  }
  gotoVideo(){
      // TODO
      // データ構造、チャレンジの構造が変わると動かなくなる可能性
      let href = window.location.href.split('/');
      href.pop();
      let path = href.pop();
      let superBlock = path.match(/(.*?)\-lesson(\d+)/)
      let lessonNum = parseInt(superBlock[2],10)
      window.location.href = `/ja/challenges/${path}/${superBlock[1]}${lessonNum}1`
  }
  gotoNote(){
      // TODO
      // データ構造、チャレンジの構造が変わると動かなくなる可能性
      let href = window.location.href.split('/');
      href.pop();
      let path = href.pop();
      let superBlock = path.match(/(.*?)\-lesson(\d+)/)
      let lessonNum = parseInt(superBlock[2],10)
      window.location.href = `/ja/challenges/${path}/${superBlock[1]}${lessonNum}3`
  }
  gotoPractice(){
      // TODO
      // データ構造、チャレンジの構造が変わると動かなくなる可能性
      let href = window.location.href.split('/');
      href.pop();
      let path = href.pop();
      let superBlock = path.match(/(.*?)\-lesson(\d+)/)
      let lessonNum = parseInt(superBlock[2],10)
      const challenges_array = Object.keys(this.props.challengesApp.challenge).map((key, index) => {
          return this.props.challengesApp.challenge[key];
      }).filter((item) => item.name.match(superBlock[1]));
      const this_lessons = challenges_array.filter((item) => item.order+1 == lessonNum );
      const practice_challengs = this_lessons.filter((item) => item.challengeType == 9);
      if(practice_challengs[0]){
          window.location.href = `/ja/challenges/${path}/${practice_challengs[0].name}`
      }
  }
  renderLessonMenu() {
      if(!this.isChallengePage()){
          return <NavItem id="nav-map-btn" href="/ja/map">Map</NavItem>
      }

          return (
              [
                <li onClick={this.gotoLessons.bind(null, '')}>
                   <div className="topbar-icon">
                     <img src="/img/menu_white.png" />
                     <p>一覧へ</p>
                   </div>
                 </li>
,
               <li onClick={this.goto.bind(null, '/ja/help')}>
                 <div className="topbar-icon">
                   <img src="/img/question_white.png" />
                   <p>よくある質問</p>
                 </div>
               </li>
,
                <li onClick={this.gotoSlide.bind(null, '')}>
                 <div className="topbar-icon">
                   <img src="/img/presen_white.png" />
                   <p>スライド学習</p>
                 </div>
               </li>
,

                <li onClick={this.gotoVideo.bind(null, '')}>
                 <div className="topbar-icon">
                   <img src="/img/movie_white.png" />
                   <p>動画学習</p>
                 </div>
               </li>
               ,

               <li onClick={this.gotoNote.bind(null, '')}>
                <div className="topbar-icon">
                  <img src="/img/note_white.png" />
                  <p>写経</p>
                </div>
              </li>
              ,
             <li onClick={this.gotoPractice.bind(null, '')}>
              <div className="topbar-icon">
                <img src="/img/list_white.png" />
                <p>練習問題</p>
              </div>
            </li>
            ,
               <div className="clear pc-no-display"></div>
           ]
          )
  }
  renderSignIn(username, points, picture, showLoading, name) {
    if (showLoading) {
      return null;
    }
    if (username) {
      let image = <span><span className="topbar-image"></span><span className="topbar-name">{name ? name : username}</span></span>

      if(this.isChallengePage()){
          image = null;
      }

      if(this.isTopPage()){
          image = <span>
              <span className="pc-no-display">Shunsuke Takahashi</span>
             <span  className="topbar-image" style={{backgroundImage: "url('https://gravatar.com/avatar/55502f40dc8b7c769880b10874abc9d0?s=200&amp;d=retro)"}}></span>
         </span>
      }

      return (
        <NavDropdown title={ image ? image : "" } id="nav-dropdown">
            <MenuItem href={"/ja/settings/account"}>アカウント情報</MenuItem>
            <MenuItem divider />
            <MenuItem href="/ja/signout">ログアウト</MenuItem>
        </NavDropdown>
      );
    } else {
      return (
        <NavDropdown title={'ログイン'} id="nav-dropdown">
          <MenuItem href="/ja/signin">ログイン</MenuItem>
          <MenuItem divider />
          <MenuItem href="/ja/signup">新規登録</MenuItem>
        </NavDropdown>
      );
    }
  }

  render() {
    const {
      name,
      username,
      points,
      picture,
      showLoading
    } = this.props;

    return (
      <header>
      <Navbar
        className='nav-height'
        fixedTop={ this.isMapPage() }
        >
        <Navbar.Header>
          <Navbar.Toggle children={ toggleButtonChild } />
          <NavbarBrand>
            <a
              href='/ja/'
              onClick={ this.handleLogoClick }
              >
              <img
                alt='4each'
                className='img-responsive nav-logo'
                src='/img/logo.png'
              />
            </a>
          </NavbarBrand>
        </Navbar.Header>
        <Navbar.Collapse>
          <Nav
            className=''
            navbar={ true }
            pullRight={ true }
            >
              {/* navLinks.map(
                this.renderLink.bind(this, true)
              )
            } */}
            { this.renderFukidashi() }
            { this.renderLessonMenu(username) }
            { this.renderSignIn(username, points, picture, showLoading, name) }
          </Nav>
        </Navbar.Collapse>
      </Navbar>
    </header>
    );
  }
}

FCCNav.displayName = 'FCCNav';
FCCNav.propTypes = propTypes;
