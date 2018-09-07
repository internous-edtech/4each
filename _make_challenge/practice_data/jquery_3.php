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
<div class="hello">Hello</div>
<div class="hi">hi</div>

<script src="script.js"></script>
</body>
EOF
)
],
            [
                'title' => 'エディタ(script.js)',
                'ext' => 'js',
                'name' => 'index',
                "contents" => explode("\n", <<< 'EOF'
$(function(){
	$(".hello").click(function(){
$(".hi").fadeOut();
});
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
「voice01.jpg」をクリックすると「voice02.jpg」がフェードアウト出来るようにXXXXをそれぞれ変更してください。
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

<img src="/img/challenge/voice01.jpg" class="voice01">
<img src="/img/challenge/voice02.jpg" class="voice02">

<script src="script.js"></script>
</body>
EOF
)
],
            [
                'title' => 'エディタ(script.js)',
                'ext' => 'js',
                'name' => 'index',
                "contents" => explode("\n", <<< 'EOF'
$(function(){
  $(XXXX)XXXX(
    function(){
    $(XXXX).fadeOut();
 });
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
「voice01.jpg」をクリックすると「voice02.jpg」がフェードアウト出来るようにXXXXをそれぞれ変更してください。
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

<div class="toroku">登録はこちら</div>

<script src="script.js"></script>
</body>
EOF
)
            ],
            [
                'title' => 'エディタ(style.css)',
                'ext' => 'css',
                'name' => 'style',
                "contents" => explode("\n", <<< 'EOF'
.toroku{
  border:solid 1px gray;
  width:120px;
  height:40px;
  line-height: 40px;
  text-align: center;
  padding:5px;
}
EOF
)
],
            [
                'title' => 'エディタ(script.js)',
                'ext' => 'js',
                'name' => 'index',
                "contents" => explode("\n", <<< 'EOF'
$(function(){
	$(".toroku").mouseover(
    function(){
    $(".toroku").css("border", "solid 3px black");
 });
});
EOF
)
],
        ]
    ]
];
