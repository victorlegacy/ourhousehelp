  <?php 
// if(isset($_GET['run'])){
    
?>
<?php
include('header.php');
include 'config.php';
if(isset($_POST['complain'])){
    $f_name = $_POST['f_name'];
    $l_name = $_POST['l_name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $subj = $_POST['subj'];
    
    $message = $_POST['message'];
  $sql = "INSERT INTO message(f_name,l_name,email,phone,subj,message) VALUES('$f_name','$l_name','$email','$phone','$subj','$message')";
  if(mysqli_query($conn,$sql)){
      echo "<script>alert('Your message has been recieved. You would be contacted soon')</script>";
    }else{
      echo "<script>alert('Something went wrong. Try again later')</script>";
    }
}
?>
<link rel="stylesheet" href="css/w3.css">
<!--<div id="moddd" class="w3-modal" style="color:rgb(37, 35, 35)rgb(37, 35, 35)">-->
<!--    <div class="w3-modal-content w3-animate-right w3-card-4"  style="width:30rem;border-radius:2px;margin-top:25%">-->
<!--      <header class="w3-container"> -->
<!--        <span onclick="document.getElementById('id<?php echo $i ?>').style.display='none'" -->
<!--        class="w3-button w3-display-topright">&times;</span>-->
        <!-- <h5 class="orange-text" style="color:black"><?php echo  $userd ?> ~ <span style="font:inherit;color:#9C3438"><?php  echo $serv ?></span></h5> -->
<!--      </header>-->
<!--      <div class="w3-container">-->
     
<!--        </div>-->
<!--        <br><br>-->
<!--      <footer class="w3-container " style="background-color: rgb(37, 35, 35);text-align:right">-->
<!--        <p class="right">-->
<!--        <button onclick="document.getElementById('idi<?php echo $i ?>').style.display='none'" -->
<!--             class="btn" style="background-color:rgb(37, 35, 35) !important;color:white">-->
<!--             <i style="color:white" class="fas fa-times"></i> Cancel</button>    -->
       
<!--        <button type="submit" name="submit"-->
<!--             class="btn" style="background-color:rgb(37, 35, 35) !important;color:white">-->
<!--             <i class="fa-solid fa-check"></i> Yes confirm client</button>-->
<!--        </p>-->
<!--        </form>-->
<!--      </footer>-->
<!--    </div>-->
<!--  </div>-->
<!--<style>-->
<!--    #moddd{-->
<!--        display:block;-->
<!--    }-->
<!--</style>-->
<style>
/*    .float{*/
/*	position:fixed;*/
/*	width:60px;*/
/*	height:60px;*/
/*	bottom:100px;*/
/*	right:40px;*/
/*	background-color:#0C9;*/
/*	color:#FFF;*/
/*	border-radius:50px;*/
/*	text-align:center;*/
/*	box-shadow: 2px 2px 3px #999;*/
/*	z-index:999;*/
/*	background:url('promo.png');*/
/*}*/

/*.my-float{*/
/*	margin-top:22px;*/
/*}*/
.infobar {
  overflow: hidden;
  background-color: rgb(161,50,53);
  position: fixed; /* Set the navbar to fixed position */
  top: 0; /* Position the navbar at the top of the page */
  width: 100%; /* Full width */
  z-index:9999;
  text-align:center;
  margin-bottom:30px;
  color:white;
}
</style>
           <!--<a href="#" class="float">*-->
<!--<i class="fa fa-plus my-float"></i>-->
<!--</a>-->
<!--<div class="infobar">-->
<!-- We are on December Promo!!! -->
<!--According to our clients demand Cleaning will now come with House Keeping a 2 in 1 Service at 15,000 instead of 16,000 THIS WILL TAKE EFFECT 1st JANUARY 2023 . We just love to serve you.-->
<!--</div>-->
<!--<br><br>-->
    <div class="site-blocks-cover overlay bg-light" style="background-image: url('images/bg-dark-1.jpg');" id="home-section">
      <div class="container">
       
        
       <div class="row justify-content-center">

          <div class="col-12 text-center align-self-center text-intro">
            <div class="row justify-content-center">
              <div class="col-lg-8">
                   <h3 class="text-white" data-aos="fade-up" data-aos-delay="">
                  Hire both live-in and live-out househelp <span class="d-none d-sm-block" style="font:smaller"></span> </h3> 
                  
                  <div class="row justify-content-center" data-aos="fade-up" data-aos-delay="200">
        <!--  <div class="col-lg-4">-->
        <!--    <div class="blog_entry d-none d-sm-block">-->
        <!--      <div class="p-4 bg-white" style="color:#9C3438;">-->
        <!--      Worry about the kids learning bad habits from maids.-->
        <!--        </div>-->
        <!--    </div>-->
                  
        <!--  </div>-->
        <!--  <div class="col-lg-4">-->
        <!--    <div class="blog_entry">-->
        <!--      <div class="p-4 bg-white d-none d-sm-block" style="color:#9C3438;">-->
        <!--       Worry about loosing your husband to maids-->
        <!--        </div>-->
        <!--  </div>-->
        <!--  </div>-->
        <!--  <div class="col-lg-4">-->
        <!--  <div class="blog_entry">-->
        <!--      <div class="p-4 bg-white d-none d-sm-block" style="color:#9C3438;">-->
                 
        <!--       Worry about items getting stolen and maids running away-->
        <!--        </div>-->
        <!--  </div>    -->
        <!--</div>-->
        </div>
                             
                <!-- <p data-aos="fade-up" data-aos-delay="200"><a href="#services-section" class="btn smoothscroll btn-primary">Our Services</a></p> -->
      
                <div class="col-lg-12 text-center" style="padding: 30px;">
                   <div  data-aos="fade-up" data-aos-delay="400">
<!-- 
                   <p class="lead  " data-aos="fade-up" style="color:whitesmoke" data-aos-delay="100">Search for a service to get started</p> -->
                   <h4 class="" style="color:#9C3438;background:white;border-radius:5px;padding:10px" data-aos="fade-up" data-aos-delay="3s">
                  <b>Lets take care of your everyday home & office chores </b> </h4> 
                    <div class="app">
                    <!-- <input type="text" class="inp" placeholder="Search a service" name="" id=""> -->
                    <!--<input type="text" id="placeholder" style="text-align: center;" class="form-control" >-->
                    
                  </div><br>
                  <a href="index.php#services-section" class="btn btn-primary" >
                  <!--<span class="icon-search"></span>-->
                  Get Started
          </a>
                    </div>
                  </div>
              </div>
            </div>
          </div>
            
        </div>
      </div>
    </div>  
    <div class="site-section" id="about-section">
      <div class="container">
        <div class="row ">
          <!-- <div class="col-12 mb-4 position-relative">
            <h2 class="section-title">About Our House Help</h2>
          </div> -->
          <div class="col-lg-4">
            <!-- <div class="col-12 mb-4 position-relative"> -->
              <h2 class="section-title">About Our House Help</h2>
            <!-- </div> -->
            <p style="text-align: justify;">A platform designed to provide TIMELY and WELL NEEDED SERVICES to HOMES and OFFICES of our clients at a GOOD PRICE. <br></p>

            <p style="text-align: justify;">OUR HOUSE HELP is also affiliated with an International service providers. </p>
          </div>
          <div class="col-lg-4">
            <img src="images/advert.jpg?d=12" alt="Image" class="img-fluid">
          </div>
          <div class="col-lg-4">
            <!-- <div class="col-12 mb-4 position-relative"> -->
              <h2 class="section-title">About Our Workers</h2>
            <!-- </div> -->
            <p style="text-align: justify;">We have trained and vetted our staff whom we would
              introduce to our clients to work in their
              home and office, while we manage them and
              make sure our clients enjoy the service of our staff.
              We have found a way to provide different
              kinds of services to the homes and offices of our
              clients at a mind blowing price.</p>

            <!-- <p>The Big Oxmox advised her not to do so, because there were thousands of bad Commas, wild Question Marks and devious Semikoli, but the Little Blind Text didn’t listen.</p> -->
          </div>  
          <div class="col-lg-2">
        
          </div>
          <div class="col-lg-8" style="text-align:justify">
              <br><br>
              <h2 class="section-title" style="text-align:center !important">Why Use Us?</h2>
              
              
              
              
              
              
              
<style>
#more {display: none;}
#dots{
   font-weight:bold;
}
</style>

<p>        
              
           You don't really need a live in help.

We can professionally handle your: <br>
A. Laundry 🧺 ,<br>
B. Cleaning 🧹 ,<br>
C. House Help Services ,<br>
D. Nanny,    <br>
E. Cook, <br>
F. Ironing,


<br> At a good price. 
<br>
<span id="dots">...</span><span id="more">
You can get any of these services as low as 13,900 monthly.
<br>
Take a look at this:
<br>
 LAUNDRY:
 <br>
We can wash 140 peices of cloths for your house hold in a month for just 18,900 . 
Against 32,000 dry cleaners will collect from you. You are saving 17,000 for just washing and we can also iron these cloths with the same amount. 

<br>
ERRANDS:
 <br>
We can run your Errands, deliver products, shop with your list in Supermarket or malls, for just 18,900 monthly.

<br>
CLEANING:
 <br>
For cleaning the space to be cleaned counts, for 1 bedroom apartment the price is 15,900 per month ,for a 2 bedroom apartment would cost 18,900 for a month,
and a little addition as the apartment increases<br>
<!--You can even get all these services at a mind blowing price of 14,000 Monthly(for 1-2 bedroom apartment).-->
<br>
We're sure you are surprised!!!</span></p>
<a href="#!" style="text-decoration: underline;color:#9C3438" onclick="myFunction()" id="myBtn">Read more</a>

<script>
function myFunction() {
  var dots = document.getElementById("dots");
  var moreText = document.getElementById("more");
  var btnText = document.getElementById("myBtn");

  if (dots.style.display === "none") {
    dots.style.display = "inline";
    btnText.innerHTML = "Read more"; 
    moreText.style.display = "none";
  } else {
    dots.style.display = "none";
    btnText.innerHTML = "Read less"; 
    moreText.style.display = "inline";
  }
}
</script>

              
              
              
              
              
              
              
              
              
      

          </div>
          <div class="col-lg-2">
           
          </div>  
        </div>
      </div>
    </div>
    <section class="site-section bg-light" >
      <div class="container">
        <div class="row">
          
          <div class="col-12 mb-5 position-relative">
            <h2 class="section-title text-center mb-5">Why Use Us</h2>
          </div>
          <div class="col-md-6 mb-5 mb-lg-0 col-lg-4 text-center">
            <div class="blog_entry">
              <div class="p-4 bg-white">
                <i class="icon-lock" style="font-size:4rem;color:#2D315E" aria-hidden="true"></i>                  
                <h3><a href="#!">Surtied Staff </a></h3>
                <!-- <span class="date">Delivery Service</span> -->
                <p>Our staff are surtied by 2 citizens of this country and we periodically organize training to keep them updated.
                  <br>
                  Our staff are also registered with the police
                </p>
                <!-- <p class="more"><a href="single.html">Read More</a></p> -->
              </div>
            </div>
          </div>

          <div class="col-md-6 mb-5 mb-lg-0 col-lg-4 text-center">
            <div class="blog_entry">
              <div class="p-4 bg-white">
                <i class="icon-money" style="font-size:4rem;color:#2D315E" aria-hidden="true"></i>                  
                <h3><a href="single.html">Cheap Rates</a></h3>
                <!-- <span class="date">Delivery Service</span> -->
                <p>Our prices are placed at reasonable low cost, some services are as low as N13,900. 
                <br>  
                Some packages are even NEGOTIABLE!! </p>
                <!-- <p class="more"><a href="single.html">Read More</a></p> -->
              </div>
            </div>
          </div>

          <div class="col-md-6 mb-5 mb-lg-0 col-lg-4 text-center">
            <div class="blog_entry">
              <div class="p-4 bg-white">
                <i class="icon-list" style="font-size:4rem;color:#2D315E" aria-hidden="true"></i>                  
                <h3><a href="single.html">Strict Discipliniary</a></h3>
                <!-- <span class="date">Delivery Service</span> -->
                <p>In case of misconduct or any misbehaviour from our staff, our discipliniary team will take care of the staff for you.
                  <br>
                  ALL YOUR NEED TO DO IS REPORT
                </p>
                <!-- <p class="more"><a href="single.html">Read More</a></p> -->
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <div class="site-section" id="services-section">
      <div class="container">
        <div class="row ">
          <div class="col-12 mb-5 position-relative">
            <h2 class="section-title text-center mb-5">What we offer</h2>
            
          </div>
          <div class="col-md-3 mb-4" data-aos="fade-up" data-aos-delay="">
        </div>
        <div class="col-md-6 mb-4" style="text-align:center" data-aos="fade-up" data-aos-delay="">
            
              <h4 style="background: #9C3438;color:white;padding:5px;boder-radius:5px">
               Special Services
              </h4>
            </div>
            <div class="col-md-3 mb-4" data-aos="fade-up" data-aos-delay="">
        </div>
           <div class="col-md-6 mb-4" style="text-align:center" data-aos="fade-up" data-aos-delay="">
                       <div class="service-about service">
               <h3 style="color: #9C3438">
                   <img src="images/maids.png" width="25%" />
                   <br><br>
                One-time Services
              </h3>
                <p>We offer <b>POST-CONSTRUCTION cleaning, MOVING-IN cleaning, WELCOME BACK cleaning</b> services for 1-3 days with thourough cleaning.</p>
                <a href="#!" class="" data-toggle="modal" data-target="#one-time" style="text-decoration: underline;color:#9C3438">
                  Get Service
                </a>
              </div>
              
        </div>
        <div class="col-md-6 mb-4" style="text-align:center" data-aos="fade-up" data-aos-delay="">
            
             <div class="service-about service">
               <h3 style="color: #9C3438" style="text-align:center">
                   <img src="images/live-in.png" width="30%" />
                   <br>
                   <br>
               Live-in Househelp
              </h3>
                <p>We offer <b>Live-in househelp </b> option for our services which include cleaning, laundry, errands, nanny & cook</p>
                <a href="#!" class="" data-toggle="modal" data-target="#live-in" style="text-decoration: underline;color:#9C3438">
                  Get Service
                </a>
              </div>
              
              
        </div>
      
          <div class="col-md-3 mb-4" data-aos="fade-up" data-aos-delay="">
        </div>
        <div class="col-md-6 mb-4" style="text-align:center" data-aos="fade-up" data-aos-delay="">
     
              <br><br>
              <h4 style="background: #9C3438;color:white;padding:5px;boder-radius:5px">
               Monthly Services
              </h4>
        </div>
        <div class="col-md-3 mb-4" data-aos="fade-up" data-aos-delay="">
        </div>
              
          
          <div class="col-md-3 mb-4 text-center" data-aos="fade-up" data-aos-delay="">
            <div class="service">
            <img src="images/cleaning.png" alt="Image" width="50%">
              <div class="service-about">
                <h3>CLEANING & HOUSEKEEPING</h3>
                <p>Our cleaning service include<br> <b>COBWEBBING <br> SWEEPING <br> DUSTING/CLEANING <br> MOPPING & HOUSEKEEPING</b> <br>The service is carried out for 4 Hours per visit.</p>
                <a href="#!" class="btn btn-primary" data-toggle="modal" data-target="#cleaning">
                  Get Service
                </a>
                <br>
                OR 
                <br>
                <a href="#!" data-toggle="modal" data-target="#custom" style="text-decoration: underline;color:#9C3438">
                  Select multiple
                </a>
              </div>
              </div>
              <div>
              
              <!-- btn btn-primary -->
            </div>
          </div>

          <div class="col-md-3 mb-4 text-center" data-aos="fade-up" data-aos-delay="100">
            <div class="service">   
            <img src="images/washing-machine.png" alt="Image" width="50%">    
              <div class="service-about">
                <h3>LAUNDRY  </h3>
                <p>Our laundry service include <br><b> SORTING <br>   
WASHING <br>DRYING<br>IRONING </b> <br>The service is carried out for 4 Hours per visit.</p>
                <a href="#!" class="btn btn-primary" data-toggle="modal" data-target="#laundry">
                  Get Service
                </a>
                <br>
                OR 
                <br>
                <a href="#!" data-toggle="modal" data-target="#custom" style="text-decoration: underline;color:#9C3438">
                  Select multiple
                </a>
              </div>
            
            </div>
          </div>


             <div class="col-md-3 mb-4 text-center" data-aos="fade-up" data-aos-delay="100">
             <div class="service">   
            <img src="images/maid.png" alt="Image" width="50%"> 
              
              <div class="service-about">
                <h3>ERRANDS & HOUSEKEEPING</h3>
                <p>Our errands service include <br>
                  <b> RUNNING ERRANDS <br> SHOPPING FOR CLIENTS <br> HOUSEKEEPING.</b> 
                  <br>The service is carried out for 4 Hours per visit.</p>
                <a href="#!" class="btn btn-primary" data-toggle="modal" data-target="#errands">
                  Get Service
                </a>
                  <br>
                OR 
                <br>
                <a href="#!" data-toggle="modal" data-target="#custom" style="text-decoration: underline;color:#9C3438">
                  Select multiple
                </a>
              </div>
                         </div>
          </div>
          <div class="col-md-3 mb-4 text-center" data-aos="fade-up" data-aos-delay="">
             <div class="service">   
            <img src="images/nanny.png" alt="Image" width="50%"> 
                            <div class="service-about">
                <h3>NANNY & HOUSEKEEPING</h3>
                <p>In our nanny service we cover <br>
                  <b>BABYSIT <br>CARE FOR ELDERLY 
                  <br> CARE FOR BABIES</b> <br>
                  This service could be carried out for 8 Hours.</p>
                <a href="#!" class="btn btn-primary" data-toggle="modal" data-target="#nanny">
                  Get Service
                </a>
                  <br>
                OR 
                <br>
                <a href="#!" data-toggle="modal" data-target="#custom" style="text-decoration: underline;color:#9C3438">
                  Select multiple
                </a>
              </div>
            </div>
          </div>
<div class="col-md-4 mb-2" data-aos="fade-up" data-aos-delay="">         
          </div>
          <div class="col-md-4 mb-4 text-center" data-aos="fade-up" data-aos-delay="">
             <div class="service">   
            <img src="images/cooking.png" alt="Image" width="50%"> 
                            <div class="service-about">
                <h3>COOK & ERRANDS</h3>
                <p>In our cook service we cover <br>
                  <b>COOKING and related services<br>
                RUNNING ERRANDS </b> <br>specified dishes 
                  <!-- <br> CARE FOR BABIES</b> <br> -->
                  This service would be carried out for 4 times a month</p>
                <a href="#!" class="btn btn-primary" data-toggle="modal" data-target="#cook" >
                  Get Service
                </a>
                  <br>
                OR 
                <br>
                <a href="#!" data-toggle="modal" data-target="#custom" style="text-decoration: underline;color:#9C3438">
                  Select multiple
                </a>
              </div>
            </div>
          </div>   
          <div class="col-md-4 mb-2" data-aos="fade-up" data-aos-delay="">          
          </div>
         
         
         
          <div class="col-md-3 mb-2" data-aos="fade-up" data-aos-delay="">         
          </div>

         <div class="col-md-6 mb-4 text-center" data-aos="fade-up"  data-aos-delay="">
            <br><br><br>
            <h1 class="section-title text-center mb-5">Do you want more than 1 service?</h1>  
              <p>
                Order multiple services like 
                <b>CLEANING & LAUNDRY, LAUNDRY & HOUSEHELP, CLEANING & HOUSE HELP</b> 
                or  <b>MORE than</b> 3 services
              </p>
          <a href="#!" data-toggle="modal" data-target="#custom" class="btn btn-primary">
            Multiple Services
          </a>
          <div>
            <br><br><br>
          </div>
        </div>   
          <div class="col-md-3 mb-2" data-aos="fade-up" data-aos-delay="">          
          </div>
                  
        <!--   <div class="col-md-6 mb-4" data-aos="fade-up" data-aos-delay="100">
            <div class="service d-flex h-100">
              <div class="svg-icon">
                <img src="images/flaticon/svg/006-food.svg" alt="Image" class="img-fluid">
              </div>
              <div class="service-about">
                <h3>Web Design / Development</h3>
                <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
              </div>
            </div>
          </div> -->

        </div>
        <br><br><br>
        
      </div>
    </div>


    <section class="site-section block__62272" id="projects-section">
      

      <div class="container">
        <div class="row mb-5">
          <div class="col-12 position-relative">
            <h2 class="section-title text-center mb-5">Photo Reels</h2>
          </div>
        </div>

        <div class="row justify-content-center mb-5" data-aos="fade">
          <div id="filters" class="filters text-center button-group col-md-7">
            <button class="btn btn-primary active" data-filter="*">All</button>
            <!-- <button class="btn btn-primary" data-filter=".web">Cleaning</button>
            <button class="btn btn-primary" data-filter=".design">Industrial Cleaning</button>
            <button class="btn btn-primary" data-filter=".brand">Laundry</button> -->
          </div>
        </div>  
        
        <div id="posts" class="row no-gutter">
          <div class="item web col-6 col-sm-6 col-md-6 col-lg-4 col-xl-4 mb-4">
            <a href="images/reels/pix  (1).jpeg" class="item-wrap fancybox">
              <span class="icon-search2"></span>
              <img class="img-fluid" src="images/reels/pix  (1).jpeg">
            </a>
          </div>

          <div class="item brand col-6 col-sm-6 col-md-6 col-lg-4 col-xl-4 mb-4">
            <a href="images/reels/pix  (12).jpeg" class="item-wrap fancybox">
              <span class="icon-search2"></span>
              <img class="img-fluid" src="images/reels/pix  (12).jpeg">
            </a>
          </div>

          <div class="item web col-6 col-sm-6 col-md-6 col-lg-4 col-xl-4 mb-4">
            <a href="images/reels/pix  (5).jpeg" class="item-wrap fancybox">
              <span class="icon-search2"></span>
              <img class="img-fluid" src="images/reels/pix  (5).jpeg">
            </a>
          </div>

          <div class="item web col-6 col-sm-6 col-md-6 col-lg-4 col-xl-4 mb-4">
            <a href="images/reels/pix  (7).jpeg" class="item-wrap fancybox">
              <span class="icon-search2"></span>
              <img class="img-fluid" src="images/reels/pix  (7).jpeg">
            </a>
          </div>
          <div class="item web col-6 col-sm-6 col-md-6 col-lg-4 col-xl-4 mb-4">
            <a href="images/reels/pix  (9).jpeg" class="item-wrap fancybox">
              <span class="icon-search2"></span>
              <img class="img-fluid" src="images/reels/pix  (9).jpeg">
            </a>
          </div>

          <div class="item brand col-6 col-sm-6 col-md-6 col-lg-4 col-xl-4 mb-4">
            <a href="images/reels/pix  (11).jpeg" class="item-wrap fancybox">
              <span class="icon-search2"></span>
              <img class="img-fluid" src="images/reels/pix  (11).jpeg">
            </a>
          </div>

          <div class="item design col-6 col-sm-6 col-md-6 col-lg-4 col-xl-4 mb-4">

            <a href="images/reels/pix  (13).jpeg" class="item-wrap fancybox">
              <span class="icon-search2"></span>
              <img class="img-fluid" src="images/reels/pix  (13).jpeg">
            </a>

          </div>

          <div class="item design col-6 col-sm-6 col-md-6 col-lg-4 col-xl-4 mb-4">
            <a href="images/reels/pix  (15).jpeg" class="item-wrap fancybox">
              <span class="icon-search2"></span>
              <img class="img-fluid" src="images/reels/pix  (15).jpeg">
            </a>
          </div>

      <div class="item web col-6 col-sm-6 col-md-6 col-lg-4 col-xl-4 mb-4">
            <a href="images/reels/pix  (17).jpeg" class="item-wrap fancybox">
              <span class="icon-search2"></span>
              <img class="img-fluid" src="images/reels/pix  (17).jpeg">
            </a>
          </div>

              <!-- <div class="item design col-6 col-sm-6 col-md-6 col-lg-4 col-xl-4 mb-4">
            <a href="images/img_10.jpg" class="item-wrap fancybox">
              <span class="icon-search2"></span>
              <img class="img-fluid" src="images/img_10.jpg">
            </a>
          </div>

          <div class="item brand col-6 col-sm-6 col-md-6 col-lg-4 col-xl-4 mb-4">
            <a href="images/img_11.jpg" class="item-wrap fancybox">
              <span class="icon-search2"></span>
              <img class="img-fluid" src="images/img_11.jpg">
            </a>
          </div> -->

        </div>
      </div>

    </section>


    <section class="site-section" id="blog-section" style="background-color: #2D315E;">
      <div class="container">
        <div class="row">
          <div class="col-12 mb-5 position-relative">
            <h2 class="section-title text-center mb-5 text-white" style="color:white !important">What Client Are Sayings</h2>
          </div>
        </div>
        <div class="owl-carousel slide-one-item">
          <div class="slide">
            <blockquote>
              <p>These services just solves a lot of problems and relieves unecessary stress. Kudos to you guys!  </p>
              <p><cite>&mdash; Dr Peter Nwakali</cite></p>
            </blockquote>
          </div>
          <div class="slide">
            <blockquote>
              <p>The staff are so friendly and you almost want them to stay for longer</p>
              <p><cite>&mdash; Mrs kenneth Oluwabunmi</cite></p>
            </blockquote>
          </div>
          <div class="slide">
            <blockquote>
              <p>Even in extreme conditions they always show up and are always on time.  </p>
              <p><cite>&mdash; Amaka Diribe</cite></p>
            </blockquote>
          </div>
        </div>
      </div>
    </section>

    
   


    <section class="site-section" id="contact-section">
      <div class="container">
        <div class="row">
          <div class="col-12 mb-5 position-relative">
            <h2 class="section-title text-center mb-5">Contact/Feedback Form</h2>
          </div>
        </div>
        <div class="row justify-content-between">
          <div class="col-lg-6">
            <form action="" method="POST" class="form">
              <div class="row mb-4">
                <div class="form-group col-6">
                  <input style="border: 1px double whitesmoke;" name="f_name" type="text" class="form-control" placeholder="First name">
                </div>
                <div class="form-group col-6">
                  <input type="text" name="l_name" class="form-control" placeholder="Last name">
                </div>
              </div>

              <div class="row mb-4">
                <div class="form-group col-12">
                  <input type="email" name="email" class="form-control" placeholder="Email address">
                </div>
              </div>
               <div class="row mb-4">
                <div class="form-group col-12">
                  <input type="tel" name="phone" minlength="11" maxlength="11" class="form-control" placeholder="Phone Number">
                </div>
              </div>

              <div class="row mb-4">
                <div class="form-group col-12">
                  <input type="text" name="subj" class="form-control" placeholder="Subject of the message">
                </div>
              </div>

              <div class="row mb-4">
                <div class="form-group col-12">
                  <textarea name="message" id="" cols="30" rows="2" class="form-control" placeholder="Type your message/review/complaint here.."></textarea>
                </div>
              </div>

              <div class="row">
                <div class="col-md-6">
                  <input type="submit" name="complain" class="btn btn-primary" value="Send Message">
                </div>
              </div>
              
            </form>
          </div>
          <div class="col-lg-5">
            <img src="images/contract.png" width="90%" alt="">
          </div>
        </div>
      </div>
      
<div id="ele" class="w3-modal" style="color:rgb(37, 35, 35)rgb(37, 35, 35);display:block;z-index:99">
    <div class="w3-modal-content w3-animate-right w3-card-4"  style="width:30rem;border-radius:5px;background-color:#9C3438;color:white;margin-top:20px">
      <header class="w3-container"> 
        <span style="font-size:30px" onclick="document.getElementById('ele').style.display='none'" 
        class="w3-button w3-display-topright">&times;</span>
        
      </header>
      <div class="w3-container" style="margin-left: 15px;">
          <hr>
        <!-- <label for="">Order Specification</label> -->
        <div class="" style="font-size:15px">
                <b><b>Slight Price Adjustment</b></b> <br>
  There is an immediate, slight increment in the cost of our services due to increase in transportation. Please bear with us.
<br>
Thanks for understanding!
        </div>
        <br> 
        <footer style="text-align:right">
            <a href="#!" onclick="document.getElementById('ele').style.display='none'" >okay, close</a>
        </footer><br> 
        </div>
    </div>
  </div>
    </section>

  <script src="i.js"></script>
  
  <script>
    ityped.init(document.querySelector("#ityped"), {
      showCursor: false,
      strings: ['Very nice project!', 'Yeah!', 'Shure, awesome!']
    })

    ityped.init("#placeholder", {
      placeholder: true,
      showCursor: false
    })
  </script> 
    <script type="text/javascript">
  function chkcontrol(j) {
  var total=0;
  for(var i=0; i < document.form1.ckb.length; i++){
  if(document.form1.ckb[i].checked){
  total =total +1;}
  if(total > 3){
  alert("Please Select only three") 
  document.form1.ckb[j].checked = false ;
  return false;
  }
  }
  } </script>   
<?php 

include('modal.php');
include('footer.php');
// }else{
// include('wait.php');
    
    
// }
?>


