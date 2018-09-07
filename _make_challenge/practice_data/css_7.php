<?php

return [
    [ // vol1
        "output" => "",
        "model" =>  explode("\n", <<< 'EOF'
<index.html>
変更なし

<style.css>
box_aクラス、 box_bクラス、 box_cクラスで指定されたボックス要素が左寄せ（ left ）で横並びに表示されるように XXXXをぞれぞれ変更してください。
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

 <div class="box_a">A</div>
 <div class="box_b">B</div>
 <div class="box_c">C</div>

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
.box_a, XXXX XXXX{XXXX
                        height:100px;
                        width:100px;
                      }

.box_a{
         background-color: lightgray;
    }

.box_b{
         background-color: darkgray;
    }

.box_c{
         background-color: gray;
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
box1クラス、 box2クラスで指定されたボックス要素が左寄せ（ left ）で横並びに表示され、
その下にbox3が配置されるように XXXXを変更してください。
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

<div class="box1"></div>
<div class="box2"></div>
<div class="box3"></div>

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
.box1{float:left;
　　　width:300px;
　　　height:50px;
　　　background-color: lightblue;
　　　}

.box2{float:left;
　　　width:300px;
　　　height:50px;
　　　background-color: skyblue;
　　　}

.box3{XXXX
　　　width:600px;
　　　height:50px;
　　　background-color: gray;
　　　}
EOF
)
],
        ]
    ]
];
