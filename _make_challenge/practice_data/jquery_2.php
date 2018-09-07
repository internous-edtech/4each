<?php

return [
    [ // vol1
        "output" => "",
        "model" =>  explode("\n", <<< 'EOF'
<index.html>
変更なし

<script.js>
h1タグのテキストを赤（red)で出力できるようにXXXXをそれぞれ変更してください。
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

<h1>こんにちは</h1>
<p>あいうえお</p>
<p>かきくけこ</p>

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
$(function(){
	$(XXXX)XXXX(XXXX,"red");
});
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
pタグのテキストを青（blue)で出力できるようにXXXXをそれぞれ変更してください。
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

<h1>こんにちは</h1>
<p>あいうえお</p>
<p>かきくけこ</p>

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
$(function(){
	$(XXXX)XXXX(XXXX,"blue");
});
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
hiクラスのテキストを緑(green)で出力できるようにXXXXをそれぞれ変更してください。
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

<h1>こんにちは</h1>
<div class="hello">Hello</div>
<div class="hi">hi</div>

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
$(function(){
	$(XXXX)XXXX(XXXX);
});
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
helloクラスのテキストがフェードアウトできるようにXXXXをそれぞれ変更してください。
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

<h1>こんにちは</h1>
<div class="hello">Hello</div>
<div class="hi">hi</div>

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
$(function(){
	$(XXXX)XXXX();
});
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
h1タグのテキストを赤（red)で出力できるようにXXXXをそれぞれ変更してください。
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

<h1>こんにちは</h1>
<div class="hello">Hello</div>
<div class="hi">hi</div>

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
$(function(){
	$(XXXX).text(XXXX);
});
EOF
)
],
        ]
    ]
];
