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

$example_array =array ('Michael', 'Gbobisa', 'Tyrone', 'Jesse');

echo end($example_array);





?>

</body>
</html>