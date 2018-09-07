import Rx from 'rx';
import fs from 'fs';
import uuid from 'uuid';
import { spawn } from 'child_process';
import path from 'path';

const sqlFileRoot = path.resolve(__dirname + "/../../seed/sql/");

const SUDO_USER = 'ec2-user';

const sudo = function(command, user = 'fcctemp') {
    return new Promise(function(resolve, reject) {
        let stdout = '';
        let stderr = '';
        let option = [];

        // nodeを動かしているユーザー. EC2は ec2-user
        // mysqlコマンドは動かない
        if (user == SUDO_USER && !command.match(/^mysql/)) {
            option = command.split(' ');
        } else {
            option = [
                '-u',
                user,
                '-E',
                'bash',
                '-c',
                command
            ];
        }

        const exec = spawn('sudo', option)

        exec.stdout.on('data', function(data) {
            stdout += data;
        });

        exec.stderr.on('data', function(data) {
            stderr += data;
        });

        exec.on('close', function(code) {
            if (code !== 0) {
                reject({
                    stdout,
                    stderr,
                    code
                });
            } else {
                resolve({
                    stdout,
                    stderr,
                    code
                });
            }
        });

    });
}

export default function execute(args,cd) {
    console.log(args,execute);
    const user_id = args.userId ? args.userId : uuid.v4().slice(0, 8);
    const file_path = `/home/fcctemp/${user_id}/`;
    const language = args.language;
    let challengeId = args.challengeId;
    const challengeName = args.challengeName;
    const javaClass = args.javaClass;
    // ユーザー入力ソースコード
    const code = args.code;
    const ext = {
        'php' : 'php',
        'java' : 'java',
        'ruby' : 'rb',
        'perl' : 'pl',
        'python' : 'py',
        'mysql' : 'sql',
    };
    if( language =='java' ){
        challengeId  = javaClass;
    }

    const file_name = challengeId +  '.' + ext[language];
    const sqlFile = sqlFileRoot + "/" + challengeName + ".sql";


    const promise = new Promise((resolve, reject) => {
        // 一時書き込みファイル
        const tmpfile = `/tmp/` + uuid.v4().slice(0, 8);

        const errorFunction  = ({stdout, stderr}) => {
            const errorMessage = stdout || stderr;
            console.error(stdout,stderr);
            resolve(cd(stderr))
        };

        // TODO
        // callback 地獄はあとで修正
        // ディレクトリ /home/fcctemp/user_id/ 作成
        sudo(`mkdir -p ${file_path};`).then(function({stdout, stderr}) {
            console.log(tmpfile);
            fs.writeFile(tmpfile, code, function() {
                // tmp に保存した実行ファイルをサンドボックスユーザーの権限に変更
                sudo(`chown fcctemp:sandbox ${tmpfile}`, SUDO_USER).then(function({stdout, stderr}) {
                    // サンドボックスディレクトリに実行ファイルを移動
                    sudo(`mv ${tmpfile} ${file_path}${file_name}`).then(function({stdout, stderr}) {
                        // 実行ファイルを実行
                        // java はコンパイル手順が増える
                        if(language == 'java'){
                            console.log("execute command",`javac ${file_path}${file_name}`,`java -classpath ${file_path} ${javaClass}`);
                            sudo(`javac ${file_path}${file_name}`).then(function({stdout, stderr}) {
                                sudo(`java -classpath ${file_path} ${javaClass}`).then(function({stdout, stderr}) {
                                    // プログラムの出力
                                    resolve(cd(stdout));
                                }).catch(errorFunction);
                            }).catch(errorFunction);
                        } else if(language === 'mysql'){
                            // sqlFile
                            sudo(`mysql -u root -e'CREATE DATABASE IF NOT EXISTS user_${user_id}';mysql -u root user_${user_id} < ${sqlFile}`, SUDO_USER).then(function({stdout, stderr}) {
                                sudo(`mysql -u root user_${user_id} < ${file_path}${file_name};`).then(function({stdout, stderr}) {
                                    resolve(cd(stdout));
                                }).catch(function({stdout, stderr}) {
                                    console.log(stdout);
                                    resolve(stdout);
                                });
                            }).catch(errorFunction);
                        } else {
                            console.log("execute command",`${language} ${file_path}${file_name}`);
                            sudo(`${language} ${file_path}${file_name}`).then(function({stdout, stderr}) {
                                // プログラムの出力
                                console.log("execute stdout", stdout);
                                resolve(cd(stdout));
                            }).catch(errorFunction);
                        }

                    }).catch(errorFunction);

                }).catch(errorFunction);
            });
        }).catch(errorFunction);
    });

    return Rx.Observable.fromPromise(promise);
}
