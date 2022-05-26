<?php
  // Create database connection
  $db = mysqli_connect("localhost", "root", "", "db_shellpolka");

  // Initialize message variable
  $msg = "";

  // If upload button is clicked ...
  if (isset($_POST['upload'])) {
  	// Get image name
  	$image = $_FILES['image']['name'];

  	// image file directory
  	$target = "../uploads/".basename($image);

  	$sql = "INSERT INTO officeimages (image) VALUES ('$image')";
  	mysqli_query($db, $sql);

  	if (move_uploaded_file($_FILES['image']['tmp_name'], $target)) {
      header("location:../store.php");
      $msg = "Image uploaded successfully";
  	}else{
  		$msg = "Failed to upload image";
  	}
  }
  $result = mysqli_query($db, "SELECT * FROM officeimages");
?>