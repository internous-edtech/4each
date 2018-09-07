<?php

return [
    [ // vol1
        "output" => "OK\n",
        "model" =>  explode("\n", <<< 'EOF'
変数int iに「5」を代入し、もし変数int iが0以上の場合で、かつ変数int iが10未満の場合は、「 OK 」と出力出来るようにXXXXをそれぞれ変更してください。
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

if (i >= 0) {
  XXXX (XXXX) {
    System.out.println("OK");
  }
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
変数int iに「55」を代入し、もし変数int iが10以上の場合で、かつ変数int iが100未満の場合は、「 OK 」と出力出来るようにXXXXをそれぞれ変更してください。
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

int i = 55;

if (i >= 10) {
  XXXX (XXXX) {
    System.out.println("OK");
  }
}

}

}
EOF
)
],
        ]
    ],
    [ // vol3
        "output" => "",
        "model" =>  explode("\n", <<< 'EOF'
変数int iに「1000」を代入し、もし変数int iが100以下の場合で、かつ変数int iが1000未満の場合は、「 OK 」と出力出来るようにXXXXをそれぞれ変更してください。
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

int i = 1000;

if (i >= 100) {
  XXXX (XXXX) {
    System.out.println("OK");
  }
}

}

}
EOF
)
],
        ]
    ],
    [ // vol4
        "output" => "はずれ\n",
        "model" =>  explode("\n", <<< 'EOF'
変数int numに「66」を代入し、もし変数int numが0より大きい場合で、かつ変数int numが77の場合は「大当たり」、それ以外の場合で変数int numが55の場合は「当たり」、それ以外の場合は全て「はずれ」と出力出来るようにXXXXをそれぞれ変更してください。
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

int num = 66;
if (num > 0) {
  XXXX (XXXX) {
    System.out.println( "大当たり" );
  } XXXX (XXXX) {
    System.out.println( "当たり" );
  } XXXX {
    System.out.println( "はずれ" );
  }
}

}
}
EOF
)
],
        ]
    ],
    [ // vol5
        "output" => "成人\n",
        "model" =>  explode("\n", <<< 'EOF'
変数int ageに「35」を代入し、もし変数int ageが19より大きい場合で、かつ変数int ageが89より大きい場合は「超高齢者」、それ以外の場合で変数int ageが74より大きく90未満の場合は「後期高齢者」、それ以外の場合で変数int ageが64より大きく75未満の場合は「前期高齢者」、それ以外の場合は全て「成人」と出力出来るようにXXXXをそれぞれ変更してください。
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

int age = 35;
XXXX (age > 19) {
  XXXX (age > 89) {
    System.out.println( "超高齢者" );
  } else if (age > 74 && age < 90) {
    System.out.println( "後期高齢者" );
  } XXXX (XXXX) {
    System.out.println( "前期高齢者" );
  } XXXX {
    System.out.println( "成人" );
  }
}
}
}

EOF
)
],
        ]
    ]
];
