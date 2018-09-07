import React from 'react';

class Footer extends React.Component {
  render() {
    return (
      <footer>
        <div className="container">
          <div className="row">
            <div className="col-sm-1 col-sm-offset-7"><a href="/ja/contact">お問合せ</a></div>
            <div className="col-sm-1"><a href="/ja/help">ヘルプ</a></div>
            <div className="col-sm-3">©2017 インターノウス株式会社 all rights reserved.</div>
          </div>
        </div>
      </footer>
    );
  }
}

export default Footer;
