<?php
$con =mysqli_connect('localhost', 'root', '',  'db_shellpolka');


$email = $_POST['email'];
$message = $_POST['message'];

$s = "SELECT * FROM  contactus WHERE email = '$email' ";
$result = mysqli_query($con, $s);
$num = mysqli_num_rows($result);

$reg = "INSERT INTO contactus(email, message) VALUES( '$email','$message')";
mysqli_query($con, $reg);

mysqli_close($con)

?>