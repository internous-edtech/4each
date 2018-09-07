<?php
include('make_lesson_json.php');
$language = 'html';
$cource = 'css';

$lesson_titles = [
    'CSSとは',
    'CSSの基本',
    'CSSの基本2',
    'CSSの基本3',
    'ボックス要素',
    'position',
    'float',
    'レイアウト nav header fotter aside ',
    '演習1',
    '演習2'
];

$lesson_description = [
    'CSSとは何かの概要を学びます。',
    'CSS基本1。タイプセレクタ、クラスセレクタ、IDセレクタ、colorプロパティ、backgroundプロパティなどを学びます。',
    'CSS基本2。フォント指定、テキストの中央寄せ、行間の指定、リストスタイルの指定などを学びます。',
    'CSS基本3。継承、連結などを学びます。',
    'ボックス要素のborder、padding、margin、width、height、background-colorなどを学びます。',
    'positionプロパティのposition absolute、position relative、position fixedなどを学びます。',
    'floatによる回り込み設定、回り込み解除などを学びます。',
    'レイアウトの作成。動画を見ながら、2カラムレイアウトの作成を学びます。',
    '',
    ''
];


$videos = [
    'https://vimeo.com/231852369/83a4847d05',
    'https://vimeo.com/231852392/d0eac0834f',
    'https://vimeo.com/231852416/d8b380b01b',
    'https://vimeo.com/231852430/3279207ffd',
    'https://vimeo.com/231852458/6478a19028',
    'https://vimeo.com/231852465/d3d3c67ecc',
    'https://vimeo.com/231852475/6eb2a6831f',
    'https://vimeo.com/231852492/6d0e2cc1fe',
];

$slides = [
"https://onedrive.live.com/embed?cid=43A9521829D9F012&resid=43A9521829D9F012%21137&authkey=ACZw5eA7lL-VH8c&em=2",
"https://onedrive.live.com/embed?cid=43A9521829D9F012&resid=43A9521829D9F012%21137&authkey=ACZw5eA7lL-VH8c&em=2",
"https://onedrive.live.com/embed?cid=43A9521829D9F012&resid=43A9521829D9F012%21135&authkey=AAyeGifWCLItdd8&em=2",
"https://onedrive.live.com/embed?cid=43A9521829D9F012&resid=43A9521829D9F012%21139&authkey=ACkoxCyNqiRfkzE&em=2",
"https://onedrive.live.com/embed?cid=43A9521829D9F012&resid=43A9521829D9F012%21204&authkey=ADU2AwENTIjbP0w&em=2",
"https://onedrive.live.com/embed?cid=43A9521829D9F012&resid=43A9521829D9F012%21140&authkey=AGaFAfA6cYZVBzg&em=2",
"https://onedrive.live.com/embed?cid=43A9521829D9F012&resid=43A9521829D9F012%21141&authkey=AHD8nIMgQC80FJQ&em=2",
"https://onedrive.live.com/embed?cid=43A9521829D9F012&resid=43A9521829D9F012%21203&authkey=AOLHtlR_Qz6lK1g&em=2",
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
    if(isset($videos[$index])){
        $slide_url = $slides[$index];
        $title = $cource.'-'.$num.'-'.$lecture++;
        $description = [$lesson_titles[$index],$lesson_description[$index]];
        $challenges[] = make_slide_json($title, $description, $slide_url);
    }

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
                ['title' => 'HTML 写経テキスト','contents' => explode("\n", $item[0])],
                ['title' => 'CSS 写経テキスト','contents' => explode("\n", $item[1])],
            ];
            $codeInputs = [
                [
                    'title' => 'エディタ(index.html)',
                    'contents' => ['<body>','','</body>','</html>'],
                    'ext' => 'html',
                    'name' => 'index',
                ],
                [
                    'title' => 'エディタ(style.css)',
                    'contents' => [''],
                    'ext' => 'css',
                    'name' => 'style',
                ],
            ];
            $challenges[] = make_syakyo_json($title, $description, $codeInputs, $codeModels, $language);
        }
    }

    /**
     * 練習問題
     */
    $practice_file = 'practice_data/'.$cource.'_'.$num.'.php';
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
