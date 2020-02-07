<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Getting input from users</title>
</head>
<body>

    <form action="site.php" method="get">
        Name: <input type="text" name="username">
        <input type="submit">
    </form>
    <br>
    Your name is <?php echo $_GET["username"] ?>
</body>
</html>