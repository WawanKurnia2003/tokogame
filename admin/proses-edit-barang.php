<?php
session_start();
if (empty($_SESSION['user_id'])) {
  header("location:../login.php");
}
?>
<?php

include "../koneksi.php";

$id_barang = $_POST['id_barang'];
$nama = $_POST['nama'];
$nama_barang = $_POST['nama_barang'];
$alamat = $_POST['alamat'];
$email = $_POST['email'];
$no = $_POST['no_wa'];
$pembayaran = $_POST['pembayaran'];

$ubah = $koneksi->query("update pesanan_barang set id_barang='$id_barang', nama='$nama', nama_barang='$nama_barang', alamat='$alamat', email='$email' , no_wa='$no_wa' , pembayaran='$pembayaran' where id_barang='$id'");

if ($ubah == true) {

  header("location:tampil-barang.php?pesan=editBerhasil");
} else {
  echo "Error";
}

?>