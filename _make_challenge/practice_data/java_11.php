<?php

return [
    [ // vol1
        "output" => "Jan\n",
        "model" =>  explode("\n", <<< 'EOF'
配列変数strの中に、「Jan」、「1月」の二つの値が入った配列と、「Feb」、「2月」の二つの値が入った配列と、「Mar」、「3月」の二つの値が入った配列を指定し、その後に、「Jan」と出力出来るようにXXXXをそれぞれ変更してください。
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

XXXX str = {
                         {"Jan", "１月"},
                         {"Feb", "２月"},
                         {"Mar", "３月"}
                       };

System.out.println(XXXX);

}
}
EOF
)
],
        ]
    ],
    [ // vol2
        "output" => "Feb\n",
        "model" =>  explode("\n", <<< 'EOF'
配列変数strの中に、「Jan」、「1月」の二つの値が入った配列と、「Feb」、「2月」の二つの値が入った配列と、「Mar」、「3月」の二つの値が入った配列を指定し、その後に、「Feb」と出力出来るようにXXXXをそれぞれ変更してください。
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

XXXX str = {
                         {"Jan", "１月"},
                         {"Feb", "２月"},
                         {"Mar", "３月"}
                       };

System.out.println(XXXX);

}
}
EOF
)
],
        ]
    ],
    [ // vol3
        "output" => "Jan\n",
        "model" =>  explode("\n", <<< 'EOF'
配列変数strの中に、「Jan」、「1月」の二つの値が入った配列と、「Feb」、「2月」の二つの値が入った配列と、「Mar」、「3月」の二つの値が入った配列を指定し、その後に、「Jan」と出力出来るようにXXXXをそれぞれ変更してください。
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

String[][] str = XXXX;

str[0][0] = "Jan";
str[0][1] = "１月";
str[1][0] = "Feb";
str[1][1] = "２月";
str[2][0] = "Mar";
str[2][1] = "３月";

System.out.println(XXXX);

}
}
EOF
)
],
        ]
    ],
    [ // vol4
        "output" => "４月\n",
        "model" =>  explode("\n", <<< 'EOF'
配列変数strの中に、「Jan」、「1月」の二つの値が入った配列と、「Feb」、「2月」の二つの値が入った配列と、「Mar」、「3月」の二つの値が入った配列と、「Apr」、「4月」の二つの値が入った配列を指定し、その後に、「4月」と出力出来るようにXXXXをそれぞれ変更してください。
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

String[][] str = XXXX;
str[0][0] = "Jan";
str[0][1] = "１月";
str[1][0] = "Feb";
str[1][1] = "２月";
str[2][0] = "Mar";
str[2][1] = "３月";
str[3][0] = "Apr";
str[3][1] = "４月";

System.out.println(XXXX);

}
}
EOF
)
],
        ]
    ]
];
