<?php

return [
<<< 'EOF'
create table drinklist(
drink_id int(11),
name varchar(255),
price int(11),
number int(11));
EOF
,
<<< 'EOF'
insert into drinklist values(
"1", "オレンジジュース","150","5"),
("2", "アップルジュース","130","4"),
("3", "ミネラルウォーター","80","7"),
("4", "コーラ","120","6");
EOF
,
<<< 'EOF'
create table user_table(
user_id int(11),
name varchar(255),
age int(11),
tel varchar(255),
mail varchar(255));
EOF
,
<<< 'EOF'
insert into user_table values(
"1","山田太郎","24","090-1234-5678",yamada@gmail.com),
("2","佐藤次郎","2２","090-2345-9999",sato@gmail.com),
("3","鈴木花子","26","080-7777-8888",suzuki@gmail.com);
EOF
];
