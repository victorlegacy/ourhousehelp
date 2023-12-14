<?php 
include('config.php');
if (isset($_POST['submit'])) {      
 $service = $_POST['service'];
  $package = $_POST['package'];
  $room = $_POST['room'];
//   if($room = 'self'){
//       header.;o
//   }
}else{
  header('loction:index.php');
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
                   <h3 class="" style="color:white"> HOME > PACKAGES > APARTMENT FORM</h3>
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
            <h2 class="section-title text-center mb-5">Lets get your apartment description
            
            </h2>
          
          </div>
          <div class="col-md-6 mb-5 mb-lg-0 col-lg-4 text-center">
        
          </div>

          <div class="col-md-6 mb-5 mb-lg-0 col-lg-4 text-center">
            <div class="blog_entry service-card">
            <form action="form.php" method="POST" class="form">
              
            <input type="hidden" name="service" value="<?php echo $service?>">            
            <input type="hidden" name="package" value="<?php echo $package ?>">  
           
            <div class="row mb-4">
                
                   <label>Select your location</label>
             <select name="loca" class="form-control" required>
                      <option id="abuja" value="abuja">
                          Abuja
                      </option>
                      <option id="lagos" value="lagos">
                          Lagos
                      </option>
                      <option id="ph" value="ph">
                          Port Harcourt
                      </option>
                      </select>
              </div>
             <?php 
             if($room == 'self'){?>
             <input type="hidden" name="self" value="1">
               <button type="submit" name="submit" class="btn btn-primary"> Done,Choose Package</button>
             <?php }elseif($room == 1){?>
                 <input type="hidden" name="self" value="2">
               <button type="submit" name="submit" class="btn btn-primary"> Done,Choose Package</button>
             <?php }else{
                 if($room == 2){
                     $room =1 ;
                 }
             include("descrip/desc$room.php");
             
             
             }?>
           
            </form>
            
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
