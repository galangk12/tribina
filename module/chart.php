<?php
require_once("config/database.php");
 ?>
<section class="content">
<div class="container-fluid">
	<div class="alert alert-primary alert-dismissible">
		<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
		<h5><i class="icon fas fa-info"></i> Alert!</h5>
		 Selamat Datang <?php echo $uu['nama'] ?> Di Sistem Informasi Tribina Dinas Pengendalian Penduduk dan Keluarga Berencana Kota Salatiga.</div>

	<div class="row">
		<div class="col-lg-3 col-6">
			<!-- small box -->
			<div class="small-box bg-info">
				<div class="inner">
					<h3><?php echo $r1[0] ?></h3>

					<p>Total Kelompok</p>
				</div>
				<div class="icon">
					<i class="fa fa-users" aria-hidden="true"></i>
				</div>
				<a href="index.php?page=id_kelompok" class="small-box-footer">Informasi <i class="fas fa-arrow-circle-right"></i></a>
			</div>
		</div>
		<!-- ./col -->
		<div class="col-lg-3 col-6">
			<!-- small box -->
			<div class="small-box bg-danger">
				<div class="inner">
					<h3><?php echo $r2[0] ?></h3>

					<p>Bina Keluarga Lansia</p>
				</div>
				<div class="icon">
					<i class="fa fa-user-plus" aria-hidden="true"></i>
				</div>
				<a href="index.php?page=id_kelompok&kat=BKL" class="small-box-footer">Informasi <i class="fas fa-arrow-circle-right"></i></a>
			</div>
		</div>
		<!-- ./col -->
		<div class="col-lg-3 col-6">
			<!-- small box -->
			<div class="small-box bg-primary">
				<div class="inner">
					<h3><?php echo $r3[0] ?></h3>

					<p>Bina Keluarga Remaja</p>
				</div>
				<div class="icon">
					<i class="fa fa-user" aria-hidden="true"></i>
				</div>
				<a href="index.php?page=id_kelompok&kat=BKR" class="small-box-footer">Informasi <i class="fas fa-arrow-circle-right"></i></a>
			</div>
		</div>
		<!-- ./col -->
		<div class="col-lg-3 col-6">
			<!-- small box -->
			<div class="small-box bg-success">
				<div class="inner">
					<h3><?php echo $r4[0] ?></h3>

					<p>Bina Keluarga Balita</p>
				</div>
				<div class="icon">
					<i class="fa fa-child" aria-hidden="true"></i>
				</div>
				<a href="index.php?page=id_kelompok&kat=BKB" class="small-box-footer">Informasi <i class="fas fa-arrow-circle-right"></i></a>
			</div>
		</div>
		<!-- ./col -->

		<div class="col-md-6">
			<!--KIRI-->
			<!-- PIE CHART -->
			<div class="card card-info">
				<div class="card-header">
					<h3 class="card-title">Jumlah Keseluruhan</h3>
				</div>
				<div class="card-body">
					<canvas id="pieChartSemua" style="min-height: 250px; height: 250px; max-height: 250px; max-width: 100%;"></canvas>
				</div>
				<!-- /.card-body -->
			</div>
			<div class="card card-danger">
				<div class="card-header">
					<h3 class="card-title">Bina Keluarga Lansia</h3>
				</div>
				<div class="card-body">
					<canvas id="pieChartBKL" style="min-height: 250px; height: 250px; max-height: 250px; max-width: 100%;"></canvas>
				</div>
				<!-- /.card-body -->
			</div>
			<!-- /.card -->
		</div>
		<!-- /.col (LEFT) -->
		<div class="col-md-6">
			<!---Kanan-->
			<!-- LINE CHART -->
			<div class="card card-primary">
				<div class="card-header">
					<h3 class="card-title">Bina Keluarga Remaja</h3>
				</div>
				<div class="card-body">
					<canvas id="pieChartBKR" style="min-height: 250px; height: 250px; max-height: 250px; max-width: 100%;"></canvas>
				</div>
				<!-- /.card-body -->
			</div>
			<div class="card card-success">
				<div class="card-header">
					<h3 class="card-title">Bina Keluarga Balita</h3>
				</div>
				<div class="card-body">
					<div class="chart">
						<canvas id="pieChartBKB" style="min-height: 250px; height: 250px; max-height: 250px; max-width: 100%;"></canvas>
					</div>
				</div>
				<!-- /.card-body -->
			</div>
			<!-- /.card -->
		</div>
		<!-- /.col (RIGHT) -->
	</div>
	<!-- /.row -->
</div>
<!-- /.container-fluid -->
</section>
