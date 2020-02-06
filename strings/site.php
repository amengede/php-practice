<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Fun with Strings</title>
</head>
<body>
    <?php
        $phrase = "This string has come from a variable <br>";
        $test = "Hello!<br>";
        echo "This is a string on your screen.<br>";
        echo $phrase;
        //string functions
        echo strtolower($test);
        echo strtoupper($test);
        echo strlen($test);
        echo $test[0];
        $test[0] = "J";
        echo $test;
        echo str_replace("string","text",$phrase);
        echo substr($phrase,5,6);
    ?>
</body>
</html>