<?php

return [
    [ // vol1
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
	$(".hello").click(function(){
$(".hi").fadeOut();
});
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
	$(".hello").click(function(){
$(".hello").fadeOut();}
);
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
$(".hello").mouseover(function(){
	$(".hi").fadeOut();
});
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
$(".hello").click(function(){
	$(".hi").css("color","red");
});
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

<div class="toroku">登録はこちら</div>

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
                "title" => "CSS写経テキスト",
                "contents" => <<< 'EOF'
.toroku{
    width:100px;
    padding:10px;
}
EOF
            ],
            [
                'title' => 'エディタ(style.css)',
                "contents" => "",
                'ext' => 'css',
                'name' => 'style'
            ],
        ],
        [
            [
                "title" => "JavaScript写経テキスト",
                "contents" => <<< 'EOF'
$(function(){
  $(".toroku").mouseover(function(){
    $(".toroku").css("border", "solid 2px gray");
  });
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

<div class="button">クリック</div>

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
                "title" => "CSS写経テキスト",
                "contents" => <<< 'EOF'
.button{
    border:1px solid gray;
    background-color:darkgray;
    height:60px;
    width:150px;
    text-align:center;
    line-height:60px;
    color:white;
}
EOF
            ],
            [
                'title' => 'エディタ(style.css)',
                "contents" => "",
                'ext' => 'css',
                'name' => 'style'
            ],
        ],
        [
            [
                "title" => "JavaScript写経テキスト",
                "contents" => <<< 'EOF'
$(function(){
  $(".button").mouseover(function(){
    $(".button").css("background-color","dimgray");
  });
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
