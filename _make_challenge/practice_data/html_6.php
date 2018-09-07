<?php

return [
    [ // vol1
        "output" => "",
        "model" =>  explode("\n", <<< 'EOF'
××××を変更し、以下のURLの画像を表示させて下さい。

『http://proengineer.internous.co.jp/topics/wp-content/uploads/2016/07/html0_cherry_blossoms.png』
EOF
)
,
        "inputs" => [
            [
                'title' => 'エディタ(index.html)',
                'ext' => 'html',
                'name' => 'index',
                "contents" => explode("\n", <<< 'EOF'
<body>

<img src="XXXX">


</body>
</html>

EOF
)
],
        ]
    ],
    [ // vol2
        "output" => "",
        "model" =>  explode("\n", <<< 'EOF'
以下のURLの画像を表示させて下さい。

『http://proengineer.internous.co.jp/common/images/column/column00_image01.gif 』
EOF
)
,
        "inputs" => [
            [
                'title' => 'エディタ(index.html)',
                'ext' => 'html',
                'name' => 'index',
                "contents" => explode("\n", <<< 'EOF'
<body>



</body>
</html>

EOF
)
],
        ]
    ]
];
