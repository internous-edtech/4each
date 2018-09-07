<?php

return [
    [ // vol1
        "output" => "123",
        "model" =>  explode("\n", <<< 'EOF'
「123」と出力できるようにXXXXを変更してください。
EOF
)
,
        "inputs" => [
            [
                'title' => 'エディタ',
                'ext' => 'server',
                'name' => 'index',
                "contents" => explode("\n", <<< 'EOF'
<?php

$arr = array(1, 2, 3);

foreach(XXXX){
	 echo $val;
}

?>
EOF
)
],
        ]
    ],
    [ // vol2
        "output" => "001002003",
        "model" =>  explode("\n", <<< 'EOF'
配列変数arrに、「001」「002」「003」の要素を指定し、その後foreach文で「001002003
」と出力できるようにXXXXをそれぞれ変更してください
EOF
)
,
        "inputs" => [
            [
                'title' => 'エディタ',
                'ext' => 'server',
                'name' => 'index',
                "contents" => explode("\n", <<< 'EOF'
<?php

$arr = array(XXXX);

foreach(XXXX){
	 echo $val;
}

?>
EOF
)
],
        ]
    ],
    [ // vol3
        "output" => "東京<br>大阪<br>名古屋",
        "model" =>  explode("\n", <<< 'EOF'
配列変数prefに、「東京」「大阪」「名古屋」の要素を指定し、次のように出力出来るようにXXXXを変更してください。

<出力結果>
東京
大阪
名古屋
EOF
)
,
        "inputs" => [
            [
                'title' => 'エディタ',
                'ext' => 'server',
                'name' => 'index',
                "contents" => explode("\n", <<< 'EOF'
<?php

$pref = array("東京","大阪","名古屋");

foreach(XXXX as $aaa){
  echo $aaa."<br>";
}

?>
EOF
)
],
        ]
    ],
    [ // vol4
        "output" => "0x1y2z",
        "model" =>  explode("\n", <<< 'EOF'
配列変数arrに、「x」「y」「z」の要素を指定し、「0x1y2z」と出力出来るようにXXXXを変更してください。
EOF
)
,
        "inputs" => [
            [
                'title' => 'エディタ',
                'ext' => 'server',
                'name' => 'index',
                "contents" => explode("\n", <<< 'EOF'
<?php

$arr = array("x", "y", "z");

foreach($arr as $key => $val){
	echo XXXX
}

?>
EOF
)
],
        ]
    ],
    [ // vol5
        "output" => "0apple1orange2grape",
        "model" =>  explode("\n", <<< 'EOF'
配列変数arrに、「apple」「orange」「grape」の要素を指定し、「0apple1orange2grape」と出力出来るようにXXXXをそれぞれ変更してください。
EOF
)
,
        "inputs" => [
            [
                'title' => 'エディタ',
                'ext' => 'server',
                'name' => 'index',
                "contents" => explode("\n", <<< 'EOF'
<?php

$arr = array(XXXX);

foreach(XXXX){
	echo $key.$val;
}

?>
EOF
)
],
        ]
    ]
];
