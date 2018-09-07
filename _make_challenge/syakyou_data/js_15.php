<?php

return [
<<< 'EOF'
function welcome(){
    return "ようこそ!";
}

document.write(welcome());
EOF
,
<<< 'EOF'
function caution(){
    return "必須項目が未入力です。";
}

document.write(caution());
EOF
,
<<< 'EOF'
function welcome(name){
    return "ようこそ!" + name + "さん。";
}

document.write(welcome("田中"));
EOF
,
<<< 'EOF'
function zeikomi(price){
    return price * 1.08;
}

document.write(zeikomi(100));
EOF
,
<<< 'EOF'
function hello(){
      document.write("こんにちは");
    }
hello();
EOF
,
<<< 'EOF'
function myNameIs(name){
      document.write("私の名前は"+name+"です<br>");
    }
myNameIs("山田");
myNameIs("佐藤");
EOF
,
<<< 'EOF'
function hantei(age){
    if(age < 18){
        document.write("子どもです。");
    }else{
        document.write("大人です。");
    }
}
hantei(20);
EOF
];
