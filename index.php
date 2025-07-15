<?php
if(isset($_POST['name'])){
$host = "localhost";
$username = "root";
$password = "";
$dbname = "US_Trip";

$conn = mysqli_connect($host, $username, $password, $dbname);
if (!$conn)
     {
    die("Connection failed: ". mysqli_connect_error());
     } 
 // echo "Connected successfully";


$name=$_POST['name'];
$age=$_POST['age'];
$gender=$_POST['gender'];
$email=$_POST['email'];
$mobile=$_POST['mobile'];
$place=$_POST['place'];
$desc=$_POST['desc'];
$sql = "INSERT INTO `MyGuests` (`name`, `age`, `gender`, `email`, `mobile`, `place`, `other`) VALUES ('$name', '$age', '$gender', '$email', '$mobile', '$place', '$desc')";
echo $sql;
if ($conn->query($sql) === TRUE)
     {
  echo "New record created successfully";
} else {
  echo "Error: $sql <br>" . $conn->error;
}

$conn->close();
}
?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome to travel Form</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <h1>Welcome to IIT Kharagpur US Trip form</h1>
        <p>Enter Your Details and submit this form to confirm your participation in the trip</p>
        <form action="index.php" method="post">
            <input type="text" name="name" id="name" placeholder="Enter your name" >
            <input type="text" name="age" id="age" placeholder="Enter your age" >
            <input type="text" name="gender" id="gender" placeholder="Enter your gender">
            <input type="email" name="email" id="email" placeholder="Enter your email" >
            <input type="mobile" name="mobile" id="mobile" placeholder="Enter your mobile number">
            <input type="text" name="place" id="place" placeholder="Enter your place">
        <textarea name="desc" id="desc" cols="30" rows="10" placeholder="Enter any other information here"></textarea>
        <button class="btn">Submit</button>
        <button class="btn">Reset</button>
        </form>
    </div>
</body>
<script src="index.js"></script>
</html>