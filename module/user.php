<?php
$query = mysqli_query($koneksi,"SELECT * FROM users");
$result = mysqli_fetch_array($query);

 ?>
<script type="text/javascript">
function myFunction() {
var x = document.getElementById("pass");
if (x.type === "password") {
	x.type = "text";
} else {
	x.type = "password";
}
}
</script>
<div class="card card-primary card-tabs" style="width:100%">
	<div class="card-header p-0 pt-1">
		<ul class="nav nav-tabs" id="custom-tabs-two-tab" role="tablist">
			<li class="pt-2 px-3">
				<h3 class="card-title"></h3>
			</li>
			<li class="nav-item">
				<a class="nav-link active" id="custom-tabs-two-data-tab" data-toggle="pill" href="#custom-tabs-two-data" role="tab" aria-controls="custom-tabs-two-data" aria-selected="true">Informasi User</a>
			</li>
		</ul>
	</div>
	<div class="card-body">
		<div class="tab-content" id="custom-tabs-two-tabContent">
			<div class="tab-pane fade show active" id="custom-tabs-two-data" role="tabpanel" aria-labelledby="custom-tabs-two-data-tab">
				<form class="" action="module/input_data.php?page=edit_user" method="post">
				<div class="form-group row">
					<input type="hidden" class="form-control" name="id_user" value="<?php echo $result['id_user'] ?>">
	       <label  class="col-sm-2 col-form-label">Nama Lengkap</label>
	        <div class="col-sm-10">
	          <input type="text" class="form-control" name="nama"  value="<?php echo $result['nama'] ?>">
	        </div>
	      </div>
	      <div class="form-group row">
				 <label  class="col-sm-2 col-form-label">Username</label>
					<div class="col-sm-10">
					 <input type="text" class="form-control" name="username"  value="<?php echo $result['username'] ?>">
					</div>
				</div>
	      <div class="form-group row">
	       <label  class="col-sm-2 col-form-label">Password</label>
	        <div class="col-sm-10">
	         <input type="password" class="form-control" name="password" id="pass" value="<?php echo $result['password'] ?>">
	        </div>
	      </div>
	      <div class="form-group row">
	       <div class="offset-sm-2 col-sm-10">
	        <div class="form-check">
	         <input type="checkbox" class="form-check-input" onclick="myFunction()">
	          <label class="form-check-label">Lihat Password</label>
	        </div>
	       </div>
	      </div>
					<button type="submit" class="btn btn-success">Ubah Data</button>
			</form>

		</div>

		</div>
  </div>
</div>
