<html>
    <head>
        <Title>SHELBYE site</Title>
        <link rel ="stylesheet" type = "text/css" href ="includes/index.css">
        <link rel ="stylesheet" type = "text/css" href ="includes/supplies.css">
        <meta name="viewport" content="width=device-width,maximum-scale=1.0,minimum-scale=1.0, initial-scale=1.0">
        <link rel="shortcut icon" href="images/logo.png">

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
                        flex-direction: row;
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
            <h1>Smart People Great Solutions</h1>
            <button id ="btn">
                <a href="#" class="nav">
                    <div class="one"></div>
                    <div class="two"></div>
            
                </a>
            </button>
            <div class="links" id="link">
                <ul>
                    <li> <a class="active" href="index.php"style="text-decoration: none;">SHELBYE CO.LTD</a> </li>
                    <li> <a href="shelbyesupplies.php"style="text-decoration: none;">supplies</a> </li>
                    <li> <a href="shelbyecontact.php"style="text-decoration: none;">contact us</a> </li>
                    <li> <a href="shelbyeabout.php"style="text-decoration: none;">about us</a> </li>
                </ul>                
            </div>           
        </div>

        <h2>Oder with us Now and Get it Delivered instantly</h2>

        <div class="image">    
          <!--background image-->  
        </div>
            <div class="supllieslinks">
                <ul>
                    <li> <a class="active" href="supplies/office.php"style="text-decoration: none;">Office<span>supplies</span></a> </li>
                    <li> <a href="supplies/stationary.php"style="text-decoration: none;">stationery<span>supplies</span> </a> </li>
                    <li> <a href="supplies/branding.php"style="text-decoration: none;">Branding<span>supllies</span> </a> </li>
                    <li> <a href="supplies/school.php"style="text-decoration: none;">School</a> </li>
                
                </ul>                
            </div>

            <div class="footer">
                <div class="services">
                    <h5>Services</h5>
                    <p>We offer the best Supplies</p>
                    <p>services world wide</p>
                    <p><a href="../shelbye/admin/login.html"style="text-decoration:none;"style="color:Black;">Admin</a></p>
    
                </div>
                <div class="About">
                    <h5>About</h5>
                    <p>Our customers Profile are diverse.Some Brands</p>
                    <P>specialty products, we market today are among</P>  
                    <P>some of the quality products we imported for our</P> 
                    <p>deddicated Customers From Product sourcing</p>
                    <p>to Product specialization ,Products purchasing $ Supply</p>
                    <p>Services is Constantly Upgrading and acquiring new Skills to Ensure</p>    
                    <p>We can Serve Our customers Better.</p>   
                    <p>Our management Personel underwent a Series of Practicle Trainnings Which</p>
                    <p> Include Travelling technical trainning and Obtained Several certification</p>
    
                </div>
                <div class="icons">
                    <div class="inner-icons">
                        <h5>Follow us on</h5>
                        <ul type="none">
                            <li><a target="_blank" href="https://www.instagram.com/shelbye_company/"style="text-decoration: none;" ><img src="images/instagram2.png" style="max-width:30px;"></a></li>
                            <li><a target="_blank" href="https://www.facebook.com/Shelbyeltd/"><img src="images/facebooklogo.png" style="max-width: 30px;"></a></li>
                            <li><a target="_blank" href="https://api.whatsapp.com/send?phone=254718144940&fbclid=IwAR3E1XUF1-S_W4dfZzCXZJCNkYci20cyki-9lV1bTbKmEl9ew9mpEkDbezc"><img src="images/whatsapp.webp" style="max-width: 30px;"></a></li>
                            </ul>
    
                    </div>
                   
                </div>
                <div class="contactus">
                    <h5>Contact us</h5>
                    <ul type="none" >
                        <li><a target="_blank" href="mailto:renieznduki940@gmail.com"><img src="images/Gmail new Logo 2020.jpg" style="max-width: 30px;"></a></li>
                        <li><a target="_blank" href="tel:+254718144940"><img src="images/phone-512.webp" style="max-width: 30px;"></a></li> 
                            
                        </ul>
                    <img src="images/logo.png"style="max-width:100px">
                </div>
                </div>
                <div class="copyrights">
                    <p>Copyright &copy; 2021 shelbye. All Rights Reserved.</p>
                </div>
    </body>
</html>