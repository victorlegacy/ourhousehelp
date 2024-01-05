<?php
$price = $_GET['price'];
setcookie('s_price', $price, time() + (86400 * 30), "/");
?>