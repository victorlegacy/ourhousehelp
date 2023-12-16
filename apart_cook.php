<?php
$apart = $_GET['apart'];
setcookie('apart', $apart, time() + (86400 * 30), "/");
?>