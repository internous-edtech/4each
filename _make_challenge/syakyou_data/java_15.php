<?php

return [
<<< 'EOF'
public class Sample {

public static void main(String[] args) {

int i = 1;

do {

  System.out.println( i );
  i++;

} while ( i < 6 );

}

}
EOF
,
<<< 'EOF'
public class Sample {

public static void main(String[] args) {

int i = 5;

do {

  System.out.println( i );
  i++;

} while ( i < 10 );

}

}
EOF
,
<<< 'EOF'
public class Sample {

public static void main(String[] args) {

int i = 5;

do {

  System.out.println( i );
  i++;

} while ( i < 10 );

}

}
EOF
,
<<< 'EOF'
public class Sample {

public static void main(String[] args) {

int i = 10;

do {

  System.out.println( i );
  i--;

} while ( i > 5 );

}

}
EOF
,
<<< 'EOF'
public class Sample {

public static void main(String[] args) {

int i = 10;

do {

  System.out.println( i );
  i--;

} while ( i > 5 );

}

}
EOF
,
<<< 'EOF'
public class Sample {

public static void main(String[] args) {

int i = 9;

do {

  System.out.println( i );
  i -= 2;

} while ( i > 0 );

}

}
EOF
];
