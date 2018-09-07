<?php

return [
    [ // vol1
        "output" => "",
        "model" =>  explode("\n", <<< 'EOF'
<index.html>
変更なし

<script.js>
unshiftを用いて「0」を先頭に追加し、「0,3,5,7」と出力できるようにXXXXを変更してください。
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

<script src="script.js"></script>

</body>
</html>
EOF
)
],
            [
                'title' => 'エディタ(script.js)',
                'ext' => 'js',
                'name' => 'index',
                "contents" => explode("\n", <<< 'EOF'
var age =[3, 5, 7];

XXXX

document.write(age);
EOF
)
],
        ]
    ],
    [ // vol2
        "output" => "",
        "model" =>  explode("\n", <<< 'EOF'
<index.html>
変更なし

<script.js>
unshiftを用いて「中央」を先頭に追加し、「0,3,5,7」と出力できるようにXXXXを変更してください。
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

<script src="script.js"></script>

</body>
</html>
EOF
)
],
            [
                'title' => 'エディタ(script.js)',
                'ext' => 'js',
                'name' => 'index',
                "contents" => explode("\n", <<< 'EOF'
var direction =["東","西","南","北"];

XXXX

document.write(direction);
EOF
)
],
        ]
    ],
    [ // vol3
        "output" => "",
        "model" =>  explode("\n", <<< 'EOF'
<index.html>
変更なし

<script.js>
pushを用いて「20」を末尾に追加し、「0,3,5,7,20」と出力できるようにXXXXを変更してください。
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

<script src="script.js"></script>

</body>
</html>
EOF
)
],
            [
                'title' => 'エディタ(script.js)',
                'ext' => 'js',
                'name' => 'index',
                "contents" => explode("\n", <<< 'EOF'
var age =[3, 5, 7];

XXXX

document.write(age);
EOF
)
],
        ]
    ],
    [ // vol4
        "output" => "",
        "model" =>  explode("\n", <<< 'EOF'
<index.html>
変更なし

<script.js>
pushを用いて「中央」を末尾に追加し、「東,西,南,北,中央」と出力できるようにXXXXを変更してください。
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

<script src="script.js"></script>

</body>
</html>
EOF
)
],
            [
                'title' => 'エディタ(script.js)',
                'ext' => 'js',
                'name' => 'index',
                "contents" => explode("\n", <<< 'EOF'
var direction =["東","西","南","北"];

XXXX

document.write(direction);
EOF
)
],
        ]
    ],
    [ // vol5
        "output" => "",
        "model" =>  explode("\n", <<< 'EOF'
<index.html>
変更なし

<script.js>
shiftを用いて「配列の先頭」を削除し、「5,7」と出力できるようにXXXXを変更してください。
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

<script src="script.js"></script>

</body>
</html>
EOF
)
],
            [
                'title' => 'エディタ(script.js)',
                'ext' => 'js',
                'name' => 'index',
                "contents" => explode("\n", <<< 'EOF'
var age =[3, 5, 7];

XXXX

document.write(age);
EOF
)
],
        ]
    ],
    [ // vol6
        "output" => "",
        "model" =>  explode("\n", <<< 'EOF'
<index.html>
変更なし

<script.js>
shiftを用いて「配列の先頭」を削除し、「西,南,北」と出力できるようにXXXXを変更してください。
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

<script src="script.js"></script>

</body>
</html>
EOF
)
],
            [
                'title' => 'エディタ(script.js)',
                'ext' => 'js',
                'name' => 'index',
                "contents" => explode("\n", <<< 'EOF'
var direction =["東","西","南","北"];

XXXX

document.write(direction);
EOF
)
],
        ]
    ],
    [ // vol7
        "output" => "",
        "model" =>  explode("\n", <<< 'EOF'
<index.html>
変更なし

<script.js>
popを用いて「配列の末尾」を削除し、「3,5」と出力できるようにXXXXを変更してください。
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

<script src="script.js"></script>

</body>
</html>
EOF
)
],
            [
                'title' => 'エディタ(script.js)',
                'ext' => 'js',
                'name' => 'index',
                "contents" => explode("\n", <<< 'EOF'
var age =[3, 5, 7];

XXXX

document.write(age);
EOF
)
],
        ]
    ],
    [ // vol8
        "output" => "",
        "model" =>  explode("\n", <<< 'EOF'
<index.html>
変更なし

<script.js>
popを用いて「配列の末尾」を削除し、「東,西,南」と出力できるようにXXXXを変更してください。
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

<script src="script.js"></script>

</body>
</html>
EOF
)
],
            [
                'title' => 'エディタ(script.js)',
                'ext' => 'js',
                'name' => 'index',
                "contents" => explode("\n", <<< 'EOF'
var direction =["東", "西", "南", "北"];

XXXX

document.write(direction);
EOF
)
],
        ]
    ],
    [ // vol9
        "output" => "",
        "model" =>  explode("\n", <<< 'EOF'
<index.html>
変更なし

<script.js>
sliceを用いて「配列の一部」を切り取り、「5」と出力できるようにXXXXを変更してください。
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

<script src="script.js"></script>

</body>
</html>
EOF
)
],
            [
                'title' => 'エディタ(script.js)',
                'ext' => 'js',
                'name' => 'index',
                "contents" => explode("\n", <<< 'EOF'
var age =[3, 5, 7,20];

document.write(XXXX);
EOF
)
],
        ]
    ],
    [ // vol10
        "output" => "",
        "model" =>  explode("\n", <<< 'EOF'
<index.html>
変更なし

<script.js>
sliceを用いて「配列の一部」を切り取り、「西,南」と出力できるようにXXXXを変更してください。
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

<script src="script.js"></script>

</body>
</html>
EOF
)
],
            [
                'title' => 'エディタ(script.js)',
                'ext' => 'js',
                'name' => 'index',
                "contents" => explode("\n", <<< 'EOF'
var direction =["東", "西", "南", "北"];

document.write(XXXX);
EOF
)
],
        ]
    ]
];
