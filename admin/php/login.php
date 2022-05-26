<?php 
  session_start();

if(count($_POST)>0) {
  $con = mysqli_connect('localhost', 'root', '', 'db_shellpolka');
  $result =  mysqli_query($con,"SELECT * FROM reg_table WHERE email ='" . $_POST["email"] . "' and pass = '". $_POST["pass"]."'");
    
    $row  = mysqli_fetch_array($result);
    if(is_array($row)) {
    $_SESSION['email'] =$row['email'];
    } else {
        echo "Invalid Email or Password!";
    }
}
if(isset($_SESSION['email'])) {
  header('location:../admin.php');
}
?>