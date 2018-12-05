<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Lesson 2</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <script src="main.js"></script>
</head>
<body>
    
<?php

// Shows the characters from starting point 'i' to 'i':

// $example = 'where in the world is carmen sandiego';

// echo substr($example, strpos($example, 'i'), strpos($example, 'd')-strpos($example,'i')+1);

// ----------------------------------------------------------------------------------------------

// Starting from position 5 and ending 2 positions from the end:

// $example = 'where in the world is carmen sandiego';

// echo substr($example, 5, -2);

// ----------------------------------------------------------------------------------------------

// 5 characters from the end of the string plus 2 characters:

// $example = 'where in the world is carmen sandiego';

// echo substr($example, -5, 2);

// ----------------------------------------------------------------------------------------------

// Replaces said string with another string, eg."where" with "who":

// $example = 'where in the world is carmen sandiego';

// echo str_replace('where', 'who', $example);

// ----------------------------------------------------------------------------------------------

// *** Index Arrays*** //

// ----------------------------------------------------------------------------------------------

// $example_array = array('Toyota', 'BMW', 'Ferrari', 'Hot Wheels');

// foreach ($example_array as $car) {
//     echo "<p>$car</p>" . '</br>';
// }

// echo $example_array[0];

// // Different ways to display line information:
// var_dump($example_array);
// print_r($example_array);

// ----------------------------------------------------------------------------------------------

// $example_array = array('Toyota', 'BMW', 'Ferrari', 'Hot Wheels');

// $example_array[5] = 'lamborghini';

// echo $example_array[5];

// ----------------------------------------------------------------------------------------------

// *** Associative Arrays*** //

// ----------------------------------------------------------------------------------------------

// $Michael = array('age' => '21', 'hair' => 'Crispy', 'Height' => 'Super-tall');

// echo $Michael['age'];
// echo $Michael['hair'];
// echo $Michael['Height'];

// ----------------------------------------------------------------------------------------------

// $Michael['height'] = 'Super-tall';

// echo $Michael['height'];
// *********************************
// $Michael['height'] = 'tall';

// echo $Michael['height'];

// ----------------------------------------------------------------------------------------------

// *** Multi-dimensional Arrays*** //

// ----------------------------------------------------------------------------------------------

// $example_array = 
// array(
//     array
//         (2,3,4,5), 
//     array
//         ('Jaguar', 'Opel', 'Fiat')
// );

// echo $example_array[1][0];

// ----------------------------------------------------------------------------------------------

// *** Multi-dimensional / Associative *** Arrays*** //

// ----------------------------------------------------------------------------------------------

// Example 1 //

// echo $example_array['car'][0];

// var_dump($example_array)

// Example 2 //

// $example_array = 
// array(
//     'numbers' => array
//         (2,3,4,5), 
//     'cars' => array
//         ('Jaguar', 'Opel', 'Fiat')
// );

// echo $example_array['cars'][0];

// $example_array['people'] = array('Reagan', 'Nickolas', 'Michael');

// var_dump($example_array);

// ----------------------------------------------------------------------------------------------

// *** Sort function*** //

// ----------------------------------------------------------------------------------------------

// $example_array = array ('Michael', 'John', 'Lennox');

// sort($example_array);

// var_dump($example_array);

// ----------------------------------------------------------------------------------------------
?>

</body>
</html>