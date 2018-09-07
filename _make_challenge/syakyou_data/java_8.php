<?php

return [
<<< 'EOF'
public class Sample {

public static void main(String[] args) {

int i = 5;

if (i > 0) {
  if (i < 10) {
    System.out.println("1桁の正の整数");
  }
}

}

}
EOF
,
<<< 'EOF'
public class Sample {

public static void main(String[] args) {

int i = 50;

if (i > 9) {
  if (i < 100) {
    System.out.println("2桁の正の整数");
  }
}

}

}
EOF
,
<<< 'EOF'
public class Sample {

public static void main(String[] args) {

int i = 99;

if (i > 99) {
  if (i < 1000) {
    System.out.println("3桁の正の整数");
  }
}

}

}
EOF
,
<<< 'EOF'
public class Sample {

public static void main(String[] args) {

int score = 5;
if (score > 0) {
  if (score == 10) {
    System.out.println( "金賞" );
  } else if (score == 9) {
    System.out.println( "銀賞" );
  } else {
    System.out.println( "参加賞" );
  }
}

}
}
EOF
,
<<< 'EOF'
public class Sample {

public static void main(String[] args) {

int score = 9;
if (score > 0) {
  if (score == 10) {
    System.out.println( "金賞" );
  } else if (score == 9) {
    System.out.println( "銀賞" );
  } else {
    System.out.println( "参加賞" );
  }
}

}
}
EOF
,
<<< 'EOF'
public class Sample {

public static void main(String[] args) {

int val = 790;
if (769 < val && val < 801) {
  if (val == 777) {
    System.out.println( "1等賞" );
  } else if (val == 776 || val == 778) {
    System.out.println( "1等前後賞" );
  } else if (val < 780) {
    System.out.println( "2等賞" );
  } else {
    System.out.println( "3等賞" );
  }
}
}
}
EOF
,
<<< 'EOF'
public class Sample {

public static void main(String[] args) {

int val = 778;
if (769 < val && val < 801) {
  if (val == 777) {
    System.out.println( "1等賞" );
  } else if (val == 776 || val == 778) {
    System.out.println( "1等前後賞" );
  } else if (val < 780) {
    System.out.println( "2等賞" );
  } else {
    System.out.println( "3等賞" );
  }
}
}
}
EOF
,
<<< 'EOF'
public class Sample {

public static void main(String[] args) {

int val = 690;
if (769 < val && val < 801) {
  if (val == 777) {
    System.out.println( "1等賞" );
  } else if (val == 776 || val == 778) {
    System.out.println( "1等前後賞" );
  } else if (val < 780) {
    System.out.println( "2等賞" );
  } else {
    System.out.println( "3等賞" );
  }
}
}
}
EOF
];
