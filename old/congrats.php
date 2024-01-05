<?php 
include('config.php');
if(isset($_GET['_i'])){
  $id = $_GET['ll'];
    $sql = "UPDATE order_details SET transfer = 1 WHERE id = '$id'";
    mysqli_query($conn,$sql);
}
$fr = "admin@ourhousehelp.com";
$email = "ogwarajennifer@gmail.com";
$to = $email;
$from = $fr; 
$fromName = $fr; 
$subject = "New order from ourhousehelp";
$date = date("l h:i");
$date = date('l h:i',strtotime('+1 hour',strtotime($date)));
$htmlContent ="someone just placed an order. Time of placement $date";
$mail=mail($to, $subject, $htmlContent);
if($mail){
    $to = "okoroaforvictor42@gmail.com";
    $subject = "New order from ourhousehelp";
    $date = date("l h:i");
    $htmlContent ="someone just placed an order. Time of placement $date";
    $mail=mail($to, $subject, $htmlContent);
 if($mail){
    $to = "ourhousehelps@gmail.com";
    $subject = "New order from ourhousehelp";
    $date = date("l h:i");
    $htmlContent ="someone just placed an order. Time of placement $date";
    $mail=mail($to, $subject, $htmlContent);
    if($mail){
        echo ' ';
    }
}
}
?>
<!doctype html>
<html lang="en">
  <head>
    <title>Our House Help Services ~ Everyday chores handled</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">   
    <link href="https://fonts.googleapis.com/css2?family=Jost:wght@400;700;900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="fonts/icomoon/style.css">
    <link rel="stylesheet" href="css/bootstrap/bootstrap.css">
    <link rel="stylesheet" href="css/jquery-ui.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="css/jquery.fancybox.min.css">
    <link rel="stylesheet" href="css/bootstrap-datepicker.css">
    <link rel="stylesheet" href="fonts/flaticon/font/flaticon.css">
    <link rel="stylesheet" href="css/aos.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="icon" href="images/just-log.png">
    <style>
      body{
          background-image:url('images/bg-dark.jpg');
          background-size: cover;
      }
      .section-title{
        color:#2D315E !important;
      }
      input{
        border-style: double;
        border:2px rgb(176, 178, 180) double !important;
        border-radius: 3px !important;
      }
      input::placeholder{
        opacity: 0.3 !important;
      }
      textarea{
        border-style: double;
        border:2px rgb(176, 178, 180) double !important;
        border-radius: 3px !important;
      }
      select{
        border-style: double;
        border:2px rgb(176, 178, 180) double !important;
        border-radius: 3px !important;
      }
      label{
        opacity: 0.3 !important;
      }
      textarea::placeholder{
        opacity: 0.3 !important;
      }
    </style>
  </head>
<body>
  <div class="site-section">
        <div class="container">
          <div class="row ">     
            <div class="col-md-3 mb-3 mb-lg-0 col-lg-3 text-center">     
               <!-- Left Space -->
            </div>

            <div class="col-md-12 mb-6 mb-lg-0 col-lg-6 text-center" style="background:white !important;border-radius:10px;text-align:center">
              <div class="blog_entry service-card" >
                <br><span class="icon-thumbs-up" style="font-size: 100px;"></span>
                <h2 class=" text-center mb-3" style="color:#2D315E">
                  You've successfully placed your order      
                </h2>
                <p style="color:black">
                  You would be contacted right away 
                </p>
                <p style="color:black">
                  Clients who have selected cleaning, should have the neccessary materials needed. <br>
                  e.g Mop, Broom, Hand Towels, Detergent, Hypo, Harpic, Water
                </p>
              </div>
              <?php if(isset($_GET['_i'])){?>
                <div style="color:#9C3438">
              SEND YOUR PROOF OF PAYMENT TO THIS WHATSAPP LINE       
                <b>09091144474</b><br> 
              </div>

                <?php } ?>
              <div style="color:#9C3438">
                << HELP LINES >>        
                <br><b>07066663868</b> | <b>09091144474</b><br> 
              </div>
              <div class="text-center">
                <a href="index.php#home" class="btn btn-primary">
                  Proceed to HOME
                </a>
                <br><br>
              </div>
            </div>
          </div>
          
          <div class="col-md-3 mb-3 mb-lg-0 col-lg-3 text-center">  
              <!-- Right Space -->       
          </div>
          </div>
  </div>
</body>
<script src="js/jquery-3.3.1.min.js"></script>
  <script src="js/jquery-ui.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/owl.carousel.min.js"></script>
  <script src="js/jquery.easing.1.3.js"></script>
  <script src="js/aos.js"></script>
  <script src="js/jquery.fancybox.min.js"></script>
  <script src="js/jquery.sticky.js"></script>
  <script src="js/isotope.pkgd.min.js"></script>
  <script src="js/main.js"></script>
</body>
</html>