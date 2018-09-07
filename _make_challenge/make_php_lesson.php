<?php
include('make_lesson_json.php');
$language = 'php';
$cource = 'php';

$lesson_titles = [
    'PHPの基本と出力',
    '変数と代入・四則演算',
    '剰余と加算子・減算子',
    'if文 基礎',
    'if文 応用',
    'switch文',
    '配列 基礎',
    '配列 連想配列・多次元配列',
    'テキストと数の操作',
    '関数',
    'for文 基礎',
    'for文 応用',
    'while文',
    'foreach文 基礎',
    'foreach文 応用'
];

$lesson_description = [
    'PHPの基本。ファイルの管理方法、phpタグの書き方、print/echoなどの文字の出力方法を学びます。',
    '変数への文字列等の代入方法や、代入した文字列等の出力方法、四則演算（足し算、引き算、掛け算、割り算）を学びます。',
    '剰余と加算子・減算子について学びます。',
    'if文（判定）の基礎。else ifやelse文も学びます。',
    'if文（判定）の応用。ネスト（入れ子）の方法を学びます。',
    'switch文を学びます。',
    '配列の基礎について学びます。',
    '配列の応用。連想配列、多次元配列などについて学びます。',
    'テキストと数の操作。シングルクオテーションとダブルクオテーションの違いなどについて学びます。',
    '関数について学びます。関数の宣言方法、引数、返り値などについて学びます。',
    'for文（ループ処理）の基礎を学びます。',
    'for文（ループ処理）の応用。for文とif文のネスト、for文とfor文のネストなどについて学びます。',
    'while文（ループ処理）の基礎を学びます。',
    'foreachの基礎について学びます。',
    'foreachの応用。多次元連想配列とのforeach文の組み合わせ等を学びます。',
];


$videos = [
    'https://vimeo.com/231856025/0458a8d47a',
    'https://vimeo.com/231856050/1484497e47',
    'https://vimeo.com/231856079/aa5fdf5952',
    'https://vimeo.com/231856103/92b20e8fb2',
    'https://vimeo.com/231856128/1c77f53503',
    'https://vimeo.com/231856165/80c46283c4',
    'https://vimeo.com/231856192/b5cc122569',
    'https://vimeo.com/231856210/d658717d7d',
    'https://vimeo.com/231856229/7aea9c3c90',
    'https://vimeo.com/231856256/f4d987bd15',
    'https://vimeo.com/231856292/285e268bbe',
    'https://vimeo.com/231856314/9457add4d0',
    'https://vimeo.com/231856341/534842c977',
    'https://vimeo.com/231856363/1dd80d6510'
];

$slides = [
    "https://onedrive.live.com/embed?cid=43A9521829D9F012&resid=43A9521829D9F012%21174&authkey=ANHQPCVcqVq9ul4&em=2",
    "https://onedrive.live.com/embed?cid=43A9521829D9F012&resid=43A9521829D9F012%21179&authkey=AMffqkSwuF2C2Ts&em=2",
    "https://onedrive.live.com/embed?cid=43A9521829D9F012&resid=43A9521829D9F012%21180&authkey=AO_vfdwAONIW16w&em=2",
    "https://onedrive.live.com/embed?cid=43A9521829D9F012&resid=43A9521829D9F012%21189&authkey=AHgcPNTIElnFj5I&em=2",
    "https://onedrive.live.com/embed?cid=43A9521829D9F012&resid=43A9521829D9F012%21188&authkey=AK2l74tJRYMQzww&em=2",
    "https://onedrive.live.com/embed?cid=43A9521829D9F012&resid=43A9521829D9F012%21190&authkey=AJ_5rXCoC8c8VQY&em=2",
    "https://onedrive.live.com/embed?cid=43A9521829D9F012&resid=43A9521829D9F012%21195&authkey=AG4vBCo2DkZ6aHk&em=2",
    "https://onedrive.live.com/embed?cid=43A9521829D9F012&resid=43A9521829D9F012%21192&authkey=AJRKCkm_xvqn2Tg&em=2",
    "https://onedrive.live.com/embed?cid=43A9521829D9F012&resid=43A9521829D9F012%21191&authkey=ALVOoZcMkSf4CfY&em=2",
    "https://onedrive.live.com/embed?cid=43A9521829D9F012&resid=43A9521829D9F012%21194&authkey=AIZt8Y0oPuyEYvA&em=2",
    "https://onedrive.live.com/embed?cid=43A9521829D9F012&resid=43A9521829D9F012%21193&authkey=AJXDQxdG4-OL6HE&em=2",
    "https://onedrive.live.com/embed?cid=43A9521829D9F012&resid=43A9521829D9F012%21196&authkey=AIBDG6Ixspk8Twk&em=2",
    "https://onedrive.live.com/embed?cid=43A9521829D9F012&resid=43A9521829D9F012%21197&authkey=ADFNifwQ4ygJxlA&em=2",
    "https://onedrive.live.com/embed?cid=43A9521829D9F012&resid=43A9521829D9F012%21198&authkey=AGG1ymmgEZQXyAQ&em=2",
    "https://onedrive.live.com/embed?cid=43A9521829D9F012&resid=43A9521829D9F012%21199&authkey=AMp2GAsjKg0VrK0&em=2",
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
                ['title' => 'PHP 写経テキスト','contents' => explode ( "\n", $item )]
            ];
            $codeInputs = [
                [
                    'title' => 'エディタ(index.php)',
                    'contents' => ['<?php','','','?>'],
                    'ext' => 'server',
                    'name' => 'index',
                ],
            ];
            $challenges[] = make_syakyo_json($title, $description, $codeInputs, $codeModels, $language);
        }
    }

    /**
     * 練習問題
     */
    $practice_file = 'practice_data/php_'.$num.'.php';
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
