<?php 
unset($_SESSION["id_customer"]);
unset($_SESSION["level"]);
header("Location:index.php");
?>