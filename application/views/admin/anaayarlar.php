<?php 
		$this->load->view('admin/_header');
		$this->load->view('admin/_sidebar');

?>		
		
		<div class="content-wrapper">
			<div class="container-fluid">

				<div class="row">
					<div class="col-md-12">
						<h2 class="page-title">Anasayfa Ana ayarları</h2>
						<?php if($this->session->flashdata("sonuc")) {?>
						<div class="alert alert-error">
								<p><?=$this->session->flashdata("sonuc")?></p>
						</div>
						<?php } ?>
						<div class="col-md-12">
							<div class="panel panel-default">
								<div class="panel-heading">İlan Ver</div>
								<div class="panel-body">
									<form method="post" action="<?=base_url()?>admin/home/anaayar_guncelle/<?=$veri[0]->id?>" class="form-horizontal">
										<div class="form-group">
											<label class="col-sm-2 control-label">Adi</label>
											<div class="col-sm-10">
												<input class="form-control" value="<?=$veri[0]->adi ?>" name="adi" type="text">
											</div>
										</div>								
										<div class="form-group">
											<label class="col-sm-2 control-label">Anahtar kelimeler</label>
											<div class="col-sm-10">
												<input class="form-control" value="<?=$veri[0]->keywords ?>" name="keywords" type="text">
											</div>
										</div>
										<div class="form-group">
											<label class="col-sm-2 control-label">Kısa Açıklama</label>
											<div class="col-sm-10">
												<input class="form-control" value="<?=$veri[0]->kisaaciklama ?>"  name="kisaaciklama" type="text">
											</div>
										</div>							
										<div class="form-group">
											<label class="col-sm-2 control-label">Smptp server</label>
											<div class="col-sm-10">
												<input class="form-control"  value="<?=$veri[0]->smtpserver ?>" name="smtpserver" type="text">
											</div>
										</div>							
										<div class="form-group">
											<label class="col-sm-2 control-label">Smtp port</label>
											<div class="col-sm-10">
												<input class="form-control" value="<?=$veri[0]->smtpport ?>" name="smtpport" type="text">
											</div>
										</div>							
										<div class="form-group">
											<label class="col-sm-2 control-label">Smptp email</label>
											<div class="col-sm-10">
												<input class="form-control" value="<?=$veri[0]->smtpemail ?>" name="smtpemail" type="email">
											</div>
										</div>
										<div class="form-group">
											<label class="col-sm-2 control-label">Sifre</label>
											<div class="col-sm-10">
												<input class="form-control" value="<?=$veri[0]->password ?>" name="password" type="password">
											</div>
										</div>	
										<div class="form-group">
											<label class="col-sm-2 control-label">Email</label>
											<div class="col-sm-10">
												<input class="form-control" value="<?=$veri[0]->email ?>" name="email" type="email">
											</div>
										</div>	
										<div class="form-group">
											<div class="col-sm-8 col-sm-offset-2">
												<button class="btn btn-primary" type="submit">E K L E</button>
											</div>
										</div>
									
									</form>
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