<?php

return [
    [ // vol1
        "output" => "B",
        "model" =>  explode("\n", <<< 'EOF'
「B」と出力できるように、 XXXXをそれぞれ変更してください。
EOF
)
,
        "inputs" => [
            [
                'title' => 'エディタ',
                'ext' => 'server',
                'name' => 'index',
                "contents" => explode("\n", <<< 'EOF'
<?php

$value=2;

switch (XXXX){
	case 1:
		echo "A";
		break;

	case XXXX:
		echo "B";
		break;
}


?>
EOF
)
],
        ]
    ],
    [ // vol2
        "output" => "2が選択されました。",
        "model" =>  explode("\n", <<< 'EOF'
「2が選択されました。」と出力できるように、 XXXXをそれぞれ変更してください。
EOF
)
,
        "inputs" => [
            [
                'title' => 'エディタ',
                'ext' => 'server',
                'name' => 'index',
                "contents" => explode("\n", <<< 'EOF'
<?php

$num = 2;

switch (XXXX){
	case 1:
		echo "1が選択されました。" ;
		break;

	case XXXX:
		echo "2が選択されました。" ;
		break;
}


?>
EOF
)
],
        ]
    ],
    [ // vol3
        "output" => "ブロンズです。",
        "model" =>  explode("\n", <<< 'EOF'
変数valueに「3」を代入し、もし変数valuが1の場合は「ゴールドです」と出力し、それ以外の場合で、もし変数valuが2の場合は「シルバーです」と出力し、それ以外の場合で、もし変数valuが3の場合は「ブロンズです」と出力し、それ以外の場合は全て「資格なしです。」と出力出来るようにXXXXをそれぞれ変更してください。
EOF
)
,
        "inputs" => [
            [
                'title' => 'エディタ',
                'ext' => 'server',
                'name' => 'index',
                "contents" => explode("\n", <<< 'EOF'
<?php

$value=3;
switch($value){
  case 1:
  echo "ゴールドです。";
  break;

  case 2:
  echo "シルバーです。";
  break;

  case 3:
  echo "ブロンズです。";
  break;

  default:
  echo "資格なしです。";
}

?>
EOF
)
],
        ]
    ]
];
