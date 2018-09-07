<?php

return [
<<< 'EOF'
<?php

$abc=50;

if($abc < 100){
	echo "小さいです。";
}

?>
EOF
,
<<< 'EOF'
<?php

$abc=50;

if($abc == 50){
	echo "同じです。";
}

?>
EOF
,
<<< 'EOF'
<?php

$abc=200;

if ($abc < 100) {
	echo "小さいです。";
} elseif ($abc > 100) {
	echo "大きいです。";
}

?>
EOF
,
<<< 'EOF'
<?php

$abc=10;

if ($abc < 50) {
	echo "小さいです。";
} elseif ($abc > 50) {
	echo "大きいです。";
}

?>
EOF
,
<<< 'EOF'
<?php

$abc=100;

if ($abc == 100) {
	echo "100です。";
} else {
	echo "100以外です。";
}

?>
EOF
,
<<< 'EOF'
<?php

$abc=20;

if ($abc < 20) {
	echo "20未満です。";
} else {
	echo "20以上です。";
}

?>
EOF
];
