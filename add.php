<?php 
include('config.php');
$l_id  = $_GET['q'];
$sql = "UPDATE order_details SET confirm = 1 WHERE id = '$l_id'";
$run = mysqli_query($conn,$sql);
if($run){
    return 0;
}
?>