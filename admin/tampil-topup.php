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
            <br>
            <br>
            <h1>Data Topup</h1>
            <?php

            if (@$_GET['pesan'] == "inputBerhasil") {

                ?>
                <div class="alert alert-success">
                    Penyimpanan Berhasil!
                </div>
                <?php

            }

            ?>


            <?php

            if (@$_GET['pesan'] == "hapusBerhasil") {

                ?>
                <div class="alert alert-success">
                    Data Berhasil Dihapus!
                </div>
                <?php

            }

            ?>

            <?php

            if (@$_GET['pesan'] == "editBerhasil") {

                ?>
                <div class="alert alert-success">
                    Perubahan Berhasil!
                </div>
                <?php

            }

            ?>

            <br>
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
                        <th>
                            <a href="input-topup.php">
                                <button class="btn btn-info glyphicon glyphicon-plus"></button>
                            </a>
                        </th>
                    </tr>
                </thead>
                <tbody>
                    <?php

                    include "../koneksi.php";
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
                            <td>

                                <a href="edit-topup.php?id=<?php echo $row['barang_id'] ?>">
                                    <button class="btn btn-xs btn-danger glyphicon glyphicon-edit"></button>
                                </a>

                                <a href="hapus-topup.php?id=<?php echo $row['barang_id'] ?>"
                                    onclick=" return confirm('Anda yakin menghapus data?')">
                                    <button class="btn btn-xs btn-warning glyphicon glyphicon-remove"></button>
                                </a>

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


<?php include "footer.php"; ?>