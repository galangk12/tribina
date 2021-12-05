<?php
$page=isset($_GET['page']) ? ($_GET['page']) : "";
if ($page=='id_kelompok' or $page=='edit_kelompok' or $page=='info_kelompok') {
  echo  "<div class='content-header'>
<div class='container-fluid'>
	<div class='row mb-2'>
		<div class='col-sm-6'>
			<h1 class='m-0 text-dark'>KELOMPOK TRIBINA</h1>
		</div>
		<div class='col-sm-6'>
			<ol class='breadcrumb float-sm-right'>
				<li class='breadcrumb-item'>
					<a href='index.php'>Home</a>
				</li>
				<li class='breadcrumb-item active'>Kelompok Tribina</li>
			</ol>
		</div>
	</div>
</div>
</div>
"; }
elseif ($page=='user') {
  echo  "<div class='content-header'>
<div class='container-fluid'>
	<div class='row mb-2'>
		<div class='col-sm-6'>
			<h1 class='m-0 text-dark'>USER</h1>
		</div>
		<div class='col-sm-6'>
			<ol class='breadcrumb float-sm-right'>
				<li class='breadcrumb-item'>
					<a href='index.php'>Home</a>
				</li>
				<li class='breadcrumb-item active'>User</li>
			</ol>
		</div>
	</div>
</div>
</div>
"; }
else { echo "
<div class='content-header'>
<div class='container-fluid'>
	<div class='row mb-2'>
		<div class='col-sm-6'>
			<h1 class='m-0 text-dark'>DASHBOARD</h1>
		</div>
		<div class='col-sm-6'>
			<ol class='breadcrumb float-sm-right'>
				<li class='breadcrumb-item'>
					<a href='index.php'>Home</a>
				</li>
				<li class='breadcrumb-item active'>Dashboard</li>
			</ol>
		</div>
	</div>
</div>
</div>
";
  }
 ?>
