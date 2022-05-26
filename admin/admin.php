<?php
           $con = mysqli_connect('localhost', 'root', '', 'db_shellpolka');
           $query = "SELECT * FROM contactus";
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
<head>
    <Title>SHELBYE site</Title>
        <link rel ="stylesheet" type = "text/css" href ="../includes/index.css">
        <link rel ="stylesheet" type = "text/css" href ="../admin/admin.css">
        <meta name="viewport" content="width=device-width,maximum-scale=1.0,minimum-scale=1.0, initial-scale=1.0">
        <link rel="shortcut icon" href="../images/logo.png">
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
                        padding: 9px 15px;
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

        <table>
            <th colspan="200px">Messages</th>
            <tr>
                <td><h4>Email</h4></td>
                <td><h4>Message</h4></td>
                <td><h4>Delete Message</h4></td>
                <td><h4>Send Reply</h4></td>
            </tr>
            <tr>
                <td>test@gmail.com</td>
                <td>I am Pleased with Your Services</td>
                <td><button type="submit" class="replybtn">Delete message</button></td>
                <td><button type="submit" class="replybtn">send message</button></td>
                      
            </tr>
            <tr>
                  <?php
                  if(mysqli_num_rows($query_run)> 0)
                  {
                      while($row = mysqli_fetch_assoc($query_run))
                      {
                        ?>
                          <tr>
                           <td><?php echo $row['email']?></td>
                           <td><?php echo $row['message']?></td>
                           <td>
                               <form action="../admin/php/deletemessage.php" method="post">
                                   <input type="hidden" name="delete_id" value="<?php echo $row['email']; ?>">
                                   <button type="submit" class="replybtn" name="delete_btn">DELETE</button>
                               </form>
                           </td>
                           <td><a href="mailto:<?php echo $row['email']?>?&subject=subject ShelBye Email Response&body=Dear <?php echo $row['email']?>  " target="_blank"><button type="submit" class="replybtn">REPLY</button></a></td>
                         </tr>
                        <?php
                      }
                  }
                  ?>
                  
              </tr>
            
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
