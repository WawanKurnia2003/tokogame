<?php
session_start();
if (empty($_SESSION['user_id'])) {
    header("location:../login.php");
}
?>
<?php

include "../koneksi.php";

$id = $_POST['barang_id'];
$game = $_POST['game'];
$id_player = $_POST['id_player'];
$nickname = $_POST['nickname'];
$topup = $_POST['topup'];
$email = $_POST['email'];
$no_wa = $_POST['no_wa'];
$pembayaran = $_POST['pembayaran'];

$ubah = $koneksi->query("update pesanan_topup set game='$game', id_player='$id_player', nickname='$nickname', topup='$topup', email='$email', no_wa='$no_wa', pembayaran='$pembayaran' where barang_id='$id'");

if ($ubah == true) {

    header("location:tampil-topup.php?pesan=editBerhasil");
} else {
    echo "Error";
}

?>