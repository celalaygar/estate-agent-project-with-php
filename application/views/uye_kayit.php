	<div class="span9">
    <ul class="breadcrumb">
		<li><a href="<?=base_url()?>">Anasayfa</a> <span class="divider">/</span></li>
		<li class="active">Uye ol</li>
    </ul>
	<hr class="soft"/>
	<?php if($this->session->flashdata("sonuc")) {?>
	<div class="col-md-12">
		<div class="well well-lg">
			<?=$this->session->flashdata("sonuc")?>
		</div>
	</div>
	<?php } ?>
	
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
	
	<div class="row">
		<div class="span1"> &nbsp;</div>
		<div class="span4">
			<div class="well">
			<h5>UYE OL</h5>
			<form name="myForm" action="<?=base_url()?>home/uyeol" method="post" onsubmit="return validateForm()" >
			  <div class="control-group">
				<label class="control-label" for="inputEmail1">Ad / Soyad</label>
				<div class="controls">
				  <input type="text" name="adsoyad" id="inputEmail"  placeholder="ad - soyad giriniz">
				</div>
			  </div>
			  <div class="control-group">
				<label class="control-label" for="inputEmail1">Email</label>
				<div class="controls">
				  <input type="email" name="email" id="inputEmail" placeholder="Email">
				</div>
			  </div>
			  <div class="control-group">
				<label class="control-label" for="inputEmail1">Telefon</label>
				<div class="controls">
				  <input type="text" name="telefon" id="inputEmail"  placeholder="Telefon giriniz">
				</div>
			  </div>
			  <div class="control-group">
				<label class="control-label" for="inputEmail1">Şifre</label>
				<div class="controls">
				  <input type="password" name="sifre" id="inputEmail"  placeholder="Sifre giriniz">
				</div>
			  </div>
			  <div class="control-group">
				<label class="control-label" for="inputPassword1">Durum</label>
				<div class="controls">
					  <select name="durum" class="span3" id="select11">
						<option>Yeni</option>
						<option>Aktif</option>
						<option>Profesyonel</option>
					  </select>
				</div>
			  </div>
			  <div class="control-group">
				<div class="controls">
				  <button type="submit" class="btn">Uye ol</button>
				</div>
			  </div>
			</form>
		</div>
		</div>
	</div>	
	
</div>