<?php

return [
    [// vol 1
<<< 'EOF'
<body>

<div class="content">
  <div class="a_gyo">あいうえお</div>
  <div class="ka_gyo">かきくけこ</div>
</div>


</body>
</html>
EOF
,
<<< 'EOF'
.content{
        color:blue;
}

.a_gyo{
       font-size: 30px;
}

.ka_gyo{
       font-size: 10px;
}
EOF
    ],
    [// vol 2
<<< 'EOF'
<body>

<div class="kanto">
<p>東京</p>
神奈川
</div>

</body>
</html>
EOF
,
<<< 'EOF'
.kanto{
      font-size:30px;
}
.kanto p{
      color:blue;
}
EOF
    ],
    [// vol 3
<<< 'EOF'
<body>

<h1 class="kanto">関東の都道府県</h1>
<p class="kanto">東京</p>
<p class="kanto">神奈川</p>

</body>
</html>
EOF
,
<<< 'EOF'
.kanto{
       color:red;
}
EOF
    ],
    [// vol 4
<<< 'EOF'
<body>

<div class="kansai">
  <h1>関西の都道府県</h1>
  <ul>
      <li>大阪</li>
      <li>京都</li>
  </ul>
</div>

</body>
</html>
EOF
,
<<< 'EOF'
.kansai{
      color:blue;
}

.kansai h1{
      font-size: 50px;
}

.kansai li{
     font-size: 12px;
     list-style: square;
}
EOF
    ],
    [// vol 5
<<< 'EOF'
<body>

<h1>首都圏</h1>
  <h2>東京</h2>
    渋谷区、中央区、港区
  <h2>神奈川</h2>
    横浜市、川崎市、

</body>
</html>
EOF
,
<<< 'EOF'
h1,h2{
      color:red;
}
EOF
    ],
    [// vol 6
<<< 'EOF'
<body>

<div class="umi_ari">静岡、愛知、福島、宮城</div>
<p>埼玉、栃木、群馬、山梨</p>
<p class="umi_ari">東京、神奈川、千葉、茨城</p>



</body>
</html>
EOF
,
<<< 'EOF'
.umi_ari{
        color:blue;
}

p{
    font-size: 20px;
}

  p.umi_ari{
        text-align: center;
}
EOF
    ]
];
