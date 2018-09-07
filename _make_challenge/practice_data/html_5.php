<?php

return [
    [ // vol1
        "output" => "",
        "model" =>  explode("\n", <<< 'EOF'
『日本オラクル株式会社』に、「http://www.oracle.com/jp/index.html」へリンクする「外部リンクタグ」を挿入して下さい。
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
日本オラクル株式会社
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
『Microsoftのページへ移動します。』の
 "Microsoft" の文字列に、「https://www.microsoft.com/ja-jp/」へ
リンクする「リンクタグ」を挿入して下さい。
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
Microsoftのページへ移動します。
</body>
</html>
EOF
)
],
        ]
    ]
];
