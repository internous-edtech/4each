import Settings from './components/Settings.jsx';
import updateEmailRoute from './routes/update-email';
import logoutConfirmRoute from './routes/logout-confirm';
import accountRoute from './routes/account';
import accountEditRoute from './routes/account-edit';

export default function settingsRoute(deps) {
  return {
    path: 'settings',
    component: Settings,
    childRoutes: [
      updateEmailRoute(deps),
      logoutConfirmRoute(deps),
      accountRoute(deps),
       accountEditRoute(deps),
    ]
  };
}
