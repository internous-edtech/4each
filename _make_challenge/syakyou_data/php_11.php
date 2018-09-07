<?php

return [
<<< 'EOF'
<?php

for($i = 1; $i < 3; $i++){
	echo $i
}

?>
EOF
,
<<< 'EOF'
<?php

for($i = 5; $i <= 10; $i++){
	echo $i;
}

?>
EOF
,
<<< 'EOF'
<?php

for($i = 5; $i > 1; $i--){
	echo $i;
}

?>
EOF
,
<<< 'EOF'
<?php

for($i = 5; $i >= 1; $i--){
	echo $i;
}

?>
EOF
,
<<< 'EOF'
<?php

for($i = 1; $i < 5; $i+=2){
	echo $i;
}

?>
EOF
,
<<< 'EOF'
<?php

for($i = 5; $i <= 10; $i+=2){
	echo $i;
}

?>
EOF
,
<<< 'EOF'
<?php

for($i = 5; $i  > 1; $i-=2){
	echo $i;
}

?>
EOF
,
<<< 'EOF'
<?php

for($i = 5; $i >= 1; $i-=2){
	echo $i;
}

?>
EOF
,
<<< 'EOF'
<?php

for($i = 0; $i < 3; $i++){
	echo "★";
}

?>
EOF
,
<<< 'EOF'
<?php

for($i = 0; $i < 3; $i++){
	echo "★☆";
}

?>
EOF
];
