<?php
include('header-new.php');

print_r($_COOKIE['package']);

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
              <form method="" action="product_upload.html">
              <div class="additionalSection" id="section1">
                <div class="arrow-container">
                  <!-- <div class="arrow left" onclick="show(1)"> < </div> -->
                  <div class="arrow" onclick="show(2)">  > </div>
                </div>
                <div class="animate__animated animate__backInRight bg-white p-5 rounded">
                <div class="icon-div ">
                  <i style="color:#2D315E" class="fas fa-tool fa-5x new-primary-text"></i>
                </div>
                <br>
                <h2 class="auth-section-title" style="font-size: larger;color:#2D315E">Choose a package</h2>
                <?php
                 
                ?>
                <br>
                <div class="checkbox-wrapper-16">
                <label class="checkbox-wrapper">
                <input class="checkbox-input" type="radio" name="checkboxGroup"  onclick="package('cheryl')">
                <span class="checkbox-tile">
                  <span class="checkbox-icon text-center">
                    <br>
                 <h1 class="text-center">4x</h1>
                 <span>per month</span>
                 <hr>
                
                  </span>
                  <span class="checkbox-label" style="color:#2D315E">Cheryl</span>
                </span>
              </label>
              <label class="checkbox-wrapper">
              <input class="checkbox-input" type="radio" name="checkboxGroup"  onclick="package('cheryl_plus')">
                <span class="checkbox-tile">
                  <span class="checkbox-icon text-center">
                    <br>
                 <h1 class="text-center">8x</h1>
                 <span>per month</span>
                 <hr>
                
                  </span>
                  <span class="checkbox-label" style="color:#2D315E">Cheryl +</span>
                </span>
              </label>
              <label class="checkbox-wrapper">
              <input class="checkbox-input" type="radio" name="checkboxGroup"  onclick="package('jaden')">
                <span class="checkbox-tile">
                  <span class="checkbox-icon text-center">
                    <br>
                 <h1 class="text-center">12x</h1>
                 <span>per month</span>
                 <hr>
                
                  </span>
                  <span class="checkbox-label" style="color:#2D315E">Jaden</span>
                </span>
              </label>
              <label class="checkbox-wrapper">
              <input class="checkbox-input" type="radio" name="checkboxGroup"  onclick="package('jaden_plus')">
                <span class="checkbox-tile">
                  <span class="checkbox-icon text-center">
                    <br>
                 <h1 class="text-center">16x</h1>
                 <span>per month</span>
                 <hr>
                
                  </span>
                  <span class="checkbox-label" style="color:#2D315E">Jaden +</span>
                </span>
              </label>
              <label class="checkbox-wrapper">
              <input class="checkbox-input" type="radio" name="checkboxGroup"  onclick="package('rex')">
                <span class="checkbox-tile">
                  <span class="checkbox-icon text-center">
                    <br>
                 <h1 class="text-center">20x</h1>
                 <span>per month</span>
                 <hr>
                
                  </span>
                  <span class="checkbox-label" style="color:#2D315E"><b>Rex</b></span>
                </span>
              </label>
            </div>
              <br>
                <a class="btn btn-warning" style="width: 40%;background:#2D315E;color:white" onclick="next()">Next</a>
            </div>
            </div>

       <input type="hidden" name="" id="pack_val" value="0">
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
    function package(pack){
        document.getElementById('pack_val').value = pack;
      }
    
      function next() {
        
        var package = document.getElementById('pack_val').value;
          
          if (package == 0) {
            Toastify({
              text: "Please select a package",
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
                 //show(3);
                window.location = 'apart_order.php';
            }
        };
        xmlhttp.open("GET","package_cook.php?package="+package);
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