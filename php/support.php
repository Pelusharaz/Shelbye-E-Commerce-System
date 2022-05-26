<?php
 require_once '../includes/config.php';
 if (isset($_POST['submit'])){

  $name = $_POST['name'];
  $email = $_POST['email'];
  $subject =$_POST['subject'];
  $body =$_POST['body'];
 
  try {
    //code...
    $sql = 'INSERT INTO messages(name, email, subject, body) VALUES(?,?,?,?)';
    $sth = $DBH->prepare($sql);
    $sth->execute(array($name, $email, $subject, $body));
    $_SESSION['success'] = "message sent successfully.";
  } catch (PDOException $e) {
    //throw $th;
    echo $e->getMessage();
  }
 }
 
 ?>

<!DOCTYPE html>
<html lang="en">
<head> <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- bootstrap css links -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    
    <!-- js plugins -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
   
    <!-- js plugins -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

    <link rel="icon" href="../images/logo.jpg" type="image/gif" sizes="16x16">

    <link rel="stylesheet" href="../css/styles.css">

    <script>
      $(function() {
          $('a[href*=\\#]:not([href=\\#])').on('click', function() {
              var target = $(this.hash);
              target = target.length ? target : $('[name=' + this.hash.substr(1) +']');
              if (target.length) {
                  $('html,body').animate({
                      scrollTop: target.offset().top
                  }, 1000);
                  return false;
              }
          });
      });
    </script>
    <title>Support</title>
    <style>
        .jumbotron{
          color: black;
          background-repeat: no-repeat;
          background-size: cover;
          background-image:url('https://hips.hearstapps.com/hmg-prod.s3.amazonaws.com/images/diy-wedding-decorations-1582647454.jpg');
        }
        .logo{
          border-radius: 50% !important;
        }
        .fa{
          margin: 10px;
          color:black !important;
          text-decoration: none;
        }
        textarea{
          background-color: whitesmoke;
          border: rgb(255, 169, 9) solid 3px;
        }
        .email, .name{
          background-color: whitesmoke;
          width: 250px;
          border: rgb(255, 169, 9) solid 3px;
        } 
        @media only screen and (max-width: 600px) {
            .gmap_canvas iframe{
              display: block;
              width: 300px;
            } 
         }
        .mapouter{
            position:relative;
            text-align:right;
            height:500px;
            width:600px;
            }
        .gmap_canvas {
            overflow:hidden;
            background:none!important;
            height:500px;
            width:600px;
            }
        </style>
</head>
<body>
    <!-- start index content
================================================== -->
<nav class="navbar navbar-expand-lg navbar-light bg-warning">
  <a class="navbar-brand text-dark" href="#"><img class="mb-2 logo" src="../images/logo.jpg" alt="" width="85" height="75"><i>Polka Planners</i></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
  <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link text-light" aria-current="page" href="support.php">Support</a>
      </li>
      <li class="nav-item">
        <a class="nav-link text-light" href="gallary.php">Gallery</a>
      </li>
      <li class="nav-item">
        <a class="nav-link text-light" href="offers.php">Offers</a>
      </li>
  </ul>
  <a class="btn btn-outline-dark text-light" href="/polker/index.php">Home</a>
  </div>
</nav>



<br>
<div class="container-fluid">
<div class="jumbotron p-5"><b>
  <br>
  <h2>our <b>Help Center</b></h2>
  <p>With any inquiries, we are open 24/7 to serve our clients with the best services ever and to give relevant feedbacks to the frequently asked questions. Your smile is our ultimate sophostication. We want to serve you to our best knowledge and effort so that you will be satisfied fully. This is a full time bussiness so our clients have nothing to worry about</p></b>
  <a class="btn btn-warning text-dark" href="#section1" id="top">Contact Us</a>
</div>

<div class="container">
    <hr>
    <h2 class="text-warning">The <b>Journey</b></h2>
    <p>We’ve covered the ins, outs, ups, and downs of the industry since the company started. The journey has been tough but we are glad that in the long run,it was successful. our biggest challenge back in the days was gaining trust from our beloved clients. The company was still under creation and we had already started advertising ourselves to the market. Gaining trust was so hard but also at the same time we were trying harder to fit in the industry by learning from other companies. Right now were are the biggest company dealing with events booking in the country and this has always been our dream since.</p>
    <h2 class="text-warning">The <b>Big Step</b></h2>
    <p>We gained the trust that we were yearning for and we have improved from learning day by. So, if you want to make your event memorable , colourful , and also save money, we’ve got you covered. We assure you a smile. For us, it’s about making your event a beautiful scene.</p>   
</div>

</div>

 <!--team content
================================================== -->

<div class="py-5 team4">
  <div class="container">
      <div class="row justify-content-center mb-4">
        <div class="col-md-7 text-center">
          <h3 class="mb-3 text-warning">Experienced & Professional Team</h3>
          <h6 class="subtitle">You can relay on our amazing features list and also our customer services will be great experience for you without doubt and in no-time</h6>
        </div>
      </div>
      <div class="row justify-content-center">
        <!-- column  -->
        <div class="col-lg-3 mb-4">
            <div class="col-md-12 text-center">
              <div class="pt-2">
                <h5 class="mt-4 font-weight-medium mb-0"></h5>
                <h6 class="subtitle mb-3 text-warning">Ceo, Founder</h6>
                <h5 class="mt-4 font-weight-medium mb-0">Charity</h5>
                <p>We appreciate the support and trust that you have given us and We promise to deliver the best services .</p>
                <p>
                  <a href="https://www.facebook.com/Polka-planners-109794354256141" target="_blank" class="fa fa-facebook"></a>
                  <a href="#" class="fa fa-twitter"></a>
                  <a href="https://www.instagram.com/polka_planners/" target="_blank" class="fa fa-instagram"></a>
                </p>
              </div>
            </div>
          </div>
       
       
          <div class="col-lg-3 mb-4">
              <div class="col-md-12 text-center">
                <div class="pt-2">
                  <h5 class="mt-4 font-weight-medium mb-0">Bada Komora</h5>
                  <h6 class="subtitle mb-3 text-warning">Site Developer</h6>
                  <p>We are commited to deliver our best services to all our clients and achieve all our goals.</p>
                  <p>
                    <a href="https://twitter.com/ke_bada" target="_blank" class="fa fa-twitter"></a>
                    <a href="#" class="fa fa-instagram"></a>
                    <a href="https://api.whatsapp.com/send?phone={{0759621394}}" target="_blank" class="fa fa-whatsapp"></a>
                    <a href="tel:075 962-1394" class="fa fa-phone"></a>
                  </p>
                </div>
              </div>
            </div>
    </div>
  </div>
  </div>

<!-- end content
================================================== -->


        <div class="container" id="section1">
            <div class="jumbotron-fluid">
              This week features the most trending news and events on our blog table. Be sure to check our calender for more updates. Remember, we value your response
             <br><br>
             <center><h2 class="text-warning">Contact Us</h2></center>
             <br>
            <div class="container" style="background-color: lavender;" >
            <div class="row">

            <div class="col-lg-4">
                <form action="support.php" method="POST">
                  <br>
                  <?php if(isset($_SESSION['success'])) { ?>
                  <div class="alert alert-primary alert-dismissible fade show" role="alert">
                  <?php echo $_SESSION['success']; ?>
                  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                  </button>
                  </div>
                    <?php unset($_SESSION['success']); }
                  if(isset($_SESSION['error'])) { ?>
                  <div class="alert alert-danger alert-dismissible fade show" role="alert">

                  <?php echo $_SESSION['error']; ?>
                  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                  </button>
                  </div>

                  <?php
                  unset($_SESSION['error']); }
                  ?>
                  <h3>Leave a Message</h3>
                  <input type="text" class="name" name="name" id="" placeholder="Enter Name">
                  <br><br>
                  <input type="email" class="email" name="email" id="" placeholder="Email Address">
                  <br><br>
                  <input type="text" class="email" name="subject" id="" placeholder="Enter Subject">
                  <br><br>
                  <textarea name="body" cols="30" rows="10" placeholder="Message Body"></textarea>
                  <br>
                  <button class="btn btn-outline-warning text-muted" type="submit" name="submit" >SEND</button>
               </form>
            </div>

            <div class="col-lg-4">
            <br>
               
                  <div class="mapouter">
                  <h3> Our Location</h3>
                    <div class="gmap_canvas">
                      <iframe width="400" height="400" id="gmap_canvas" src="https://maps.google.com/maps?q=ruiru&t=&z=13&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe>
                      <a href="https://yt2.org"></a><br>
                    </div>
                  </div>
            </div>
               
            </div>
           </div>
          </div>
          <br>
        </div>
  
 <!-- foooter
================================================== -->
<div class="container-fluid bg-warning">
  <footer class="pt-4 my-md-5 pt-md-5 border-top">
      <div class="row">
        <div class="col-12 col-md">
          <img class="mb-2 logo" src="../images/logo.jpg" alt="" width="85" height="75">
          <small class="d-block mb-3 text-muted">follow us</small>
          <small class="d-block mb-3">
              <a href="https://www.facebook.com/Polka-planners-109794354256141" target="_blank" class="fa fa-facebook"></a>
              <a href="#" class="fa fa-twitter"></a>
              <a href="https://www.instagram.com/polka_planners/" target="_blank" class="fa fa-instagram"></a>
          </small>
        </div>
        <div class="col-6 col-md">
          <h5 class="text-muted">Features</h5>
          <ul class="list-unstyled text-small">
            <li><a class="text-muted" href="#">Random feature</a></li>
            <li><a class="text-muted" href="#">Team feature</a></li>
            <li><a class="text-muted" href="../admin/sections/reg.php">for developers</a></li>
          </ul>
        </div>
        <div class="col-6 col-md">
          <h5 class="text-muted">Resources</h5>
          <ul class="list-unstyled text-small">
            <li><a class="text-muted" href="#">Resource</a></li>
            <li><a class="text-muted" href="#">Other resources</a></li>
            <li><a class="text-muted" href="#">New resources</a></li>
          </ul>
        </div>
        <div class="col-6 col-md">
          <h5 class="text-muted">About</h5>
          <ul class="list-unstyled text-small">
            <li><a class="text-muted" href="#">Team</a></li>
            <li><a class="text-muted" href="#">Locations</a></li>
            <li><a class="text-muted" href="#">Privacy</a></li>
          </ul>
        </div>
      </div>
    </footer>
    <div class="footer">
      <small class="d-block mb-3 text-muted">&copy; 2020 POLKER</small>
    </div>
  </div>
  <!-- end foooter
  ================================================== -->
</body>
</html>