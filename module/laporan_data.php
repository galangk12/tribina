<?php
require_once("../config/database.php");
require_once("../config/session.php");
require_once("count.php");
 ?>
 <style>
 * {
   font-family:arial;
 }
 table, th, td {
   font-size:14;
   text-align: center;
 }
   .kiri {
     text-align:left;
   }
 </style>
 <center>
<table style="width:75%;font-weight:bold;" border='0'>
  <tr>
    <td rowspan='6'><img src="../dist/img/logo.png" width='75px' height:'80px'/></td>
  </tr>
  <tr>
    <td style="font-size:20;">DINAS PENGENDALIAN PENDUDUK DAN</td>
  </tr>
  <tr>
    <td style="font-size:20;">KELUARGA BERENCANA</td>
  </tr>
  <tr>
    <td style="font-size:17;">Jl. Hasanudin No.110 B Salatiga Kode Pos 50721 Telp.(0298) 326063</td>
  </tr>
  <tr>
    <td style="font-size:17;">Faks.(0298)314206 Website:www.disdaldukkb.go.id</td>
  </tr>
  <tr>
    <td style="font-size:17;">Email:disdaldukkb@salatigakota.go.id</td>
  </tr>
  <tr>
    <td colspan='2'><hr style="height:2px;border-width:0;color:gray;background-color:black"></td>
  </tr>
</table>
<h3>DATA SASARAN POKTAN YANG DIBERI BANTUAN <br> TAHUN <?php echo date("Y"); ?></h3>
<table  style="width:65%;" border="1">
  <!-- KECAMATAN SIDOREJO---->
  <tr>
      <th colspan="3">KECAMATAN SIDOREJO</th>
  </tr>
  <tr>
    <th>Nama BKB</th>
    <th>Nama BKR</th>
    <th>Nama BKL</th>
  </tr>
  <tr>
    <td>
      <table>

          <?php
          $queryBkb1 = mysqli_query($koneksi,"SELECT * FROM tb_id_kelompok WHERE id_jenis_kelompok = 'BKB' and kecamatan='Sidorejo'");
          while ($dBkb1 = mysqli_fetch_array($queryBkb1)) {
           ?>
          <tr>
            <td class="kiri"><?php echo $dBkb1['nama_kelompok'] ?></td>
          </tr>
        <?php } ?>
      </table>
    </td>


    <td>
      <table>
        <?php
        $queryBkr1 = mysqli_query($koneksi,"SELECT * FROM tb_id_kelompok WHERE id_jenis_kelompok = 'BKR' and kecamatan='Sidorejo'");
        while ($dBkr1 = mysqli_fetch_array($queryBkr1)) {
         ?>
        <tr>
          <td class="kiri"><?php echo $dBkr1['nama_kelompok'] ?></td>
        </tr>
      <?php } ?>
      </table>
    </td>

    <td>
      <table>
        <?php
        $queryBkl1 = mysqli_query($koneksi,"SELECT * FROM tb_id_kelompok WHERE id_jenis_kelompok = 'BKL' and kecamatan='Sidorejo'");
        while ($dBkl1 = mysqli_fetch_array($queryBkl1)) {
         ?>
        <tr>
          <td class="kiri"><?php echo $dBkl1['nama_kelompok'] ?></td>
        </tr>
      <?php } ?>
      </table>
    </td>
  </tr>
<!-- KECAMATAN ARGOMULYO---->
<tr>
    <th colspan="3">KECAMATAN ARGOMULYO</th>
</tr>
<tr>
  <th>Nama BKB</th>
  <th>Nama BKR</th>
  <th>Nama BKL</th>
</tr>
<tr>
  <td>
    <table style="text-align:left;vertical-align:top;padding:0">

        <?php
        $queryBkb2 = mysqli_query($koneksi,"SELECT * FROM tb_id_kelompok WHERE id_jenis_kelompok = 'BKB' and kecamatan='Argomulyo'");
        while ($dBkb2 = mysqli_fetch_array($queryBkb2)) {
         ?>
        <tr>
          <td class="kiri"><?php echo $dBkb2['nama_kelompok'] ?></td>
        </tr>
      <?php } ?>
    </table>
  </td>


  <td>
    <table>
      <?php
      $queryBkr2 = mysqli_query($koneksi,"SELECT * FROM tb_id_kelompok WHERE id_jenis_kelompok = 'BKR' and kecamatan='Argomulyo'");
      while ($dBkr2 = mysqli_fetch_array($queryBkr2)) {
       ?>
      <tr>
        <td class="kiri"><?php echo $dBkr2['nama_kelompok'] ?></td>
      </tr>
    <?php } ?>
    </table>
  </td>

  <td>
    <table>
      <?php
      $queryBkl2 = mysqli_query($koneksi,"SELECT * FROM tb_id_kelompok WHERE id_jenis_kelompok = 'BKL' and kecamatan='Argomulyo'");
      while ($dBkl2 = mysqli_fetch_array($queryBkl2)) {
       ?>
      <tr>
        <td class="kiri"><?php echo $dBkl2['nama_kelompok'] ?></td>
      </tr>
    <?php } ?>
    </table>
  </td>
</tr>
<!-- KECAMATAN SIDOMUKTI--->
<tr>
    <th colspan="3">KECAMATAN SIDOMUKTI</th>
</tr>
<tr>
  <th>Nama BKB</th>
  <th>Nama BKR</th>
  <th>Nama BKL</th>
</tr>
<tr>
  <td>
    <table style="text-align:left;vertical-align:top;padding:0">

        <?php
        $queryBkb3 = mysqli_query($koneksi,"SELECT * FROM tb_id_kelompok WHERE id_jenis_kelompok = 'BKB' and kecamatan='Sidomukti'");
        while ($dBkb3 = mysqli_fetch_array($queryBkb3)) {
         ?>
        <tr>
          <td class="kiri"><?php echo $dBkb3['nama_kelompok'] ?></td>
        </tr>
      <?php } ?>
    </table>
  </td>


  <td>
    <table>
      <?php
      $queryBkr3 = mysqli_query($koneksi,"SELECT * FROM tb_id_kelompok WHERE id_jenis_kelompok = 'BKR' and kecamatan='Sidomukti'");
      while ($dBkr3 = mysqli_fetch_array($queryBkr3)) {
       ?>
      <tr>
        <td class="kiri"><?php echo $dBkr3['nama_kelompok'] ?></td>
      </tr>
    <?php } ?>
    </table>
  </td>

  <td>
    <table>
      <?php
      $queryBkl3 = mysqli_query($koneksi,"SELECT * FROM tb_id_kelompok WHERE id_jenis_kelompok = 'BKL' and kecamatan='Sidomukti'");
      while ($dBkl3 = mysqli_fetch_array($queryBkl3)) {
       ?>
      <tr>
        <td class="kiri"><?php echo $dBkl3['nama_kelompok'] ?></td>
      </tr>
    <?php } ?>
    </table>
  </td>
</tr>

<!-- KECAMATAN TINGKIR --->
<tr>
    <th colspan="3">KECAMATAN TINGKIR</th>
</tr>
<tr>
  <th>Nama BKB</th>
  <th>Nama BKR</th>
  <th>Nama BKL</th>
</tr>
<tr>
  <td>
    <table style="text-align:left;vertical-align:top;padding:0">

        <?php
        $queryBkb4 = mysqli_query($koneksi,"SELECT * FROM tb_id_kelompok WHERE id_jenis_kelompok = 'BKB' and kecamatan='Tingkir'");
        while ($dBkb4 = mysqli_fetch_array($queryBkb4)) {
         ?>
        <tr>
          <td class="kiri"><?php echo $dBkb4['nama_kelompok'] ?></td>
        </tr>
      <?php } ?>
    </table>
  </td>


  <td>
    <table>
      <?php
      $queryBkr4 = mysqli_query($koneksi,"SELECT * FROM tb_id_kelompok WHERE id_jenis_kelompok = 'BKR' and kecamatan='Tingkir'");
      while ($dBkr4 = mysqli_fetch_array($queryBkr4)) {
       ?>
      <tr>
        <td class="kiri"><?php echo $dBkr4['nama_kelompok'] ?></td>
      </tr>
    <?php } ?>
    </table>
  </td>

  <td>
    <table>
      <?php
      $queryBkl4 = mysqli_query($koneksi,"SELECT * FROM tb_id_kelompok WHERE id_jenis_kelompok = 'BKL' and kecamatan='Tingkir'");
      while ($dBkl4 = mysqli_fetch_array($queryBkl4)) {
       ?>
      <tr>
        <td class="kiri"><?php echo $dBkl4['nama_kelompok'] ?></td>
      </tr>
    <?php } ?>
    </table>
  </td>
</tr>




</table>
</center>
<br>
<button style="float:right;margin-right:18%;" type="button" onclick="window.location.href='../index.php'" name="cetak">Batal</button>
<button style="float:right;margin-right:0.5%;" type="button" onclick="window.print()" name="cetak">Cetak</button>
