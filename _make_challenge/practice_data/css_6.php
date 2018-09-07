<?php

return [
    [ // vol1
        "output" => "",
        "model" =>  explode("\n", <<< 'EOF'
<index.html>
変更なし

<style.css>
XXXXを変更し aaaクラスで指定されたボックスがブラウザの左上から（position:absolute） 縦300px、横300pxの位置に表示されるように、positionプロパティ、topプロパティ、leftプロパティを設定して下さい。
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
    <div class="box aaa">A</div>
    <div class="box bbb">B</div>
    <div class="box ccc">C</div>
</body>
</html>
EOF
)
],
            [
                'title' => 'エディタ(style.css)',
                'ext' => 'css',
                'name' => 'style',
                "contents" => explode("\n", <<< 'EOF'
.box{
    width:100px;
    height:100px;
}
.aaa{
    background-color:yellow;
    position:XXXX;
    top:XXXX;
    left:XXXX;
}
.bbb{background-color:greenyellow;}
.ccc{background-color:green;}
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

<style.css>
XXXXを変更し bbbクラスで指定されたボックスがブラウザの左上から（position:absolute） 縦100px、横300pxの位置に表示されるように、positionプロパティ、topプロパティ、leftプロパティを設定して下さい。
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
    <div class="box aaa">A</div>
    <div class="box bbb">B</div>
    <div class="box ccc">C</div>
</body>
</html>
EOF
)
],
            [
                'title' => 'エディタ(style.css)',
                'ext' => 'css',
                'name' => 'style',
                "contents" => explode("\n", <<< 'EOF'
.box{
    width:100px;
    height:100px;
}
.aaa{background-color:yellow;}
.bbb{
    background-color:greenyellow;
    position:XXXX;
    top:XXXX;
    left:XXXX;
}
.ccc{background-color:green;}
EOF
)
],
        ]
    ],
    [ // vol3
        "output" => "",
        "model" =>  explode("\n", <<< 'EOF'
<index.html>
XXXXを変更し abcクラスを作成して下さい。

<style.css>
XXXXを変更し 画面がスクロールされても abcクラスで指定されたボックスが 横100%、縦30pxの大きさで 最下部で固定的に表示される（position:fixed） ように、positionプロパティ、bottomプロパティ、widthプロパティ、heightプロパティを設定して下さい。
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
    <div class=XXXX>アルファベット</div>
    <p>a A</p><p>b B</p><p>c C</p>
    <p>d D</p><p>e E</p><p>f F</p>
    <p>g G</p><p>h H</p><p>i I</p>
    <p>j J</p><p>k K</p><p>l L</p>
    <p>m M</p><p>n N</p><p>o O</p>
</body>
</html>
EOF
)
],
            [
                'title' => 'エディタ(style.css)',
                'ext' => 'css',
                'name' => 'style',
                "contents" => explode("\n", <<< 'EOF'
.abc{
    background-color:plum;
    position:XXXX;
    bottom:XXXX;
    width:XXXX;
    height:XXXX;
}
EOF
)
],
        ]
    ]
];
