<?php

return [
    [ // vol1
        "output" => "",
        "model" =>  explode("\n", <<< 'EOF'
下記のテーブルfruit_stockから、全てのデータを抽出し、priceの小さい順に並び替える。

+------+--------------+--------+-------+--------------+
| id   | fruit        | number | price | madein       |
+------+--------------+--------+-------+--------------+
|    1 | りんご       | 33     | 100   | 日本         |
|    2 | オレンジ     | 40     | 120   | 日本         |
|    3 | イチゴ       | 10     | 250   | 日本         |
|    4 | ぶどう       | 25     | 240   | アメリカ     |
|    5 | ナシ         | 23     | 150   | 日本         |
|    6 | パイナップル | 15     | 230   | フィリピン   |
+------+--------------+--------+-------+--------------+

EOF
)
,
        "inputs" => [
            [
                'title' => 'エディタ',
                'ext' => 'sql',
                'name' => 'index',
                "contents" => explode("\n", <<< 'EOF'
EOF
)
],
        ]
    ],
    [ // vol2
        "output" => "",
        "model" =>  explode("\n", <<< 'EOF'
下記のテーブルfruit_stockから、全てのデータを抽出し、numberの大きい順に並び替える。

+------+--------------+--------+-------+--------------+
| id   | fruit        | number | price | madein       |
+------+--------------+--------+-------+--------------+
|    1 | りんご       | 33     | 100   | 日本         |
|    2 | オレンジ     | 40     | 120   | 日本         |
|    3 | イチゴ       | 10     | 250   | 日本         |
|    4 | ぶどう       | 25     | 240   | アメリカ     |
|    5 | ナシ         | 23     | 150   | 日本         |
|    6 | パイナップル | 15     | 230   | フィリピン   |
+------+--------------+--------+-------+--------------+

EOF
)
,
        "inputs" => [
            [
                'title' => 'エディタ',
                'ext' => 'sql',
                'name' => 'index',
                "contents" => explode("\n", <<< 'EOF'
EOF
)
],
        ]
    ],
    [ // vol3
        "output" => "",
        "model" =>  explode("\n", <<< 'EOF'
下記のテーブルfruit_stockから、fruitとpriceのカラムのみを抽出し、priceの大きい順に並び替える。

+------+--------------+--------+-------+--------------+
| id   | fruit        | number | price | madein       |
+------+--------------+--------+-------+--------------+
|    1 | りんご       | 33     | 100   | 日本         |
|    2 | オレンジ     | 40     | 120   | 日本         |
|    3 | イチゴ       | 10     | 250   | 日本         |
|    4 | ぶどう       | 25     | 240   | アメリカ     |
|    5 | ナシ         | 23     | 150   | 日本         |
|    6 | パイナップル | 15     | 230   | フィリピン   |
+------+--------------+--------+-------+--------------+

EOF
)
,
        "inputs" => [
            [
                'title' => 'エディタ',
                'ext' => 'sql',
                'name' => 'index',
                "contents" => explode("\n", <<< 'EOF'
EOF
)
],
        ]
    ],
    [ // vol4
        "output" => "",
        "model" =>  explode("\n", <<< 'EOF'
下記のテーブルuserから、nameとmailのカラムのみを抽出してください。

+--------+----------+---------------------+---------------+
| userid | name     | mail                | tel           |
+--------+----------+---------------------+---------------+
|      1 | 加藤太郎 | k.taro@gmail.com    | 090-1111-2222 |
|      2 | 阿部次郎 | jiroabe@yahoo.co.jp | 080-7777-5555 |
|      3 | 井上広子 | h.inoue@gmail.com   | 080-2222-6666 |
|      4 | 渡邊恵子 | keiko.w@gmail.com   | 090-3333-8888 |
+--------+----------+---------------------+---------------+

EOF
)
,
        "inputs" => [
            [
                'title' => 'エディタ',
                'ext' => 'sql',
                'name' => 'index',
                "contents" => explode("\n", <<< 'EOF'
EOF
)
],
        ]
    ],
    [ // vol5
        "output" => "",
        "model" =>  explode("\n", <<< 'EOF'
下記のテーブルuserから、useridが2以上のデータを全て抽出してください。

+--------+----------+---------------------+---------------+
| userid | name     | mail                | tel           |
+--------+----------+---------------------+---------------+
|      1 | 加藤太郎 | k.taro@gmail.com    | 090-1111-2222 |
|      2 | 阿部次郎 | jiroabe@yahoo.co.jp | 080-7777-5555 |
|      3 | 井上広子 | h.inoue@gmail.com   | 080-2222-6666 |
|      4 | 渡邊恵子 | keiko.w@gmail.com   | 090-3333-8888 |
+--------+----------+---------------------+---------------+

EOF
)
,
        "inputs" => [
            [
                'title' => 'エディタ',
                'ext' => 'sql',
                'name' => 'index',
                "contents" => explode("\n", <<< 'EOF'
EOF
)
],
        ]
    ],
    [ // vol6
        "output" => "",
        "model" =>  explode("\n", <<< 'EOF'
下記のテーブルuserから、nameに『子』が含まれるデータを全て抽出。

+--------+----------+---------------------+---------------+
| userid | name     | mail                | tel           |
+--------+----------+---------------------+---------------+
|      1 | 加藤太郎 | k.taro@gmail.com    | 090-1111-2222 |
|      2 | 阿部次郎 | jiroabe@yahoo.co.jp | 080-7777-5555 |
|      3 | 井上広子 | h.inoue@gmail.com   | 080-2222-6666 |
|      4 | 渡邊恵子 | keiko.w@gmail.com   | 090-3333-8888 |
+--------+----------+---------------------+---------------+

EOF
)
,
        "inputs" => [
            [
                'title' => 'エディタ',
                'ext' => 'sql',
                'name' => 'index',
                "contents" => explode("\n", <<< 'EOF'
EOF
)
],
        ]
    ],
    [ // vol7
        "output" => "",
        "model" =>  explode("\n", <<< 'EOF'
下記のテーブルuserのuserid=1の
mailをtaro@yahoo.co.jpに変更。

+--------+----------+---------------------+---------------+
| userid | name     | mail                | tel           |
+--------+----------+---------------------+---------------+
|      1 | 加藤太郎 | k.taro@gmail.com    | 090-1111-2222 |
|      2 | 阿部次郎 | jiroabe@yahoo.co.jp | 080-7777-5555 |
|      3 | 井上広子 | h.inoue@gmail.com   | 080-2222-6666 |
|      4 | 渡邊恵子 | keiko.w@gmail.com   | 090-3333-8888 |
+--------+----------+---------------------+---------------+

EOF
)
,
        "inputs" => [
            [
                'title' => 'エディタ',
                'ext' => 'sql',
                'name' => 'index',
                "contents" => explode("\n", <<< 'EOF'
<?php

XXXX

?>
EOF
)
],
        ]
    ],
    [ // vol8
        "output" => "",
        "model" =>  explode("\n", <<< 'EOF'
下記のテーブルuserから、id=4のデータを削除。

+--------+----------+---------------------+---------------+
| userid | name     | mail                | tel           |
+--------+----------+---------------------+---------------+
|      1 | 加藤太郎 | k.taro@gmail.com    | 090-1111-2222 |
|      2 | 阿部次郎 | jiroabe@yahoo.co.jp | 080-7777-5555 |
|      3 | 井上広子 | h.inoue@gmail.com   | 080-2222-6666 |
|      4 | 渡邊恵子 | keiko.w@gmail.com   | 090-3333-8888 |
+--------+----------+---------------------+---------------+

EOF
)
,
        "inputs" => [
            [
                'title' => 'エディタ',
                'ext' => 'sql',
                'name' => 'index',
                "contents" => explode("\n", <<< 'EOF'
EOF
)
],
        ]
    ],
];
