<?php

return [
<<< 'EOF'
var i = 1;

while(i < 5){
    document.write( i );
    i++;
}
EOF
,
<<< 'EOF'
var i = 8;

while(i <= 12){
    i++;
    document.write( i );
    document.write( "<br>" );
}
EOF
,
<<< 'EOF'
var i = 10;

while(i > 5){
    document.write( i );
    i--;
}
EOF
,
<<< 'EOF'
var i = 9;

while(i >= 5){
    i--;
    document.write( i );
    document.write( "<br>" );
}
EOF
,
<<< 'EOF'
var i = 0;

while(i < 10){
    document.write( i );
    i = i + 2;
}
EOF
,
<<< 'EOF'
var i = 1;

while(i <= 5){
    i = i + 2;
    document.write( i );
    document.write( "<br>" );
}
EOF
,
<<< 'EOF'
var i = 10;

while(i > 1){
    document.write( i );
    i = i - 2;
}
EOF
,
<<< 'EOF'
var i = 11;

while(i >= 5){
    i = i - 2;
    document.write( i );
    document.write( "<br>" );
}
EOF
,
<<< 'EOF'
var i = 0;

while(i < 5){
    document.write( "★" );
    i++;
}
EOF
,
<<< 'EOF'
var i = 0;
while(i < 10){
    if(i%2 == 0){
        document.write("☆");
    }else{
        document.write("★");
    }
    i++;
}
EOF
];
