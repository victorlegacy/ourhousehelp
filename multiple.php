<?php 
include('header.php'); 
if(isset($_GET['ren'])){
    session_start();
   echo $_SESSION['ren'] = $_GET['ren'];
    if(isset($_SESSION['ren'])){
        include('renew_data.php');     
    }
}
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
                   <h3 class="" style="color:white"> HOME | MULTIPLE SERVICES </h3>
                    </div>
                  </div>
                  <br><br><br><br><br><br>
              </div>
            </div>
          </div>
            
        </div>
      </div>

    </div>  
    <style>
        label{
            /* line-height: 12px; */
            color:black !important;
            font-size: 20px;
        }
    </style>
    <div class="site-section">
      <div class="container">

        <div class="row ">
          
        <div class="col-12 mb-5 position-relative">
            <h2 class="section-title text-center mb-5">Choose services</h2>
          </div>
          <div class="col-md-2 mb-5 mb-lg-0 col-lg-2 text-center">
        <!-- Left spacing -->    
            </div>
        
            <div class="col-md-8 mb-5 mb-lg-0 col-lg-8 text-left">
            <div class="blog_entry">
              <div class="p-4 bg-white">              
              <!--<form action="cleaning_price.php" required method="POST"> -->
              <form action="multiple_package.php" required method="POST"> 
            <div class="row">
            <div class="col-md-6 mb-5 mb-lg-0 col-lg-6  ">
                <img src="images/cleaner.png" width="50rem" alt="">
                <input type="checkbox" name="cleaning" value="cleaning" id="cleaning"  onclick="apart()">
                <!--<input type="" name="c_price" id="c_price"> -->
                <!--<input type="" name="ap_desc" id="ap_desc"> -->
                 <label for="cleaning">Cleaning & Housekeeping  </label> <br> <br>
                 <br>
            </div> 
            <div class="col-md-6 mb-5 mb-lg-0 col-lg-6  ">
            
            <img src="images/washing-machine.png" width="50rem"  alt="">
            <input type="checkbox" name="laundry" value="laundry" id="laundry">
                 <label for="ironing">Laundry & Ironing</label> <br> <br>
            </div> 
            <div class="col-md-6 mb-5 mb-lg-0 col-lg-6  r">
            
            <img src="images/maid.png" width="50rem"  alt="">
            <input type="checkbox" name="errands" value="errands" id="errands">
                 <label for="errands">Errands & Housekeeping</label> <br> <br>
            </div> 
            <div class="col-md-6 mb-5 mb-lg-0 col-lg-6  ">
            <img src="images/nanny.png" width="50rem"  alt="">
            <input type="checkbox" name="nanny" value="nanny" id="nanny">
                 <label for="nanny">Nanny & Housekeeping</label> <br> <br>
            </div>  
            <div class="col-md-3 mb-5 mb-lg-0 col-lg-3 ">
            </div>
            <div class="col-md-6 mb-5 mb-lg-0 col-lg-6 text-center">
                
                <img src="images/cooking.png" width="50rem"  alt="">
            <input type="checkbox" name="cooking" value="cooking" id="cooking">
                 <label for="cooking">Cook & Errands</label>    <br>  <br>
        </div><div class="col-md-3 mb-5 mb-lg-0 col-lg-3 ">
            </div>
            </div>
                   <br> 
                
                <div style="text-align: center;">      
                <div id ="ap">
                <button type="submit" name="submit" class="btn btn-primary"> Done, Continue</button> 
                </div>
                </div>
                
            </div>
          </div>
            
         
        </div>
        <div class="col-md-2 mb-5 mb-lg-0 col-lg-2 text-center">
            
            </div>
        <br><br>
      </div>
</div>
    </div>
<br><br>

<div class="modal fade" id="cl" tabindex="-1" role="dialog" aria-labelledby="details" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel" style="color: #9C3438">Notice</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <h2 class="section-title text-center mb-5">Pick apartment type</h2>
         
                <div class="form-group col-12" style="text-align: left;">
                <label for="" >Select from list below</label>  
                <select name="room" required id="apartment" class="form-control" onchange="get_ap_desc()">
                  <option value="" disabled>--choose--</option>  
                    <option value="1">1 bedroom apartment</option>
                    <option value="2"> 2 bedroom apartment</option>
                    <option value="3">3 bedroom apartment</option>
                    <option value="4">4 bedroom apartment</option>
                    <option value="5">5 or more bedroom apartment</option>
                  </select>
                </div>
                <!--<div id="output">-->
                <!--</div>-->
                    <div id="a_desc">
                    <button type="submit" name="submit" class="btn btn-primary"> Continue</button>
                    </div>
               <br>

            </form>
      </div>

 
    </div>
  </div>
</div>
    

<script>
    function apart(){
        document.getElementById('ap').innerHTML = '<a  href="#!" data-toggle="modal" data-target="#cl" class="btn btn-primary"> Done, Continue</a>';
        
    }
    
    
     
  function get_ap_desc() {
      
        var select = document.getElementById("apartment");
        var str = select.options[select.selectedIndex].value;
       console.log(str);
        if (window.XMLHttpRequest) {
            // code for IE7+, Firefox, Chrome, Opera, Safari
            xmlhttp = new XMLHttpRequest();
        } else {
            // code for IE6, IE5
            xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
        }
        xmlhttp.onreadystatechange = function() {
            if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
                document.getElementById("output").innerHTML = xmlhttp.responseText;
            }
        };
        xmlhttp.open("GET","get_desc.php?r="+str,true);
        xmlhttp.send();
    }

</script>

<?php 
include('footer.php');
?>