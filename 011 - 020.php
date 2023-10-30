<?php

/// 011 - Heredoc And Nowdoc

  /*
  ============================================
  = Data Types
  = ----------
  = String And Escaping
  = -------------------
  = Heredoc
  = Nowdoc
  ============================================
  */

  // $name = "Osama";

  // // Heredoc
  // echo <<<"Here"
  // Hello PHP
  // Special Characters $$$ ' ' ' """"" \\\\
  // Hello My Name Is $name
  // Here;

  // echo '<br>';

  // // Nowdoc
  // echo <<<'Now'
  // Hello PHP
  // Special Characters $$$ ' ' ' """"" \\\\
  // Hello My Name Is $name
  // Now;

  // echo '<br>';

  // echo '<ul>';
  //   echo "<li>" . $name . "</li>";
  //   echo "<li>" . $name . "</li>";
  //   echo "<li>" . $name . "</li>";
  //   echo "<li>" . $name . "</li>";
  // echo '</ul>';

  // echo '<br>';

  // echo <<<"navlinks"
  // <ul>
  //   <li>$name</li>
  //   <li>$name</li>
  //   <li>$name</li>
  //   <li>$name</li>
  // </ul>
  // navlinks;

// ------------------------------------------------------//
// ======================================================//
// ------------------------------------------------------//

/// 012 - Array With Complex Tests

  /*
  ============================================
  = Data Types
  = ----------
  = Array
  = -------------------
  = Array With Key
  = Array Without Keys
  = Array With One Key
  = Array Value Override
  = ------------------
  = print_r()
  ============================================
  */

  // echo '<pre>';
  // print_r([
  //   0 => "Sameh",
  //   "A" => "Ahmed",
  //   "B" => "Basem",
  //   "Mahmoud",
  //   True => "Sayed",
  //   "1" => "Osama",
  //   "Gamal",
  //   9 => "Amera",
  //   "Eman",
  //   "Mohamed",
  //   False => "Asmaa",
  //   8 => "Haytham",
  //   "Samer",
  //   "Names" => [
  //     "Osama",
  //     "Ahmed",
  //     "Sayed" => [
  //       "1",
  //       "2",
  //       "3"
  //     ]
  //   ]
  // ]);
  // echo '</pre>';

// ------------------------------------------------------//
// ======================================================//
// ------------------------------------------------------//

/// 013 - Introduction To Variables And Naming Rules

  /*
    Variables
    - Naming Rules + Info
    [1] Start With Dollar Sign $
    [2] Start With A Letter [a-z] Or [A-Z] Or Underscore
    [3] You Can Use Numbers Inside The Name
    [4] No Special Characters Allowed
    [5] Case Sensitive
    - Test Single And Double Quotes

    * Search
    - Loosely Typed Language => can you use var but it doesn't require you to classify the type of
  */

  // $username = "Osama";
  // $Username = "Elzero";

  // echo $username;
  // echo '<br>';
  // echo $Username;
  // echo '<br>';
  // echo 'Hello $username';
  // echo '<br>';
  // echo "Hello $username";
  

// ------------------------------------------------------//
// ======================================================//
// ------------------------------------------------------//

/// 014 - Testing Variable In Real Life

?>
<!-- <?php // $username = "Elzero" ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Page | <?php // echo $username ?></title>
  </head>
  <body>
    <div>Welcome <?php // echo $username ?></div>
    <div><?php // echo $username ?> You Scored 1000 Points</div>
    <div>
      <?php // include('files/score.php') ?>
    </div>
  </body>
</html> -->
<?php

// ------------------------------------------------------//
// ======================================================//
// ------------------------------------------------------//

// ------------------------------------------------------//
// ======================================================//
// ------------------------------------------------------//

/// 015 - Variable Variable

  /*
    Variable Variable
    Takes The Value Of A Variable And Treats That As The Name Of A Variable
  */

  // $a = "osama";
  // $$a = "elzero"; //*  === $osama = "elzero"
  // $$$a = "school"; //*  === $elzero = "school"

  // echo $a;
  // echo "<br>";
  // echo $$a;
  // echo "<br>";
  // echo $osama;
  // echo "<br>";
  // echo $$$a;
  // echo "<br>";
  // echo $elzero;
  // echo "<br>";

  // echo "Hello ${$a}"; //* $$a
  // echo "<br>";
  // echo "Hello ${$$a}"; //* $$$a

// ------------------------------------------------------//
// ======================================================//
// ------------------------------------------------------//

/// 016 - Assign By Value And By Reference

  /*
    Assign Variable By Reference
    - By Default, Variables Are Always Assigned By Value
    - Assigned By Reference Make Variable Alias Or Point To Another

    * Search
    - References Are Not Pointers
  */

  // $a = "Osama";
  // $b = &$a;
  // $b = "Elzero";
  // $a = "School";

  // echo $a; // School
  // echo '<br>';
  // echo $b; // School

// ------------------------------------------------------//
// ======================================================//
// ------------------------------------------------------//

/// 017 - Predefined Variables And Test

  /*
    Pre-Defined Variables => var built in

    * Search
    - PHP Pre-Defined Variables
  */

  // echo '<pre>';
  // print_r($_SERVER);
  // echo $_SERVER["HTTP_CONNECTION"];
  // echo '</pre>';

  // echo $_GET["username"];

?>

<!-- <form action="" method="get">
  <input type="text" name="username">
  <input type="submit" value="Send">
</form> -->
<?php

// ------------------------------------------------------//
// ======================================================//
// ------------------------------------------------------//

/// 018 - Introduction To Constants

  /*
    Constants
    - That Value Cannot Change During The Execution
    - Constants Always Uppercase

    Syntax
    - define( "name" , value , bool => case_insensitive )
  */

  // define("DB_NAME", "elzero");
  // define("MAIN_NUMBER", 5);

  // echo DB_NAME;
  // echo "<br>";
  // echo MAIN_NUMBER * 50;

// ------------------------------------------------------//
// ======================================================//
// ------------------------------------------------------//

/// 019 - Predefined And Magic Constants

  /*
    Pre-Defined Constants [Case Sensitive]
    - PHP_VERSION
    - PHP_OS_FAMILY
    - PHP_INT_MAX
    - DEFAULT_INCLUDE_PATH

    Magic Constants [Case Insensitive]
    - __LINE__
    - __FILE__
    - __DIR__

    Reserved Keywords
    - break
    - clone

    * Search
    - PHP Predefined Constants
    - Compile Time vs Runtime
    - List of Reserved Words
  */

  // define("BREAKS", "AA");

  // echo php_uname();
  // echo '<br>';
  // echo PHP_VERSION;
  // echo '<br>';
  // echo __LINE__;
  // echo '<br>';
  // echo __FILE__;
  // echo '<br>';
  // echo __dir__;
  // echo '<br>';
  // echo BREAKS;

  // // No Problem Here
  // function hello() {
  //   return "Hello";
  // }

  // echo hello();

  //* Syntax Error => Reserved Word
  // function clone() {
  //   return "Clone";
  // }

  // echo clone();

// ------------------------------------------------------//
// ======================================================//
// ------------------------------------------------------//

/// 020 - Arithmetic Operators

  /*
    Operators
    - Used To Perform Operations On Values.

    Arithmetic Operators
    - Used To Do Arithmetical Operations & Conversion

    - $a [+]  $b => Addition
    - $a [-]  $b => Subtraction
    - $a [*]  $b => Multiplication
    - $a [/]  $b => Division
    - $a [%]  $b => Modulus
    - $a [**] $b => Exponentiation
    - +$a        => Identity
    - -$a        => Negation
  */

  // echo 10 + 20;
  // echo '<br>';
  // echo gettype(10 + 20);
  // echo '<br>';
  // echo 9.5 + 20.5;
  // echo '<br>';
  // echo gettype(9.5 + 20.5);
  // echo '<br>';

  // echo 10 - 20;
  // echo '<br>';
  // echo gettype(10 - 20);
  // echo '<br>';
  // echo 9.5 - 20.5;
  // echo '<br>';
  // echo gettype(9.5 - 20.5);
  // echo '<br>';

  // echo 10 * 20;
  // echo '<br>';
  // echo gettype(10 * 20);
  // echo '<br>';
  // echo 9.5 * 20.5;
  // echo '<br>';
  // echo gettype(9.5 * 20.5);
  // echo '<br>';

  // echo 20 / 10;
  // echo '<br>';
  // echo gettype(20 / 10);
  // echo '<br>';
  // echo 20 / 8;
  // echo '<br>';
  // echo gettype(20 / 8);
  // echo '<br>';

  // echo 21 % 10; // Remove 1 To Become 20
  // echo '<br>';
  // echo 23 % 10; // Remove 3 To Become 20
  // echo '<br>';
  // echo 29 % 10; // Remove 9 To Become 20
  // echo '<br>';
  // echo 30 % 10;
  // echo '<br>';

  // echo 2 ** 4;
  // echo '<br>';
  // echo 2 * 2 * 2 * 2;
  // echo '<br>';
  // echo 3 ** 5;
  // echo '<br>';
  // echo 3 * 3 * 3 * 3 * 3;
  // echo '<br>';

  // echo "100";
  // echo '<br>';
  // echo gettype("100");
  // echo '<br>';
  // echo +"100";
  // echo '<br>';
  // echo gettype(+"100");
  // echo '<br>';

  // echo "-100";
  // echo '<br>';
  // echo gettype("-100");
  // echo '<br>';
  // echo -"-100";
  // echo '<br>';
  // echo gettype(-"-100");

// ------------------------------------------------------//
// ======================================================//
// ------------------------------------------------------//
