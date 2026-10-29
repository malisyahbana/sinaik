<?php
include_once "../header.php";
?>
<?php
$uMr = $_SESSION['uMr'];
if ($uMr > 56) {
    echo "<script>alert('Umur anda Mencapai Masa Pensiun, Segera Ajukan Pensiun');</script>";
    // echo "<meta http-equiv='refresh' content='0; url=../dashboard/index.php'>";
}
?>
<div class="row gutter">
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <div class="panel panel-blue">
            <div class="panel-heading">
                <h2><b>
                        <center>SISTEM INFORMASI MENAJEMEN DATA KENAIKAN PANGKAT DAN PENSIUN PEGAWAI DI DINAS PENDIDIKAN <br> KABUPATEN HULU SUNGAI SELATAN</center>
                    </b>
                    <div class="panel-body">
                        <center><img src="../../assets/img/logo-hss.png" width="200" height="300"></center>
                    </div>
                    <h4 align="center"><b>Jl. Melati No.17, Kandangan, Kec. Kandangan, Kab. Hulu Sungai Selatan, Prov. Kalimantan Selatan, 71212 <br>Telp : (0517)22703 , Fax : 21081, Email : diknas.kabhss@gmail.com </b></h4>
                    <!-- </div> -->

                    <!-- <div class="panel-body">
                <center><img src="../../img/dashboard/DASHBOAR 1.jpg" width="1000" height="600"></center>
            </div> -->
                    <!-- <h4 align="center"><b>Jl.Adhyaksa No.2 Kayu Tangi Banjarmasin 70123. Telp/Facs (0511) 3304852. www.uniska-bjm.ac.id</b></h4> -->
                    <!-- </div> -->
            </div>
        </div>
        <?php
        include_once "../footer.php";
        ?>