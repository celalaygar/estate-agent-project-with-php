<div class="span9">
    <ul class="breadcrumb">
		<li><a href="<?=base_url()?>">Anasayfa</a> <span class="divider">/</span></li>
		<li class="active">Kategoriler <span class="divider">/</span></li>
		<li class="active"><?=$kategori_adi?>  </li>
    </ul>
	<h3><?=$kategori_adi?> Ürünleri <small class="pull-right"> 40 products are available </small></h3>	

	<hr class="soft">

<br class="clr">
<div class="tab-content">
	<div class="tab-pane  active" id="blockView">
		<ul class="thumbnails">
		<?php 
			
			foreach($veri as $rs){ 
		?>
			<li class="span3">
			  <div class="thumbnail">
				<a href="<?=base_url()?>home/ev_detay/<?=$rs->id?>"><img style="height:170px" src="<?=base_url()?>uploads/<?=$rs->resim?>" alt=""></a>
				<div class="caption">
				  <h5><?=$rs->adi?></h5>
				  <p> 
					<?=$rs->kisaaciklama?>
				  </p>
				   <h4 style="text-align:center">
					   <a class="btn" href="<?=base_url()?>home/ev_detay/<?=$rs->id?>"> <i class="icon-zoom-in"></i></a> 
					   <a class="btn" href="#">Add to <i class="icon-shopping-cart"></i></a> 
					   <a class="btn btn-primary" href="#"><?=$rs->sfiyat?></a>
				   </h4>
				</div>
			  </div>
			</li>
		<?php } ?>
		
		  </ul>
	<hr class="soft">
	</div>
</div>
	
	<div class="pagination">
		<ul>
		<li><a href="#">‹</a></li>
		<li><a href="#">1</a></li>
		<li><a href="#">2</a></li>
		<li><a href="#">3</a></li>
		<li><a href="#">4</a></li>
		<li><a href="#">...</a></li>
		<li><a href="#">›</a></li>
		</ul>
		</div>
		<br class="clr">
	</div>