<?php

return [
    [// vol 1
<<< 'EOF'
<body>
 <header>
      <div class="head_title">CSS入門</div>
  </header>
</body>
</html>
EOF
,
<<< 'EOF'
position:absolute;
   top:0px;
   left:0px;
   width:100%;
   height:50px;
   background-color:gray;
   color:white;
 }

.head_title{
   padding-left:10px;
   font-size:24px;
   line-height:50px;
 }
EOF
    ],
    [// vol 2
<<< 'EOF'
<body>
 <header>
      <div class="head_title">CSS入門</div>
      <ul>
        <li>メニュー1</li>
        <li>メニュー2</li>
      </ul>
  </header>
</body>
</html>
EOF
,
<<< 'EOF'
header{
    position:absolute;
    top:0px;
    left:0px;
    width:100%;
    height:50px;
    background-color:gray;
    color:white;
  }

.head_title{
    float:left;
    padding-left:10px;
    font-size:24px;
    line-height:50px;
  }

header ul{
  float:right;

}

header li{
  float:left;
  list-style: none;
  margin-right:20px;
}
EOF
    ],
    [// vol 3
<<< 'EOF'
<body>
<footer>
    ©2018 CSS入門
</footer>
</body>
</html>
EOF
,
<<< 'EOF'
footer{width:100%;
    height:50px;
    position:absolute;
    bottom:0px;
    left:0px;
    text-align:center;
    line-height:50px;
    background-color:gray;
    color:white;
}
EOF
    ],
    [// vol 4
<<< 'EOF'
<body>
<footer>
    <div class="foot_copyright">
        ©2018 CSS入門</div>
</footer>
</body>
</html>
EOF
,
<<< 'EOF'
footer{
    position:absolute;
    bottom:0px;
    left:0px;
    width:100%;
    height:50px;
    background-color:gray;
    color:white;
}

.foot_copyright{
    text-align: left;
    padding-right:20px;
    line-height:50px;
}
EOF
    ],
    [// vol 5
<<< 'EOF'
<body>
<footer>
    <div class="foot_copyright">
        ©2018 CSS入門</div>
</footer>
</body>
</html>
EOF
,
<<< 'EOF'
footer{
    position:absolute;
    bottom:0px;
    left:0px;
    width:100%;
    height:50px;
    background-color:gray;
    color:white;
}

.foot_copyright{
    text-align: right;
    padding-right:20px;
    line-height:50px;
}
EOF
    ],
    [// vol 6
<<< 'EOF'
<body>

<main>
<div class="main_contents"></div>
<div class="sidebar"></div>
</main>

</body>
</html>
EOF
,
<<< 'EOF'
main{
  width:100%;
}

.main_contents{
  float:left;
  width:70%;
  height:300px;
  background-color: lightgray;
}

.sidebar{
  float:left;
  width:30%;
  height:300px;
  background-color: skyblue;
  }
EOF
    ]
];
