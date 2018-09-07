<?php

return [
    [ // vol1
        "output" => "A",
        "model" =>  explode("\n", <<< 'EOF'
変数valueに「3」を代入し、もし変数valueが3以上の場合で、かつ変数valueが5以下の場合は、「A」と出力出来るようにXXXXをそれぞれ変更してください。
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

$value =3;

if(XXXX){
	XXXX(XXXX){
	  XXXX;
	}
}


?>
EOF
)
],
        ]
    ],
    [ // vol2
        "output" => "Appleです。",
        "model" =>  explode("\n", <<< 'EOF'
変数strに「yes」を、変数valueに「りんご」をそれぞれ代入し、もし変数strがyesと等しい場合で、かつ変数valueがりんごと等しい場合は、「Appleです」と出力出来るようにXXXXをそれぞれ変更してください。
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

$str = XXXX
$value = XXXX

if(XXXX){
	 XXXX(XXXX){
		echo XXXX
	}
}

?>
EOF
)
],
        ]
    ],
    [ // vol3
        "output" => "200円です。",
        "model" =>  explode("\n", <<< 'EOF'
変数valueに「90」を代入し、もし変数valueが75以上の場合は「合格です。」と出力し、それ以外の場合でもし変数valueが75未満ならば「変数valueに「みかん」を代入し、もし変数valueがりんごと等しい場合は「300円です。」と出力し、それ以外の場合で、もし変数valueがみかんと等しい場合は「200円です。」と出力し、それ以外の場合は全て「150円です。」出力出来るようにXXXXをそれぞれ変更してください。
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

$value = XXXX

if(XXXX){
	echo "300円です。";
} XXXX(XXXX){
	echo "200円です。";
} XXXX{
	echo "150円です。";
}
?>
EOF
)
],
        ]
    ],
    [ // vol4
        "output" => "合格です。",
        "model" =>  explode("\n", <<< 'EOF'
変数strに「採点」を、変数valに「85」をそれぞれ代入し、
もし変数strが採点と等しい場合で、かつ、もし変数valが100と等しい場合は「満点です。」と出力し、それ以外の場合で、もし変数valが80以上の場合は「合格です。」と出力し、それ以外の場合は全て「不合格です。」出力出来るようにXXXXをそれぞれ変更してください。
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


$str= "採点";
$val= 85;

if(XXXX){
	XXXX(XXXX){
		echo "満点です。" ;
	}XXXX(XXXX){
		echo "合格です。";
	}XXXX{
		echo "不合格です。";
	}
}

?>
EOF
)
],
        ]
    ]
];
