<?php

return [
<<< 'EOF'
public class Sample {

public static void main(String[] args) {

int i = 0;

if (i < 10) {
    System.out.println("10未満です。");
}

}

}
EOF
,
<<< 'EOF'
public class Sample {

public static void main(String[] args) {

int i = 0;

if (i >= 0) {
    System.out.println("0以上です。");
}

}

}
EOF
,
<<< 'EOF'
public class Sample {

public static void main(String[] args) {

String str = "OK";

if (str.equals( "OK" )) {
    System.out.println(str + "です！");
}

}

}
EOF
,
<<< 'EOF'
public class Sample {

public static void main(String[] args) {

int i = 5;

if (0 =< i && i < 10) {
    System.out.println("0以上10未満です。");
}

}

}
EOF
,
<<< 'EOF'
public class Sample {

public static void main(String[] args) {

int i = 5;

if (i <= -5 || i >= 5) {
    System.out.println("絶対値5以上です。");
}

}

}
EOF
,
<<< 'EOF'
public class Sample {

public static void main(String[] args) {

int i = 5;

if (i < 0) {
    System.out.println("負の数です。");
} else if (i > 0) {
    System.out.println("正の数です。");
}

}

}
EOF
,
<<< 'EOF'
public class Sample {

public static void main(String[] args) {

int i = 5;

if (i < 5) {
    System.out.println("5未満です。");
} else {
    System.out.println("5以上です。");
}

}

}
EOF
,
<<< 'EOF'
public class Sample {

public static void main(String[] args) {

int i = 5;

if (i < 5) {
    System.out.println("Aグループ");
} else if (i < 9) {
    System.out.println("Bグループ");
} else {
    System.out.println("Cグループ");
}

}

}
EOF
,
<<< 'EOF'
public class Sample {

public static void main(String[] args) {

int score = 85;

if (score >= 90) {
    System.out.println("優");
} else if (score >= 70) {
    System.out.println("良");
} else {
    System.out.println("可");
}

}

}
EOF
,
<<< 'EOF'
public class Sample {

public static void main(String[] args) {

int gusuu = 20;

if (gusuu % 2 == 0) {
    System.out.println("偶数");
} else {
    System.out.println("奇数");
}

}

}
EOF
];
