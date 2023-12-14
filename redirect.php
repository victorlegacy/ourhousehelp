<?php 
include('config.php');

$se = array();
if(array_key_exists('cleaning',$_POST)){
     array_push($se,'cleaning');
}else{
    echo '';
}
if(array_key_exists('laundry',$_POST)){
    array_push($se,'laundry');
}else{
    echo ' ';
}
if(array_key_exists('errands',$_POST)){
    array_push($se,'errands');
}else{
    echo ' ';
}
if(array_key_exists('nanny',$_POST)){
    array_push($se,'nanny');
}else{
    echo ' ';
}
if(array_key_exists('cooking',$_POST)){
    array_push($se,'cooking');
}else{
    echo ' ';
}

 $number = count($se);
 $room = $_POST['room'];
        if($room == 1){
            $r_price = 12000;
        }elseif($room == 2){
             $r_price = 15000;
        }elseif($room == 3){
             $r_price = 18250;
        }elseif($room == 4){
           $r_price = 21750; 
        }elseif($room == 5){
            $r_price = 25750; 
        }else{
            $r_price = 0;
        }
        
         
 if($number == 1){
    $first = $se[0];
    if($first == 'cleaning'){
        $sh = 'c';
    }elseif($first == 'laundry'){
        $sh = 'l';
    }elseif($first == 'errands'){
        $sh = 'e';
    }elseif($first == 'nanny'){
        $sh = 'n';
    }elseif($first == 'cooking'){
        $sh = 'co';
    }else{
        $sh = 'nil';
    }
  
    echo "<script>window.location='package.php?s=$sh'</script>";
 }else{
    $service = 'multiple';
 }
if($number == 2){
    
    $first = $se[0];
   $second = $se[1];
    
$combo = $first.$second;
    if($first == 'cleaning' AND $second == 'laundry'){
        // include('cleaning_price.php');
       
        
        $price = $r_price+(15000/2);
    }elseif($first == 'cleaning' AND $second == 'errands'){
        
        $price = $r_price+(15000/2);
    }elseif($first == 'cleaning' AND $second == 'nanny'){
        $price = 20000+($r_price/2);
    }elseif($first == 'cleaning' AND $second == 'cooking'){
        $price = 25000+($r_price/2);
    }else{
    echo ' ';
    }


    if($first == 'laundry' AND $second == 'errands'){
       $price = 15000+(15000/2);
    }elseif($first == 'laundry' AND $second == 'nanny'){
        $price = 20000+(15000/2);
    }elseif($first == 'laundry' AND $second == 'cooking'){
        $price = 25000+(15000/2);
    }

    
    if($first == 'errands' AND $second == 'nanny'){
        $price = 20000+(15000/2);
    }elseif($first == 'errands' AND $second == 'cooking'){
       $price = 25000+(15000/2);
    }
    
    if($first == 'nanny' AND $second == 'cooking'){
        $price = 25000+(20000/2);
    } 

    
}elseif($number == 3){
    $first = $se[0];
   $second = $se[1];
   $third = $se[2];
   $combo = $first.$second.$third;
//    $sql = "SELECT * FROM pri"
$sql = "SELECT * FROM pricing WHERE service = '$first' AND package = 'cheryl'";
$run = mysqli_query($conn,$sql);
$price = mysqli_fetch_all($run,MYSQLI_ASSOC);
// print_r($price);
 $first = $price[0]['price']+4000;
$sql = "SELECT * FROM pricing WHERE service = '$second' AND package = 'cheryl'";
$run = mysqli_query($conn,$sql);
$price = mysqli_fetch_all($run,MYSQLI_ASSOC);
// print_r($price);
 $second = $price[0]['price']+4000;

$sql = "SELECT * FROM pricing WHERE service = '$third' AND package = 'cheryl'";
$run = mysqli_query($conn,$sql);
$price = mysqli_fetch_all($run,MYSQLI_ASSOC);
// print_r($price);
 $third = $price[0]['price']+4000;

 if($se[0] == 'cleaning'){
     
     $first = $r_price;
     $price = $first + ($second/2) + ($third/2);
 }else{
 $price = ($first/2) + ($second/2) + $third;
 }
}elseif($number == 4){
    $first = $se[0];
    $second = $se[1];
    $third = $se[2];
    $fourth = $se[3];
$combo = $first.$second.$third.$fourth;
    //    $sql = "SELECT * FROM pri"
$sql = "SELECT * FROM pricing WHERE service = '$first' AND package = 'cheryl'";
$run = mysqli_query($conn,$sql);
$price = mysqli_fetch_all($run,MYSQLI_ASSOC);
// print_r($price);
$first = $price[0]['price'];
$sql = "SELECT * FROM pricing WHERE service = '$second' AND package = 'cheryl'";
$run = mysqli_query($conn,$sql);
$price = mysqli_fetch_all($run,MYSQLI_ASSOC);
// print_r($price);
$second = $price[0]['price'];

$sql = "SELECT * FROM pricing WHERE service = '$third' AND package = 'cheryl'";
$run = mysqli_query($conn,$sql);
$price = mysqli_fetch_all($run,MYSQLI_ASSOC);
// print_r($price);
$third = $price[0]['price'];

$sql = "SELECT * FROM pricing WHERE service = '$fourth' AND package = 'cheryl'";
$run = mysqli_query($conn,$sql);
$price = mysqli_fetch_all($run,MYSQLI_ASSOC);
// print_r($price);
$fourth = $price[0]['price'];
 if($se[0] == 'cleaning'){
     $first = $r_price;
 }
    $price = ($first/2) + ($second/2) + ($third/2) + $fourth;

    //  $discount =  0.35 * $price;
    // $price = $price - $discount;
}elseif($number == 5){
    $first = $se[0];
    $second = $se[1];
    $third = $se[2];
    $fourth = $se[3];
    $fifth = $se[4];
$combo = $first.$second.$third.$fourth.$fifth;
    //    $sql = "SELECT * FROM pri"
$sql = "SELECT * FROM pricing WHERE service = '$first' AND package = 'cheryl'";
$run = mysqli_query($conn,$sql);
$price = mysqli_fetch_all($run,MYSQLI_ASSOC);
// print_r($price);
$first = $price[0]['price'];
$sql = "SELECT * FROM pricing WHERE service = '$second' AND package = 'cheryl'";
$run = mysqli_query($conn,$sql);
$price = mysqli_fetch_all($run,MYSQLI_ASSOC);
// print_r($price);
$second = $price[0]['price'];

$sql = "SELECT * FROM pricing WHERE service = '$third' AND package = 'cheryl'";
$run = mysqli_query($conn,$sql);
$price = mysqli_fetch_all($run,MYSQLI_ASSOC);
// print_r($price);
$third = $price[0]['price'];

$sql = "SELECT * FROM pricing WHERE service = '$fourth' AND package = 'cheryl'";
$run = mysqli_query($conn,$sql);
$price = mysqli_fetch_all($run,MYSQLI_ASSOC);
// print_r($price);
$fourth = $price[0]['price'];

$sql = "SELECT * FROM pricing WHERE service = '$fifth' AND package = 'cheryl'";
$run = mysqli_query($conn,$sql);
$price = mysqli_fetch_all($run,MYSQLI_ASSOC);
// print_r($price);
$fifth = $price[0]['price'];
if($se[0] == 'cleaning'){
     $first = $r_price;
 }
    $price = ($first/2) + ($second/2) + ($third/2) + ($fourth/2) + $fifth;

    //   $discount =  0.35 * $price;
    // $price = $price - $discount;
}
 $number;
?>

<!-- <h3>PRICE: <?php //echo $price ?></h3> -->