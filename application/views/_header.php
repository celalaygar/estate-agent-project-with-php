<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title><?=$veri[0]->adi?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="<?=$veri[0]->kisaaciklama?>">
	<meta name="keywords" content="<?=$veri[0]->keywords?>">
    <meta name="author" content="">
<!--Less styles -->
   <!-- Other Less css file //different less files has different color scheam
	<link rel="stylesheet/less" type="text/css" href="<?=base_url()?>assets/themes/less/simplex.less">
	<link rel="stylesheet/less" type="text/css" href="<?=base_url()?>assets/themes/less/classified.less">
	<link rel="stylesheet/less" type="text/css" href="<?=base_url()?>assets/themes/less/amelia.less">  MOVE DOWN TO activate
	-->
	<!--<link rel="stylesheet/less" type="text/css" href="<?=base_url()?>assets/themes/less/bootshop.less">
	<script src="<?=base_url()?>assets/themes/js/less.js" type="text/javascript"></script> -->
	
<!-- Bootstrap style --> 
    <link id="callCss" rel="stylesheet" href="<?=base_url()?>assets/themes/bootshop/bootstrap.min.css" media="screen"/>
    <link href="<?=base_url()?>assets/themes/css/base.css" rel="stylesheet" media="screen"/>
<!-- Bootstrap style responsive -->	
	<link href="<?=base_url()?>assets/themes/css/bootstrap-responsive.min.css" rel="stylesheet"/>
	<link href="<?=base_url()?>assets/themes/css/font-awesome.css" rel="stylesheet" type="text/css">
<!-- Google-code-prettify -->	
	<link href="<?=base_url()?>assets/themes/js/google-code-prettify/prettify.css" rel="stylesheet"/>
<!-- fav and touch icons -->
    <link rel="shortcut icon" href="<?=base_url()?>assets/themes/images/ico/favicon.ico">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="<?=base_url()?>assets/themes/images/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="<?=base_url()?>assets/themes/images/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="<?=base_url()?>assets/themes/images/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="<?=base_url()?>assets/themes/images/ico/apple-touch-icon-57-precomposed.png">
	<style type="text/css" id="enject"></style>
  </head>
<body>
<div id="header">
<div class="container">
<div id="welcomeLine" class="row">
	<div class="span6">
	Hoşgeldiniz 
	<?php if($this->session->flashdata("login_hata")) {?>
	<div class="alert alert-error">
		<strong><?=$this->session->flashdata("login_hata")?></strong>
		</div>
	<?php }else{ ?>
		<strong><?=$this->session->logged["adsoyad"]?></strong>
	<?php } ?>
	</div>
	<div class="span6">
	<div class="pull-right">
		<?php 
			if($this->session->logged["id"]!=NULL ){ 
			$query=$this->db->query("SELECT count(id) as say FROM sepet WHERE musteri_id=".$this->session->logged["id"]);
			$sepet=$query->result();
		?>
		<a href="<?=base_url()?>home/sepet_listesi">
			<span class="btn  btn-primary"><i class="icon-shopping-cart icon-white"></i> [ <?=$sepet[0]->say?> ] Sepeti Goster </span> 
		</a> 
        <?php }else{ ?>
		<a href="<?=base_url()?>home/uye_kayit">
			<span class="btn  btn-primary"><i class="icon-shopping-cart icon-white"></i> [ 0 ] Itemes in your cart </span> 
		</a>
		<?php } ?>
		<div class="btn-group">
			<?php if($this->session->logged["adsoyad"] == NULL ){ ?>
			<a href="<?=base_url()?>home/uye_kayit" style="padding-right:0">
				<span class="btn btn-success">Üye ol</span>
			</a>
			<?php  }else{ ?>
			<a href="<?=base_url()?>home/musteri_goster/<?=$this->session->logged["id"]?>" style="padding-right:0">
				<span class="btn btn-success"><?=$this->session->logged["adsoyad"]?></span>
			</a>
          <button class="btn btn-success dropdown-toggle" data-toggle="dropdown"><span class="caret"></span></button>
          <ul class="dropdown-menu">
            <li><a href="<?=base_url()?>home/musteri_goster/<?=$this->session->logged["id"]?>">Goruntule</a></li>
            <li><a href="<?=base_url()?>home/musteri_duzenle/<?=$this->session->logged["id"]?>">Duzenle</a></li>
            <li class="divider"></li>
            <li><a href="<?=base_url()?>home/log_out">Cikis</a></li>
          </ul>
			<?php } ?>
        </div>
	</div>
	</div>
</div>
<!-- Navbar ================================================== -->
<div id="logoArea" class="navbar">
<a id="smallScreen" data-target="#topMenu" data-toggle="collapse" class="btn btn-navbar">
	<span class="icon-bar"></span>
	<span class="icon-bar"></span>
	<span class="icon-bar"></span>
</a>
  <div class="navbar-inner">
    <a class="brand" href="<?=base_url()?>"><img src="<?=base_url()?>assets/themes/images/logo.png" alt="Bootsshop"/></a>
	
		<?php 
		
		$home="";
		$hakkimizda="";
		$iletisim="";
		$bize_yazin=""; 
		$kategoriler="";
		$giris="";
		switch($menu){
			case "home":        $home='active';         break;
			case "hakkimizda":  $hakkimizda='active';   break;
			case "iletisim":    $iletisim='active';     break;
			case "bize_yazin":  $bize_yazin='active';   break;
			case "kategoriler": $kategoriler='active';  break;
			case "giris": 		$giris='active';  break;
			}
		?>
	
    <ul id="topMenu" class="nav pull-right">
	 <li class="<?=$home?>"><a href="<?=base_url()?>">Anasayfa</a></li>
	 <li class="<?=$hakkimizda?>"><a href="<?=base_url()?>home/hakkimizda">Hakkımızda</a></li>
	 <li class="<?=$bize_yazin?>">  <a href="<?=base_url()?>home/bize_yazin">Bize Yazın</a></li>
	 <li class="<?=$iletisim?>"><a href="<?=base_url()?>home/iletisim">iletisim</a></li>            

	 <?php if($this->session->logged["adsoyad"] == NULL ){ ?>
	 <li class="<?=$giris?>"><a href="<?=base_url()?>home/uye_kayit">Uye ol</a></li>
	 <?php } ?>
	  <li class="">
	 <?php if($this->session->logged["adsoyad"] == NULL ){ ?>
	 <a href="#login" role="button" data-toggle="modal" style="padding-right:0"><span class="btn btn-large btn-success">Login</span></a>
	<div id="login" class="modal hide fade in" tabindex="-1" role="dialog" aria-labelledby="login" aria-hidden="false" >
		  
		  <div class="modal-header">
			<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
			<h3>Login Block</h3>
		  </div>
		  <div class="modal-body">
			<form action="<?=base_url()?>home/login_ol" method="post" class="form-horizontal loginFrm">
			  <div class="control-group">								
				<input type="email" id="inputEmail" name="email" placeholder="Email">
			  </div>
			  <div class="control-group">
				<input type="password"  name="sifre" id="inputPassword" placeholder="Şifre">
			  </div><br/>
			<button type="submit" class="btn btn-success">Login</button>
			<button class="btn" data-dismiss="modal" aria-hidden="true">Kapat</button>
			</form>	
		  </div>
	</div>
	<?php }else{ ?>
	<a href="<?=base_url()?>home/log_out" style="padding-right:0">
		<span class="btn btn-large btn-danger">Logout</span>
	</a>
	<?php } ?>
	</li>
    </ul>
  </div>
</div>
</div>
</div>

<!-- Header End====================================================================== -->