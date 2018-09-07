<?php

return [
    [ // vol1
        "output" => "0\n1\n2\n3\n4\n",
        "model" =>  explode("\n", <<< 'EOF'
do while文で「0～4」をループで出力出来るように、 XXXXを変更してください。
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

int i = 0;

XXXX {

  System.out.println( i );
  i++;

} while ( i < 5 );

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
do while文で「5～9」をループで出力出来るように、 XXXXを変更してください。
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

int i = 5;

XXXX {

  System.out.println( i );
  i++;

} XXXX ( i < 10 );

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
do while文で「3～1」をループで出力出来るように、 XXXXを変更してください。
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

int i = XXXX;

do {

  System.out.println( i );
  XXXX

} while ( i > 0 );

}

}

EOF
)
],
        ]
    ]
];
