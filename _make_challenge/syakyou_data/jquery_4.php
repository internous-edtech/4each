<?php

return [
    [ // vol1
        [
            [
                "title" => "HTML写経テキスト",
                "contents" => <<< 'EOF'
<body>

  <div class="button">クリック</div>

<script src="script.js">
</script>
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
    ],
    [ // vol2
        [
            [
                "title" => "HTML写経テキスト",
                "contents" => <<< 'EOF'
<body>

<div class="button">→ 登録はこちら</div>

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
        border-top:1px solid lightgray;
        border-left:1px solid lightgray;
        border-right:1px solid lightgray;
        border-buttom:1px solid lightgray;
        box-shadow:1px 1px silver;
        border-radius:3px;
        height:40px;
        width:200px;
        text-align:center;
        line-height:40px;
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
$(".button").hover(
    function() {
        $(".button").css("background-color", "#f44f12");
},
    function() {
        $(".button").css("background-color", "#ff8f22");
    }
);
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
.toroku{width:100px;
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
$(".toroku").hover(
    function() {
        $(".toroku").css("border", "solid 2px gray");
   },
    function() {
        $(".toroku").css("border", "dotted 1px lightgray");
   }
);
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
