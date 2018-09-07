<?php

return [
    [ // vol1
        "output" => "OK\n",
        "model" =>  explode("\n", <<< 'EOF'
変数int iに「5」を代入し、もしiが10未満の場合は「OK」と出力出来るように、XXXXをそれぞれ変更してください。
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

XXXX (XXXX) {
    System.out.println("OK");
}

}

}
EOF
)
],
        ]
    ],
    [ // vol2
        "output" => "OK\n",
        "model" =>  explode("\n", <<< 'EOF'
変数int iに「5」を代入し、もし変数int iが1以上の場合は「OK」と出力出来るように、XXXXをそれぞれ変更してください。
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

if (XXXX) {
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
        "output" => "青木様\n",
        "model" =>  explode("\n", <<< 'EOF'
変数String strに「青木」を代入し、もし変数String strが青木であれば、「青木様 」と出力出来るように、XXXXをそれぞれ変更してください。
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

String str = XXXX

if (XXXX( "青木" )) {
    System.out.println(str + "様");
}

}

}
EOF
)
],
        ]
    ],
    [ // vol4
        "output" => "OK\n",
        "model" =>  explode("\n", <<< 'EOF'
変数int iに「30」を代入し、もし変数int iが11以上100未満であれば「 OK 」 と出力出来るように、XXXXをそれぞれ変更してください。
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

int i = 30;

if (XXXX) {
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
        "output" => "OK\n",
        "model" =>  explode("\n", <<< 'EOF'
変数int iに「16」を代入し、もし変数int iが20未満または60以上であれば「 OK 」 と出力出来るように、XXXXをそれぞれ変更してください。
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

if (XXXX) {
    System.out.println("OK");
}

}

}
EOF
)
],
        ]
    ],
    [ // vol6
        "output" => "NG\n",
        "model" =>  explode("\n", <<< 'EOF'
変数int iに「5」を代入し、もし変数int iが10以上であれば「 OK 」 と出力し、それ以外の場合で、もし変数int iが7未満ならば「 NG 」 と出力出来るようにXXXXをそれぞれ変更してください。
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

if (XXXX) {
    System.out.println("OK");
} XXXX (XXXX) {
    System.out.println("NG");
}

}

}
EOF
)
],
        ]
    ],
    [ // vol7
        "output" => "NG\n",
        "model" =>  explode("\n", <<< 'EOF'
変数int iに「5」を代入し、もし変数int iが10以上であれば「 OK 」 と出力し、それ以外の場合は全て「 NG 」と出力出来るようにXXXXをそれぞれ変更してください。
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

if (XXXX) {
    System.out.println("OK");
} XXXX {
    System.out.println("NG");
}

}

}
EOF
)
],
        ]
    ],
    [ // vol8
        "output" => "Middle\n",
        "model" =>  explode("\n", <<< 'EOF'
変数int iに「70」を代入し、もし変数int iが90以上であれば「 Top 」 と出力し、それ以外の場合で、もし変数int iが40未満ならば「 Bottom 」 と出力し、それ以外の場合は全て「 Middle 」と出力出来るようにXXXXをそれぞれ変更してください。
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

int i = 70;

if (i >= 90) {
    System.out.println("Top");
} XXXX (i < 40) {
    System.out.println("Bottom");
} XXXX {
    System.out.println("Middle");
}

}

}
EOF
)
],
        ]
    ],
    [ // vol9
        "output" => "成人\n",
        "model" =>  explode("\n", <<< 'EOF'
変数int ageに「30」を代入し、もし変数int iが20未満であれば「 未成年 」 と出力し、それ以外の場合で、もし変数int iが80以上ならば 「 高齢者 」 と出力し、それ以外の場合は全て「成人」と出力出来るようにXXXXをそれぞれ変更してください。
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

int age = 30;

if (XXXX) {
    System.out.println("未成年");
} XXXX (XXXX) {
    System.out.println("高齢者");
} XXXX {
    System.out.println("成人");
}

}

}
EOF
)
],
        ]
    ],
    [ // vol10
        "output" => "奇数\n",
        "model" =>  explode("\n", <<< 'EOF'
変数int ageに「19」を代入し、もし変数int iが偶数であれば「 偶数 」 と出力し、それ以外の場合は全て「奇数」と出力出来るようにXXXXをそれぞれ変更してください。
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

int i = 19;

if (XXXX) {
    System.out.println("偶数");
} XXXX {
    System.out.println("奇数");
}

}

}
EOF
)
],
        ]
    ]
];
