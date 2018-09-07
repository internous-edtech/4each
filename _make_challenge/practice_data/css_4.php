<?php

return [
    [ // vol1
        "output" => "",
        "model" =>  explode("\n", <<< 'EOF'
<index.html>
変更なし

<style.css>
contentクラスのフォントカラーを青（blue)、aiueoクラスのフォントサイズを30pxに出来るようにXXXXをそれぞれ変更してください。
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

<div class="content">
     <div class="aiueo">あいうえお</div>
     かきくけこ
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
XXXX{
         color:blue;
}

XXXX{
         font-size:XXXX;
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
contentクラスのフォントカラーを青（blue)、pにフォント30pxを指定出来るようにXXXXをそれぞれ変更してください。
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

    <p class="content">あいうえお</p>
    <p>かきくけこ</p>
    <p>さしすせそ</p>

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
XXXX{
      XXXX
}

XXXX{
   font-size:30px;
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
変更なし

<style.css>
tokyoクラスのpタグのみにフォントカラーを青（blue)、pタグにフォント20pxを指定出来るようにXXXXをそれぞれ変更してください。
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

<div class="tokyo">
<p>東京都</p>
     渋谷、新宿、池袋
</div>

<p>神奈川県</p>
<p>千葉</p>
<p>埼玉</p>

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
XXXX{
　　　color:blue;
}

p{
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
変更なし

<style.css>
h1、h2、h3に一度に、フォントサイズ20pxを指定できるようにXXXXを変更してください。
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

    <h1>タイトル1</h1>
    <h2>タイトル2</h2>
    <h3>タイトル3</h3>

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
XXXX{
         font-size:20px;
}
EOF
)
],
        ]
    ]
];
