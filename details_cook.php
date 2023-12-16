<?php
$details = serialize($_POST);
setcookie('details', $details, time() + (86400 * 30), "/");

?>
<script>
    window.location = 'final.php';
</script>