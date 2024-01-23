<?php
session_start();
if (empty($_SESSION['user_id'])) {
    header("location:../login.php");
}
?>
<?php
$id = $_POST['barang_id'];
$game = $_POST['game'];
$id_player = $_POST['id_player'];
$nickname = $_POST['nickname'];
$email = $_POST['email'];
$topup = $_POST['topup'];
$no_wa = $_POST['no_wa'];
$pembayaran = $_POST['pembayaran'];
include "../koneksi.php";

$simpan = $koneksi->query("insert into pesanan_topup(barang_id,game,id_player,nickname,topup,email,no_wa,pembayaran) 
                        values ('$barang_id','$game','$id_player','$nickname', '$topup', '$email', '$no_wa', '$pembayaran')");

if ($simpan == true) {

    header("location:tampil-topup.php?pesan=inputBerhasil");
} else {
    echo "Error";
}




?>