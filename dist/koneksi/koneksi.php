<?php
$koneksi = mysqli_connect("localhost", "root", "", "blitzwebapps");
if(!$koneksi){
die("Error koneksi: " .mysqli_connect_errno());
}
?>