<?php
include('config.php');
$package = 'cheryl';
$room = 4;
$sql = "SELECT * FROM $package WHERE rooms = '$room'";
$run = mysqli_query($conn,$sql);
$tins = mysqli_fetch_all($run,MYSQLI_ASSOC);
echo $tins[0]['price'];
?>