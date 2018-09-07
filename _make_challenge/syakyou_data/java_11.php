<?php

return [
<<< 'EOF'
public class Sample {

public static void main(String[] args) {

String[][] str = {
                         {"NRT", "成田空港"},
                         {"HND", "羽田空港"},
                         {"KIX", "関西空港"}
                       };

System.out.println(str[0][0]);

}

}
EOF
,
<<< 'EOF'
public class Sample {

public static void main(String[] args) {

String[][] str = {
                         {"NRT", "成田空港"},
                         {"HND", "羽田空港"},
                         {"KIX", "関西空港"}
                       };

System.out.println(str[0][1]);

}

}
EOF
,
<<< 'EOF'
public class Sample {

public static void main(String[] args) {

String[][] str = {
                         {"NRT", "成田空港"},
                         {"HND", "羽田空港"},
                         {"KIX", "関西空港"}
                       };

System.out.println(str[1][1]);

}

}
EOF
,
<<< 'EOF'
public class Sample {

public static void main(String[] args) {

String[][] str = {
                         {"NRT", "成田空港"},
                         {"HND", "羽田空港"},
                         {"KIX", "関西空港"}
                       };

System.out.println(str[2][0]);

}

}
EOF
,
<<< 'EOF'
public class Sample {

public static void main(String[] args) {

String[][] str = new String[3][2];

str[0][0] = "NRT";
str[0][1] = "成田空港";
str[1][0] = "HND";
str[1][1] = "羽田空港";
str[2][0] = "KIX";
str[2][1] = "関西空港";

System.out.println(str[0][1]);

}
}
EOF
,
<<< 'EOF'
public class Sample {

public static void main(String[] args) {

String[][] str = new String[3][2];

str[0][0] = "NRT";
str[0][1] = "成田空港";
str[1][0] = "HND";
str[1][1] = "羽田空港";
str[2][0] = "KIX";
str[2][1] = "関西空港";

System.out.println(str[0][1]);

}
}
EOF
];
