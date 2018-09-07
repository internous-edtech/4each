<?php

return [
<<< 'EOF'
public class Sample {

public static void main(String[] args) {

String[] str = new String[3];
str[0] = "愛川";
str[1] = "青木";
str[2] = "浅井";

System.out.println(str[0]);

}

}
EOF
,
<<< 'EOF'
public class Sample {

public static void main(String[] args) {

String[] str = new String[3];
str[0] = "愛川";
str[1] = "青木";
str[2] = "浅井";

System.out.println(str[1]);

}

}
EOF
,
<<< 'EOF'
public class Sample {

public static void main(String[] args) {

String[] str = {"愛川","青木","浅井"};

System.out.println(str[2]);

}

}
EOF
,
<<< 'EOF'
public class Sample {

public static void main(String[] args) {

char[] c = {'A','B','C'};

System.out.println(c[0]);

}

}
EOF
,
<<< 'EOF'
public class Sample {

public static void main(String[] args) {

char[] c = {'A','B','C'};

System.out.println(c[1]);

}

}
EOF
,
<<< 'EOF'
public class Sample {

public static void main(String[] args) {

int[] i = {70,80,90};

System.out.println(i[0]);

}

}
EOF
,
<<< 'EOF'
public class Sample {

public static void main(String[] args) {

int[] i = {70,80,90};

System.out.println(i[2]);

}

}
EOF
,
<<< 'EOF'
public class Sample {

public static void main(String[] args) {

int[] i = {70,80,90};

System.out.println(i[2]);

}

}
EOF
,
<<< 'EOF'
public class Sample {

public static void main(String[] args) {

int[] i = {70,80,90};

System.out.println(i[2]);

}

}
EOF
,
<<< 'EOF'
public class Sample {

public static void main(String[] args) {

int[] i = {70,80,90};
i[1] = 85;

System.out.println(i[1]);

}

}
EOF
];
