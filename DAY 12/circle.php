<!DOCTYPE html>
<html>
    <body>
        <?php
        $diameter = 4.0;
        $pi = 3.14;
        $title="Circle";
        
        echo "<html> <head> <title> $title </title> </head> <body>";
        
        function circleArea($diameter, $pi) 
        {
            $area = $diameter * $pi; 
            return $area; 
        } 
        
        echo circleArea ($diameter,$pi); 
         ?>
        </body> 
        </html>