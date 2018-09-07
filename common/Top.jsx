import React, { PropTypes } from 'react';

import Banner from './Banner.jsx';
import Board from './Board.jsx';

class Top extends React.Component {
  static propTypes = {
    title: PropTypes.string.isRequired,
  };
  
  render() {
    return (
      <div>
        <Banner/>
        <Board/>
      </div>
    );
  }
}

export default Top;
