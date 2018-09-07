<?php

return [
<<< 'EOF'
var a = 1;

switch(a){
  case 0:
      document.write( "aは0です。" );
      break;
  case 1:
      document.write( "aは1です。" );
      break;
}
EOF
,
<<< 'EOF'
var a = "青";
switch(a){
  case "赤":
      document.write( "赤信号です" );
      break;
  case "青":
      document.write( "青信号です" );
      break;
  case "黄":
      document.write( "黄信号です" );}
EOF
,
<<< 'EOF'
var a = 0;
switch(a){
  case 1:
      alert( "1が入力されました。" );
      break;
  case 2:
      alert( "2が入力されました。" );
      break;
  default:
      alert( "1か2を入力して下さい。" );}
EOF
];
