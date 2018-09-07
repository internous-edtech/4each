<?php

return [
<<< 'EOF'
<?php

$val = array("AAA", "BBB");

echo $val[1];

?>
EOF
,
<<< 'EOF'
<?php

$val = array("AAA", "BBB");

echo $val[0];
echo "<br>";
echo $val[1];

?>
EOF
,
<<< 'EOF'
<?php

$val = array("AAA", "BBB");

$val[] = "CCC";
echo $val[2];

?>
EOF
,
<<< 'EOF'
<?php

$val = array("東京", "大阪");

$val[2] = "名古屋";
echo $val[2];

?>
EOF
,
<<< 'EOF'
<?php

$val = array("赤", "青");

$val[1] = "白";

echo $val[1];

?>
EOF
,
<<< 'EOF'
<?php

$val = array("リンゴ", "オレンジ");

$val[0] = "バナナ";

echo $val[0];

?>
EOF
,
<<< 'EOF'
<?php

$val = array("バラ", "コスモス" , "ヒマワリ");

unset($val[0]);

echo $val[0];

?>
EOF
,
<<< 'EOF'
<?php

$val[0] = "バラ",
$val[1] = "チューリップ",

unset($val[1]);

echo $val[1];

?>
EOF
];
