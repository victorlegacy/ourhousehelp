<?php 
    include('config.php');
    session_start();
    echo $i_d = $_SESSION['ren'];
    $sql = "SELECT * FROM order_details WHERE id = '$i_d'";
    $client = mysqli_query($conn,$sql);
    if($client){
    $cl = mysqli_fetch_all($client,MYSQLI_ASSOC);
       $fnam = $cl[0]['first_name'];
       $lnam = $cl[0]['full_name'];
       $emma = $cl[0]['email'];
       $phon = $cl[0]['phone'];
       $addr = $cl[0]['address'];
       $land = $cl[0]['landmark'];
    }
?>