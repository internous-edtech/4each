import React, { PropTypes } from 'react';
import { Button, HelpBlock, FormControl, FormGroup } from 'react-bootstrap';
import { LinkContainer } from 'react-router-bootstrap';
import { reduxForm } from 'redux-form';
import { connect } from 'react-redux';

const actions = {
};

const mapStateToProps = state => {
  const {
    app: { user: username },
    entities: { user: userMap }
  } = state;
  const { email, name, milestone } = userMap[username] || {};
  return { email, name, milestone, username };
};

export class Account extends React.Component {
  constructor(...props) {
    super(...props);
  }
  static displayName = 'Account';
  static propTypes = {
      email: PropTypes.string,
      name: PropTypes.string,
      milestone: PropTypes.number,
      username: PropTypes.string
  };

  componentDidMount (){
      const {username} = this.props;

      const s = document.createElement('script');
      s.type = 'text/javascript';
      s.async = true;
      s.innerHTML = `if(typeof require === "function"){
                _require  = require;
                require = null;
            }`
      this.instance.appendChild(s);

      $(function(){
          $.getScript( "/bower_components/d3/d3.min.js" )
          .done(function( script, textStatus ) {
              $.getScript( "/bower_components/cal-heatmap/cal-heatmap.min.js" )
              .done(function( script, textStatus ) {
                  $.ajax({"url": `/${username}/activity`, "type": "GET"}).done(function(data){
                      console.log(data)
                      setTimeout(function(){
                          var cal = new CalHeatMap();
                          var calendar = data.calender
                          cal.init({
                              itemSelector: "#cal-heatmap",
                              domain: "month",
                              subDomain: "x_day",
                              domainGutter: 10,
                              data: calendar,
                              cellSize: 15,
                              align: 'center',
                              cellRadius: 3,
                              cellPadding: 2,
                              tooltip: true,
                              range: 6,
                              start: new Date().setDate(new Date().getDate() - 150),
                              legendColors: ["#cccccc", "#215f1e"],
                              legend: [1, 2, 3],
                              label: {
                                  position: "top"
                              }
                          });
                          $('#longestStreak').text(data.longestStreak + " " + (data.longestStreak === 1 ? ' day' : ' days'))
                          $('#currentStreak').text(data.currentStreak + " " + (data.currentStreak === 1 ? ' day' : ' days'))
                      },1000)
                  })
              })
              .fail(function( jqxhr, settings, exception ) {
              });

          })
          .fail(function( jqxhr, settings, exception ) {
          });
      })
  }


  render() {
    const {
      email, name, milestone, username
    } = this.props;

    // FIXME
   let script = `
       console.log('s')

   `;

    return (
        <div>
        <div className="login-area card col-sm-4 col-sm-offset-4">
            <div className="card-header">アカウント情報</div><img className="card-prof-image" src="https://gravatar.com/avatar/55502f40dc8b7c769880b10874abc9d0?s=200&amp;d=retro" />
            <h1 className="card-name">{ name }</h1>
            <h2 className="card-sub-title">登録メールアドレス</h2>
            <p>{ email }</p>
            <h2 className="card-sub-title">完了目標日数</h2>
            <p>{ milestone }</p>
            <div className="space-10"></div>
            <a href="/ja/settings/account-edit">
                <div className="card-button block-center">編集する</div>
            </a>
            <div className="space-10"></div>
        </div>
        <div className="col-md-12 card activity-card">
            <div className="card-header">Activity</div>
            <div id="cal-heatmap" className="hidden-xs hidden-sm d3-centered">
                <div ref={el => (this.instance = el)} />
                <div>
                      {/* FIXME */}
                      {/* bower_components を参照するのがあまりよくなさそう */}
                      <script src="/bower_components/d3/d3.min.js"></script>
                      <script src="/bower_components/cal-heatmap/cal-heatmap.min.js"></script>
                      <link href="/bower_components/cal-heatmap/cal-heatmap.css" rel="stylesheet" />
                </div>
            </div>
            <div className="row">
                <div className="hidden-xs col-sm-12 text-center">
                    <div className="row text-primary">
                        <h4 className="col-sm-6 text-right">
                            Longest Streak: <span id="longestStreak"></span>
                        </h4>
                        <h4 className="col-sm-6 text-left">
                            Current Streak: <span id="currentStreak"></span>
                        </h4>
                    </div>
                </div>
            </div>
        </div>
        </div>
    );
  }
}

export default connect(
  mapStateToProps,
  actions
)(Account);
