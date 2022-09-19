<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="BDS ParkingAdda - Park like a Boss">
    <meta name="author" content="Mohammed Sufian Shaikh">
    <title>LEGAL MIS</title>

    <?php $this->load->view('includes/cssfiles');?>
    <style>
        .bd-placeholder-img {
            font-size: 1.125rem;
            text-anchor: middle;
            -webkit-user-select: none;
            -moz-user-select: none;
            user-select: none;
        }

        @media (min-width: 768px) {
            .bd-placeholder-img-lg {
                font-size: 3.5rem;
            }
        }

        /* Show it is fixed to the top */
        body {
            min-height: 45rem;
            
        }
      
    </style>
 
</head>

<body>
<nav class="navbar navbar-default navbar-inverse">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="#">LEGAL MIS</a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav ">
      <li class="active"><a href="<?= site_url('dashboard') ?>">Home</a></li>
    
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Sales <span class="caret"></span></a>
          <ul class="dropdown-menu">
          <li><a href="<?= site_url('sales/add-deal') ?>">Add Sale/Deal</a></li>
          <li><a href="<?= site_url('sales') ?>">View all Sale/Deal</a></li>
          </ul>
        </li>
        <li class="active"><a href="<?= site_url('Masters') ?>">Masters</a></li>
        <li><a href="<?= site_url('dashboard/logout') ?>">Logout</a></li>
      </ul>
     
      <ul class="nav navbar-nav navbar-right">
      <li><a href="#" class="btn btn-success"><span class="glyphicon glyphicon-user"></span><?= $this->encryption->decrypt($this->session->userdata('username')) ?></a></li>
        <li><a href="#"><span class="glyphicon glyphicon-log-in"></span><?= $this->encryption->decrypt($this->session->userdata('role_name')) ?></a></li>
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>
