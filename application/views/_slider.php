<div id="carouselBlk">
	<div id="myCarousel" class="carousel slide">
		<div class="carousel-inner">
		
		<?php
		$cnt=0;
		foreach($yeniler as $rs){
			$cnt++;
			if($cnt==1){
			?>
			
		  <div class="item active">
			<?php }else{ ?>
			<div class="item">
			<?php }?>
		  <div class="container">
			<a href="<?=base_url()?>home/ev_detay/<?=$rs->id?>">
				<img style="height: 400px" src="<?=base_url()?>uploads/<?=$rs->resim?>" alt="special offers"/>
			</a>
			<div class="carousel-caption">
				  <h4><?=$rs->adi?></h4>
				  <p><?=$rs->kisaaciklama?></p>
				</div>
		  </div>
		  </div>
		<?php 
			if($cnt==10) break;
		} ?>

		</div>
		<a class="left carousel-control" href="#myCarousel" data-slide="prev">&lsaquo;</a>
		<a class="right carousel-control" href="#myCarousel" data-slide="next">&rsaquo;</a>
	  </div> 
</div>
