<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Php</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <script src="main.js"></script>
</head>
<body>
    
    <form action="/form.php" method="POST">

    <input type="text" name="name" placeholder="name">

    <input type="text" name="surname" placeholder="surname">

    <button type="submit">Submit!</button>
    </form>

    <p>Your full name is <?php $_POST['fullname']

</body>
</html>