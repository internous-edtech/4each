<?php

return [
<<< 'EOF'
<body>

<table border="1">
<tr>
<td>テキスト１</td>
</tr>
</table>

</body>
</html>
EOF
,
<<< 'EOF'
<body>

<table border="1">
<tr>
<td>テキスト１</td><td>テキスト２</td>
</tr>
</table>

</body>
</html>
EOF
,
<<< 'EOF'
<body>

<table border="1">
	<tr>
	<td>テキスト１</td>
	</tr>
	<tr>
	<td>テキスト２</td>
	</tr>
</table>

</body>
</html>
EOF
,
<<< 'EOF'
<body>

<table border="1">
	<tr>
	<td>テキスト１</td><td>テキスト２</td>
	</tr>
	<tr>
	<td>テキスト3</td><td>テキスト４</td>
	</tr>
</table>

</body>
</html>
EOF
,
<<< 'EOF'
<body>

<table border="1" cellspacing="5">
	<tr>
	<td>テキスト１</td><td>テキスト２</td>
	</tr>
	<tr>
	<td>テキスト3</td><td>テキスト４</td>
	</tr>
</table>

</body>
</html>
EOF
,
<<< 'EOF'
<body>

<table border="1" cellspacing="1" cellpadding="5">
	<tr>
	<td>テキスト１</td><td>テキスト２</td>
	</tr>
	<tr>
	<td>テキスト3</td><td>テキスト４</td>
	</tr>
</table>

</body>
</html>
EOF
,
<<< 'EOF'
<body>

<table border="1" cellspacing="0">
	<tr bgcolor="silver">
	<td>テキスト１</td><td>テキスト２</td>
	</tr>
	<tr>
	<td>テキスト3</td><td>テキスト４</td>
	</tr>
</table>

</body>
</html>
EOF
];
