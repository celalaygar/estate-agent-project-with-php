<?php 
		$this->load->view('admin/_header');
		$this->load->view('admin/_sidebar');

?>		
		<div class="content-wrapper">
			<div class="container-fluid">

				<div class="row">
					<div class="col-md-12">
						<h2 class="page-title">Kullanıcı Bilgileri</h2>
						<div class="col-md-8">
							<div class="panel panel-default">
								<div class="panel-heading"><h4>Kullanıcı Bilgileri</h4></div>
								<table class="table  table-bordered table-hover">
									<tr>
										<th>ADI SOYADI</th>
										<td><?=$veri[0]->adsoyad?></td>
									</tr>
										<tr>
										<th>EMAİL</th>
										<td><?=$veri[0]->email?></td>
									</tr>
									<tr>
										<th>YETKİ</th>
										<td><h4><span class = "label label-info"><?=$veri[0]->yetki?></span></h4></td>
									</tr>
									<tr>
										<th>DURUM</th>
										<td><h4><span class = "label label-warning"><?=$veri[0]->durum?></span></h4></td>
									</tr>
								</table>
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