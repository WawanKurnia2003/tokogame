<?php include "header.php"; ?>
<br>
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <form action="proses-pesan-topup.php" method="POST">
                <div class="form-group">
                    <label for="game">NAMA GAME</label>
                    <select name="game" class="form-control">
                        <option value="MOBILE LEGEND">MOBILE LEGEND</option>
                        <option value="FREE FIRE">FREE FIRE</option>
                        <option value="PUBG MOBILE">PUBG MOBILE</option>
                        <option value="ARENA OF VALOR">ARENA OF VALOR</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="id_player">ID PLAYER</label>
                    <input type="text" name="id_player" class="form-control"
                        placeholder="isikan id game dengan server bila ingin top up mobile legend">
                </div>
                <div class="form-group">
                    <label for="nickname">NICKNAME GAME</label>
                    <input type="text" name="nickname" class="form-control">
                </div>
                <div class="form-group">
                    <label for="topup">TOP UP UC/DIAMOND</label>
                    <select name="topup" class="form-control">
                        <option value="70">70</option>
                        <option value="140">140</option>
                        <option value="210">210</option>
                        <option value="280">280</option>
                        <option value="350">350</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="email">EMAIL</label>
                    <input type="gmail" name="email" class="form-control">
                </div>
                <div class="form-group">
                    <label for="no_wa">NO WHATSAPP</label>
                    <input type="number" name="no_wa" class="form-control">
                </div>
                <div class="form-group">
                    <label for="pembayaran">PEMBAYARAN</label>
                    <select name="pembayaran" class="form-control">
                        <option value="DANA">DANA</option>
                        <option value="GOPAY">GOPAY</option>
                        <option value="SHOPEPAY">SHOPEPAY</option>
                        <option value="OVO">OVO</option>
                    </select>
                </div>
                <input type="submit" name="kirim" value="SIMPAN" class="btn btn-info">
                <input type="reset" name="kosongkan" value="Kosongkan" class="btn btn-danger">
            </form>
            <?php include "footer.php"; ?>