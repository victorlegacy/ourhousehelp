<?php
include('header-new.php');


?>
 <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&amp;family=Volkhov:wght@700&amp;display=swap" rel="stylesheet">
    <!-- Font Awesome CDN  -->
    <script src="https://kit.fontawesome.com/1e78e0a43f.js" crossorigin="anonymous"></script>
    <!-- Stylesheets -->
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/custom.css">
    <link rel="stylesheet" href="assets/css/custommade.css">
    <link rel="stylesheet" href="assets/css/new.css"> 
<link rel="stylesheet" href="order.css">
<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/toastify-js/src/toastify.min.css">
	  <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/toastify-js"></script>
<style>
  body{
    background: url('assets/img/bg.webp');
    background-position: center;
    background-size: cover;
  }
  /* Hide the default radio buttons */
  .checkbox-wrapper-16 *,
    .checkbox-wrapper-16 *:after,
    .checkbox-wrapper-16 *:before {
    box-sizing: border-box;
  }

  .checkbox-wrapper-16 .checkbox-input {
    clip: rect(0 0 0 0);
    -webkit-clip-path: inset(100%);
    clip-path: inset(100%);
    height: 1px;
    overflow: hidden;
    position: absolute;
    white-space: nowrap;
    width: 1px;
  }

  .checkbox-wrapper-16 .checkbox-input:checked + .checkbox-tile {
    border-color: #2260ff;
    box-shadow: 0 5px 10px rgba(0, 0, 0, 0.1);
    color: #2260ff;
  }

  .checkbox-wrapper-16 .checkbox-input:checked + .checkbox-tile:before {
    transform: scale(1);
    opacity: 1;
    background-color: #2260ff;
    border-color: #2260ff;
  }

  .checkbox-wrapper-16 .checkbox-input:checked + .checkbox-tile .checkbox-icon,
    .checkbox-wrapper-16 .checkbox-input:checked + .checkbox-tile .checkbox-label {
    color: #2260ff;
  }

  .checkbox-wrapper-16 .checkbox-input:focus + .checkbox-tile {
    border-color: #2260ff;
    box-shadow: 0 5px 10px rgba(0, 0, 0, 0.1), 0 0 0 4px #b5c9fc;
  }

  .checkbox-wrapper-16 .checkbox-input:focus + .checkbox-tile:before {
    transform: scale(1);
    opacity: 1;
  }

  .checkbox-wrapper-16 .checkbox-tile {
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: center;
    width: 12rem;
    min-height: 7rem;
    border-radius: 0.5rem;
    border: 2px solid #b5bfd9;
    background-color: #fff;
    box-shadow: 0 5px 10px rgba(0, 0, 0, 0.1);
    transition: 0.15s ease;
    cursor: pointer;
    position: relative;
  }

  .checkbox-wrapper-16 .checkbox-tile:before {
    content: "";
    position: absolute;
    display: block;
    width: 1.25rem;
    height: 1.25rem;
    border: 2px solid #b5bfd9;
    background-color: #fff;
    border-radius: 50%;
    top: 0.25rem;
    left: 0.25rem;
    opacity: 0;
    transform: scale(0);
    transition: 0.25s ease;
    background-image: url("data:image/svg+xml,%3Csvg xmlns='://www.w3.org/2000/svg' width='192' height='192' fill='%23FFFFFF' viewBox='0 0 256 256'%3E%3Crect width='256' height='256' fill='none'%3E%3C/rect%3E%3Cpolyline points='216 72.005 104 184 48 128.005' fill='none' stroke='%23FFFFFF' stroke-linecap='round' stroke-linejoin='round' stroke-width='32'%3E%3C/polyline%3E%3C/svg%3E");
    background-size: 12px;
    background-repeat: no-repeat;
    background-position: 50% 50%;
  }

  .checkbox-wrapper-16 .checkbox-tile:hover {
    border-color: #2260ff;
  }

  .checkbox-wrapper-16 .checkbox-tile:hover:before {
    transform: scale(1);
    opacity: 1;
  }

  .checkbox-wrapper-16 .checkbox-icon {
    transition: 0.375s ease;
    color: #494949;
  }

  .checkbox-wrapper-16 .checkbox-icon svg {
    width: 3rem;
    height: 3rem;
  }

  .checkbox-wrapper-16 .checkbox-label {
    color: #707070;
    transition: 0.375s ease;
    text-align: center;
  }

</style>
<script>
      function show(id){
        next_id = id + 1;
        prev_id = id -1 ;
        prev = "section" + prev_id;
        next = "section" + next_id;
        
        page = "section"+id;
        document.getElementById(page).style.display="block";
        if(id > 1){
          document.getElementById(prev).style.display="none";
         
        }
        document.getElementById(next).style.display="none";
     
      }               
    </script>
<body style="overflow-y: hidden !important;">
  <div id="progress-container">
    <div id="progress-bar"></div>
</div>
  <div class='pattern'></div>
    <main class="page-auth">
      <div class="container">
        <div class="custom-form-width">
          <section class="auth-wrapper">
            <div style="margin:auto;overflow-y:hidden !important;" class="my-10" >
              <form method="POST" action="details_cook.php">
              <div class="additionalSection" id="section1">
                  <!-- <div class="arrow-container">
                    <div class="arrow" onclick="show(2)">  > </div>
                  </div> -->
                  <br>
                  <h2 class="auth-section-title" style="font-size: larger;color:#2D315E">Your Details</h2>
                  <br>
                      <div class="form-group">
                          <label>First Name</label>
                          <input type="text" class="form-control" name="fname">
                      </div>
                      <div class="form-group">
                          <label>Last Name</label>
                          <input type="text" class="form-control" name="lname">
                      </div>                     
                      <div class="form-group">
                          <label>Phone Number</label>
                          <input type="text" class="form-control" name="phone" >
                      </div>
                      <div class="form-group">
                          <label>E-mail</label>
                          <input type="text" class="form-control" name="email" >
                      </div>
                        
                      <a class="btn btn-warning btn-auth-submit" style="width: 40%;color:white" onclick="show('2')">Next</a >                
                </div>

            <!-- Section 2 -->

            <div id="section2" class="additionalSection" style="display: none;">
              <div class="arrow-container">
                <div class="arrow left" onclick="show(1)"> < </div>
                
              </div>
              <div class="animate__animated animate__backInRight">
                <div class="icon-div">
                  <i style="color:#2D315E" class="fas fa-user-circle fa-5x new-primary-text"></i>
                </div>
                <br>
                 
                  <h2 class="auth-section-title" style="font-size: larger;color:#2D315E">Your Details</h2>
                  <br>     
                    <div class="form-group">
                        <label>Location</label>
                        <select class="form-control" name="" id="location">
                          <option value="abuja">Abuja   </option>
                          <option value="lagos">Lagos  </option>
                          <option value="ph">Port Harcout  </option>
                        </select>
                    </div>
                      <div class="form-group">
                          <label>Address</label>
                          <textarea id="address" class="form-control" name="address" rows="4"></textarea>
                          
                      </div>               
                      <div class="form-group">
                          <label>Landmark close to address(optional)</label>
                          <input id="phone" type="text" class="form-control" name="phone" >
                      </div>
                      <div class="form-group">
                          <label>Birthmonth (optional)</label>
                          <select id="bmonth" name="bmonth" class="form-control">
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
                      <div class="form-group">
                          <label>Birthday(optional)</label>
                          <select id="bday" name="bday" class="form-control">
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
                      </div>                        
                      <button type="submit" class="btn btn-warning btn-auth-submit" style="width: 40%;color:white" >Next</button>          
                  </div>
                </div>  
                <div id="section3" class="additionalSection" style="display: none;">
                </div>    
              </form>
            </div>
          </section>
        </div>
      </div>
    </main>

    <script>
    function clean(){
      var val =  document.getElementById('cleaning').value;
      if(val == 1){
          document.getElementById('cleaning').value = 0; 
      }else{
        document.getElementById('cleaning').value = 1; 
      }
      }
      function laund(){
      var val =  document.getElementById('laundry').value;
      if(val == 1){
          document.getElementById('laundry').value = 0; 
      }else{
        document.getElementById('laundry').value = 1; 
      }
      }
      function err(){
      var val =  document.getElementById('errand').value;
      if(val == 1){
          document.getElementById('errand').value = 0; 
      }else{
        document.getElementById('errand').value = 1; 
      }
      }
      function nan(){
      var val =  document.getElementById('nanny').value;
      if(val == 1){
          document.getElementById('nanny').value = 0; 
      }else{
        document.getElementById('nanny').value = 1; 
      }
      }
      function co(){
      var val =  document.getElementById('cook').value;
      if(val == 1){
          document.getElementById('cook').value = 0; 
      }else{
        document.getElementById('cook').value = 1; 
      }
      }
    
      function next() {
        var cleaning =  document.getElementById('cleaning').value;
        var laundry =  document.getElementById('laundry').value;
        var errand  =  document.getElementById('errand').value;
        var nanny =  document.getElementById('nanny').value;
        var cook  =  document.getElementById('cook').value;
        var checkboxes = document.getElementsByName('checkboxGroup');
          var isChecked = false;
          for (var i = 0; i < checkboxes.length; i++) {
            if (checkboxes[i].checked == true) {
              ready = 1;
              break;
            }else{
              ready = 0;
            }
          }
          if (ready == 0) {
            Toastify({
              text: "Please choose at least one service",
              duration: 2000,
              newWindow: true,
              close: true,
              gravity: "bottom", 
              position: "center", 
              stopOnFocus: true,
              style: {
              background: "#F76400",
              },
              onClick: function(){
                  // window.location = 'cart.php';
              } // Callback after click
              }).showToast();
            return false; // Prevent form submission
          } else {
              
        if (window.XMLHttpRequest) {
            xmlhttp = new XMLHttpRequest();
        } else {
            xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
        }
        xmlhttp.onreadystatechange = function() {
            if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {          
                // var res = xmlhttp.responseText;    
                // setTimeout(function(){window.location = 'package_order.php'},100)
                // show(2);
                window.location = 'package_order.php';
            }
        };
        xmlhttp.open("GET","service_cook.php?cleaning="+cleaning+"&&laundry="+laundry+"&&errand="+errand+"&&nanny="+nanny+"&&cook="+cook,true);
        xmlhttp.send();
    }
     
}

</script>
    <!-- Script  -->
    <!-- <script src="vendors/@popperjs/popper.min.js"></script>
    <script src="vendors/bootstrap/bootstrap.min.js"></script>
    <script src="vendors/is/is.min.js"></script>
    <script src="https://polyfill.io/v3/polyfill.min.js?features=window.scroll"></script>
    <script src="vendors/fontawesome/all.min.js"></script>
    <script src="assets/js/theme.js"></script> -->

    <!-- UIkit JS -->
  <script src="https://cdn.jsdelivr.net/npm/uikit@3.16.13/dist/js/uikit.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/uikit@3.16.13/dist/js/uikit-icons.min.js"></script>
</body>

<?php 

include('footer-new.php')
?>