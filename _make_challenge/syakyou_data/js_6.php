<?php

return [
<<< 'EOF'
var a = 1;

document.write(++a);
EOF
,
<<< 'EOF'
var a = 0;

document.write(++a);
document.write("<br>");
document.write(++a);
document.write("<br>");
document.write(++a);
EOF
,
<<< 'EOF'
var a = 10;

document.write(a++);
EOF
,
<<< 'EOF'
var a = 0;

document.write(a++);
document.write("<br>");
document.write(a++);
document.write("<br>");
document.write(a++);
EOF
,
<<< 'EOF'
var a = 1;

document.write(--a);
EOF
,
<<< 'EOF'
var a = 10;

document.write(--a);
document.write("<br>");
document.write(--a);
document.write("<br>");
document.write(--a);
EOF
,
<<< 'EOF'
var a = 0;

document.write(--a);
document.write("<br>");
document.write(--a);
document.write("<br>");
document.write(--a);
EOF
,
<<< 'EOF'
var a = 1;

document.write(a--);
EOF
,
<<< 'EOF'
var a = 10;

document.write(a--);
document.write("<br>");
document.write(a--);
document.write("<br>");
document.write(a--);
EOF
,
<<< 'EOF'
var a = 0;

document.write(a--);
document.write("<br>");
document.write(a--);
document.write("<br>");
document.write(a--);
EOF
];
