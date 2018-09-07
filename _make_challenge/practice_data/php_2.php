<?php

return [
    [ // vol1
        "output" => "りんご",
        "model" =>  explode("\n", <<< 'EOF'
変数fruitに「りんご」を代入し、「りんご」と出力できるようにXXXXをそれぞれ変更してください。
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

$fruit = XXXX
echo XXXX

?>
EOF
)
],
        ]
    ],
    [ // vol2
        "output" => "0001",
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
        "output" => "100",
        "model" =>  explode("\n", <<< 'EOF'
変数value1に文字列「100 」を代入し、「100」と出力できるようにXXXXをそれぞれ変更してください。
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

$value1 = XXXX
echo XXXX

?>
EOF
)
],
        ]
    ],
    [ // vol4
        "output" => "30",
        "model" =>  explode("\n", <<< 'EOF'
変数value2に下の「数A+数B」の計算式を代入し、その結果が出力出来るようにXXXXをそれぞれ変更してください。

数A = 10
数B = 20
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

$value2 = XXXX
echo XXXX

?>
EOF
)
],
        ]
    ],
    [ // vol5
        "output" => "3",
        "model" =>  explode("\n", <<< 'EOF'
変数valueに下の「数A-数B」の計算式を代入し、その結果が出力出来るようにXXXXをそれぞれ変更してください。

数A = 5
数B = 2
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

value = XXXX
echo XXXX

?>
EOF
)
],
        ]
    ],
    [ // vol6
        "output" => "100",
        "model" =>  explode("\n", <<< 'EOF'

変数valueに下の「数A×数B」の計算式を代入し、その結果が出力出来るようにXXXXをそれぞれ変更してください。

数A = 10
数B = 10
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

value = XXXX
echo XXXX

?>
EOF
)
],
        ]
    ],
    [ // vol7
        "output" => "2",
        "model" =>  explode("\n", <<< 'EOF'
変数valueに下の「数A÷数B」の計算式を代入し、その結果が出力出来るようにXXXXをそれぞれ変更してください。

数A = 12
数B = 6
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

value = XXXX
echo XXXX

?>
EOF
)
],
        ]
    ]
];
