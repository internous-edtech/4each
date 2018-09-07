<?php

return [
<<< 'EOF'
<?php

$val = array(
	"key1" => "value1",
	"key2" => "value2"
);

echo $val["key1"];

?>
EOF
,
<<< 'EOF'
<?php

$val = array(
	"AM" => "午前",
	"PM" => "午後"
);

echo $val["AM"];

?>
EOF
,
<<< 'EOF'
<?php

$val = array(
	"001" => "りんご",
	"002" => "バナナ"
);

echo $val["001"];

?>
EOF
,
<<< 'EOF'
<?php

$arr1 = array("山田","佐藤");
$arr2 = array("東京","大阪");

$arr3 = array($arr1, $arr2);

echo $arr3[1][1];

?>
EOF
,
<<< 'EOF'
<?php

$arr = array(
					array("A1", "A2"),
					array("バラ", "ヒマワリ")
			);

echo $arr[1][0];

?>
EOF
];
