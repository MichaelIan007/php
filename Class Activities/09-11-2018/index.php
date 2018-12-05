<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>array functions</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <script src="main.js"></script>
</head>
<body>
    
<?php

// $example_array =array ('Michael', 'Gbobisa', 'Tyrone');

// // ****Implode makes a list**** //
// $array_to_string = implode(' ', $example_array);

// $back_to_the_arrays = explode(' ', $array_to_string);

// var_dump($back_to_the_arrays);

// *************************************************************************************

// $example_array =array ('Michael', 'Gbobisa', 'Tyrone', 'Jesse');

// $example_array[7] = 'hello';
// $example_array[5] = 'hello';

// echo count($example_array);

// var_dump($example_array);

// *************************************************************************************

//*** Returns last array from the list, eg.Jesse ***//

// $example_array =array ('Michael', 'Gbobisa', 'Tyrone', 'Jesse');

// echo end($example_array);

// *************************************************************************************

// Reverse sorts item list (array)//

// $example_array =array ('Michael', 'Gbobisa', 'Tyrone', 'Jesse', 'a', 'b', 1, 2, 3);

// rsort($example_array);

// var_dump($example_array);

// *************************************************************************************

// $example_array =array ('Michael', 'Gbobisa', 'Tyrone', 'Jesse');

// echo end($example_array);

// echo $example_array[key($example_array)];

// *************************************************************************************

// $example_array =array ('Michael', 'Gcobisa', 'Tyrone', 'Jesse');

// echo array_search('Gcobisa', $example_array);

// echo key($example_array);

// *************************************************************************************

// *** Adding an array to a list of set arrays already *** //
// $example_array =array ('Michael', 'Gcobisa', 'Tyrone', 'Jesse');

// array_push($example_array, 'Natheer');

// echo end($example_array);

// echo key($example_array);

// *************************************************************************************

// $example_array =array ('Michael', 'Gcobisa', 'Tyrone', 'Jesse');

// **adds an item to the beginning of an array** //
// array_unshift($example_array, 'Evan');
// **Removes item from beginning of an array** //
// array_shift($example_array);
// Removes //
// array_pop($example_array);
// adds //
// array_push($example_array);

// echo $example_array[0];

// var_dump($example_array)

// *************************************************************************************

// $example_array =array ('Michael', 'Gcobisa', 'Tyrone', 'Jesse', 'Reagan', 'Ghost', 'Taufeeqr');

// var_dump($example_array);
// var_dump(array_slice($example_array, 1));

// *************************************************************************************

// ***Slice an Array*** //
// c

// var_dump(array_slice($example_array, 1, -2, true));

// var_dump($example_array);

// *************************************************************************************

// $emporer_of_the_class = "Nicholas";

// $example_array =array ('Michael', 'Gcobisa', 'Tyrone', 'Jesse', 'Marquin', 'Marlon', 'Henry',  'Reagan', 'Ghost', 'Taufeeqr');

// $replace = array('Nate', 'Devon', 'Emma', 'Garth', 'Candice');

// $chunk = array_splice($example_array, 2, -1, $replace);

// var_dump($chunk);

// var_dump($example_array);

// *************************************************************************************

// $num1 = 'Nicolas ';

// $num2 = 'is gay';

// $num1 .= $num2;

// echo $num1;

// *************************************************************************************

//   ==  Equal to
//   === Identical to
// Are they the same data type and value

// *************************************************************************************

$i = 2;

$age = 26  ;

$logged_in = true;

if (($i > 3 && $age>23) && $logged_in == true) {
    echo 'yay';
}else {
    echo 'nay';
}

?>

</body>
</html>