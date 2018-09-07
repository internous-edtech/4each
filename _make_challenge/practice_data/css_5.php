<?php

return [
    [ // vol1
        "output" => "",
        "model" =>  explode("\n", <<< 'EOF'
<index.html>
XXXXを変更し abcクラスを作成して下さい。

<style.css>
XXXXを変更し abcクラスのボックスに
「太さ3px、点線（dotted）、赤（red）」
の外枠が表示されるように borderプロパティを設定して下さい。
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
    <div class="XXXX">
        BOX INC.<br>
        www.box.com
    </div>
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
    width:250px;
    height:100px;
    background-color:#AFEEEE;
    border:XXXX XXXX XXXX;
}
EOF
)
],
        ]
    ],
    [ // vol2
        "output" => "",
        "model" =>  explode("\n", <<< 'EOF'
<index.html>
XXXXを変更し defクラスを作成して下さい。

<style.css>
XXXXを変更し defクラスのボックスの上に
100pxの余白ができるように margin-topプロパティを設定して下さい。
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
    <div class="XXXX">
        BOX INC.<br>
        www.box.com
    </div>
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
.def{
    width:250px;
    height:100px;
    background-color:#AFEEEE;
    margin-top:XXXX;
}
EOF
)
],
        ]
    ],
    [ // vol3
        "output" => "",
        "model" =>  explode("\n", <<< 'EOF'
<index.html>
XXXXを変更し ghiクラスを作成して下さい。

<style.css>
XXXXを変更し ghiクラスのボックス内の左に
50pxの余白ができるように padding-leftプロパティを設定して下さい。
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
    <div class="XXXX">
        BOX INC.<br>
        www.box.com
    </div>
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
.ghi{
    width:250px;
    height:100px;
    background-color:#AFEEEE;
    padding-left:XXXX;
}
EOF
)
],
        ]
    ],
    [ // vol4
        "output" => "",
        "model" =>  explode("\n", <<< 'EOF'
<index.html>
XXXXを変更し jklクラスを作成して下さい。

<style.css>
XXXXを変更し jklクラスの上下に「太さ3px、青（blue）」の線が 表示されるように border-topプロパティとborder-bottomプロパティを設定して下さい。
加えて、上の線は点線（dotted）、下の線は二重線（double）に設定して下さい。
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
    <div class="XXXX">
        BOX INC.<br>
        www.box.com
    </div>
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
.jkl{
    border-top:XXXX XXXX XXXX;
    border-bottom:XXXX XXXX XXXX;
}
EOF
)
],
        ]
    ],
    [ // vol5
        "output" => "",
        "model" =>  explode("\n", <<< 'EOF'
<index.html>
XXXXを変更し h1タグを作成して下さい。

<style.css>
XXXXを変更し h1タグの左に「太さ3px、実線（solid）、灰色（gray）」の線、下に「太さ1px、実線（solid）、灰色（gray） 」の線 が表示されるように borderプロパティを設定して下さい。

また、XXXXｗ変更しh1タグの左と、「タイトル」の文字との間に、10pxの間隔を空けてください。
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

<XXXX>タイトル</XXXX>

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
h1{
    border-left: XXXX XXXX XXXX;
    border-bottom: XXXX XXXX XXXX;
　 padding-left:XXXX;
}
EOF
)
],
        ]
    ],
    [ // vol6
        "output" => "",
        "model" =>  explode("\n", <<< 'EOF'
<index.html>
XXXXを変更し mnoクラスを作成して下さい。

<style.css>
XXXXを変更し mnoクラスの上下に1文字分（1em）の余白、左右に0.5文字分（0.5em）の余白ができるように paddingプロパティを設定して下さい。
加えて、mnoクラスの左に「太さ30px、実線（solid）、グレー（gray）」の線が表示されるようにborder-leftプロパティを設定して下さい。
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
    <div class="XXXX">
        BOX INC.<br>
        www.box.com
    </div>
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
.mno{
    width:200px;
    height:65px;
    background-color:#F5F5F5;
    padding:XXXX XXXX;
    border-left:XXXX XXXX XXXX;
}
EOF
)
],
        ]
    ]
];
