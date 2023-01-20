<?php
$insert = false;
if(isset($_POST['name'])){   
//  Set connection variables    
$server = "localhost";
$username = "root";
$password = "";

// Create a database connection
$con = mysqli_connect($server, $username, $password);

// check for connection success
if(!$con){
    die("connection to this database failed due to".
    mysqli_connect_error());
}

// echo "Success connecting to the db";

// collect post variables
$name = $_POST['name'];
$gender = $_POST['gender'];
$age = $_POST['age'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$desc = $_POST['desc'];
$sql = "INSERT INTO `trip`.`trip` (`name`, `age`, `gender`, `email`, `phone`, `other`, `dt`) VALUES ('$name', '$age', '$gender', '$email', '$phone', '$desc', current_timestamp());";
// echo $sql;

// Execute the query
if($con->query($sql) == true){
    // echo "Successfully inserted";

    // Flag for successful insertion 
    $insert = true; 
}
else{
    echo "ERROR: $sql <br> $con->error";
}

// Close the database connection
$con->close();
}

?> 

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Welcome to Travel Form</title>
    <link rel="stylesheet" href="style.css"/>
  </head>
  <body>
    <img class="bg" src="bg.jpg" alt="Kotak College">
    <div class="container">
      <h1>Welcome to kotak College GJ Trip form</h1>
      <p>
        Enter your details and submit this form to confirm your participation in
        the trip
      </p>
      <?php
      if($insert == true){
      echo "<p class='SubmitMsg'>Thanks for submitting your form. we are happy to see you joining us for the US trip</p>";
      }
    ?>
      <form action="index.php" method="post">
        <input type="text" name="name" id="name" placeholder="Enter your name"/>
        <input type="text" name="age" id="age" placeholder="Enter your age" />
        <input type="text" name="gender" id="gender" placeholder="Enter your gender" />
        <input type="text" name="email" id="email" placeholder="Enter your email"/>
        <input type="text" name="phone" id="phone" placeholder="Enter your phone" />
        <textarea name="desc" id="desc" cols="30" rows="10" placeholder="Enter any other information here" ></textarea>
        
        <button class="btn">Submit</button>
        
        <!-- <button class="btn">Reset</button> -->
      </form>
    </div>
    <script src="index.js"></script>
    
  </body>
</html>
