<?php

return [
<<< 'EOF'
<?php

$arr = array("キー1" => "値1", "キー2" => "値2", "キー3" => "値3");

foreach($arr as $key => $val){
	echo $key."-".$val."<br>";
}

?>
EOF
,
<<< 'EOF'
<?php

$arr = array("red" => "赤", "blue" => "青", "yellow" => "黄");

foreach($arr as $key => $val){
	echo $key."-".$val."<br>";
}

?>
EOF
,
<<< 'EOF'
<?php

$arr = array(
	"001" => array("01"=> 100, "02" => 150),
	"002" => array("01"=> 200, "02" => 300)
	);

foreach ($arr as $key1 => $val1){

	echo $key1."<br>";

	foreach ($val1 as $key2 => $val2){
		echo $key2."-".$val2."<br>";
	}

}

?>
EOF
,
<<< 'EOF'
<?php

$arr = array(
	"キー1" => array("1-1"=> "値1", "1-2" => "値2"),
	"キー2" => array("2-1"=> "値3", "2-2" => "値4")
	);

foreach ($arr as $key1 => $val1){

	echo $key1."<br>";

	foreach ($val1 as $key2 => $val2){
		echo $key2."-".$val2."<br>";
	}

}

?>
EOF
];
