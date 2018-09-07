<?php

return [
    [ // vol1
        "output" => "12\n",
        "model" =>  explode("\n", <<< 'EOF'
変数int numに下の「数A＋数B」の計算式を代入し、その結果が出力出来るようにXXXXをそれぞれ変更してください。


数A = 9
数B = 3
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

int num = XXXX;
System.out.println(XXXX);

}

}
}
EOF
)
],
        ]
    ],
    [ // vol2
        "output" => "6\n",
        "model" =>  explode("\n", <<< 'EOF'
変数int numに下の「数A-数B」の計算式を代入し、その結果が出力出来るようにXXXXをそれぞれ変更してください。


数A = 9
数B = 3
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

int num = XXXX;
System.out.println(XXXX);

}

}
EOF
)
],
        ]
    ],
    [ // vol3
        "output" => "-27\n",
        "model" =>  explode("\n", <<< 'EOF'
変数int numに下の「数A×数B」の計算式を代入し、その結果が出力出来るようにXXXXをそれぞれ変更してください。


数A = -9
数B = 3
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

int num = XXXX;
System.out.println(XXXX);

}

}
}
EOF
)
],
        ]
    ],
    [ // vol4
        "output" => "3\n",
        "model" =>  explode("\n", <<< 'EOF'
変数int numに下の「数A÷数B」の計算式を代入し、その結果が出力出来るようにXXXXをそれぞれ変更してください。


数A = 9
数B = 3
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

int num = XXXX;
System.out.println(XXXX);

}

}
EOF
)
],
        ]
    ],
    [ // vol5
        "output" => "0\n",
        "model" =>  explode("\n", <<< 'EOF'
変数int numに下の「数A÷数B」の計算式を代入し、その結果が出力出来るようにXXXXをそれぞれ変更してください。


数A = 0
数B = 3
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

int num = XXXX;
System.out.println(XXXX);

}

}
EOF
)
],
        ]
    ],
    [ // vol6
        "output" => "2.6666667\n",
        "model" =>  explode("\n", <<< 'EOF'
変数float numに下の「数A÷数B」の計算式を代入し、その結果が小数点で出力出来るようにXXXXをそれぞれ変更してください。


数A = 9
数B = 3
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

XXXX num = XXXX;
System.out.println(XXXX);

}

}
}
EOF
)
],
        ]
    ],
    [ // vol7
        "output" => "2.6666666666666665\n",
        "model" =>  explode("\n", <<< 'EOF'
変数doubole numに下の「数A÷数B」の計算式を代入し、その結果が小数点で出力出来るようにXXXXをそれぞれ変更してください。


数A = 9
数B = 3
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

XXXX num = XXXX;
System.out.println(XXXX);

}

}
EOF
)
],
        ]
    ],
    [ // vol8
        "output" => "4.5\n",
        "model" =>  explode("\n", <<< 'EOF'
変数float numに下の「数A÷数B」の計算式を代入し、その結果が小数点で出力出来るようにXXXXをそれぞれ変更してください。


数A = 9
数B = 2
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

XXXX num = XXXX;
System.out.println(XXXX);

}

}
EOF
)
],
        ]
    ],
    [ // vol9
        "output" => "4.5\n",
        "model" =>  explode("\n", <<< 'EOF'
変数double numに下の「数A÷数B」の計算式を代入し、その結果が小数点で出力出来るようにXXXXをそれぞれ変更してください。


数A = 9
数B = 2
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

XXXX num = XXXX;
System.out.println(XXXX);

}

}
EOF
)
],
        ]
    ],
    [ // vol10
        "output" => "1\n",
        "model" =>  explode("\n", <<< 'EOF'
下の「数Aと数Bの剰余」の計算式を出力出来るようにXXXXをそれぞれ変更してください。


数A = 9
数B = 2
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

int num = XXXX ;
System.out.println(num);

}

}
EOF
)
],
        ]
    ]
];
