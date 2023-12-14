<?php 
include('config.php');
if(isset($_GET['l_'])){
    $l_id = $_GET['l_'];
    $sql = "SELECT * FROM order_details WHERE id = '$l_id'";
    $run = mysqli_query($conn,$sql);
    $tins = mysqli_fetch_all($run,MYSQLI_ASSOC);
    $am = $tins[0]['price'];
    $em = $tins[0]['email'];
    $phone = $tins[0]['phone'];
}else{
    echo 'sq';
}
?>

<!doctype html>
<html lang="en">
  <head>
     
<!-- Google tag (gtag.js) -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-DQEH67HQCS"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-DQEH67HQCS');
</script>

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
    </style>
     <style>
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
    <div style="display:none">
        Ourhousehelp services offers proffesional cleaning, laundry and housekeeping services at affordable rates. 
    </div>
    <div style="display:none">
        Our house help services offers proffesional cleaning, laundry and housekeeping services at affordable rates. 
    </div>
<div class="site-section">
      <div class="container">
        <div class="row ">
          
        <div class="col-12 mb-5 position-relative">
            <h2 class="section-title text-white text-center mb-5" style="color:white !important">Select a method of payment</h2>
          </div>
          <div class="col-md-6 mb-5 mb-lg-0 col-lg-4 text-center">
        
          </div>

          <div class="col-md-6 mb-5 mb-lg-0 col-lg-4 text-center" style="background:white !important">
            <div class="blog_entry service-card" >
            <form id="paymentForm" class="form">
            <div class="row mb-4">
               
                
                <?php if($am != 'rex'){?>
                <div class="form-group col-12 text-left">
                <br>    
                  <p for="" style="color:#9C3438;opacity:1">Amount to pay/transfer</p>
                   <input type="tel" name="amount" id="amount" value="<?php echo $am ?>" style="background-color: #9C3438;color:white" class="form-control" > 
                </div>  
                <?php }?>
                  
              </div>
              <div class="row mb-4">
                <div class="form-group col-12 text-left" >
                    <label for="">Email</label>
                  <input type="email" id="email-address" value="<?php echo $em ?>" class="form-control" required">
                </div>
              </div>
              <div class="row mb-4">
                <div class="form-group col-12 text-left">
                    <label for="">Phone Number</label>
                  <input type="text" id="phone-number" value="<?php echo $phone ?>" class="form-control" required">
                </div>
              </div>

              <p for="" style="color:#9C3438;opacity:1">Please confirm your contact details are correct as you would be contacted through them</p>
              <div class="row ">
                <div class="col-md-12 text-center">
                <!--<button type="submit" onclick="payWithPaystack()" class="btn btn-primary" style="color:white;"> Pay with card </button>-->
                  <!-- <input type="submit" onclick="payWithPaystack()" > -->
                   <!-- Pay with card
                </input> -->
                <!--  <br><br>-->
                <!--  <p class="text-center">-->
                <!--    OR-->
                <!--</p>-->
                </div>
            
              
                <div class="col-md-12 text-center">
                  <a href="#!" data-toggle="modal" class="btn-primary btn" data-target="#details" style="color:white;" >
                    Pay with transfer
                  </a>
                </div>
                </form>
              </div>
              <br><br>  
              
         
            </div>
          </div>

          <div class="col-md-6 mb-5 mb-lg-0 col-lg-4 text-center">
          
          </div>
        </div>
      </div>
</div>

<script src="https://js.paystack.co/v1/inline.js"></script> 

<script>
  const paymentForm = document.getElementById('paymentForm');
paymentForm.addEventListener("submit", payWithPaystack, false);
function payWithPaystack(e) {
  e.preventDefault();

  let handler = PaystackPop.setup({
    key: 'pk_test_3be61ff9eef394436fdc0bf4c0a2b27bf3c9b258', // Replace with your public key
    email: document.getElementById("email-address").value,
    amount: document.getElementById("amount").value * 100,
    ref: ''+Math.floor((Math.random() * 1000000000) + 1), // generates a pseudo-unique reference. Please replace with a reference you generated. Or remove the line entirely so our API will generate one for you
    // label: "Optional string that replaces customer email"
    onClose: function(){
      alert('Window closed.');
    },
    callback: function(response){
      let message = 'Payment complete! Reference: ' + response.reference;
      alert(message);
      add(<?php echo $l_id?>);
    }
  });

  handler.openIframe();
}
</script>
<?php
include("function.php");
?>

<div class="modal fade" id="details" tabindex="-1" role="dialog" aria-labelledby="details" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel" style="color: #9C3438">Recepient Info</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
          <div><img src="images/logo.png" width="20%"></div>
        Transfer 
        <?php 
        if($am != 'rex'){?>
        <b>₦<?php echo number_format($am)  ?></b>
        <?php }else{
        echo 'negotiated amount' ;
        }
        ?>
        to 
        <b>0051480410</b>(PIK & CREST Dyanamic Concepts Limited | GTbank)
        <p></p>
      <!--   <b style="color:#9C3438">OR</b>
        <br>
        Transfer <b>₦<?php //echo number_format($am)  ?></b> to 
        <b>88828238381</b>(Justin lola | Access) -->
        <p></p>
     <p>** Click on confirm when the transfer is successful</p>
      </div>
      <div class="modal-footer">
        <!-- <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button> -->
        <a href="congrats.php?_i='XsmDJ'&&ll=<?php echo $l_id?>" name="save" class="text-white btn btn-primary">Confirm </a>
        <br>
</form>
      </div>
<div style="background: #9C3438;color: white;text-align: left;">
        <span style="margin-left: 15px">  Help lines: 07066663868, 09091144474</span>
        </div>
    </div>
  </div>
</div>


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