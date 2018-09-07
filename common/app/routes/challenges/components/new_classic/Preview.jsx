import React from 'react';
import PureComponent from 'react-pure-render/component';

const mainId = 'fcc-main-frame';
export default class extends PureComponent {
  static displayName = 'Preview';

  render() {
    return (
        <iframe
          className='iframe-scroll'
          id={ mainId }
        />
    );
  }
}
