<?php

return [
    [// vol 1
<<< 'EOF'
<body>
body全体のテキストの色を<br>
「 blue 」に<br>
指定しています。<br>
</body>
</html>
EOF
,
<<< 'EOF'
body{
    color:blue;
}
EOF
    ],
    [// vol 2
<<< 'EOF'
<body>
body全体のテキストの色を<br>
カラーコード「 #FF0000 」（red）に<br>
指定しています。<br>
</body>
</html>
EOF
,
<<< 'EOF'
body{
    color:#FF0000;
}
EOF
    ],
    [// vol 3
<<< 'EOF'
<body>
<h1>purple</h1>
h1タグのテキストの色を「 purple 」に指定しています。
</body>
</html>
EOF
,
<<< 'EOF'
h1{
    color:purple;
}
EOF
    ],
    [// vol 4
<<< 'EOF'
<body>
<h1>#008000</h1>
h1タグのテキストの色を カラーコード「 #008000 」（green）に指定しています。
</body>
</html>
EOF
,
<<< 'EOF'
h1{
    color:#008000;
}
EOF
    ],
    [// vol 5
<<< 'EOF'
<body>
<div class="blue">テキストの色は「 blue 」</div>
<div class="red">テキストの色は「 red 」</div>
</body>
</html>
EOF
,
<<< 'EOF'
.blue{
    color:blue;
}

.red{
    color:red;
}
EOF
    ],
    [// vol 6
<<< 'EOF'
<body>
<div class="fs24">フォントサイズは「 24px 」</div>
<div class="fs36">フォントサイズは「 36px 」</div>
</body>
</html>
EOF
,
<<< 'EOF'
.fs24{
    font-size:24px;
}

.fs40{
    font-size:40px;
}
EOF
    ],
    [// vol 7
<<< 'EOF'
<body>
<div class="fs24">通常フォント</div>
<div class="fs40">強調フォント</div>
<div class="fs24">通常フォント</div>
</body>
</html>
EOF
,
<<< 'EOF'
.fs24{
    font-size:24px;
}

.fs40{
    font-size:40px;
}
EOF
    ]
];
