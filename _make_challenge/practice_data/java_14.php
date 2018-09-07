<?php

return [
    [ // vol1
        "output" => "1\n2\n3\n4\n5\n",
        "model" =>  explode("\n", <<< 'EOF'
while文で「1～5」をループで出力出来るように、 XXXXを変更してください。
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

int i = 1;

XXXX ( i < 6 ) {

  System.out.println( i );
  i++;

}

}

}
EOF
)
],
        ]
    ],
    [ // vol2
        "output" => "6\n7\n8\n9\n10\n",
        "model" =>  explode("\n", <<< 'EOF'
while文で「6～10」をループで出力出来るように、 XXXXを変更してください。なお、while文内の条件式には「未満」を使用してください。
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

int i = 6;

while ( XXXX ) {

  System.out.println( i );
  i++;

}

}

}
EOF
)
],
        ]
    ],
    [ // vol3
        "output" => "3\n2\n1\n",
        "model" =>  explode("\n", <<< 'EOF'
while文で「3～1」をループで出力出来るように、 XXXXを変更してください。なお、while文内の条件式には「以上」を使用してください。
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

int i = 3;

while ( i > ０ ) {

  System.out.println( i );
  XXXX

}

}

}
EOF
)
],
        ]
    ],
    [ // vol4
        "output" => "1\n3\n5\n7\n9\n",
        "model" =>  explode("\n", <<< 'EOF'
「13579」と出力できるようにXXXXをそれぞれ変更してください。なお、while文内の条件式には「未満」を使用してください。
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

int i = 1;

while ( XXXX ) {

  System.out.println( i );
  XXXX

}

}

}
EOF
)
],
        ]
    ],
    [ // vol5
        "output" => "★\n★\n★\n",
        "model" =>  explode("\n", <<< 'EOF'
次のように出力出来るようにXXXXをそれぞれ変更してください。なお、while文内の条件式には、 「未満」を使用してください。

<出力結果>
★
★
★
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

int i = 1;

while ( XXXX ) {

  System.out.println("XXXX");
  i++;

}

}

}

EOF
)
],
        ]
    ]
];
