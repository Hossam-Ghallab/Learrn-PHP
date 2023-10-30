<?php
/// 001 - Introduction & Important Information

/// 002 - What’s New And How To Study The Course ?

/// 003 - Install PHP And Prepare Environment To Work

/// 004 - PHP Tags And Instructions Separation

  // echo 'We Love PHP';
  // echo '<br>';

  // ECHO 'We Love PHP';
  // ECHO '<br>';

  // print 'We Love PHP';
  // print '<br>';

  // PRINT 'We Love PHP';
  // PRINT '<br>';

?>

<!-- <.?= 'We Love PHP With Short Tag';?.> //* delete . in the line code --> 

<!-- <!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Page</title>
  </head>
  <body>
    <?php // echo 'HTML'; ?>
  </body>
</html> -->
<?php // echo 'HTML';

// ------------------------------------------------------//
// ======================================================//
// ------------------------------------------------------//

/// 005 - Comments And Best Practices

  // Single Line Comment
  // echo 'Test'; // Single Line Comment
  // echo 'Test'; # Single Line Comment

  /*
    Line 1
    Line 2
  */

  /*
    ====================
    == My Special App ==
    ====================
  */

  /* Single Line */

  // echo 'Test' /* Single Line */;

  // I Used Print Because Its Faster Than Echo <= Example Not True
  // print 'Test';

// ------------------------------------------------------//
// ======================================================//
// ------------------------------------------------------//

/// 006 - Introduction To Data Type

  /*
  ============================================
  = Data Types
  = ----------
  = bool  => Boolean
  = int   => Integer
  = float => Floating Point Number | double
  = string
  = array
  = Other Types
  = gettype()
  ============================================
  */

  // echo "1- ".gettype(True);
  // echo '<br>';
  // echo "2- ".gettype(False);
  // echo '<br>';
  // echo "3- ".gettype(true);
  // echo '<br>';
  // echo "4- ".gettype(100);
  // echo '<br>';
  // echo "5- ".gettype(-200);
  // echo '<br>';
  // echo "6- ".gettype(0);
  // echo '<br>';
  // echo "7- ".gettype(70.30);
  // echo '<br>';
  // echo "8- ".gettype(-60.30);
  // echo '<br>';
  // echo "9- ".gettype('Elzero');
  // echo '<br>';
  // echo "10- ".gettype("Elzero");
  // echo '<br>';
  // echo "11- ".gettype(array("EG" => "Egypt", "KSA" => "Saudi Arabia"));
  // echo '<br>';
  // echo "12- ".gettype(array("Egypt", "Saudi Arabia"));
  // echo '<br>';
  // echo "13- ".gettype(["Egypt", "Saudi Arabia"]);

// ------------------------------------------------------//
// ======================================================//
// ------------------------------------------------------//

/// 007 - Type Juggling And Automatic Type Conversion

  /*
  ============================================
  = Data Types
  = ----------
  = Type Juggling + Automatic Type Conversion
  ============================================
  */

  // echo 1 + "2"; // 3
  // echo '<br>';
  // echo gettype(1 + "2"); // Integer
  // echo '<br>';
  // echo True; // 1
  // echo '<br>';
  // echo gettype(True); // Boolean
  // echo '<br>';
  // echo True + True; // 2
  // echo '<br>';
  // echo gettype(True + True); // Integer
  // echo '<br>';
  // echo 5 + '5 Lessons'; // 10 => Warning
  // echo '<br>';
  // echo gettype(5 + '5 Lessons'); // Integer => Warning
  // echo '<br>';
  // echo 10 + 15.5; // 25.5
  // echo '<br>';
  // echo gettype(10 + 15.5); // double => Float
  // echo '<br>';

// ------------------------------------------------------//
// ======================================================//
// ------------------------------------------------------//

/// 008 - Type Casting

  /*
  ============================================
  = Data Types
  = ----------
  = Type Casting
  = ----------------------
  = "boolean" or "bool"
  = "integer" or "int"
  = "float" or "double" or "real"
  = "string"
  = "array"
  = "object"
  = "null"
  = ------
  = Search For Settype
  ============================================
  */

  // echo 5 + (int) "5 Lessons";
  // echo '<br>';
  // echo 5 + (integer) "5 Lessons";
  // echo '<br>';
  // echo 5 + ( integer ) "5 Lessons";
  // echo '<br>';
  // echo gettype(5 + (int) "5 Lessons");
  // echo '<br>';
  // echo 10 + 15.5;
  // echo '<br>';
  // echo 10 + (int) 15.5;
  // echo '<br>';
  // echo gettype(10 + (int) 15.5);
  // echo '<br>';
  // echo 10.5 + 10.5;
  // echo '<br>';
  // echo gettype(10.5 + 10.5);
  // echo '<br>';
  // echo (int) 10.5 + (int) 10.5; // 20
  // echo '<br>';
  // echo gettype((int) 10.5 + (int) 10.5);
  // echo '<br>';
  // echo (int) (10.5 + 10.5); // 21

// ------------------------------------------------------//
// ======================================================//
// ------------------------------------------------------//

  /// 009 - Boolean And Converting To Boolean

  /*
  ============================================
  = Data Types
  = ----------
  = Boolean + Converting To Boolean
  ============================================
  */

  // echo "1- "; var_dump((bool) ""); // false
  // echo '<br>';
  // echo "2- "; var_dump((bool) array());
  // echo '<br>';
  // echo "3- "; var_dump((bool) []);
  // echo '<br>';
  // echo "4- "; var_dump((bool) 0);
  // echo '<br>';
  // echo "5- "; var_dump((bool) "0");
  // echo '<br>';
  // echo "6- "; var_dump((bool) "Elzero");
  // echo '<br>';
  // echo "7- "; var_dump((bool) array(1));
  // echo '<br>';
  // echo "8- "; var_dump((bool) [1]);
  // echo '<br>';
  // echo "9- "; var_dump((bool) 100);
  // echo '<br>';
  // echo "10- "; var_dump((bool) -100);
  // echo '<br>';
  // echo "11- "; var_dump((bool) 10.5);
  // echo '<br>';
  // echo "12- "; var_dump((bool) -10.5);

// ------------------------------------------------------//
// ======================================================//
// ------------------------------------------------------//

/// 010 - String And Escaping

  /*
  ============================================
  = Data Types
  = ----------
  = String And Escaping
  = -------------------
  = nl2br()
  ============================================
  */

  // echo 'Hello PHP';
  // echo '<br>';
  // echo "Hello PHP";
  // echo '<br>';
  // echo "Hello 'PHP'";
  // echo '<br>';
  // echo 'Hello "PHP"';
  // echo '<br>';
  // echo 'Hello \'PHP\'';
  // echo '<br>';
  // echo "Hello \"PHP\"";
  // echo '<br>';
  // echo "Hello PHP\\";
  // echo '<br>';
  // echo 'Hello PHP
  // On Multiple
  // Lines';
  // echo '<br>';
  // echo nl2br('Hello PHP
  // On Multiple
  // Lines');

?>