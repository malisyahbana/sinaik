<?php
include_once "../../header.php";

?>
<!-- Judul Halaman -->
<div class="top-bar clearfix">
	<div class="row gutter">
		<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
			<div class="page-title">
				<h3>Data Menu</h3>
				<p>Pengaturan Menu / <a href="#">Menu</a> / <a href="<?= base_url() ?>/admin/index.php">Home</a></p>
			</div>
		</div>
		<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
			<ul class="right-stats" id="mini-nav-right">
				<!-- <li>
					<a href="javascript:void(0)" class="btn btn-danger"><span>76</span>Sales</a>
				</li>
				<li>
					<a href="tasks.html" class="btn btn-info"><span>18</span>Tasks</a>
				</li> -->
				<li>
					<a href="add.php" class="btn btn-success"><i class="icon-download6"></i> Tambah</a>
				</li>
			</ul>
		</div>
	</div>
</div>
<!-- Top Bar Ends -->



<?php
$no = '1';
$query = "SELECT * FROM menu ORDER BY noId ASC";
$result = mysqli_query($link, $query);
?>
<!-- Row Konten -->
<div class="row gutter">
	<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
		<div class="panel panel-blue">
			<div class="panel-heading">
				<!-- <h4>Responsive Table</h4> -->
			</div>
			<div class="panel-body">
				<div class="table-responsive">
					<table id="responsiveTable" class="table table-striped table-bordered no-margin" cellspacing="0" width="100%">
						<thead>
							<tr>
								<th>No</th>
								<th>Menu</th>
								<th>Link</th>
								<th>Icon</th>
								<th>isMainMenu</th>
								<th>Role</th>
								<th>Action</th>
							</tr>
						</thead>
						<tbody>
							<?php while ($row = mysqli_fetch_array($result)) : ?>
								<tr>
									<td><?= $row['0'] ?></td>
									<td><?= $row['1'] ?></td>
									<td><?= $row['2'] ?></td>
									<td><?= $row['3'] ?></td>
									<td><?= $row['4'] ?></td>
									<td><?= $row['5'] ?></td>
									<td align="center">
										<div class="btn-group text-center">
											<a href="edit.php?id=<?= $row['0'] ?>" class="btn btn-info btn-xs"><i class="icon-pencil"></i></a>
											<a href="hapus.php?id=<?= $row['0'] ?>" id="hapus" class="btn btn-danger btn-xs"><i class="icon-trash"></i></a>
										</div>

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

<script type="text/javascript">



</script>

<?php
include_once "../../footer.php";
?>