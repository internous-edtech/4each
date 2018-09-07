window.common = (function(global) {
  const {
    CodeMirror,
    document: doc,
    common = { init: [] }
  } = global;

  const { challengeTypes, challengeType = '0' } = common;

  if (
    !CodeMirror ||
    challengeType !== challengeTypes.JS &&
    challengeType !== challengeTypes.SERVER &&
    challengeType !== challengeTypes.BONFIRE
  ) {
    common.updateOutputDisplay = () => {};
    common.appendToOutputDisplay = () => {};
    return common;
  }

  var codeOutput = CodeMirror.fromTextArea(
    doc.getElementById('codeOutput'),
    {
      lineNumbers: false,
      mode: 'text',
      theme: 'monokai',
      readOnly: 'nocursor',
      lineWrapping: true
    }
  );

  codeOutput.setValue(`プログラム実行結果出力欄`);

  codeOutput.setSize('100%', '100%');

  common.updateOutputDisplay = function updateOutputDisplay(str = '') {
    if (typeof str === 'function') {
      str = str.toString();
    }
    if (typeof str !== 'string') {
      str = JSON.stringify(str);
    }
    codeOutput.setValue(str);
    return str;
  };

  common.appendToOutputDisplay = function appendToOutputDisplay(str = '') {
    codeOutput.setValue(codeOutput.getValue() + str);
    return str;
  };

  return common;
}(window));
