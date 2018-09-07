<?php

return [
<<< 'EOF'
var age =[20, 42, 13, 85, 34];

document.write(age);
EOF
,
<<< 'EOF'
var week =["月", "火", "水", "木", "金", "土", "日"];

document.write(week);
EOF
,
<<< 'EOF'
var age =[20, 42, 13, 85, 34];

document.write(age[3]);
EOF
,
<<< 'EOF'
var week =["月", "火", "水", "木", "金", "土", "日"];

document.write(week[0]);
EOF
,
<<< 'EOF'
var age =[20, 42, 13, 85, 34];

delete age[3];

document.write(age);
EOF
,
<<< 'EOF'
var week =["月", "火", "水", "木", "金", "土", "日"];

delete age[0];

document.write(week);
EOF
,
<<< 'EOF'
var age =[20, 42, 13, 85, 34];

age[5] = 99;

document.write(age);
EOF
,
<<< 'EOF'
var week =["月", "火", "水", "木", "金", "土", "日"];

week[9] = '祝';

document.write(week);
EOF
,
<<< 'EOF'
var age =[20, 42, 13, 85, 34];

age[3] = 0;

document.write(age);
EOF
,
<<< 'EOF'
var week =["月", "火", "水", "木", "金", "土", "日"];

week[0] = "祝";

document.write(week);
EOF
,
<<< 'EOF'
var info={"名前":"山田太郎","住所":"東京都港区", "性別":"男性"};
document.write(info["名前"]);
document.write(info.名前);
EOF
,
<<< 'EOF'
var user01 = {id:"3324",name:"高橋",};

document.write(user01.id);
document.write(user01.name);
EOF
];
