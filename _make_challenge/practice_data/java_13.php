<?php

return [
    [ // vol1
        "output" => "1\n3\n5\n7\n9\n",
        "model" =>  explode("\n", <<< 'EOF'
for文内に「初期値を0 」、「 10未満」、「増減式は1ずつ増加」と記述し、かつ変数iが「奇数」の場合、「変数i」をループで出力出来るように、XXXXを変更してください。
EOF
)
,
        "inputs" => [
            [
                'title' => 'エディタ',
                'ext' => 'server',
                'name' => 'index',
                "contents" => explode("\n", <<< 'EOF'
public class Test {

public static void main(String[] args) {

for ( int i = 0; i < 10; i++ )  {

  XXXX ( XXXX ) {

    System.out.println(i);

  }

}

}

}
EOF
)
],
        ]
    ],
    [ // vol2
        "output" => "1\n2\n3\n1\n2\n3\n",
        "model" =>  explode("\n", <<< 'EOF'
次のように出力出来るようにXXXXをそれぞれ変更してください。なお、for文内の条件式には、 「以下」を使用してください。

<出力結果>
1
2
3
1
2
3
EOF
)
,
        "inputs" => [
            [
                'title' => 'エディタ',
                'ext' => 'server',
                'name' => 'index',
                "contents" => explode("\n", <<< 'EOF'
public class Test {

public static void main(String[] args) {

for ( int i = 1;  XXXX  XXXX )  {

  for (int j = 1; XXXX  XXXX ) {

    System.out.println(j);

  }

}

}

}
EOF
)
],
        ]
    ],
    [ // vol3
        "output" => "☆\n★\n☆\n★\n☆\n",
        "model" =>  explode("\n", <<< 'EOF'
次のように出力出来るようにXXXXをそれぞれ変更してください。

<出力結果>
☆
★
☆
★
☆
EOF
)
,
        "inputs" => [
            [
                'title' => 'エディタ',
                'ext' => 'server',
                'name' => 'index',
                "contents" => explode("\n", <<< 'EOF'
public class Test {

public static void main(String[] args) {

XXXX ( int i = 0; i < 5; i++ )  {

  String str = i % 2 == 0 ? XXXX : XXXX;

  System.out.println(str);

}

}

}
EOF
)
],
        ]
    ],
    [ // vol4
        "output" => "1\n2\n★\n4\n5\n★\n7\n8\n★\n10\n",
        "model" =>  explode("\n", <<< 'EOF'
次のように出力出来るようにXXXXをそれぞれ変更してください。

<出力結果>
1
2
★
4
5
★
7
8
★
10
EOF
)
,
        "inputs" => [
            [
                'title' => 'エディタ',
                'ext' => 'server',
                'name' => 'index',
                "contents" => explode("\n", <<< 'EOF'
public class Test {

public static void main(String[] args) {

for ( int i = 1; i < XXXX; i++ )  {

  String str = i % XXXX == 0 ? "XXXX" : XXXX;

  System.out.println(str);

}

}

}
EOF
)
],
        ]
    ]
];
