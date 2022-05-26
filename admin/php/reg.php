<?php 
  session_start();

  header('location:../login.html');
  
  $con = mysqli_connect('localhost', 'root', '', 'db_shellpolka');
  
  $email = $_POST['email'];
  $pass = $_POST['pass'];
  
 
  $s = "SELECT * FROM reg_table WHERE email ='$email' ";

  $result = mysqli_query($con, $s);

  $num = mysqli_num_rows($result);

  if($num == 1)
  {
      echo "Email Already Taken ";
  }
  else
  {
      $reg = "INSERT INTO reg_table(email, pass) VALUES('$email', '$pass')";
      mysqli_query($con, $reg);

      echo "Registration Successful";
  }
?>