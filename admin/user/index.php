<?php
include_once "../header.php";

?>
<!-- Judul Halaman -->
<div class="top-bar clearfix">
    <div class="row gutter">
        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
            <div class="page-title">
                <h3>Data Akun Pegawai</h3>
                <p>Data Akun / <a href="#">Akun</a> / <a href="<?= base_url() ?>/admin/dashboard/index.php">Home</a></p>
            </div>
        </div>
        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
            <ul class="right-stats" id="mini-nav-right">
                <li>
                    <a href="#" onclick="myFunction()" class="btn btn-info"><span><i class="icon-download5"></i></span>Cetak Data</a>
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
$query = "SELECT * FROM tpegawai WHERE NOT nAma = 'Administrator' ORDER BY idPeg ASC";
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
                                <th>Nama Pegawai</th>
                                <th>Username</th>
                                <th>Password</th>
                                <th>Level</th>
                                <th>Status</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php while ($row = mysqli_fetch_array($result)) : ?>
                                <tr>
                                    <td><?php echo $no++; ?></td>
                                    <td><?= $row['nAma']; ?></td>
                                    <td><?= $row['uSr']; ?></td>
                                    <td><?= $row['pAss']; ?></td>
                                    <td><?= $row['lVl']; ?></td>
                                    <td><?= $row['sTs']; ?></td>
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
        window.open("luser.php");
    }
</script>

<?php
include_once "../footer.php";
?>