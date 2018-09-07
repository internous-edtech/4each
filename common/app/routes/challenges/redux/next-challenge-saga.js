import { Observable } from 'rx';
import { push } from 'react-router-redux';
import types from './types';
import { resetUi, updateCurrentChallenge } from './actions';
import { createErrorObservable } from '../../../redux/actions';
import { makeToast } from '../../../toasts/redux/actions';
import {
  getNextChallenge,
  getFirstChallengeOfNextBlock,
  getFirstChallengeOfNextSuperBlock,
  getPreviousChallenge,
  getPreviousChallengeOfNextBlock,
  getPreviousChallengeOfNextSuperBlock,
} from '../utils';
import debug from 'debug';

const isDev = debug.enabled('fcc:*');
const { moveToNextChallenge } = types;

export default function nextChallengeSaga(actions$, getState) {
  return actions$
    .filter(({ type }) => type === moveToNextChallenge)
    .flatMap((t) => {
      let nextChallenge;
      // let message = '';
      // let isNewBlock = false;
      // let isNewSuperBlock = false;
      try {
        const state = getState();
        const { challenge, superBlocks } = state.challengesApp;
        const { entities } = state;
        nextChallenge = getNextChallenge(challenge, entities, { isDev });
        let pushUrl = null;
        let gotoLessonsPage = false;
        let currentChallenge = entities.challenge[challenge];

        // block completed.
        if (!nextChallenge) {
          // isNewBlock = true;
          nextChallenge = getFirstChallengeOfNextBlock(
            challenge,
            entities,
            { isDev }
          );
          gotoLessonsPage = true;
        }
        // superBlock completed
        if (!nextChallenge) {
          // isNewSuperBlock = true;
          nextChallenge = getFirstChallengeOfNextSuperBlock(
            challenge,
            entities,
            superBlocks,
            { isDev }
          );
          gotoLessonsPage = true;
        }

        if(t.payload === -1){
            gotoLessonsPage = false;
            nextChallenge = getPreviousChallenge(challenge, entities, { isDev });

            // block completed.
            if (!nextChallenge) {
              // isNewBlock = true;
              nextChallenge = getPreviousChallengeOfNextBlock(
                challenge,
                entities,
                { isDev }
              );
              gotoLessonsPage = true;
            }
            // superBlock completed
            if (!nextChallenge) {
              // isNewSuperBlock = true;
              nextChallenge = getPreviousChallengeOfNextSuperBlock(
                challenge,
                entities,
                superBlocks,
                { isDev }
              );
              nextChallenge = null;
              gotoLessonsPage = true;
            }
        }

        /* this requires user data not available yet
        if (isNewSuperBlock || isNewBlock) {
          const getName = isNewSuperBlock ?
            getCurrentSuperBlockName :
            getCurrentBlockName;
          const blockType = isNewSuperBlock ? 'SuperBlock' : 'Block';
          message =
            `You've competed the ${getName(challenge, entities)} ${blockType}!`;
        }
        message += ' Your next challenge has arrived.';
        const toast = {
          // title: isNewSuperBlock || isNewBlock ? randomVerb() : null,
          message
        };
        */
        // if (nextChallenge.isLocked) {
        //   return Observable.of(
        //     makeToast({
        //       message: 'The next challenge has not been unlocked. ' +
        //       'Please revisit the required (*) challenges ' +
        //       'that have not been passed yet. ',
        //       timeout: 15000
        //     }),
        //     push('/map')
        //   );
        // }

        if(nextChallenge){
            pushUrl = `/challenges/${nextChallenge.block}/${nextChallenge.dashedName}`
        }

        /*
        動画教材の「前へ」はコースTOPに戻る
        スライド教材の「前へ」はコースTOPに戻る
         */
        if(
            t.payload === -1 && // 前へ
            // currentChallenge.challengeType == 8 &&
            (currentChallenge.suborder == 1 || currentChallenge.suborder == 2)
        ){
            gotoLessonsPage = true;
        }
        /*
        動画教材の「次へ」は写経、なければ練習問題、それもなければコースTOPに戻る
        スライド教材の「次へ」は写経、なければ練習問題、それもなければコースTOPに戻る
         */
        if(
            t.payload !== -1 // 次へ
            // && currentChallenge.challengeType == 8
            && (currentChallenge.suborder == 1 || currentChallenge.suborder == 2)

        ){
            if(!entities.challenge[`${currentChallenge.superBlock.toLowerCase()}${currentChallenge.order+1}3`]) {
                gotoLessonsPage = true;
            } else {
                pushUrl = `/challenges/${nextChallenge.block}/${currentChallenge.superBlock.toLowerCase()}${currentChallenge.order+1}3`
            }
        }

        /*
        以下の条件、ブロックをまたいだらコースTOPに移動と同じ？
        動画教材の「次へ」は写経、なければ練習問題、それもなければコースTOPに戻る
        スライド教材の「次へ」は写経、なければ練習問題、それもなければコースTOPに戻る
        写経の「次へ」は練習問題、なければコースTOPに戻る
        練習問題の「次へ」はコースTOPに戻る
         */

        if(gotoLessonsPage){
            // TODO
            // たぶん最後のｔｙあレンジだと
            // updateCurrentChallenge　がおかしくなりそう
            pushUrl = `/lessons/${currentChallenge.superBlock.toLowerCase()}`;
            return Observable.of(
            //   updateCurrentChallenge(nextChallenge),
              resetUi(),
            //   makeToast({ message: '' }), // Your next has arrived.
              push(pushUrl)
            );
        }

        return Observable.of(
          updateCurrentChallenge(nextChallenge),
          resetUi(),
          makeToast({ message: '' }), // Your next has arrived.
          push(pushUrl)
        );
      } catch (err) {
        return createErrorObservable(err);
      }
    });
}
