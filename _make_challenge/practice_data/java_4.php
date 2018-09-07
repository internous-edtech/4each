<?php

return [
    [ // vol1
        "output" => "こんにちは。\n",
        "model" =>  explode("\n", <<< 'EOF'
文字列で「こんにちは。」と出力できるようにXXXXを変更してください。
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

String jp = XXXX;
System.out.println(jp);

}

}
EOF
)
],
        ]
    ],
    [ // vol2
        "output" => "Hello!\n",
        "model" =>  explode("\n", <<< 'EOF'
文字列で「Hello!」と出力できるようにXXXXを変更してください。
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

String XXXX = "Hello!";
System.out.println(en);

}

}
EOF
)
],
        ]
    ],
    [ // vol3
        "output" => "〒100-0013\n",
        "model" =>  explode("\n", <<< 'EOF'
文字列で「 〒100-0013 」と出力できるようにXXXXを変更してください。
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

String XXXX = "〒100-0013";
System.out.println(zip);

}

}
EOF
)
],
        ]
    ],
    [ // vol4
        "output" => "P\n",
        "model" =>  explode("\n", <<< 'EOF'
文字で「P」と出力できるようにXXXXをそれぞれ変更してください。
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

XXXX chr = XXXX;
System.out.println(chr);

}

}
EOF
)
],
        ]
    ],
    [ // vol5
        "output" => "999\n",
        "model" =>  explode("\n", <<< 'EOF'
数値で「999」と出力できるようにXXXXをそれぞれ変更してください。
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

XXXX i = XXXX;
System.out.println(i);

}

}
EOF
)
],
        ]
    ],
    [ // vol6
        "output" => "true\n",
        "model" =>  explode("\n", <<< 'EOF'
真偽値で「true」と出力できるようにXXXXを変更してください。
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

boolean boo= XXXX;
System.out.println(boo);

}

}
EOF
)
],
        ]
    ],
    [ // vol7
        "output" => "70\n",
        "model" =>  explode("\n", <<< 'EOF'
数値で「 70 」と出力できるようにXXXXを変更してください。
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

XXXX ex = 20+50;
System.out.println(ex);

}

}
EOF
)
],
        ]
    ],
    [ // vol8
        "output" => "20+50\n",
        "model" =>  explode("\n", <<< 'EOF'
文字列で「 20+50 」と出力できるようにXXXXをそれぞれ変更してください。
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

XXXX ex = XXXX;
System.out.println(ex);

}

}
EOF
)
],
        ]
    ],
    [ // vol9
        "output" => "渡辺さん\n",
        "model" =>  explode("\n", <<< 'EOF'
文字列で「渡辺さん」と出力できるようにXXXXを変更してください。
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

String str = "渡辺";
System.out.println(XXXX);

}

}
EOF
)
],
        ]
    ]
];
