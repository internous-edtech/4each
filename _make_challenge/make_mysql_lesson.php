<?php
include('make_lesson_json.php');
$language = 'mysql';
$cource = 'mysql';

$lesson_titles = [
    "データベースの基本とXAMPPのインストール",
    "データベースの作成方法",
    "CRUD(create文、insert文）",
    "CRUD(select文、update文、delete文）",
    "ソート（並べ替え）",
    "データの集計",
];

$lesson_description = [
    "データベースの基本とXAMPPのインストール",
    "データベースの作成方法",
    "CRUD(create文、insert文）",
    "CRUD(select文、update文、delete文）",
    "ソート（並べ替え）",
    "データの集計",
];

$videos = [
    "https://vimeo.com/249980617/63fc67d776",
    "https://vimeo.com/249980623/70c64ff63d",
    "https://vimeo.com/249980627/573baf42c0",
    "https://vimeo.com/249980634/9934cf3b88",
    "https://vimeo.com/249980637/b0b98113e7",
    "https://vimeo.com/249980644/ab0cb73457",
];

$slides = [
    "https://onedrive.live.com/embed?cid=43A9521829D9F012&resid=43A9521829D9F012%21208&authkey=AHvNEcg14Alqr8k&em=2",
    "https://onedrive.live.com/embed?cid=43A9521829D9F012&resid=43A9521829D9F012%21206&authkey=AHvWwN2ICuCdqGI&em=2",
    "https://onedrive.live.com/embed?cid=43A9521829D9F012&resid=43A9521829D9F012%21207&authkey=AIUTdsiEHx-oaS4&em=2",
    "https://onedrive.live.com/embed?cid=43A9521829D9F012&resid=43A9521829D9F012%21210&authkey=AJOLttJt7GPTR6c&em=2",
    "https://onedrive.live.com/embed?cid=43A9521829D9F012&resid=43A9521829D9F012%21209&authkey=AJ0RE6EfZ-n8XQI&em=2",
    "https://onedrive.live.com/embed?cid=43A9521829D9F012&resid=43A9521829D9F012%21211&authkey=AD0iWBHnE4Oe2Lc&em=2"
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
                ['title' => 'MySQL 写経テキスト','contents' => explode("\n", $item)]
            ];
            $codeInputs = [
                [
                    'title' => 'エディタ(index.sql)',
                    'contents' => [],
                    'ext' => 'sql',
                    'name' => 'index',
                ]
            ];
            $challenges[] = make_syakyo_json($title, $description, $codeInputs, $codeModels, $language);

        }
    }
    /**
     * 練習問題
     */
     $practice_file = 'practice_data/mysql_'.$num.'.php';
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
