<?php

return [
    [ // vol1
        "output" => "12345",
        "model" =>  explode("\n", <<< 'EOF'
for文で「1～5」をループで出力出来るように、 XXXXを変更してください。
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

for($i = 1; XXXX $i++){
  echo $i;
}


?>
EOF
)
],
        ]
    ],
    [ // vol2
        "output" => "123",
        "model" =>  explode("\n", <<< 'EOF'
for文で「1～3」をループで出力出来るように、 XXXXをそれぞれ変更してください。
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

for(XXXX; $i < 4; $i++){
	echo XXXX
}

?>
EOF
)
],
        ]
    ],
    [ // vol3
        "output" => "54321",
        "model" =>  explode("\n", <<< 'EOF'
for文で「5～1」をループで出力出来るように、 XXXXを変更してください。
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

for($i = 5; $i > 0; XXXX){
	echo $i;
}

?>
EOF
)
],
        ]
    ],
    [ // vol4
        "output" => "8765",
        "model" =>  explode("\n", <<< 'EOF'
for文で「8～5」をループで出力出来るように、 XXXXを変更してください。なお、for文内の条件式には、 「以上」を使用してください。
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

for($i = 8; XXXX; $i--){
	echo $i;
}

?>
EOF
)
],
        ]
    ],
    [ // vol5
        "output" => "02",
        "model" =>  explode("\n", <<< 'EOF'
for文内に「初期値を0 」、「 3未満」、「増減式は2ずつ増加」と記述し「0～2」をループで出力出来るように、 XXXXをそれぞれ変更してください。
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

for($i=XXXX; XXXX; XXXX){
	echo $i;
}

?>
EOF
)
],
        ]
    ],
    [ // vol6
        "output" => "2468",
        "model" =>  explode("\n", <<< 'EOF'
for文内に「初期値を2 」、「 8以下」、「増減式は2ずつ増加」と記述し「2～8」をループで出力出来るように、 XXXXをそれぞれ変更してください。
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

for($i=XXXX; XXXX; XXXX){
	echo $i;
}

?>
EOF
)
],
        ]
    ],
    [ // vol7
        "output" => "86",
        "model" =>  explode("\n", <<< 'EOF'
for文内に「初期値を8 」、「5を超過」、「増減式は2ずつ減少」と記述し「8～6」をループで出力出来るように、 XXXXをそれぞれ変更してください。
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

for($i=XXXX; XXXX; XXXX){
	echo $i;
}

?>
EOF
)
],
        ]
    ],
    [ // vol8
        "output" => "★★★",
        "model" =>  explode("\n", <<< 'EOF'
「★★★」と出力出来るようにXXXXをそれぞれ変更してください。
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

for($i = 1; $i <= 3; $i++){
    echo XXXX
}

?>
EOF
)
],
        ]
    ],
    [ // vol9
        "output" => "★☆★☆★☆",
        "model" =>  explode("\n", <<< 'EOF'
「★☆★☆★☆」と出力出来るようにXXXXをそれぞれ変更してください。
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

$a="★";
$b="☆";

for($i = 1; $i <= 3; $i++){
  echo XXXX;
}

?>
EOF
)
],
        ]
    ]
];
