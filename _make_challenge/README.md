# 概要
課題データJSONファイルの生成

# データ作成とseedディレクトリにコピー

``
cd /pato/to/repo/_make_challenge
# html
php make_html_lesson.php
/bin/cp -rf seed/html/* ../seed/challenges/00-html/
# css
php make_css_lesson.php
/bin/cp -rf seed/css/* ../seed/challenges/01-css/
# js
php make_js_lesson.php
/bin/cp -rf seed/js/* ../seed/challenges/03-js/
# php
php make_php_lesson.php
/bin/cp -rf seed/php/* ../seed/challenges/04-php/

# mysql mysql
php make_php_lesson.php
/bin/cp -rf seed/mysql/* ../seed/challenges/05-mysql/

# jquery
php make_jquery_lesson.php
/bin/cp -rf seed/jquery/* ../seed/challenges/06-jquery/

# java
php make_java_lesson.php
/bin/cp -rf seed/java/* ../seed/challenges/07-java/
``

# MongoDBデータ削除
``
use freecodecamp;
db.block.remove({})
db.challenge.remove({})
``
# DB投入

``
cd /pato/to/repo/
npm run only-once
``
!Mac環境で.DS_Store があるとうまく動かないので注意!
