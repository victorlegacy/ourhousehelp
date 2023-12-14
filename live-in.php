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
                   <h3 class="" style="color:white"> HOME | LIVE-IN SERVICE  </h3>
                    </div>
                  </div>
                  <br><br><br><br><br><br>
              </div>
            </div>
          </div>
            
        </div>
      </div>

    </div>  
<!--<h3 class="text-center">You selected <span style="font:inherit;color:#9C3438"><?php echo $service ?> </span>only</h3>-->
    <div class="site-section">
      <div class="container">

        <div class="row ">
          
        <div class="col-12 mb-5 position-relative">
            <h2 class="section-title text-center mb-5">Select your apartment type</h2>
          </div>
          <div class="col-md-6 mb-5 mb-lg-0 col-lg-4 text-center">
        
          </div>

            <div class="col-md-6 mb-5 mb-lg-0 col-lg-4 text-center">
            <div class="blog_entry">
              <div class="p-4 bg-white">              
    
                <div>
                <form action="live-in-form.php" method="POST">
                  <div class="row mb-4">
                <div class="form-group col-12" style="text-align: left;">
               <div>
                <label for="" style="color:#9C3438">Select apartment <br></label>  
                 </div>
                   <select name="apartment" required id="ro_om_mj" onchange="
                  var select = document.getElementById('ro_om_mj');
                var text = select.options[select.selectedIndex].value;
            console.log(select)
                if(text == 2){
                document.getElementById('price_range').value = '₦40,000';
    
                }else if(text == 3){
                document.getElementById('price_range').value = '₦45,000';
                }else if(text == 4){
                    document.getElementById('price_range').value = '₦50,000';
                }else{
                document.getElementById('price_range').value = '₦60,000';
                }
                " class="form-control">
                  <option value="" disabled>--choose--</option>  
                    <option value="2" >2 bedroom apartment</option>
                    <option value="3" >3 bedroom apartment</option>
                    <option value="4">4 bedroom apartment</option>
                    <option value="5">5 or more bedroom apartment</option>
                  </select>
                 
                </div>
                <div class="form-group col-12" style="text-align: left;">
                     <label for="" style="color:#9C3438">Price range<br></label>  
                    <input class="form-control" name="price_range" readonly type="text" value="₦40,000" id="price_range">
                    </div>
              </div>
                  
                      
                      
                            <div id="goo" >
                    <button type="submit" name="submit" class="btn btn-primary"> Get service</a>      
                    
                    </div> 
                      
                      
                      
                      
                    
                    </form>
                </div>
              </div>
            </div>
          </div>
             

          <div class="col-md-6 mb-5 mb-lg-0 col-lg-4 text-center">
        
          </div>
        </div>
        <br><br>
      
      </div>
</div>


 <!--<script>-->
 <!--                   function dist() {-->
 <!--                     var e = document.getElementById("f_cc");-->
 <!--                     var text = e.options[e.selectedIndex].text;-->
                      
 <!--                     // console.log("sas");-->
 <!--                     if(text == 'Cleaning'){-->
 <!--                   //   document.getElementById('s_cc')[1].setAttribute("disabled", "1");-->
 <!--                   }else if(text == 'Laundry'){-->
 <!--                     document.getElementById('s_cc')[1].setAttribute("disabled", "1");-->
 <!--                     document.getElementById('s_cc')[2].setAttribute("selected","1");-->
 <!--                      document.getElementById('s_cc')[2].removeAttribute("disabled");-->
 <!--                     document.getElementById('goo').innerHTML = "<button type='submit' name='submit' class='btn btn-primary'> Choose Package</button>"-->
 <!--                   }else{-->
 <!--                       document.getElementById('s_cc')[2].setAttribute("disabled", "1");-->
 <!--                       document.getElementById('s_cc')[1].setAttribute("selected","1");-->
 <!--                       document.getElementById('s_cc')[1].removeAttribute("disabled");-->
 <!--                    document.getElementById('goo').innerHTML = "<button type='submit' name='submit' class='btn btn-primary'> Choose Package</button>" -->
 <!--                   }-->

                      
 <!--                   }-->
 <!--                 </script>-->
<?php 
include('footer.php');
?>