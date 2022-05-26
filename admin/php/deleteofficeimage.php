<?php

$con = mysqli_connect("localhost", "root", "", "db_shellpolka");
if(isset($_POST['delete_btn']))
{
    $id = $_POST['delete_id'];
    echo $id;

    $query = "DELETE FROM officeimages WHERE image ='$id'";
    $query_run = mysqli_query($con, $query);

    if($query_run )
    {
        $_SESSION['success'] = "Your Data is Deleted";
        header('Location:../store.php');
    }
    else
    {
        $_SESSION['status'] = "Your Data is not Deleted";
        header('Location:../store.php');
    }
}
?>