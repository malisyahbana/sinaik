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

    <h3>
        <center>
            LAPORAN PENGAJUAN KENAIKAN PANGKAT <br>
        </center>
    </h3>
    <?php
    $no = '1';
    $query = "SELECT tpengajuan.idPeng, tpegawai.nIp, tpegawai.idPeg, tpegawai.nAma, og.tKt AS tKt1,og.sBt AS sBt1, oj.jaB AS jaB1, ig.tKt AS tKt2, ig.sBt AS sBt2, ij.jaB AS jaB2, tpengajuan.tglP, tpengajuan.cTt, tpengajuan.sT FROM tpengajuan JOIN tpegawai ON tpengajuan.idPeg = tpegawai.idPeg JOIN tgolongan AS og ON og.idGol=tpengajuan.outGol JOIN tgolongan AS ig ON ig.idGol=tpengajuan.inGol JOIN tjabatan AS oj ON tpengajuan.outJab=oj.idJab JOIN tjabatan AS ij ON tpengajuan.inJab=ij.idJab";
    $result = mysqli_query($link, $query);
    ?>
    <div class="row">
        <div class="col-sm-12">
            <div class="card-box table-responsive">
                <table border="1" cellspacing="0" width="100%">
                    <thead>
                        <tr>
                            <th style="text-align: center; font-size: 18px;" rowspan="2">No</th>
                            <th style="text-align: center; font-size: 18px;" rowspan="2">NIP Pegawai</th>
                            <th style="text-align: center; font-size: 18px;" rowspan="2">Nama Pegawai </th>
                            <th style="text-align: center; font-size: 18px;" colspan="2">Golongan Awal</th>
                            <th style="text-align: center; font-size: 18px;" rowspan="2">Jabatan Awal</th>
                            <th style="text-align: center; font-size: 18px;" colspan="2">Golongan Diajukan</th>
                            <th style="text-align: center; font-size: 18px;" rowspan="2">Jabatan Diajukan</th>
                            <th style="text-align: center; font-size: 18px;" rowspan="2">Tanggal Pengajuan</th>
                            <th style="text-align: center; font-size: 18px;" rowspan="2">Status</th>
                            <th style="text-align: center; font-size: 18px;" rowspan="2">Keterangan</th>
                        </tr>
                        <tr>
                            <th style="text-align: center; font-size: 18px;">Golongan</th>
                            <th style="text-align: center; font-size: 18px;">Formasi</th>
                            <th style="text-align: center; font-size: 18px;">Golongan</th>
                            <th style="text-align: center; font-size: 18px;">Formasi</th>
                        </tr>
                    </thead>

                    <tbody>
                        <?php while ($tampil = mysqli_fetch_array($result)) { ?>
                            <tr>
                                <td align="center"><?= $no++ ?></td>
                                <td align="center"><?= $tampil['nIp'] ?></td>
                                <td align="center"><?= $tampil['nAma'] ?></td>
                                <td align="center"><?= $tampil['tKt1'] ?></td>
                                <td align="center"><?= $tampil['sBt1'] ?></td>
                                <td align="center"><?= $tampil['jaB1'] ?></td>
                                <td align="center"><?= $tampil['tKt2'] ?></td>
                                <td align="center"><?= $tampil['sBt2'] ?></td>
                                <td align="center"><?= $tampil['jaB2'] ?></td>
                                <td align="center"><?= $tampil['tglP'] ?></td>
                                <td align="center"><?= $tampil['sT'] ?></td>
                                <td align="center"><?= $tampil['cTt'] ?></td>
                            </tr>
                        <?php } ?>
                    </tbody>

                </table>

            </div>
        </div>
    </div>
    <br>
    <br>


    <br>
    <?php
    $sql = "SELECT * FROM ttd  ";
    $result = mysqli_query($link, $sql);
    $ttd = mysqli_fetch_array($result);
    ?>
    <div style="text-align: center; display: inline-block; float: Right;">
        <font size="2">Kandangan, <?= $waktu; ?> </font> <br>
        <font size="2">Dinas Pendidikan </font> <br>
        <font size="2">Kabupaten Hulu Sungai Selatan</font> <br>
        <center>
            <div><img src="<?= base_url(); ?>/img/<?= $ttd['ttd'] ?>" width="70" heigth="70"></div>
        </center>
        <font size="2"><?= $ttd['nama'] ?></font> <br>
        <font size="2"><?= $ttd['nip'] ?></font> <br>
    </div>

</body>

</html>