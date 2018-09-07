<?php

return [
<<< 'EOF'
var age =[20, 42, 13, 85, 34];

age.unshift(1);

document.write(age);
EOF
,
<<< 'EOF'
var week =["月", "火", "水", "木", "金"];

week.unshift("日");
week.unshift("土");

document.write(week);
EOF
,
<<< 'EOF'
var age =[20, 42, 13, 85, 34];

age.push(99);

document.write(age);
EOF
,
<<< 'EOF'
var week =["月","火","水","木","金"];

week.push("土");
week.push("日");

document.write(week);
EOF
,
<<< 'EOF'
var age =[20, 42, 13, 85, 34];

age.shift();

document.write(age);
EOF
,
<<< 'EOF'
var week =["月","火","水","木","金","土","日"];

week.shift();
week.shift();

document.write(week);
EOF
,
<<< 'EOF'
var age =[20, 42, 13, 85, 34];

age.pop();

document.write(age);
EOF
,
<<< 'EOF'
var week =['月', '火', '水', '木', '金', '土', '日'];

week.pop();
week.pop();

document.write(week);
EOF
,
<<< 'EOF'
var age =[20, 42, 13, 85, 34];

age.splice(1, 2, 99);

document.write(age);
EOF
,
<<< 'EOF'
var week =["月","火","水","木","金","土","日"];

week.splice(3, 2, "祝", "祝");

document.write(week);
EOF
];
