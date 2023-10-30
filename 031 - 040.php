<?php

/// 031 - If, Elseif, Else Real Life Examples

  /*
    Control Structure
    - If, Elseif, Else <= Real Life Examples

    3% To 30%
  */

  // // If
  // $page = "About";
  // if ($page == "About") {
  //   echo "This Is The Page";
  // }

  // echo '<br>';

  // // If, Else
  // $title = "";

  // if ($title == "") {
  //   echo "Unknown Page";
  // } else {
  //   echo $title;
  // }

  // echo '<br>';

  // // If, Elseif, Else
  // $lang = "Elzero";
  // if ($lang == "Arabic") {
  //   echo 'مرحبا';
  // } elseif ($lang == "English") {
  //   echo 'Hello';
  // } elseif ($lang == "Spanish") {
  //   echo 'Hola';
  // } else {
  //   echo 'Unknown Language';
  // }

// ------------------------------------------------------//
// ======================================================//
// ------------------------------------------------------//

/// 032 - If, Elseif, Else Advanced Practice

  /*
    Control Structure
    - If, Elseif, Else <= Advanced Practice

    30% To 60%
  */
  
  // echo "<pre>";
  // print_r ($_SERVER);
  // echo "</pre>";
  // echo $_POST['lang'];

  // if ($_SERVER["REQUEST_METHOD"] === "POST") {
  //   if ($_POST['lang'] == 'ar') {
  //     header("Location: files/ar.php");
  //     exit();
  //   } elseif ($_POST['lang'] == 'en') {
  //     header("Location: files/en.php");
  //     exit();
  //   }
  // }
?>

<!-- <!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Support</title>
  </head>
  <body>
    <form action="" method="POST">
      <input type="text" name="username">
      <select name="lang">
        <option value="ar">Arabic</option>
        <option value="en">English</option>
        <option value="es">Spanish</option>
      </select>
      <input type="submit" value="Go">
    </form>
  </body>
</html> -->
<?php

// ------------------------------------------------------//
// ======================================================//
// ------------------------------------------------------//

/// 033 - If, Elseif, Else Alternate Syntax

  /*
    Control Structure
    - If, Elseif, Else <= Alternate Syntax

    60% To 80%
  */

  // if (10 > 5) {
  //   echo "Good";
  // } else {
  //   echo "Bad";
  // }

  // echo "<br>";

  // if (10 > 10) echo "Good";
  // else echo "Bad";
  // echo "<br>";
  // if (10 > 10)
  //   echo "Good";
  // else
  //   echo "Bad";
  // echo "<br>";
  // if (10 > 10) echo "Good"; else echo "Bad";
  // echo "<br>";

?>

<?php // if (10 > 5) : ?>

<!-- <!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
  </head>
  <body>
    Hello Page
  </body>
</html> -->

<?php // endif; ?>

<?php
  // echo "<br>";
  // if (10 > 10) :
  //   echo "First";
  // elseif (10 > 10) :
  //   echo "Second";
  // else :
  //   echo "Last";
  // endif;


// ------------------------------------------------------//
// ======================================================//
// ------------------------------------------------------//

/// 034 - Nested If And Advanced Practices

  /*
    Control Structure
    - Nested If Condition And Training
  */

  // $name = "Osama";
  // $is_student = true;
  // $is_orphan = true;
  // $country = "Egypt";
  // $price = 100;
  // $country_discount = 50;
  // $student_discount = 10;
  // $orphan_discount = 15;

  // if ($country == "Egypt") {

  //   if ($is_student == true) {

  //     if ($is_orphan == true) {

  //       echo "Hello $name";
  //       echo "<br>";
  //       echo "Country Discount $country_discount";
  //       echo "<br>";
  //       echo "Student Discount $student_discount";
  //       echo "<br>";
  //       echo "Orphan Discount $orphan_discount";
  //       echo "<br>";
  //       echo "The Final Price Is " . $price - $country_discount - $student_discount - $orphan_discount;

  //     } else {

  //       echo "Hello $name";
  //       echo "<br>";
  //       echo "Country Discount $country_discount";
  //       echo "<br>";
  //       echo "Student Discount $student_discount";
  //       echo "<br>";
  //       echo "The Final Price Is " . $price - $country_discount - $student_discount;

  //     }

  //   } else {

  //     echo "Hello $name";
  //     echo "<br>";
  //     echo "Country Discount $country_discount";
  //     echo "<br>";
  //     echo "The Final Price Is " . $price - $country_discount;

  //   }

  // } else {

  //   echo "Hello $name";
  //   echo "<br>";
  //   echo "No Discount";
  //   echo "<br>";
  //   echo "The Final Price Is $price";

  // }

// ------------------------------------------------------//
// ======================================================//
// ------------------------------------------------------//

/// 035 - Ternary Conditional Operator – Short If

  /*
    Control Structure
    - Ternary Operator => Short If
  */

  // $a = 10;
  // if ($a > 8) {
  //   echo "Good";
  // } else {
  //   echo "Bad";
  // }
  // echo '<br>';

  // // Condition ? True : False;
  // echo $a > 8 ? "Good" : "Bad";
  // echo '<br>';

  // echo "I Love PHP Because Its A ";
  // if ($a > 8) {
  //   echo "Good";
  // } else {
  //   echo "Bad";
  // }
  // echo " Language";

  // echo '<br>';
  // echo "I Love PHP Because Its A " . ($a > 8 ? "Good" : "Bad") . " Language";
  // echo '<br>';

  // $result = $a > 8 ? "Good" : "Bad";
  // echo "I Love PHP Because Its A $result Language";

// ------------------------------------------------------//
// ======================================================//
// ------------------------------------------------------//

/// 036 - Switch

  /*
    Control Structure
    - Switch

    Syntax
    switch (expression) {
      Case 1:
        // Code Block 1
        break;
      Case 2:
        // Code Block 2
        break;
      Case 3:
        // Code Block 3
        break;
      Default:
        // Default Code Block
    }

  */

  // $day = "Thu";

  // switch($day) {

  //   case "Sat":
  //     echo "Hello Today Is $day We Are Open From 10:16";
  //     break;

  //   case "Sun":
  //     echo "Hello Today Is $day We Are Open From 12:18";
  //     break;

  //   case "Mon":
  //   case "Thu":
  //     echo "Hello Today Is $day We Are Open From 08:12";
  //     break;

  //   default:
  //     echo "Unknown Day";

  // }

// ------------------------------------------------------//
// ======================================================//
// ------------------------------------------------------//

/// 037 - While Loop And The Concept Of Loop

  /*
    Control Structure
    - Loop

    While
  */

  // echo "1<br>";
  // echo "2<br>";
  // echo "3<br>";
  // echo "4<br>";
  // echo "5<br>";

  // echo "1<br>2<br>3<br>4<br>5<br>";

  // $i = 1;
  // while ($i <= 3) {
  //   echo "$i<br>";
  //   $i++;
  // }

  // $a = 1;
  // while ($a <= 3) :
  //   echo "$a<br>";
  //   $a++;
  // endwhile;

// ------------------------------------------------------//
// ======================================================//
// ------------------------------------------------------//

/// 038 - Do While

  /*
    Control Structure
    - Loop

    Do, While
  */

  //* Not Print 4
  // $i = 4;
  // while ($i <= 3) {
  //   echo "$i<br>";
  //   $i++;
  // }
  
  //* Print 4
  // do {
  //   echo "$i<br>";
  //   $i++;
  // } while ($i <= 3);

  // $index = 0;
  // while ($index <= 100) {
  //   echo "$index<br>";
  //   $index += 5;
  // }

// ------------------------------------------------------//
// ======================================================//
// ------------------------------------------------------//

/// 039 - Loop – For

  /*
    Control Structure
    - Loop

    For
    - Expression One Run Once At The First Of The Loop
    - In The Begining Of Iteration Expression Two Is Checked [If True Continue || Break]
    - At The End Of Iteration Expression Three Are Executed
  */

  // $i = 1;
  // while ($i <= 3) {
  //   echo "$i<br>";
  //   $i++;
  // }

  // echo '##### <br>';

  // for ($i = 1; $i <= 3; $i++) {
  //   echo "$i<br>";
  // }

  // echo '##### <br>';

  // $index = 1;
  // for (;;) :
  //   if ($index == 4) {
  //     break;
  //   }
  //   echo "$index<br>";
  //   $index++;
  // endfor;

// ------------------------------------------------------//
// ======================================================//
// ------------------------------------------------------//

/// 040 - Loop – Foreach

  /*
    Control Structure
    - Loop

    Foreach
  */

  // $countries = ["EG", "SA", "QA", "SY"];

  // echo '<pre>';
  // print_r($countries);
  // echo '</pre>';

  // //* Syntax
  // // foreach ($array as $vlaue) {
  // //   echo $value . "<br>";
  // // }
  // foreach ($countries as $country) {
  //   echo $country . "<br>";
  // }

  // $countries_with_discount = ["EG" => 50, "SA" => 30, "QA" => 50, "SY" => 70];

  // echo '<pre>';
  // print_r($countries_with_discount);
  // echo '</pre>';

  // //* Syntax
  // // foreach ($array as $key => $value) :
  // //   echo "Country Name Is $country And Discount Is $discount <br>";
  // // endforeach;
  // foreach ($countries_with_discount as $country => $discount) :
  //   echo "Country Name Is $country And Discount Is $discount <br>";
  // endforeach;

// ------------------------------------------------------//
// ======================================================//
// ------------------------------------------------------//
