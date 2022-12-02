<?php 
unset($_SESSION["id_admin"]);
unset($_SESSION["level_admin"]);
header("Location:index.php");
?>