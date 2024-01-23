<?php

include "koneksi.php";

$nama = $koneksi->real_escape_string($_POST['nama']);
$nama_barang = $koneksi->real_escape_string($_POST['nama_barang']);
$alamat = $koneksi->real_escape_string($_POST['alamat']);
$email = $koneksi->real_escape_string($_POST['email']);
$no_wa = $koneksi->real_escape_string($_POST['no_wa']);
$pembayaran = $koneksi->real_escape_string($_POST['pembayaran']);


$simpan = $koneksi->query("insert into pesanan_barang(nama,nama_barang,alamat,email,no_wa,pembayaran) 
                        values ('$nama', '$nama_barang', '$alamat', '$email', '$no_wa', '$pembayaran')");

if ($simpan == true) {

    header("location:tampil-pesan.php?pesan=inputBerhasil");
} else {
    echo "Error";
}

?>