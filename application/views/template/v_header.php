<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
	    <meta http-equiv="X-UA-Compatible" content="IE=edge">
	    <meta name="viewport" content="width=device-width, initial-scale=1">
	    <meta name="description" content="">
	    <meta name="author" content="">

	    <title>Contage</title>

	    <!-- Bootstrap Core CSS -->
	    <link href="<?php echo base_url("media")?>/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

	    <!-- Custom Fonts -->
	    <link href="<?php echo base_url("media")?>/vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
	    <!-- <link href='https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
	    <link href='https://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'> -->

	    <!-- Plugin CSS -->
	    <link href="<?php echo base_url("media")?>/vendor/magnific-popup/magnific-popup.css" rel="stylesheet">

	    
	    <!-- Theme CSS -->
	    <link href="<?php echo base_url("media")?>/dist/css/carousel.css" rel="stylesheet">
	    <link href="<?php echo base_url("media")?>/dist/css/animate.min.css" rel="stylesheet"> 
	    <link href="<?php echo base_url("media")?>/dist/css/lightbox.css" rel="stylesheet"> 
		<link href="<?php echo base_url("media")?>/dist/css/main.css" rel="stylesheet">
		<link href="<?php echo base_url("media")?>/dist/css/responsive.css" rel="stylesheet">

	    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
	    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	    <!--[if lt IE 9]>
	        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
	        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
	    <![endif]-->

	    <link rel="shortcut icon" href="<?php echo base_url("media")?>/dist/image/ico/CONTAGE 4.ico">
	    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="<?php echo base_url("media")?>/dist/image/ico/CONTAGE 4.png">
	    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="<?php echo base_url("media")?>/dist/image/ico/CONTAGE 4 - 114.png">
	    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="<?php echo base_url("media")?>/dist/image/ico/CONTAGE 4 - 72.png">
	    <link rel="apple-touch-icon-precomposed" href="<?php echo base_url("media")?>/dist/image/ico/CONTAGE 4 - 57.png">

	</head>

	<body>
	<header id="header">      
        <div class="container">
            <div class="row">
                <div class="col-sm-12 overflow">
                   <div class="social-icons pull-right">
                        <ul class="nav nav-pills">
                            <li><a href=""><i class="fa fa-facebook"></i></a></li>
                            <li><a href=""><i class="fa fa-twitter"></i></a></li>
                            <li><a href=""><i class="fa fa-google-plus"></i></a></li>
                        </ul>
                    </div> 
                </div>
             </div>
        </div>
        <div class="navbar navbar-inverse" role="banner">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>

                    <a class="navbar-brand" href="<?= base_url()?>">
                    	<h1><img src="<?php echo base_url("media")?>/dist/image/ico/CONTAGE 4 - 72.png" alt="logo"></h1>
                    </a>
                    
                </div>
                <div class="collapse navbar-collapse">
                    <ul class="nav navbar-nav navbar-right">
                        <li class="active"><a href="<?php echo site_url('home/') ?>">Home</a></li>
                        <li><a href="<?php echo site_url('lomba/') ?>">Competition</a></li>                                       
                        <li class="dropdown" aria-labelledby="dropdownMenuDivider"><a href="#"><i class="glyphicon glyphicon-user"></i></a>
                            <ul role="menu" class="sub-menu">
								<?php if (!($level)) {?>
                                <li><a href="<?php echo site_url('login') ?>">Log In</a></li>
                                <li><a href="<?php echo site_url('login/signup')?>">Sign Up</a></li>
								<?php } ?>
								<?php if(@$level == "User") {?>
									<li style="margin-left:10px"><?= @$username ?></li>
									<li><a href="<?php echo site_url('user/profile')?>">Account Settings</a></li>
								<?php } else if(@$level == "Administrator") { ?>
									<li style="margin-left:10px"><?= @$username ?></li>
									<li><a href="<?php echo site_url('admin/dataHolder')?>">Account Settings - Admin</a></li>
								<?php } ?>
                            </ul>
                        </li>

                        <?php if (@$level) { ?>
                        <li><a href="<?php echo site_url('login/logout')?>"><i class="glyphicon glyphicon-log-out"></i></a></li>
                        <?php }?>
                    </ul>
                </div>
                <div class="search">
                    <form role="form">
                        <i class="fa fa-search"></i>
                        <div class="field-toggle">
                            <input type="text" class="search-form" autocomplete="off" placeholder="Search">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </header>
    <!--/#header-->