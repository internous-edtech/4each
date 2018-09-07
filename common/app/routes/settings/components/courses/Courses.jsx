import React from 'react';

import CoursePreview from './CoursePreview.jsx';

export default class Courses extends React.Component {
    constructor(props) {
        super(props);
    }

    render() {
        const {
          superBlocks,
          entities,
          all,
          completed,
        } = this.props;

        let descs = {
            "html" : "プログラミングの基本。webサイト作成に必須の言語。",
            "css" : "HTMLではできないwebサイトの細かな表現を制御する言語。",
            "js" : "ブラウザ上で動作するフロントエンドの言語。",
            "php" : "webプログラミングで、シェアNo.1のプログラミング言語。",
            "mysql" : "",
            "jquery" : "",
            "java" : "",
        };

        /* ハードコーディング(コースタイトル) */
        let titles = {
            "html" : "HTML",
            "css" : "CSS",
            "js" : "JS",
            "php" : "PHP",
            "mysql" : "XAMPPとMySQL",
            "jquery" : "jQuery",
            "java" : "Java",
        };

        this.courses = superBlocks.map(superBlockName => {
            if (!entities.superBlock[superBlockName]){
                return null;
            }
            let lessons = entities.superBlock[superBlockName].blocks;

            return <CoursePreview
                    title={titles[entities.superBlock[superBlockName].title.toLowerCase()]}
                    subtitle={''}
                    desc={descs[superBlockName.toLowerCase()]}
                    progress={Math.floor(100*completed[superBlockName]/all[superBlockName])}
                    key={entities.superBlock[superBlockName].order}
                    superBlockName={superBlockName}
                    lessons={lessons}
                    challenge={entities.block[lessons[0]].challenges[0]}
                    />
            })

        return (
            <div>
                {this.courses}
            </div>
        );
    }
}
