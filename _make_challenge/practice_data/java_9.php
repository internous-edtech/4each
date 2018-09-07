<?php

return [
    [ // vol1
        "output" => "NG\n",
        "model" =>  explode("\n", <<< 'EOF'
変数int iに「1」を代入し、もし変数int iが0の場合は「OK」と出力し、それ以外の場合で、もし変数int iが1の場合は「NG」と出力出来るようにXXXXをそれぞれ変更してください。
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

XXXX(i) {
  case XXXX:
    System.out.println("OK");
    break;
  case XXXX:
    System.out.println("NG");
    break;
}

}
}
EOF
)
],
        ]
    ],
    [ // vol2
        "output" => "銅賞\n",
        "model" =>  explode("\n", <<< 'EOF'
変数int iに「3」を代入し、もし変数int iが1の場合は「金賞」と出力し、それ以外の場合で、もし変数int iが2の場合は「銀賞」と出力し、それ以外の場合で、もし変数int iが3の場合は「同賞」と出力出来るようにXXXXをそれぞれ変更してください。
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
switch(i) {
  XXXX 1:
    System.out.println("金賞");
 　XXXX;
  XXXX 2:
    System.out.println("銀賞");
 　XXXX;
  XXXX 3:
    System.out.println("銅賞");
 　XXXX;
}
}
}
EOF
)
],
        ]
    ],
    [ // vol3
        "output" => "画像データ\n",
        "model" =>  explode("\n", <<< 'EOF'
変数String sに「jpg」を代入し、もし変数String sがtxtの場合は「テキストデータ」と出力し、それ以外の場合で、もし変数String sがjpの場合は「画像データ」と出力し、それ以外の場合は全て「その他」と出力出来るようにXXXXをそれぞれ変更してください。
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

String s = "jpg";
switch(s) {
  case "txt":
    System.out.println("テキストデータ");
 break;
  case "jpg":
    System.out.println("画像データ");
 break;
 　XXXX
    System.out.println("その他");
}
}
}
EOF
)
],
        ]
    ]
];
