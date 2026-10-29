</div>
<!-- Container fluid ends -->

</div>
<!-- Dashboard Wrapper End -->

<!-- Footer Start -->
<footer>
    Copyright Luna Techno <span>2019</span>
</footer>
<!-- Footer end -->

<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="<?= base_url() ?>/assets/js/jquery.js"></script>

<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="<?= base_url() ?>/assets/js/bootstrap.min.js"></script>

<!-- jquery ScrollUp JS -->
<script src="<?= base_url() ?>/assets/js/scrollup/jquery.scrollUp.js"></script>

<!-- Sparkline Graphs -->
<script src="<?= base_url() ?>/assets/js/sparkline/sparkline.js"></script>
<script src="<?= base_url() ?>/assets/js/sparkline/custom-sparkline.js"></script>

<!-- DataBars JS -->
<!-- <script src="<?= base_url() ?>/assets/js/databars/jquery.databar.js"></script>
		<script src="<?= base_url() ?>/assets/js/databars/custom-databars.js"></script> -->

<!-- Data Tables -->
<script src="<?= base_url() ?>/assets/js/datatables/dataTables.min.js"></script>
<script src="<?= base_url() ?>/assets/js/datatables/dataTables.bootstrap.min.js"></script>
<script src="<?= base_url() ?>/assets/js/datatables/autoFill.min.js"></script>
<script src="<?= base_url() ?>/assets/js/datatables/autoFill.bootstrap.min.js"></script>
<script src="<?= base_url() ?>/assets/js/datatables/fixedHeader.min.js"></script>
<script src="<?= base_url() ?>/assets/js/datatables/custom-datatables.js"></script>

<!-- BS Validator JS -->
<script src="<?= base_url() ?>/assets/js/bsvalidator/bootstrapValidator.js"></script>
<script src="<?= base_url() ?>/assets/js/bsvalidator/custom-validations.js"></script>
<script src="<?= base_url() ?>/assets/js/alertify/alertify.js"></script>
<script src="<?= base_url() ?>/assets/js/alertify/alert.js"></script>
<!-- Custom JS -->
<script src="<?= base_url() ?>/assets/js/custom.js"></script>
<script src="<?= base_url() ?>/assets/js/jquery-ui.min.js"></script>

<script src="<?= base_url() ?>/assets/js/Chart.bundle.js"></script>
<script src="<?= base_url() ?>/assets/js/utils.js"></script>


<script>
		var MONTHS = ['Januari', 'Februari', 'Maret', 'April', 'Mei', 'Juni', 'Juli', 'Agustus', 'September', 'Oktober', 'November', 'Desember'];
		var config = {
			type: 'bar',
			data: {
				labels: ['Januari', 'Februari', 'Maret', 'April', 'Mei', 'Juni', 'Juli', 'Agustus', 'September', 'Oktober', 'November', 'Desember'],
				datasets: [{
					label: 'Wisatawan Lokal',
					backgroundColor: window.chartColors.red,
					borderColor: window.chartColors.red,
					data: [

					<?php 
					include 'config/apil.php';
					$tahun = date('Y');
					$jumlah_ruang1 = mysqli_query($link,"select * from admin where status='Wisatawan Lokal' and month(tanggal)='01' and year(tanggal)='$tahun'");
					echo mysqli_num_rows($jumlah_ruang1);
					?>,

					<?php 
					$jumlah_ruang2 = mysqli_query($link,"select * from admin where status='Wisatawan Lokal' and month(tanggal)='02' and year(tanggal)='$tahun'");
					echo mysqli_num_rows($jumlah_ruang2);
					?>,

					<?php 
					$jumlah_ruang2 = mysqli_query($link,"select * from admin where status='Wisatawan Lokal' and month(tanggal)='03' and year(tanggal)='$tahun'");
					echo mysqli_num_rows($jumlah_ruang2);
					?>,

					<?php 
					$jumlah_ruang2 = mysqli_query($link,"select * from admin where status='Wisatawan Lokal' and month(tanggal)='04' and year(tanggal)='$tahun'");
					echo mysqli_num_rows($jumlah_ruang2);
					?>,

					<?php 
					$jumlah_ruang2 = mysqli_query($link,"select * from admin where status='Wisatawan Lokal' and month(tanggal)='05' and year(tanggal)='$tahun'");
					echo mysqli_num_rows($jumlah_ruang2);
					?>,

					<?php 
					$jumlah_ruang2 = mysqli_query($link,"select * from admin where status='Wisatawan Lokal' and month(tanggal)='06' and year(tanggal)='$tahun'");
					echo mysqli_num_rows($jumlah_ruang2);
					?>,

					<?php 
					$jumlah_ruang2 = mysqli_query($link,"select * from admin where status='Wisatawan Lokal' and month(tanggal)='07' and year(tanggal)='$tahun'");
					echo mysqli_num_rows($jumlah_ruang2);
					?>,

					<?php 
					$jumlah_ruang2 = mysqli_query($link,"select * from admin where status='Wisatawan Lokal' and month(tanggal)='08' and year(tanggal)='$tahun'");
					echo mysqli_num_rows($jumlah_ruang2);
					?>,

					<?php 
					$jumlah_ruang2 = mysqli_query($link,"select * from admin where status='Wisatawan Lokal' and month(tanggal)='09' and year(tanggal)='$tahun'");
					echo mysqli_num_rows($jumlah_ruang2);
					?>,

					<?php 
					$jumlah_ruang2 = mysqli_query($link,"select * from admin where status='Wisatawan Lokal' and month(tanggal)='10' and year(tanggal)='$tahun'");
					echo mysqli_num_rows($jumlah_ruang2);
					?>,

					<?php 
					$jumlah_ruang2 = mysqli_query($link,"select * from admin where status='Wisatawan Lokal' and month(tanggal)='11' and year(tanggal)='$tahun'");
					echo mysqli_num_rows($jumlah_ruang2);
					?>,

					<?php 
					$jumlah_ruang2 = mysqli_query($link,"select * from admin where status='Wisatawan Lokal' and month(tanggal)='12' and year(tanggal)='$tahun'");
					echo mysqli_num_rows($jumlah_ruang2);
					?>,


					],
					fill: false,
				}, 
				{
					label: 'Wisatawan Luar Daerah',
					backgroundColor: window.chartColors.green,
					borderColor: window.chartColors.green,
					data: [

					<?php 
					include 'config/apil.php';
					$tahun = date('Y');
					$jumlah_ruang1 = mysqli_query($link,"select * from admin where status='Wisatawan Luar' and month(tanggal)='01' and year(tanggal)='$tahun'");
					echo mysqli_num_rows($jumlah_ruang1);
					?>,

					<?php 
					$jumlah_ruang2 = mysqli_query($link,"select * from admin where status='Wisatawan Luar' and month(tanggal)='02' and year(tanggal)='$tahun'");
					echo mysqli_num_rows($jumlah_ruang2);
					?>,

					<?php 
					$jumlah_ruang2 = mysqli_query($link,"select * from admin where status='Wisatawan Luar' and month(tanggal)='03' and year(tanggal)='$tahun'");
					echo mysqli_num_rows($jumlah_ruang2);
					?>,

					<?php 
					$jumlah_ruang2 = mysqli_query($link,"select * from admin where status='Wisatawan Luar' and month(tanggal)='04' and year(tanggal)='$tahun'");
					echo mysqli_num_rows($jumlah_ruang2);
					?>,

					<?php 
					$jumlah_ruang2 = mysqli_query($link,"select * from admin where status='Wisatawan Luar' and month(tanggal)='05' and year(tanggal)='$tahun'");
					echo mysqli_num_rows($jumlah_ruang2);
					?>,

					<?php 
					$jumlah_ruang2 = mysqli_query($link,"select * from admin where status='Wisatawan Luar' and month(tanggal)='06' and year(tanggal)='$tahun'");
					echo mysqli_num_rows($jumlah_ruang2);
					?>,

					<?php 
					$jumlah_ruang2 = mysqli_query($link,"select * from admin where status='Wisatawan Luar' and month(tanggal)='07' and year(tanggal)='$tahun'");
					echo mysqli_num_rows($jumlah_ruang2);
					?>,

					<?php 
					$jumlah_ruang2 = mysqli_query($link,"select * from admin where status='Wisatawan Luar' and month(tanggal)='08' and year(tanggal)='$tahun'");
					echo mysqli_num_rows($jumlah_ruang2);
					?>,

					<?php 
					$jumlah_ruang2 = mysqli_query($link,"select * from admin where status='Wisatawan Luar' and month(tanggal)='09' and year(tanggal)='$tahun'");
					echo mysqli_num_rows($jumlah_ruang2);
					?>,

					<?php 
					$jumlah_ruang2 = mysqli_query($link,"select * from admin where status='Wisatawan Luar' and month(tanggal)='10' and year(tanggal)='$tahun'");
					echo mysqli_num_rows($jumlah_ruang2);
					?>,

					<?php 
					$jumlah_ruang2 = mysqli_query($link,"select * from admin where status='Wisatawan Luar' and month(tanggal)='11' and year(tanggal)='$tahun'");
					echo mysqli_num_rows($jumlah_ruang2);
					?>,

					<?php 
					$jumlah_ruang2 = mysqli_query($link,"select * from admin where status='Wisatawan Luar' and month(tanggal)='12' and year(tanggal)='$tahun'");
					echo mysqli_num_rows($jumlah_ruang2);
					?>,

					],
					fill: false,
				}, 

				]
			},
			options: {
				responsive: true,
				title: {
					display: true,
					text: 'Grafik Pengunjung Yang Terdaftar Pada Aplikasi Pada Tahun <?php echo $tahun; ?>'
				},
				tooltips: {
					mode: 'index',
					intersect: false,
				},
				hover: {
					mode: 'nearest',
					intersect: true
				},
				scales: {
					xAxes: [{
						display: true,
						scaleLabel: {
							display: true,
							labelString: 'Bulan'
						}
					}],
					yAxes: [{
						display: true,
						scaleLabel: {
							display: true,
							labelString: 'Angka'
						}
					}]
				}
			}
		};

		window.onload = function() {
			var ctx = document.getElementById('canvas').getContext('2d');
			window.myLine = new Chart(ctx, config);
		};
	</script>
</body>

</html>