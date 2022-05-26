<?php 
session_start();
include('includes/config.php');
error_reporting(0);

?>

<html>
    <head>
        <Title>SHELBYE site</Title>
        <link rel ="stylesheet" type = "text/css" href ="includes/index.css">
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
        <div class = "topcontainer">
            <div class = "who-we-are">
                <h3>WHO WE ARE</h3>
                <p>Our customers Profile are diverse.Some Brands </p>
                <p> specialty products, we market today are among</p>
                <p>some of the quality products we imported for our </p>
                <p>deddicated Customers From Product sourcing </p>
                <p>to Product specialization ,Products purchasing $ Supply </p>
                <p>Services is Constantly Upgrading and acquiring new Skills to Ensure </p>
                <p> We can Serve Our customers Better. </p>
                <p> Our management Personel underwent a Series of Practicle Trainnings Which Include Travelling</p>
                <P>  technical trainning and Obtained Several certification.</P>
            </div>
        </div>
        <div class=" imagecontainer"><img src="images/boder.png" alt="#" />
        </div>

        <div class="goals">
            <div class="mission">
                <h4>Mission</h4>
                <p>To combine startegic marketting and service excellence with quality</p>
                <p>products at competitive pricing to provide the best value to</p>
                <p>our regional customers</p>
            </div>
            <div class="vision">
                <h4>Vision</h4>
                <p>The regional premier Distributors of Speciality Products and support</p>
                <p>manufactures to acheive their goals through strategic marketing and close</p>
                <p>collaboration strategy</p>
            </div>
            <div class ="corevalues">
               <h4 >Core<span>values</span> </h4>
                <p>integrity</p>
                <p> Gratitude</p> 
                <p> Excelence</p> 
                <p>Passion</p>   

            </div>

        </div>

        <div class ="middle-container">
            <div class="acheivements">
                <div class="satisfaction">
                    <h2>CLIENT SATISFACTION</h2>
                    <p>We emphasize Client satisfaction as Bussiness Strategy.By Providing</p>
                    <p>unparalleled legal solutions to Our Clients Legal Problems and Challenges,</p>
                    <p>we satisfy our clients needs.We satisfy Our Clients needs we hope that Our</p>
                    <p>continued emphasies on all aspects of lawfully meeting our Clients needs</p>
                    <p>will make us the touchstoneupon which all other firms will be compared </p>
                    <p>to in legal profession</p>
                </div>
                <div class="accountability">
                    <h2>ACCOUNTABILITY</h2>
                    <p>We are transparent and accountable not only to our clients but also</p>
                    <p>to ourselves by being continually bound by our core values.We are upfront</p>
                    <p>with our clients and keep them dully informed of the status of their</p>
                    <p>cases, transactions and all matters in which we represent them</p>
                </div>
                <div class="Teamwork">
                    <h2>TEAMWORK</h2>
                    <p>Our company greatly values Teamwork and ensures that every member of the firm</p>
                    <p>is involved in meeting our client's needs.We allow our members and staff to</p>
                    <p>be independent and responsible to their duties even as we work in concert</p>
                    <P>to acheive our clients aims . We routinely strategise together on issues </P>
                    <p>and this has enables us to acheive optimality, save client's time ,offer</p>
                    <p>apprpriate legal solutions to our clients and be responsive to our clients</p>
                    <p>needs.We have created a collegial and collaborative environment that enebles </p>
                    <P>us to continually meet our clients needs </P>

                </div>
            </div>

        </div>

        <div class="mid-container">
            <div class="supplies">
                <h3>General Procurement and Supplies</h3>
                <p>We have extensive world wide sourcing capabilities , Breadth and Depth of industry</p>
                <p>knowledge to offer our customers a dedicated supply service and wealth of technial,</p>
                <p>expert advice.</p>
                <p>We can accomodate any specific commodity or purchasing requirements should your project</p>
                <p>or organisation require it . Our procurement $ supplies service manages your procurement</p>
                <p>activities on the best practices for undertaking individual procurement projects with sound</p>
                <p>technial advice.</p><br>
                <p>We Can accomodate requests from individual requisitions too complete material call-offs for</p>
                <p>maintainance, stock replenishment or new project requirements and our comprehensive global</p>
                <p>vendor database enables us to provide quality equipment at high competitive rates. </p>
            </div>
        </div>

        <div class="bottom-container">
            <div class="sourcing-and-supply">
                <div class="start">
                <img src="images/construction.jpg" alt="#"align="left"style="max-width:500px;"/>
                <h1>Sourcing and Supply</h1>
                <p>Getting items from manufacturers to you is the simple part of</p>
                <p>this story.We go the extra mile to make sure that you are getting extra</p>
                <p>value at each point along the way.</p>
                </div>
                
                <div class="continuation">
                <img src="images/pipes.png" alt="#"align="right"style="max-width:500px;"/>
                <p>Simply Put You can send us a request for quote-no matter where</P>
                <p>You need it delivered, the order size or the complexity-and our</p>
                <p>sourcing managers will do the sourcing and supply work for You.</p>
                </div>

                <div class="end">
                    <div class="office-supplies1">
                        <img src="images/office1.jpg" alt="#"align="left"style="max-width:520px;"/>
                        <p>We Understand That everyone's requirement is different so we are able</P>
                        <p>to supply a diverse range of products to fit all requirements.</p>
                        <p>From general stationery items such as paper and pens,through to</p>
                        <p>office equipement $ related Accessories</p>
                    </div>
                       <div class="office-supplies2">
                        <img src="images/office-supplies.png" alt="#"align="right"style="max-width:500px;"/>
                        <p>Our friendly account mangers are here to fing your </P>
                        <p>ultimate stationery solution , listening to your </p>
                        <p>specific requirement and serving you in an efficient manner</p> 
                       </div>
                                          
                </div>  
            </div>
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
                specialty products, we market today are among 
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
               
            <!---responsive->
                <style>
                @media screen and (max-width: 900px){
                body{
                    width:100%;
        
                }
                
                }
                </style>
             <------>
                
                  
               
                
            
            
            


    </body>
</html>