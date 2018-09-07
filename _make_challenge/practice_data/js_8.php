<?php

return [
    [ // vol1
        "output" => "",
        "model" =>  explode("\n", <<< 'EOF'
<index.html>
変更なし

<script.js>
変数numに「12」を代入し、もし変数numが10以上の場合で、かつ変数numが20未満の場合は、「A」と出力出来るようにXXXXをそれぞれ変更してください。
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
var num = XXXX;

if(XXXX){
    if(XXXX){
        document.write("A");
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
変数ageに「59」を代入し、もし変数ageが20以上の場合で、かつ変数ageが60未満の場合は、「一般」と出力出来るようにXXXXをそれぞれ変更してください。
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
var age = XXXX;

if(XXXX){
    if(XXXX){
 　　XXXX
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
変数apple_sizeに「8」を代入し、変数madeinに「青森」を代入してください。

もし変数apple_sizeが7以上の場合で、かつ変数madeinが青森の場合は、「検査合格」と出力出来るようにXXXXをそれぞれ変更してください。
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
var apple_size="XXXX";
var madein="XXXX";

if(XXXX){
  if(XXXX){
    document.write("検査合格");
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
変数numに「14」を代入し、もし変数numが偶数の場合で、かつ変数numが10未満の場合は、 「10未満の偶数です」と出力し、それ以外の場合は全て「10以上の偶数です」出力出来るようにXXXXをそれぞれ変更してください。
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
var num=XXXX;

if(XXXX){
  if(XXXX){
　　　　　document.write("10未満の偶数です");
              }else{
                    document.write("10以上の偶数です");
                    }
                  }
EOF
)
],
        ]
    ]
];
