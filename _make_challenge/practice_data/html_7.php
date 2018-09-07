<?php

return [
    [ // vol1
        "output" => "",
        "model" =>  explode("\n", <<< 'EOF'
××××を『コンテンツ1』に変更し、横1行（tr）、縦１列（td）、テーブル境界線(border)が"2"のテーブルを表示させて下さい。
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

<table border="2">
 XXXX
</table>

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
『コンテンツ１』、『コンテンツ２』を横1行（tr）、縦２列（td）、テーブル境界線(border)が"2"のテーブルで表示させて下さい。
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


コンテンツ２


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
『コンテンツ１』、 『コンテンツ２』を横２行（tr）、縦１列（td）、テーブル境界線(border)が"2"のテーブルで表示させて下さい。
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

コンテンツ１
コンテンツ２

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
『コンテンツ１』、 『コンテンツ２』、 『コンテンツ３』、 『コンテンツ４』を、
横２行（tr）、縦２列（td）、テーブル境界線(border)が"2"のテーブルで表示させて下さい。
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

コンテンツ１
コンテンツ２
コンテンツ３
コンテンツ４

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
 『コンテンツ１』、 『コンテンツ２』、 『コンテンツ３』、 『コンテンツ４』を、
横２行（tr）、縦２列（td）、テーブル境界線(border)が"2"のテーブルを作成し、セルの間隔を指定する「cellspacing ="10"」を指定して下さい。
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

コンテンツ１
コンテンツ２
コンテンツ３
コンテンツ４

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
 『コンテンツ１』、 『コンテンツ２』、 『コンテンツ３』、 『コンテンツ４』を、
横２行（tr）、縦２列（td）、テーブル境界線(border)が"1"のテーブルを作成し、セルの間隔を指定する「cellspacing ="3"」とセル内のコンテンツのスペースを指定する「cellpadding="10"」を指定して下さい。
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

コンテンツ１
コンテンツ２
コンテンツ３
コンテンツ４

</body>
</html>
EOF
)
            ]
        ]
    ],
    [ // vol7
        "output" => "",
        "model" =>  explode("\n", <<< 'EOF'
 『コンテンツ１』、 『コンテンツ２』、 『コンテンツ３』、 『コンテンツ４』を、
横２行（tr）、縦２列（td）、テーブル境界線(border)が"1"のテーブルを作成し、1行目の背景色のみを「gray」で指定して下さい。
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

コンテンツ１
コンテンツ２
コンテンツ３
コンテンツ４

</body>
</html>
EOF
)
            ]
        ]
    ]
];
