import React, {Component, PropTypes} from 'react';

class Banner extends Component {
    static propTypes = {
        title: PropTypes.string.isRequired,
        block: PropTypes.string.isRequired,
        count: PropTypes.number.isRequired,
        desc: PropTypes.string.isRequired
    }

    render() {
        /* ハードコーディング(コース画像) */
        let image = {
            html: "/img/05.png",
            css: "/img/06.png",
            js: "/img/24.png",
            php: "/img/04.png",
            "mysql" : "/img/26.png",
            "jquery" : "/img/07.png",
            "java" : "/img/23.png",
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

        return (
            <div className="eyecatch">
                <div className="container">
                    <div className="row lessons">

                        <div className="col-sm-2">
                            <div className="lesson-image">
                                <img src={image[this.props.block]} />
                            </div>
                        </div>

                        <div className="col-sm-8">
                            <div className="lesson-count">
                                全{this.props.count}レッスン
                            </div>
                            <h1 className="lesson-title">{titles[this.props.title.toLowerCase()]}</h1>
                            <div className="lesson-description">
                                {this.props.desc}
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        );
    }
}

export default Banner;
