<?php

return [
<<< 'EOF'
<?php

$a = array(10, 15, 20);

foreach($a as $value){
	echo $value;
}

?>
EOF
,
<<< 'EOF'
<?php

$a = array("赤", "青", "黄");

foreach($a as $value){
	echo $value;
}

?>
EOF
,
<<< 'EOF'
<?php

$a = array("A", "B", "C");

foreach($a as $value){
	echo $value."<br>";
}

?>
EOF
,
<<< 'EOF'
<?php

$a = array("A", "B", "C");

foreach($a as $key => $value){
	echo $key.$value;
}

?>
EOF
,
<<< 'EOF'
<?php

$a = array("りんご", "みかん", "もも");

foreach($a as $key => $value){
	echo $key.$value.", ";
}

?>
EOF
,
<<< 'EOF'
<?php

$a = array("red", "blue", "yellow");

foreach($a as $key => $value){
	echo $key."-"$value."<br>";
}

?>
EOF
];
