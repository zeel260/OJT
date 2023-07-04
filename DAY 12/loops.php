<DOCTYPE html>
    <body>
        <?php
        $radius = 5;
$length = 10;
$width = 5;
$pi = 3.14159;
$circleArea = $pi * ($radius ** 2);
$rectangleArea = $length * $width;

echo "The area of the circle is: " . $circleArea . "<br>";
echo "The area of the rectangle is: " . $rectangleArea . "<br>";

// If-else statement
if ($circleArea > $rectangleArea) {
    echo "The circle has a larger area than the rectangle.";
} else if ($circleArea < $rectangleArea) {
    echo "The rectangle has a larger area than the circle.";
} else {
    echo "The circle and rectangle have the same area.";
}

echo "<br><br>";

// While loop
$i = 1;
while ($i <= 5) {
    echo "Current number in while loop: " . $i . "<br>";
    $i++;
}

echo "<br>";

// Foreach loop
$numbers = [1, 2, 3, 4, 5];
foreach ($numbers as $number) {
    echo "Current number in foreach loop: " . $number . "<br>";
}

echo "<br>";

// Do-while loop
$j = 1;
do {
    echo "Current number in do-while loop: " . $j . "<br>";
    $j++;
} while ($j <= 5)
?>
    </body>
    </html>
