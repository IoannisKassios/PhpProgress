<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <form action="index.php" method="post">
        <label>hours:</label>
        <input type="text" name="hours">
        <input type="submit" value="total">
    </form>

</body>
</html>

<?php

    $hours = $_POST["hours"];
    $rate = 15;
    $weeklyPay = null;

    if($hours <= 0){
        $weeklyPay = 0;
    }
    elseif($hours <= 40){
        $weeklyPay = $hours * $rate;
    }
    else{
        $weeklyPay = ($rate * 40) + (($hours - 40) * ($rate * 1.5));
    }

    echo "You made \${$weeklyPay} this week!!";

?>
