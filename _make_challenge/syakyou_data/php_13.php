<?php

return [
<<< 'EOF'
<?php

$i = 0;
while ($i <= 3){
	echo $i;
	$i++;
}

?>
EOF
,
<<< 'EOF'
<?php

$i = 10;
while ($i <= 15){
	echo $i;
	$i++;
}

?>
EOF
,
<<< 'EOF'
<?php

$i = 10;
while ($i > 5){
	echo $i;
	$i--;
}

?>
EOF
,
<<< 'EOF'
<?php

$i = 3;
while ($i >= 0){
	echo $i;
	$i--;
}

?>
EOF
,
<<< 'EOF'
<?php

$i = 0;
while ($i <= 3){
	echo $i;
	$i+=2;
}

?>
EOF
,
<<< 'EOF'
<?php

$i = 10;
while ($i <= 15){
	echo $i;
	$i+=2;
}

?>
EOF
,
<<< 'EOF'
<?php

$i = 3;
while ($i >= 0){
	echo $i;
	$i-=2;
}

?>
EOF
,
<<< 'EOF'
<?php

$i = 10;
while ($i > 5){
	echo $i;
	$i-=2;
}

?>
EOF
,
<<< 'EOF'
<?php

$i = 0;
while ($i < 5){
	echo "★";
	$i++;
}

?>
EOF
,
<<< 'EOF'
<?php

$i = 0;
while ($i < 3){
	echo "★☆";
	$i++;
}

?>
EOF
];
