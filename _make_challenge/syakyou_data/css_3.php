<?php

return [
    [// vol 1
<<< 'EOF'
<body>
body全体のフォントを<br>
「 ＭＳ 明朝 」に<br>
指定しています。<br>
</body>
</html>
EOF
,
<<< 'EOF'
body{
    font-family:"ＭＳ 明朝";
}
EOF
    ],
    [// vol 2
<<< 'EOF'
<body>
    <div class="center">中央に表示</div>
</body>
</html>
EOF
,
<<< 'EOF'
.center{
    text-align:center;
}
EOF
    ],
    [// vol 3
<<< 'EOF'
<body>
    <div class="left">左に表示</div>
</body>
</html>
EOF
,
<<< 'EOF'
.left{
    text-align:left;
}
EOF
    ],
    [// vol 4
<<< 'EOF'
<body>
    <div class="right">右に表示</div>
</body>
</html>
EOF
,
<<< 'EOF'
.right{
    text-align:right;
}
EOF
    ],
    [// vol 5
<<< 'EOF'
<body>
    <ul>
        <li>ぶどう</li>
        <li>もも</li>
        <li>さくらんぼ</li>
    </ul>
</body>
</html>
EOF
,
<<< 'EOF'
ul{
    list-style-type:circle;
}
EOF
    ],
    [// vol 6
<<< 'EOF'
<body>
    <ul>
        <li>ぶどう</li>
        <li>もも</li>
        <li>さくらんぼ</li>
    </ul>
</body>
</html>
EOF
,
<<< 'EOF'
ul{
    list-style-type:none;
}
EOF
    ]
];
