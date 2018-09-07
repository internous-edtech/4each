<?php

return [
    [ // vol1
        "output" => "",
        "model" =>  explode("\n", <<< 'EOF'
aaaaを適切な形に変更し、入力フォーム(テキスト入力欄)を作成して下さい。
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

<form action="XXXX" method="XXXX">

<p>
氏名:<aaaa="aaaa" name="XXX">
</p>


</form>


</form>

</body>
</html>

EOF
)
],
        ]
    ],
    [ // vol2
        "output" => "",
        "model" =>  explode("\n", <<< 'EOF'
aaaaを適切な形に変更し、入力フォーム(テキスト入力欄)を作成して下さい。

また、入力ヒント(placeholder)用に"ヤマダ　タロウ" を表示させて下さい。
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

<form action="XXXX" method="XXXX">

<p>
氏名（カナ）： <aaaa="aaaa" placeholder="aaaa" name="XXX">
</p>

</form>

</body>
</html>
EOF
)
],
        ]
    ],
    [ // vol3
        "output" => "",
        "model" =>  explode("\n", <<< 'EOF'
aaaaを適切な形に変更し、 『Password:』の横に「パスワード入力欄」を作成して下さい。
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

<form action="XXXX" method="XXXX">

<p>
Password::<aaaa="aaaa" name="XXX">

</p>

</form>

</body>
</html>
EOF
)
],
        ]
    ],
    [ // vol4
        "output" => "",
        "model" =>  explode("\n", <<< 'EOF'
aaaaを適切な形に変更し、 『パスワードを入力して下さい。』の下に「パスワード入力欄」を作成して下さい。

また、入力支援(placeholder)用の"８文字以上" を表示させて下さい。
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

<form action="XXXX" method="XXXX">

<p>パスワードを入力して下さい。<br>
<aaaa="aaaa"  placeholder="aaaa" name="XXX">
</p>

</form>

</body>
</html>
EOF
)
],
        ]
    ],
    [ // vol5
        "output" => "",
        "model" =>  explode("\n", <<< 'EOF'
aaaaを適切な形に変更し、『画像添付：』の横に「ファイル選択ボタン」を作成して下さい。
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

<form action="XXXX" method="XXXX">

<p>
画像添付：<aaaa="aaaa" name="XXX">
</p>

</p>

</form>

</body>
</html>
EOF
)
],
        ]
    ],
    [ // vol6
        "output" => "",
        "model" =>  explode("\n", <<< 'EOF'
aaaaを適切な形に変更し、
『画像を選択して下さい』の下の行に「ファイル選択ボタン」を作成してください。

また、二つ目の段落(pタグ)内に送信(submit)用ボタンを作成して下さい。送信ボタンの値(value)は"送信"とします。
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

<form action="XXXX" method="XXXX">

<p>
画像を選択して下さい<br>
<aaaa="aaaa" name="XXX">
</p>
<p>
<aaaa="aaaa" value="aaaa">
</p>

</form>

</body>
</html>
EOF
)
            ]
        ]
    ],
    [ // vol7
        "output" => "",
        "model" =>  explode("\n", <<< 'EOF'
『一番好きな果物は？ 』の下の行に
"りんご"、"みかん"、"いちご"を選択する
「ラジオボタン」を作成して下さい。

各ボタンのvalueには、それぞれ、 "りんご"、"みかん"、"いちご"を指定して下さい。
また、各ボタンのnameには、それぞれ、XXXを指定して下さい。
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

<form action="XXXX" method="XXXX">

<p>一番好きな果物は？<br>

</p>

</form>

</body>
</html>
EOF
)
            ]
        ]
    ],
    [ // vol8
        "output" => "",
        "model" =>  explode("\n", <<< 'EOF'
aaaaを適切な形に変更し、ラベル (label)をつけて、文字列を選択できるようにして下さい。
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

<form action="XXXX" method="XXXX">

<p>
<aaaa>
<input type="radio" value="あり" name="XXX">あり
</aaaa>
<aaaa>
<input type="radio" value="なし" name="XXX">なし
</aaaa>
</p>

</form>
</body>
</html>
EOF
)
            ]
        ]
    ],
    [ // vol9
        "output" => "",
        "model" =>  explode("\n", <<< 'EOF'
aaaaを適切な形に変更し、『A』 、 『B』 、 『C』 、 『D』 を複数選択できる「チェックボックス」を作成して下さい。

各ボタンのvalueには、それぞれ、 "A"、"B"、"C"、"D"を指定して下さい。また、各ボタンのnameには、それぞれ、XXXを指定して下さい。
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

<form action="XXXX" method="XXXX">

<p>
<aaaa>A
<aaaa>B
<aaaa>C
<aaaa>D
</p>

</form>

</body>
</html>
EOF
)
            ]
        ]
    ],
    [ // vol10
        "output" => "",
        "model" =>  explode("\n", <<< 'EOF'
『平成』 、 『昭和』 、 『大正』を選択する「プルダウンメニュー」を作成して下さい。

valueには、それぞれ、 "平成"、"昭和"、"大正"を指定して下さい。また、nameには、XXXを指定して下さい。
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

<form action="XXXX" method="XXXX">

<p>
平成
昭和
大正
</p>

</form>

</body>
</html>
EOF
)
            ]
        ]
    ],
    [ // vol11
        "output" => "",
        "model" =>  explode("\n", <<< 'EOF'
『デスクトップ』 『ノートパソコン』 『タブレット』、 『スマホ』を選択する「プルダウンメニュー」を作成して下さい。

valueには、それぞれ、 "デスクトップ"、"ノートパソコン"、"タブレット"、"スマホ"を指定して下さい。また、nameには、XXXを指定して下さい。
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

<form action="XXXX" method="XXXX">

<p>
デスクトップ
ノートパソコン
タブレット
スマホ
</p>

</form>

</body>
</html>
EOF
)
            ]
        ]
    ],
    [ // vol12
        "output" => "",
        "model" =>  explode("\n", <<< 'EOF'
『ご意見： 』の下の行に、幅が"40"、行数が"10"、の「テキスト入力欄」を作成して下さい。
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

<form action="XXXX" method="XXXX">

<p>
ご意見： <br>

</p>

</form>

</body>
</html>
EOF
)
            ]
        ]
    ],
    [ // vol13
        "output" => "",
        "model" =>  explode("\n", <<< 'EOF'
『感想： 』の下の行に、幅が"40"、行数が"8"の「複数行テキストエリア」を作成してください。

また、入力ヒント(placeholder)用に"２００文字以内で感想を入力して下さい。" を表示させて下さい。
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

<form action="XXXX" method="XXXX">

<p>
感想：<br>

</p>

</form>

</body>
</html>
EOF
)
            ]
        ]
    ]
];
