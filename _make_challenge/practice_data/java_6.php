<?php

return [
    [ // vol1
        "output" => "11\n",
        "model" =>  explode("\n", <<< 'EOF'
前置加算子を用いて「11」と出力できるように、 XXXXを変更してください。
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

int i = 10;
System.out.println(XXXX);

}

}
EOF
)
],
        ]
    ],
    [ // vol2
        "output" => "100\n",
        "model" =>  explode("\n", <<< 'EOF'
前置加算子を用いて「100」と出力できるように、 XXXXを変更してください。
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

int i = 99;
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
        "output" => "11\n12\n13\n14\n15\n",
        "model" =>  explode("\n", <<< 'EOF'
前置加算子を用いて、次のように出力できるように、 XXXXをそれぞれ変更してください。

<出力結果>
11
12
13
14
15
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

int i = 10;
System.out.println(XXXX);
System.out.println(XXXX);
System.out.println(XXXX);
System.out.println(XXXX);
System.out.println(XXXX);

}

}
EOF
)
],
        ]
    ],
    [ // vol4
        "output" => "10\n",
        "model" =>  explode("\n", <<< 'EOF'
後置加算子を用いて「10」と出力できるように、 XXXXを変更してください。
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

int i = 10;
System.out.println(XXXX);

}

}
EOF
)
],
        ]
    ],
    [ // vol5
        "output" => "99\n",
        "model" =>  explode("\n", <<< 'EOF'
後置加算子を用いて「99」と出力できるように、 XXXXを変更してください。
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

int i = 99;
System.out.println(XXXX);

}

}
EOF
)
],
        ]
    ],
    [ // vol6
        "output" => "10\n11\n12\n13\n14\n",
        "model" =>  explode("\n", <<< 'EOF'
後置加算子を用いて、次のように出力できるように、 XXXXをそれぞれ変更してください。

<出力結果>
10
11
12
13
14
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

int i = 10;
System.out.println(XXXX);
System.out.println(XXXX);
System.out.println(XXXX);
System.out.println(XXXX);
System.out.println(XXXX);

}

}
EOF
)
],
        ]
    ],
    [ // vol7
        "output" => "9\n",
        "model" =>  explode("\n", <<< 'EOF'
前置減算子を用いて「9」と出力できるように、 XXXXを変更してください。
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

int i = 10;
System.out.println(XXXX);

}

}
EOF
)
],
        ]
    ],
    [ // vol8
        "output" => "9\n8\n7\n6\n5\n",
        "model" =>  explode("\n", <<< 'EOF'
前置減算子を用いて、次のように出力できるように、 XXXXをそれぞれ変更してください。

<出力結果>
9
8
7
6
5
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

int i = 10;
System.out.println(XXXX);
System.out.println(XXXX);
System.out.println(XXXX);
System.out.println(XXXX);
System.out.println(XXXX);

}

}
EOF
)
],
        ]
    ],
    [ // vol9
        "output" => "10\n",
        "model" =>  explode("\n", <<< 'EOF'
後置減算子を用いて「10」と出力できるように、 XXXXを変更してください
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

int i = 10;
System.out.println(XXXX);

}

}
EOF
)
],
        ]
    ],
    [ // vol10
        "output" => "10\n9\n8\n7\n6\n",
        "model" =>  explode("\n", <<< 'EOF'
後置減算子を用いて、次のように出力できるように、 XXXXをそれぞれ変更してください。

<出力結果>
10
9
8
7
6
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

int i = 10;
System.out.println(XXXX);
System.out.println(XXXX);
System.out.println(XXXX);
System.out.println(XXXX);
System.out.println(XXXX);

}

}
EOF
)
],
        ]
    ]
];
