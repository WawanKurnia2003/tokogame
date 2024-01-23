<?php
session_start();
if (empty($_SESSION['user_id'])) {
    header("location:../login.php");
}
?>
<?php include "header.php"; ?>
<br>
<br>
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <form action="proses-input-barang.php" method="POST">
                <div class="form-group">
                    <label for="nama">NAMA</label>
                    <input type="text" name="nama" class="form-control">
                </div>
                <div class="form-group">
                    <label for="nama_barang">NAMA BARANG</label>
                    <input type="text" name="nama_barang" class="form-control">
                </div>
                <div class="form-group">
                    <label for="alamat">Alamat</label>
                    <textarea name="alamat" class="form-control"></textarea>
                </div>
                <div class="form-group">
                    <label for="email">EMAIL</label>
                    <input type="gmail" name=email class="form-control">
                </div>
                <div class="form-group">
                    <label for="no_wa">NO WHATSAPP</label>
                    <input type="number" name=no_wa class=" form-control">
                </div>
                <div class="form-group">
                    <label for="pembayaran">PEMBAYARAN</label>
                    <select name="pembayaran" class="form-control">
                        <option value="COD">COD</option>
                        <option value="TRANSFER">TRANSFER</option>
                    </select>
                </div>

                <input type="submit" name="kirim" value="SIMPAN" class="btn btn-info">
                <input type="reset" name="kosongkan" value="Kosongkan" class="btn btn-danger">
            </form>
        </div>
    </div>
</div>
<?php include "footer.php"; ?>