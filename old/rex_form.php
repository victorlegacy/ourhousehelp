<?php 
include('config.php');
if (isset($_POST['submit'])) {
    // if(isset($_POST['loca'])){
    //     if($_POST['loca'] != 'abuja'){
    //      $add = 4000;
    //     }else{
    //         $add= 0;
    //     }
    // }else{
    //   $add = 0;
    // }
 $service = $_POST['service'];
 $package = $_POST['package'];
 $order_id = $_POST['order'];

}else{
  header('loction:index.php');
}

if(isset($_POST['save'])){
  $name = $_POST['name'];
  $fullname = $_POST['fullname'];
  // $ap_id = $_POST['ap_id'];
 $order_id = $_POST['order_id'];
  $service = $_POST['service'];
  $package = $_POST['package'];     
  $day = $_POST['day'];
  $time = $_POST['time'];
  $gender = $_POST['gender'];
   $state = $_POST['state'];
  $address = $_POST['address'];
  $landmark = $_POST['landmark'];
  $price = "rex";
  $email = $_POST['email'];
  $phone = $_POST['phone'];
  $sql = "INSERT INTO order_details(first_name,full_name,order_id,email,phone,service,package,day,time,gender,state,address,landmark,price) VALUES('$name','$fullname','$order_id','$email','$phone','$service','$package','$day','$time','$gender','$state','$address','$landmark','$price')";
  if(mysqli_query($conn,$sql)){
    $last_id = mysqli_insert_id($conn);
    echo "<script>window.location='pay.php?l_= $last_id'</script>";
  }
}
include('header.php');
// echo $room;
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
                   <h3 class="" style="color:white"> HOME / PACKAGES / DETAILS FORM</h3>
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
            <h2 class="section-title text-center mb-5">Lets get your details</h2>
          </div>
          <div class="col-md-6 mb-5 mb-lg-0 col-lg-4 text-center">
        
          </div>

          <div class="col-md-6 mb-5 mb-lg-0 col-lg-4 text-center">
            <div class="blog_entry service-card">
            <form action="" method="POST" class="form">
                
              <!-- <input type="hidden" name="first" value="<?php echo $first?>">
              <input type="hidden" name="second" value="<?php echo $second?>">
              <input type="hidden" name="ap_id" value="<?php echo $ap_id ?>">
                <input type="hidden" name="day" value="<?php echo $day ?>"> -->
                <input type="hidden" name="order_id" value="<?php echo $order_id; ?>">
       
              <div class="row mb-4">
                <div class="form-group col-6">
                  <input type="text" class="form-control" name="name" required placeholder="First name">
                </div>
                <div class="form-group col-6">
                  <input type="text" class="form-control" name="fullname" required placeholder="Last name">
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
                <div class="form-group col-12" style="text-align: left;">
                  <input type="hidden" value="<?php echo $package ?>" name="package">
                  <input type="hidden" value="<?php echo $service ?>" name="service">
                  <input type="hidden" value="<?php echo $price ?>" name="price">
                </div>
              </div>
              <div class="row mb-4">
                    <div class="form-group col-12" style="text-align: left;">
                  <label for="" >Choose a time range</label>
                  <select id="time" onchange="times()" required name="time" class="form-control" placeholder="Subject of the message">
                  <option value="" disabled selected hidden>choose time</option>  
                      <option value="8am">8:30AM - 6:00PM</option>
                    <!--<option value="2pm">2PM - 6:00PM</option>-->
                  </select>
                </div>        
              </div>
              <div class="row mb-4">
                <div class="form-group col-12" style="text-align:left">
              <label for="" >Preferred staff gender</label>
              <select id="gender" required name="gender" class="form-control" placeholder="Gender">
                  <option value="any" >Any Gender</option>  
                  <option value="male">Male</option>
                    <option value="female">Female</option>
                  </select>
                  </div>
                  </div>
            <div class="row mb-4">
                <div class="form-group col-12">
                  <input  id="" name="state" required class="form-control" placeholder="State of residence" />
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
        <p>You have ordered for <b><?php echo strtoupper($service) ?></b> services<?php if($package == 'cheryl_2' OR $package == 'cheryl_3'){ echo 's' ;} ?> under the <b><?php  if($package == 'cheryl_2' OR $package == 'cheryl_3'){ echo 'CHERYL' ;}else{echo strtoupper($package);} ?> </b>package.    
        <br>
        Service will be delivered <b><?php echo 20 ?></b> time(s) a month on 
        <?php if($package == 'cheryl' OR $package == 'cheryl_2' OR $package == 'cheryl_3'){?>Mondays - Fridays<?php }else{ echo "selected days";} ?> by <span id="r_time">8AM -11:30AM </span>
        
        </p>
        <p>You would be contacted through your provided phone-number(<span id="r_ph"></span>) and E-mail(<span id="r_ema"></span>)</p>
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
<?php 
if($_POST['service'] != 'all' AND $_POST['service'] != 'multiple'){
 ?>

<div id="ele" class="w3-modal" style="color:rgb(37, 35, 35)rgb(37, 35, 35);display:block;z-index:99">
    <div class="w3-modal-content w3-animate-right w3-card-4"  style="width:30rem;border-radius:2px">
      <header class="w3-container"> 
        <span onclick="document.getElementById('ele').style.display='none'" 
        class="w3-button w3-display-topright">&times;</span>
        <!-- <h5 class="orange-text" style="color:black"><?php echo  $userd ?> ~ <span style="font:inherit;color:#9C3438"><?php  echo $serv ?></span></h5> -->
      </header>
      <div class="w3-container" style="margin-left: 15px;">
          <hr>
        <!-- <label for="">Order Specification</label> -->
        <div class="">
            <h5>Hello,</h5>
           
            <p>This is your current order on <?php echo $package ?> package</p>
            <h4>1 service<b> (<?php echo $service ?>)</b> at ₦<b><?php echo $price ?></b></h4>
            <p>Why not try out this better deal</p>
            <?php if ($package == 'cheryl') {?>
            <h4>2 services<b> (e.g Cleaning and Laundry)</b> as low as ₦<b><?php echo '12'.','.'000' ?></b> per month
           <!--   - ₦<b><?php // echo //30000 ?></b> --> 
           </h4>
            <?php }elseif($package == 'jaden'){ ?>
              <h4>2 services<b> (e.g Cleaning and Laundry)</b> as low as ₦<b><?php echo '18'.','.'000' ?></b> per month
             <!--   - ₦<b><?php //echo// 35000 ?></b> -->
             </h4>
              <?php }else{?>
            <h2></h2>
              <?php }?>
              <p>Or the BEST deal</p>
            <?php if ($package == 'cheryl') {?>
            <h4>3 services<b> (e.g Cleaning, Laundry & House Help)</b> as low as ₦<b><?php echo '15'.','.'000' ?></b> 
              per month
           <!--   - ₦<b><?php // echo //30000 ?></b> -->
           </h4>
            <?php }elseif($package == 'jaden'){ ?>
              <h4>3 services<b> (e.g Cleaning, Laundry & House Help)</b> as low as ₦<b><?php echo '20'.','.'000' ?></b> per month
             <!--   - ₦<b><?php //echo// 35000 ?></b> -->
             </h4>
              <?php }else{?>
            <h2></h2>
              <?php }?>
              <a href="custom_package.php"
             style="color:#9C3438;text-decoration:underline">
             Get better deal</a>        
        </div>
        <br><br>  </div>
      <footer style="text-align:right">
        <div>
        <p class="right">
          <a onclick="document.getElementById('ele').style.display='none'" class="btn" href="#!" 
              style="color:white;background:#9C3438;margin-right:15px">
              Continue with current deal
          </a>  
        </p>
      </div>
      <br>

      </footer>
    

    </div>
  </div>
  <?php } ?>