<?php

return [
    [ // vol1
        "output" => "",
        "model" =>  explode("\n", <<< 'EOF'
<index.html>
変更なし

<style.css>
XXXXを変更し body全体のフォントの色を
赤（red）に設定して下さい。
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
body全体のテキストを<br>
赤で表示しています。<br>
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
変更なし

<style.css>
XXXXを変更し body全体のフォントの色をカラーコード「#4B0082」に設定して下さい。
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
body全体のテキストを<br>
カラーコード #4B0082（indigo）<br>
で表示しています。<br>
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
    [ // vol3
        "output" => "",
        "model" =>  explode("\n", <<< 'EOF'
<index.html>
XXXXを変更し h1タグを作成して下さい。

<style.css>
XXXXを変更し h1タグのフォントの色を
青（blue）に設定して下さい。
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
<XXXX>blue</XXXX>
h1タグの見出しを青で表示しています。
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
XXXXを変更し h1タグを作成して下さい。

<style.css>
XXXXを変更し h1タグのフォントの色をカラーコード「#FF6347」に設定して下さい。
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
<XXXX>#FF6347</XXXX>
h1タグの見出しをカラーコード #FF6347（tomato）で表示しています。
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
XXXXを変更し abcクラス（「このテキストは赤」の表示部分）とdefクラス（「このテキストは青」の表示部分）を作成して下さい。

<style.css>
XXXXを変更し
abcクラスのフォントの色を 赤（red）に、
defクラスのフォントの色を 青（blue）に
設定して下さい。
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
<div class="XXXX">このテキストは赤</div>
<div class="XXXX">このテキストは青</div>
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

.def{
    XXXX
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
XXXXを変更し abcクラス（「フォント：36px」の表示部分）とdefクラス（「フォント：24px」の表示部分）を作成して下さい。

<style.css>
XXXXを変更し
abcクラスのフォントの大きさを36pxに、
defクラスのフォントの大きさを24pxに
設定して下さい。
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
<div class="XXXX">フォント：36px</div>
<div class="XXXX">フォント：24px</div>
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

.def{
    XXXX
}
EOF
)
],
        ]
    ],
    [ // vol7
        "output" => "",
        "model" =>  explode("\n", <<< 'EOF'
<index.html>
XXXXを変更し abcクラス（「りんご」と「みかん」の表示部分）と、defクラス（「apple」と「orange」の表示部分）を作成して下さい。

<style.css>
XXXXを変更し
abcクラスのフォントの大きさを24pxに、
defクラスのフォントの大きさを40pxに
設定して下さい。
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
<div class="XXXX">りんご</div>
<div class="XXXX">apple</div>
<div class="XXXX">みかん</div>
<div class="XXXX">orange</div>
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

.def{
    XXXX
}
EOF
)
],
        ]
    ]
];
