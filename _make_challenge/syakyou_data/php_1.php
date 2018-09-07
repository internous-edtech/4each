<?php

return [
<<< 'EOF'
<?php

echo "1234567";

?>
EOF
,
<<< 'EOF'
<?php

echo "テキストの
改行";

?>
EOF
,
<<< 'EOF'
<?php

echo "HTMLタグでテキストを<br>改行します。";

?>
EOF
];
