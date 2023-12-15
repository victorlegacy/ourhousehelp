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
                <h2 class="auth-section-title" style="font-size: larger;">Select at least one service</h2>
                <br>
                <div class="checkbox-wrapper-16">
  <label class="checkbox-wrapper">
    <input class="checkbox-input" type="checkbox">
    <span class="checkbox-tile">
      <span class="checkbox-icon">
      <img src="images/cleaning.png" width="80px" alt="">
      </span>
      <span class="checkbox-label">Cleaning</span>
    </span>
  </label>
  <label class="checkbox-wrapper">
    <input class="checkbox-input" type="checkbox">
    <span class="checkbox-tile">
      <span class="checkbox-icon">
        <img src="images/washing-machine.png" style="opacity: 1;" width="80px" alt="">
      </span>
      <span class="checkbox-label">Laundry</span>
    </span>
  </label>
  <label class="checkbox-wrapper">
    <input class="checkbox-input" type="checkbox">
    <span class="checkbox-tile">
      <span class="checkbox-icon">
      <img src="images/maid.png" width="80px" alt="">
      </span>
      <span class="checkbox-label">Errand</span>
    </span>
  </label>
  <label class="checkbox-wrapper">
    <input class="checkbox-input" type="checkbox">
    <span class="checkbox-tile">
      <span class="checkbox-icon">
      <img src="images/maid (2).png" width="80px" alt="">
      </span>
      <span class="checkbox-label">Nanny</span>
    </span>
  </label>
  <label class="checkbox-wrapper">
    <input class="checkbox-input" type="checkbox">
    <span class="checkbox-tile">
      <span class="checkbox-icon">
      <img src="images/cooking.png" width="80px" alt="">
      </span>
      <span class="checkbox-label">Cook</span>
    </span>
  </label>
</div>


              <br>
                <button class="btn btn-warning btn-auth-submit" style="width: 40%;background:#2D315E" type="submit">Next</button>
            </div>
              </div>

              <!-- Section 2 -->

              <div id="section2" class="additionalSection" style="display: none;">
                <div class="arrow-container">
                  <div class="arrow left" onclick="show(1)">  </div>
                  <div class="arrow" onclick="show(3)">  > </div>
                </div>
                <div class="animate__animated animate__backInRight">
                  <div class="icon-div">
                    <i style="color:#2D315E" class="fas fa-shop fa-5x new-primary-text"></i>
                  </div>
                  <br>
                  <h2 class="auth-section-title" style="font-size: larger;">Select a service </h2>
                  <br>
                  <!-- <p class="auth-section-subtitle mt-2">With just a few minutes, you can start managing your business like a professional.</p> -->
                  <div class="form-group">
                      <input type="text" class="form-control" name="store" placeholder="Example: Cool Barbers, Mary's Store">
                  </div>
                  <button class="btn btn-warning btn-auth-submit" style="width: 40%;" type="submit">We Move</button>
              </div>
            </div>

            <!-- Section 3 -->

            <div id="section3" class="additionalSection" style="display: none;">
              <div class="arrow-container">
                <div class="arrow left" onclick="show(2)">  </div>
                <div class="arrow" onclick="show(4)">  > </div>
              </div>
              <div class="animate__animated animate__backInRight">
                <div class="icon-div">
                  <i style="color:#2D315E" class="fas fa-user-circle fa-5x new-primary-text"></i>
                </div>
                <br>
                <h2 class="auth-section-title" style="font-size: larger;">How your market be?.</h2>
                <br>
                <div class="radio-button-container">
                  <label class="radio-button">
                      <input type="radio" name="radio-option" value="option1" id="radio-option1">
                      Goods
                  </label>
                  <label class="radio-button">
                      <input type="radio" name="radio-option" value="option2" id="radio-option2">
                      Services
                  </label>
              </div>
              <br>
                <button class="btn btn-warning btn-auth-submit" style="width: 40%;" type="submit">We Move</button>
            </div>
          </div>
          
           <!-- Section 4 -->

           <div id="section4" class="additionalSection" style="display: none;">
            <div class="arrow-container">
              <div class="arrow left" onclick="show(3)">  </div>
              <div class="arrow" onclick="show(5)">  > </div>
            </div>
            <div class="animate__animated animate__backInRight">
              <div class="icon-div">
                <i style="color:#2D315E" class="fas fa-user-circle fa-5x new-primary-text"></i>
              </div>
              <br>
              <h2 class="auth-section-title" style="font-size: larger;">Which service be that</h2>
              <br>
              <!-- <p class="auth-section-subtitle mt-2">With just a few minutes, you can start managing your business like a professional.</p> -->
              <div class="form-group">
                 <select name="" id="">
                  <option value="">Hairdressing   </option>
                  <option value="">Barbing  </option>
                  <option value="">Tailoring  </option>
                  <option value="">IT Service(Hardware) ~ PC repairs | Installations</option>
                <option value="">IT Service(Software) ~ Coding | Graphic Design </option>
                  <option value="">Laundry</option>
                  <option value="">Printing & Customizations</option>
                  <option value="">Interior Decoration</option>
                  <option value="">Tutoring ~ Academic Related</option>
                  <option value="">Tutoring ~ Non-Academic</option>
                 </select>
              </div>
              <button class="btn btn-warning btn-auth-submit" style="width: 40%;" type="submit">We Move</button>
          </div>
        </div>

         <!-- Section 5 -->

         <div id="section5" class="additionalSection" style="display: none;">
          <div class="arrow-container">
            <div class="arrow left" onclick="show(4)">  </div>
            <div class="arrow" onclick="show(6)">  > </div>
          </div>
          <div class="animate__animated animate__backInRight">
            <div class="icon-div">
              <i style="color:#2D315E" class="fas fa-user-circle fa-5x new-primary-text"></i>
            </div>
            <br>
            <h2 class="auth-section-title" style="font-size: larger;">Oya give us your Business Name</h2>
            <br>
            <!-- <p class="auth-section-subtitle mt-2">With just a few minutes, you can start managing your business like a professional.</p> -->
            <div class="form-group">
                <input type="text" class="form-control" name="store" placeholder="Example: Cool Barbers, Mary's Store">
            </div>
            <button class="btn btn-warning btn-auth-submit" style="width: 40%;" type="submit">We Move</button>
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
        console.log(prev);
        console.log(page);
        console.log(next);
      }
    </script>
    <!-- Script  -->
    <script src="../vendors/@popperjs/popper.min.js"></script>
    <script src="../vendors/bootstrap/bootstrap.min.js"></script>
    <script src="../vendors/is/is.min.js"></script>
    <script src="https://polyfill.io/v3/polyfill.min.js?features=window.scroll"></script>
    <script src="../vendors/fontawesome/all.min.js"></script>
    <script src="../assets/js/theme.js"></script>

    <!-- UIkit JS -->
  <script src="https://cdn.jsdelivr.net/npm/uikit@3.16.13/dist/js/uikit.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/uikit@3.16.13/dist/js/uikit-icons.min.js"></script>
</body>

<?php 

include('footer-new.php')
?>