<?php
  session_start();
  
  if(isset($_SESSION['username']) && $_SESSION['role']=='a'){
  }else {
    header("Location: /pages/login_form.php");
  }
?>

<!DOCTYPE html>
<html lang="es">
  <head>
  	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no user-scalable=no">
    <meta name="description" content="">
    <meta name="author" content="Fernando Balladares & Jimmy Guillin">

    <link rel="styleSheet" href="/assets/css/admin.css" type="text/css">
    <link href="/assets/lib/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <!-- Favicon, Windows tiles, apple icons, browser settings -->
    <link rel="apple-touch-icon" href="/assets/img/icons/apple-icon.png">
    <link rel="icon" type="image/png" sizes="192x192"  href="/assets/img/icons/android-icon-192x192.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/assets/img/icons/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="96x96" href="/assets/img/icons/favicon-96x96.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/assets/img/icons/favicon-16x16.png">
    <meta name="msapplication-TileColor" content="#282c2f">
    <meta name="msapplication-TileImage" content="/assets/img/icons/ms-icon-144x144.png">
    <meta name="theme-color" content="#282c2f">
