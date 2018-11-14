<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>PHP form</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <script src="main.js"></script>
</head>
<body>

    <a href="/index.php">home</a>

    <p>Hello there <?php echo $_POST['name'] ?></p>

    <!-- either, either, or -->

    <?php

    // var_dump($_POST);

    ?>
</body>
</html>