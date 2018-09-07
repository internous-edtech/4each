<?php
include('make_lesson_json.php');
$language = 'js';
$cource = 'js';

$lesson_titles = [
    'JavaScriptの基本',
    '文字の出力 アラートをあげる',
    'データ型',
    '変数',
    '四則演算 剰余',
    '加算子 減算子',
    'if文 基礎',
    'if文 応用',
    'switch文',
    'for文 基礎',
    'for文 応用',
    'while文',
    '配列 基礎',
    '配列 応用',
    '関数'
];

$lesson_description = [
    'JavaScriptの基本。ファイルの管理方法、scriptタグの書き方などを学びます。',
    'document.write、confirmなどの文字列などの出力方法やコメントの方法を学びます。',
    '文字列、数値などデータ型について学びます',
    '変数への文字列等の代入方法や、代入した文字列等の出力方法を学びます。',
    '四則演算（足し算、引き算、掛け算、割り算）の方法を学びます。',
    '加算子、減算子を学びます。',
    'if文（判定）の基礎。else ifやelse文も学びます。',
    'if文（判定）の応用。ネスト（入れ子）の方法を学びます。',
    'switch文を学びます。',
    'for文（ループ処理）の基礎を学びます。',
    'for文（ループ処理）の応用。for文とif文のネスト、for文とfor文のネストなどについて学びます。',
    'while文（ループ処理）の基礎を学びます。',
    '配列の基礎について学びます。',
    '配列の応用。unshiftやpushなどについて学びます。',
    '関数について学びます。関数の宣言方法、引数、返り値などについて学びます。',
];


$videos = [
    'https://vimeo.com/231854217/13a91fe05d',
    'https://vimeo.com/231854245/b22bb09ebd',
    'https://vimeo.com/231854271/b61ee7b56a',
    'https://vimeo.com/231854289/596c3a2f45',
    'https://vimeo.com/231854310/a27e0c5481',
    'https://vimeo.com/231854330/086b6328b3',
    'https://vimeo.com/231854349/ea3d7f592f',
    'https://vimeo.com/231854377/0a2a172301',
    'https://vimeo.com/231854405/d41cdf20c8',
    'https://vimeo.com/231854438/cec0e868f8',
    'https://vimeo.com/231854471/7680c1f8d7',
    'https://vimeo.com/231854509/2b0809f419',
    'https://vimeo.com/231854534/33e0833f80',
    'https://vimeo.com/231854551/0994e15551',
    'https://vimeo.com/231854578/bbdac00ba4'
];


$slides = [
    "https://onedrive.live.com/embed?cid=43A9521829D9F012&resid=43A9521829D9F012%21148&authkey=ALVI403r-Zmsltk&em=2",
    "https://onedrive.live.com/embed?cid=43A9521829D9F012&resid=43A9521829D9F012%21147&authkey=AD0PXfA-GKQd-Gw&em=2",
    "https://onedrive.live.com/embed?cid=43A9521829D9F012&resid=43A9521829D9F012%21149&authkey=APIn6JaqGLOIRxg&em=2",
    "https://onedrive.live.com/embed?cid=43A9521829D9F012&resid=43A9521829D9F012%21150&authkey=AGrOho7j63yPHHY&em=2",
    "https://onedrive.live.com/embed?cid=43A9521829D9F012&resid=43A9521829D9F012%21151&authkey=ANO5K4WbiGMx6cM&em=2",
    "https://onedrive.live.com/embed?cid=43A9521829D9F012&resid=43A9521829D9F012%21152&authkey=AGsayrbvm9klwPA&em=2",
    "https://onedrive.live.com/embed?cid=43A9521829D9F012&resid=43A9521829D9F012%21200&authkey=AC1kASbvdc-WkP8&em=2",
    "https://onedrive.live.com/embed?cid=43A9521829D9F012&resid=43A9521829D9F012%21201&authkey=ALyr-vmqUH6ZtUQ&em=2",
    "https://onedrive.live.com/embed?cid=43A9521829D9F012&resid=43A9521829D9F012%21155&authkey=AH-lt7fU1iGmP-U&em=2",
    "https://onedrive.live.com/embed?cid=43A9521829D9F012&resid=43A9521829D9F012%21166&authkey=ABlIFtCA5z3cuhY&em=2",
    "https://onedrive.live.com/embed?cid=43A9521829D9F012&resid=43A9521829D9F012%21157&authkey=AMj5guJ0gQyYjG4&em=2",
    "https://onedrive.live.com/embed?cid=43A9521829D9F012&resid=43A9521829D9F012%21162&authkey=ALOMS78R-sxxVGk&em=2",
    "https://onedrive.live.com/embed?cid=43A9521829D9F012&resid=43A9521829D9F012%21168&authkey=ALFm8L5DZF9haBU&em=2",
    "https://onedrive.live.com/embed?cid=43A9521829D9F012&resid=43A9521829D9F012%21169&authkey=AA2Z4IgEE_APyR0&em=2",
    "https://onedrive.live.com/embed?cid=43A9521829D9F012&resid=43A9521829D9F012%21167&authkey=ADtn9WL9hFxdiwU&em=2",
];



$lesson_num = count($lesson_titles);

foreach(range(1,$lesson_num) as $num){
    $challenges = [];
    $index = $num-1;

    $lecture = 1;

    /**
     * 動画
     */
    if(isset($videos[$index])){
        // title名が一意でないと別のchallengeを引っ張ってします
        $title = $cource.'-'.$num.'-'.$lecture++;
        $description = [$lesson_titles[$index],$lesson_description[$index]];
        $vimeo_url = $videos[$index];
        $challenges[] = make_video_json($title, $description, $vimeo_url);
    }

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
    $syakyou_file = 'syakyou_data/'.$cource.'_'.$num.'.php';
    if(file_exists($syakyou_file)){
        $data = include($syakyou_file);
        foreach($data as $item){
            $title = $cource.'-'.$num.'-'.$lecture++;
            $description = [$lesson_titles[$index],$lesson_description[$index]];
            $codeModels = [
                ['title' => 'HTML 写経テキスト','contents' => ['<body>','','<script src="script.js"></script>','','</body>','</html>']],
                ['title' => 'JavaScript 写経テキスト','contents' => explode("\n", $item)],
            ];
            $codeInputs = [
                [
                    'title' => 'エディタ(index.html)',
                    'contents' => ['<body>','','<script src="script.js"></script>','','</body>','</html>'],
                    'ext' => 'html',
                    'name' => 'index',
                ],
                [
                    'title' => 'エディタ(script.js)',
                    'contents' => [''],
                    'ext' => 'js',
                    'name' => 'index',
                ],
            ];
            $challenges[] = make_syakyo_json($title, $description, $codeInputs, $codeModels, $language);
        }
    }

    /**
     * 練習問題
     */
    $practice_file = 'practice_data/js_'.$num.'.php';
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
