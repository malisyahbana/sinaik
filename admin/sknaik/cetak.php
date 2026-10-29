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
$query = "SELECT * FROM tnaik LEFT JOIN tpegawai ON tnaik.idPeg=tpegawai.idPeg LEFT JOIN tgolongan ON tgolongan.idGol = tpegawai.idGol LEFT JOIN tjabatan ON tjabatan.idJab = tpegawai.idJab WHERE tnaik.idNaik = '$id' ";
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
            SURAT KEPUTUSAN kENAIKAN PANGKAT<br>
            NOMOR :<?= $row['noSk'] ?><br>
        </center>
    </h4>
    <p align="justify"><b>
            <font size="3">Perihal : Kenaikan Pangkat Pegawai</font> <br>
            <br>
            <font size="3">
                Setelah melakukan beberapa evaluasi terhadap kinerja dan kelengkapan berkas pegawai, <br>
                terhitung mulai tanggal <?= $row['tglNaik'] ?> pada Dinas Pendidikan dan Kebudayaan Kabupaten Hulu <br>
                Sungai Selatan dengan ini memutuskan : <br><br>
            </font>
            <font size="3">NIP : <?= $row['nIp'] ?></font> <br>
            <br>
            <font size="3">Nama Pegawai : <?= $row['nAma'] ?></font> <br><br>
            <font size="3">
                Secara resmi menaikan Golongan / Jabatannya menjadi <?= $row['tKt'] ?> - <?= $row['sBt'] ?> / <?= $row['jaB'] ?>,<br>
                Bagian <?= $row['bAg'] ?>, Dengan ketentuan sebagai berikut : <br> <br>
            </font>
            <font size="3">1. Surat Keputusan ini Berlaku tertanggal <?= $row['tglNaik'] ?></font> <br>
            <font size="3">2. Dengan Gaji Sebesar Rp. <?= $row['Gaji'] ?></font> <br><br>
            <font size="3">
                Dengan Surat Keputusan ini dibuat, bilamana pada kemudian hari ditemukan kesalahan <br>
                dengan penerbitan surat keputusan ini, maka Dinas Pendidikan dan Kebudayaan akan melakukan <br>
                penyesuaian ulang sebagaimana mestinya, Atas perhatikan dan kerjasama kami sampaikan<br>
                terima kasih.<br>
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
        <font size="2">Kepala Dinas Pendidikan</font> <br>
    </div>


</body>

</html>