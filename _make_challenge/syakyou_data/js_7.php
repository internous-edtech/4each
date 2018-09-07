<?php

return [
<<< 'EOF'
var age = 25;

if(age >= 20){
    document.write("成人");
}
EOF
,
<<< 'EOF'
var a = 15;

if(a > 10 && a < 20){
    document.write( "A");
}
EOF
,
<<< 'EOF'
var age = 17;

if(age < 18){
    alert("20歳未満は購入できません。");
}
EOF
,
<<< 'EOF'
var age = 17;

if(age < 18){
    alert("20歳未満は購入できません。");
}
EOF
,
<<< 'EOF'
var num = 9;

if(num > 10){
    document.write( "A");
}else if(num < 10){
    document.write( "B");
}
EOF
,
<<< 'EOF'
var age = 15;

if(age < 18){
    document.write( "子ども" );
}else if(age > 60){
    document.write( "老人");
}
EOF
,
<<< 'EOF'
var a = 55;

if(a <= 10){
    alert("10以下です。");
}else if(a == 55){
    alert("55です。");
}
EOF
,
<<< 'EOF'
var name = "鈴木";

if(name == "佐藤"){
    document.write( name + "様" );
}else if(name == "鈴木"){
    document.write( name + "先生" );
}
EOF
,
<<< 'EOF'
var num = 11;

if(num < 10){
    document.write( "A" );
}else{
    document.write( "B" );
}
EOF
,
<<< 'EOF'
var age = 20;

if(age < 20){
    document.write( "未成年");
}else{
    document.write( "成人" );
}
EOF
,
<<< 'EOF'
var a = 55;

if(a >= 60){
    alert("合格です。");
}else{
    alert("不合格です。");
}
EOF
,
<<< 'EOF'
var name = "山田";

if(name == "佐藤"){
    document.write( name + "様" );
}else{
    document.write( name + "さん" );
}
EOF
];
