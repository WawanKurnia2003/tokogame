<?php

include "koneksi.php";

$game = $koneksi->real_escape_string($_POST['game']);
$id_player = $koneksi->real_escape_string($_POST['id_player']);
$nickname = $koneksi->real_escape_string($_POST['nickname']);
$topup = $koneksi->real_escape_string($_POST['topup']);
$email = $koneksi->real_escape_string($_POST['email']);
$no_wa = $koneksi->real_escape_string($_POST['no_wa']);
$pembayaran = $koneksi->real_escape_string($_POST['pembayaran']);


$simpan = $koneksi->query("insert into pesanan_topup(game,id_player,nickname,topup,email,no_wa,pembayaran) 
                        values ('$game', '$id_player', '$nickname', '$topup', '$email', '$no_wa', '$pembayaran')");

if ($simpan == true) {

    header("location:tampil-pesan.php?pesan=inputBerhasil");
} else {
    echo "Error";
}

?>