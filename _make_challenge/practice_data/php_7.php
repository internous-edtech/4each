<?php

return [
    [ // vol1
        "output" => "2",
        "model" =>  explode("\n", <<< 'EOF'
「2」と出力できるようにXXXXを変更してください。
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

$value = array(1, 2, 3);

echo XXXX;

?>
EOF
)
],
        ]
    ],
    [ // vol2
        "output" => "田中",
        "model" =>  explode("\n", <<< 'EOF'
「1」、 「田中」の二つの値が入った配列変数valueを作成し、「１」を出力できるようにXXXXをそれぞれ変更してください。
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

$value = XXXX(XXXX);

echo XXXX


?>
EOF
)
],
        ]
    ],
    [ // vol3
        "output" => "30",
        "model" =>  explode("\n", <<< 'EOF'
「10」、 「20」の二つの値が入った配列変数valueを作成し、その後に新しい要素「30」を追加し、次に「30」を出力できるようにXXXXをそれぞれ変更してください。
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

$value = array(10, 20);

XXXX

echo XXXX

?>
EOF
)
],
        ]
    ],
    [ // vol4
        "output" => "黄",
        "model" =>  explode("\n", <<< 'EOF'
「赤」、 「白」の二つの値が入った配列変数valueを作成し、その後に「白」の値を「黄」に更新し、次に「黄」を出力できるようにXXXXをそれぞれ変更してください。
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

$value = array("赤", "白");

XXXX

echo XXXX

?>
EOF
)
],
        ]
    ],
    [ // vol5
        "output" => "",
        "model" =>  explode("\n", <<< 'EOF'
「red」、 「white」の二つの値が入った配列変数valueを作成し、その後に「red」の要素を削除し、次に削除した要素を出力できるようにXXXXを変更してください。
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

$value = array("red", "white");

unset(XXXX);

echo $value[0];

?>
EOF
)
],
        ]
    ]
];
