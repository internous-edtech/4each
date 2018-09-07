<?php

return [
    [ // vol1
        "output" => "001-A<br>002-B<br>003-C",
        "model" =>  explode("\n", <<< 'EOF'
「A」、「B」、「C」の三つの値が入った配列変数arrを作成し、 「A」のkeyには「001」、「B」のkeyには「002」,「C」のkeyには「003」を指定し、その後にforeach文で次のように出力できるようにXXXXをそれぞれ変更してください。


<出力結果>
001-A
002-B
003-C
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

$arr = array("001" => "A", "002" => "B", "003" => "C");

foreach($arr as $key => $val){
	echo $key."-".$val."<br>";
}

?>
EOF
)
],
        ]
    ],
    [ // vol2
        "output" => "田中さんは20歳です。<br>高橋さんは25歳です。<br>山本さんは32歳です。",
        "model" =>  explode("\n", <<< 'EOF'
「20」、「25」、「32」の三つの値が入った配列変数arrを作成し、 「20」のkeyには「田中」、「25」のkeyには「高橋」,「32」のkeyには「山本」を指定し、その後にforeach文で次のように出力できるようにXXXXをそれぞれ変更してください。


<出力結果>
田中さんは20歳です。
高橋さんは25歳です。
山本さんは32歳です。
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

$arr = array("田中" => 20, "高橋" => 25, "山本" => 32);

foreach($arr as $key => $val){
	echo $key."さんは".$val."歳です。<br>";
}

?>
EOF
)
],
        ]
    ]
];
