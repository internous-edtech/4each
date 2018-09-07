<?php

return [
<<< 'EOF'
var age = 25;
var gender = 1;

if(age >= 20){
    if(gender == 1){
        document.write( "成人男性" );
    }
}
EOF
,
<<< 'EOF'
var a = 15;

if(a > 10){
    if(a < 20){
        document.write( "A" );
    }
}
EOF
,
<<< 'EOF'
var num = 11;

if(num < 10){
    document.write( "A" );
}else if(num == 10){
    document.write( "B" );
}else{
    document.write("C");
}
EOF
,
<<< 'EOF'
var name = "山田";

if(name == "佐藤"){
    document.write( name + "様" );
}else if(name == "鈴木"){
    document.write( name + "先生" );
}else{
    document.write( name + "さん" );
}
EOF
,
<<< 'EOF'
var age = 25;
var gender = 2;

if(age >= 20){
    if(gender == 1){
        document.write( "成人男性" );
    }else if(gender == 2){
        document.write( "成人女性" );}
}else{
    document.write( "子ども" );}
EOF
,
<<< 'EOF'
var score = 99;

if(score >= 90){
    if(score == 100){
        document.write( "満点" );
    }else{
        document.write( "合格" );}
}else{
    document.write( "不合格" );}
EOF
];
