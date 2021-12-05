<?php
require_once("../config/database.php");
require_once("../config/session.php");
$page=isset($_GET['page']) ? ($_GET['page']) : "";
//FUNGSI CRUD UNTUK IDENTITAS KELOMPOK
if ($page=='tambah_kelompok') {
  $jenis_kelompok   = $_POST['jenis_kelompok'];
  $nama_kelompok    = $_POST['nama_kelompok'];
  $jalan            = $_POST['jalan'];
  $rt               = $_POST['rt'];
  $rw               = $_POST['rw'];
  $kelurahan        = $_POST['kelurahan'];
  $kecamatan        = $_POST['kecamatan'];
  $kabkot           = $_POST['kabkot'];
  $provinsi         = $_POST['provinsi'];
  $nama_pembina     = $_POST['nama_pembina'];
  $jabatan_pembina  = $_POST['jabatan_pembina'];
  $tanggal          = date('d/m/y');

  $query = "INSERT INTO tb_id_kelompok (id_jenis_kelompok,nama_kelompok,jalan,rt,rw,kelurahan,kecamatan,kabkot,provinsi,nama_pembina,
                jabatan_pembina,tanggal,id_user) VALUES
            ('$jenis_kelompok','$nama_kelompok','$jalan','$rt','$rw','$kelurahan','$kecamatan','$kabkot','$provinsi','$nama_pembina',
            '$jabatan_pembina','$tanggal','1')";
  if (mysqli_query($koneksi,$query)) {
  	echo "<script> alert('Data Berhasil Di Unggah')
  					window.location.href='../index.php?page=id_kelompok'
  					</script>
  			";

  			}
  			else
  			{
  				echo "<script> alert('Data Gagal Di Unggah')
  					window.location.href='../index.php?page=id_kelompok'
  					</script>
  			";
  			}

}
elseif ($page=='edit_kelompok') {
  $id_kelompok      = $_POST['id_kelompok'];
  $jenis_kelompok   = $_POST['jenis_kelompok'];
  $nama_kelompok    = $_POST['nama_kelompok'];
  $jalan            = $_POST['jalan'];
  $rt               = $_POST['rt'];
  $rw               = $_POST['rw'];
  $kelurahan        = $_POST['kelurahan'];
  $kecamatan        = $_POST['kecamatan'];
  $nama_pembina     = $_POST['nama_pembina'];
  $jabatan_pembina  = $_POST['jabatan_pembina'];

  $query = "UPDATE tb_id_kelompok SET id_jenis_kelompok='$jenis_kelompok', nama_kelompok='$nama_kelompok',jalan='$jalan',
            rt='$rt',rw='$rw',kelurahan='$kelurahan',kecamatan='$kecamatan',nama_pembina='$nama_pembina',jabatan_pembina='$jabatan_pembina'
            WHERE id_kelompok='$id_kelompok' ";
  if (mysqli_query($koneksi,$query)) {
  	echo "<script> alert('Data Berhasil Di Ubah')
  					window.location.href='../index.php?page=id_kelompok'
  					</script>
  			";

  			}
  			else
  			{
  				echo "<script> alert('Data Gagal Di Ubah')
  					window.location.href='../index.php?page=id_kelompok'
  					</script>
  			";
  			}

}
elseif ($page=='hapus_kelompok') {
$id = $_GET['id'];
$query = "DELETE FROM tb_id_kelompok WHERE id_kelompok=$id";
if (mysqli_query($koneksi,$query)) {
  echo "<script> alert('Data Berhasil Di Dihapus')
          window.location.href='../index.php?page=id_kelompok'
          </script>
      ";

      }
      else
      {
        echo "<script> alert('Data Gagal Di Hapus')
          window.location.href='../index.php?page=id_kelompok'
          </script>
      ";
      }

}

//FUNGSI CRUD UNTUK ANGGOTA KELOMPOK
elseif ($page=='tambah_anggota') {
  $id_kelompok      = $_POST['id_kelompok'];
  $kode_kki         = $_POST['kode_kki'];
  $nama_anggota     = $_POST['nama_anggota'];
  $jabatan          = $_POST['jabatan'];
  $ikutlatih        = $_POST['ikutlatih'];
  $tanggal          = date('d/m/y');

  $query = "INSERT INTO tb_agt_kelompok (id_kelompok,nama_lengkap,jabatan,kode_keluargaid,pelatihan,tanggal,id_user) VALUES
            ('$id_kelompok','$nama_anggota','$jabatan','$kode_kki','$ikutlatih','$tanggal','1')";
  if (mysqli_query($koneksi,$query)) {
  	echo "<script> alert('Data Berhasil Di Unggah')
  					window.location.href='../index.php?page=id_kelompok'
  					</script>
  			";

  			}
  			else
  			{
  				echo "<script> alert('Data Gagal Di Unggah')
  					window.location.href='../index.php?page=id_kelompok'
  					</script>
  			";
  			}

}
elseif ($page=='edit_anggota') {
  $id_kelompok      = $_POST['id_kelompok'];
  $id_agt           = $_POST['id_pe_kelompok'];
  $kode_kki         = $_POST['kode_kki'];
  $nama_anggota     = $_POST['nama_anggota'];
  $jabatan          = $_POST['jabatan'];
  $ikutlatih        = $_POST['ikutlatih'];

  $query = "UPDATE tb_agt_kelompok SET kode_keluargaid='$kode_kki',nama_lengkap ='$nama_anggota',
  jabatan='$jabatan',pelatihan='$ikutlatih' WHERE id_pe_kelompok='$id_agt'";
  if (mysqli_query($koneksi,$query)) {
  	echo "<script> alert('Data Berhasil Di Ubah')
  					window.location.href='../index.php?page=info_kelompok&id=$id_kelompok'
  					</script>
  			";

  			}
  			else
  			{
  				echo "<script> alert('Data Gagal Di Ubah')
  					window.location.href='../index.php?page=info_kelompok&id=$id_kelompok'
  					</script>
  			";
  			}

}
elseif ($page=='hapus_anggota') {
$id_kelompok  = $_GET['kp'];
$id           = $_GET['id'];
$query = "DELETE FROM tb_agt_kelompok WHERE id_pe_kelompok=$id";
if (mysqli_query($koneksi,$query)) {
  echo "<script> alert('Data Berhasil Di Dihapus')
          window.location.href='../index.php?page=info_kelompok&id=$id_kelompok'
          </script>
      ";

      }
      else
      {
        echo "<script> alert('Data Gagal Di Hapus')
          window.location.href='../index.php?page=info_kelompok&id=$id_kelompok'
          </script>
      ";
      }

}
elseif ($page=='edit_user') {
  $id_user  = $_POST['id_user'];
  $nama     = $_POST['nama'];
  $username = $_POST['username'];
  $password = $_POST['password'];

  $query = "UPDATE users SET nama='$nama',username='$username',password='$password' where id_user='$id_user'";
  if (mysqli_query($koneksi,$query)) {
  	echo "<script> alert('Data Berhasil Di Ubah')
  					window.location.href='../index.php?page=user'
  					</script>
  			";

  			}
  			else
  			{
  				echo "<script> alert('Data Gagal Di Ubah')
  					window.location.href='../index.php?page=user'
  					</script>
  			";
  			}

}

 ?>
