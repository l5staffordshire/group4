<?php 
include "database.php";


$fname = $_POST['fname'];
$lname = $_POST['lname'];
$dob = $_POST['dob'];
$level = $_POST['level'];
$phone = $_POST['phone'];
$email = $_POST['mail'];
$raddress = $_POST['raddress'];
$paddress = $_POST['paddress'];

if($_POST['pass'] === $_POST['pass-1'])
{
	$password = $_POST['pass'];
}

$insert = 'INSERT into personalinfo (Fname,Lname,Dob,Level,Phone,Email,Raddress,Paddress,password) VALUES 
("'.$fname.'","'.$lname.'","'.$dob.'","'.$level.'","'.$phone.'","'.$email.'","'.$raddress.'","'.$paddress.'","'.$password.'")';
mysqli_query($conn,$insert);

if (!$insert)
{
	echo " Insertion failed";
}
else 
{
	echo " Record Inserted";
}

$fname1 = $_POST['fname-1'];
$lname1 = $_POST['lname-1'];
$mail1 = $_POST['mail-1'];
$phone1 = $_POST['phone-1'];
$relation = $_POST['relation'];

$insert = 'INSERT into nextkin (Fname,Lname,Email,Phone,Relation) VALUES ("'.$fname1.'","'.$lname1.'","'.$mail1.'","'.$phone1.'","'.$relation.'")';
mysqli_query($conn,$insert);

if (!$insert)
{
	echo " Insertion failed";
}
else 
{
	echo " Record Inserted";
}


?>