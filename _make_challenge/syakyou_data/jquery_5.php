<?php

return [
    [ // vol1
        [
            [
                "title" => "HTML写経テキスト",
                "contents" => <<< 'EOF'
<link rel="stylesheet" href="/bxslider/jquery.bxslider.css">
<script src="/bxslider/jquery.bxslider.min.js"></script>
<script>
   $(document).ready(function(){
     $('.abc').bxSlider({
	  auto:'true',
	  mode: 'fade',
	  speed:1000,
	  pause:4000,
	  slideWidth:400
	  });
   });

</script>

</head>
<body>
<div class="abc">
	 <div><img src="/img/challenge/pic1.jpg"></div>
	 <div><img src="/img/challenge/pic2.jpg"></div>
	 <div><img src="/img/challenge/pic3.jpg"></div>
</div>

</body>
</html>
EOF
            ],
            [
                'title' => 'エディタ(index.html)',
                "contents" => <<< 'EOF'
<script>


</script>

</head>
<body>





</body>
</html>
EOF
                ,
                'ext' => 'html',
                'name' => 'index',
            ],
        ],
    ],
    [ // vol2
        [
            [
                "title" => "HTML写経テキスト",
                "contents" => <<< 'EOF'
<link rel="stylesheet" href="/bxslider/jquery.bxslider.css">
<script src="/bxslider/jquery.bxslider.min.js"></script>
<script>
   $(document).ready(function(){
     $('.abc').bxSlider({
	  auto:'true',
	  mode: 'fade',
	  speed:1000,
	  pause:4000,
	  slideWidth:400
	  });
   });

</script>

</head>
<body>
<div class="abc">
	 <div><img src="pic1.jpg"></div>
	 <div><img src="pic2.jpg"></div>
	 <div><img src="pic3.jpg"></div>
</div>

</body>
</html>
EOF
            ],
            [
                'title' => 'エディタ(index.html)',
                "contents" => <<< 'EOF'
<script>


</script>

</head>
<body>





</body>
</html>
EOF
                ,
                'ext' => 'html',
                'name' => 'index',
            ],
        ],
    ],
];
