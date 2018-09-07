<?php

return [
<<< 'EOF'
<?php

$val = "B";

switch ($val){
	case "A":
		echo "Aです。 ";
		break;
	case "B":
		echo "Bです。";
		break;
}

?>
EOF
,
<<< 'EOF'
<?php

$val = "C";

switch ($val){
	case "A":
		echo "Aです。 ";
		break;
	case "B":
		echo "Bです。 ";
		break;

	default:
		echo "AでもBでもありません。";
}

?>
EOF
,
<<< 'EOF'
<?php

$val = "東京";

switch ($val){
case "東京":
	echo "関東です。 ";
	break;
case "大阪":
	echo "関西です。 ";
	break;
}

?>
EOF
];
