import {
  modernChallengesRoute,
  mapRoute,
  challengesRoute,
  lessonsRoute
} from './challenges';
import NotFound from '../components/NotFound/index.jsx';
import { addLang } from '../utils/lang';
import settingsRoute from './settings';
import Top from '../routes/settings/components/Settings.jsx';

export default function createChildRoute(deps) {
  return {
    path: '/:lang',
    indexRoute: { component: Top },
    // indexRoute: {
    //   onEnter(nextState, replace) {
    //     const { lang } = nextState.params;
    //     const { pathname } = nextState.location;
    //     replace(addLang(pathname, lang));
    //   }
    // },
    childRoutes: [
      challengesRoute(deps),
      modernChallengesRoute(deps),
      mapRoute(deps),
      settingsRoute(deps),
      lessonsRoute(deps),
      {
        path: '*',
        component: NotFound
      }
    ]
  };
}
