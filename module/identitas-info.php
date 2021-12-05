<?php
//UNTUK MEMBUAT FORM EDIT IDENTITAS, COPY PASTE DARI FILE IDENTITAS.PHP MENJADI IDENTITAS-EDIT.PHP
require_once("config/database.php");
//Fungsi Mengambil DATA Identitas Kelompok, Jenis Kelompok, Dan Anggota Kelompok
$id = $_GET['id'];
$qq = "SELECT * FROM tb_id_kelompok a
JOIN tb_jenis_kelompok b
ON b.id_jenis_kelompok = a.id_jenis_kelompok
WHERE a.id_kelompok='$id'"; //Dilimit Untuk Pagination
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
				<a class="nav-link active" id="custom-tabs-two-data-tab" data-toggle="pill" href="#custom-tabs-two-data" role="tab" aria-controls="custom-tabs-two-data" aria-selected="true">Informasi Kelompok</a>
			</li>
			<li class="nav-item">
				<a class="nav-link" id="custom-tabs-two-input-tab" data-toggle="pill" href="#custom-tabs-two-input" role="tab" aria-controls="custom-tabs-two-input" aria-selected="false">Informasi Anggota</a>
			</li>
		</ul>
	</div>
	<div class="card-body">
		<div class="tab-content" id="custom-tabs-two-tabContent">
			<div class="tab-pane fade show active" id="custom-tabs-two-data" role="tabpanel" aria-labelledby="custom-tabs-two-data-tab">
				<table class="table" border="0">
				<tr>
					<td>
						<b>Jenis Kelompok</b>
					</td>
					<td>
						<?php echo $datae['jenis_kelompok'] ?></td>
					<tr>
						<td>
							<b>Nama Kelompok</b>
						</td>
						<td>
							<?php echo $datae['nama_kelompok'] ?></td>
						<tr>
							<td>
								<b>Alamat</b>
							</td>
							<td></td>
							<tr>
								<td>a. Jalan</td>
								<td>
									<?php echo $datae['jalan'] ?>
									 RT <?php echo $datae['rt'] ?>
									 / RW <?php echo $datae['rw'] ?>
									<br></td>
								<tr>
									<td>b. Desa/Kelurahan</td>
									<td>
										<?php echo $datae['kelurahan'] ?></td>
									<tr>
										<td>c. Kecamatan</td>
										<td>
											<?php echo $datae['kecamatan'] ?></td>
										<tr>
											<td>d. Kabupaten/Kota</td>
											<td>
												<?php echo $datae['kabkot'] ?></div>
										</td>
										<tr>
											<td>e. Provinsi</td>
											<td>
												<?php echo $datae['provinsi'] ?></td>
											<tr>
												<td>
													<b>Pembina</b>
												</td>
												<td></td>
												<tr>
													<tr>
														<td>Nama Lengkap</td>
														<td>
															<?php echo $datae['nama_pembina'] ?></td>
														<tr>
															<tr>
																<td>Jabatan</td>
																<td>
																	<?php echo $datae['jabatan_pembina'] ?></td>
																<tr></tr>
																</table>
																<a class="btn btn-success" href="index.php?page=id_kelompok">Kembali</a>
															</div>
															<!-- Mulai Tab Input Identitas Kelompok--->
															<div class="tab-pane fade" id="custom-tabs-two-input" role="tabpanel" aria-labelledby="custom-tabs-two-input-tab">
																<div class="card-body">

																	<table class="table table-hover text-nowrap">
																		<tr>
																			<th>Nomor</th>
																			<th>Kode Keluarga Indonesia (KKI)</th>
																			<th>Nama Lengkap</th>
																			<th>Jabatan</th>
																			<th>Mengikuti Pelatihan</th>
																			<th style="text-align:center" colspan="2">Aksi</th>
																		</tr>
																			<?php $no=1;

																			 $qq2=mysqli_query($koneksi,"SELECT * FROM tb_agt_kelompok where id_kelompok='$id' ORDER BY jabatan DESC");
																			while ($datae2 = mysqli_fetch_array($qq2)) {
																				?>
																		<tr>
																			<td><?php echo $no++ ?></td>
																			<td><?php echo $datae2['kode_keluargaid'] ?></td>
																			<td><?php echo $datae2['nama_lengkap'] ?></td>
																			<td><?php echo $datae2['jabatan'] ?> </td>
																			<td><?php echo $datae2['pelatihan'] ?> </td>
																			<td>
																				<td style="text-align:center">
															            <a class="btn btn-success" href="index.php?page=edit_anggota&id=<?php echo $datae2['id_pe_kelompok'] ?>">
															              <i class="fa fa-edit"></i></a>
															            <a class="btn btn-danger" href="module/input_data.php?page=hapus_anggota&id=<?php echo $datae2['id_pe_kelompok'] ?>&kp=<?php echo $datae2['id_kelompok'] ?>">
															              <i class="fa fa-trash"></i></a>
															          </td>
																			</td>
																		</tr>
																	<?php
																}
											             ?>
																	</table>
																 </ul>
																</div>
																<!-- /.card-body -->
																<div class="card-footer"></div>
															</div>
														</div>
</div>
</div>
