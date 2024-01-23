<?php include "header.php"; ?>

<form action="tampil-barang.php" method="post">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1>Pesanan Barang</h1>

                <br>
                <table class="table table-bordered table-hover" id="data-table">
                    <thead>
                        <h7>Klik link di samping untuk proses pesanan anda cepat di proses <a
                                href="https://wa.me/6281234567890">
                                &nbsp; click disini</a></h7>
                        <tr>
                            <th>ID BARANG</th>
                            <th>NAMA</th>
                            <th>NAMA BARANG</th>
                            <th>ALAMAT</th>
                            <th>EMAIL</th>
                            <th>NO WHATSAPP</th>
                            <th>PEMBAYARAN</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php

                        include "koneksi.php";
                        $sql = $koneksi->query("select * from pesanan_barang order by id_barang ASC");
                        while ($row = $sql->fetch_assoc()) {
                            ?>

                            <tr>
                                <td>
                                    <?php echo $row['id_barang'] ?>
                                </td>
                                <td>
                                    <?php echo $row['nama'] ?>
                                </td>
                                <td>
                                    <?php echo $row['nama_barang'] ?>
                                </td>
                                <td>
                                    <?php echo $row['alamat'] ?>
                                </td>
                                <td>
                                    <?php echo $row['email'] ?>
                                </td>
                                <td>
                                    <?php echo $row['no_wa'] ?>
                                </td>
                                <td>
                                    <?php echo $row['pembayaran'] ?>
                                </td>
                            </tr>

                            <?php
                        }
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <br>
                <br>
                <h1>Data Topup</h1>

                <br>
                <table class="table table-bordered table-hover" id="data-table">
                    <thead>
                        <tr>
                            <th>ID BARANG</th>
                            <th>NAMA GAME</th>
                            <th>ID PLAYER</th>
                            <th>NICKNAME</th>
                            <th>TOPUP</th>
                            <th>EMAIL</th>
                            <th>NO WHATSAPP</th>
                            <th>PEMBAYARAN</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php

                        include "koneksi.php";
                        $sql = $koneksi->query("select * from pesanan_topup order by barang_id ASC");
                        while ($row = $sql->fetch_assoc()) {
                            ?>

                            <tr>
                                <td>
                                    <?php echo $row['barang_id'] ?>
                                </td>
                                <td>
                                    <?php echo $row['game'] ?>
                                </td>
                                <td>
                                    <?php echo $row['id_player'] ?>
                                </td>
                                <td>
                                    <?php echo $row['nickname'] ?>
                                </td>
                                <td>
                                    <?php echo $row['topup'] ?>
                                </td>
                                <td>
                                    <?php echo $row['email'] ?>
                                </td>
                                <td>
                                    <?php echo $row['no_wa'] ?>
                                </td>
                                <td>
                                    <?php echo $row['pembayaran'] ?>
                                </td>
                            </tr>

                            <?php
                        }
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</form>
<?php include "footer.php"; ?>