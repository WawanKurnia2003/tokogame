<?php
session_start();
if (empty($_SESSION['user_id'])) {
  header("location:../login.php");
}
?>
<?php

$id = $_GET['id'];

include "../koneksi.php";

$hapus = $koneksi->query("delete from pesanan_barang where id_barang='$id'");

if ($hapus == true) {

  header("location:tampil-barang.php?pesan=hapusBerhasil");

} else {
  echo "Error";
}


?>