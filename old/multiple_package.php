<?php 
include('redirect.php');
// include('config.php');
 
        include('renew_data.php');     
 
if($number == 2){
  $sql = "INSERT INTO multiple(first,second,price,combo,num) VALUES('$first','$second','$price','$combo','2')";  
  mysqli_query($conn,$sql);
  $run_id = mysqli_insert_id($conn);
}elseif($number == 3){
  $sql = "INSERT INTO multiple(first,second,third,price,combo,num) VALUES('$first','$second','$third','$price','$combo','3')";  
  mysqli_query($conn,$sql);
  $run_id = mysqli_insert_id($conn);
}elseif($number == 4){
  $sql = "INSERT INTO multiple(first,second,third,fourth,price,combo,num) VALUES('$first','$second','$third','$fourth','$price','$combo','4')";  
  mysqli_query($conn,$sql);
  $run_id = mysqli_insert_id($conn);
}
elseif($number == 5){
  
  $sql = "INSERT INTO multiple(first,second,third,fourth,fifth,price,combo,num) VALUES('$first','$second','$third','$fourth','$fifth','$price','$combo','5')";  
  mysqli_query($conn,$sql);
  $run_id = mysqli_insert_id($conn);
}
 
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
                   <h3 class="" style="color:white"> HOME | PACKAGES </h3>
                    </div>
                  </div>
                  <br><br><br><br><br><br>
              </div>
            </div>
          </div>
            
        </div>
      </div>

    </div>  
<h3 class="text-center">You selected <span style="font:inherit;color:#9C3438">

<?php 
$mul_id = $run_id;
$count = count($se);
for($x = 0; $x < $count; $x++) {
  echo $se[$x];
  echo " ";
} ?> 
</span></h3>
<div class="text-center">
<h5 class="text-center">Clients should have cleaning/laundry equipments/materials ready</h5>
</div>
    <div class="site-section">
      <div class="container">

        <div class="row ">
          
        <div class="col-12 mb-5 position-relative">
            <h2 class="section-title text-center mb-5">Select a package</h2>
          </div>
          <div class="col-md-6 mb-5 mb-lg-0 col-lg-4 text-center">
            <div class="blog_entry">
              <div class="p-4 bg-white">
                <!-- <i class="icon-lock" style="font-size:5rem;color:#2D315E" aria-hidden="true"></i>                   -->
                <h3><a href="#!">
                 
                    <span style="font-size:30px">CHERYL</span><sub class="sup" >low cost</sub>
                   
                     </a></h3>
                <!-- <span class="date">Delivery Service</span> -->
                <p>This package our clients decide to use our service <span style="font:inherit;color:#9C3438"> 4 TIMES OR DAYS </span> in a month <br> (That is once a week)</p>
            <?php //if($first == 'cleaning'){?>
                <!-- <form action="apart.php" method="POST">        -->
                <?php //}else{?>                                
                  <form action="custom_form.php" method="POST">       
                  <?php //}?>
                  <label> Select your Location</label>
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
                  <br>
                  <input type="hidden" name="order" value="<?php echo $mul_id?>">       
                  <input type="hidden" name="service" value="<?php echo $service?>"> 
                   <input type="hidden" name="ap_desc" value="<?php echo $ap_desc?>"> 
                   <input type="hidden" name="package" value="cheryl">
                   <?php 
                    if($r_price != 0){?>
                     <a  href="#!" data-toggle="modal" data-target="#ap_desc" class="btn btn-primary"> Choose Package</a>
                     <div class="modal fade" id="ap_desc" tabindex="-1" role="dialog" aria-labelledby="details" aria-hidden="true">
                      <div class="modal-dialog" role="document">
                        <div class="modal-content">
                          <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel" style="color: #9C3438">Specify Apartment Details</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                              <span aria-hidden="true">&times;</span>
                            </button>
                          </div>
                          <div class="modal-body">
                              <?php include("descrip/desc$room.php") ?>
                          </div>
                    <!--      <div class="modal-footer">-->
                            <!-- <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button> -->
                    <!--        <a href="multiple.php" class="text-white btn btn-primary">Go to multiple services</a>-->
                    <!--        <br>-->
                    <!--</form>-->
                    <!--      </div>-->
                     
                        </div>
                      </div>
                    </div>
                    <?php }else{
                   ?>
                  
                  <button type="submit" name="submit" class="btn btn-primary"> Choose Package</button>
                  <?php } ?>
                    </form>
                </div>
              </div>
            </div>
          

            <div class="col-md-6 mb-5 mb-lg-0 col-lg-4 text-center">
            <div class="blog_entry">
              <div class="p-4 bg-white">              
                <h3><a href="#!">
                 
                 <span style="font-size:30px">Jaden</span><sub class="sup" >very good</sub>2 SERVICES
                
                  </a></h3>
                  <p>This package our clients decide to use our service <span style="font:inherit;color:#9C3438"> 12 TIMES OR DAYS </span> in a month <br> (That is three times a week)</p>
                   
                <div>
                <form action="custom_form.php" method="POST">
                <label> Select your Location</label>
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
                    <br>
                    
                 <input type="hidden" name="order" value="<?php echo $mul_id?>">       
                  <input type="hidden" name="service" value="<?php echo $service?>"> 
                   <input type="hidden" name="ap_desc" value="<?php echo $ap_desc?>"> 
                   <input type="hidden" name="package" value="jaden">
                  
                
                 <?php 
                    if($r_price != 0){?>
                     <a  href="#!" data-toggle="modal" data-target="#app_desc" class="btn btn-primary"> Choose Package</a>
                     <div class="modal fade" id="app_desc" tabindex="-1" role="dialog" aria-labelledby="details" aria-hidden="true">
                      <div class="modal-dialog" role="document">
                        <div class="modal-content">
                          <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel" style="color: #9C3438">Specify Apartment Details</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                              <span aria-hidden="true">&times;</span>
                            </button>
                          </div>
                          <div class="modal-body">
                              <?php include("descrip/desc$room.php") ?>
                          </div>
                    <!--      <div class="modal-footer">-->
                            <!-- <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button> -->
                    <!--        <a href="multiple.php" class="text-white btn btn-primary">Go to multiple services</a>-->
                    <!--        <br>-->
                    <!--</form>-->
                    <!--      </div>-->
                     
                        </div>
                      </div>
                    </div>
                    <?php }else{
                   ?>
                  
                  <button type="submit" name="submit" class="btn btn-primary"> Choose Package</button>
                  <?php } ?>
                    </form>
                </div>
              </div>
            </div>
          </div>
             

          <div class="col-md-6 mb-5 mb-lg-0 col-lg-4 text-center">
            <div class="blog_entry">
              <div class="p-4 bg-white">
             <h3><a href="single.html">
                 
                 <span style="font-size:30px">REX</span><sub class="sup" >Best</sub>
                
                  </a></h3>
            
                <p>This package our clients decide to use our service <span style="font:inherit;color:#9C3438"> 20 TIMES OR DAYS </span> in a month <br> (That is monday - friday)</p>
                
                <div>
                    <form action="form.php"  method="POST">  
                   <label> Select your Location</label>
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
                  <br>
                    <!--<input type="hidden" name="service" value="<?php echo $service ?>">-->
                    <!--  <input type="hidden" name="package" value="rex">-->
                    <!--<button type="submit" name="submit" class="btn btn-primary"> Choose Package</button>-->
                    <input type="hidden" name="ap_desc" value="<?php echo $ap_desc?>"> 
                    <a  href="#!" data-toggle="modal" data-target="#itsrexe" class="btn btn-primary"> Choose Package</a>
                    </form>
                </div>
                
              </div>
            </div>
          </div>
        </div>
        <!-- <br><br>
        <div class="text-center" style="background-color: #9C3438;">
        <a style="font-size: 25px;color:white !important" href="custom_package.php" >
          View multiple services instead
        </a>
    </div> -->
      </div>
</div>





<div class="modal fade" id="itsrexe" tabindex="-1" role="dialog" aria-labelledby="details" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel" style="color: #9C3438">Notice</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
            <form action="rex_form.php"  method="POST"> 
        <!--<p>You have ordered for <b>ONE</b> service   . -->
        <br>
        <!--JADEN is not available for one service.-->
        Prices for the REX package is negotiable.
    
        <br>
        Please call <b> 09091144474</b> to negotiate.
      </div><input type="hidden" name="service" value="<?php echo $service?>"> 
        <input type="hidden" name="package" value="rex">
        <input type="hidden" name="order" value="<?php echo $mul_id?>">    
      
      
      
      
      
      <div class="modal fade" id="itsjadene" tabindex="-1" role="dialog" aria-labelledby="details" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel" style="color: #9C3438">Notice</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <!--<p>You have ordered for <b>ONE</b> service   . -->
        <br>
        <!--JADEN is not available for one service.-->
        JADEN is not available on the website at the momment.
        <br>
        Please call <b> 09091144474</b>
      </div>
<!--      <div class="modal-footer">-->
        <!-- <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button> -->
<!--        <a href="multiple.php" class="text-white btn btn-primary">Go to multiple services</a>-->
<!--        <br>-->
<!--</form>-->
<!--      </div>-->
 
    </div>
  </div>
</div>
     
      
      <div class="modal-footer">
         <!--<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button> -->
        <button type="submit" name="submit" class="text-white btn btn-primary">I have gotten my price, continue</button>
        <br>
        </div>
</form>
      

 
    </div>
  </div>
</div>

  
      
<?php 
include('footer.php');
?>