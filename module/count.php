<?php
//Menghitung Total Kelompok Berdasarkan Jenis Kelompok
$q1 = mysqli_query($koneksi,"SELECT COUNT(*) FROM tb_id_kelompok");
$r1 = mysqli_fetch_array($q1);
$q2 = mysqli_query($koneksi,"SELECT COUNT(*) FROM tb_id_kelompok WHERE id_jenis_kelompok='BKL'");
$r2 = mysqli_fetch_array($q2);
$q3 = mysqli_query($koneksi,"SELECT COUNT(*) FROM tb_id_kelompok WHERE id_jenis_kelompok='BKR'");
$r3 = mysqli_fetch_array($q3);
$q4 = mysqli_query($koneksi,"SELECT COUNT(*) FROM tb_id_kelompok WHERE id_jenis_kelompok='BKB'");
$r4 = mysqli_fetch_array($q4);
//Menghitung Total Kelompok BKL Berdasarkan kecamatan
$q5 = mysqli_query($koneksi,"SELECT COUNT(*) FROM tb_id_kelompok WHERE id_jenis_kelompok='BKL' and kecamatan='Sidorejo'");
$r5 = mysqli_fetch_array($q5);
$q6 = mysqli_query($koneksi,"SELECT COUNT(*) FROM tb_id_kelompok WHERE id_jenis_kelompok='BKL' and kecamatan='Argomulyo'");
$r6 = mysqli_fetch_array($q6);
$q7 = mysqli_query($koneksi,"SELECT COUNT(*) FROM tb_id_kelompok WHERE id_jenis_kelompok='BKL' and kecamatan='Sidomukti'");
$r7 = mysqli_fetch_array($q7);
$q8 = mysqli_query($koneksi,"SELECT COUNT(*) FROM tb_id_kelompok WHERE id_jenis_kelompok='BKL' and kecamatan='Tingkir'");
$r8 = mysqli_fetch_array($q8);
  //Menghitung Total Kelompok BKR Berdasarkan kecamatan
$q9 = mysqli_query($koneksi,"SELECT COUNT(*) FROM tb_id_kelompok WHERE id_jenis_kelompok='BKR' and kecamatan='Sidorejo'");
$r9 = mysqli_fetch_array($q9);
$q10 = mysqli_query($koneksi,"SELECT COUNT(*) FROM tb_id_kelompok WHERE id_jenis_kelompok='BKR' and kecamatan='Argomulyo'");
$r10 = mysqli_fetch_array($q10);
$q11 = mysqli_query($koneksi,"SELECT COUNT(*) FROM tb_id_kelompok WHERE id_jenis_kelompok='BKR' and kecamatan='Sidomukti'");
$r11 = mysqli_fetch_array($q11);
$q12 = mysqli_query($koneksi,"SELECT COUNT(*) FROM tb_id_kelompok WHERE id_jenis_kelompok='BKR' and kecamatan='Tingkir'");
$r12 = mysqli_fetch_array($q12);
//Menghitung Total Kelompok BKB Berdasarkan kecamatan
$q13 = mysqli_query($koneksi,"SELECT COUNT(*) FROM tb_id_kelompok WHERE id_jenis_kelompok='BKB' and kecamatan='Sidorejo'");
$r13 = mysqli_fetch_array($q13);
$q14 = mysqli_query($koneksi,"SELECT COUNT(*) FROM tb_id_kelompok WHERE id_jenis_kelompok='BKB' and kecamatan='Argomulyo'");
$r14 = mysqli_fetch_array($q14);
$q15 = mysqli_query($koneksi,"SELECT COUNT(*) FROM tb_id_kelompok WHERE id_jenis_kelompok='BKB' and kecamatan='Sidomukti'");
$r15 = mysqli_fetch_array($q15);
$q16 = mysqli_query($koneksi,"SELECT COUNT(*) FROM tb_id_kelompok WHERE id_jenis_kelompok='BKB' and kecamatan='Tingkir'");
$r16 = mysqli_fetch_array($q16);
//Menghitung Seluruh Kelompok Berdasarkan Kecamatan
$q17 = mysqli_query($koneksi,"SELECT COUNT(*) FROM tb_id_kelompok WHERE kecamatan='Sidorejo'");
$r17 = mysqli_fetch_array($q17);
$q18 = mysqli_query($koneksi,"SELECT COUNT(*) FROM tb_id_kelompok WHERE kecamatan='Argomulyo'");
$r18 = mysqli_fetch_array($q18);
$q19 = mysqli_query($koneksi,"SELECT COUNT(*) FROM tb_id_kelompok WHERE kecamatan='Sidomukti'");
$r19 = mysqli_fetch_array($q19);
$q20 = mysqli_query($koneksi,"SELECT COUNT(*) FROM tb_id_kelompok WHERE kecamatan='Tingkir'");
$r20 = mysqli_fetch_array($q20);
 ?>
