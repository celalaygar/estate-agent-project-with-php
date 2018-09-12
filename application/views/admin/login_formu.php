<!doctype html>
<html lang="en" class="no-js">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1">
	<meta name="description" content="">
	<meta name="author" content="">

	<title>Online Ev Kirala</title>

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
	
	<div class="login-page bk-img" style="background-image: url(<?=base_url()?>assets/admin/img/login-bg.jpg);">
		<div class="form-content">
			<div class="container">
				<div class="row">
					<div class="col-md-6 col-md-offset-3">
						<h1 class="text-center text-bold text-light mt-4x">Sign in</h1>
						<div class="well row pt-2x pb-3x bk-light">
							<div class="col-md-8 col-md-offset-2">

								<form action="<?=base_url()?>admin/login/login_ol" method="post" class="mt">

									<label for="" class="text-uppercase text-sm">Your Email</label>
									<input type="email" name="email" placeholder="Email" class="form-control mb">

									<label for="" class="text-uppercase text-sm">Password</label>
									<input type="password" name="sifre"  placeholder="Şifre" class="form-control mb">

									<button class="btn btn-primary btn-block" type="submit">LOGIN</button>

								</form>
								<?php if($this->session->flashdata("login_hata")) {?>
								<div class="col-md-12">
									<div class="well well-lg">
										<?=$this->session->flashdata("login_hata")?>
									</div>
								</div>
								<?php } ?>
							</div>
						</div>
						<div class="text-center text-light">
							<a href="#" class="text-light">Forgot password?</a>
						</div>
					</div>
				</div>

			</div>
		</div>
	</div>
	
	<!-- Loading Scripts -->
	<script src="<?=base_url()?>assets/admin/js/jquery.min.js"></script>
	<script src="<?=base_url()?>assets/admin/js/bootstrap-select.min.js"></script>
	<script src="<?=base_url()?>assets/admin/js/bootstrap.min.js"></script>
	<script src="<?=base_url()?>assets/admin/js/jquery.dataTables.min.js"></script>
	<script src="<?=base_url()?>assets/admin/js/dataTables.bootstrap.min.js"></script>
	<script src="<?=base_url()?>assets/admin/js/Chart.min.js"></script>
	<script src="<?=base_url()?>assets/admin/js/fileinput.js"></script>
	<script src="<?=base_url()?>assets/admin/js/chartData.js"></script>
	<script src="<?=base_url()?>assets/admin/js/main.js"></script>

</body>

</html>