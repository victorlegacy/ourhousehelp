<?php
include('header-new.php');
$order = $_COOKIE;
$service = unserialize($_COOKIE['service']);
echo $package = $_COOKIE['package'];
$apart = $_COOKIE['apart'];
$details = unserialize($_COOKIE['details']);

$valueToCount = 1;
$values = array_values($service);
$occurrences = array_count_values($values); 
$count = isset($occurrences[$valueToCount]) ? $occurrences[$valueToCount] : 0;
  
 if($count == 1){
    $cleaning = $service['cleaning'];
    $laundry =  $service['laundry'];
    $errand = $service['errand'];
    $nanny = $service['nanny'];
    $cook = $service['cook'];
   if($cleaning == 1){
    $price = $_COOKIE['s_price'];
    $price = $price + 8000; 
   }elseif($laundry == 1){
    $service = 'laundry'; 
    $sql = "SELECT * FROM pricixng WHERE service = '$service' AND package = '$package'";
    $run = mysqli_query($conn,$sql);
    $serv = mysqli_fetch_all($run,MYSQLI_ASSOC);
    $price = $serv[0]['price'];
   }elseif($errand == 1){
    $service = 'errands'; 
    $sql = "SELECT * FROM pricing WHERE service = '$service' AND package = '$package'";
    $run = mysqli_query($conn,$sql);
    $serv = mysqli_fetch_all($run,MYSQLI_ASSOC);
    $price = $serv[0]['price'];
   }elseif($nanny == 1){
    $service = 'nanny'; 
    $sql = "SELECT * FROM pricing WHERE service = '$service' AND package = '$package'";
    $run = mysqli_query($conn,$sql);
    $serv = mysqli_fetch_all($run,MYSQLI_ASSOC);
    $price = $serv[0]['price'];
   }else{
    $service = 'cooking'; 
    $sql = "SELECT * FROM pricing WHERE service = '$service' AND package = '$package'";
    $run = mysqli_query($conn,$sql);
    $serv = mysqli_fetch_all($run,MYSQLI_ASSOC);
    $price = $serv[0]['price'];
   }
 }else{
  $serv = 1;
 }
 

 if($package == 'cheryl_plus'){
    $price = $price +  8000;
  }elseif($package == 'jaden'){
    $price = $price + 10000;
  }elseif($package == 'jaden_plus'){
      $price = $price + 18000;
  }else{
    $price = $price;
  }
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
    width: 7rem;
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
              <form method="">
              <div class="additionalSection" id="section1">
                <div class="arrow-container">
                  <!-- <div class="arrow left" onclick="show(1)"> < </div> -->
                  <!-- <div class="arrow" onclick="show(2)">  > </div> -->
                </div>
                <div class="animate__animated animate__backInRight bg-white p-5 rounded">
                <h2 class="auth-section-title" style="font-size: larger;color:#2D315E">Order Summary </h2>
                <hr>
                <label for="">Service</label>
                <div class="checkbox-wrapper-16">
                    <?php
                    //  $cleaning = $service['cleaning'];
                    //  $laundry =  $service['laundry'];
                    //  $errand = $service['errand'];
                    //  $nanny = $service['nanny'];
                    //  $ccok = $service['cook'];
                    // print_r($service);
                    if($cleaning == 1){?>
                     <label class="checkbox-wrapper">
                 <span class="checkbox-tile">
                  <span class="checkbox-icon">
                  <img src="images/cleaning.png" width="50px" alt="">
                  </span>
                  <span class="checkbox-label">Cleaning</span>
                </span>
              </label>
                    <?php }elseif($laundry == 1){?>

    
                        <label class="checkbox-wrapper">
                 <span class="checkbox-tile">
                  <span class="checkbox-icon">
                    <img src="images/washing-machine.png" style="opacity: 1;" width="50px" alt="">
                  </span>
                  <span class="checkbox-label">Laundry</span>
                </span>
              </label>
                    <?php }elseif($errand == 1){?>

                        <label class="checkbox-wrapper">
                 <span class="checkbox-tile">
                  <span class="checkbox-icon">
                  <img src="images/maid.png" width="50px" alt="">
                  </span>
                  <span class="checkbox-label">Errand</span>
                </span>
              </label>
                        <?php }elseif($nanny == 1){?>
                            <label class="checkbox-wrapper">
                 <span class="checkbox-tile">
                  <span class="checkbox-icon">
                  <img src="images/maid (2).png" width="50px" alt="">
                  </span>
                  <span class="checkbox-label">Nanny</span>
                </span>
              </label>
                            <?php }elseif($cook == 1){?>
                                <label class="checkbox-wrapper">
                 <span class="checkbox-tile">
                  <span class="checkbox-icon">
                  <img src="images/cooking.png" width="50px" alt="">
                  </span>
                  <span class="checkbox-label">Cook</span>
                </span>
              </label>
               <?php }else{return;}    ?> 
            </div>
            <hr>
             <b>Package</b>
             <br> 
            <?php 
                if($order['package'] == 'cheryl'){?>
                    <label class="checkbox-wrapper">
              
                <span class="checkbox-tile">
                  <span class="checkbox-icon text-center">
                    <br>
                 <h1 class="text-center">4x</h1>
                 <span>per month</span>
                 
                
                  </span>
                </span>
              </label>
                <?php }elseif($order['package'] == 'cheryl_plus'){?>
                    <label class="checkbox-wrapper">
              
                <span class="checkbox-tile">
                  <span class="checkbox-icon text-center">
                    <br>
                 <h1 class="text-center">8x</h1>
                 <span>per month</span>
                 
                  </span>
                </span>
              </label>
                    <?php }elseif($order['package'] == 'jaden'){ ?>
                        <label class="checkbox-wrapper">
              
                <span class="checkbox-tile">
                  <span class="checkbox-icon text-center">
                    <br>
                 <h1 class="text-center">12x</h1>
                 <span>per month</span>
               
                  </span>
                </span>
              </label>
               <?php  }elseif($order['package'] == 'jaden_plus'){?>
                <label class="checkbox-wrapper">
              
                <span class="checkbox-tile">
                  <span class="checkbox-icon text-center">
                    <br>
                 <h1 class="text-center">16x</h1>
                 <span>per month</span>
                  
                
                  </span>
              </span>
              </label>
                <?php }else{ ?>
                    <label class="checkbox-wrapper">
             
                <span class="checkbox-tile">
                  <span class="checkbox-icon text-center">
                    <br>
                 <h1 class="text-center">20x</h1>
                 <span>per month</span>
                 <hr>
                
                  </span>
                </span>
              </label>
                    <?php }
            ?>
            <hr>
              <b>Apartment Type</b>
             <br> 
             <label for="">
             <?php 
                $apart =  $_COOKIE['apart'];
                if($apart == 1){
                    echo "Self Contain";
                }elseif($apart == 2){
                    echo "2 BEDROOM APARTMENT";
                }elseif($apart == 3){
                    echo "3 BEDROOM APARTMENT";
                }elseif($apart == 4){
                    echo "4 BEDROOM APARTMENT";
                }elseif($apart == 5){
                    echo "5+ BEDROOM APARTMENT";
                }
             ?></label>
             <hr>
            <div class="label">
                 <b>Total:</b><br>
                 <h3 style="color:#2D315E">₦ <?php echo number_format($price)  ?></h3>
                 <input type="hidden" value="<?php echo $price ?>" name="price" id="price">
            </div>
            <hr>
                <div class="submit">
                    <!-- <a class="btn btn-warning" style="width: 40%;background:#2D315E;color:white" onclick="next()">Next</a> -->
                    <a href="save.php" class="btn" style="width: 40%;background:#2D315E;color:white">Finish</a>
                </div>
            </div>
            </div>
          </form>
            </div>
          </section>
        </div>
      </div>
    </main>
    
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