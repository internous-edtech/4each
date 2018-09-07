<?php

return [
<<< 'EOF'
for(var i = 0; i < 5; i++){
    if(i < 3){
        document.write( i );
    }
    document.write( "<br>" );
}
EOF
,
<<< 'EOF'
for(var i = 0; i < 5; i++){
    if(i < 3){
        document.write( i );
    }else{
        document.write( 0 );
    }
   document.write( "<br>" );
}
EOF
,
<<< 'EOF'
for(var m = 0; m < 5; m++){
    for(var n = 1; n <= 5; n++){
        document.write( n );
    }
    document.write( "<br>" );
}
EOF
,
<<< 'EOF'
for(i = 0; i < 3; i++){
    for(j = 0; j <= 9; j++){
        document.write("★");
        if(j == 9){
            document.write("<br>");
        }
    }
}
EOF
];
