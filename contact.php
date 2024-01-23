<?php include "header.php"; ?>

<!-- Awal Page -->
<div class="container">
	<!-- Awal baris -->
	<div class="row">
		<div class="col-md-8"><!-- Awal Kolom Pertama -->
			<div class="panel panel-default">
				<div class="panel-body">
					<h2 style="text-muted"><span class="glyphicon glyphicon-list"></span> Contact</h2>
					<?php

					if (@$_GET['pesan'] == "inputBerhasil") {

						?>
						<div class="alert alert-success">
							Terima kasih, pesan anda sudah terkirim!
						</div>
						<?php

					}

					?>
					<form action="proses-komentar.php" method="post">
						<table class="table table-hover">
							<tr>
								<td>Nama Lengkap
									<input type="text" name="nama" class="form-control input-md"
										placeholder="Isikan nama anda dengan lengkap" required>
								</td>
							</tr>
							<tr>
								<td>Alamat Email
									<input type="email" name="email" class="form-control input-md"
										placeholder="Isikan alamat email yang masih aktif" required>
								</td>
							</tr>
							<tr>
								<td>Pesan
									<textarea name="pesan" class="form-control input-md" required> </textarea>
								</td>
							</tr>
							<tr>
								<td>
									<input type="submit" value="Kirim" class="btn btn-lg btn-info"> <input type="reset"
										value="Batal" class="btn btn-lg btn-warning">
								</td>
							</tr>
						</table>
					</form>
				</div>
			</div>
		</div><!-- Akhir Kolom Pertama -->
		<br>
		<footer>
			<footer class="p-5">
				<div class="col">
					<div class="col-md-4">
						<h5>LAYANAN PELANGGAN</h5>
						<ul>
							<li>Pusat Bantuan</li>
							<li>Cara Pembelian</li>
							<li>Pengiriman</li>
							<li>Cara Pengembalian</li>
						</ul>
					</div>


					</ul>
				</div>
				<div class="col-md-4">
					<h5>HUBUNGI KAMI</h5>
					<ul>
						<li>0822 4664 4511</li>
						<li>KURNIAWAN</li>
						<li>HUSINFADILAH@gmail.com</li>
						<li>
							<h7>HUBUNGI ADMIN<a href="https://wa.me/6281234567890">
									&nbsp; click disini</a></h7>
						</li>
					</ul>
				</div>
	</div>
	</footer>

</div><!-- Akhir Baris -->
</div><!--  Akhir Page -->

<?php include "footer.php"; ?>