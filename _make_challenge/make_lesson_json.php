<?php

// スライド 8
function make_slide_json($title, $description, $slide_url){
    $id = (string) new MongoDB\BSON\ObjectId();
    return [
        'id' => $id,
        'title' => $title,
        'description' => $description,
        'challengeSeed' => [$slide_url],
        'tests'  => [],
        'type'  => 'hike',
        'solutions' => [],
        'challengeType' => 8,
        'translations' => new stdClass
    ];
}
// ビデオ 6
function make_video_json($title, $description, $vimeo_url){
    $id = (string) new MongoDB\BSON\ObjectId();
    $vimeo_id = preg_split( "/\//", $vimeo_url, -1, PREG_SPLIT_NO_EMPTY )[2];

    return [
        'id' => $id,
        'title' => $title,
        'description' => $description,
        'challengeSeed' => ["https://player.vimeo.com/video/".$vimeo_id],
        'tests'  => [],
        'type'  => 'hike',
        'solutions' => [],
        'challengeType' => 8,
        'translations' => new stdClass
    ];
}

// 写経 11
function make_syakyo_json($title, $description, $codeInputs, $codeModels, $language){
    $id = (string) new MongoDB\BSON\ObjectId();
    // $challengeSeed = explode("\n", $syakyo);
    // // 必要
    // array_unshift($challengeSeed, "");

    return [
        'id' => $id,
        'title' => $title,
        'description' => $description,
        'language' => $language,
        "javaClass" => 'Main',
        // 'challengeSeed' => $challengeSeed,
        'codeInputs' => $codeInputs,
        'codeModels' => $codeModels,
        'tests'  => [],
        'type'  => 'waypoint',
        'solutions' => [],
        'challengeType' => 11,
        'translations' => new stdClass
    ];
}

// 練習問題 9
function make_test_json($title, $description, $codeInputs, $codeModels, $output, $language, $javaClass = null){
    $id = (string) new MongoDB\BSON\ObjectId();

    $output = $output;// "Hello Java!",
    $javaClass = $javaClass; // Hello

    return [
        'id' => $id,
        'title' => $title,
        'description' => $description,
        "language" => $language,
        "javaClass" => $javaClass,
        'codeInputs' => $codeInputs,
        'codeModels' => $codeModels,
        'tests'  => [],
        'type'  => 'waypoint',
        'solutions' => [],
        'challengeType' => 9,
        'translations' => new stdClass
    ];
}

// レッスン
function make_lesson_json($name,$description,$language,$order,$challenges){
    return [
        'name' => $name,
        'order' => $order,
        'time' => "1 hour",
        'helpRoom' => 'Help',
        'language' => $language,
        'description' => $description,
        'challenges' => $challenges,
    ];
}
