<?php 

session_start();

echo "<script>alert('Logged Out!'); </script>";	 
session_destroy(); 
header("location:../index.php");

?>