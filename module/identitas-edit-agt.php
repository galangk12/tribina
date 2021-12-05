<?php
//UNTUK MEMBUAT FORM EDIT IDENTITAS, COPY PASTE DARI FILE IDENTITAS-INFO.PHP MENJADI IDENTITAS-EDIT-AGT.PHP
require_once("config/database.php");
//Fungsi Mengambil DATA  Anggota Kelompok
$id = $_GET['id'];
$qq = "SELECT * FROM tb_agt_kelompok INNER JOIN tb_id_kelompok USING (id_kelompok) WHERE id_pe_kelompok='$id'";
$res = mysqli_query($koneksi,$qq);
$datae=mysqli_fetch_array($res);
?>
<div class="card card-primary card-tabs" style="width:100%">
	<div class="card-header p-0 pt-1">
		<ul class="nav nav-tabs" id="custom-tabs-two-tab" role="tablist">
			<li class="pt-2 px-3">
				<h3 class="card-title"></h3>
			</li>
			<li class="nav-item">
				<a class="nav-link active" id="custom-tabs-two-data-tab" data-toggle="pill" href="#custom-tabs-two-data" role="tab" aria-controls="custom-tabs-two-data" aria-selected="true">Edit Anggota</a>
			</li>
		</ul>
	</div>
	<div class="card-body">
		<div class="tab-content" id="custom-tabs-two-tabContent">
			<div class="tab-pane fade show active" id="custom-tabs-two-data" role="tabpanel" aria-labelledby="custom-tabs-two-data-tab">
				<form role="form" method="post" action="module/input_data.php?page=edit_anggota">
					<div class="card-body">
						<table class="table" border="0">
							<input type="hidden" name="id_pe_kelompok" value="<?php echo $datae['id_pe_kelompok']?>"/>
							<input type="hidden" name="id_kelompok" value="<?php echo $datae['id_kelompok']?>"/><!-- Untuk Mengembalikan Value ID Ke input_data--->
						<tr>
							<td>
								<b>Data Anggota Kelompok</b></td><td></td>
						</tr>
										<td>Nama Kelompok</td>
										<td>
											<?php echo $datae['nama_kelompok'] ?>
										</td>
										<tr>
											<td>Kode Keluarga Indonesia</td>
											<td>
												<input name="kode_kki" type="text" class="form-control" value="<?php echo $datae['kode_keluargaid'] ?>" required></td>
											<tr>
												<td>Nama Lengkap</td>
												<td>
													<input name="nama_anggota" type="text" class="form-control" value="<?php echo $datae['nama_lengkap'] ?>" required></td>
												<tr>
													<td>
														<b>Pengurus Kelompok <small>*Abaikan Jika Statusnya Adalah Anggota</small></b><td></td>
														<tr>
															<td>Jabatan</td>
															<td>
																<select class="form-control" name="jabatan">
																	<option value="<?php echo $datae['jabatan'] ?>" selected>Pilih Jabatan</option>
																	<option value="Ketua">Ketua</option>
																	<option value="Sekertaris">Sekretaris</option>
																	<option value="Bendahara">Bendahara</option>
																</select>
															</td>
															<tr>
																<td>Mengikuti Pelatihan</td>
																<td>
																	<select class="form-control" name="ikutlatih">
																		<option value="<?php echo $datae['pelatihan'] ?>" selected>Pilih Salah Satu</option>
																		<option>Sudah</option>
																		<option>Belum</option>
																	</select>
																</td>
																<tr></tr>
																</table>
																<!-- /.card-body -->
																<div class="card-footer">
																	<button type="submit" class="btn btn-primary">Submit</button>
																	<a class="btn btn-success" href="index.php?page=id_kelompok">Kembali</a>
																</div>
															</form>

			</div>

																<div class="card-footer"></div>
															</div>
														</div>
													</div>
													</div>
