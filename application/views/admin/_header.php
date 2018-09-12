<!doctype html>
<html lang="en" class="no-js">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1">
	<meta name="description" content="">
	<meta name="author" content="">
	<meta name="theme-color" content="#3e454c">
	
	<title>A1 Admin Panel</title>

	<!-- Font awesome -->
	<link rel="stylesheet" href="<?=base_url()?>assets/admin/css/font-awesome.min.css">
	<!-- Sandstone Bootstrap CSS -->
	<link rel="stylesheet" href="<?=base_url()?>assets/admin/css/bootstrap.min.css">
	<!-- Bootstrap Datatables -->
	<link rel="stylesheet" href="<?=base_url()?>assets/admin/css/dataTables.bootstrap.min.css">
	<!-- Bootstrap social button library -->
	<link rel="stylesheet" href="<?=base_url()?>assets/admin/css/bootstrap-social.css">
	<!-- Bootstrap select -->
	<link rel="stylesheet" href="<?=base_url()?>assets/admin/css/bootstrap-select.css">
	<!-- Bootstrap file input -->
	<link rel="stylesheet" href="<?=base_url()?>assets/admin/css/fileinput.min.css">
	<!-- Awesome Bootstrap checkbox -->
	<link rel="stylesheet" href="<?=base_url()?>assets/admin/css/awesome-bootstrap-checkbox.css">
	<!-- Admin Stye -->
	<link rel="stylesheet" href="<?=base_url()?>assets/admin/css/style.css">

	<!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>
	<div class="brand clearfix">
		<a href="<?=base_url()?>admin/home" class="logo"><img src="<?=base_url()?>assets/admin/img/logo.jpg" class="img-responsive" alt=""></a>
		<span class="menu-btn"><i class="fa fa-bars"></i></span>
		<ul class="ts-profile-nav">
			<li><a href="#">Help</a></li>
			<li><a href="#">Settings</a></li>
			<li class="ts-account">
				<a href="#"><img src="img/ts-avatar.jpg" class="ts-avatar hidden-side" alt=""> <?=$this->session->logged_in["adsoyad"]?> <i class="fa fa-angle-down hidden-side"></i></a>
				<ul>
					<li><a href="<?=base_url()."admin/kullanicilar/goster/".$this->session->logged_in["id"]?>">My Account</a></li>
					<li><a href="<?=base_url()."admin/kullanicilar/edit/".$this->session->logged_in["id"]?>">Edit Account</a></li>
					<li><a href="<?=base_url()."admin/login/logout"?>">Çıkış</a></li>
				</ul>
			</li>
		</ul>
	</div>

	<div class="ts-main-content">