<?php 
include_once '../model/db.php';
landing_page_session_check();
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Welcome</title>
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <link rel="stylesheet" href="../css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="../css/AdminLTE.min.css">
  <link rel="stylesheet" href="../css/_all-skins.min.css">    
</head>
<body class="hold-transition skin-black-light sidebar-mini">
<div class="wrapper">
  <!-- header -->
  <header class="main-header">
    <a href="index.php" class="logo">
      <span class="logo-lg"><b>Admin</b></span>
      <span class="logo-mini"><b>Admin</b></span>
    </a>
    <nav class="navbar navbar-static-top">
      <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
        
      </a>
      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
          <li class="dropdown user user-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <!-- <img src="../img/periyar_univ.png" class="user-image" alt="User Image"> -->
              <span class="hidden-xs">Profile</span>
            </a>
            <ul class="dropdown-menu">
              <li class="user-header">
                <img src="../img/photo.jpeg " class="img-circle" alt="User Image">
                <h2>User name</h2>
              </li>
              <li class="user-footer">
                <div class="pull-right">
                  <a href="../controller/logout.php" class="btn btn-default btn-flat">Sign out</a>
                </div>
              </li>
            </ul>
          </li>
        </ul>
      </div>
    </nav>
  </header>
  <!-- sidebar -->
  <aside class="main-sidebar">
      <section class="sidebar">
        <ul class="sidebar-menu">
          <li><a href="#"><i class="fa fa-circle-o text-green "></i> <span>item 1</span></a></li>
          <li><a href="#"><i class="fa fa-circle-o text-green "></i> <span>item 2</span></a></li>
          <li><a href="#"><i class="fa fa-circle-o text-green "></i> <span>item 3</span></a></li>
        </ul>
      </section>
  </aside>
  <!-- Content -->
  <div class="content-wrapper">
       <section class="content">
