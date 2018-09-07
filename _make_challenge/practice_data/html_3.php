<?php

return [
    [ // vol1
        "output" => "",
        "model" =>  explode("\n", <<< 'EOF'
××××を『こんにちは』に変更し、
『こんにちは』を表示させて下さい。
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
××××
</body>
</html>
EOF
)
],
        ]
    ],
    [ // vol2
        "output" => "",
        "model" =>  explode("\n", <<< 'EOF'
『文章を、改行してみましょう。』
の読点（、）の後に「改行タグ」を入れ、
『改行してみましょう。 』を二行目に表示させて下さい。
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

文章を、改行してみましょう。

</body>
</html>
EOF
)
],
        ]
    ],
    [ // vol3
        "output" => "",
        "model" =>  explode("\n", <<< 'EOF'
『それでは、テキストを改行するタグを、学習しましょう。』の2つの読点（、）の後にそれぞれ「改行タグ」を入れて、文章を３行で表示させて下さい。
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

それでは、テキストを改行するタグを、学習しましょう。

</body>
</html>
EOF
)
],
        ]
    ],
    [ // vol4
        "output" => "",
        "model" =>  explode("\n", <<< 'EOF'
『タイトル１』を「h1」タグで、
『タイトル２』を「h2」タグで表示させて下さい。
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

 タイトル１
 タイトル２

</body>
</html>
EOF
)
],
        ]
    ],
    [ // vol5
        "output" => "",
        "model" =>  explode("\n", <<< 'EOF'
『この文章は、段落の内容です。』を、段落タグ「pタグ」で囲んでください。
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

<h1>タイトル</h1>
この文章は、段落の内容です。

</body>
</html>
EOF
)
],
        ]
    ],
    [ // vol6
        "output" => "",
        "model" =>  explode("\n", <<< 'EOF'
『 はじめまして<br>
 私の名前は、<br>
 山田太郎です。<br>』を、段落タグ「pタグ」で囲んでください。
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

<h1>タイトル</h1>

はじめまして、<br>
私の名前は、<br>
山田太郎です。

</body>
</html>
EOF
)
            ]
        ]
    ]
];
