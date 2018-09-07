<?php

return [
    [ // vol1
        "output" => "1<br>-1<br>-2<br>2<br>-1<br>-2<br>3<br>-1<br>-2<br>",
        "model" =>  explode("\n", <<< 'EOF'
次のように出力出来るようにXXXXをそれぞれ変更してください。なお、2つのfor文内の条件式には、 「以下」を使用してください。

<出力結果>
1
-1
-2
2
-1
-2
3
-1
-2
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

for($i =1; $i <= XXXX; $i++){
  echo XXXX
  for($j =1; $j <= XXXX; $j++){
    echo "<br>";
    echo XXXX
  }
  XXXX
}



?>
EOF
)
],
        ]
    ],
    [ // vol2
        "output" => "-------<br>1×1=1<br>1×2=2<br>1×3=3<br>--------<br>2×1=2<br>2×2=4<br>2×3=6<br>",
        "model" =>  explode("\n", <<< 'EOF'
次のように出力出来るようにXXXXをそれぞれ変更してください。なお、2つのfor文内の条件式には、 「以下」を使用してください。

<出力結果>
-------
1×1=1
1×2=2
1×3=3
--------
2×1=2
2×2=4
2×3=6

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

for($i =1; $i <= XXXX; $i++){
 XXXX
 XXXX
 for($j =1; $j <= XXXX; $j++){
   echo XXXX
   echo XXXX
 }
}


?>
EOF
)
],
        ]
    ],
    [ // vol3
        "output" => "01234",
        "model" =>  explode("\n", <<< 'EOF'
for文内に「初期値を0 」、「 10以下」、「増減式は1ずつ増加」と記述し、かつ変数iが5未満の場合は、「変数i」をループで出力出来るように、XXXXを変更してください。
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

for($i =0; $i <=10; $i++){
  if(XXXX){
    echo $i;
  }
}

?>
EOF
)
],
        ]
    ],
    [ // vol4
        "output" => "1★3★5★7★9★",
        "model" =>  explode("\n", <<< 'EOF'
次のように出力出来るようにXXXXをそれぞれ変更してください。 なお、for文内には「初期値を1 」、「10以下」、「増減式は1ずつ増加」と記述し、かつ変数iが偶数の場合は「★」を出力し、それ以外の場合は全て「$i」を出力出来るようにしてください。

<出力結果>
1★3★5★7★9★
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

for($i =1; $i <=XXXX; $i++){
  if(XXXX){
    XXXX
  }XXXX{
    XXXX
  }
}

?>
EOF
)
],
        ]
    ]
];
