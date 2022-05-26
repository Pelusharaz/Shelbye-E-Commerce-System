
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="../images/logo.png">
    <title>SHELBYE Site</title>
    <link rel ="stylesheet" type = "text/css" href ="../includes/index.css">
    <link rel ="stylesheet" type = "text/css" href ="../admin/admin.css">
    <!-----script----->
    <style>
        .header button{
            display:none    
        }
        @media only screen and (max-width: 400px) {
        
        .links {
            display:none ;
            float: none;
            width:100%;
            padding-left:0px;
            text-align: right!important;
        }
        .header button{
            display:flex;
            flex-direction: column;
            background-color:white;
        }
        }
    </style>

    <!----inside button-->
    <style>
        .nav div{
            height: 4px;
            background-color: aqua;
            margin: 5px 0;
            border-radius: 25px;
            transition: 0.3s;
        }
        .nav{
            width: 30px;
            display: block;
            margin: 1em 0 0 1 em;
        }
        .one{
            width: 32px;
        }
        .two{
            width: 20px;
        }
        .nav:hover div{
            width:30px
        }
    </style>
    <!----end-->
    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script>
        $(document).ready(function(){
        $("#btn").click(function(){
            $('#link').toggle();
        });
        });
    </script>
            
    <!-----end script-->
</head>
<body>
    <div class ="header">
        <h1>Welcome To The Admin Panel</h1>
        <button id ="btn">
            <a href="#" class="nav">
                <div class="one"></div>
                <div class="two"></div>
        
            </a>
        </button>
        <div class="links" id="link">
            <ul>
                <li> <a class="active" href="../index.php"style="text-decoration: none;">Home</a> </li>
                <li> <a class="active" href="../admin/admin.php"style="text-decoration: none;"><img src="../images/email.png"style="max-width:20px;">messages</a> </li>
                <li> <a class="active" href="../admin/orders.php"style="text-decoration: none;"><img src="../images/shop2.jpg"style="max-width:20px;">Orders</a> </li>
                <li> <a class="active" href="../admin/store.php"style="text-decoration: none;">store</a> </li>
            </ul>                
        </div>           
    </div>
    <div class="top">
        <h2 style="text-align: center;">Replenish Your Store</h2>
    </div>
    <div class="store">
        <img src="../images/storepic.jpg"style="max-height:500px;width: 1370px;">
    </div>
    <div class="bottom1">
         <div class="office">
         <h4>Office</h4>
            <form action="../admin/php/officeuploads.php" method="post" enctype="multipart/form-data">
                <input type="file" name="image" >
                <button class="btn btn-warning" name="upload" >Post</button>
            </form>
            <table class="adminimages" style="width: 100%;">
             <tr>
                    <th scope="col">Images</th>
                    <th scope="col">Delete</th>
             </tr>
             <?php 
              $conn = mysqli_connect("localhost", "root", "", "db_shellpolka");
              $s = "SELECT * FROM officeimages";
              $result = mysqli_query($conn, $s);
              while ($row = mysqli_fetch_array($result)) {?>
             <tr>
                    <td> <img class="card-img-top" src="<?php echo "uploads/". $row['image'];?>" height="150" style="width: 200px;" alt="Card image cap"></td>
                    <td><form action="../admin/php/deleteofficeimage.php" method="post"><input type="hidden" name="delete_id" value="<?php echo $row['image']; ?>"><button type="submit" class="replybtn" name="delete_btn">DELETE</button></form></td>
             </tr>
             <?php
           }?>
           </table>

        </div>
    
        <div class="stationary">
        <h4>stationary</h4>
            <form action="../admin/php/stationaryuploads.php" method="post" enctype="multipart/form-data">
                <input type="file" name="image" >
                <button class="btn btn-warning" name="upload" >Post</button>
            </form>
            <table class="adminimages" style="width: 100%;">
             <tr>
                    <th scope="col">Images</th>
                    <th scope="col">Delete</th>
             </tr>
             <?php 
              $conn = mysqli_connect("localhost", "root", "", "db_shellpolka");
              $s = "SELECT * FROM stationaryimages";
              $result = mysqli_query($conn, $s);
              while ($row = mysqli_fetch_array($result)) {?>
             <tr>
                    <td> <img class="card-img-top" src="<?php echo "uploads/". $row['image'];?>" height="150" style="width: 200px;" alt="Card image cap"></td>
                    <td><form action="../admin/php/deletestationaryimage.php" method="post"><input type="hidden" name="delete_id" value="<?php echo $row['image']; ?>"><button type="submit" class="replybtn" name="delete_btn">DELETE</button></form></td>
             </tr>
             <?php
           }?>
           </table>
        </div>
   
    </div>
    <div class="bottom2">
        <div class="branding">
        <h4>Branding</h4>
            <form action="../admin/php/brandinguploads.php" method="post" enctype="multipart/form-data">
                <input type="file" name="image" >
                <button class="btn btn-warning" name="upload" >Post</button>
            </form>
            <table class="adminimages" style="width: 100%;">
             <tr>
                    <th scope="col">Images</th>
                    <th scope="col">Delete</th>
             </tr>
             <?php 
              $conn = mysqli_connect("localhost", "root", "", "db_shellpolka");
              $s = "SELECT * FROM brandingimages";
              $result = mysqli_query($conn, $s);
              while ($row = mysqli_fetch_array($result)) {?>
             <tr>
                    <td> <img class="card-img-top" src="<?php echo "uploads/". $row['image'];?>" height="150" style="width: 200px;" alt="Card image cap"></td>
                    <td><form action="../admin/php/deletebrandingimage.php" method="post"><input type="hidden" name="delete_id" value="<?php echo $row['image']; ?>"><button type="submit" class="replybtn" name="delete_btn">DELETE</button></form></td>
             </tr>
             <?php
           }?>
           </table>
        </div>
 
        <div class="school">
        <h4>School</h4>
            <form action="../admin/php/schooluploads.php" method="post" enctype="multipart/form-data">
                <input type="file" name="image" >
                <button class="btn btn-warning" name="upload" >Post</button>
            </form>
            <table class="adminimages" style="width: 100%;">
             <tr>
                    <th scope="col">Images</th>
                    <th scope="col">Delete</th>
             </tr>
             <?php 
              $conn = mysqli_connect("localhost", "root", "", "db_shellpolka");
              $s = "SELECT * FROM schoolimages";
              $result = mysqli_query($conn, $s);
              while ($row = mysqli_fetch_array($result)) {?>
             <tr>
                    <td> <img class="card-img-top" src="<?php echo "uploads/". $row['image'];?>" height="150" style="width: 200px;" alt="Card image cap"></td>
                    <td><form action="../admin/php/deleteschoolimage.php" method="post"><input type="hidden" name="delete_id" value="<?php echo $row['image']; ?>"><button type="submit" class="replybtn" name="delete_btn">DELETE</button></form></td>
             </tr>
             <?php
           }?>
           </table>
        </div>
    </div>

    <style>
            table{
                  width:100%;
                  font-family: arial,sans-serif;
                  border-collapse: collapse;
                  margin-bottom: 50px;
                 }
            td,th{
                border:1px solid;
                text-align: left;
                padding:8px;
            }
            tr:nth-child(even){
                background-color: aqua;
            }
            hr {
                border: 1px solid #f1f1f1;
                margin-bottom: 25px;
            }
            .replybtn {
                        background-color: blue;
                        color: white;
                        padding: 9px 25px;
                        margin: 18px 20;
                        border-radius: 29px;
                        cursor: pointer;
                        width: 100%;
                        opacity: 0.9;
  
                    }

            .replybtn:hover {
                        opacity: 1;
                        color: red;
                    }
        </style>


    <style>
        .bottom1{
            display:flex;
            margin-left:20px;
            
        }
        
        .bottom2{
            display:flex;
            margin-left:20px;
            
        }
        form{
            background-color:blue;
        }
        /* Full-width input fields */
         input[type=file] {
                          width: 100%;
                          padding: 40px 0px 40px 0px;
                          margin: 7px 0 20px 0;
                          display: inline-block;
                          border: none;
                          background: #f1f1f1;
                        }
                        
             
                        /* Set a style for the submit button */
        .btn btn-warning{
                          background-color: blue;
                          border-radius: 20px;
                          color: white;
                          padding: 16px 20px;
                          margin: 8px 0;
                          border: none;
                          cursor: pointer;
                          width: 50%;
                          opacity: 0.9;
                          
                        }
                        
                        .btn btn-warning:hover {
                          opacity: 1;
                          color: red;
                        }
    </style>
    
<br><br><br>   
<button class="logoutbtn"><a href="../admin/php/logout.php"style="text-decoration: none;">LogOut</a></button>
    <style>
        .logoutbtn{
            background-color: blue;
            border-radius: 20px;
            padding:10px 10px 10px 10px;
            color: white;
           
        }
    </style>
    
    
</body>
</html>