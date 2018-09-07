<?php

return [
    [ // vol1
        "output" => "Hello Java!\n",
        "model" =>  explode("\n", <<< 'EOF'
文字列で「 Hello Java! 」と出力できるようにXXXXを変更してください。
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

System.out.println(XXXX);

}

}
EOF
)
],
        ]
    ],
    [ // vol2
        "output" => "お疲れ様です。\n",
        "model" =>  explode("\n", <<< 'EOF'
文字列で「お疲れ様です。」と出力できるようにXXXXをそれぞれ変更してください。
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

XXXX(XXXX);

}

}
EOF
)
],
        ]
    ],
    [ // vol3
        "output" => "0\n",
        "model" =>  explode("\n", <<< 'EOF'
数値で「0」と出力できるようにXXXXを変更してください。
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

System.out.println(XXXX);

}

}
EOF
)
],
        ]
    ],
    [ // vol4
        "output" => "3776\n",
        "model" =>  explode("\n", <<< 'EOF'
数値で「3776」と出力できるようにXXXXを変更してください。
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

System.out.println(XXXX);

}

}
EOF
)
],
        ]
    ],
    [ // vol5
        "output" => "・設計書・遷移図\n",
        "model" =>  explode("\n", <<< 'EOF'
文字列で「 ・設計書・遷移図」と出力できるようにXXXXをそれぞれ変更してください。
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

XXXX(XXXX);

}

}
EOF
)
],
        ]
    ],
    [ // vol6
        "output" => "・設計書\n・遷移図\n",
        "model" =>  explode("\n", <<< 'EOF'
次のように文字列を出力出来るようにXXXXをそれぞれ変更してください。

<出力結果>
・設計書
・遷移図
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

XXXX(XXXX);
XXXX(XXXX);

}

}
EOF
)
],
        ]
    ],
    [ // vol7
        "output" => "・設計書\r\n・遷移図\n",
        "model" =>  explode("\n", <<< 'EOF'
改行コード「\r\n」を使って次のように文字列を出力出来るようにXXXXをそれぞれ変更してください。

<出力結果>
・設計書
・遷移図
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

XXXX(XXXX);

}

}
EOF
)
],
        ]
    ]
];
