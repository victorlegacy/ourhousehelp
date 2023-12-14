<?php 
include('config.php');
$sql = "SELECT * FROM terms";
$mysq = mysqli_query($conn,$sql);
$term = mysqli_fetch_all($mysq,MYSQLI_ASSOC);
 $tc = $term[0]['tc'];


?>


<div class="modal fade"  id="custome" tabindex="-1" role="dialog" aria-labelledby="custom" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Notice!</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <b>OUR STANDARD FOR AN APARTMENT</b>
        <br>
        <p>
          Our standard is a parlour, a kitchen and a max of 5 bedroom. Any extra room attracts a little token.
        </p>
        <b>NOTE</b>
        <br>
        <p>
         Our staff are trained to deliver effectively and efficiently within 3 <sup>1</sup>/<sub>2</sub> Hours so our client's have nothing to worry about
        </p>
        <b>NB</b>
        <br>
        <p>
         Our staff should be allowed to leave the client's premises as soon as they are done with the house or office chores.
        </p>
        <b>Agreement</b>
        <p>
            Clients must not make any agreement(written or oral) with our staff, without the company's knowledge. 
            <br>
            Any of such agreement is at client's risk
            <br> Any discipliniary action would be taken by the company and not the client. The clients should just report.
        </p>
      </div>
      <div class="modal-footer">
         <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <!--<a  href="custom_package.php" class="text-white btn btn-primary">I agree, continue</a>-->
      </div>
    </div>
  </div>
</div>

<div class="modal fade" id="tc" tabindex="-1" role="dialog" aria-labelledby="tc" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Terms & Conditions</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <!--<b>OUR STANDARD FOR AN APARTMENT</b>-->
        <br>
        <p><?php echo $tc ?>
        
        </p>
      </div>
      <div class="modal-footer">
         <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button> 
        <!--<a href="package.php?s=c"  class="text-white btn btn-primary">I agree, continue</a>-->
      </div>
    </div>
  </div>
</div>

    <footer class="site-section bg-light footer">
      <div class="container">
        <div class="row mb-5">
          <div class="col-md-3">
            <h3 class="footer-title">Address</h3>
            <p><span class="d-inline-block d-md-block">Block A, House 4, Plot 822, Da Akun Adawel Street,
              Akhnaton Estate, After Dunamis Church, Area 1
              Durumi District, Abuja.</p>
              
          </div>
          
          <div class="col-md-5 mx-auto">
            <div class="row">
              <div class="col-lg-4">
                <h3 class="footer-title">Quick Links</h3>
                <ul class="list-unstyled">
                  <li><a href="index.php#home-section">Home Section</a></li>
                  <li><a href="index.php#services-section">Services Section</a></li>
                  <li><a href="index.php#projects-section">Reels Section</a></li>
                  <li><a href="./staff">Staff Login</a></li>
                </ul>
              </div>
              <div class="col-lg-4">
                <h3 class="footer-title">Services</h3>
                <ul class="list-unstyled">
                  <li><a href="#">House Help</a></li>
                  <li><a href="inter.php">International service delivery</a></li>
                  <li><a href="https//:www.alongkab.net">Alongkab</a></li>
                </ul>
              </div>
              <div class="col-lg-4">
                <h3 class="footer-title">Info</h3>
                <ul class="list-unstyled">
                  <li><a href="#!" data-toggle="modal" data-target="#tc">Terms & Conditions</a></li>
                  <li><a href="#!" data-toggle="modal" data-target="#custome">Notice</a></li>
                  <!-- <li><a href="#">Copywriting</a></li> -->
                </ul>
              </div>
            </div>
          </div>
          <div class="col-md-3">
            <h3 class="footer-title">Follow Us</h3>
            <!-- <a href="#" class="social-circle m-2"><span class="icon-twitter"></span></a> -->
            <a href="#" class="social-circle m-2"><span class="icon-facebook"></span> @ourhousehelp4u</a>
            <br>
            <a href="#" class="social-circle m-2"><span class="icon-instagram"></span> @ourhousehelp4u</a>
            <br>
            <a href="#" class="social-circle m-2"><span class="icon-whatsapp"></span> 07066663868</a>
            <br>
            <a href="#" class="social-circle m-2"><span class="icon-phone"></span> 09091144474</a>
            <!-- <a href="#" class="social-circle m-2"><span class="icon-dribbble"></span></a>
            <a href="#" class="social-circle m-2"><span class="icon-linkedin"></span></a> -->
          </div>
        </div>
<div class="text-center">
            <div>
                  <h4>Powered By</h4>
                  <img src="images/logo.png" width="10%">
              </div>
        </div>
        <div class="row">
          <div class="col-12 text-center">
            <p>
                <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                Copyright &copy;
                <script>
                  document.write(new Date().getFullYear());
                </script> | All rights reserved 
                <!-- This template is made with <i class="icon-heart"
                  aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a> -->
                <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
              </p>  
          </div>
        </div>
        
      </div>
    </footer>

  </div> <!-- .site-wrap -->
  <!-- <script src="https://unpkg.com/ityped@1.0.2"></script> -->

  <script src="js/jquery-3.3.1.min.js"></script>
  <script src="js/jquery-ui.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/owl.carousel.min.js"></script>
  <script src="js/jquery.easing.1.3.js"></script>
  <script src="js/aos.js"></script>
  <script src="js/jquery.fancybox.min.js"></script>
  <script src="js/jquery.sticky.js"></script>
  <script src="js/isotope.pkgd.min.js"></script>

  
  <script src="js/main.js"></script>
  </body>
</html>