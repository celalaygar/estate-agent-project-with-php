<?php 
		$this->load->view('admin/_header');
		$this->load->view('admin/_sidebar');

?>		
		
		<div class="content-wrapper">
			<div class="container-fluid">

				<div class="row">
					<div class="col-md-12">
						<h2 class="page-title">Musteri Ekle</h2>
						<div class="col-md-8">
							<div class="panel panel-default">
								<div class="panel-heading">Form fields</div>
								<div class="panel-body">
									<form method="post" action="<?=base_url()?>admin/home/musteriler_insert" class="form-horizontal">
										<div class="form-group">
											<label class="col-sm-2 control-label">Adı Soyadı</label>
											<div class="col-sm-10">
												<input class="form-control" v name="adsoyad" placeholder="Adınız Soyadınız" type="text">
											</div>
										</div>
										<div class="form-group">
											<label class="col-sm-2 control-label">Email</label>
											<div class="col-sm-10">
												<input class="form-control"  name="email" placeholder="Adınız Soyadınız" type="text">
											</div>
										</div>
										<div class="form-group">
											<label class="col-sm-2 control-label">Password</label>
											<div class="col-sm-10">
												<input class="form-control"  name="sifre" type="password">
											</div>
										</div>
										<div class="form-group">
											<label class="col-sm-2 control-label">Telefon</label>
											<div class="col-sm-10">
												<input class="form-control" name="telefon" placeholder="Adınız Soyadınız" type="text">
											</div>
										</div>
										<div class="form-group">
											<label class="col-sm-2 control-label">Adres</label>
											<div class="col-sm-10">
												<input class="form-control"  name="adres" placeholder="Adınız Soyadınız" type="text">
											</div>
										</div>
										<div class="form-group">
											<label class="col-sm-2 control-label">il</label>
											<div class="col-sm-10">
												<input class="form-control"  name="il" placeholder="Adınız Soyadınız" type="text">
											</div>
										</div>
										<div class="form-group">
											<label class="col-sm-2 control-label">Durum</label>
											<div class="col-sm-10">
												<select name="durum" class="form-control">
													<option>Yeni</option>
													<option>Aktif</option>
													<option>Profesyonel</option>
												</select>
											</div>
										</div>
										<div class="form-group">
											<div class="col-sm-8 col-sm-offset-2">
												<button class="btn btn-primary" type="submit">G Ü N C E L L E</button>
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