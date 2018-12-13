<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Loop Challenge</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="/css/main.css" />
    
</head>
<body>
    <header>
        <h1>PHP Control Challenge</h1>
        <hr>
    </header>
    <main>
        <section class="container">
            <div class="column">
                <h1>Task 1</h1> <br>
            <?php

            $br = "<br>";

            $i = 1;
            
            for (; ; ) {

            if ($i > 10) {

            break;
            }
            
            echo $i . "bean" . $br;
            
            $i++;
            }

            ?>

            </div>
            <div class="column">
                <h1>Task 2</h1> <br>
            
            <?php

            $x = 10;
            $br = "<br>";


            $name = array('Michael', 'Natheer', 'Josh', 'Devon', 'Nate');
            $hairColor = array('Black', 'Brown', 'Blonde', 'Blue', 'Lightbrown');
            $age = array('21', '24', '20', '26', '32');
            $height = array('182', '178', '165', '168', '180');

            $class = array();

            for ($i = 0; $i <= 4; $i++) {
                $class[$i] = array($br . $name[$i], $hairColor[$i], $age[$i], $height[$i])  ;
            }

            for ($x = 0; $x <= 4; $x++) {

                echo $class[$x][0] . ' ';

                echo $class[$x][1] . ' ';

                echo $class[$x][2] . ' years old ';

                echo $class[$x][3] . ' cm';
            }

            ?>

            </div>
        
        </section>

    </main>
    <script>
    $( function() {
        var $winHeight = $( window ).height()
    $( '.container' ).height( $winHeight );
    });
    </script>   

</body>
</html>