<?php
include('make_lesson_json.php');
$language = 'java';
$cource = 'java';

$lesson_titles = [
    "eclipseのダウンロード",
    "Javaの基礎",
    'Javaで文字等を表示する',
    "変数と代入",
    "四則演算・剰余",
    "加算子・減算子",
    "if文（判定）基礎",
    "if文（判定）応用",
    "swith文",
    "配列 基礎",
    "配列 多次元配列",
    "for文（ループ処理）基礎",
    "for文（ループ処理）応用",
    "while文 基礎",
    "while文 応用",
];

$lesson_description = [
    "eclipseのダウンロード",
    "Javaの基礎",
    'Javaで文字等を表示する',
    "変数と代入",
    "四則演算・剰余",
    "加算子・減算子",
    "if文（判定）基礎",
    "if文（判定）応用",
    "swith文",
    "配列 基礎",
    "配列 多次元配列",
    "for文（ループ処理）基礎",
    "for文（ループ処理）応用",
    "while文 基礎",
    "while文 応用",
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
    "https://onedrive.live.com/embed?cid=43A9521829D9F012&resid=43A9521829D9F012%21254&authkey=AO_WxfJvmKAlzsc&em=2",
    "https://onedrive.live.com/embed?cid=43A9521829D9F012&resid=43A9521829D9F012%21253&authkey=ACuQLMMbsFZf63E&em=2",
    "https://onedrive.live.com/embed?cid=43A9521829D9F012&resid=43A9521829D9F012%21252&authkey=AJ9pvuXk5vCd_VY&em=2",
    "https://onedrive.live.com/embed?cid=43A9521829D9F012&resid=43A9521829D9F012%21255&authkey=AM91beQDFi5WTvc&em=2",
    "https://onedrive.live.com/embed?cid=43A9521829D9F012&resid=43A9521829D9F012%21256&authkey=AE5k-IFN2ySk-D4&em=2",
    "https://onedrive.live.com/embed?cid=43A9521829D9F012&resid=43A9521829D9F012%21257&authkey=AOfvp39C62RnLU8&em=2",
    "https://onedrive.live.com/embed?cid=43A9521829D9F012&resid=43A9521829D9F012%21258&authkey=AGbidJiKpPgqPCs&em=2",
    "https://onedrive.live.com/embed?cid=43A9521829D9F012&resid=43A9521829D9F012%21259&authkey=ABtA8mrbdHpriZc&em=2",
    "https://onedrive.live.com/embed?cid=43A9521829D9F012&resid=43A9521829D9F012%21260&authkey=ACZKc6xZS0b6RG8&em=2",
    "https://onedrive.live.com/embed?cid=43A9521829D9F012&resid=43A9521829D9F012%21263&authkey=AKFqifJ-GtZBnAY&em=2",
    "https://onedrive.live.com/embed?cid=43A9521829D9F012&resid=43A9521829D9F012%21261&authkey=AESfcmyDrmDPfYU&em=2",
    "https://onedrive.live.com/embed?cid=43A9521829D9F012&resid=43A9521829D9F012%21262&authkey=AC1O3w1GDc5DyM8&em=2",
    "https://onedrive.live.com/embed?cid=43A9521829D9F012&resid=43A9521829D9F012%21264&authkey=ANHmArKlH065Vys&em=2",
    "https://onedrive.live.com/embed?cid=43A9521829D9F012&resid=43A9521829D9F012%21265&authkey=AJGBvJDqSX9iJTE&em=2",
    "https://onedrive.live.com/embed?cid=43A9521829D9F012&resid=43A9521829D9F012%21266&authkey=AFKuKDmjVdsRcyA&em=2",
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
                ['title' => 'Java 写経テキスト','contents' => explode("\n", $item )]
            ];
            $codeInputs = [
                [
                    'title' => 'エディタ(Main.java)',
                    'contents' => ['public class Main {','public static void main(String[] args){','}','}'],
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
    $practice_file = 'practice_data/java_'.$num.'.php';
    if(file_exists($practice_file)){
        $data = include($practice_file);
        foreach($data as $item){
            $title = $cource.'-'.$num.'-'.$lecture++;
            $description = [$lesson_titles[$index],$lesson_description[$index]];
            $codeInputs = $item['inputs'];
            $codeModels = [['title' => '問題','contents' => $item['model']]];
            $output = $item['output'];

            $challenges[] = make_test_json($title, $description, $codeInputs, $codeModels, $output, $language, "Test");
        }
    }

    $description = [$lesson_titles[$index],$lesson_description[$index]];
    $lesson_json = make_lesson_json($cource.' lesson'.str_pad($num, 2, "0", STR_PAD_LEFT),$description,$language,$index,$challenges);
    file_put_contents('seed/'.$cource.'/lesson'.str_pad($num, 2, "0", STR_PAD_LEFT).'.json',json_encode($lesson_json));
}
