<?php

return [
    [ // vol1
        "output" => "",
        "model" =>  explode("\n", <<< 'EOF'
<index.html>
変更なし

<script.js>
「123」と出力できるようにXXXXをそれぞれ変更してください。なお、while文内の条件式には「以下」を使用してください。
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
var i = 1;

while(XXXX){
    document.write( i );
    XXXX
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
「234」と出力できるようにXXXXをそれぞれ変更してください。なお、while文内の条件式には「以下」を使用してください。
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
var i = 1;

while(XXXX){
    XXXX
    document.write( i );
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
次のように出力出来るようにXXXXを変更してください。なお、while文内の条件式には、 「～を超過」を使用してください。

<出力結果>
999
998
997
996
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
var i = 999;

while(i XXXX 995){
    document.write( i );
    document.write( "<br>" );
    i--;
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
次のように出力出来るようにXXXXを変更してください。

<出力結果>
11
10
9
8
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
var i=XXXX;

while(i >= 9){
    i--;
    document.write( i+ "<br>" );
}
EOF
)
],
        ]
    ],
    [ // vol5
        "output" => "",
        "model" =>  explode("\n", <<< 'EOF'
<index.html>
変更なし

<script.js>
次のように出力出来るようにXXXXをそれぞれ変更してください。なお、while文内の条件式には、 「以下」を使用してください。

<出力結果>
11
12
13
14
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
var i = XXXX

while(XXXX){
    i++;
    document.write( i+"<br>" );
}
EOF
)
],
        ]
    ],
    [ // vol6
        "output" => "",
        "model" =>  explode("\n", <<< 'EOF'
<index.html>
変更なし

<script.js>
次のように出力出来るようにXXXXをそれぞれ変更してください。なお、while文内の条件式には、 「以下」を使用してください。

<出力結果>
★
★
★
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
var i = 1;

while(XXXX){
    document.write( XXXX );
    i++;
}
EOF
)
],
        ]
    ],
    [ // vol7
        "output" => "",
        "model" =>  explode("\n", <<< 'EOF'
<index.html>
変更なし

<script.js>
次のように出力出来るようにXXXXをそれぞれ変更してください。なお、while文内の条件式には、 「以下」を使用してください。

<出力結果>
★☆★☆★
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
while(XXXX){
    if(XXXX){document.write(XXXX);
	}else
              {document.write(XXXX);
	}
              XXXX
            }
EOF
)
],
        ]
    ]
];
