<?php

return [
    [// vol 1
<<< 'EOF'
<body>
    <div class="box lime">１</div>
    <div class="box fuchsia">２</div>
    <div class="box aqua">３</div>
</body>
</html>
EOF
,
<<< 'EOF'
.box{
    float:left;
    width:100px;
    height:100px;
}
.lime{
    background-color:lime;}
.fuchsia{
    background-color:fuchsia;}
.aqua{
    background-color:aqua;}
EOF
    ],
    [// vol 2
<<< 'EOF'
<body>
    <div class="box lime">１</div>
    <div class="box fuchsia">２</div>
    <div class="box aqua">３</div>
</body>
</html>
EOF
,
<<< 'EOF'
.box{
    float:right;
    width:100px;
    height:100px;
}
.lime{
    background-color:lime;}
.fuchsia{
    background-color:fuchsia;}
.aqua{
    background-color:aqua;}
EOF
    ],
    [// vol 3
<<< 'EOF'
<body>
    <div class="box_lime">１</div>
    <div class="box_fuchsia">２</div>
</body>
</html>
EOF
,
<<< 'EOF'
.box_lime{
    float:left;
    width:100px;
    height:100px;
    background-color:lime;}
.box_fuchsia{
    float:right;
    width:100px;
    height:100px;
    background-color:fuchsia;}
EOF
    ],
    [// vol 4
<<< 'EOF'
<body>

<ul>
<li>メニュー1</li>
<li>メニュー2</li>
<li>メニュー3</li>
</ul>

</body>
</html>
EOF
,
<<< 'EOF'
li{float:left;
   list-style: none;
   margin-right:20px;
}
EOF
    ],
    [// vol 5
<<< 'EOF'
<body>

<ul>
<li>メニュー1</li>
<li>メニュー2</li>
<li>メニュー3</li>
</ul>

</body>
</html>
EOF
,
<<< 'EOF'
ul{
    width:100%;
    height:25px;
    background-color: gray;
}

li{float:left;
   list-style: none;
   margin-right:20px;
}
EOF
    ],
    [// vol 6
<<< 'EOF'
<body>

<h1>タイトル1</h1>

<img src="/img/challenge/pic1.jpg">
<div class="gojuon">
あいうえお、かきくけこ、さしすせそ、たちつてと
</div>

</body>
</html>
EOF
,
<<< 'EOF'
img{
  width:230px;
  margin-left:10px;
  margin-right:10px;
}

.gojuon{
   float:left;
   border:gray  1px solid;
   height:130px;
   padding:20px;
}
EOF
    ],
    [// vol 7
<<< 'EOF'
img{
  width:230px;
  margin-left:10px;
  margin-right:10px;
}

.gojuon{
   float:left;
   border:gray  1px solid;
   height:130px;
   padding:20px;
}
EOF
,
<<< 'EOF'
img{
  float:left;
  width:230px;
  margin-left:10px;
  margin-right:10px;
}

.gojuon{
   float:left;
   border:gray  1px solid;
   height:130px;
   padding:20px;
}
EOF
    ],
    [// vol 8
<<< 'EOF'
<body>

<h1>タイトル1</h1>
<div class="box1">
あいうえお、かきくけこ
</div>
<div class="box2">
さしすせそ、たちつてと
</div>

</body>
</html>
EOF
,
<<< 'EOF'
.box1{
	float:left;
	width:200px;
	height:50px;
	background-color: lightblue;
	margin:5px;
	text-align: center;
}

.box2{
	float:left;
	width:200px;
	height:50px;
	background-color: lightgray;
	margin:5px;
	text-align: center;
}
EOF
    ],
    [// vol 9
<<< 'EOF'
<body>

<div class="top"></div>
<div class="box1"></div>
<div class="box2"></div>
<div class="bottom"></div>

</body>
</html>
EOF
,
<<< 'EOF'
.top{width:100%;
       height:40px;
       background-color: gray;
}

.box1{float:left;
         width:50%;
         height:100px;
         background-color: lightblue;
}

.box2{float:left;
         width:50%;
         height:100px;
         background-color: skyblue;
}

.bottom{clear:left;
            width:100%;
            height:40px;
            background-color: black;
            }
EOF
    ],
];
