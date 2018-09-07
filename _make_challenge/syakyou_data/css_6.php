<?php

return [
    [// vol 1
<<< 'EOF'
<body>
　<div class="box blue">１</div>
　<div class="box yellow">２</div>
　<div class="box red">３</div>
</body>
</html>
EOF
,
<<< 'EOF'
.box{width:100px;
    height:100px;
}

.blue{background-color:blue;
position:absolute;
top:200px;
left:200px;
}

.yellow{background-color:yellow;
}

.red{background-color:red;
}
EOF
    ],
    [// vol 2
<<< 'EOF'
.box{width:100px;
    height:100px;
}

.blue{background-color:blue;
position:absolute;
top:200px;
left:200px;
}

.yellow{background-color:yellow;
}

.red{background-color:red;
}
EOF
,
<<< 'EOF'
.box{width:100px;
    height:100px;
}

.blue{background-color:blue;
}

.yellow{background-color:yellow;
position:absolute;
top:100px;
left:300px;
}

.red{background-color:red;
}
EOF
    ],
    [// vol 3
<<< 'EOF'
<body>

<div class="fix">固定ヘッダー</div>
<div class="box1">box1</div>
<div class="box2">box2</div>

</body>
</html>
EOF
,
<<< 'EOF'
.fix{
    position:fixed;
    top:0px;
    left:0px;
    width:100%;
    height:40px;
    padding-left:10px;
    font-size:25px;
    background-color:black;
    color:white;
}

.box1{
    width:100%;
    height:400px;
    background-color: lightgray;
    margin-top: 50px;
}

.box2{
    width:100%;
    height:400px;
	background-color: lightblue;
}
EOF
    ]
];
