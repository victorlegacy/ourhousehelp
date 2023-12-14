<?php 
include('config.php');
if (isset($_POST['submit'])) {
     
       $apart = $_POST['apartment'];
$range = $_POST['price_range'];
        
        $sql = "INSERT INTO live_in(apart,price_range) VALUES('$apart','$range')";
        mysqli_query($conn,$sql);
        $one_id = mysqli_insert_id($conn);
         

}else{
  header('loction:index.php');
}

if(isset($_POST['save'])){
  
  $fname = $_POST['fname'];
  $lname = $_POST['lname'];
  $email = $_POST['email'];
  $phone = $_POST['phone'];
  $state = $_POST['state'];
  $address = $_POST['address'];
  $landmark = $_POST['landmark'];
  $one_id = $_POST['one_id'];
  $apart = $_POST['apart'];
  $range = $_POST['range'];
  $sql = "UPDATE live_in SET fname = '$fname', lname = '$lname', email = '$email', phone = '$phone', state = '$state', address = '$address', landmark = '$landmark', price_range = '$range' WHERE id ='$one_id' ";
  if(mysqli_query($conn,$sql)){
  
           
     echo '<script>window.location="thank.php";</script>';
    
}
}
?>
<?php 
include('header.php');
?>
<style>
    .sup{
        background:#9C3438;color:white;font-size:10px;padding:3px;
        border-top-left-radius: 5px;
        border-bottom-right-radius: 5px;
    }
    li{
        list-style-type:none;
    }
</style>
<link rel="icon" href="images/just-log.png">
<link rel="stylesheet" href="css/w3.css">
  <div class="  overlay bg-light" style="background-image: url('images/bg-2.jpg');background-size:cover;height:40% !important" id="home-section">
      <div class="container">
        <div class="row justify-content-center">

          <div class="col-12 text-center align-self-center text-intro">
            <div class="row justify-content-center">
              <div class="col-lg-8">
                <!-- <h1 class="text-white" data-aos="fade-up" data-aos-delay="">Lets take care of your everyday home & office chores</h1>
                <p class="lead  " data-aos="fade-up" style="color: #FFF112;" data-aos-delay="100">Search for a service to get started</p>
               <p data-aos="fade-up" data-aos-delay="200"><a href="#services-section" class="btn smoothscroll btn-primary">Our Services</a></p> -->
 <br><br><br><br><br><br>
                <div class="col-lg-12 text-center" style="padding: 30px;">
                   <div  data-aos="fade-up" data-aos-delay="200">
                  
                    <!-- <input type="text" class="inp" placeholder="Search a service" name="" id=""> -->
                   <h3 class="" style="color:white"> HOME > ONE-TIME CLEANING > DETAILS FORM</h3>
                    </div>
                  </div>
                  <br><br><br><br><br><br>
              </div>
            </div>
          </div>
            
        </div>
      </div>

    </div>  



    <div class="site-section">
      <div class="container">
        <div class="row ">
          
        <div class="col-12 mb-5 position-relative">
            <h2 class="section-title text-center mb-5">Lets get your details
            
            </h2>
          
          </div>
          <div class="col-md-6 mb-5 mb-lg-0 col-lg-4 text-center">
        
          </div>

          <div class="col-md-6 mb-5 mb-lg-0 col-lg-4 text-center">
            <div class="blog_entry service-card">
            <form action="" method="POST" class="form">
              <input type="hidden" name="apart" value="<?php echo $apart ?>">
              <input type="hidden" name="range" value="<?php echo $range ?>">
              <input type="hidden" name="one_id" value="<?php echo $one_id ?>">
            <div class="row mb-4">
                
                <div class="form-group col-12 text-left">
                  <p for="" style="color:#9C3438;opacity:1">Price (Naira)</p>
                <?php if($package != 'rex'){ ?>
                   <input  value="<?php echo $range ?>" id="amount" readonly style="background-color: #9C3438;color:white" name="phone" class="form-control" readonly> 
                   <?php }else{ ?>
                    <input  value="<?php echo "negotiable" ?>" id="amount" readonly style="background-color: #9C3438;color:white" name="phone" class="form-control" readonly> 
                   <?php } ?>
                </div>
              </div>
              <div class="row mb-4">
                <div class="form-group col-6">
                  <input type="text" class="form-control" name="fname" required placeholder="First name">
                </div>
                <div class="form-group col-6">
                  <input type="text" class="form-control" name="lname" required placeholder="Last name">
                </div>
              </div>

              <div class="row mb-4">
                <div class="form-group col-12">
                  <input type="email" id="email-address" name="email" required onchange="update_email()" class="form-control" placeholder="Email address">
                </div>
              </div>
              <div class="row mb-4">
                <div class="form-group col-12">
                  <input type="tel" minlength="11" maxlength="11" required id="phone" onchange="update_phone()" name="phone" class="form-control" placeholder="Phone Number">
                </div>
              </div>
          
            <div class="row mb-4">
                <div class="form-group col-12" style="text-align:left">
                    <label for="" >State of residence</label>
                  <select name="state" required class="form-control" placeholder="State of residence">
                      <option value="abuja">Abuja</option>
                      <option value="abuja">Lagos</option>
                      <option value="abuja">Port Harcourt</option>
                  </select>
                  <!--<input  id="" name="state" required class="form-control" placeholder="State of residence" />-->
                </div>
              </div>
              <div class="row mb-4">
                <div class="form-group col-12">
                  <textarea  id="" name="address" cols="30" rows="2" required class="form-control" placeholder="Address"></textarea>
                </div>
              </div>
              <div class="row mb-4">
                <div class="form-group col-12">
                  <input type="text" name="landmark" class="form-control" required placeholder="Landmark close to address(optional)">
                </div>
              </div>
              


              <div class="row ">
                <div class="col-md-6 text-center">
                  <a href="#!" data-toggle="modal" data-target="#details" class="btn btn-primary" value="">
                    Place Order
                  </a>
                </div>
                
                
              </div>
              <div >
                <br><br>
                  <h5>Powered by</h5>
<img src="images/logo.png" width="40%">    
                </div>
         
            </div>
          </div>

          <div class="col-md-6 mb-5 mb-lg-0 col-lg-4 text-center">
          
          </div>
        </div>
      </div>
</div>



    <?php 
include('footer.php');

?>
<script>
  function update_email(){
    var ema = document.getElementById('email-address').value;
  document.getElementById('r_ema').innerHTML = ema;
  }

   function update_phone(){
    var phone = document.getElementById('phone').value;
  document.getElementById('r_ph').innerHTML = phone;
  }
function days(){
  var select = document.getElementById('day');
var text = select.options[select.selectedIndex].text;
document.getElementById('r_day').innerHTML = text;

}
function times(){
  var select = document.getElementById('time');
var text = select.options[select.selectedIndex].text;
document.getElementById('r_time').innerHTML = text;
console.log(text);
console.log('sdw');
}
</script>


<div class="modal fade" id="details" tabindex="-1" role="dialog" aria-labelledby="details" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel" style="color: #9C3438">Description</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <p>You have ordered for <b>Live-in</b> service.
        
        <!--This service would be completed in 1-3 days depending on the nature of the building.-->
        </p>
        <p>More information would be delivered to you through your provided phone-number(<span id="r_ph"></span>) and E-mail(<span id="r_ema"></span>)</p>
      </div>
      <div class="modal-footer">
        <!-- <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button> -->
        <button type="submit" name="save" class="text-white btn btn-primary">I understand, continue to payment</button>
        <br>
</form>
      </div>
<div style="background: #9C3438;color: white;text-align: left;">
        <span style="margin-left: 15px">  Help lines: 07066663868, 09091144474</span>
        </div>
    </div>
  </div>
</div>
<script src="https://js.paystack.co/v1/inline.js"></script> 
