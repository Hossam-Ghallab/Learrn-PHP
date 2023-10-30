<?php

///   1   ///

// echo (int)15.2 + (int)14.7 + (int)(10.5 + 10.5); // 50
// echo "<br>"; 
// echo gettype((int)15.2 + (int)14.7 + (int)(10.5 + 10.5)); // Integer

// ================================= //
// --------------------------------- //
// ================================= //

///   2   ///

// 100

// // Method One
// echo "<br>";
// echo gettype(100);
// // Method Two
// echo "<br>";
// echo var_dump(100);
// // Method Three => Optional
// echo "<br>";
// echo get_debug_type(100);

// ================================= //
// --------------------------------- //
// ================================= //

///   3   ///

// echo "Hello \"Elzero\" \\\ \"\"\" We Love \"\$\$PHP\"";

// Needed Output
// Hello "Elzero" \\ """ We Love "$$PHP"

// ================================= //
// --------------------------------- //
// ================================= //

///   4   ///

// echo nl2br("We \n Love \n Elzero \n Web \n School");

// Needed Output
// We
// Love
// Elzero
// Web
// School

// ================================= //
// --------------------------------- //
// ================================= //

///   5   ///

// echo nl2br(<<<'Herecode'
// Hello "'Elzero'"
// We Love $Programming$
// Languages Specially "PHP"
// Herecode);

// Needed Output
// Hello "'Elzero'"
// We Love $Programming$
// Languages Specially "PHP"

// ================================= //
// --------------------------------- //
// ================================= //

///   6   ///

// $something = "Programming";

// echo <<<"code"
// Hello \PHP\
// We Love $something
// code;

// [1] Fix The Error
// [2] Remove 2 Characters To Get The Output

// Needed Output
// Hello \PHP\ We Love Programming

// ================================= //
// --------------------------------- //
// ================================= //

///   7   ///

// echo (bool)"Hello PHP";
// echo '<br>';
// echo gettype((int)"Hello PHP");

// Needed Output
// 1
// integer

// ================================= //
// --------------------------------- //
// ================================= //

///   8   ///

// echo "<pre>";
// print_r ([
//   "FrontEnd" => [
//     "html",
//     "css",
//     "js" => [
//       "Vuejs" =>[
//         2 => "v2",
//         "v3"
//       ],
//       "react",
//       "svelte"
//     ],
//   ],
//   "BacKEnd" => [
//     "php",
//     "MySQL",
//     "Security"
//   ],
//   "git",
//   "github",
//   "testing" => [
//     "Unit Testing",
//     "End To End",
//     "Integration"
//   ]
// ]);
// echo "</pre>";

// output
// Array
// (
//   [FrontEnd] => Array
//     (
//       [0] => HTML
//       [1] => CSS
//       [JS] => Array
//         (
//           [Vuejs] => Array
//             (
//               [2] => v2
//               [3] => v3
//             )

//           [0] => Reactjs
//           [1] => Svelte
//         )
//     )

//   [BackEnd] => Array
//     (
//       [0] => PHP
//       [1] => MySQL
//       [2] => Security
//     )

//   [0] => Git
//   [1] => Github
//   [Testing] => Array
//     (
//       [0] => Unit Testing
//       [1] => End To End
//       [2] => Integration
//     )
// )

// ================================= //
// --------------------------------- //
// ================================= //