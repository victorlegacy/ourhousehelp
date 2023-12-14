<?php 
include('config.php');
if(isset($_POST['submit'])){
    $service = $_POST['service'];
     $package = $_POST['package'];
      session_start();
      $_SESSION['ren'];
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
    .room{
      font-weight: bold !important;
    }
</style>
<div class="  overlay bg-light" style="background-image: url('images/bg-2.jpg');background-size:cover;height:40% !important" id="home-section">
      <div class="container">
        <div class="row justify-content-center">

          <div class="col-12 text-center align-self-center text-intro">
            <div class="row justify-content-center">
              <div class="col-lg-8">
                <!-- <h1 class="text-white" data-aos="fade-up" data-aos-delay="">Lets take care of your everyday home & office chores</h1>
                <p class="lead  " data-aos="fade-up" style="color: #FFF112;" data-aos-delay="100">Search for a service to get started</p>
                <!-- <p data-aos="fade-up" data-aos-delay="200"><a href="#services-section" class="btn smoothscroll btn-primary">Our Services</a></p> -->
 <br><br><br><br><br><br>
                <div class="col-lg-12 text-center" style="padding: 30px;">
                   <div  data-aos="fade-up" data-aos-delay="200">
                  
                    <!-- <input type="text" class="inp" placeholder="Search a service" name="" id=""> -->
                   <h3 class="" style="color:white"> HOME | APARTMENT </h3>
                    </div>
                  </div>
                  <br><br><br><br><br><br>
                  
              </div>
            </div>
          </div>
            
        </div>
      </div>

    </div>  
<h3 class="text-center" style="background:#9C3438;">Service selected: <span style="font:inherit;color:"><?php echo $service ?> </span></h3>
<div class="site-section">
      <div class="container">
        <div class="row ">
        <!-- <div class="col-12 mb-5 position-relative">
           
          </div> -->
          <div class="col-md-6 mb-5 mb-lg-0 col-lg-4 text-center">
        <!-- Left padding -->
          </div>

          <div class="col-md-6 mb-5 mb-lg-0 col-lg-4 text-center">
          <h2 class="section-title text-center mb-5">Pick apartment type</h2>
            <div class="blog_entry service-card shadow-sm" >
              <br>
            <form action="apart.php" method="POST" class="form">
                <div class="form-group col-12" style="text-align: left;">
                <label for="" >Select from list below</label>  
                <select name="room" required id="apart" class="form-control">
                  <option value="" disabled>--choose--</option>  
                    <option value="self">Self Contain apartment</option>
                    <option value="1" >1 bedroom apartment</option>
                    <option value="2" >2 bedroom apartment</option>
                    <option value="3" >3 bedroom apartment</option>
                    <option value="4">4 bedroom apartment</option>
                    <option value="5">5 or more bedroom apartment</option>
                  </select>
                </div>

             <input type="hidden" name="service" value="<?php echo $service ?>">
                    <input type="hidden" name="package" value="<?php echo $package ?>">
                    <div id="a_desc">
                    <button type="submit" name="submit" class="btn btn-primary"> Continue</button>
                    </div>
               <br>
                
              <!-- <div class="row ">
                <div class="col-md-6 text-center" style="text-align: center;">
                  <a href="#!" data-toggle="modal" data-target="#details" class="text-center btn btn-primary" value="">
                   Continue
                  </a>
                </div>
            </div> -->
            </form>
            </div>
              <div>
                <br><br>
                  <h5>Powered by</h5>
                    <img src="images/logo.png" width="40%">    
                </div>         
            
          </div>
          <div class="col-md-6 mb-5 mb-lg-0 col-lg-4 text-center">
            <!-- Left padding -->
          </div>
        </div>
      </div>
</div>
<?php 
include('footer.php')
?>
</body>
</html>