<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Page Title</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <script src="main.js"></script>
</head>
<body>
    
    <?php

    

    $target_dir = "images/";

    foreach($_FILES as $file) {
        $target_file = $target_dir . basename($file["name"]);
        move_uploaded_file($file["tmp_name"], $target_file);
        echo "<img src=\"$target_file\">";
    }

    // $target_file = $target_dir . basename($_FILES["image"]["name"]);

    // move_uploaded_file($_FILES["image"]["tmp_name"], $target_file);

    ?>

    

</body>
</html>