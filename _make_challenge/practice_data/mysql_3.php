<?php

return [
    [ // vol1
        "output" => "",
        "model" =>  explode("\n", <<< 'EOF'
下記のテーブルを作成してください。

テーブル名：
customer_data

カラム：
id、name、mail、telの4つ

データ型：
idのカラムだけint(11)で指定し、その他のカラムは、varchar(255)で指定
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
前の問題で作成したテーブル『customer_data』に、下記のデータを挿入してください。

+------+----------+--------------------+---------------+
| id   | name     | mail               | tel           |
+------+----------+--------------------+---------------+
|    1 | 山田太郎 | y.taro@gmail.com   | 03-1511-3333  |
|    2 | 佐藤花子 | h.sato@yahoo.co.jp | 090-7724-8842 |
|    3 | 田中次郎 | tziro@gmail.com    | 080-8824-4445 |
|    4 | 鈴木三郎 | sabuszk@gmail.com  | 090-2224-8424 |
+------+----------+--------------------+---------------+

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
    ]
];
