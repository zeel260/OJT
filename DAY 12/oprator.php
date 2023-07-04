<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $a=5;
    $b=5;
    $c=false;
    echo "THIS IS ARITHMATIC OPRETER <br>";
    echo "a+b = " .$a+$b."<br>";
    echo "a-b = " .$a-$b ."<br>";
    echo "a*b = " .$a*$b ."<br>";
    echo "a/b = " .$a/$b ."<br>";
    echo "a*b = " .$a*$b ."<br>";
    echo "a%b = " .$a%$b ."<br>";
   
    echo "THIS IS LOGICAL OPRETER <br>" ;
    echo "a && b ".($a&&$b)."<br>";
    echo "a || b ".($a||$b)."<br>";
    echo "a or b ".($a and $b)."<br>";
    echo "a xor b ".($a xor $b)."<br>";
    echo "a or b ".($a or $b)."<br>";
    echo "!a ".(!$c)."<br>";

    echo "THIS IS relational OPRETER <br>" ;
        if ($a == $b) {
            echo "The values are equal";
        } else {
            echo "The values are not equal";
        }

        if ($a != $b) {
            echo "The values are not equal";
        } else {
            echo "The values are equal";
        }
        if ($a > $b) {
            echo "$a is greater than $b";
        } else {
            echo "$a is not greater than $b";
        }
        if ($a < $b) {
            echo "$a is less than $b";
        } else {
            echo "$a is not less than $b";
        }
        if ($a >= $b) {
            echo "$a is greater than or equal to $b";
        } else {
            echo "$a is less than $b";
        }
        if ($a <= $b) {
            echo "$a is less than or equal to $b";
        } else {
            echo "$a is greater than $b";
        }

    ?>
</body>
</html>