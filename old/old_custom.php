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
                   <h3 class="" style="color:white"> HOME > CUSTOM PACKAGES </h3>
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
            <h2 class="section-title text-center mb-5">Select a package</h2>
            <div class="text-center">
            2 Services can include a mix of CLEANING, LAUNDRY & HOUSE HELP
                  </div>
          </div>

        
          <div class="col-md-6 mb-5 mb-lg-0 col-lg-4 text-center">
            <div class="blog_entry">
              <div class="p-4 bg-white">
                <!-- <i class="icon-lock" style="font-size:5rem;color:#2D315E" aria-hidden="true"></i>                   -->
                <h3><a href="#!">
                 
                    <span style="font-size:30px">CHERYL</span><sub class="sup" >cheap</sub>2 SERVICES
                   
                     </a></h3>
                <!-- <span class="date">Delivery Service</span> -->
                <p>This package our clients decide to use our package 4 TIMES OR DAYS in a month <br> (That is once a week)</p>
                <!-- <p class="more"><a href="#!">Read More</a></p> -->
                <h5 style="color:#9C3438">
                    PRICING
                </h5>
         
                    <li class="room">1-2 BEDROOM FLAT  =  N12,000</li>
                    <li class="room">3 BEDROOM FLAT  =  N15,000</li>
                    <li class="room">4 BEDROOM FLAT  =  N18,000</li>
                    <li class="room">5 BEDROOM FLAT  =  N23,500</li>
                    <br>
                <div>
                <form action="form.php" method="POST">
                  <div class="row mb-4">
                <div class="form-group col-12" style="text-align: left;">
                <label for="" >Choose number of rooms</label>  
                <select id="room" name="room" required class="form-control">
                  <!-- <option disabled value="">Choose a day for the service</option> -->
                  <option value="" disabled>--choose--</option>  
                    <option value="1" >1-2</option>
                    <option value="3" >3</option>
                    <option value="4">4</option>
                    <option value="5">5</option>
                  </select>



                  <label for="" >Choose first service</label>  
                  <select id="first" name="first" required class="form-control">
                  <!-- <option disabled value="">Choose a day for the service</option> -->
                  <option value="" disabled>--choose--</option>  
                    <option value="cleaning" >Cleaning</option>
                    <option value="laundry" >Laundry</option>
                    <option value="House Help">House Help</option>
                  </select>



                  <label for="" >Choose second service</label>  
                <select id="second" name="second" required class="form-control">
                  <!-- <option disabled value="">Choose a day for the service</option> -->
                  <option value="" disabled>--choose--</option>  
                  <option value="cleaning" >Cleaning</option>
                    <option value="laundry" >Laundry</option>
                    <option value="House Help">House Help</option>
                  </select>


                </div>
              </div>
              
                    <input type="hidden" name="service" value="multiple">
                    <input type="hidden" name="multiple" value="1">
                      <input type="hidden" name="package" value="cheryl_2">
                    <button type="submit" name="submit" class="btn btn-primary"> Choose Package</button>
                    </form>
                </div>
              </div>
            </div>
          </div>

          <div class="col-md-6 mb-5 mb-lg-0 col-lg-4 text-center">
            <div class="blog_entry">
              <div class="p-4 bg-white">              
                <h3><a href="#!">
                 
                 <span style="font-size:30px">JADEN</span><sub class="sup" >popular</sub>2 SERVICES
                
                  </a></h3>
                <!-- <span class="date">Delivery Service</span> -->
                <p>This package our clients decide to use our package 12 TIMES OR DAYS in a month <br> (That is three times a week)</p>
                <!-- <p class="more"><a href="#!">Read More</a></p> -->
                <h5 style="color:#9C3438">
                    PRICING
                </h5>
         
                    <li class="room">1-2 BEDROOM FLAT  =  N30,000</li>
                    <li class="room">3 BEDROOM FLAT  =  N36,000</li>
                    <li class="room">4 BEDROOM FLAT  =  N42,000</li>
                    <li class="room">5 BEDROOM FLAT  =  N45,000</li>
                    <br>
                <div>
                <form action="form.php" method="POST">
                  <div class="row mb-4">
                <div class="form-group col-12" style="text-align: left;">
                <label for="" >Choose number of rooms</label>  
                <select id="room" name="room" required class="form-control">
                  <!-- <option disabled value="">Choose a day for the service</option> -->
                  <option value="" disabled>--choose--</option>  
                    <option value="1" >1-2</option>
                    <option value="3" >3</option>
                    <option value="4">4</option>
                    <option value="5">5</option>
                  </select>
                  <label for="" >Choose first service</label>  
                  <select id="room" name="room" required class="form-control">
                  <!-- <option disabled value="">Choose a day for the service</option> -->
                  <option value="" disabled>--choose--</option>  
                    <option value="cleaning" >Cleaning</option>
                    <option value="laundry" >Laundry</option>
                    <option value="House Help">House Help</option>
                  </select>
                  <label for="" >Choose second service</label>  
                <select id="room" name="room" required class="form-control">
                  <!-- <option disabled value="">Choose a day for the service</option> -->
                  <option value="" disabled>--choose--</option>  
                    <option value="cleaning" >Cleaning</option>
                    <option value="laundry" >Laundry</option>
                    <option value="House Help">House Help</option>
                  </select>
                </div>
              </div>
                    <input type="hidden" name="service" value="multiple">
                      <input type="hidden" name="package" value="jaden_2">
                    <button type="submit" name="submit" class="btn btn-primary"> Choose Package</button>
                    </form>
                </div>
              </div>
            </div>
          </div>

          <div class="col-md-6 mb-5 mb-lg-0 col-lg-4 text-center">
            <div class="blog_entry">
              <div class="p-4 bg-white">
             <h3><a href="#!">
                 
                 <span style="font-size:30px">REX</span><sub class="sup" >Best</sub>3 SERVICES
                
                  </a></h3>
                <!-- <span class="date">Delivery Service</span> -->
                <p>This package our clients decide to use our package 10 TIMES OR DAYS in a month <br> (That is four times a week)</p>
                <!-- <p class="more"><a href="#!">Read More</a></p> -->
                <h5 style="color:#9C3438">
                    PRICING
                </h5>
                <br><br>
                   <i>     Strictly on Clients Demand</i>
                    <br><br><br>
                <div>
                    <a href="form.php?pk=r" class="btn btn-primary"> Choose Package</a>
                </div>
                
              </div>
            </div>
          </div>
        </div>
        <br><br><br><br> <br><br>
        <div class="row ">
       
        <div class="col-12 mb-5 position-relative">
            <!-- <h2 class="section-title text-center mb-5">Select a package</h2> -->
            <div class="text-center">
           Includes all 3 services
                  </div>
          </div>

        
          <div class="col-md-6 mb-5 mb-lg-0 col-lg-4 text-center">
            <div class="blog_entry">
              <div class="p-4 bg-white">
                <!-- <i class="icon-lock" style="font-size:5rem;color:#2D315E" aria-hidden="true"></i>                   -->
                <h3><a href="#!">
                 
                    <span style="font-size:30px">CHERYL</span><sub class="sup" >cheap</sub>3 SERVICES
                   
                     </a></h3>
                <!-- <span class="date">Delivery Service</span> -->
                <p>This package our clients decide to use our package 4 TIMES OR DAYS in a month <br> (That is once a week)</p>
                <!-- <p class="more"><a href="#!">Read More</a></p> -->
                <h5 style="color:#9C3438">
                    PRICING
                </h5>
         
                <li class="room">1-2 BEDROOM FLAT  =  N20,000</li>
                    <li class="room">3 BEDROOM FLAT  =  N25,000</li>
                    <li class="room">4 BEDROOM FLAT  =  N30,000</li>
                    <li class="room">5 BEDROOM FLAT  =  N37,500</li>
                    <br>
                <div>
                <form action="form.php" method="POST">
                  <div class="row mb-4">
                <div class="form-group col-12" style="text-align: left;">
                <label for="" >Choose number of rooms</label>  
                <select id="room" name="room" required class="form-control">
                  <!-- <option disabled value="">Choose a day for the service</option> -->
                  <option value="" disabled>--choose--</option>  
                    <option value="1" >1-2</option>
                    <option value="3" >3</option>
                    <option value="4">4</option>
                    <option value="5">5</option>
                  </select>
                </div>
              </div>
                    <input type="hidden" name="service" value="all">
                      <input type="hidden" name="package" value="cheryl">
                    <button type="submit" name="submit" class="btn btn-primary"> Choose Package</button>
                    </form>
                </div>
              </div>
            </div>
          </div>

          <div class="col-md-6 mb-5 mb-lg-0 col-lg-4 text-center">
            <div class="blog_entry">
              <div class="p-4 bg-white">              
                <h3><a href="#!">
                 
                 <span style="font-size:30px">JADEN</span><sub class="sup" >popular</sub>3 SERVICES
                
                  </a></h3>
                <!-- <span class="date">Delivery Service</span> -->
                <p>This package our clients decide to use our package 12 TIMES OR DAYS in a month <br> (That is three times a week)</p>
                <!-- <p class="more"><a href="#!">Read More</a></p> -->
                <h5 style="color:#9C3438">
                    PRICING
                </h5>
         
                <li class="room">1-2 BEDROOM FLAT  =  N50,000</li>
                    <li class="room">3 BEDROOM FLAT  =  N60,000</li>
                    <li class="room">4 BEDROOM FLAT  =  N70,000</li>
                    <li class="room">5 BEDROOM FLAT  =  N75,000</li>
                    <br>
                <div>
                <form action="form.php" method="POST">
                  <div class="row mb-4">
                <div class="form-group col-12" style="text-align: left;">
                <label for="" >Choose number of rooms</label>  
                <select id="room" name="room" required class="form-control">
                  <!-- <option disabled value="">Choose a day for the service</option> -->
                  <option value="" disabled>--choose--</option>  
                    <option value="1" >1-2</option>
                    <option value="3" >3</option>
                    <option value="4">4</option>
                    <option value="5">5</option>
                  </select>
                </div>
              </div>
                    <input type="hidden" name="service" value="all">
                      <input type="hidden" name="package" value="cheryl">
                    <button type="submit" name="submit" class="btn btn-primary"> Choose Package</button>
                    </form>
                </div>
              </div>
            </div>
          </div>

          <div class="col-md-6 mb-5 mb-lg-0 col-lg-4 text-center">
            <div class="blog_entry">
              <div class="p-4 bg-white">
             <h3><a href="#!">
                 
                 <span style="font-size:30px">REX</span><sub class="sup" >Best</sub>2 SERVICES
                
                  </a></h3>
                <!-- <span class="date">Delivery Service</span> -->
                <p>This package our clients decide to use our package 10 TIMES OR DAYS in a month <br> (That is four times a week)</p>
                <!-- <p class="more"><a href="#!">Read More</a></p> -->
                <h5 style="color:#9C3438">
                    PRICING
                </h5>
                <br><br>
                   <i>     Strictly on Clients Demand</i>
                    <br><br><br>
                <div>
                    <a href="form.php?pk=r" class="btn btn-primary"> Choose Package</a>
                </div>
                
              </div>
            </div>
          </div>
        </div>
      </div>
</div>
<?php 
include('footer.php');
?>