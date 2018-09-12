<div class="span9" id="mainCol">
	<ul class="breadcrumb">
		<li><a href="<?=base_url()?>">Anasayfa</a> <span class="divider">/</span></li>
		<li class="active">Bize Yazin</li>
	</ul>
	<script>
		function validateForm() {
			if (document.forms["myForm"]["adsoyad"].value == "") {
				alert("Ad soyad alanı dolu olmalı");
				return false;
			}
			if (document.forms["myForm"]["email"].value == "") {
				alert("Email alanı dolu olmalı");
				return false;
			}
			if (document.forms["myForm"]["telefon"].value == "") {
				alert("Telefon alanı dolu olmalı");
				return false;
			}
			if (document.forms["myForm"]["sifre"].value == "") {
				alert("Şifre alanı dolu olmalı");
				return false;
			}
			
		}
	</script>
	<hr class="soft"/>
	<div class="row">				
	<?php if($this->session->flashdata("sonuc")) {?>
	<div class="col-md-12">
		<div class="well well-lg">
			<?=$this->session->flashdata("sonuc")?>
		</div>
	</div>
	<?php } ?>
		<div class="span1"> &nbsp;</div>
		<div class="span4">
			<div class="well">
				<h5>Bilgileri Duzenle</h5>
				<form name="myForm" action="<?=base_url()?>home/guncellekayit/<?=$musteri[0]->id?>" method="post" onsubmit="return validateForm()">
					  <div class="control-group">
						  <label class="control-label" for="inputEmail1">Ad / Soyad</label>
						  <div class="controls">
						  <input type="text" name="adsoyad" value="<?=$musteri[0]->adsoyad?>" />
						  </div>
					  </div>
					   <div class="control-group">
						  <label class="control-label" for="logged">Email </label>
						  <div class="controls">
						  <input type="email" name="email" value="<?=$musteri[0]->email?>" id="inputEmail"/>
					  </div>
					  </div>
					   <div class="control-group">
						 <label class="control-label" for="logged">Telefon </label>
						 <div class="controls">
						 <input type="text" value="<?=$musteri[0]->telefon?>" name="telefon" maxlength="15" id="inputEmail"/>
					  </div>
					  </div>
					   <div class="control-group">
						  <label class="control-label" for="logged">sifre </label>
						  <div class="controls">
						  <input type="text" name="sifre"  value="<?=$musteri[0]->sifre?>" maxlength="55" id="inputEmail"/>
					  </div>
					  </div>
						<div class="control-group">
						<label class="control-label" for="inputPassword1">Durum</label>
						  <div class="controls">
					  <select name="durum" class="span2" id="logged">
						<option value="<?=$musteri[0]->durum?>"><?=$musteri[0]->durum?></option>
						<option>Yeni</option>
						<option>Aktif</option>
						<option>Profesyonel</option>
					  </select>
					  </div> </div>
						<button class="btn btn-large" type="submit">Güncelle</button>
				</form>
			</div>
		</div>

	</div>
</div>