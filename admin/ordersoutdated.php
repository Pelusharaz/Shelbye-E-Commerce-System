<?php
           $con = mysqli_connect('localhost', 'root', '', 'db_shellpolka');
           $query = "SELECT officeorders.email1,officeorders.orders1,officeorders.location1,stationaryorders.email3,stationaryorders.orders3,stationaryorders.location3,schoolorders.email2,schoolorders.orders2,schoolorders.location2,brandingorders.email,brandingorders.orders,brandingorders.location  FROM officeorders INNER JOIN stationaryorders ON officeorders.id = stationaryorders.id INNER JOIN schoolorders ON stationaryorders.id = schoolorders.id INNER JOIN brandingorders ON schoolorders.id = brandingorders.id";
           $query_run = mysqli_query($con, $query);

           if(isset($_SESSION['success']) && $_SESSION['success'] !='')
           {
               echo '<h2>'.$_SESSION['success']. '</h2>';
               unset($_SESSION['success']);
           }

           if(isset($_SESSION['status']) && $_SESSION['status'] !='')
           {
               echo '<h2>'.$_SESSION['status']. '</h2>';
               unset($_SESSION['status']);
           }
           
           
           
           
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="../images/logo.png">
    <link rel ="stylesheet" type = "text/css" href ="../admin/admin.css">
    <link rel ="stylesheet" type = "text/css" href ="../includes/index.css">
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
    <title>SHELBYE Site</title>
</head>
<body>
    <div class ="header" style="position:fixed;">
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

    <div class="messages">

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
                        padding: 10px 20px;
                        margin: 8px 0;
                        border-radius: 20px;
                        cursor: pointer;
                        width: 50%;
                        opacity: 0.9;
  
                    }

            .replybtn:hover {
                        opacity: 1;
                        color: red;
                    }
        </style>
<br><br><br><br><br><br><br>
        <table>
        <th colspan="200px">Orders</th>
        <tr>
        <td colspan="5px">office</td>
        <td colspan="5px">stationary</td>
        <td colspan="5px">school</td>
        <td colspan="5px">Branding</td>
        </tr>
        <tr>
            <td>email</td>
            <td>order</td>
            <td>location</td>
            <td>Decline</td>
            <td>Accept</td>

            <td>email</td>
            <td>order</td>
            <td>location</td>
            <td>Decline</td>
            <td>Accept</td>

            <td>email</td>
            <td>order</td>
            <td>location</td>
            <td>Decline</td>
            <td>Accept</td>

            <td>email</td>
            <td>order</td>
            <td>location</td>
            <td>Decline</td>
            <td>Accept</td>
        </tr>
        <?php
                  if(mysqli_num_rows($query_run)> 0)
                  {
                      while($row = mysqli_fetch_assoc($query_run))
                      {
                        ?>
        <tr>
            <td><?php echo $row['email1']?></td>
            <td><?php echo $row['orders1']?></td>
            <td><?php echo $row['location1']?></td>
            <td><a href="mailto:<?php echo $row['email1']?>?&subject=subject ShelBye Email Response&body=Dear <?php echo $row['email1']?>  " target="_blank"><button type="submit" class="orderbtn">Decline</button></td>
            <td><a href="mailto:<?php echo $row['email1']?>?&subject=subject ShelBye Email Response&body=Dear <?php echo $row['email1']?>  " target="_blank"><button type="submit" class="btn">Accept</button></td>

            <td><?php echo $row['email3']?></td>
            <td><?php echo $row['orders3']?></td>
            <td><?php echo $row['location3']?></td>
            <td><a href="mailto:<?php echo $row['email3']?>?&subject=subject ShelBye Email Response&body=Dear <?php echo $row['email3']?>  " target="_blank"><button type="submit" class="orderbtn">Decline</button></td>
            <td><a href="mailto:<?php echo $row['email3']?>?&subject=subject ShelBye Email Response&body=Dear <?php echo $row['email3']?>  " target="_blank"><button type="submit" class="orderbtn">Accept</button></td>

            <td><?php echo $row['email2']?></td>
            <td><?php echo $row['orders2']?></td>
            <td><?php echo $row['location2']?></td>
            <td><a href="mailto:<?php echo $row['email2']?>?&subject=subject ShelBye Email Response&body=Dear <?php echo $row['email2']?>  " target="_blank"><button type="submit" class="orderbtn">Decline</button></td>
            <td><a href="mailto:<?php echo $row['email2']?>?&subject=subject ShelBye Email Response&body=Dear <?php echo $row['email2']?>  " target="_blank"><button type="submit" class="orderbtn">Decline</button></td>

            <td><?php echo $row['email']?></td>
            <td><?php echo $row['orders']?></td>
            <td><?php echo $row['location']?></td>
            <td><a href="mailto:<?php echo $row['email']?>?&subject=subject ShelBye Email Response&body=Dear <?php echo $row['email']?>  " target="_blank"><button type="submit" class="orderbtn">Decline</button></td>
            <td><a href="mailto:<?php echo $row['email']?>?&subject=subject ShelBye Email Response&body=Dear <?php echo $row['email']?>  " target="_blank"><button type="submit" class="orderbtn">Decline</button></td>
        </tr>
        <?php
                      }
                  }
                  ?>
      

        
        </table>        
    
    </div>
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