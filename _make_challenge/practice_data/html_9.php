<?php

return [
    [ // vol1
        "output" => "",
        "model" =>  explode("\n", <<< 'EOF'
ulとliを使用して『日本』、 『アメリカ』 、 『イギリス』の３項目を「箇条書きのリスト」で表示してください。
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

日本
アメリカ
イギリス

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
olとliを使用して『野球』、『サッカー』、『陸上』の３項目を番号付きのリストで表示してください。
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

野球
サッカー
陸上

</body>
EOF
)
],
        ]
    ]
];
