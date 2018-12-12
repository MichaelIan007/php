<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>PHP Control Challenge</title>
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
            $colour = 'yellow';

            switch ($colour) {

            case 'red':
                echo 'Stop' . $br;
            break;

            case 'yellow':
                echo 'Slow down' . $br;
            break;

            case 'green':
                echo 'Go' . $br;
            break;
        
            default:
                echo 'This is a 4 way stop'.$br;
            break;

            }

            echo $br;

            ?>

            </div>
            <div class="column">
                <h1>Task 2</h1> <br>

            <?php

            $br = "<br>";
            $age = 21;

            switch ($age) {
                case ($age <= 2):
                    echo 'Free entry' . $br;
            break;

                case ($age >= 2 && $age <= 12):
                    echo 'Only R20' . $br;
            break;

                case ($age >= 13 && $age <= 17):
                    echo 'Only R30' . $br;
            break;

                case ($age >= 18 && $age <= 25):
                    echo 'Only R40' . $br;
            break;

                case ($age >= 26 && $age <= 64):
                    echo 'Only R60' . $br;
            break;

                case ($age >= 65):
                    echo 'Only R30' . $br;
            break;

            }

            echo $br;

            ?>

            </div>
            <div class="column">
                <h1>Task 3</h1> <br>

            <?php

            $br = "<br>";
            $name = 'Michael';

            switch ($name) {
                case ($name === 'Michael'):
                    echo 'Goodmorning Maestro!';
            break;
                case ($name === 'Devon'):
                    echo 'Good to see you!';
            break;
                case ($name === 'Nate'):
                    echo 'Welcome back!';
            break;
                case ($name === 'Natheer'):
                    echo 'Hos ja, lekker vibes!';
            break;
                case ($name === 'Alistair'):
                    echo 'Yoh dude, long time no see!';
            break;
        
            default:
                echo 'Unknown user';
            break;
            
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