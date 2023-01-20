<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php tutorial</title>
</head>
<body>
    <div class="container">
        This is my first php website 
        <?php
        define('PI',3.14);
        define('H',22.7);
        echo "Hii my name is sakir and print the php language";
        
        // variable in php
        $variable1=7;
        $variable2=2;
        echo $variable1;
        echo $variable2;

        echo $variable1 + $variable2;

        // operators in php
        // Arithmatic Operators
        echo "<br>";
        echo "The value of variable1 + variable2 is ";
        echo $variable1 + $variable2;
        echo "<br>";
         echo "The value of variable1 - variable2 is ";
        echo $variable1 - $variable2;
        echo "<br>";
         echo "The value of variable1 * variable2 is ";
        echo $variable1 * $variable2;
        echo "<br>";
         echo "The value of variable1 / variable2 is ";
        echo $variable1 / $variable2;
        echo "<br>";
         echo "The value of variable1 % variable2 is ";
        echo $variable1 % $variable2;
        echo "<br>";

        // Assignment Operators
        $newVar = $variable1;
        // $newVar += 1;
        // $newVar -= 4;
        // $newVar *= 2;
        $newVar /= 3;
        echo "the value of new variable is ";
        echo $newVar;
         echo "<br>";
        // Comparison Operators
        // echo "<h1> Comparison Operators </h1>"
        echo " The value of 2==5 is";
        echo var_dump(2==5);
        echo"<br>";
        echo " The value of 2!=5 is";
        echo var_dump(2!=5);
        echo"<br>";
        echo " The value of 2<=5 is";
        echo var_dump(2<=5);
        echo"<br>";
        echo " The value of 2>=5 is";
        echo var_dump(2>=5);
        echo"<br>";

        // Increment/Decrement Operators
        // echo $variable1++;
        // echo "<br>";
        // echo $variable1;

        // echo $variable1--;
        //  echo "<br>";
        // echo $variable1;

        // echo ++$variable1;
        //  echo "<br>";
        // echo $variable1;

        echo --$variable1;
         echo "<br>";
        echo $variable1;

        // Logical Operators
        // and (&&)
        // or (||)
        // xor
        // not

        // $myVar = (true and true);
        // $myVar = (true and false);
        // $myVar = (false and true);
        // $myVar = (false and false);
        // $myVar = (true or false);

        // $myVar = (true xor true);
        // $myVar = (true xor false);
        // $myVar = (false xor true);
        $myVar = (false xor false);
        echo "<br>";
        echo var_dump($myVar);

        ?>
    </div>


    <?php
        // Data types in php
        // string
        // integer
        // float
        // boolean
        // array
        // object
        echo "<br>Data types <br>";
        $var = "This is a string";
        echo var_dump($var);
        echo "<br>";

        $var = 786;
        echo var_dump($var);
        echo "<br>";

        $var = 786.92;
        echo var_dump($var);
        echo "<br>";

        $var = true;
        echo var_dump($var);
        echo "<br>";

        $var = [786,92];
        echo var_dump($var);
        echo "<br>";
        
        echo PI;
        echo "<br>";
        echo H;

    ?>
</body>
</html>