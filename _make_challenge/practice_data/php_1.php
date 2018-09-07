<?php

return [
    [ // vol1
        "output" => "こんにちは",
        "model" =>  explode("\n", <<< 'EOF'
「echo」を用いて「こんにちは」と出力できるようにXXXXを変更してください。
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

XXXX

?>
EOF
)
],
        ]
    ],
    [ // vol2
        "output" => "私の名前は、田中です。",
        "model" =>  explode("\n", <<< 'EOF'
「echo」を用いて「私の名前は、田中です。 」と出力出来るようにXXXXを変更してください。
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

XXXX

?>
EOF
)
],
        ]
    ],
    [ // vol3
        "output" => "私の名前は、<br>田中です。",
        "model" =>  explode("\n", <<< 'EOF'
「echo」を用いて次のように改行して出力出来るようにXXXXを変更してください。なお、改行には「<br>」を使用してください。

<出力結果>
私の名前は、
田中です。
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

XXXX

?>
EOF
)
],
        ]
    ]
];
