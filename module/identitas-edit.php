<?php
//UNTUK MEMBUAT FORM EDIT IDENTITAS, COPY PASTE DARI FILE IDENTITAS.PHP MENJADI IDENTITAS-EDIT.PHP
require_once("config/database.php");
//Fungsi Mengambil DATA
$id = $_GET['id'];

$qq = "SELECT * FROM tb_id_kelompok INNER JOIN tb_jenis_kelompok USING (id_jenis_kelompok) WHERE id_kelompok='$id'";
$res = mysqli_query($koneksi,$qq);
$datae=mysqli_fetch_array($res);

//MENGAMBIL DATA JENIS KELOMPOK//
$query = "SELECT * FROM tb_jenis_kelompok";
  $rs = mysqli_query($koneksi, $query);
  $cbstr = "";
  while ($r = mysqli_fetch_array($rs))
  {
    $cbstr .= "<option value='$r[id_jenis_kelompok]'>$r[jenis_kelompok]</option>
"; }
?>

<div class="card card-primary card-tabs" style="width:100%">
	<div class="card-header p-0 pt-1">
		<ul class="nav nav-tabs" id="custom-tabs-two-tab" role="tablist">
			<li class="pt-2 px-3">
				<h3 class="card-title"></h3>
			</li>
			<li class="nav-item">
				<a class="nav-link active" id="custom-tabs-two-data-tab" data-toggle="pill" href="#custom-tabs-two-data" role="tab" aria-controls="custom-tabs-two-data" aria-selected="true">Edit Data</a>
			</li>
		</ul>
	</div>
	<div class="card-body">
		<div class="tab-content" id="custom-tabs-two-tabContent">
			<div class="tab-pane fade show active" id="custom-tabs-two-data" role="tabpanel" aria-labelledby="custom-tabs-two-data-tab">
        <form role="form" method="post" action="module/input_data.php?page=edit_kelompok"  enctype="multipart/form-data">
          <!--- Berfungsi Untuk Mengirimkan Kembali id_kelompok ke proses edit_data (where)---->
          <input name="id_kelompok" type="hidden" class="form-control" value="<?php echo $datae['id_kelompok'] ?>"></td>
					<div class="card-body">
						<table class="table" border="0">
						<tr>
							<td>
								<b>Jenis Kelompok</b>
							</td>
							<td>
								<select class="form-control" name="jenis_kelompok" required>
									<option value="<?php echo $datae['id_jenis_kelompok'] ?>" selected><?php echo $datae['jenis_kelompok'] ?></option>
									<?php
              echo $cbstr;
              ?></select>
								<tr>
									<td>
										<b>Nama Kelompok</b>
									</td>
									<td>
										<input name="nama_kelompok" type="text" class="form-control" value="<?php echo $datae['nama_kelompok'] ?>" required></td>
									<tr>
										<td>
											<b>Alamat</b>
										</td>
										<td></td>
										<tr>
											<td>a. Jalan</td>
											<td>
												<input name="jalan" type="text" class="form-control" value="<?php echo $datae['jalan'] ?>" required>
												<br>
												<div class="form-group">
													<select class="form-control" name="rt" required>
														<option value="<?php echo $datae['rt'] ?>"  selected><?php echo $datae['rt'] ?></option>
														<option>01</option>
														<option>02</option>
														<option>03</option>
														<option>04</option>
                            <option>05</option>
                            <option>06</option>
                            <option>07</option>
                            <option>08</option>
                            <option>09</option>
                            <option>10</option>
                            <option>11</option>
                            <option>12</option>
                            <option>13</option>
                            <option>14</option>
                            <option>15</option>
													</select>
												</div>
												<div class="form-group">
													<select class="form-control" name="rw" required>
														<option value="<?php echo $datae['rw'] ?>" selected><?php echo $datae['rw'] ?></option>
                            <option>01</option>
														<option>02</option>
														<option>03</option>
														<option>04</option>
                            <option>05</option>
                            <option>06</option>
                            <option>07</option>
                            <option>08</option>
                            <option>09</option>
                            <option>10</option>
                            <option>11</option>
                            <option>12</option>
                            <option>13</option>
                            <option>14</option>
                            <option>15</option>
													</select>
												</div>
											</td>
											<tr>
												<td>b. Desa/Kelurahan</td>
												<td>
													<input name="kelurahan" type="text" class="form-control" value="<?php echo $datae['kelurahan'] ?>" required>
												</td>
												<tr>
													<td>c. Kecamatan</td>
													<td>
														<div class="form-group">
															<select class="form-control" name="kecamatan" required>
																<option value="<?php echo $datae['kecamatan'] ?>" selected><?php echo $datae['kecamatan'] ?></option>
																<option>Sidorejo</option>
																<option>Argomulyo</option>
																<option>Sidomukti</option>
																<option>Tingkir</option>
															</select>
														</div>
													</td>
													<tr>
														<td>d. Kabupaten/Kota</td>
														<td>
															<select class="form-control" name="kabkot" required>
																<option value="#" disabled selected><?php echo $datae['kabkot'] ?></option>
															</select>
														</div>
													</td>
													<tr>
														<td>e. Provinsi</td>
														<td>
															<select class="form-control" name="provinsi" required>
																<option value="#" disabled selected><?php echo $datae['provinsi'] ?></option>
															</select>
														</div>
													</td>
													<tr>
														<td>
															<b>Pembina</b>
														</td>
														<td></td>
														<tr>
															<tr>
																<td>Nama Lengkap</td>
																<td>
																	<input name="nama_pembina" type="text" class="form-control" value="<?php echo $datae['nama_pembina'] ?>" required></td>
																<tr>
																	<tr>
																		<td>Jabatan</td>
																		<td>
																			<select class="form-control" name="jabatan_pembina" required>
																				<option value="<?php echo $datae['jabatan_pembina'] ?>" selected><?php echo $datae['jabatan_pembina'] ?></option>
																				<option>PPLKB</option>
																				<option>PKB/PLKB</option>
																				<option>PPKBD</option>
																				<option>Sub PPKBD</option>
																				<option>Lainnya</option>
																			</select>
																		</td>
																		<tr></tr>
																		</table>
																		<!-- /.card-body -->
																		<div class="card-footer">
																			<button type="submit" class="btn btn-success">Edit</button>
                                      <button class="btn btn-danger" type="reset" onclick="ComboBox.Items.Clear();">Reset</button>
																		</div>
																	</form>
			</div>

															</div>
														</div>
                          </div>
                          </div>
