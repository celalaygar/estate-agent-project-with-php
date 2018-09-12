<?php 
		$this->load->view('admin/_header');
		$this->load->view('admin/_sidebar');

?>		
		
		<div class="content-wrapper">
			<div class="container-fluid">

				<div class="row">
					<div class="col-md-12">
						<div class="col-md-12">
							<?php if($this->session->flashdata("sonuc")) {?>
								<div class="col-md-12">
									<div class="well well-lg">
										<?=$this->session->flashdata("sonuc")?>
									</div>
								</div>
							<?php } ?>
							<div class="panel panel-default">
								<div class="panel-heading">Resim Galerisi Ekleme</div>

								<div class="panel-body">
									<?php 
										if($veri[0]->resim != NULL){
									?>
									<div class="form-group">
										<img style="max-width:500px; max-height:500px"src="<?=base_url()?>uploads/<?=$veri[0]->resim?>" />
									</div>	
									<?php 
										} 
									echo form_open_multipart(base_url()."admin/evler/resim_galeri_upload/".$veri[0]->id);
									
									?>
									<input type="file" name="userfile" size="20" onchange="javascript:this.form.submit();" />
									<br/><br/>

									<?php 
									foreach($veriler as $rs){
									
									?>
									<div class="col-md-3">
										<div class="panel panel-primary">
											<div class="panel-heading">
												<h3 class="panel-title">Resimler</h3>
											</div>
											<div class="panel-body">
											<a  style="background:url(<?=base_url()?>uploads/<?=$rs->resim?>)" href="<?=base_url()?>uploads/<?=$rs->resim?>" >	
												<img style="max-width:180px; height: 120px;" src="<?=base_url()?>uploads/<?=$rs->resim?>" />
											</a>
											</div>
											<a href="<?=base_url()?>admin/evler/delete_resim/<?=$veri[0]->id?>/<?=$rs->id?>" onclick="return confirm('silinecek emin misiniz?');" class="btn btn-danger btn-md">Resmi Sil</a>
										</div>
									</div>
											
									
									<?php 
										
									} 
									?>

								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<!-- Loading Scripts -->
	<script src="<?=base_url()?>assets/admin/js/jquery.min.js"></script>
	<script src="<?=base_url()?>assets/admin/js/bootstrap-select.min.js"></script>
	<script src="<?=base_url()?>assets/admin/js/bootstrap.min.js"></script>
	<script src="<?=base_url()?>assets/admin/js/jquery.dataTables.min.js"></script>
	<script src="<?=base_url()?>assets/admin/js/dataTables.bootstrap.min.js"></script>
	<script src="<?=base_url()?>assets/admin/js/Chart.min.js"></script>
	<script src="<?=base_url()?>assets/admin/js/fileinput.js"></script>
	<script src="<?=base_url()?>assets/admin/js/chartData.js"></script>
	<script src="<?=base_url()?>assets/admin/js/main.js"></script>
	
	<script>
		
	window.onload = function(){
    
		// Line chart from swirlData for dashReport
		var ctx = document.getElementById("dashReport").getContext("2d");
		window.myLine = new Chart(ctx).Line(swirlData, {
			responsive: true,
			scaleShowVerticalLines: false,
			scaleBeginAtZero : true,
			multiTooltipTemplate: "<%if (label){%><%=label%>: <%}%><%= value %>",
		}); 
		
		// Pie Chart from doughutData
		var doctx = document.getElementById("chart-area3").getContext("2d");
		window.myDoughnut = new Chart(doctx).Pie(doughnutData, {responsive : true});

		// Dougnut Chart from doughnutData
		var doctx = document.getElementById("chart-area4").getContext("2d");
		window.myDoughnut = new Chart(doctx).Doughnut(doughnutData, {responsive : true});

	}
	</script>
<?php 

		$this->load->view('admin/_footer');

?>		