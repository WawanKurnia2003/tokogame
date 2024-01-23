<?php
session_start();
if (empty($_SESSION['user_id'])) {
  header("location:../login.php");
}
?>
<?php
$id = $_POST['id_barang'];
$nama = $_POST['nama'];
$nama_barang = $_POST['nama_barang'];
$alamat = $_POST['alamat'];
$email = $_POST['email'];
$no_wa = $_POST['no_wa'];
$pembayaran = $_POST['pembayaran'];
include "../koneksi.php";

$simpan = $koneksi->query("insert into pesanan_barang(id_barang,nama,nama_barang,alamat,email,no_wa,pembayaran) 
                        values ('$id_barang','$nama','$nama_barang','$alamat', '$email', '$no_wa', '$pembayaran')");

if ($simpan == true) {

  header("location:tampil-barang.php?pesan=inputBerhasil");
} else {
  echo "Error";
}




?>