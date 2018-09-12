<div id="mainBody">
	<div class="container">
	<div class="row">
<!-- Sidebar ================================================== -->
	<div id="sidebar" class="span3">
		<?php 
			if($this->session->logged["id"]){ 
			$query=$this->db->query("SELECT count(id) as say FROM sepet WHERE musteri_id=".$this->session->logged["id"]);
			$sepet=$query->result();
		?>
		<div class="well well-small">
			<a id="myCart" href="<?=base_url()?>home/sepet_listesi">
				<img src="<?=base_url()?>assets/themes/images/ico-cart.png" alt="cart"> Sepetinizdeki Urun sayısı :  <span class="badge badge-warning pull-right"> <?=$sepet[0]->say?> </span>
			</a>
		</div>
		<?php }else{ ?>
		<div class="well well-small">
			<a id="myCart" href="<?=base_url()?>home/uye_kayit">
				<img src="<?=base_url()?>assets/themes/images/ico-cart.png" alt="cart">Sepetinizdeki Urun sayısı : <span class="badge badge-warning pull-right">0</span>
			</a>
		</div>
		<?php }?>
		<ul id="sideManu" class="nav nav-tabs nav-stacked">
			<?php 
				if($this->session->logged["id"]){ 
			?>
			<li><a href="<?=base_url()?>home/musteri_goster/<?=$this->session->logged["id"]?>">Hesap Bilgilerim</a></li>
			<li><a href="<?=base_url()?>home/sepet_listesi">Siparis sepetim</a></li>
			<?php }else{ ?>	
			<li><a href="<?=base_url()?>home/uye_kayit">Siparis sepetim</a></li>	
				
			<?php }?>
				<?php if($altmenu==""){ ?>
				<li class="subMenu"><a> Kategoriler </a>
				<ul style="display:none">
				<?php }else{ ?>
				<li class="subMenu open"><a> Kategoriler </a>
				<ul>
				<?php } ?>
					
					<?php foreach($kategoriler as $rs ){ ?>
						<?php if($altmenu!=$rs->adi){ ?>
						<li><a href="<?=base_url()?>home/kategori/<?=$rs->id?>/<?=$rs->adi?>"><i class="icon-chevron-right"></i>  <?=$rs->adi?></a></li>
						<?php }else{ ?>
						<li><a class="active" href="<?=base_url()?>home/kategori/<?=$rs->id?>/<?=$rs->adi?>"><i class="icon-chevron-right"></i>  <?=$rs->adi?></a></li>
						
						<?php } ?>
					<?php } ?>
					</ul>
				</li>

			<li><a href="<?=base_url()?>home/hakkimizda">Hakkımızda</a></li>
			<li><a href="<?=base_url()?>home/bize_yazin">Bize Yazın</a></li>
			<li><a href="<?=base_url()?>home/iletisim" >İletisim</a></li>
			<li><a href="<?=base_url()?>home/uye_kayit" >Uye ol</a></li>
		</ul>
		<br/>

	</div>
<!-- Sidebar end=============================================== -->