		<nav class="ts-sidebar">
			<ul class="ts-sidebar-menu">
				<li class="ts-label">Search</li>
				<li>
					<input type="text" class="ts-sidebar-search" placeholder="Search here...">
				</li>
				<li class="ts-label">Main</li>
				<?php 
				
				$home="";
				$kullanicilar="";
				$evler="";
				$musteriler="";
				$mesajlar="";
				$anasayfaayarlar="";
				$anaayarlar="";
				$hakkimizda="";
				$iletisim=""; 
				switch($menu){
					case "home":            $home='open';            break;
					case "kullanicilar":    $kullanicilar='open';    break;
					case "evler":      		$evler='open';     		 break;
					case "musteriler":      $musteriler='open';      break;
					case "mesajlar":        $mesajlar='open';    	 break;
					case "anaayarlar":      $anasayfaayarlar='open'; $anaayarlar='open';     break;
					case "hakkimda":        $anasayfaayarlar='open'; $hakkimizda='open';  	 break;
					case "iletisim":        $anasayfaayarlar='open'; $iletisim='open';   	 break;
				}
				?>
				<li class="<?=$home?>"><a href="<?=base_url()?>admin/home"><i class="fa fa-home fa-lg"></i> Anasayfa </a></li>
				<li class="<?=$kullanicilar?>"><a href="<?=base_url()?>admin/kullanicilar"><i class="fa fa-users fa-lg"></i> Kullanıcılar </a></li>
				<li class="<?=$evler?>"><a href="<?=base_url()?>admin/evler"><i class="fa fa-th-list fa-lg"></i>Evler</a></li>
				<li class="<?=$musteriler?>"><a href="<?=base_url()?>admin/home/musteri_listesi"><i class="fa fa-user-secret fa-lg"></i> Müşteriler </a></li>
				<li class="<?=$mesajlar?>"><a href="<?=base_url()?>admin/home/mesaj_listesi"><i class="fa fa-envelope fa-lg"></i>Mesajlar</a></li>
				<li class="<?=$anasayfaayarlar?>"><a href="#"><i class="fa fa-cog fa-lg "></i>Ayarlar</a>
					<ul>
						<li class="<?=$anaayarlar?>"><a href="<?=base_url()?>admin/home/anaayarlar">Ana Ayarlarım</a></li>
						<li class="<?=$hakkimizda?>"><a href="<?=base_url()?>admin/home/hakkimizda">Hakkımızda</a></li>
						<li class="<?=$iletisim?>"><a href="<?=base_url()?>admin/home/iletisim">İletişim</a></li>
					</ul>
				</li>

				<!-- Account from above -->
				<ul class="ts-profile-nav">
					<li><a href="#">Help</a></li>
					<li><a href="#">Settings</a></li>
					<li class="ts-account">
						<a href="#"><img src="<?=base_url()?>assets/admin/img/ts-avatar.jpg" class="ts-avatar hidden-side" alt=""> Account <i class="fa fa-angle-down hidden-side"></i></a>
						<ul>
							<li><a href="#">My Account</a></li>
							<li><a href="#">Edit Account</a></li>
							<li><a href="#">Logout</a></li>
						</ul>
					</li>
				</ul>

			</ul>
		</nav>