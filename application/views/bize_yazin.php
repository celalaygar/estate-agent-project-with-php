	<div class="span9" id="mainCol">
		<ul class="breadcrumb">
			<li><a href="<?=base_url()?>">Anasayfa</a> <span class="divider">/</span></li>
			<li class="active">Bize Yazin</li>
		</ul>
		<h3> Bize Ulaşın</h3>	
		<hr class="soft"/>
		<div class="row">				
				<?php if($this->session->flashdata("sonuc")) {?>
				<div class="col-md-12">
					<div class="well well-lg">
						<?=$this->session->flashdata("sonuc")?>
					</div>
				</div>
				<?php } ?>
				<?php if($this->session->flashdata("email_sent")) {?>
				<div class="col-md-12">
					<div class="well well-lg">
						<?=$this->session->flashdata("email_sent")?>
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
					if (document.forms["myForm"]["tel"].value == "") {
						alert("Telefon alanı dolu olmalı");
						return false;
					}
					if (document.forms["myForm"]["konu"].value == "") {
						alert("Konu alanı dolu olmalı");
						return false;
					}
					if (document.forms["myForm"]["mesaj"].value == "") {
						alert("Mesaj alanı dolu olmalı");
						return false;
					}
					
				}
				</script>
		<div class="span1"> &nbsp;</div>
		<div class="span4">
			<div class="well">
				<h5>Bize Yazin</h5>

				<form name="myForm" class="form-horizontal" action="<?=base_url()?>home/mesaj_ekle" method="post" onsubmit="return validateForm()">
					<fieldset>
					  <div class="control-group">
						  Adınız Soyadınız :<br/><input type="text" placeholder="Adınız Soyadınız" name="adsoyad" class="input-xlarge"/>
					  </div>
					   <div class="control-group">
						  Email :<br/><input type="email" placeholder="email" name="email" class="input-xlarge"/>
					  </div>
					   <div class="control-group">
						  Telefon :<br/><input type="text" placeholder="telefon" name="tel" maxlength="15" class="input-xlarge"/>
					  </div>
					   <div class="control-group">
						  Konu :<br/><input type="text" placeholder="Mesaj Konusu" name="konu" maxlength="55" class="input-xlarge"/>
					  </div>
					  <div class="control-group">
						  Mesajınız :<br/><textarea rows="5" id="textarea" name="mesaj" class="input-xlarge"></textarea>
					  </div>
						<button class="btn btn-large" type="submit">Mesajı Gönder</button>
					</fieldset>
				</form>
			</div>
		</div>
	</div>
</div>
