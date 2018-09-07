<?php

return [
<<< 'EOF'
public class Sample {

public static void main(String[] args) {

int i = 2;

switch(i) {
  case 1:
    System.out.println("1回目");
    break;
  case 2:
    System.out.println("2回目");
    break;
}

}
}
EOF
,
<<< 'EOF'
public class Sample {

public static void main(String[] args) {

int i = 3;
switch(i) {
  case 1:
    System.out.println("1回目");
    break;
  case 2:
    System.out.println("2回目");
    break;
  case 3:
    System.out.println("3回目");
    break;
}
}
}
EOF
,
<<< 'EOF'
public class Sample {

public static void main(String[] args) {

int i = 3;
switch(i) {
  case 1:
    System.out.println("1回目");
    break;
  case 2:
    System.out.println("2回目");
    break;
  default:
    System.out.println("終了");
}

}
}
EOF
,
<<< 'EOF'
public class Sample {

public static void main(String[] args) {

int i = 3;
switch(i) {
  case 1:
    System.out.println("1回目");
    break;
  case 2:
    System.out.println("2回目");
    break;
  default:
    System.out.println("終了");
}

}
}
EOF
,
<<< 'EOF'
public class Sample {

public static void main(String[] args) {

String s = "ios";
switch(s) {
  case "win":
    System.out.println("Windows");
    break;
  case "mac":
    System.out.println("Macintosh");
    break;
  default:
    System.out.println("その他");
}

}
}
EOF
];
