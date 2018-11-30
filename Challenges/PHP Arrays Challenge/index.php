<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Array challenge</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="css/main.css" />
    <script src="main.js"></script>
</head>
<body>
    <header>
        <h1>Array Challenge</h1>
        <hr>
    </header>
    <main>
        <section class="container">
                <div class="column">
                    <h1>Task 1</h1> <br>
                    <?php

                        $break = "<br>";

                        $fruits = array('cucumber', 'gherkin', 'tomato', 'lettuce', 'pumpkin');"<br>";

                        $chunk = reset($fruits);

                        echo $chunk;

                        echo "<br>";

                        echo end($fruits);

                        echo "<br>";
                        echo "<br>";
                        echo "<br>";

                        array_shift($fruits);

                        array_push($fruits, 'carrot');

                        echo reset($fruits);

                        echo "<br>";

                        echo end($fruits);

                        echo "<br>";
                        echo "<br>";
                        echo "<br>";

                        $replace = array('potato', 'tomato', 'union');

                        array_splice($fruits, 2,-2,$replace);

                        var_dump($fruits);
                        
                        sort($fruits);

                        var_dump($fruits);

                        $imploded = implode(', ', $fruits);

                        echo $imploded.$break."<hr>";
                        
                    ?>
                </div>
                <div class="column">
                    <h1>Task 2</h1> <br>
                    <?php

                    $Michael = array('height' => 180, 'age' => '21', 'shoe size' => '12');
                    ?>
                    
                    <p><u>Height:</u></p><?php echo $Michael['height']." cm".$break;?><hr>   
                    <p><u>Age:</u></p><?php echo $Michael['age']." years".$break;?><hr>
                    <p><u>Shoe size:</u></p><?php echo $Michael['shoe size']." UK";?><hr>

                    <?php
                    $Michael['height'] += 10;
                    ?>
                    <p><u>New Height:</u></p><?php echo $Michael['height']." cm".$break;?>
                    
                    <?php
                    $Michael['age'] -= 2;
                    ?>
                    <p><u>New age:</u></p><?php echo $Michael['age']." years".$break;?>
                </div>
                <div class="column">
                    <h1>Task 3</h1> <br>
                    <?php
                    $John = array('height' => 154, 'age' => '18', 'shoe size' => '10');
                    $Damian = array('height' => 172, 'age' => '19', 'shoe size' => '11');
                    $class = $Michael['height'] . " cm. " . $John['age'] . " years. " . $Damian['shoe size'] . " UK. ";
                    echo $class;
                    echo "<br>";
                    $Felix = array('height' => 123, 'age' => '16', 'shoe size' => '8');
                    $class = $Felix['height'] . "cm " . $Felix['age'] . "years " . $Felix['shoe size'] . "UK " . $Michael['height'] . " cm. " . $John['age'] . " years. " . $Damian['shoe size'] . " UK. ";
                    echo $class;
                    ?>



                </div>
        </section>
    </main>
</body>
</html>