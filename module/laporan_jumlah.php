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
   font-size:20;
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
    <td>DINAS PENGENDALIAN PENDUDUK DAN</td>
  </tr>
  <tr>
    <td>KELUARGA BERENCANA</td>
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
<br><br>
<table style="width:65%;height:40%;" border="1">
  <tr>
    <th rowspan="2">NO</th>
    <th rowspan="2">Kecamatan</th>
    <th colspan="3">Kelompok Kegiatan (Poktan)</th>
    <th rowspan="2">Jumlah</th>
  </tr>
  <tr>
    <td >BKB</td>
    <td>BKL</td>
    <td>BKR</td>
  </tr>
  <tr>
    <td>1</td>
    <td class="kiri">SIDOREJO</td>
    <td><?php echo $r13[0] ?></td>
    <td><?php echo $r5[0] ?></td>
    <td><?php echo $r9[0] ?></td>
    <td><?php echo $r17[0] ?></td>
  </tr>
  <tr>
    <td>2</td>
    <td class="kiri">ARGOMULYO</td>
    <td><?php echo $r14[0] ?></td>
    <td><?php echo $r6[0] ?></td>
    <td><?php echo $r10[0] ?></td>
    <td><?php echo $r18[0] ?></td>
  </tr>
  <tr>
    <td>3</td>
    <td class="kiri">SIDOMUKTI</td>
    <td><?php echo $r15[0] ?></td>
    <td><?php echo $r7[0] ?></td>
    <td><?php echo $r11[0] ?></td>
    <td><?php echo $r19[0] ?></td>
  </tr>
  <tr>
    <td>4</td>
    <td class="kiri">TINGKIR</td>
    <td><?php echo $r16[0] ?></td>
    <td><?php echo $r8[0] ?></td>
    <td><?php echo $r12[0] ?></td>
    <td><?php echo $r20[0] ?></td>
  </tr>
  <tr>
    <td></td>
    <td class="kiri">JUMLAH</td>
    <td><?php echo $r4[0] ?></td>
    <td><?php echo $r2[0] ?></td>
    <td><?php echo $r3[0] ?></td>
    <td><?php echo $r1[0] ?></td>
  </tr>
</table>
</center>
<br>
<button style="float:right;margin-right:18%;" type="button" onclick="window.location.href='../index.php'" name="cetak">Batal</button>
<button style="float:right;margin-right:0.5%;" type="button" onclick="window.print()" name="cetak">Cetak</button>
