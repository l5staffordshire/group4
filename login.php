<?php
include('database.php');

session_start();
//$error=''; // Variable To Store Error Message
if (isset($_POST["submit"])) {
if (empty($_POST["mail"]) || empty($_POST["pass"])) {
//$error = "Username or Password is invalid1"; 
}
else
{
// Define $username and $password
$email=$_POST["mail"];
$password=$_POST["pass"];
// Establishing Connection with Server by passing server_name, user_id and password as a parameter
$conn = mysqli_connect("localhost", "root", "");

// Selecting Database
$db = mysqli_select_db($conn , "play");
// SQL query to fetch information of registerd users and finds user match.


///////////////////////////////////////////////////////////////////////////////////////////////////////////////////

$query = mysqli_query( $conn , "SELECT * FROM personalinfo WHERE Email='$email' AND password='$password'");
$rows = mysqli_num_rows($query);

while($row = mysqli_fetch_array($query)){
    $id = $row ["id"];
	//$depid = $row ["department"];
	$fname = $row ["Fname"];
}
$_SESSION['id']=$id;// Initializing Session
//$_SESSION['department']=$depid;

if ($rows == 1) {
$_SESSION['Fname']=$fname;

header("location: profile.php"); // Redirecting To Other Page
} else {
//$error = "Username or Password is invalid2";
}
mysqli_close($conn); // Closing Connection
}
}
?>