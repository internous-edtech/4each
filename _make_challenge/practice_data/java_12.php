<?php

return [
    [ // vol1
        "output" => "0\n1\n2\n",
        "model" =>  explode("\n", <<< 'EOF'
for文で「0～3」をループで出力出来るように、 XXXXを変更してください。
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

XXXX ( int i = 0; i < 3; i++ )  {

  System.out.println(i);

}

}

}
EOF
)
],
        ]
    ],
    [ // vol2
        "output" => "5\n6\n7\n8\n9\n",
        "model" =>  explode("\n", <<< 'EOF'
for文内に「初期値を5 」、「10未満」、「増減式は1ずつ増加」と記述し「1～10」をループで出力出来るように、 XXXXをそれぞれ変更してください。
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

for (XXXX  XXXX  i++ )  {

  System.out.println(XXXX);

}

}

}
EOF
)
],
        ]
    ],
    [ // vol3
        "output" => "10\n11\n12\n13\n",
        "model" =>  explode("\n", <<< 'EOF'
for文内に「初期値を10」、「14未満」、「増減式は1ずつ増加」と記述し「1～10」をループで出力出来るように、 XXXXをそれぞれ変更してください。
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

for ( int i = 10; i < XXXX; i++ )  {

  System.out.println(i);

}

}

}
EOF
)
],
        ]
    ],
    [ // vol4
        "output" => "9\n8\n7\n6\n5\n",
        "model" =>  explode("\n", <<< 'EOF'
for文内に「初期値を9」、「4を超過」、「増減式は1ずつ減少」と記述し「1～10」をループで出力出来るように、 XXXXをそれぞれ変更してください。
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

for ( XXXX  XXXX  XXXX )  {

  System.out.println(XXXX);

}

}

}
EOF
)
],
        ]
    ],
    [ // vol5
        "output" => "1\n3\n5\n7\n9\n",
        "model" =>  explode("\n", <<< 'EOF'
for文内に「初期値を1」、「10未満」、「増減式は2ずつ増加」と記述し「1～10」をループで出力出来るように、 XXXXをそれぞれ変更してください。
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

for ( int i = 1; i < 10 ; XXXX )  {

  System.out.println(i);

}

}

}
EOF
)
],
        ]
    ],
    [ // vol6
        "output" => "1\n4\n7\n",
        "model" =>  explode("\n", <<< 'EOF'
for文内に「初期値を1」、「10未満」、「増減式は3ずつ増加」と記述し「1～10」をループで出力出来るように、 XXXXをそれぞれ変更してください。
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

for ( int i = 1; i < 10 ; XXXX )  {

  System.out.println(i);

}

}

}
EOF
)
],
        ]
    ],
    [ // vol7
        "output" => "Hello!\nHello!\nHello!\nHello!\nHello!\n",
        "model" =>  explode("\n", <<< 'EOF'
for文内に「初期値を0」、「5未満」、「増減式は1ずつ増加」と記述し「Hello!」をループで出力出来るように、 XXXXをそれぞれ変更してください。
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

for ( XXXX  XXXX  XXXX )  {

  System.out.println("Hello!");

}

}

}
EOF
)
],
        ]
    ]
];
