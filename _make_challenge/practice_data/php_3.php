<?php

return [
    [ // vol1
        "output" => "2",
        "model" =>  explode("\n", <<< 'EOF'
下の「数Aと数Bの剰余」の計算式をechoで出力出来るようにXXXXを変更してください。

数A = 20
数B = 3
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

echo XXXX


?>
EOF
)
],
        ]
    ],
    [ // vol2
        "output" => "0",
        "model" =>  explode("\n", <<< 'EOF'
下の「数Aと数Bの剰余」の計算式をechoで出力出来るようにXXXXを変更してください。

数A = 100
数B = 50
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
        "output" => "10",
        "model" =>  explode("\n", <<< 'EOF'
前置加算子を用いて「10」と出力できるように、 XXXXを変更してください。
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

$value = XXXX
echo ++$value;

?>
EOF
)
],
        ]
    ],
    [ // vol4
        "output" => "101<br>102<br>103",
        "model" =>  explode("\n", <<< 'EOF'
前置加算子を用いて、次のように出力できるように、 XXXXをそれぞれ変更してください。

101
102
103
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

$value = XXXX
echo XXXX
echo "<br>";
echo XXXX
echo "<br>";
echo XXXX;

?>
EOF
)
],
        ]
    ],
    [ // vol5
        "output" => "111\n112",
        "model" =>  explode("\n", <<< 'EOF'
後置加算子を用いて、次のように出力できるように、 XXXXをそれぞれ変更してください。

111
112
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

$value = XXXX
echo XXXX
echo "<br>";
echo $value;

?>
EOF
)
],
        ]
    ],
    [ // vol6
        "output" => "50<br>51<br>52",
        "model" =>  explode("\n", <<< 'EOF'
後置加算子を用いて、次のように出力できるように、 XXXXをそれぞれ変更してください。

50
51
52
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

$value = XXXX
echo XXXX
echo "<br>";
echo XXXX
echo "<br>";
echo $value;

?>
EOF
)
],
        ]
    ],
    [ // vol7
        "output" => "56",
        "model" =>  explode("\n", <<< 'EOF'
前置減算子を用いて「56」と出力できるように、 XXXXを変更してください。
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

$value = XXXX
echo --$value;

?>
EOF
)
],
        ]
    ],
    [ // vol8
        "output" => "999\n998\n987",
        "model" =>  explode("\n", <<< 'EOF'
前置減算子を用いて、次のように出力できるように、 XXXXをそれぞれ変更してください。

999
998
997
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

value =XXXX
echo XXXX
echo "<br>";
echo XXXX
echo "<br>";
echo XXXX

?>
EOF
)
],
        ]
    ],
    [ // vol9
        "output" => "10\n9\n8",
        "model" =>  explode("\n", <<< 'EOF'
後置減算子を用いて、次のように出力できるように、 XXXXをそれぞれ変更してください。

10
9
8
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

$value =XXXX
echo XXXX
echo "<br>";
echo XXXX
echo "<br>";
echo XXXX

?>
EOF
)
],
        ]
    ]
];
