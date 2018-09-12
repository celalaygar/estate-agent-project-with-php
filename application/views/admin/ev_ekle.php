<?php 
		$this->load->view('admin/_header');
		$this->load->view('admin/_sidebar');

?>		
		
		<div class="content-wrapper">
			<div class="container-fluid">

				<div class="row">
					<div class="col-md-12">
						<h2 class="page-title">Ev Kirala / Satış</h2>
						<div class="col-md-12">
							<div class="panel panel-default">
								<div class="panel-heading">İlan Ver</div>
								<div class="panel-body">
									<form method="post" action="<?=base_url()?>admin/evler/eklekaydet" class="form-horizontal">
										<div class="form-group">
											<label class="col-sm-2 control-label">ÜRÜN ADI</label>
											<div class="col-sm-10">
												<select name="adi" class="form-control">
													<option>Ev</option>
													<option>Ofis</option>
													<option>Daire</option>
													<option>Villa</option>
													<option>Rezidans</option>
												</select>
											</div>
										</div>
										<div class="form-group">
											<label class="col-sm-2 control-label">Kısa Açıklama</label>
											<div class="col-sm-10">
												<input class="form-control"  name="kisaaciklama" type="text">
											</div>
										</div>									
										<div class="form-group">
											<label class="col-sm-2 control-label">Anahtar kelimeler</label>
											<div class="col-sm-10">
												<input class="form-control"  name="keywords" type="text">
											</div>
										</div>
										<div class="form-group">
											<label class="col-sm-2 control-label">Satış Fiyatı</label>
											<div class="col-sm-10">
												<input class="form-control" name="sfiyat" type="text">
											</div>
										</div>
										<div class="form-group">
											<label class="col-sm-2 control-label">Durum</label>
											<div class="col-sm-10">
												<select name="durum" class="form-control">
													<option>Kiralık</option>
													<option>Satılık</option>
												</select>
											</div>
										</div>
										<div class="form-group">
											<script src="<?=base_url()?>/ckeditor/ckeditor.js"></script>
											<label class="col-sm-2 control-label">Uzun Açıklama</label>
											<div class="col-sm-10">
												<textarea name="uzunaciklama" id="uzunaciklama" rows="10" cols="80">
												</textarea>
												<script>
													// Replace the <textarea id="editor1"> with a CKEditor
													// instance, using default configuration.
													CKEDITOR.replace( 'uzunaciklama' );
												</script>
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