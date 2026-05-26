<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="index2.php" method="post">
        <label>Enter a country</label>
        <input type="text" name="country">
        <input type="submit">
    </form>
</body>
</html>

<?php
    //associate array = An array made of key => value pairs!

    $capitals = array("USA"=>"Washington D.C",
                    "Japan"=>"Tokyo", 
                    "South Korea"=>"Seoul", 
                    "India"=>"New Delhi");

    $capital = @$capitals[$_POST["country"]];

    //If statement in case the user types a wrong input!

    if(array_key_exists($_POST["country"], $capitals)){
        echo "The capital is: " . $capital;
    }
    else{
        echo "Invalid! Try again!";
    }

?>