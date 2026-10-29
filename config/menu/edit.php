<?php
include_once "../../header.php";

?>
<div class="top-bar clearfix">
	<div class="row gutter">
		<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
			<div class="page-title">
				<h3>Data Menu</h3>
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
<?php
$id = $_GET['id'];
$row = mysqli_fetch_array(mysqli_query($link, "SELECT * FROM menu WHERE noId = '$id'"));
?>
<!-- konten -->
<div class="row gutter">
	<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
		<div class="panel panel-blue">
			<div class="panel-heading">
				<!-- <h4>Responsive Table</h4> -->
			</div>
			<div class="panel-body">
                <form id="menuForm" method="post" action="proses.php">
					<div class="form-group">
						<div class="row gutter">
							<div class="col-md-12">
								<label class="control-label">No ID</label>
								<input type="text" value="<?= $row['0'] ?>" class="form-control"  name="noId" id="noId" />
							</div>
						</div>
					</div>
					<div class="form-group">
						<div class="row gutter">
							<div class="col-md-12">
								<label class="control-label">Nama Menu</label>
								<input type="text" value="<?= $row['1'] ?>" class="form-control"  id="namaMenu" name="namaMenu" />
							</div>
						</div>
					</div>
					<div class="form-group">
						<div class="row gutter">
							<div class="col-md-12">
								<label class="control-label">Link</label>
								<input type="text" value="<?= $row['2'] ?>" class="form-control" id="link" name="link" />
							</div>
						</div>
					</div>
					<div class="form-group">
						<div class="row gutter">
							<div class="col-md-12">
								<label class="control-label">Icon</label>
								<input type="text" value="<?= $row['3'] ?>" class="form-control" name="icon" id="icon"/>
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
                                        if ($data['noId'] == $row['isMainMenu']) { ?>
                                            <option value="<?= $data['noId'] ?>" selected="<?= $data['noId'] ?>"><?= $data['menu'] ?></option>
                                    <?php 
                                } else { ?>
                                    <option value="<?= $data['noId'] ?>"><?= $data['menu'] ?></option>
                                <?php

                            }
                            endwhile; ?>
                                </Select>
							</div>
						</div>
					</div>
					<div class="form-group no-margin">
						<div class="row gutter">
							<div class="col-md-12">
								<button type="submit" name="edit" class="btn btn-warning">Simpan</button>
							</div>
						</div>
					</div>
				</form>
            </div>
        </div>
    </div>
</div>

<?php
include_once "../../footer.php";

?>