<?php
require_once("config/database.php");
require_once("config/session.php");
require_once("module/count.php");
$sid=session_id();
$page=isset($_GET['page']) ? ($_GET['page']) : "";
?>
<?php
function logout () {
unset ($_SESSION['username']);
session_destroy();
echo "<script>window.location.href=('login.php');</script>
 "; }
  $qwe = mysqli_query($koneksi,'select * from users');
  $uu = mysqli_fetch_array($qwe);

  ?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="x-ua-compatible" content="ie=edge">
<title>Sistem Informasi Tribina</title>
<link rel="icon"
      type="image/png"
      href="dist/img/AdminLTELogonya.png">
<!-- Font Awesome Icons -->
<link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
<!-- Theme style -->
<link rel="stylesheet" href="dist/css/adminlte.min.css">
<!-- Google Font: Source Sans Pro -->
<link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>
<body class="hold-transition sidebar-mini layout-fixed layout-navbar-fixed">
<div class="wrapper">
	<!-- Navbar -->
	<nav class="main-header navbar navbar-expand navbar-primary navbar-dark">
	<!-- Left navbar links -->
	<ul class="navbar-nav">
		<li class="nav-item">
			<a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
		</li>
		<li class="nav-item d-none d-sm-inline-block">
			<a href="index.php" class="nav-link">Beranda</a>
		</li>
		<li class="nav-item d-none d-sm-inline-block">
			<a href="#" class="nav-link">Bantuan</a>
		</li>
	</ul>
	<!-- SEARCH FORM -->
	<form class="form-inline ml-3" method="post" action="index.php?page=id_kelompok" role="search">
		<div class="input-group input-group-sm">
			<input class="form-control form-control-navbar" name="search" type="search" placeholder="Search" aria-label="Search">
			<div class="input-group-append">
				<button class="btn btn-navbar" type="submit">
				<i class="fas fa-search"></i>
				</button>
			</div>
		</div>
	</form>
	</nav>
	<!-- /.navbar -->
	<!-- Main Sidebar Container -->
	<aside class="main-sidebar sidebar-dark-primary elevation-4">
	<!-- Brand Logo -->
	<a href="index.php" class="brand-link">
	<img src="dist/img/AdminLTELogonya.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-5" style="opacity: .8">
	<span class="brand-text font-weight-light">Sisfo Tribina</span>
	</a>
	<!-- Sidebar -->
	<div class="sidebar">
		<!-- Sidebar user panel (optional) -->
		<!-- Sidebar Menu -->
		<nav class="mt-2">
		<ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
			<!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
			<li class="nav-item">
				<a href="index.php" class="nav-link">
				<i class="fa fa-home nav-icon"></i>
				<p>
					 Dashboard
				</p>
				</a>
			</li>
			<li class="nav-item">
				<a href="index.php?page=id_kelompok" class="nav-link">
				<i class="fa fa-users nav-icon"></i>
				<p>
					 Informasi Kelompok
				</p>
				</a>
			</li>
      <li class="nav-item has-treeview">
        <a href="#" class="nav-link">
          <i class="fa fa-sticky-note nav-icon"></i>
          <p>
            Laporan
            <i class="right fas fa-angle-left"></i>
          </p>
        </a>
        <ul class="nav nav-treeview">
          <li class="nav-item">
            <a href="module/laporan_jumlah.php" class="nav-link">
              <i class="far fa-circle nav-icon"></i>
              <p>Laporan Jumlah</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="module/laporan_data.php" class="nav-link">
              <i class="far fa-circle nav-icon"></i>
              <p>Laporan Data</p>
            </a>
          </li>
        </ul>
      </li>
			<li class="nav-item">
				<a href="index.php?page=user" class="nav-link">
				<i class="fa fa-user nav-icon"></i>
				<p>
					 Users
				</p>
				</a>
			</li>
			<br>
			<br>
			<li class="nav-item">
				<a href="index.php?page=logout" class="nav-link">
				<i class="fa fa-power-off nav-icon"></i>
				<p>
					 Logout
				</p>
				</a>
			</li>
		</ul>
		</nav>
		<!-- /.sidebar-menu -->
	</div>
	<!-- /.sidebar -->
	</aside>
	<!-- Content Wrapper. Contains page content -->
	<div class="content-wrapper">
		<?php include 'module/header.php'; ?>
		<!-- Main content -->
		<div class="content">
			<div class="container-fluid">
				<div class="row">
					<?php	if ($page=='logout') {
          logout();
        }
				//Identitas Kelompok
         elseif ($page=='id_kelompok') {
			      include "module/identitas.php";
		    }
				elseif ($page=='edit_kelompok') {
					 include "module/identitas-edit.php";
			 }
        elseif ($page=='info_kelompok') {
           include "module/identitas-info.php";
       }
       elseif ($page=='edit_anggota') {
          include "module/identitas-edit-agt.php";
      }
      elseif ($page=='user') {
         include "module/user.php";
     }
          else {
            include 'module/chart.php';
        }
        ?>
				</div>
				<!-- /.row -->
			</div>
			<!-- /.container-fluid -->
		</div>
		<!-- /.content -->
	</div>
	<!-- /.content-wrapper -->
	<!-- Main Footer -->
	<footer class="main-footer">
	<!-- To the right -->
	<!-- Default to the left -->
	<strong>Copyright &copy; 2020 <a href="#">Sistem Informasi Tribina Kota Salatiga</a>.</strong> All rights reserved. </footer>
</div>
<!-- ./wrapper -->
<!-- REQUIRED SCRIPTS -->
<!-- jQuery -->
<script src="plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/adminlte.min.js"></script>
<!--- Chart.js--->
<script src="plugins/chart.js/Chart.min.js"></script>
<script>
//fungsi untuk mengambil data nama kelompok//
function createRequestObject() {
    var ro;
    var browser = navigator.appName;
    if(browser == "Microsoft Internet Explorer"){
        ro = new ActiveXObject("Microsoft.XMLHTTP");
    }else{
        ro = new XMLHttpRequest();
    }
    return ro;
}
var xmlhttp = createRequestObject();
function rubah(combobox)
{
    var kode = combobox.value;
    if (!kode) return;
    xmlhttp.open('get', 'module/nama_kelompok.php?id_jenis_kelompok='+kode, true);
    xmlhttp.onreadystatechange = function() {
        if ((xmlhttp.readyState == 4) && (xmlhttp.status == 200))
        {
             document.getElementById("divkedua").innerHTML = xmlhttp.responseText;
        }
        return false;
    }
    xmlhttp.send(null);
}
  $(function () {
    /* ChartJS
     * -------
     * Here we will create a few charts using ChartJS
     */
    //Create pie or douhnut chart
    // You can switch between pie and douhnut using the method below.
	var bkrData        = {
      labels: [
          'Sidorejo',
          'Argomulyo',
          'Sidomukti',
          'Tingkir',
      ],
      datasets: [
        {
          data: [<?php echo $r9[0] ?>,<?php echo $r10[0] ?>,<?php echo $r11[0] ?>,<?php echo $r12[0] ?>],
          backgroundColor : ['#f56954', '#00a65a', '#f39c12', '#00c0ef'],
        }
      ]
    }
	var bkbData        = {
      labels: [
          'Sidorejo',
          'Argomulyo',
          'Sidomukti',
          'Tingkir',
      ],
      datasets: [
        {
          data: [<?php echo $r13[0] ?>,<?php echo $r14[0] ?>,<?php echo $r15[0] ?>,<?php echo $r16[0] ?>],
          backgroundColor : ['#f56954', '#00a65a', '#f39c12', '#00c0ef'],
        }
      ]
    }
	var bklData        = {
      labels: [
          'Sidorejo',
          'Argomulyo',
          'Sidomukti',
          'Tingkir',
      ],
      datasets: [
        {
          data: [<?php echo $r5[0] ?>,<?php echo $r6[0] ?>,<?php echo $r7[0] ?>,<?php echo $r8[0] ?>],
          backgroundColor : ['#f56954', '#00a65a', '#f39c12', '#00c0ef'],
        }
      ]
    }
	var semuaData        = {
      labels: [
          'BKB',
          'BKR',
          'BKL',
      ],
      datasets: [
        {
          data: [<?php echo $r4[0] ?>,<?php echo $r3[0] ?>,<?php echo $r2[0] ?>],
          backgroundColor : ['#00a65a', '#00c0ef', '#f56954'],
        }
      ]
    }
    //-------------
    //- PIE CHART BKR-
    //-------------
    // Get context with jQuery - using jQuery's .get() method.
    var pieChartCanvas = $('#pieChartBKR').get(0).getContext('2d')
    var pieData        = bkrData;
    var pieOptions     = {
      maintainAspectRatio : false,
      responsive : true,
    }
    //Create pie or douhnut chart
    // You can switch between pie and douhnut using the method below.
    var pieChart = new Chart(pieChartCanvas, {
      type: 'pie',
      data: pieData,
      options: pieOptions
    })
	 //-------------
    //- PIE CHART BKB-
    //-------------
    // Get context with jQuery - using jQuery's .get() method.
    var pieChartCanvas1 = $('#pieChartBKB').get(0).getContext('2d')
    var pieData1        = bkbData;
    var pieOptions1     = {
      maintainAspectRatio : false,
      responsive : true,
    }
    //Create pie or douhnut chart
    // You can switch between pie and douhnut using the method below.
    var pieChart1 = new Chart(pieChartCanvas1, {
      type: 'pie',
      data: pieData1,
      options: pieOptions1
    })
	 //-------------
    //- PIE CHART BKL-
    //-------------
    // Get context with jQuery - using jQuery's .get() method.
    var pieChartCanvas2 = $('#pieChartBKL').get(0).getContext('2d')
    var pieData2        = bklData;
    var pieOptions2     = {
      maintainAspectRatio : false,
      responsive : true,
    }
    //Create pie or douhnut chart
    // You can switch between pie and douhnut using the method below.
    var pieChart2 = new Chart(pieChartCanvas2, {
      type: 'pie',
      data: pieData2,
      options: pieOptions2
    })
		 //-------------
    //- PIE CHART BKL-
    //-------------
    // Get context with jQuery - using jQuery's .get() method.
    var pieChartCanvas3 = $('#pieChartSemua').get(0).getContext('2d')
    var pieData3        = semuaData;
    var pieOptions3     = {
      maintainAspectRatio : false,
      responsive : true,
    }
    //Create pie or douhnut chart
    // You can switch between pie and douhnut using the method below.
    var pieChart3 = new Chart(pieChartCanvas3, {
      type: 'pie',
      data: pieData3,
      options: pieOptions3
    })
})
</script>
</body>
</html>
