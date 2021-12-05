<?php
require_once("config/database.php");

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
				<a class="nav-link active" id="custom-tabs-two-data-tab" data-toggle="pill" href="#custom-tabs-two-data" role="tab" aria-controls="custom-tabs-two-data" aria-selected="true">Data</a>
			</li>
			<li class="nav-item">
				<a class="nav-link" id="custom-tabs-two-input-tab" data-toggle="pill" href="#custom-tabs-two-input" role="tab" aria-controls="custom-tabs-two-input" aria-selected="false">Input Data</a>
			</li>
      <li class="nav-item">
				<a class="nav-link" id="custom-tabs-two-inputagt-tab" data-toggle="pill" href="#custom-tabs-two-inputagt" role="tab" aria-controls="custom-tabs-two-inputagt" aria-selected="false">Input Anggota</a>
			</li>
		</ul>
	</div>
	<div class="card-body">
		<div class="tab-content" id="custom-tabs-two-tabContent">
			<div class="tab-pane fade show active" id="custom-tabs-two-data" role="tabpanel" aria-labelledby="custom-tabs-two-data-tab">
				<table class="table table-hover text-nowrap">
				<thead>
				<tr>
					<th>No</th>
					<th>Nama Kelompok</th>
					<th>Jenis Kelompok</th>
					<th>Kecamatan</th>
          <th style="text-align:center" colspan="2">Aksi</th>
				</tr>
				</thead>
				<tbody>
          <?php
            //Berfungsi Untuk pagination
            $batas   = 10; //Diisi Batasnya Berapa
            $halaman = @$_GET['halaman'];
            if(empty($halaman)){
             $posisi  = 0;
             $halaman = 1;
            }
            else{
              $posisi  = ($halaman-1) * $batas;
            }
            //Menggunakan Inner Join Untuk Mendapatkan Data Jenis Kelompok
            $query1 = "SELECT * FROM tb_id_kelompok INNER JOIN tb_jenis_kelompok
            USING (id_jenis_kelompok) order by kecamatan LIMIT $posisi,$batas";
            $dt = mysqli_query($koneksi, $query1);
            $no = $posisi+1;
            while ($data = mysqli_fetch_array($dt))
            {

           ?>
				<tr>
					<td><?php echo $no++; ?></td>
					<td><?php echo $data['nama_kelompok'] ?></td>
					<td><?php echo $data['jenis_kelompok'] ?> </td>
					<td><?php echo $data['kecamatan'] ?></td>
          <td style="text-align:center">
            <a class="btn btn-primary" href="index.php?page=info_kelompok&id=<?php echo $data['id_kelompok'] ?>">
              <i class="fa fa-info-circle"></i></a>
            <a class="btn btn-success" href="index.php?page=edit_kelompok&id=<?php echo $data['id_kelompok'] ?>">
              <i class="fa fa-edit"></i></a>
            <a class="btn btn-danger" href="module/input_data.php?page=hapus_kelompok&id=<?php echo $data['id_kelompok'] ?>">
              <i class="fa fa-trash"></i></a>
          </td>
				</tr>
            <?php
            }
            //Menghitung Total Halaman
            $query2     = mysqli_query($koneksi, "select * from tb_id_kelompok");
            $jmldata    = mysqli_num_rows($query2);
            $jmlhalaman = ceil($jmldata/$batas);

             ?>
				</tbody>
				</table>
        <!--Menu paginationnya--->
        <ul class="pagination justify-content-center">
        <?php
        for($i=1;$i<=$jmlhalaman;$i++)
        if ($i != $halaman){
         echo "
         <li class='page-item'><a class='page-link' href=\"index.php?page=id_kelompok&halaman=$i\">$i</a></li>";
        }
        else{
         echo "
         <li class='page-item active'><a class='page-link' href=''>$i<span class='sr-only'>(current)</span></a></li>";
        }
         ?>
       </ul>
			</div>
      <!-- Mulai Tab Input Identitas Kelompok--->
			<div class="tab-pane fade" id="custom-tabs-two-input" role="tabpanel" aria-labelledby="custom-tabs-two-input-tab">
				<form role="form" method="post" action="module/input_data.php?page=tambah_kelompok"  enctype="multipart/form-data">
					<div class="card-body">
						<table class="table" border="0">
						<tr>
							<td>
								<b>Jenis Kelompok</b>
							</td>
							<td>
								<select class="form-control" name="jenis_kelompok" required>
									<option value="#" disabled selected>Pilih Jenis Kelompok</option>
									<?php
              echo $cbstr;
              ?></select>
								<tr>
									<td>
										<b>Nama Kelompok</b>
									</td>
									<td>
										<input name="nama_kelompok" type="text" class="form-control" placeholder="Masukkan Nama Kelompok..." required></td>
									<tr>
										<td>
											<b>Alamat</b>
										</td>
										<td></td>
										<tr>
											<td>a. Jalan</td>
											<td>
												<input name="jalan" type="text" class="form-control" placeholder="Masukkan Nama Jalan..." required>
												<br>
												<div class="form-group">
													<select class="form-control" name="rt" required>
														<option value="#" disabled selected>Pilih RT</option>
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
														<option value="#" disabled selected>Pilih RW</option>
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
													<input name="kelurahan" type="text" class="form-control" placeholder="Masukkan Nama Desa/Kelurahan..." required>
												</td>
												<tr>
													<td>c. Kecamatan</td>
													<td>
														<div class="form-group">
															<select class="form-control" name="kecamatan" required>
																<option value="#" disabled selected>Pilih Kecamatan</option>
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
																<option value="#" disabled selected>Pilih Kabupaten/Kota</option>
																<option>Kota Salatiga</option>
															</select>
													</td>
													<tr>
														<td>e. Provinsi</td>
														<td>
															<select class="form-control" name="provinsi" required>
																<option value="#" disabled selected>Pilih Provinsi</option>
																<option>Jawa Tengah</option>
															</select>
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
																	<input name="nama_pembina" type="text" class="form-control" placeholder="Masukkan Nama Pembina..." required></td>
																<tr>
																	<tr>
																		<td>Jabatan</td>
																		<td>
																			<select class="form-control" name="jabatan_pembina" required>
																				<option value="#" disabled selected>Pilih Jabatan</option>
																				<option>PPLKB</option>
																				<option>PKB/PLKB</option>
																				<option>PPKBD</option>
																				<option>Sub PPKBD</option>
																				<option>Lainnya</option>
																			</select>
																		</td>
																		<tr></tr>
																		</table>
                                  </div>
																		<!-- /.card-body -->
																		<div class="card-footer">
																			<button type="submit" class="btn btn-success">Submit</button>
                                      <button class="btn btn-danger" type="reset" onclick="ComboBox.Items.Clear();">Reset</button>
																		</div>
																	</form>
																</div>
                                <!-- Mulai Tab Input Anggota Kelompok--->
                                <div class="tab-pane fade" id="custom-tabs-two-inputagt" role="tabpanel" aria-labelledby="custom-tabs-two-inputagt-tab">
                                  <form role="form" method="post" action="module/input_data.php?page=tambah_anggota">
                                    <div class="card-body">
                                      <table class="table" border="0">
                                      <tr>
                                        <td>
                                          <b>Data Anggota Kelompok</b></td><td></td>
                                          <tr>
                                            <td>Jenis Kelompok</td>
                                            <td>
                                              <div class="form-group">
                                                <select class="form-control" onchange='javascript:rubah(this)'>
                                                  <option value="#" disabled selected>Pilih Jenis Kelompok</option>
                                                  <?php echo $cbstr; ?></option>
                                                </select>
                                              </div>
                                            </td>
                                            <tr>
                                              <td>Nama Kelompok</td>
                                              <td>
                                                <div id='divkedua'></div>
                                              </td>
                                              <tr>
                                                <td>Kode Keluarga Indonesia</td>
                                                <td>
                                                  <input name="kode_kki" type="text" class="form-control" placeholder="Masukkan Kode Keluarga Indonesia (KKI)..." required></td>
                                                <tr>
                                                  <td>Nama Lengkap</td>
                                                  <td>
                                                    <input name="nama_anggota" type="text" class="form-control" placeholder="Masukkan Nama Lengkap..." required></td>
                                                  <tr>
                                                    <td>
                                                      <b>Pengurus Kelompok <small>*Abaikan Jika Statusnya Adalah Anggota</small></b><td></td>
                                                      <tr>
                                                        <td>Jabatan</td>
                                                        <td>
                                                          <select class="form-control" name="jabatan">
                                                            <option value="-" selected>Pilih Jabatan</option>
                                                            <option value="Ketua">Ketua</option>
                                                            <option value="Sekertaris">Sekretaris</option>
                                                            <option value="Bendahara">Bendahara</option>
                                                          </select>
                                                        </td>
                                                        <tr>
                                                          <td>Mengikuti Pelatihan</td>
                                                          <td>
                                                            <select class="form-control" name="ikutlatih">
                                                              <option value="-" selected>Pilih Salah Satu</option>
                                                              <option>Sudah</option>
                                                              <option>Belum</option>
                                                            </select>
                                                          </td>
                                                          <tr></tr>
                                                          </table>
                                                          <!-- /.card-body -->
                                                          <div class="card-footer">
                                                            <button type="submit" class="btn btn-primary">Submit</button>
                                                          </div>
                                                        </form>
                                </div>
															</div>
														</div>
                          </div>
                        </div>
                        </div>
