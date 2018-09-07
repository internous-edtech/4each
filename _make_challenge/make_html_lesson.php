<?php
include('make_lesson_json.php');
$language = 'html';
$cource = 'html';

$lesson_titles = [
    "webサイトの基本",
    "拡張子の表示とBracketsのインストール",
    "HTMLの基本",
    "URLとドメインとフォルダ",
    "リンクの挿入",
    "画像の挿入",
    "テーブル",
    "フォーム",
    "リスト"
];

$lesson_description = [
    'webサイトの基本。ブラウザ、ドメイン、エディタ、htmlファイルの保存方法、FTPなどを学びます。',
    '拡張子の表示方法とhtmlのコーディングに必要なエディタ「Brackets」のインストール方法を学びます。',
    'Bracketsを使用したコーディングの基礎。webページにコーディング結果を表示させる方法を学びます。',
    '複数ページを持つwebサイトの構築に必要な知識であるURLやフォルダの設定について学びます。',
    '絶対パス、相対パスなどリンクの作り方を学びます。',
    '画像の挿入方法について学びます。',
    'テーブルの作成方法について学びます。',
    'チェックボックス、ラジオボタン、プルダウンメニューなどフォーム作成に必要な要素を学びます。',
    'リスト（箇条書き）について学びます。'
];

$videos = [
    'https://vimeo.com/231849098/624a3ed5bc',
    'https://vimeo.com/231849254/1ea4e4438f',
    'https://vimeo.com/231849346/e41113483f',
    'https://vimeo.com/231851275/38fc11fde4',
    'https://vimeo.com/231851304/1bab1f53f5',
    'https://vimeo.com/231851340/df8f0373de',
    'https://vimeo.com/231851363/ec92b3fd59',
    'https://vimeo.com/231851393/2158a7eb1a',
    'https://vimeo.com/231851413/d5e17ee77d',
];

$slides = [
    "https://onedrive.live.com/embed?cid=43A9521829D9F012&resid=43A9521829D9F012%21121&authkey=AC9MDEdzcpsI7p4&em=2",
    "https://onedrive.live.com/embed?cid=43A9521829D9F012&resid=43A9521829D9F012%21123&authkey=ALdchn9YbQGlNww&em=2",
    "https://onedrive.live.com/embed?cid=43A9521829D9F012&resid=43A9521829D9F012%21122&authkey=AHD2J9Pz0sSoZDI&em=2",
    "https://onedrive.live.com/embed?cid=43A9521829D9F012&resid=43A9521829D9F012%21124&authkey=AF_RiAXnrMjfpKU&em=2",
    "https://onedrive.live.com/embed?cid=43A9521829D9F012&resid=43A9521829D9F012%21126&authkey=AHlocp--sR5l784&em=2",
    "https://onedrive.live.com/embed?cid=43A9521829D9F012&resid=43A9521829D9F012%21125&authkey=AKsnji9aQUtA1hw&em=2",
    "https://onedrive.live.com/embed?cid=43A9521829D9F012&resid=43A9521829D9F012%21127&authkey=ALdRx8sh__LyI08&em=2",
    "https://onedrive.live.com/embed?cid=43A9521829D9F012&resid=43A9521829D9F012%21128&authkey=ADFY_WWxA3cAZbI&em=2",
    "https://onedrive.live.com/embed?cid=43A9521829D9F012&resid=43A9521829D9F012%21129&authkey=AD6bqRoK43PLkX0&em=2",
];

$lesson_num = count($lesson_titles);

foreach(range(1,$lesson_num) as $num){
    $challenges = [];
    $index = $num-1;

    $lecture = 1;

    /**
     * 動画
     */
    // title名が一意でないと別のchallengeを引っ張ってします
    $title = $cource.'-'.$num.'-'.$lecture++;
    $description = [$lesson_titles[$index],$lesson_description[$index]];
    $vimeo_url = $videos[$index];
    $challenges[] = make_video_json($title, $description, $vimeo_url);
    /**
     * スライド
     */
    $slide_url = $slides[$index];

    $title = $cource.'-'.$num.'-'.$lecture++;
    $description = [$lesson_titles[$index],$lesson_description[$index]];
    $challenges[] = make_slide_json($title, $description, $slide_url);
    /**
     * 写経
     */
    $syakyou_file = 'syakyou_data/html_'.$num.'.php';
    if(file_exists($syakyou_file)){
        $data = include($syakyou_file);
        foreach($data as $item){
            $title = $cource.'-'.$num.'-'.$lecture++;
            $description = [$lesson_titles[$index],$lesson_description[$index]];
            $codeInputs = [[
                'title' => 'エディタ(index.html)',
                'contents' => ['<body>','</body>','</html>'],
                'ext' => 'html',
                'name' => 'index',
            ]];
            $codeModels = [['title' => 'HTML 写経テキスト','contents' => explode("\n", $item)]];
            $challenges[] = make_syakyo_json($title, $description, $codeInputs, $codeModels, $language);
        }
    }
    /**
     * 練習問題
     */
    $practice_file = 'practice_data/html_'.$num.'.php';
    if(file_exists($practice_file)){
        $data = include($practice_file);
        foreach($data as $item){
            $title = $cource.'-'.$num.'-'.$lecture++;
            $description = [$lesson_titles[$index],$lesson_description[$index]];
            $codeInputs = $item['inputs'];
            $codeModels = [['title' => '問題','contents' => $item['model']]];
            $output = $item['output'];

            $challenges[] = make_test_json($title, $description, $codeInputs, $codeModels, $output, $language);
        }
    }


    $description = [$lesson_titles[$index],$lesson_description[$index]];
    $lesson_json = make_lesson_json($cource.' lesson'.str_pad($num, 2, "0", STR_PAD_LEFT),$description,$language,$index,$challenges);
    file_put_contents('seed/'.$cource.'/lesson'.str_pad($num, 2, "0", STR_PAD_LEFT).'.json',json_encode($lesson_json));
}
