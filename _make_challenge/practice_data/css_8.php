<?php

return [
    [ // vol1
        "output" => "",
        "model" =>  explode("\n", <<< 'EOF'
<index.html>
XXXXを変更し abcクラス を作成して下さい。

<style.css>
XXXXを変更し headerタグで指定されたボックスが画面最上部に表示されるように topプロパティと leftプロパティを設定して下さい。
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
<header>
    <div class="XXXX">練習問題</div>
</header>
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
header{
    position:absolute;
    top:XXXX;
    left:XXXX;
    width:100%;
    height:50px;
    background-color:navy;
    color:white;
}

.abc{
    padding:left;
    font-size:24px;
    line-height:50px;}
EOF
)
],
        ]
    ],
    [ // vol2
        "output" => "",
        "model" =>  explode("\n", <<< 'EOF'
<index.html>
『メニュー1』『メニュー2 』『メニュー3』をリスト(ulとli)で囲めるようにXXXXをそれぞれ変更してください。

<style.css>
header内の『メニュー1』『メニュー2 』『メニュー3』を左寄せ（ left ）で横並びになるように、XXXXを変更してください。
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

<header>
     XXXX
        XXXX メニュー1 XXXX
        XXXX メニュー2 XXXX
        XXXX メニュー3 XXXX
     XXXX
</header>

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
header{width:100%;
           height:30px;
           background-color: gray;
           line-height: 30px;}

li{
    XXXX
    list-style:none;
    margin-right: 10px;
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
XXXXを変更し ulタグと liタグを作成して下さい。

<style.css>
XXXXを変更し「 練習問題 」が左寄せで表示され、「 基本 」と「 応用 」が右寄せ かつ 横並びで表示されるように floatプロパティを設定して下さい。
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
<header>
    <div class="abc">練習問題</div>
    <XXXX>
        <XXXX>基本</XXXX>
        <XXXX>応用</XXXX>
    </XXXX>
</header>
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
header{ position:absolute; top:0px; left:0px;
    width:100%; height:50px;
    background-color:navy; color:white;}

.abc{ float:XXXX; width:200px;
    padding-left:10px; font-size:24px;
    line-height:50px;}

header ul{ float:XXXX; width:150px;
    line-height:30px;}

header ul li{ float:XXXX; list-style:none;
    padding-right:20px; font-size:16px;}
EOF
)
],
        ]
    ],
    [ // vol4
        "output" => "",
        "model" =>  explode("\n", <<< 'EOF'
<index.html>
XXXXを変更し footerタグ を作成して下さい。

<style.css>
XXXXを変更し footerタグで指定されたボックスが画面最下部に表示されるように bottomプロパティとleftプロパティを設定して下さい。
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
    ©2018 作成チーム
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
footer{
    clear:both;
    width:100%;
    height:50px;
    position:absolute;
    bottom:XXXX;
    left:XXXX;
    text-align:center;
    line-height:50px;
    background-color:maroon;
    color:white;
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
XXXXを変更し defクラス を作成して下さい。

<style.css>
XXXXを変更し 「 ©2018 作成チーム 」が左寄せ （ left ）で表示されるように text-alignプロパティを設定して下さい。
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
<footer>
    <div class="XXXX">©2018 作成チーム
    </div>
</footer>
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
footer{
    position:absolute; bottom:0px;
    left:0px; width:100%; height:50px;
    background-color:maroon; color:white;
}
.def{
    text-align:XXXX;
    width:200px;
    padding-right:20px;
    line-height:50px;
}
EOF
)
],
        ]
    ]
];
