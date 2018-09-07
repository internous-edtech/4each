<?php

return [
<<< 'EOF'
<?php

$val=6;

if($val > 5){
	if($val < 10){
		echo "Trueです。";
	}
}

?>
EOF
,
<<< 'EOF'
<?php

$val=50;

if($val >= 50){
	if($val <= 60){
		echo "50以上60以下です。";
	}
}

?>
EOF
,
<<< 'EOF'
<?php

$val=2;

if($val == 1){
	echo "Aです。";
}else if($val == 2){
	echo "Bです。";
} else {
	echo "Cです。";
}

?>
EOF
,
<<< 'EOF'
<?php

$val=5;

if($val >= 10){
	echo "10以上です。";
}else if($val >= 5){
	echo "5以上10未満です。";
} else {
	echo "5未満です。";
}

?>
EOF
,
<<< 'EOF'
<?php

$val= 8;

if($val <= 10){
	if($val <= 3){
		echo "3以下です。";
	}else if($val < 8){
		echo "4以上8未満です。";
	} else {
		echo "8以上10以下です。";
	}
}

?>
EOF
,
<<< 'EOF'
<?php

$str= "yes";
$val= 2;

if($str= "yes"){
	if($val == 1){
		echo "1です。" ;
	}else if($val == 2){
		echo "2です。";
	} else {
		echo "範囲外です。";
	}
}

?>
EOF
];
