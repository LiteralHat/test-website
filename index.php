<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <p>This is a <?php echo "stupid"?> paragraph.</p>
    <?php echo "This is also a paragraph!"; ?>

    <br>
    <br>

    <?php
    //scalar types.

    //this is a string.
    $thisIsAVariable = "This is a variable.";
    echo $thisIsAVariable;
    //this is an integer (whole number).
    $int = 7355608;
    echo $int;
    //this is a float.
    $float = 2.5678;
    echo $float;
    //this is a boolean.
    $bool = true;
    echo $bool;

    //array types.

    //this is how you set up an array.
    $names = ['Hat', 'Pigtails', 'Lady'];
    //this is an older method of declaring an array.
    $names2 = array('Hat', 'Pigtails', 'Lady');
    ?>

    <?php
    $name = "Charlie";
    $name2 = $name;
    ?>
    <p>Hi! My name is <?php echo $name2; ?> and I'm making a website.</p>

    <?php
    //superglobals.
    echo $_SERVER["DOCUMENT_ROOT"];
    echo "<br>";
    echo $_SERVER["PHP_SELF"];
    echo "<br>";
    echo $_SERVER["SERVER_NAME"];
    echo "<br>";
    echo $_SERVER["REQUEST_METHOD"];
    ?>

    <?php
    //get methods. Information will be visible in the URL. 
        //echo $_GET["plant"];
        //echo $_GET["color"];
    //http://localhost/TestWebsite/index.php?plant=monstera&color=green

    //request method, GET POST and cookies all in one
        //echo $_REQUEST["plant"];

    //gives metadata about a file
        // echo $_FILES["plant"];

    $_SESSION["username"] = "LiteralHat" ;
    echo $_SESSION["username"];
    ?>

</body>
</html>