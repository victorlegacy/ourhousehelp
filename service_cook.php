<?php
$service = ['cleaning'=>'on','laundry'=>'on','errand'=>'on','nanny'=>'on','cook'=>'on'];
$cleaning = $_GET['cleaning'];
$laundry = $_GET['laundry'];
$errand = $_GET['errand'];
$nanny = $_GET['nanny'];
$cook = $_GET['cook'];

$service = ['cleaning'=>$cleaning,'laundry'=>$laundry,'errand'=>$errand,'nanny'=>$nanny,'cook'=>$cook];

// session_start();
// $_SESSION['service'] = $service;
// print_r($_SESSION['service']);
$service = serialize($service);
setcookie('service', $service, time() + (86400 * 30), "/");
?>  