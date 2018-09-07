import { createSelector } from 'reselect';

import * as challengeTypes from '../../../utils/challengeTypes';
import { getNode } from '../utils';
import blockNameify from '../../../utils/blockNameify';

const viewTypes = {
  [ challengeTypes.html]: 'classic',
  [ challengeTypes.js ]: 'classic',
  [ challengeTypes.bonfire ]: 'classic',
  [ challengeTypes.frontEndProject]: 'project',
  [ challengeTypes.backEndProject]: 'project',
  // might not be used anymore
  [ challengeTypes.simpleProject]: 'project',
  // formally hikes
  [ challengeTypes.video ]: 'video',
  [ challengeTypes.step ]: 'step',
  [ challengeTypes.ppt ]: 'ppt',
  [ challengeTypes.quiz ]: 'quiz',
  [ challengeTypes.server ]: 'shakyo',
  [ challengeTypes.shakyo ]: 'shakyo',

};

const submitTypes = {
  [ challengeTypes.html ]: 'tests',
  [ challengeTypes.js ]: 'tests',
  [ challengeTypes.bonfire ]: 'tests',
  // requires just a button press
  [ challengeTypes.simpleProject ]: 'project.simple',
  // requires just a single url
  // like codepen.com/my-project
  [ challengeTypes.frontEndProject ]: 'project.frontEnd',
  // requires two urls
  // a hosted URL where the app is running live
  // project code url like GitHub
  [ challengeTypes.backEndProject ]: 'project.backEnd',
  // formally hikes
  [ challengeTypes.video ]: 'video',
  [ challengeTypes.step ]: 'step',
  [ challengeTypes.ppt ]: 'ppt',
  [ challengeTypes.quiz ]: 'quiz',
  [ challengeTypes.server ]: 'tests',
  [ challengeTypes.shakyo ]: 'shakyo'
};

export const challengeSelector = createSelector(
  state => state.challengesApp.challenge,
  state => state.entities.challenge,
  (challengeName, challengeMap) => {
    if (!challengeName || !challengeMap) {
      return {};
    }
    const challenge = challengeMap[challengeName];
    const challengeType = challenge && challenge.challengeType;
    const blockName = blockNameify(challenge.block);
    const type = challenge && challenge.type;
    const viewType = viewTypes[type] || viewTypes[challengeType] || 'classic';
    const title = blockName && challenge.title ?
                  `${blockName}: ${challenge.title}` :
                  challenge.title;
    const language = challenge && challenge.language;

    const mode = {
        [challengeTypes.html] : 'text/html',
        [challengeTypes.js] : 'javascript',
        'php' : 'application/x-httpd-php', // php+html+css+js
        'ruby' : 'text/x-ruby', // ruby
        'python' : 'text/x-python', // python
        'perl' : 'text/x-perl', // perl
        'java' : 'text/x-java', // java
    };

    return {
      challenge,
      title,
      viewType: viewType,
      submitType: submitTypes[challengeType] || submitTypes[challenge && challenge.type] || 'tests',
      showPreview: challengeType === challengeTypes.html,
      mode: mode[language ? language : challengeType]
    };
  }
);

export const makePanelOpenSelector = () => createSelector(
  state => state.challengesApp.mapUi,
  (_, props) => props.dashedName,
  (mapUi, name) => {
    const node = getNode(mapUi, name);
    return node ? node.isOpen : true;
  }
);

export const makePanelHiddenSelector = () => createSelector(
  state => state.challengesApp.mapUi,
  (_, props) => props.dashedName,
  (mapUi, name) => {
    const node = getNode(mapUi, name);
    return node ? node.isHidden : false;
  }
);
