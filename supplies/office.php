<?php
 require_once '../includes/config.php';
 if (isset($_POST['submit'])){

  
  $email = $_POST['email1'];
  $orders = $_POST['orders1'];
  $location = $_POST['location1'];
 
  try {
    //code...
    $sql = 'INSERT INTO officeorders(email1, orders1 , location1) VALUES(?,?,?)';
    $sth = $DBH->prepare($sql);
    $sth->execute(array($email, $orders ,$location ));
    $_SESSION['success'] = "message sent successfully.";
  } catch (PDOException $e) {
    //throw $th;
    echo $e->getMessage();
  }
 }
 
 ?>
<!DOCTYPE html>
<html>
    <head>
        <Title>SHEL BYE site</Title>
        <link rel ="stylesheet" type = "text/css" href ="innersupplies.css">
        <meta name="viewport" content="width=device-width,maximum-scale=1.0,minimum-scale=1.0, initial-scale=1.0">
        <link rel="shortcut icon" href="../images/logo.png">

        <style>
            @media only screen and (max-width: 400px) {
           .links {
               float: none;
               width:100%;
               padding-left:0px;
               text-align: right!important;
           }
           .body{
               width:100%;
           }
        }
        </style>
    </head>
    <body>
        <div class ="header">
            <h1>Smart People Great Solutions</h1>
            <div class="links">
                <ul>
                    <li> <a href="../index.php"style="text-decoration: none;">Home</a> </li>
                    <li> <a href="office.php"style="text-decoration: none;">Office</a> </li>
                    <li> <a href="stationary.php"style="text-decoration: none;">Stationery</a> </li>
                    <li> <a href="branding.php"style="text-decoration: none;">Branding</a> </li>
                    <li> <a href="school.php"style="text-decoration: none;">School</a> </li>
                  </ul>                
            </div>           
        </div>
      <div class="images">
        <table>
        <tr>
          <td><img src="../images/office4.jpg"style="max-width:450px;"> </td>
          <td><img src="../images/office2.jpg"style="max-width:450px;"> </td>
          <td><img src="../images/office3.jpg"style="max-width:450px;"></td>

        </tr>
       </table>
         
      </div>

       <table class="dbimages">
          <?php 
            $conn = mysqli_connect("localhost", "root", "", "db_shellpolka");
            $s = "SELECT * FROM officeimages";
            $result = mysqli_query($conn, $s);
            $t = 0;
            while ($row = mysqli_fetch_assoc($result)) {
              $t++;
                if($t == 1)
                {
                  ?>
                <tr class="row">
                  <tr  class="card col-lg-3 col-md-3 col-sm-6 col-xm-12" style="width: 30rem;">
                      <img class="card-img-top" src="<?php echo "../admin/uploads/". $row['image'];?>" alt="Card image cap"style="max-width:450px;">
                  </tr>
                <?php
                }else if($t == 3){
                  ?>
                    <tr  class="card col-lg-3 col-md-3 col-sm-6 col-xm-12" style="width: 30rem;">
                      <img class="card-img-top" src="<?php echo "../admin/uploads/". $row['image'];?>" alt="Card image cap"style="max-width:450px;">
                  </tr>
                </tr>
                  
                <?php
                  $t = 0;
                }else{
                  ?>
                  <tr  class="card col-lg-3 col-md-3 col-sm-6 col-xm-12" style="width: 30rem;">
                      <img class="card-img-top" src="<?php echo "../admin/uploads/". $row['image'];?>" alt="Card image cap"style="max-width:450px;">
                  </tr>
                  <?php
                }
            }
            if($t < 3){
              ?>
              </tr>
              <?php
            }
            ?>
          
        
     
        </table>
        
        
        </div>
        <style>
        .dbimages{
          display:flex;
          
        }
        .row{
          display:flex;
        }
        </style>
        
        <!---order form--->
            <script>
                function Openform() {
                 var x = document.getElementById("order");
                  if (x.style.display === "none") {
                  x.style.display = "block";
                   } else {
                   x.style.display = "none";
                  }
                 }
            </script>
            
            <br><br><br>
            <div class="form-container">
                <div class="container">
                    <form action="../supplies/office.php" method="POST" id="order"style="display:none;" >
                        <h1>Order Now!</h1>
                        <hr>
                        <label for="email"><b>Email</b></label>
                        <input type="text" placeholder="Enter Email" name="email1" id="email" required>
                        <label for="Order"><b>Enter order Description</b></label>
                        <input type="text" placeholder="Enter order" name="orders1" id="order" required>
                        <label for="Location"><b>Enter Known Location</b></label>
                        <input type="text" placeholder="Enter location" name="location1" id="location" required>
                        <hr>
                        <button type="submit" name="submit" class="orderbtn">SUBMIT ORDER!</button>
                    </form>  
                    
                </div>
                 
                <div class="button">
                    <button type="submit" class="orderbtn"; onclick="Openform();">CLICK TO ORDER!</button>
                </div>
                
            </div>

            <style>
                .form-container{
                    
                    margin-right: 0px;
                    margin-top: 100px;
                    
                    
                   
                }
                .container{
                    background-color:aquamarine;
                    margin-left: 200px;
                    width:50%;
                }
                
                  /* Full-width input fields */
                input[type=text], input[type=email] {
                  width: 100%;
                  padding: 15px;
                  margin: 5px 0 22px 0;
                  display: inline-block;
                  border: none;
                  background: #f1f1f1;
                }
                
                input[type=text]:focus, input[type=message]:focus {
                  background-color: #ddd;
                  outline: none;
                }
                
                /* Overwrite default styles of hr */
                hr {
                  border: 1px solid #f1f1f1;
                  margin-bottom: 0px;
                }
                
                /* Set a style for the submit button */
                .orderbtn {
                  background-color: blue;
                  border-radius: 20px;
                  color: white;
                  padding: 16px 20px;
                  margin: 8px 0;
                  border: none;
                  cursor: pointer;
                  width: 20%;
                  opacity: 0.9;
                  
                }
                
                .orderbtn:hover {
                  color: red;
                }
                
                /* Add a blue text color to links */
                a {
                  color: dodgerblue;
                }
              </style>
            
<!--end order form-->
            <!--<div class="button">
            <button type="submit"><a href="../shelbyecontact.html" >Order Now</a></button>
        </div>--->
        

        <div class="copyrights">
            <p>Copyright &copy; 2021 shellbye. All Rights Reserved.</p>
        </div>

    </body>
</html>