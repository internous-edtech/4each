<?php

return [
<<< 'EOF'
<?php

function myfunc1($a){
	return $a + 5;
}

echo myfunc1(10);

?>
EOF
,
<<< 'EOF'
<?php

function myfunc2($a){
	return $a."歳です。";
}

echo myfunc2(20);

?>
EOF
,
<<< 'EOF'
<?php

function myfunc3($a, $b){
	return $a."は".$b."円です。";
}

echo myfunc3("リンゴ", 100);

?>
EOF
,
<<< 'EOF'
<?php

function totalPrice($fruit,$tax=1.08){
return "合計金額は".$fruit*$tax."円です。";
}

echo totalPrice(200);

?>
EOF
,
<<< 'EOF'
<?php

function totalPrice($fruit,$tax=1.08,$haiso=350){
	$fruitPrice=$fruit*$tax;
	echo "合計金額は".($fruitPrice+$haiso)."です。";
}

totalPrice(500);

?>
EOF
,
<<< 'EOF'
<?php

function totalPrice($fruit,$tax=1.08,$haiso=350){
	$fruitPrice=$fruit*$tax;
	if($fruit >= 1000){
		echo "合計金額は".($fruitPrice)."です。<br>";
	}else{
		echo  "合計金額は".($fruitPrice+$haiso)."です。<br>";
	}

}

totalPrice(500);
totalPrice(1000);
totalPrice(1500);

?>
EOF
];
