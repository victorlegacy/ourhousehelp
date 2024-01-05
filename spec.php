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
                <h2 class="auth-section-title" style="font-size: larger;color:#2D315E">Apartment Specifications </h2>
               <?php 
                $apart =  $_COOKIE['apart'];
               include('desc/'."$apart".'.php')
 ?>
                <div class="submit form-group col-8">
                    <a class="btn btn-warning" style="width: 40%;background:#2D315E;color:white" onclick="next()">Next</a>
                </div>
<script>
  function next(){
   var room = parseInt(document.getElementById('room').value);
   var parlor = parseInt(document.getElementById('parlor').value);
   var toilet = parseInt(document.getElementById('toilet').value);
   var kitchen = parseInt(document.getElementById('kitchen').value);
   var veranda = parseInt(document.getElementById('veranda').value);
   var passage = parseInt(document.getElementById('passage').value);
   var staircase = parseInt(document.getElementById('staircase').value);
   var w_room = parseInt(document.getElementById('w_room').value);
   var s_room = parseInt(document.getElementById('s_room').value);
   var compound = parseInt(document.getElementById('compound').value);
   var g_room = parseInt(document.getElementById('g_room').value);
   var spec_price = room+parlor+toilet+kitchen+veranda+passage+staircase+w_room+s_room+compound+g_room;
   console.log(spec_price);
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
                window.location = 'details_order.php';
            }
        };
        xmlhttp.open("GET","spec_cook.php?price="+spec_price);
        xmlhttp.send();
  }
</script>
 <script src="https://cdn.jsdelivr.net/npm/uikit@3.16.13/dist/js/uikit.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/uikit@3.16.13/dist/js/uikit-icons.min.js"></script>
</body>

<?php 

include('footer-new.php')
?>