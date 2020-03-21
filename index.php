<?php
session_start();
include 'koneksi.php';
if (!empty($_SESSION["username"]) and !empty($_SESSION["passuser"])) {
  // header('location:home_admin.php');
}else{
  header('location:login.php');
}