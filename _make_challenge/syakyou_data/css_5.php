<?php

return [
    [// vol 1
<<< 'EOF'
<body>
    <div class="box1">
        株式会社BOX<br>
        3377-9999
    </div>
</body>
</html>
EOF
,
<<< 'EOF'
.box1{
    width:250px;
    height:250px;
    background-color:whitesmoke;
    border:2px solid gray;
}
EOF
    ],
    [// vol 2
<<< 'EOF'
<body>
    <div class="box2">
        株式会社BOX<br>
        3377-9999
    </div>
</body>
</html>
EOF
,
<<< 'EOF'
.box2{
    width:250px;
    height:250px;
    background-color:whitesmoke;
    margin-left:200px;
}
EOF
    ],
    [// vol 3
<<< 'EOF'
<body>
    <div class="box3">
        株式会社BOX<br>
        3377-9999
    </div>
</body>
</html>
EOF
,
<<< 'EOF'
.box3{
    width:250px;
    height:250px;
    background-color:whitesmoke;
    padding-top:100px;
}
EOF
    ],
    [// vol 4
<<< 'EOF'
<body>
    <div class="border">
        株式会社BOX<br>
        3377-9999
    </div>
</body>
</html>
EOF
,
<<< 'EOF'
.border{
    border-top:3px dotted lime;
    border-bottom:3px double lime;
}
EOF
    ],
    [// vol 5
<<< 'EOF'
<body>

<h1>タイトル</h1>

</body>
</html>
EOF
,
<<< 'EOF'
h1{
    border-left:5px solid red;
    border-bottom:2px solid blue;
}
EOF
    ],
    [// vol 6
<<< 'EOF'
<body>

<h1>タイトル</h1>

</body>
</html>
EOF
,
<<< 'EOF'
h1{
  border-left:3px solid gray;
  border-bottom:1px solid gray;
  padding-left: 10px;
}
EOF
    ],
    [// vol 7
<<< 'EOF'
<body>
    <div class="box4">
        株式会社BOX<br>
        3377-9999
    </div>
</body>
</html>
EOF
,
<<< 'EOF'
.box4{
    width:200px;
    height:70px;
    background-color:whitesmoke;
    border-top:20px solid gray;
    padding:0.5em 1em;
}
EOF
    ]
];
