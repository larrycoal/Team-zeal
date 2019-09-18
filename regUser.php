<?php
session_start();
//header('location:login.php');

$con = mysqli_connect('localhost', 'root', '');

mysqli_select_db($con, 'registration');

$username = $_POST['username'];
$email = $_POST['email'];
$password = $_POST['password'];

$safe = "select * from users where name = '$username'";

$result = mysqli_query($con, $safe);

$num = mysqli_num_rows($result);

if ($num == 1) {
    echo "Username Already Taken";
} else {
    $reg = "insert into users(name , email , password) values('$username', '$email'  , '$password')";
    mysqli_query($con, $reg);
    echo"Registration Successful";}

// $servername = "localhost";
// $username = "root";
// $password = "";
// $dbname = "registeration";

// // Create connection
// $conn = mysqli_connect($servername, $username, $password, $dbname);
// // Check connection
// if (!$conn) {
//     die("Connection failed: " . mysqli_connect_error());
// }
// $username = $_POST['username'];
// $email = $_POST['email'];
// $password = $_POST['password'];

// $sql = "INSERT INTO MyGuests (firstname, lastname, email)
// VALUES ($username, $email, $password)";

// if (mysqli_query($conn, $sql)) {
//     echo "New record created successfully";
// } else {
//     echo "Error: " . $sql . "<br>" . mysqli_error($conn);
// }

// mysqli_close($conn);
?>
