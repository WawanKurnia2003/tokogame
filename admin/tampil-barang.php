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
            <h1>Data Mahasiswa</h1>
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

            <table class="table table-bordered table-hover" id="data-table">
                <thead>
                    <tr>
                        <th>ID BARANG</th>
                        <th>NAMA</th>
                        <th>NAMA BARANG</th>
                        <th>ALAMAT</th>
                        <th>EMAIL</th>
                        <th>NO WHATSAPP</th>
                        <th>PEMBAYARAN</th>
                        <th>
                            <a href="input-barang.php">
                                <button class="btn btn-info glyphicon glyphicon-plus"></button>
                            </a>
                        </th>
                    </tr>
                </thead>
                <tbody>
                    <?php

                    include "../koneksi.php";
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
                            <td>

                                <a href="edit-barang.php?id=<?php echo $row['id_barang'] ?>">
                                    <button class="btn btn-xs btn-danger glyphicon glyphicon-edit"></button>
                                </a>

                                <a href="hapus-barang.php?id=<?php echo $row['id_barang'] ?>"
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