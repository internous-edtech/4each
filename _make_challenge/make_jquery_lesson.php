<?php
include('make_lesson_json.php');
$language = 'jquery';
$cource = 'jquery';

$lesson_titles = [
    "jQueryの基礎",
    "jQueryの書き方",
    "様々なイベント",
    "hoverイベント",
    "thisについて",
    "スライドショー",
];

$lesson_description = [
    "jQueryの基礎",
    "jQueryの書き方",
    "様々なイベント",
    "hoverイベント",
    "thisについて",
    "スライドショー",
];


$videos = [
    "https://vimeo.com/249981026/f192603033",
    "https://vimeo.com/249981066/202e4c5a35",
    "https://vimeo.com/249981198/b8a945fb03",
    "https://vimeo.com/249981202/786ed87c2f",
    "https://vimeo.com/249981208/a8adde7909",
    "https://vimeo.com/249981919/3895bd7651",
];

$slides = [
    "https://onedrive.live.com/embed?cid=43A9521829D9F012&resid=43A9521829D9F012%21223&authkey=ADOERY4knnJ7kFA&em=2",
    "https://onedrive.live.com/embed?cid=43A9521829D9F012&resid=43A9521829D9F012%21221&authkey=AIc8kKCO1jkKqd8&em=2",
    "https://onedrive.live.com/embed?cid=43A9521829D9F012&resid=43A9521829D9F012%21222&authkey=AN1mLzH_L9OLgY8&em=2",
    "https://onedrive.live.com/embed?cid=43A9521829D9F012&resid=43A9521829D9F012%21226&authkey=AAAowNBb1FQvsGU&em=2",
    "https://onedrive.live.com/embed?cid=43A9521829D9F012&resid=43A9521829D9F012%21224&authkey=ADTBlTFj7wehC7I&em=2",
    "https://onedrive.live.com/embed?cid=43A9521829D9F012&resid=43A9521829D9F012%21225&authkey=ALUK6QW9QI5cQAc&em=2",
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
        $title = $cource.'-'.$num.'-'.$lecture++;
        $description = [$lesson_titles[$index],$lesson_description[$index]];
        foreach($data as $item){
            $codeModels = [];
            $codeInputs = [];
            foreach ($item as $contents) {
                $codeModels[] = [
                    'title' => $contents[0]['title'],
                    'contents' => explode("\n", $contents[0]['contents']),
                ];
                $codeInputs[] = [
                    'title' => $contents[1]['title'],
                    'contents' => explode("\n", $contents[1]['contents']),
                    'ext' => $contents[1]['ext'],
                    'name' => $contents[1]['name'],
                ];
            }
            $challenges[] = make_syakyo_json($title, $description, $codeInputs, $codeModels, $language);
        }
    }

    /**
     * 練習問題
     */
    $practice_file = 'practice_data/jquery_'.$num.'.php';
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
