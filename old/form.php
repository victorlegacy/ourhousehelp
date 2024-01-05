<?php 
include('config.php');
session_start();
  if(isset($_SESSION['ren'])){
        include('renew_data.php');     
    }
else{
    $fnam = "";
        $lnam = "";
          $emma = "";
        $phon = "";
          $add = "";
        $land = ""; 
}

if (isset($_POST['submit'])) {
    if(isset($_POST['loca'])){
        if($_POST['loca'] != 'abuja'){
        $add = 7900;
        }else{
            $add= 7900;
        }
    }else{
      $add = 0;
    }
  $service = $_POST['service'];
 $package = $_POST['package'];
  if($_POST['service'] == 'cleaning'){
    //   temporary to make the jaden_cleaning run without ap_description 
    //   if($package != 'jaden'){
     if(isset($_POST['room'])){
      $room = $_POST['room'];
      $parlor =  $_POST['parlor'];
      $toilet = $_POST['toilet'];
     $kitchen = $_POST['kitchen'];
     $veranda = $_POST['veranda'];
     $passage =  $_POST['passage'];
     $staircase =  $_POST['staircase'];
     $a_parlor =  $_POST['a_parlor'];
     $s_room =  $_POST['s_room'];
     // echo 'kitchenette'.' - '. $kitchenette =  $_POST['kitchenette'];
     $compound =  $_POST['compound'];
     $g_room =  $_POST['g_room'];
     if($room == 1500){
     $h_keeping = 4000;
    }else{
      $h_keeping = 3000;
    }
    if(isset($_POST['self'])){
     $price = 15900;   
    }else{
     $price = $room + $parlor + $toilet + $kitchen + $veranda + $passage+ $staircase + $a_parlor + $s_room + $compound +$g_room + $h_keeping+$add;
     if($price < 13900){
         $price = 13900;
     }
    }
     if($package == 'jaden'){
         $price = $price + 5000+5000;
     }
     $sql = "INSERT INTO ap_desc(parlor,room,toilet,kitchen,veranda,passage,staircase,a_parlor,study,compound,g_room) VALUES('$parlor','$room','$toilet','$kitchen','$veranda','$passage','$staircase','$a_parlor','$s_room','$compound','$g_room')";
           mysqli_query($conn,$sql);
           $ap_id = mysqli_insert_id($conn);
     }
         
         
    //if apartment is a selfcon or a 1 room apart          
   if(isset($_POST['self'])){
       if($_POST['self'] == '2'){
     $price = 17000;   
       }else{
        $price = 15000;      
       }
       //if package is jaden and its a selfcon or 1 room apart
       if($package == 'jaden'){
           $price = $price+5000+5000;
       }
    }
    }else{

  //  $room = $_POST['room'];
  $sql = "SELECT * FROM pricing WHERE service = '$service' AND package ='$package'";
  $run = mysqli_query($conn,$sql);
  $price = mysqli_fetch_all($run,MYSQLI_ASSOC);
   
  $price = $price[0]['price'] + $add;
  
    }

if ($package == 'cheryl' OR $package == 'cheryl_2' OR $package == 'cheryl_3') {
  $num = 4;
}elseif($package == 'jaden' OR $package == 'jaden_2' OR $package == 'jaden_3'){
  $num = 12;
}else{
 // $num = 20;
}


}else{
  header('loction:index.php');
}

if(isset($_POST['save'])){ 
  $name = $_POST['name'];
  $fullname = $_POST['fullname'];
  $ap_id = $_POST['ap_id'];
  $service = $_POST['service'];
  $package = $_POST['package'];
  $day = $_POST['day'];
  $time = $_POST['time'];
  $gender = $_POST['gender'];
   $state = $_POST['state'];
  $address = $_POST['address'];
  $landmark = $_POST['landmark'];
  $bday = $_POST['bday'];
  $bmonth = $_POST['bmonth'];
  
  $price = $_POST['price'];
  $email = $_POST['email'];
  $phone = $_POST['phone'];
  if(isset($_POST['f_day'])){
    $f_day = $_POST['f_day'];
    $s_day = $_POST['s_day'];
    $t_day = $_POST['t_day'];
  }
  if(isset($_POST['saturday'])){
    $fi_week = $_POST['first_week'];
    $sec_week = $_POST['second_week'];
    $saturday = $fi_week.'_'.$sec_week;
      
  }else{
      $saturday = "no";
  }
  $sql = "INSERT INTO order_details(first_name,full_name,ap_id,email,phone,service,package,day,time,gender,state,address,landmark,price,saturday,bday,bmonth) VALUES('$name','$fullname','$ap_id','$email','$phone','$service','$package','$day','$time','$gender','$state','$address','$landmark','$price','$saturday','$bday','$bmonth')";
  if(mysqli_query($conn,$sql)){
        $last_id = mysqli_insert_id($conn);
      if(isset($_SESSION['ren'])){
          $i_d = $_SESSION['ren'];
          $sq = "DELETE FROM order_details WHERE id = '$i_d'";
          mysqli_query($conn,$sq);
          session_destroy();
      }
      
      if($package == 'rex'){?>
            <script>window.location="thank.php";</script>
      <?php } 
  
    
      if($day = 'multiple'){
         $sqlee = "INSERT INTO days(order_id,f_day,s_day,t_day) VALUES('$last_id','$f_day','$s_day','$t_day')";
      mysqli_query($conn,$sqlee);
     
    }
    ?>
    <script>window.location="pay.php?l_=<?php echo $last_id?>";</script>
    <?php 
    
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
  <div class="  overlay bg-light" style="background-image: url('images/bg-2.jpg');background-size:cover;height:40% !important">
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
                   <h3 class="" style="color:white"> HOME > PACKAGES > DETAILS FORM</h3>
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
           <?php 
           if(isset($_SESSION['ren'])){
           ?>
            <h2 class="section-title text-center mb-5"> <?php echo $fnam?>,Update your details for the renewal
        
            
            </h2>
          <?php }else{ ?>
            <h2 class="section-title text-center mb-5">Lets get your details
            
            </h2>
          <?php } ?>
          </div>
          <div class="col-md-6 mb-5 mb-lg-0 col-lg-4 text-center">
        
          </div>

          <div class="col-md-6 mb-5 mb-lg-0 col-lg-4 text-center">
            <div class="blog_entry service-card">
            <form action="" method="POST" class="form">
              <input type="hidden" name="first" value="<?php echo $first?>">
              <input type="hidden" name="second" value="<?php echo $second?>">
              <input type="hidden" name="ap_id" value="<?php echo $ap_id ?>">
            <div class="row mb-4">
                
                <div class="form-group col-12 text-left">
                  <p for="" style="color:#9C3438;opacity:1">Price (Naira)</p>
                <?php if($package != 'rex'){ ?>
                   <input  value="<?php echo $price ?>" id="amount" readonly style="background-color: #9C3438;color:white" name="phone" class="form-control" readonly> 
                   <?php }else{ ?>
                    <input  value="<?php echo "negotiable" ?>" id="amount" readonly style="background-color: #9C3438;color:white" name="phone" class="form-control" readonly> 
                   <?php } ?>
                </div>
              </div>
              <div class="row mb-4">
                <div class="form-group col-6">
                  <input type="text" class="form-control" name="name" required placeholder="First name" value="<?php echo $fnam?>">
                </div>
                <div class="form-group col-6">
                  <input type="text" class="form-control" name="fullname" required placeholder="Last name" value="<?php echo $lnam?>">
                </div>
              </div>

              <div class="row mb-4">
                <div class="form-group col-12">
                  <input type="email" id="email-address" name="email" required onchange="update_email()" class="form-control" placeholder="Email address" value="<?php echo $emma?>">
                </div>
              </div>
              <div class="row mb-4">
                <div class="form-group col-12">
                  <input type="tel" minlength="11" maxlength="11" required id="phone" onchange="update_phone()" name="phone" class="form-control" placeholder="Phone Number" value="<?php echo $phon?>">
                </div>
              </div>
            <?php if($package != "rex"){ ?>
              <div class="row mb-4">
                <div class="form-group col-12" style="text-align: left;">
                  <?php if ($package == 'cheryl' OR $package == 'cheryl_2' OR $package == 'cheryl_3' ) { ?>
                  <label for="" >Choose a day for the service</label>  
                  <select id="day" onchange="days()" name="day" required class="form-control" placeholder="Subject of the message">
                    <!-- <option disabled value="">Choose a day for the service</option> -->
                      
                      <option value="" disabled selected hidden>--choose--</option>  
                      <option value="monday" >Monday</option>
                      <option value="tuesday" >Tuesday</option>
                      <option value="wednesday">Wednesday</option>
                      <option value="thursday">Thursday</option>
                      <option value="friday">Friday</option> 
                      <option value="sat_sun">Saturday or Sunday</option> 
                    </select>
                <?php }else{?>
                  <input type="hidden" name="day" value="multiple" >
                   <label for="" >Choose first day for service</label>  
                <select id="day" name="f_day" required class="form-control" placeholder="Subject of the message">
                  <!-- <option disabled value="">Choose a day for the service</option> -->
                  <option value="" disabled selected hidden>--choose--</option>  
                    <option value="monday" >Monday</option>
                    <option value="tuesday" >Tuesday</option>
                    <option value="wednesday">Wednesday</option>
                    <option value="thursday">Thursday</option>
                    <option value="friday">Friday</option> <option value="saturday">Saturday</option> <option value="sunday">Sunday</option> 
                  </select>
                   <label for="" >Choose second day for service</label>  
                <select id="day"   name="s_day" required class="form-control" placeholder="Subject of the message">
                  <!-- <option disabled value="">Choose a day for the service</option> -->
                  <option value="" disabled selected hidden>--choose--</option>  
                    <option value="monday" >Monday</option>
                    <option value="tuesday" >Tuesday</option>
                    <option value="wednesday">Wednesday</option>
                    <option value="thursday">Thursday</option>
                    <option value="friday">Friday</option> <option value="saturday">Saturday</option> <option value="sunday">Sunday</option> 
                  </select>
                   <label for="" >Choose third day for service</label>  
                <select id="day" name="t_day" required class="form-control" placeholder="Subject of the message">
                  <!-- <option disabled value="">Choose a day for the service</option> -->
                  <option value="" disabled selected hidden>--choose--</option>  
                    <option value="monday" >Monday</option>
                    <option value="tuesday" >Tuesday</option>
                    <option value="wednesday">Wednesday</option>
                    <option value="thursday">Thursday</option>
                    <option value="friday">Friday</option> <option value="saturday">Saturday</option> <option value="sunday">Sunday</option>
                  </select>
                <?php } ?>
                  <input type="hidden" value="<?php echo $package ?>" name="package">
                  <input type="hidden" value="<?php echo $service ?>" name="service">
                  <input type="hidden" value="<?php echo $price ?>" name="price">
                </div>
              </div>
              <div class="row mb-4">
                <div class="form-group col-12" style="text-align: left;">
                  <label for="" >Choose a time range</label>
                  <select id="time" onchange="times()" required name="time" class="form-control" placeholder="Subject of the message">
                  <option value="" disabled selected hidden>--choose--</option>  
                  <option value="8am">8AM - 12:00PM</option>
                    <option value="2pm">2PM - 6:00PM</option>
                  </select>
                </div>
              </div>
            <?php } ?>
            <div class="row mb-4">
                <span id="show_co">
                <input type='checkbox' id='show' name='saturday'  onclick='show_sat()'>
                </span>
                <label for="show">I want my service delivered on some saturdays</label>
               
                </div>
                   <div class="row mb-4" id="sat" style="display:none">
                <div class="form-group col-12" style="text-align: left;">
              <label for="first_week" >Select a week where service would be delivered on saturday</label>
              <select id="first_week" required name="first_week" class="form-control" placeholder="First Week">
                  <option selected value="firstweekmorning" >First Week at mornings(8:am)</option>  
                  <option value="firstweekafternoon" >First Week at Afternoon(2:pm)</option>  
                  <option value="secondweekmorning">Second Week at mornings(8:am)</option>
                  <option value="secondweekafternoon">Second Week at afternoon(2:pm)</option>
                    <option value="thirdweekmorning">Third Week at mornings(8:am) </option>
                    <option value="thirdweekafternoon">Third Week at afternoon(2:pm) </option>
                    <option value="fourthweekmorning">fouth Week mornings(8:am)</option>
                    <option value="fourthweekafternoon">fourth Week afternoon(2:pm)</option>
                
                  </select>
                      </div>
                  <div class="form-group col-12" style="text-align: left;">
                        <label for="second_week" >Select another week where service would be delivered on saturday</label>
                  <select id="second_week" required name="second_week" class="form-control" placeholder="Second Week">
                  <option  value="firstweekmorning">First Week at mornings(8:am)</option>  
                  <option value="firstweekafternoon">First Week at Afternoon(2:pm)</option>  
                  <option value="secondweekmorning">Second Week at mornings(8:am)</option>
                  <option selected value="secondweekafternoon">Second Week at afternoon(2:pm)</option>
                    <option value="thirdweekmorning">Third Week at mornings(8:am) </option>
                    <option value="thirdweekafternoon">Third Week at afternoon(2:pm) </option>
                    <option value="fourthweekmorning">fouth Week mornings(8:am)</option>
                    <option value="fourthweekafternoon">fourth Week afternoon(2:pm)</option>
                
                  </select>
                  </div>
                
                  </div>    
                   <script>
                   function show_sat(){
                    document.getElementById('sat').style.display = "block";
                    var sh = "<input type='checkbox' name='saturday' id='show' checked onclick='hide_sat()'>";
                    document.getElementById('show_co').innerHTML = sh;
                   }
                   function hide_sat(){
                    document.getElementById('sat').style.display = "none";
                    var sh = "<input type='checkbox' name='saturday'  id='show'  onclick='show_sat()'>";
                    document.getElementById('show_co').innerHTML = sh;
                   }
                </script>
            <div class="row mb-4">
                <div class="form-group col-12" style="text-align: left;">
              <label for="" >Preferred staff gender</label>
              <select id="gender" required name="gender" class="form-control" placeholder="Gender">
                  <option value="any" >Any Gender</option>  
                  <option value="male">Male</option>
                    <option value="female">Female</option>
                  </select>
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
                  <textarea  id="" name="address" cols="30" rows="2" required class="form-control" placeholder="Address"><?php echo $addr ?></textarea>
                </div>
              </div>
              <div class="row mb-4">
                <div class="form-group col-12">
                  <input type="text" name="landmark" class="form-control" required placeholder="Landmark close to address(optional)" value="<?php echo $land?>">
                </div>
              </div>
              <div class="row mb-4">
                <div class="form-group col-12" style="text-align:left">
                    <label for="" >Birthday month</label>
                    <select name="bmonth" class="form-control">
               <option value="01">January</option>
        <option value="02">February</option>
        <option value="03">March</option>
        <option value="04">April</option>
        <option value="05">May</option>
        <option value="06">June</option>
        <option value="07">July</option>
        <option value="08">August</option>
        <option value="09">September</option>
        <option value="10">October</option>
        <option value="11">November</option>
        <option value="12">December</option>
                </select>
                </div>
                </div>
              <div class="row mb-4">
                <div class="form-group col-12" style="text-align:left">
                    <label for="" >Birthday </label>
                        <select name="bday" class="form-control">
                               <option value="01">1</option>
                                  <option value="02">2</option>
                                  <option value="03">3</option>
                                  <option value="04">4</option>
                                  <option value="05">5</option>
                                  <option value="06">6</option>
                                  <option value="07">7</option>
                                  <option value="08">8</option>
                                  <option value="09">9</option>
                                  <option value="10">10</option>
                                  <option value="11">11</option>
                                  <option value="12">12</option>
                                  <option value="13">13</option>
                                  <option value="14">14</option>
                                  <option value="15">15</option>
                                  <option value="16">16</option>
                                  <option value="17">17</option>
                                  <option value="18">18</option>
                                  <option value="19">19</option>
                                  <option value="20">20</option>
                                  <option value="21">21</option>
                                  <option value="22">22</option>
                                  <option value="23">23</option>
                                  <option value="24">24</option>
                                  <option value="25">25</option>
                                  <option value="26">26</option>
                                  <option value="27">27</option>
                                  <option value="28">28</option>
                                  <option value="29">29</option>
                                  <option value="30">30</option>
                                  <option value="31">31</option>
                         </select>
</div></div>

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
        <p>You have ordered for <b><?php echo strtoupper($service) ?></b> service<?php if($package == 'cheryl_2' OR $package == 'cheryl_3'){ echo 's' ;} ?> under the <b><?php  if($package == 'cheryl_2' OR $package == 'cheryl_3'){ echo 'CHERYL' ;}else{echo strtoupper($package);} ?> </b>package.    
        <br>
        Service will be delivered <b><?php echo $num ?></b> times a month on 
        <?php if($package == 'cheryl' OR $package == 'cheryl_2' OR $package == 'cheryl_3'){?><span id="r_day"><b>Please choose day</b></span>s<?php }else{ echo "selected days";} ?> by <span id="r_time"><b>Please select a time </b> </span>
        
        </p>
        <?php if(!isset($_SESSION['ren'])){?>
        <p>You would be contacted through your provided phone-number(<span id="r_ph"></span>) and E-mail(<span id="r_ema"></span>)</p>
        <?php } ?>
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

<div id="ele" class="w3-modal" style="color:rgb(37, 35, 35)rgb(37, 35, 35);display:block;z-index:999">
    <div class="w3-modal-content w3-animate-right w3-card-4"  style="width:30rem;border-radius:2px">
      <header class="w3-container"> 
        <span onclick="document.getElementById('ele').style.display='none'" 
        class="w3-button w3-display-topright">&times;</span>
        <!-- <h5 class="orange-text" style="color:black"><?php echo  $userd ?> ~ <span style="font:inherit;color:#9C3438"><?php  echo $serv ?></span></h5> -->
      </header>
      <div class="w3-container" style="margin-left: 15px;">
          <hr>
        <!-- <label for="">Order Specification</label> -->
        <div>
          <h5>Hello,</h5>
          <p>
            You selected just one service(<?php echo $service ?>) which is awesome,<br>
            but choosing our multiple service plan is even more amazing and allows you save more!
            <?php if($service == 'cleaning'){
                echo "<p>
          <b>FOR CLEANING ONLY</b>
        <br>
            Deep Cleaning would be carried out once a month for cheryl and twice a month for jaden & rex
        </p><br>
            <b>Deep cleaning</b> involves completely removing and cleaning Cupboard, fridge, racks, 
            Cleaning of toilet walls etc.";
            }?>
          </p>
              <a href="multiple.php#j"
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