<?php
$package = $_GET['package'];
setcookie('package', $package, time() + (86400 * 30), "/");
?>