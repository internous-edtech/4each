<?php

return [
<<< 'EOF'
public class Sample {

public static void main(String[] args) {

int i = 0;
System.out.println(++i);

}

}
EOF
,
<<< 'EOF'
public class Sample {

public static void main(String[] args) {

int i = 15;
System.out.println(++i);

}

}
EOF
,
<<< 'EOF'
public class Sample {

public static void main(String[] args) {

int i = 1;
System.out.println(++i);
System.out.println(++i);
System.out.println(++i);
System.out.println(++i);

}

}
EOF
,
<<< 'EOF'
public class Sample {

public static void main(String[] args) {

int i = 0;
System.out.println(i++);

}

}
EOF
,
<<< 'EOF'
public class Sample {

public static void main(String[] args) {

int i = 15;
System.out.println(i++);

}

}
EOF
,
<<< 'EOF'
public class Sample {

public static void main(String[] args) {

int i = 1;
System.out.println(i++);
System.out.println(i++);
System.out.println(i++);
System.out.println(i++);

}

}
EOF
,
<<< 'EOF'
public class Sample {

public static void main(String[] args) {

int i = 1;
System.out.println(--i);

}

}
EOF
,
<<< 'EOF'
public class Sample {

public static void main(String[] args) {

int i = 10;
System.out.println(--i);
System.out.println(--i);
System.out.println(--i);
System.out.println(--i);

}

}
EOF
,
<<< 'EOF'
public class Sample {

public static void main(String[] args) {

int i = 1;
System.out.println(i--);

}

}
EOF
,
<<< 'EOF'
public class Sample {

public static void main(String[] args) {

int i = 10;
System.out.println(i--);
System.out.println(i--);
System.out.println(i--);
System.out.println(i--);

}

}
EOF
];
