<?php
require_once("../config/database.php");
require_once("../config/session.php");
$kode = $_GET['id_jenis_kelompok'];
echo "
	<div class='form-group'>
<select class='form-control' name='id_kelompok'>
	 "; $rs = mysqli_query ($koneksi,"SELECT * FROM tb_id_kelompok WHERE (id_jenis_kelompok='$kode')"); while ($r = mysqli_fetch_array($rs)) echo "
	<option value='$r[id_kelompok]'>$r[nama_kelompok]</option>
	"; echo "
</select>
</div>
";
