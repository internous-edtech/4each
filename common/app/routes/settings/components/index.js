import React from 'react';
import Layout from '../../components/Layout';
import Top from './Top.jsx';

const title = 'Top';

export default {

  path: '/top',

  action() {
    return {
      title,
      component: <Layout><Top title={title} /></Layout>
    };
  },
};
