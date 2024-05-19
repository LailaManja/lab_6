<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Lab 6 Q3</title>
    </head>
    <body>
        <?php
        //function to calculate area of rectangle
        function calculateArea($width, $height)
        {
            return $width * $height;
        }

        //call the function
        $width = 4;
        $height = 2;
        $area = calculateArea($width, $height);

        //display result
        echo "<b>The area of a rectangle with a width of $width and $height is $area</b>";
        ?>

    </body>
</html>