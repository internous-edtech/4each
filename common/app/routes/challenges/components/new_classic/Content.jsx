import React, { PropTypes } from 'react';

import LeftNote from './LeftNote.jsx';
import RightNote from './RightNote.jsx';
import CompleteButton from './CompleteButton.jsx';
import SuccessModal from './SuccessModal.jsx';
import ErrorModal from './ErrorModal.jsx';
import Output from '../classic/Output.jsx';
import Preview from './Preview.jsx';

import * as jsDiff from 'diff';
import phpParser from 'php-parser';

import { connect } from 'react-redux';
import { createSelector } from 'reselect';
import { submitChallenge, executeChallenge, updateMain, updateFile, updateFiles, moveToNextChallenge } from '../../redux/actions';
import { challengeSelector } from '../../redux/selectors';

const mapStateToProps = createSelector(
  challengeSelector,
  state => state.challengesApp.id,
  state => state.challengesApp.tests,
  state => state.challengesApp.files,
  state => state.challengesApp.key,
  state => state.challengesApp.output,
  (
    { challenge, showPreview, mode },
    id,
    tests,
    files = {},
    key = '',
    output,
    isCodeLocked
  ) => ({
    challenge,
    id,
    content: files[key] && files[key].contents || '',
    file: files[key],
    files: files,
    showPreview,
    mode,
    tests,
    output,
    isCodeLocked
  })
);



export class Content extends React.Component {

    static propTypes = {
        submitChallenge: PropTypes.func,
        codeModel: PropTypes.string.isRequired,
        file: PropTypes.object,
        updateFile: PropTypes.func,
        updateFiles: PropTypes.func,
        executeChallenge: PropTypes.func,
        output: PropTypes.string
    }

    constructor(props) {
        super(props);
        this.rightNoteChange = this.rightNoteChange.bind(this);
        this.runTest = this.runTest.bind(this);
        this.openSuccessModal = this.openSuccessModal.bind(this);
        this.closeSuccessModal = this.closeSuccessModal.bind(this);
        this.openErrorModal = this.openErrorModal.bind(this);
        this.closeErrorModal = this.closeErrorModal.bind(this);
        this.onNextChallenge = this.onNextChallenge.bind(this);
        this.onPreviousChallenge = this.onPreviousChallenge.bind(this);
        this.getTokens = this.getTokens.bind(this);
        this.toPolyVinylFile = this.toPolyVinylFile.bind(this);

        this.state = {
            leftNote: this.props.codeModel,
            rightNote: '',
            openSuccessModal: false,
            openErrorModal: false,
            errorMessage: '',
            codeModels: props.challenge.codeModels,
            codeInputs: props.challenge.codeInputs,
        }


    }

    rightNoteChange(newNote) {
        this.setState({
            rightNote: newNote
        });
    }

    openSuccessModal() {
        this.setState({
            openSuccessModal: true
        });
    }

    closeSuccessModal() {
        this.setState({
            openSuccessModal: false
        });
        this.onNextChallenge()
    }

    openErrorModal() {
        this.setState({
            openErrorModal: true
        });
    }

    closeErrorModal() {
        this.setState({
            openErrorModal: false
        });
    }

    onPreviousChallenge(){
        const { moveToNextChallenge } = this.props;
        return moveToNextChallenge(-1);
    }

    onNextChallenge() {
        const { moveToNextChallenge } = this.props;
        return moveToNextChallenge(1);
    }

    renderPreview() {
        return (
            <div style={{marginTop:"10px"}}>
                <Preview />
            </div>
        );
    }
    getTokens(src){
        const parser = new phpParser({
          parser: {
            extractDoc: true,
            php7: false
          },
          ast: {
            withPositions: true
          }
        });

        const tokens = parser.tokenGetAll(src);

        let items = [];
        tokens.filter((token)=>{
            if (typeof token === "string" ){
                items.push(token)

            } else {
                if(token[0].match(/(T_WHITESPACE|T_INLINE_HTML)/)){
                    // do nothing
                } else if(token[0].match(/(T_LNUMBER)/)){
                    items.push([token[1],token[1]])
                } else {
                    items.push([token[0],token[1]])
                }
            }
        })

        return items;
    }

    toPolyVinylFile(data){
        const {
            file,
            files
        } = this.props;

        let newFile =  JSON.parse(JSON.stringify(file));
        let key = data.name + data.ext;
        let change = files[key] ? files[key] : data;
        let contents = typeof change.contents === "string" ? change.contents : change.contents.join('\n');

        newFile = Object.assign(newFile,{
            key: key,
            name: data.name,
            ext: data.ext,
            history:[],
            // path: data.name + "." + data.ext,
            // contents: data.contents.join('\n')
            contents: contents
        });

        return newFile;
    }
    render() {
        const {
            codeModel,
            submitChallenge,
            moveToNextChallenge,
            id,
            entities,
            challenge,
            content,
            updateFile,
            updateFiles,
            file,
            files,
            output,
            executeChallenge,
            updateMain,
            codeInputs,
            codeModels
        } = this.props;


        let output_log = output ? output : ""

        let showPreview = false;
        let showOutput = false;

        let executeFunction = () => {}

        if( (challenge.challengeType == "11" || challenge.challengeType == "9") && ( challenge.language == "html" || challenge.language == "css" || challenge.language == "js" || challenge.language == "jquery") ) {
            showPreview = true;
            executeFunction = updateMain
        } else {
            showOutput = true;
            executeFunction = executeChallenge
        }

        let completeFunction = () => {}
        if(challenge.challengeType == "11") {
            completeFunction = this.runTest
        } else {
            completeFunction = submitChallenge
        }

        let prevPageButton = null
        let nextPageButton = null
        if(challenge.challengeType == "11"){
            prevPageButton = <span className="prev-text">前の写経へ</span>
            nextPageButton = <span className="next-text">次の写経へ</span>
        } else {
            prevPageButton = <span className="prev-text">前の練習問題へ</span>
            nextPageButton = <span className="next-text">次の練習問題へ</span>
        }

        let lead_text = "";
        if(challenge.challengeType == "11"){
            lead_text = "左のテキスト内のコードを右のEditorに記入していきましょう。"
        } else {
            lead_text = "左の問題の答えを右のEditorに記入していきましょう。"
        }

        return (

            <div>

            <div className="container main">
                <div className="row">
                    <div className="col-sm-10 col-sm-offset-1 col-xs-12 note-area" id="movie-frame">
                        <div className="card basecolor">
                            <div className="circle-button-left" onClick={ this.onPreviousChallenge }><i className="fa fa-angle-left"></i>{ prevPageButton }</div>
                            <div className="circle-button-right" onClick={ this.onNextChallenge }><i className="fa fa-angle-right"></i>{ nextPageButton }</div>
                            <div className="card-top mb-no-display"><span className="card-top-text">{ lead_text }</span></div>
                            <div className="row">
                            <div className="note-content col-lg-6">
                                {challenge.codeModels.map((data) => {
                                  return <LeftNote codeModel={"\n" + data.contents.join('\n')} title={data.title} />
                                })}
                            </div>
                            <div className="note-content col-lg-6">
                                {challenge.codeInputs.map((data) => {
                                  let file = this.toPolyVinylFile(data);
                                  return <RightNote
                                          onChange={this.rightNoteChange}
                                          executeChallenge={ executeChallenge }
                                          mode={ "text/html" }
                                          updateFile={ updateFile }
                                          content={ file.contents }
                                          file={ file }
                                          title={ data.title }
                                      />
                                })}
                            </div>
                            </div>
                            <div className="output challenges-instructions-panel">
                                {(() => {
                                    if (showPreview) {
                                        return <div className="col-sm-12">{ this.renderPreview() }</div>
                                    }
                                })()}
                                {(() => {
                                    if (showOutput) {
                                        return <Output output={ output_log }/>
                                    }
                                })()}
                            </div>

                            <CompleteButton
                                runTest={completeFunction}
                                handleExecute={executeFunction}
                            />
                        </div>
                    </div>
                </div>


                <SuccessModal
                    close={this.closeSuccessModal}
                    open={this.state.openSuccessModal}
                    successMessage={"正解!おめでとうございます!"}
                    nextMessage={"次の問題へ"}
                />
                <ErrorModal
                    close={this.closeErrorModal}
                    open={this.state.openErrorModal}
                    errorMessage={this.state.errorMessage}
                    tryMessage={"もう一度チャレンジ"}
                    title={"エラー"}
                />
            </div>
        </div>
        );
    }

    // コードdiff
    runTest() {
        const {
            files,
            challenge
        } = this.props;

        let [countDiff,missing,added] = [0,[],[]];

        challenge.codeModels.forEach(function(orig,index){
            let input = this.state.codeInputs[index];
            let file = files[input.name + input.ext];
            if(file){
                let d = this.diffCheck(challenge.codeModels[index],file);
                countDiff = countDiff + d.countDiff
                missing = missing.concat("\n",d.missing)
                added = added.concat("\n",d.added)
            } else {
                console.warn(input)
            }
        }.bind(this));

        this.showCheckModal(countDiff,missing,added);
    }


    diffCheck(origin,change){
        console.log(origin,change);
        var diffOpt = {
            ignoreWhitespace: true
        };
        var diff = jsDiff.diffLines(origin.contents.join('\n'), change.contents, diffOpt);

        var missing = [];
        var added = [];

        var countDiff = 0;
        var addedCount = 0;

        diff.forEach(x => {
            if (x.added) {
                if (x.value == '\n')
                    ;
                else {
                    added.push(<span style={{ color: 'red' }}>{x.value}<br/></span>);
                    countDiff++;
                }
                console.log(x.value, 'added', 'diff');
            } else if (x.removed) {
                if (x.value == '\n')
                    ;
                else {
                    missing.push(<span style={{ color: 'red' }}>{x.value}</span>);
                    countDiff++;
                }
                console.log(x.value, 'removed');
            }
        });

        let token_diff = 0;

        const {
            challenge,
        } = this.props;

        // for php
        if(challenge.challengeType == "11" && challenge.language == "php") {
            const orig_tokens = this.getTokens(origin.contents.join('\n'))
            const prac_tokens = this.getTokens(change.contents)
            var diff_token_array = jsDiff.diffArrays(orig_tokens.map((token) => token[1]), prac_tokens.map((token) => token[1]));

            let missing = [];
            let added = [];

            diff_token_array.forEach(x => {
                if (x.added) {
                    if (x.value == '\n')
                        ;
                    else {
                        added.push(x.value);
                        countDiff++;
                    }
                    console.log(x.value, 'added', 'diff');
                } else if (x.removed) {
                    if (x.value == '\n')
                        ;
                    else {
                        missing.push(x.value);
                        countDiff++;
                    }
                    console.log(x.value, 'removed');
                }
            });

            if(orig_tokens.length == prac_tokens.length){
                const token_diff = orig_tokens.some((token,index) => {
                    return prac_tokens[index][0] !== token[0] && prac_tokens[index][1] !== token[1]
                })

                countDiff = token_diff ? countDiff : 0;
            }
        }

        return {countDiff,missing,added}
    }
    showCheckModal(countDiff,missing,added){
        if (countDiff === 0) {
            this.setState({
                openSuccessModal: true,
            });
        } else {
            var preStyle = {
                'text-align': 'left',
                'padding': '10px 30px',
                'background': 'white'
            }
            var addedStyle = {
                'border-left': 'solid 1px #ccc',
                'height': '100%'
            }
            var missingStyle = {
                'border-right': 'solid 1px #ccc',
                'height': '100%'
            }
            this.setState({
                openErrorModal: true,
                errorMessage: (
                    <div>
                        <div className="col-sm-12 col-md-6" style={missingStyle}>
                            <h1>Missing</h1>
                            <pre style={preStyle}><code code="html" >{missing}</code></pre>
                        </div>
                        <div className="col-sm-12 col-md-6" style={addedStyle}>
                            <h1>Added</h1>
                            <pre style={preStyle}><code code="html">{added}</code></pre>
                        </div>
                        <div style={{'clear': 'both'}}></div>
                    </div>
                )
            });
        }
    }
}

export default connect(
  mapStateToProps,
  { submitChallenge, executeChallenge, updateMain , updateFile, updateFiles, moveToNextChallenge}
)(Content);
