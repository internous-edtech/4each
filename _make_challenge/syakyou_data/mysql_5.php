<?php

return [
<<< 'EOF'
下記のテーブルfruit_stockから、全てのデータを抽出し、numberの小さい順に並び替える。

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

<写経内容>
select * from  fruit_stock order by number asc;
EOF
,
<<< 'EOF'
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

<写経内容>
select * from  fruit_stock order by number desc;
EOF
,
<<< 'EOF'
下記のテーブルfruit_stockから、fruitとpriceのカラムのみを抽出し、priceの小さい順に並び替える。

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

<写経内容>
select fruit,price from fruit_stock order by price asc;
EOF
,
<<< 'EOF'
EOF
,
<<< 'EOF'
EOF
];