<?php

return [
    [ // vol1
        "output" => "",
        "model" =>  explode("\n", <<< 'EOF'
<index.html>
変更なし

<style.css>
XXXXを変更し body全体のフォントが「ＭＳ Ｐゴシック」で表示されるように font-familyプロパティを設定して下さい。
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
body全体のフォントを<br>
「ＭＳ Ｐゴシック」で表示しています。<br>
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
body{
    XXXX
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
XXXXを変更し abcクラスを作成して下さい。

<style.css>
XXXXを変更し abcクラスのテキストが中央寄せ（center）で表示されるように text-alignプロパティを設定して下さい。
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
    <div class="XXXX">中央寄せ</div>
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
    XXXX
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
XXXXを変更し defクラスを作成して下さい。

<style.css>
XXXXを変更し defクラスのテキストが左寄せ（left）で表示されるように text-alignプロパティを設定して下さい。
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
    <div class="XXXX">左寄せ</div>
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
    XXXX
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
XXXXを変更し ghiクラスを作成して下さい。

<style.css>
XXXXを変更し ghiクラスのテキストが右寄せ（right）で表示されるように text-alignプロパティを設定して下さい。
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
    <div class="XXXX">右寄せ</div>
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
    XXXX
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
XXXXを変更し ulタグを作成して下さい。

<style.css>
XXXXを変更し ulタグ内の箇条書きの先頭記号が非表示（none）となるように list-style-typeプロパティを設定して下さい。
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
    <XXXX>
        <li>財布</li>
        <li>鍵</li>
        <li>スマホ</li>
    </XXXX>
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
ul{
    XXXX
}
EOF
)
],
        ]
    ]
];
