<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

<!--
=========================================================
* Paper Dashboard 2 - v2.0.1
=========================================================

* Product Page: https://www.creative-tim.com/product/paper-dashboard-2
* Copyright 2020 Creative Tim (https://www.creative-tim.com)

Coded by www.creative-tim.com

 =========================================================

* The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software.
-->

<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <!-- <link rel="apple-touch-icon" sizes="76x76" href="./assets/img/apple-icon.png"> -->
  <link rel="icon" type="image/png" href="<?php echo base_url(); ?>/assets/img/logo.jpg">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <title>
   <?= $title; ?> 
  </title>
  <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
  <!--     Fonts and icons     -->
  <!-- <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" /> -->
  <!-- <link href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet"> -->
  <link href="<?php echo base_url(); ?>/assets/bower_components/font-awesome/css/font-awesome.min.css" rel="stylesheet" />
  <!-- CSS Files -->
  <link href="<?php echo base_url(); ?>/assets/css/bootstrap.min.css" rel="stylesheet" />
  <link href="<?php echo base_url(); ?>/assets/css/paper-dashboard.css?v=2.0.1" rel="stylesheet" />
  <script src="<?php echo base_url(); ?>/assets/js/core/jquery.min.js"></script>
</head>

<body class="">
  <div class="wrapper ">

    <?php $this->load->view('_layouts/sidebar'); ?>

    <div class="main-panel" style="min-height: 100vh;">
      <!-- Navbar -->
      <?php $this->load->view('_layouts/topbar'); ?>        
      <!-- End Navbar -->