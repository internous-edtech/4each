<?php

return [
<<< 'EOF'
<?php

for($i =0; $i <= 3; $i++){
	echo $i."-";
	for($j =0; $j <= 1; $j++){
		echo $j;
	}
}

?>
EOF
,
<<< 'EOF'
<?php

for($i =1; $i <= 2; $i ++){
	echo $i."回目の[$i]<br>";
	for($j =1; $j<= 3; $j++){
		echo "* ".$j."回目の[$j]<br>";
	}
}
?>
EOF
,
<<< 'EOF'
<?php

for($i =0; $i <= 10; $i++){
	if ($i > 5){
		echo $i;
	}
}

?>
EOF
,
<<< 'EOF'
<?php

for($i =0; $i <= 10; $i++){
	if ($i %2 == 1){
		echo $i."<br>";
	}
}

?>
EOF
];
