<?php

return [
<<< 'EOF'
public class Sample {

public static void main(String[] args) {

for ( int i = 1; i < 10; i++ )  {

  if ( i % 2 == 0) {

    System.out.println(i);

  }

}

}
}
EOF
,
<<< 'EOF'
public class Sample {

public static void main(String[] args) {

for ( int i = 0; i < 3; i++ )  {

  for ( int j = 1; j < 3; j++ ) {

    System.out.println(j);

  }

}

}
}
EOF
,
<<< 'EOF'
public class Sample {

public static void main(String[] args) {

for(int i=1; i<=3; i++) {
String a = i==2 ? "2です":"2ではない";
System.out.println(a);

 }

}
}
EOF
,
<<< 'EOF'
public class Sample {

public static void main(String[] args) {

for(int i=1; i<=3; i++) {
String a = i%2==0 ? i+"は偶数":i+"は奇数";
System.out.println(a);

 }

}
}
EOF
];
