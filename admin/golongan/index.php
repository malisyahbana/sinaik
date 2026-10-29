<?php
include_once "../header.php";

?>
<!-- Judul Halaman -->
<div class="top-bar clearfix">
    <div class="row gutter">
        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
            <div class="page-title">
                <h3>Data Golongan Pankat</h3>
                <p>Data Golongan / <a href="#">Golongan</a> / <a href="<?= base_url() ?>/admin/dashboard/index.php">Home</a></p>
            </div>
        </div>
        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
            <ul class="right-stats" id="mini-nav-right">
                <li>
                    <a href="#" onclick="myFunction()" class="btn btn-info"><span><i class="icon-download5"></i></span>Cetak Daftar Golongan</a>
                </li>
                <li>
                    <a href="add.php" class="btn btn-success"><i class="icon-add-user"></i> Tambah</a>
                </li>
            </ul>
        </div>
    </div>
</div>
<!-- Top Bar Ends -->



<?php
$no = '1';
$query = "SELECT * FROM tgolongan ORDER BY idGol ASC";
$result = mysqli_query($link, $query);
?>
<!-- Row Konten -->
<div class="row gutter">
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <div class="panel panel-blue">
            <div class="panel-heading">
            </div>
            <div class="panel-body">
                <div class="table-responsive">
                    <table id="responsiveTable" class="table table-striped table-bordered no-margin" cellspacing="0" width="100%">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Tingkat</th>
                                <th>Sebutan</th>
                                <th>Gajih</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php while ($row = mysqli_fetch_array($result)) : ?>
                                <tr>
                                    <td><?php echo $no++; ?></td>
                                    <td><?= $row['tKt']; ?></td>
                                    <td><?= $row['sBt']; ?></td>
                                    <td><?= $row['Gaji']; ?></td>
                                    <td>
                                        <center>
                                            <div class="btn-group">
                                                <button data-toggle="dropdown" class="btn btn-default dropdown-toggle" type="button" aria-expanded="true"><span class="circless animate"></span>Default <span class="caret"></span></button>
                                                <ul role="menu" class="dropdown-menu">
                                                    <li><a href="update.php?id=<?php echo $row[0]; ?>">Edit</a></li>
                                                    <li><a href="delete.php?id=<?php echo $row[0]; ?>">Delete</a></li>
                                                </ul>
                                            </div>
                                        </center>
                                    </td>
                                </tr>
                            <?php endwhile; ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Row Ends -->

<script>
    function myFunction() {
        window.open("lgolongan.php");
    }
</script>

<?php
include_once "../footer.php";
?>