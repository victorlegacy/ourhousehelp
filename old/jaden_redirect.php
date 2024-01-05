<?php 
$day = 10000;
$number = $numb;
if($number == 2){
    
    $first = $se[0];
   $second = $se[1];
  
$combo = $first.$second;
    if($first == 'cleaning' AND $second == 'laundry'){
        // $price = 16000;
        $price = 11000+(11000/2)+$day+$day;
    }elseif($first == 'cleaning' AND $second == 'errands'){
        $price = 11000+(11000/2)+$day+$day;
    }elseif($first == 'cleaning' AND $second == 'nanny'){
        $price = 16000+(11000/2)+$day+$day;
    }elseif($first == 'cleaning' AND $second == 'cooking'){
        $price = 25000+(11000/2)+$day+$day;
    }else{
    echo ' ';
    }


    if($first == 'laundry' AND $second == 'errands'){
        $price = 35000;
    }elseif($first == 'laundry' AND $second == 'nanny'){
        $price = 47000;
    }elseif($first == 'laundry' AND $second == 'cooking'){
        $price = 47000;
    }

    
    if($first == 'errands' AND $second == 'nanny'){
        $price = 47000;
    }elseif($first == 'errands' AND $second == 'cooking'){
        $price = 47000;
    }
    
    if($first == 'nanny' AND $second == 'cooking'){
        $price = 57000;
    } 

    
}elseif($number == 3){
     $first = $se[0];
   $second = $se[1];
   $third = $se[2];
   $combo = $first.$second.$third;
//    $sql = "SELECT * FROM pri"
$sql = "SELECT * FROM pricing WHERE service = '$first' AND package = 'jaden'";
$run = mysqli_query($conn,$sql);
$price = mysqli_fetch_all($run,MYSQLI_ASSOC);
// print_r($price);
 $first = $price[0]['price'];
$sql = "SELECT * FROM pricing WHERE service = '$second' AND package = 'jaden'";
$run = mysqli_query($conn,$sql);
$price = mysqli_fetch_all($run,MYSQLI_ASSOC);
// print_r($price);
 $second = $price[0]['price'];

$sql = "SELECT * FROM pricing WHERE service = '$third' AND package = 'jaden'";
$run = mysqli_query($conn,$sql);
$price = mysqli_fetch_all($run,MYSQLI_ASSOC);
// print_r($price);
 $third = $price[0]['price'];
   $price = $first + $second + $third;

       $discount =  0.35 * $price;
    $price = $price - $discount;
}elseif($number == 4){
    $first = $se[0];
    $second = $se[1];
    $third = $se[2];
    $fourth = $se[3];
$combo = $first.$second.$third.$fourth;
    //    $sql = "SELECT * FROM pri"
$sql = "SELECT * FROM pricing WHERE service = '$first' AND package = 'jaden'";
$run = mysqli_query($conn,$sql);
$price = mysqli_fetch_all($run,MYSQLI_ASSOC);
// print_r($price);
$first = $price[0]['price'];
$sql = "SELECT * FROM pricing WHERE service = '$second' AND package = 'jaden'";
$run = mysqli_query($conn,$sql);
$price = mysqli_fetch_all($run,MYSQLI_ASSOC);
// print_r($price);
$second = $price[0]['price'];

$sql = "SELECT * FROM pricing WHERE service = '$third' AND package = 'jaden'";
$run = mysqli_query($conn,$sql);
$price = mysqli_fetch_all($run,MYSQLI_ASSOC);
// print_r($price);
$third = $price[0]['price'];

$sql = "SELECT * FROM pricing WHERE service = '$fourth' AND package = 'jaden'";
$run = mysqli_query($conn,$sql);
$price = mysqli_fetch_all($run,MYSQLI_ASSOC);
// print_r($price);
$fourth = $price[0]['price'];

    $price = $first + $second + $third + $fourth;

     $discount =  0.35 * $price;
    $price = $price - $discount;
}elseif($number == 5){
    $first = $se[0];
    $second = $se[1];
    $third = $se[2];
    $fourth = $se[3];
    $fifth = $se[4];
$combo = $first.$second.$third.$fourth.$fifth;
    //    $sql = "SELECT * FROM pri"
$sql = "SELECT * FROM pricing WHERE service = '$first' AND package = 'jaden'";
$run = mysqli_query($conn,$sql);
$price = mysqli_fetch_all($run,MYSQLI_ASSOC);
// print_r($price);
$first = $price[0]['price'];
$sql = "SELECT * FROM pricing WHERE service = '$second' AND package = 'jaden'";
$run = mysqli_query($conn,$sql);
$price = mysqli_fetch_all($run,MYSQLI_ASSOC);
// print_r($price);
$second = $price[0]['price'];

$sql = "SELECT * FROM pricing WHERE service = '$third' AND package = 'jaden'";
$run = mysqli_query($conn,$sql);
$price = mysqli_fetch_all($run,MYSQLI_ASSOC);
// print_r($price);
$third = $price[0]['price'];

$sql = "SELECT * FROM pricing WHERE service = '$fourth' AND package = 'jaden'";
$run = mysqli_query($conn,$sql);
$price = mysqli_fetch_all($run,MYSQLI_ASSOC);
// print_r($price);
$fourth = $price[0]['price'];

$sql = "SELECT * FROM pricing WHERE service = '$fifth' AND package = 'jaden'";
$run = mysqli_query($conn,$sql);
$price = mysqli_fetch_all($run,MYSQLI_ASSOC);
// print_r($price);
$fifth = $price[0]['price'];

    $price = $first + $second + $third + $fourth + $fifth;

      $discount =  0.35 * $price;
    $price = $price - $discount;
}
?>