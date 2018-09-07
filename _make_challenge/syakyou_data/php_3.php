<?php

return [
<<< 'EOF'
<?php

echo 10 % 3;

?>
EOF
,
<<< 'EOF'
<?php

echo 20 % 10;

?>
EOF
,
<<< 'EOF'
<?php

$a=2;
echo ++$a;

?>
EOF
,
<<< 'EOF'
<?php

$a=1;
echo ++$a;
echo "<br>";
echo ++$a;
echo "<br>";
echo ++$a;

?>
EOF
,
<<< 'EOF'
<?php

$a=1;
echo $a++;

?>
EOF
,
<<< 'EOF'
<?php

$a=1;
echo $a++;
echo "<br>";
echo $a++;
echo "<br>";
echo $a++;

?>
EOF
,
<<< 'EOF'
<?php

$a=5;
echo --$a;

?>
EOF
,
<<< 'EOF'
<?php

$a=5;
echo --$a;
echo "<br>";
echo --$a;
echo "<br>";
echo --$a;


?>
EOF
,
<<< 'EOF'
<?php

$a=5;
echo $a--;

?>
EOF
,
<<< 'EOF'
<?php

$a=5;
echo $a--;
echo "<br>";
echo $a--;
echo "<br>";
echo $a--;


?>
EOF
];
