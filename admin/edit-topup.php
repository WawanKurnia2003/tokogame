<?php
session_start();
if (empty($_SESSION['user_id'])) {
    header("location:../login.php");
}
?>
<?php include "header.php"; ?>
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <form action="proses-edit-topup.php" method="POST">
                <?php
                $id = $_GET['id'];
                include "../koneksi.php";
                $tampil = $koneksi->query("select * from pesanan_topup where barang_id='$id'");
                $row = $tampil->fetch_assoc();
                ?>
                <div class="form-group">
                    <label for="game">NAMA GAME</label>
                    <select name="game" class="form-control">
                        <option value="<?php echo $row['game'] ?>" selected>
                            <?php echo $row['game'] ?>
                        </option>
                        <option value="MOBILE LEGEND">MOBILE LEGEND</option>
                        <option value="FREE FIRE">FREE FIRE</option>
                        <option value="PUBG MOBILE">PUBG MOBILE</option>
                        <option value="ARENA OF VALOR">ARENA OF VALOR</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="id_player">ID PLAYER</label>
                    <input type="text" name="id_player" value="<?php echo $row['id_player'] ?>" class="form-control">
                </div>
                <div class="form-group">
                    <label for="nickname">NICKNAME GAME</label>
                    <input type="text" name="nickname" value="<?php echo $row['nickname'] ?>" class="form-control">
                </div>
                <div class="form-group">
                    <label for="topup">TOP UP UC/DIAMOND</label>
                    <select name="topup" class="form-control">
                        <option value="<?php echo $row['topup'] ?>" selected>
                            <?php echo $row['topup'] ?>
                        </option>
                        <option value="70">70</option>
                        <option value="140">140</option>
                        <option value="210">210</option>
                        <option value="280">280</option>
                        <option value="350">350</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="email">EMAIL</label>
                    <input type="gmail" name="email" value="<?php echo $row['email'] ?>" class="form-control">
                </div>
                <div class="form-group">
                    <label for="no_wa">NO WHATSAPP</label>
                    <input type="number" name="no_wa" value="<?php echo $row['no_wa'] ?>" class="form-control">
                </div>
                <div class="form-group">
                    <label for="pembayaran">PEMBAYARAN</label>
                    <select name="pembayaran" class="form-control">
                        <option value="<?php echo $row['pembayaran'] ?>" selected>
                            <?php echo $row['pembayaran'] ?>
                        </option>
                        <option value="DANA">DANA</option>
                        <option value="GOPAY">GOPAY</option>
                        <option value="SHOPEPAY">SHOPEPAY</option>
                        <option value="OVO">OVO</option>
                    </select>
                </div>

                <input type="submit" name="kirim" value="UBAH" class="btn btn-info">
                <input type="reset" name="kosongkan" value="Kosongkan" class="btn btn-danger">
            </form>
        </div>
    </div>
</div>

<?php include "footer.php"; ?>