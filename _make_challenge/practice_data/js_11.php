<?php

return [
    [ // vol1
        "output" => "",
        "model" =>  explode("\n", <<< 'EOF'
<index.html>
変更なし

<script.js>
for文内に「初期値を0 」、「 6未満」、「増減式は1ずつ増加」と記述し、かつ変数iが4以上の場合は、「変数i」をループで出力出来るように、XXXXを変更してください。
EOF
)
,
        "inputs" => [
            [
                'title' => 'エディタ(index.html)',
                'ext' => 'html',
                'name' => 'index',
                "contents" => explode("\n", <<< 'EOF'
<body>

<script src="script.js"></script>

</body>
</html>
EOF
)
],
            [
                'title' => 'エディタ(script.js)',
                'ext' => 'js',
                'name' => 'index',
                "contents" => explode("\n", <<< 'EOF'
for(var i = 0; i < 6; i++){
    if(XXXX){
        document.write( i );
    }
}
EOF
)
],
        ]
    ],
    [ // vol2
        "output" => "",
        "model" =>  explode("\n", <<< 'EOF'
<index.html>
変更なし

<script.js>
for文内に「初期値を1 」、「 10未満」、「増減式は1ずつ増加」と記述し、かつ変数iが4以上の場合は、「変数i」をループで出力し、それ以外の場合は全て「☆」を出力出来るように、XXXXをそれぞれ変更してください。
EOF
)
,
        "inputs" => [
            [
                'title' => 'エディタ(index.html)',
                'ext' => 'html',
                'name' => 'index',
                "contents" => explode("\n", <<< 'EOF'
<body>

<script src="script.js"></script>

</body>
</html>
EOF
)
],
            [
                'title' => 'エディタ(script.js)',
                'ext' => 'js',
                'name' => 'index',
                "contents" => explode("\n", <<< 'EOF'
for(var i = 1; XXXX; i++){
    if(XXXX){
        document.write( i );
    }else{
        document.write( "☆" );
    }
}
EOF
)
],
        ]
    ],
    [ // vol3
        "output" => "",
        "model" =>  explode("\n", <<< 'EOF'
<index.html>
変更なし

<script.js>
「★☆★☆★☆★☆★☆」と出力出来るようにXXXXを変更してください。
EOF
)
,
        "inputs" => [
            [
                'title' => 'エディタ(index.html)',
                'ext' => 'html',
                'name' => 'index',
                "contents" => explode("\n", <<< 'EOF'
<body>

<script src="script.js"></script>

</body>
</html>
EOF
)
],
            [
                'title' => 'エディタ(script.js)',
                'ext' => 'js',
                'name' => 'index',
                "contents" => explode("\n", <<< 'EOF'
for(var i = 1; i<=10; i++){
  if(XXXXX){
    document.write("☆");
  }else{
　document.write("★");
}
}
EOF
)
],
        ]
    ],
    [ // vol4
        "output" => "",
        "model" =>  explode("\n", <<< 'EOF'
<index.html>
変更なし

<script.js>
次のように出力出来るようにXXXXを変更してください。なお、for文内の条件式には、 「以下」を使用してください。

<出力結果>
★★
★★
★★
EOF
)
,
        "inputs" => [
            [
                'title' => 'エディタ(index.html)',
                'ext' => 'html',
                'name' => 'index',
                "contents" => explode("\n", <<< 'EOF'
<body>

<script src="script.js"></script>

</body>
</html>
EOF
)
],
            [
                'title' => 'エディタ(script.js)',
                'ext' => 'js',
                'name' => 'index',
                "contents" => explode("\n", <<< 'EOF'
for(var i = 1; XXXX  i++){
  for(var a = 1; XXXX  a++){
    document.write("★");
  }
  XXXX
}
EOF
)
],
        ]
    ]
];
