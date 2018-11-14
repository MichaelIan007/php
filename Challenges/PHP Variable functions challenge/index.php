<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Variable functions</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <script src="main.js"></script>
</head>
<body>

    <?php

$break = '</br>';

$name = "Bob";

echo $name;

$age = 35;

$job = "plumber";

$carMake = " Toyota";

$carColour = "red";

$car = $carColour . $carMake ;

echo $car;

$happy = true;

$time = "9";

$retirementAge = 65;

$retirement = $retirementAge - $age;
echo $retirement;

$sentence = $break . $name ." is a ". $job ."."." He drives a ".$car." and works ".$time ." hours a day. He is ".$age." years old and is ".$retirement." years from retirement. He is happy with his life.";
?>
<?php
echo $sentence;
?>
</body>
</html>