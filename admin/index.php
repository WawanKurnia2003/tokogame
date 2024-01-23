<?php
session_start();
if (empty($_SESSION['user_id'])) {
	header("location:../login.php");
}
?>
<?php include "header.php"; ?>
<div class="container-fluid">
	<div class="row">
		<div class="col-md-12">
			<div class="jumbotron">
				<h2>SELAMAT DATANG (
					<?php echo $_SESSION['username']; ?> )
				</h2>
				<p> anda bisa melihat dan mengatur database di website ini </p>
				<p><a class="btn btn-warning btn-lg" href="tampil-topup.php" role="button">Pesanan Topup</a>
					<a class="btn btn-danger btn-lg" href="tampil-barang.php" role="button">Pesanan Barang</a>
				</p>
			</div>
		</div>
	</div>
</div><!-- Akhir Jumbotron -->
<?php include "footer.php"; ?>