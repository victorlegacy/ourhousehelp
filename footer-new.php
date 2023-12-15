<?php 
// include('config.php');
// $sql = "SELECT * FROM terms";
// $mysq = mysqli_query($conn,$sql);
// $term = mysqli_fetch_all($mysq,MYSQLI_ASSOC);
//  $tc = $term[0]['tc'];


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
<style>
  .fixed-botton  p{
    font-size: 3px;
  }
</style>
  <div class="bg-white fixed-bottom">
  <div class="text-center">
            <div>
                  <b>Powered By</b>
                  <img src="images/logo.png" style="display: inline;" width="10%">
              </div>
        </div>
        <div class="row">
          <div class="col-12 text-center">
            <p>
           <!--
                  document.write(new Date().getFullYear());
                </script> | All rights reserved  -->
                
              </p>  
          </div>
        </div>
        
  </div>
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