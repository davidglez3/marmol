<?php
session_start();
session_destroy();
header('location:../Presentation/indexx.php');
exit();
?>
