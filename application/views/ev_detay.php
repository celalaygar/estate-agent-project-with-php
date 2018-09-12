<div id="carouselBlk"></div>
	<div class="span9">
    <ul class="breadcrumb">
    <li><a href="<?=base_url()?>">Anasayfa</a> <span class="divider">/</span></li>
    <li class="active">Detay</li>
    </ul>	
	<div class="row">	  
			<div id="gallery" class="span3">
            <a href="<?=base_url()?>uploads/<?=$veri[0]->resim?>" title="Fujifilm FinePix S2950 Digital Camera">
				<img src="<?=base_url()?>uploads/<?=$veri[0]->resim?>" style="width:100%" alt="Fujifilm FinePix S2950 Digital Camera"/>
            </a>
			<div id="differentview" class="moreOptopm carousel slide">
                <div class="carousel-inner">
                  <div class="item active">
				  <?php foreach($veriler as $rs){ 
				  
				  ?>
                   <a href="<?=base_url()?>uploads/<?=$rs->resim?>"> <img style="width:29%" src="<?=base_url()?>uploads/<?=$rs->resim?>" alt=""/></a>
				  <?php } ?>
				  </div>
                  <div class="item">
				  <?php foreach($veriler as $rs){ 
				  
				  ?>
                   
				   <a href="<?=base_url()?>uploads/<?=$rs->resim?>"> <img style="width:29%" src="<?=base_url()?>uploads/<?=$rs->resim?>" alt="X"/></a>
                   <?php } ?>

                  </div>
                </div>
              <!--  
			  <a class="left carousel-control" href="#myCarousel" data-slide="prev">�</a>
              <a class="right carousel-control" href="#myCarousel" data-slide="next">�</a> 
			  -->
              </div>
			</div>
			<div class="span6">
				<h3><?=$veri[0]->adi?></h3>
			
				<h4>Ürün Bilgileri</h4>
				  <table class="table table-striped table-hover">

					<tbody>
					  <tr>
						<th>Tür Adı </th>
						<td><?=$veri[0]->turadi?></td>
					  </tr>
					  <tr>
						<th>Kategori Adı </th>
						<td><?=$veri[0]->katadi?></td>
					  </tr>
					  <tr>
						<th>Kısa Açıklama</th>
						<td><?=$veri[0]->kisaaciklama?></td>
					  </tr>
					  <tr>
						<th>Fiyat</th>
						<td><?=$veri[0]->sfiyat?> TL</td>
					  </tr>
					</tbody>
				  </table>	
				<hr class="soft"/>
				
				
				<?php if($this->session->logged['id']){ ?>
				<form class="form-horizontal qtyFrm" action="<?=base_url()?>home/sepeteekle/<?=$veri[0]->id?>" method="post" >
				  <div class="control-group">
					<label class="control-label"><span>Adet </span></label>
					<div class="controls">
					<input type="number" class="span1" name="adet" value="1" placeholder="Miktar"/>
					<input type="hidden" class="span1" name="adi" value="<?=$veri[0]->adi?>" placeholder="Miktar"/>
					<input type="hidden" class="span1" name="fiyat" value="<?=$veri[0]->sfiyat?>" placeholder="Miktar"/>
					<button type="submit" class="btn btn-large btn-primary pull-right"> Sepete Ekle <i class=" icon-shopping-cart"></i></button>
					
				   </div>
				  </div>
				</form>
				<?php }else{ ?>
				  <div class="control-group">
					<div class="controls">
					<a href="<?=base_url()?>home/uye_kayit">
						<span class="btn btn-large btn-primary pull-right"><i class="icon-shopping-cart icon-white"></i> Sepete Ekle</span> 
					</a>
				   </div>
				   </div><br/>
				<?php } ?>
				<hr class="soft"/>
				<p>
				<?=$veri[0]->uzunaciklama?>
				</p>
			</div>

			
			
			
	</div>
</div>