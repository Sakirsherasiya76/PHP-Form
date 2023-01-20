<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php tutorial</title>
</head>
<style>
    *{
        margin:0;
        padding:0;
        box-sizing:border-box;
    }
    .container{
        max-width:80%;
        background-color:pink;
        margin:auto;
        padding:23px;
    }
</style>
<body>
    <div class="container">
        <h1> Lets learn about PHP </h1>
        <p>Your pancard status is here:</p>
        <?php
        $age = 20;
        if($age>18){
            echo("You can go to the apply pancard");
        }
        else if($age==17){
            echo "You are 17 years old";
        }
        else{
            echo("You can not go to the apply pancard");
        }
        // Arrays in php
        echo "<br>";
        $languages = array("Javascript","C++","Reactjs","Bootstrap","php","CSS","Html","C");
        echo count($languages);
        echo "<br>";
        echo $languages[1];

        // Loops in php
        $a = 0;
        while ($a <= 10) {
            echo "<br> The value of a is: ";
            echo $a;
            $a++;
        }
        
        // Iterating arrays in php using while loop
        $a = 0;
        while ($a < count($languages)) {
            echo "<br> The value of language is: ";
            echo $languages[$a];
            $a++;
        }

        // Do while loop
        // $a=990;
        $a = 0;
        do{
            echo "<br> The value of a is: ";
            echo $a;
            $a++;
        }while ($a < 5);

        // For loop
        for ($a=0; $a < 10; $a++) { 
            echo "<br> The value of a from the for loop is: ";
            echo $a;
        }

        foreach ($languages as  $value) {
            echo "<br> The value from foreach loop is ";
            echo $value;
        }

        function print3(){
            echo "<br>Three";
        }
        print3();

        function print_number($number){
            echo "<br> Your number is: ";
            echo $number;
        }
        print_number(786);
        print_number(92);
        print_number(786/92);


        ?>
    </div>
    
</body>
</html>