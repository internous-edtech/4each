<?php

return [
    [ // vol1
        "output" => "北海道\n",
        "model" =>  explode("\n", <<< 'EOF'
「北海道」、「青森」、「秋田」の三つの値が入った配列変数strを作成し、「北海道」を出力できるようにXXXXをそれぞれ変更してください。
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

String[] str = new String[XXXX];
str[0] = "北海道";
str[1] = "青森";
str[2] = "秋田";

System.out.println(XXXX);

}
}
EOF
)
],
        ]
    ],
    [ // vol2
        "output" => "青森\n",
        "model" =>  explode("\n", <<< 'EOF'
「北海道」、「青森」、「秋田」の三つの値が入った配列変数strを作成し、「青森」を出力できるようにXXXXをそれぞれ変更してください。
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

String[] XXXX = XXXX
XXXX = "北海道";
XXXX = "青森";
XXXX = "秋田";

System.out.println(XXXX);

}
}
EOF
)
],
        ]
    ],
    [ // vol3
        "output" => "秋田\n",
        "model" =>  explode("\n", <<< 'EOF'
「北海道」、「青森」、「秋田」の三つの値が入った配列変数strを作成し、「秋田」を出力できるようにXXXXをそれぞれ変更してください。
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

XXXX[] str = {XXXX};

System.out.println(XXXX);

}
}
EOF
)
],
        ]
    ],
    [ // vol4
        "output" => "d\n",
        "model" =>  explode("\n", <<< 'EOF'
「d」、「e」、「f」、「g」の四つの値が入った配列変数cを作成し、「d」を出力できるようにXXXXをそれぞれ変更してください。
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

XXXX[] c = {XXXX};

System.out.println(c[XXXX]);

}
}
EOF
)
],
        ]
    ],
    [ // vol5
        "output" => "9\n",
        "model" =>  explode("\n", <<< 'EOF'
「13」、「9」 、 「7」 、 「5」 、 「11」の五つの値が入った配列変数iを作成し、「9」を出力できるようにXXXXをそれぞれ変更してください。
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

XXXX[] i = {13,9,7,5,11};

System.out.println(XXXX);

}
}
EOF
)
],
        ]
    ],
    [ // vol6
        "output" => "岩手\n",
        "model" =>  explode("\n", <<< 'EOF'
「北海道」、「青森」、「秋田」の三つの値が入った配列変数strを作成し、その後に「秋田」の値を「岩手」に更新し、次に「岩手」を出力できるようにXXXXをそれぞれ変更してください。
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

String[] str = {XXXX};
XXXX = "岩手";

System.out.println(XXXX);

}
}
EOF
)
],
        ]
    ],
    [ // vol7
        "output" => "G\n",
        "model" =>  explode("\n", <<< 'EOF'
「d」、「e」、「f」、「g」の四つの値が入った配列変数cを作成し、その後に「g」の値を「G」に更新し、次に「G」を出力できるようにXXXXをそれぞれ変更してください。
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

XXXX[] c = {'d','e','f','g'};
XXXX = 'G';

System.out.println(XXXX);

}
}
EOF
)
],
        ]
    ]
];
