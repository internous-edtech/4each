<?php

return [
    [ // vol1
        "output" => "30",
        "model" =>  explode("\n", <<< 'EOF'
「30」と出力できるようにXXXXを変更してください。
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

function myfunc1($a, $b){
	return XXXX + XXXX;
}

echo XXXX(10, 20);


?>
EOF
)
],
        ]
    ],
    [ // vol2
        "output" => "名前は佐藤です。",
        "model" =>  explode("\n", <<< 'EOF'
「名前は佐藤です。」と出力できるようにXXXXをそれぞれ変更してください。
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

function myfunc2($a){
	return XXXX "です。";
}

echo XXXX("佐藤");

?>
EOF
)
],
        ]
    ],
    [ // vol3
        "output" => "合計金額は、108円です。<br> 合計金額は、216円です。",
        "model" =>  explode("\n", <<< 'EOF'
次のように出力出来るようにXXXXをそれぞれ変更してください。なお、関数名には「totalPrice」を、引数には「price」と「tax」を使用してください。 また、引数の「tax」には8%(1.08)を使用してください。

<出力結果>
合計金額は、108円です。
合計金額は、216円です。
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

function totalPrice(XXXX,XXXX){
return XXXXX ;
}

echo totalPrice(100);
echo "<br>";
echo totalPrice(200);

?>
EOF
)
],
        ]
    ],
    [ // vol4
        "output" => "午前",
        "model" =>  explode("\n", <<< 'EOF'
もし引数aがAMと等しい場合は「午前」と出力し、それ以外の場合は全て「午後」と出力出来るようにXXXXをそれぞれ変更してください。
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

function myfunc2($a){
  if(XXXX){
    $b = "午前";
  } else{
    XXXX
  }
  return $b;
 }

 echo myfunc2("AM");


?>
EOF
)
],
        ]
    ],
    [ // vol5
        "output" => "さようなら",
        "model" =>  explode("\n", <<< 'EOF'
「さようなら」と出力できるようにXXXXを変更してください。
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

function goodbye(){
      echo XXXX
    }

goodbye();


?>
EOF
)
],
        ]
    ],
    [ // vol6
        "output" => "一般会員です。",
        "model" =>  explode("\n", <<< 'EOF'
もし引数ageが60以上であれば「シルバー会員です」と出力し、それ以外の場合は全て「一般会員です」と出力出来るようにXXXXをそれぞれ変更してください。
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

function hantei($age){
    XXXX($age >= XXXX){
        echo "シルバー会員です。";
    }else{echo "一般会員です。";
   }
}

hantei(30);


?>
EOF
)
],
        ]
    ]
];
