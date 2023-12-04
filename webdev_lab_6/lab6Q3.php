<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lab 6 Q3</title>
    <style>
    .row{
        display: flex;
        justify-content: space-evenly;
        width: 20%;
    }
    </style>
</head>
<body>
    <h1>Calculate Area of the Rectangle</h1>
    <form action="" method="post">
        <div class="row">
            Length:
            <input type="number" name="length" min="0" step="0.01" required>
        </div>
        <br>
        <div class="row">
            Width:
            <input type="number" name="width" min="0" step="0.01"   required>
        </div>
        <br>
        <input type="submit" name="Calculate Area" value="submit">
    </form>

    <?php 
    if($_SERVER["REQUEST_METHOD"] == "POST") {
         // Retrieve user input
         $length = $_POST["length"];
         $width = $_POST["width"];
 
         // Validate input (you may want to add more validation)
         if (is_numeric($length) && is_numeric($width)) {
             // Call the calculateArea function
             $area = calArea($length, $width);
             echo "<p>The area of a triangle with a width and height of $width and $length is $area<p>";         
        }else{
                echo "<p>Please enter valid numeric values for length and width.</p>";
        }
    }

    function calArea($width, $length){
        return $width * $length;
    }?>
</body>
</html>