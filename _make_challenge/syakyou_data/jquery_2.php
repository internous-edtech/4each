<?php

return [
    [ // vol1
        [
            [
                "title" => "HTML写経テキスト",
                "contents" => <<< 'EOF'
<body>

<h1>こんにちは</h1>
<p>あいうえお</p>
<p>かきくけこ</p>

<script src="script.js"></script>
</body>
</html>
EOF
            ],
            [
                'title' => 'エディタ(index.html)',
                "contents" => <<< 'EOF'
<body>

<script src="script.js"></script>
</body>
</html>
EOF
                ,
                'ext' => 'html',
                'name' => 'index',
            ],
        ],
        [
            [
                "title" => "JavaScript写経テキスト",
                "contents" => <<< 'EOF'
$(function(){
	$("h1").css("color","blue");
});
EOF
            ],
            [
                'title' => 'エディタ(script.js)',
                "contents" => "",
                'ext' => 'js',
                'name' => 'index'
            ],
        ],
    ],
    [ // vol2
        [
            [
                "title" => "HTML写経テキスト",
                "contents" => <<< 'EOF'
<body>

<h1>こんにちは</h1>
<p>あいうえお</p>
<p>かきくけこ</p>

<script src="script.js"></script>
</body>
</html>
EOF
            ],
            [
                'title' => 'エディタ(index.html)',
                "contents" => <<< 'EOF'
<body>

<script src="script.js"></script>
</body>
</html>
EOF
                ,
                'ext' => 'html',
                'name' => 'index',
            ],
        ],
        [
            [
                "title" => "JavaScript写経テキスト",
                "contents" => <<< 'EOF'
$(function(){
    $("p").css("color","blue");
});
EOF
            ],
            [
                'title' => 'エディタ(script.js)',
                "contents" => "",
                'ext' => 'js',
                'name' => 'index'
            ],
        ],
    ],
    [ // vol3
        [
            [
                "title" => "HTML写経テキスト",
                "contents" => <<< 'EOF'
<body>

<h1>こんにちは</h1>
<div class="hello">Hello</div>
<div class="hi">hi</div>

<script src="script.js"></script>
</body>
</html>
EOF
            ],
            [
                'title' => 'エディタ(index.html)',
                "contents" => <<< 'EOF'
<body>

<script src="script.js"></script>
</body>
</html>
EOF
                ,
                'ext' => 'html',
                'name' => 'index',
            ],
        ],
        [
            [
                "title" => "JavaScript写経テキスト",
                "contents" => <<< 'EOF'
$(function(){
    $(".hello").css("color","green");
});
EOF
            ],
            [
                'title' => 'エディタ(script.js)',
                "contents" => "",
                'ext' => 'js',
                'name' => 'index'
            ],
        ],
    ],
    [ // vol4
        [
            [
                "title" => "HTML写経テキスト",
                "contents" => <<< 'EOF'
<body>

<h1>こんにちは</h1>
<div class="hello">Hello</div>
<div class="hi">hi</div>

<script src="script.js"></script>
</body>
</html>
EOF
            ],
            [
                'title' => 'エディタ(index.html)',
                "contents" => <<< 'EOF'
<body>

<script src="script.js"></script>
</body>
</html>
EOF
                ,
                'ext' => 'html',
                'name' => 'index',
            ],
        ],
        [
            [
                "title" => "JavaScript写経テキスト",
                "contents" => <<< 'EOF'
$(function(){
    $(".hi").css("color","orange");
});
EOF
            ],
            [
                'title' => 'エディタ(script.js)',
                "contents" => "",
                'ext' => 'js',
                'name' => 'index'
            ],
        ],
    ],
    [ // vol5
        [
            [
                "title" => "HTML写経テキスト",
                "contents" => <<< 'EOF'
<body>

<h1>こんにちは</h1>
<div class="hello">Hello</div>
<div class="hi">hi</div>

<script src="script.js"></script>
</body>
</html>
EOF
            ],
            [
                'title' => 'エディタ(index.html)',
                "contents" => <<< 'EOF'
<body>

<script src="script.js"></script>
</body>
</html>
EOF
                ,
                'ext' => 'html',
                'name' => 'index',
            ],
        ],
        [
            [
                "title" => "JavaScript写経テキスト",
                "contents" => <<< 'EOF'
$(function(){
    $(".hi").fadeOut();
});
EOF
            ],
            [
                'title' => 'エディタ(script.js)',
                "contents" => "",
                'ext' => 'js',
                'name' => 'index'
            ],
        ],
    ],
    [ // vol6
        [
            [
                "title" => "HTML写経テキスト",
                "contents" => <<< 'EOF'
<body>

<h1>こんにちは</h1>
<div class="hello">Hello</div>
<div class="hi">hi</div>

<script src="script.js"></script>
</body>
</html>
EOF
            ],
            [
                'title' => 'エディタ(index.html)',
                "contents" => <<< 'EOF'
<body>

<script src="script.js"></script>
</body>
</html>
EOF
                ,
                'ext' => 'html',
                'name' => 'index',
            ],
        ],
        [
            [
                "title" => "JavaScript写経テキスト",
                "contents" => <<< 'EOF'
$(function(){
    $(".hello,.hi").fadeOut();
});
EOF
            ],
            [
                'title' => 'エディタ(script.js)',
                "contents" => "",
                'ext' => 'js',
                'name' => 'index'
            ],
        ],
    ],
    [ // vol7
        [
            [
                "title" => "HTML写経テキスト",
                "contents" => <<< 'EOF'
<body>

<h1>こんにちは</h1>
<div class="hello">Hello</div>
<div class="hi">hi</div>

<script src="script.js"></script>
</body>
</html>
EOF
            ],
            [
                'title' => 'エディタ(index.html)',
                "contents" => <<< 'EOF'
<body>

<script src="script.js"></script>
</body>
</html>
EOF
                ,
                'ext' => 'html',
                'name' => 'index',
            ],
        ],
        [
            [
                "title" => "JavaScript写経テキスト",
                "contents" => <<< 'EOF'
$(function(){
    $(".hello").text("HELLO!!!");
});
EOF
            ],
            [
                'title' => 'エディタ(script.js)',
                "contents" => "",
                'ext' => 'js',
                'name' => 'index'
            ],
        ],
    ],
    [ // vol7
        [
            [
                "title" => "HTML写経テキスト",
                "contents" => <<< 'EOF'
<body>

<h1>こんにちは</h1>
<div class="hello">Hello</div>
<div class="hi">hi</div>

<script src="script.js"></script>
</body>
</html>
EOF
            ],
            [
                'title' => 'エディタ(index.html)',
                "contents" => <<< 'EOF'
<body>

<script src="script.js"></script>
</body>
</html>
EOF
                ,
                'ext' => 'html',
                'name' => 'index',
            ],
        ],
        [
            [
                "title" => "JavaScript写経テキスト",
                "contents" => <<< 'EOF'
$(function(){
    $("div").text("こんにちは");
});
EOF
            ],
            [
                'title' => 'エディタ(script.js)',
                "contents" => "",
                'ext' => 'js',
                'name' => 'index'
            ],
        ],
    ]
];
