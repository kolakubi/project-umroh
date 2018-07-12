<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- bootstrap -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>asset/bootstrap/css/bootstrap.min.css">
    <!-- datatables css -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>asset/datatables/datatables.min.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>asset/datatables/buttons/css/buttons.bootstrap.min.css">
    <!-- font-awesome -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>asset/font-awesome/fa.min.css">
    <!-- favicon -->
    <link rel="shortcut icon" type="image/png" href="<?php echo base_url() ?>asset/image/favicon-sancu.png"/>
    <!-- extra style -->
    <style>
      *{
        font-family: verdana!important;
      }
    </style>
    <title>Dashboard</title>
  </head>
  <body>

    <!-- menu -->
    <nav class="navbar navbar-default">

      <div class="container-fluid">
        <div class="navbar-header">
          <!-- menu mobile -->
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <!-- logo -->
          <a class="navbar-brand" href="<?php echo base_url() ?>">
            <img alt="brand" src="<?php echo base_url() ?>asset/image/logo.png" style="max-width: 100px; margin-top: -10px;">
          </a>
        </div> <!-- end of nav-header -->

        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
          <ul class="nav navbar-nav">
            <li><a href="<?php echo base_url() ?>#">Beranda</a></li>
            <li><a href="<?php echo base_url() ?>#">Tentang</a></li>
            <!-- dropdown paket umroh -->
            <li>
              <a class="btn dropdown-toggle" data-toggle="dropdown">Paket Umroh
                <span class="caret"></span>
              </a>
              <ul class="dropdown-menu">
                <li><a href="<?php echo base_url() ?>#">Arafah</a></li>
                <li><a href="<?php echo base_url() ?>#">Minah</a></li>
                <li><a href="<?php echo base_url() ?>#">Safa</a></li>
              </ul>
            </li> <!-- end of dropdown paket umroh -->
            <li><a href="<?php echo base_url() ?>#">Paket Haji Plus</a></li>
            <li><a href="<?php echo base_url() ?>#">Gallery</a></li>
            <li><a href="<?php echo base_url() ?>#">Kontak</a></li>
          </ul>
          <!-- button logout -->
          <ul class="nav navbar-nav navbar-right" style="margin-right: 20px;">
            <li><a href="<?php echo base_url() ?>logout">Login/Daftar</a></li>
          </ul> <!-- end of button logout -->
        </div> <!-- end of navbar-collapse -->

      </div> <!-- end of container-->

    </nav>

    <!-- body wrapper -->
    <div class="container">