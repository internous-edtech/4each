<?php

return [
    [ // vol1
        "output" => "高橋英語",
        "model" =>  explode("\n", <<< 'EOF'
「高橋」と出力できるようにXXXXを変更してください。
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

$value = array(
			"名前" => "高橋",
			"住所" => "東京"
		);

echo $value[XXXX];

?>
EOF
)
],
        ]
    ],
    [ // vol2
        "output" => "英語",
        "model" =>  explode("\n", <<< 'EOF'
「日本語」、 「英語」の二つの値が入った配列変数valueを作成し、日本語のkeyには「JP」、英語のkeyには「EN」を連想配列として指定し、その後に、英語と出力出来るようにXXXXをそれぞれ変更してください。
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

$value = array(
			XXXX,
			XXXX
		);

echo $value[XXXX];

?>
EOF
)
],
        ]
    ],
    [ // vol3
        "output" => "佐藤",
        "model" =>  explode("\n", <<< 'EOF'
配列変数valueの中に、「田中」、「佐藤」の二つの値が入った配列と、「東京」、「大阪」の二つの値が入った配列を指定し、その後に、佐藤と出力出来るようにXXXXをそれぞれ変更してください。
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

$value = array(
			 XXXX(XXXX, XXXX),
			 XXXX(XXXX, XXXX)
		);

echo XXXX;

?>
EOF
)
],
        ]
    ],
    [ // vol4
        "output" => "神戸",
        "model" =>  explode("\n", <<< 'EOF'
「東京」、 「神奈川」の二つの値が入った配列変数area1と、 「大阪」、 「神戸」の二つの値が入った配列変数area2を作成し、配列変数valueの中に、配列変数area1と配列変数area2を指定し、その後に、神戸と出力出来るようにXXXXをそれぞれ変更してください。
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

$area1 = XXXX("東京", "神奈川");
$area2 = XXXX("大阪", "神戸");

$value = XXXX(
			 XXXX, XXXX
		);

echo XXXX

?>
EOF
)
],
        ]
    ]
];
