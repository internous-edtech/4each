<?php

return [
    [ // vol1
        "output" => "リンゴです。",
        "model" =>  explode("\n", <<< 'EOF'
「リンゴです。 」と出力できるようにXXXXを変更してください。
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

$fruit = "リンゴ";

echo $fruit XXXX

?>
EOF
)
],
        ]
    ],
    [ // vol2
        "output" => "リンゴは100円です。",
        "model" =>  explode("\n", <<< 'EOF'
変数fruitにリンゴを代入し、変数valueに100を代入し、「リンゴは100円です。 」と出力できるようにXXXXをそれぞれ変更してください。
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

$fruit = "リンゴ";
$value = 100;

echo $fruit XXXX $value XXXX

?>
EOF
)
],
        ]
    ]
];
