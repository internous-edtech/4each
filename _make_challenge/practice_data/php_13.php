<?php

return [
    [ // vol1
        "output" => "123",
        "model" =>  explode("\n", <<< 'EOF'
「123」と出力できるようにXXXXを変更してください。なお、while文内の条件式には「以下」を使用してください。
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

$i = 1;

while(XXXX){
  echo $i;
  $i++;
}



?>
EOF
)
],
        ]
    ],
    [ // vol2
        "output" => "0<br>1<br>2<br>",
        "model" =>  explode("\n", <<< 'EOF'
次のように出力出来るようにXXXXをそれぞれ変更してください。なお、while文内の条件式には、 「以下」を使用してください。

<出力結果>
0
1
2
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

$i = 0;

while(XXXX){
  XXXX
  $i++;
  echo XXXX
}

?>
EOF
)
],
        ]
    ],
    [ // vol3
        "output" => "246",
        "model" =>  explode("\n", <<< 'EOF'
「246」と出力できるようにXXXXを変更してください。なお、while文内の条件式には「以下」を使用してください。
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

$i = 2;

while($i<=6){
  echo $i;
	XXXX
}

?>
EOF
)
],
        ]
    ],
    [ // vol4
        "output" => "★★★",
        "model" =>  explode("\n", <<< 'EOF'
次のように出力出来るようにXXXXをそれぞれ変更してください。なお、while文内の条件式には、 「以下」を使用してください。

<出力結果>
★★★
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

$i = 1;

while ($i <= XXXX){
	XXXX
	$i++;
}


?>
EOF
)
],
        ]
    ],
    [ // vol5
        "output" => "★2★4★6★8★10",
        "model" =>  explode("\n", <<< 'EOF'
次のように出力出来るようにXXXXをそれぞれ変更してください。 なお、while文内には、「10以下」、「増減式は1ずつ増加」と記述し、かつ変数iが奇数の場合は「★」を出力し、それ以外の場合は全て「$i」を出力出来るようにしてください。

<出力結果>
★2★4★6★8★10
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

$i = 1;

while(XXXX){
  if(XXXX){
    echo "★";
  }
  else{
    XXXX
  }
  XXXX
}

?>
EOF
)
],
        ]
    ]
];
