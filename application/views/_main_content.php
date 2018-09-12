		<div class="span9">		
			<div class="well well-small">
			<h4>İlanlarımız <small class="pull-right">200+ featured products</small></h4>
		</div>
		  <ul class="thumbnails">
		  
			<?php
				foreach($yeniler as $rs){
				if($rs->resim != NULL){
			?>
			<li class="span3">
			  <div class="thumbnail">
				<a  href="<?=base_url()?>home/ev_detay/<?=$rs->id?>">
					<img style="height:170px" src="<?=base_url()?>uploads/<?=$rs->resim?>" alt=""/>
				</a>
				<div class="caption">
				  <h5><?=$rs->adi?></h5>
				  <p> 
					<?=$rs->kisaaciklama?> 
				  </p>
				 
				  <h4 style="text-align:center"><a class="btn" href="<?=base_url()?>home/ev_detay/<?=$rs->id?>"> <i class="icon-zoom-in"></i></a> 
				  <a class="btn" href="<?=base_url()?>home/ev_detay/<?=$rs->id?>">Sepete Ekle <i class="icon-shopping-cart"></i></a> 
				  <a class="btn btn-primary" href="#"><?=$rs->sfiyat?></a></h4>
				</div>
			  </div>
			</li>
			<?php
				} 
			}					
			?>

		  </ul>	
		</div>