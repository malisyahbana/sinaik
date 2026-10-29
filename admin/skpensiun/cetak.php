<?php
require '../../config/config.php';
include '../../config/database.php';

// $no = 1;
// if (isset($_POST['cetak'])) {

//    $data = mysqli_query($koneksi, "SELECT * FROM ewisata WHERE jns = 'Wisata' ");
//    $jumlah = mysqli_num_rows($data);
//      }

$waktu = date('d F Y');

$bln = array(
    '01' => 'Januari',
    '02' => 'Februari',
    '03' => 'Maret',
    '04' => 'April',
    '05' => 'Mei',
    '06' => 'Juni',
    '07' => 'Juli',
    '08' => 'Agustus',
    '09' => 'September',
    '10' => 'Oktober',
    '11' => 'November',
    '12' => 'Desember'
);
?>

<script type="text/javascript">
    window.print();
</script>

<!DOCTYPE html>
<html>

<head>
    <title>LAPORAN DATA</title>
</head>

<?php
$id = $_GET['id'];
$query = "SELECT * FROM tpensiun LEFT JOIN tpegawai ON tpensiun.idPeg = tpegawai.idPeg JOIN tgolongan ON tgolongan.idGol = tpegawai.idGol JOIN tjabatan ON tjabatan.idJab = tpegawai.idJab JOIN skpen ON tpensiun.idPen = skpen.idPen  WHERE skpen.idSk = '$id' ";
$result = mysqli_query($link, $query);
$row = mysqli_fetch_array($result);
?>

<body>
    <!-- <img src="<?= base_url() ?>/assets/img/logo-hss.png" align="left" width="75" height="75"> -->
    <!-- <img src="<?= base_url('assets/bukti_kenaikan_jabatan/tut wuri.png') ?>" align="right" width="75" height="75"> -->
    <p align="center"><b>
            <img src="<?= base_url() ?>/assets/img/logo-hss.png" align="left" width="75" height="75">
            <font size="3">PEMERINTAH KAB HULU SUNGAI SELATAN</font> <br>
            <font size="5">DINAS PENDIDIKAN DAN KEBUDAYAAN</font> <br>
            <font size="3">
                Jl. Melati No.17, Kandangan, Kec. Kandangan, Kab. Hulu Sungai Selatan, Prov. Kalimantan Selatan, 71212 <br>
                Telp : (0517)22703 , Fax : 21081, Email : diknas.kabhss@gmail.com
            </font>
            <hr size="4" noshade="">
        </b></p>

    <h4>
        <center>
            SURAT KEPUTUSAN PERSETUJUAN PENSIUN<br>
            NOMOR :<?= $row['noSur'] ?><br>
        </center>
    </h4>
    <p align="justify"><b>
            <font size="3">Perihal : Persetujuan Pensiun Pegawai</font> <br>
            <br>
            <font size="3">
                Bersama ini kami sampaikan Permohonan Masa Persiapan Pensiun dan Berhenti dengan Hormat Sebagai Pegawai Negeri Sipil ata Permintaan Sendiri , <br>
                terhitung mulai tanggal <?= date('d Mm Y', strtotime($row['tglPen'])) ?> pada Dinas Pendidikan dan Kebudayaan Kabupaten Hulu <br>
                Sungai Selatan. <br>
                dengan mendapat Hak Pensiun atas nama : <br><br>
            </font>
            <font size="3">NIP : <?= $row['nIp'] ?></font> <br>
            <br>
            <font size="3">Nama Pegawai : <?= $row['nAma'] ?></font> <br>
            <font size="3">Tempat/Tanggal Lahir : <?= $row['aLt'] ?> / <?= $row['tgLhr'] ?></font> <br>
            <font size="3">Pangkat/Golongan : <?= $row['sBt'] ?> (<?= $row['tKt'] ?>)</font> <br>
            <font size="3">Jabatan Pegawai : <?= $row['jaB'] ?></font> <br>
            <font size="3">Unit Kerja : <?= $row['bAg'] ?></font> <br>
            <font size="3">Alamat Pegawai : <?= $row['aLmt'] ?></font> <br><br>

            <font size="3">
                Pada prinsipnya kami dapat menyetujui usul permohonan Masa Persiapan Pensiun (MPP) <br>
                yang Bersangkutan mulai tanggal <?= date('d Mm Y', strtotime($row['tglPen'])) ?> dengan Masa Kerja Optimal Bekerja <br>
                dan usul pensiun karena telah mencapai Batas Usia Pensiun dengam masa kerja sesuai <br>
                yang berlaku.<br><br>
                Sebagai bahan pertimbangan dan penyelesaian Saudara selanjutnya, Terlampir bahan kelengkapan pensiun bagi yang bersangkutan. <br> <br>
                Demikian disampaikan, atas perhatian dan kerjasamanya diucapkan terimakasih. <br><br>
            </font>
        </b></p>
    <br>
    <br>


    <br>
    <div style="text-align: center; display: inline-block; float: Right;">
        <font size="2">Kandangan, <?= $waktu; ?> </font> <br>
        <font size="2">Dinas Pendidikan </font> <br>
        <font size="2">Kabupaten Hulu Sungai Selatan</font> <br>
        <center>
            <div><img src="<?= base_url(); ?>/img/<?= $row['tTd'] ?>" width="70" heigth="70"></div>
        </center>
        <font size="2"><?= $row['nmKep'] ?></font> <br>
    </div>


</body>

</html>