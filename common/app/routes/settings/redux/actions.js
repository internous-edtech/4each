import { createAction } from 'redux-actions';

import createTypes from '../../../utils/create-types';

export const types = createTypes([
  'toggleUserFlag',
  'updateMyEmail',
  'updateMyLang',
  'updateMyAccount'
], 'settings');

export const toggleUserFlag = createAction(types.toggleUserFlag);
export const updateMyEmail = createAction(types.updateMyEmail);
export const updateMyLang = createAction(
  types.updateMyLang,
  (values) => values.lang
);
export const updateMyAccount = createAction(types.updateMyAccount);
