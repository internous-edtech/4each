<?php

return [
<<< 'EOF'
for(var i = 0; i < 10; i++){
    document.write( i );
}
EOF
,
<<< 'EOF'
for(var i = 1; i <= 5; i++){
    document.write( i );
}
document.write( i );
EOF
,
<<< 'EOF'
for(var i = 33; i > 28; i--){
    document.write( i );
}
EOF
,
<<< 'EOF'
for(var i = 0; i >= -4; i--){
    document.write( i );
}
EOF
,
<<< 'EOF'
for(var i = 0; i < 10; i=i+2){
    document.write( i );
}
EOF
,
<<< 'EOF'
for(var i = 1; i < 10; i=i+2){
    document.write( i );
}
EOF
,
<<< 'EOF'
for(var i = 10; i > 0; i=i-2){
    document.write( i );
}
EOF
,
<<< 'EOF'
for(var i = 99; i > 90; i=i-2){
    document.write( i );
    document.write( "," );
}
document.write( i );
EOF
,
<<< 'EOF'
var star="★";

for(var i=1; i<=5; i++){
    document.write(star);
}
EOF
,
<<< 'EOF'
var star1="★";
var star2="☆";

for(var a=0; a<4; a++){
    document.write( star1+star2);
}
EOF
];
