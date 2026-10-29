<?php
include_once "../../header.php";

?>
<div class="top-bar clearfix">
	<div class="row gutter">
		<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
			<div class="page-title">
				<h3>Data Users</h3>
				<!-- <p>Small description about databars / <a href="tables.html">Tables</a> / <a href="index.html">Home</a></p> -->
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
					<a href="data.php" class="btn btn-danger"><i class="icon-reply"></i> Kembali</a>
				</li>
			</ul>
		</div>
	</div>
</div>

<!-- konten -->
<div class="row gutter">
	<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
		<div class="panel panel-blue">
			<div class="panel-heading">
				<!-- <h4>Responsive Table</h4> -->
			</div>
			<div class="panel-body">
				<form id="menuForm" method="post" action="proses.php">
					<!-- <?php
							$carikode = mysqli_query($link, "SELECT max(noId) FROM menu") or die(mysql_error());
							$datakode = mysqli_fetch_array($carikode);
							if ($datakode) {
								$nilaikode = substr($datakode[0], 1);
								$kode = (int)$nilaikode;

								$kode = $kode + 1;
							} else {
								$kodeotomatis = "R0001";
							}
							?> -->
					<div class="form-group">
						<div class="row gutter">
							<div class="col-md-12">
								<label class="control-label">No ID</label>
								<input type="text" class="form-control" name="noId" id="noId" required="" />
							</div>
						</div>
					</div>
					<div class="form-group">
						<div class="row gutter">
							<div class="col-md-12">
								<label class="control-label">Nama Menu</label>
								<input type="text" class="form-control" id="namaMenu" name="namaMenu" required="" />
							</div>
						</div>
					</div>
					<div class="form-group">
						<div class="row gutter">
							<div class="col-md-12">
								<label class="control-label">Link</label>
								<input type="text" class="form-control" id="link" name="link" />
							</div>
						</div>
					</div>
					<div class="form-group">
						<div class="row gutter">
							<div class="col-md-12">
								<label class="control-label">Icon</label>
								<input type="text" class="form-control" name="icon" id="icon" />
							</div>
						</div>
					</div>
					<div class="form-group">
						<div class="row gutter">
							<div class="col-md-12">
								<label class="control-label">Sub Menu Dari</label>
								<Select class="form-control" name="isMainMenu">
									<option value="0">Main Menu</option>
									<?php
									$result = mysqli_query($link, "SELECT * FROM menu");
									while ($data = mysqli_fetch_assoc($result)) :
									?>
										<option value="<?= $data['noId'] ?>"><?= $data['menu'] ?></option>
									<?php endwhile ?>
								</Select>
							</div>
						</div>
					</div>
					<div class="form-group">
						<div class="row gutter">
							<div class="col-md-12">
								<label class="control-label">Role</label>
								<input type="text" class="form-control" name="role" id="role" />
							</div>
						</div>
					</div>
					<div class="form-group no-margin">
						<div class="row gutter">
							<div class="col-md-12">
								<button type="submit" name="add" class="btn btn-warning">Simpan</button>
							</div>
						</div>
					</div>
				</form>
			</div>
		</div>
	</div>
</div>
<script type="text/javascript">

</script>
<?php
include_once "../../footer.php";

?>