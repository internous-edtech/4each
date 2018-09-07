<?php

return [
    [ // vol1
        "output" => "",
        "model" =>  explode("\n", <<< 'EOF'
<index.html>
変更なし

<script.js>
bxSliderを用いて「pic1.jpg」 「pic2.jpg」 「pic3.jpg」 をスライドで表示切替えできるようにXXXXをそれぞれ変更してください。

なお、class名は「slide」と指定し、
オプションのmodeは、「fade」を指定して下さい。
EOF
)
,
        "inputs" => [
            [
                'title' => 'エディタ(index.html)',
                'ext' => 'html',
                'name' => 'index',
                "contents" => explode("\n", <<< 'EOF'
<script>
   $(document).ready(function(){
	 $(XXXX)XXXX({
	 auto:'true',
	 mode:XXXX
	 speed:1000,
	 pause:4000,
	 slideWidth:400
	 });
   });

</script>
</head>
<body>
 <div class=XXXX>
	<div><img src="/img/challenge/pic1.jpg"></div>
	<div><img src="/img/challenge/pic2.jpg"></div>
	<div><img src="/img/challenge/pic3.jpg"></div>
 </div>

</body>
</html>
EOF
)
],
        ]
    ]
];
