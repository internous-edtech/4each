<?php

return [
    [ // vol1
        "output" => "成人",
        "model" =>  explode("\n", <<< 'EOF'
変数ageに「25」を代入し、もし変数ageが20以上の場合は「成人」と出力出来るように、XXXXをそれぞれ変更してください。
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

$age = XXXX;

if(XXXX){
    echo "XXXX";
}


?>
EOF
)
],
        ]
    ],
    [ // vol2
        "output" => "午前です。",
        "model" =>  explode("\n", <<< 'EOF'
変数valueに「AM」を代入し、もし変数valueがAMと等しい場合は「午前です。」と出力出来るように、XXXXをそれぞれ変更してください。
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

$value=XXXX;

if(XXXX){
	echo "午前です。";
}

?>
EOF
)
],
        ]
    ],
    [ // vol3
        "output" => "合格です。",
        "model" =>  explode("\n", <<< 'EOF'
変数valueに「90」を代入し、もし変数valueが75以上の場合は「合格です。」と出力し、それ以外の場合でもし変数valueが75未満ならば「不合格です。 」と出力出来るようにXXXXをそれぞれ変更してください。
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

$value=XXXX

if(XXXX){
	echo "合格です。";
} XXXX(XXXX) {
	echo "不合格です。";
}

?>
EOF
)
],
        ]
    ],
    [ // vol4
        "output" => "午後です。",
        "model" =>  explode("\n", <<< 'EOF'
変数valueに「PM」を代入し、もし変数valueがAMと等しい場合は「午前です。」と出力し、それ以外の場合でもし変数valueがPMと等しい場合は「午後です。 」と出力出来るようにXXXXをそれぞれ変更してください。
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

$value="PM";

if(XXXX){
	XXXX
} XXXX (XXXX) {
	XXXX
}

?>
EOF
)
],
        ]
    ],
    [ // vol5
        "output" => "0以外です。",
        "model" =>  explode("\n", <<< 'EOF'
変数valueに「5」を代入し、もし変数valueが0と等しい場合は「0です。」と出力し、それ以外の場合は全て「0以外です。 」と出力出来るようにXXXXをそれぞれ変更してください。
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

$value=5;

if (XXXX) {
	XXXX
} XXXX {
	XXXX
}

?>
EOF
)
],
        ]
    ]
];
