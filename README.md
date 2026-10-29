# SINAIK - Sistem Informasi Kenaikan Pangkat & Pensiun
### Dinas Pendidikan dan Kebudayaan Kabupaten Hulu Sungai Selatan (HSS)

[![PHP Version](https://img.shields.io/badge/PHP-7.4%20%7C%208.x-blue.svg)](https://www.php.net/)
[![Database](https://img.shields.io/badge/Database-MySQL%20%2F%20MariaDB-orange.svg)](https://www.mysql.com/)
[![Framework](https://img.shields.io/badge/Frontend-Bootstrap%203%20%7C%20jQuery-563d7c.svg)](https://getbootstrap.com/)
[![License](https://img.shields.io/badge/License-MIT-green.svg)](LICENSE)

---

## 📌 Tentang Program

**SINAIK** (Sistem Informasi Manajemen Data Kenaikan Pangkat dan Pensiun) adalah aplikasi web kepegawaian yang dirancang khusus untuk memfasilitasi, mempercepat, dan mendigitalisasi proses administrasi kenaikan pangkat serta pensiun bagi para pegawai di lingkungan Dinas Pendidikan Kabupaten Hulu Sungai Selatan.

Sistem ini mentransformasi proses pengajuan berkas fisik konvensional menjadi terintegrasi secara elektronik, mulai dari pengunggahan berkas pendukung, verifikasi kelayakan dokumen, alur persetujuan (*approval*) berjenjang oleh Kepala Dinas, hingga penerbitan dan pengunduhan Surat Keputusan (SK) resmi ber-tanda tangan digital / QR Code.

---

## 🚀 Fitur Utama

Sistem ini memiliki **3 Hak Akses (Multi-Level Role)** dengan hak otoritas dan fungsi yang disesuaikan:

### 1. 👨‍💼 Administrator (Admin Kepegawaian)
- **Dashboard Statistik:** Ringkasan jumlah pegawai, riwayat pengajuan, dan status verifikasi.
- **Master Data:**
  - Manajemen Data Pegawai (tambah, edit, mutasi, hapus, dan riwayat).
  - Manajemen Golongan & Gaji Pokok.
  - Manajemen Jabatan & Bagian.
- **Pengelolaan Kenaikan Pangkat:**
  - Monitoring Pengajuan Masuk.
  - Verifikasi Berkas Persyaratan (Ijazah, SK Terakhir, Sertifikat, dll).
  - Validasi Status: **Terima** atau **Tolak** (disertai catatan perbaikan).
- **Pengelolaan Pensiun:**
  - Pengajuan Pensiun Reguler (Batas Usia Pensiun / BUP).
  - Pengajuan Pensiun Dini / Atas Permintaan Sendiri.
- **Penerbitan Surat Keputusan (SK):**
  - Pembuatan SK Kenaikan Pangkat & SK Pensiun.
  - Rekapitulasi & Cetak Laporan SK (PDF/Print ready).
- **Manajemen Akun & Notifikasi:** Pengaturan user, hak akses, serta sistem pesan internal untuk pegawai.

### 2. 🏛️ Kepala Dinas (KADIS / Pejabat Penandatangan)
- **Executive Dashboard:** Pemantauan menyeluruh terkait pengajuan yang sedang diproses.
- **Approval Berjenjang:** Tinjauan dan persetujuan pengajuan kenaikan pangkat dan pensiun yang telah lolos verifikasi berkas oleh admin.
- **Tanda Tangan Elektronik / Digital (TTD):** Fitur tanda tangan digital & QR Code resmi yang akan disematkan secara otomatis pada lembar SK.
- **Monitoring & Rekap Laporan:** Akses dokumen laporan resmi kepegawaian kapan saja.

### 3. 👤 Pegawai
- **Kelola Profil Mandiri:** Melengkapi identitas pribadi, riwayat pendidikan, NIP, pangkat/golongan awal, dan pas foto resmi.
- **Pengajuan Kenaikan Pangkat:**
  - Memilih target golongan dan jabatan yang dituju.
  - Unggah dokumen pendukung dalam format digital (PDF/gambar).
- **Pengajuan Pensiun:** Mengajukan permohonan pensiun reguler maupun pensiun dini beserta kelengkapan surat permohonan.
- **Tracking Status Pengajuan:** Memantau status pengajuan secara *real-time* (Pending, Diterima, Ditolak dengan alasan/catatan).
- **Unduh Dokumen SK:** Mengunduh lembar SK Kenaikan Pangkat atau SK Pensiun resmi setelah disetujui.

---

## 🛠️ Arsitektur & Teknologi

| Komponen | Spesifikasi / Teknologi |
|---|---|
| **Bahasa Pemrograman** | PHP (Native / Procedural) |
| **Database** | MySQL / MariaDB (Driver `mysqli`) |
| **Web Server** | Apache / Nginx (Kompatibel dengan Laragon, XAMPP, Docker) |
| **Antarmuka Pengguna (UI)** | Arise Admin Template, Bootstrap 3, HTML5, CSS3 |
| **Komponen Interaktif** | jQuery, Animate.css, Icomoon Font Icons |
| **Cetak Laporan / Dokumen** | HTML to Print / Format Cetak FPDF |

---

## 📂 Struktur Direktori

```text
sinaik/
├── admin/          # Panel kontrol Administrator (Kelola data, verifikasi & SK)
├── assets/         # Aset statis (CSS, JavaScript, Fonts, Icon, Vendor)
├── config/         # Konfigurasi database, helper, dan session aplikasi
├── docs/           # Dokumentasi teknis & rencana migrasi PHP 8.x
├── file/           # Direktori penyimpanan berkas pendukung pegawai (PDF/dokumen)
├── img/            # Direktori penyimpanan pas foto, tanda tangan & logo
├── kepala/         # Panel Pejabat / Kepala Dinas (Approval & TTD digital)
├── pegawai/        # Panel Pegawai (Pengajuan pangkat, pensiun, dan profil)
├── index.php       # Titik masuk aplikasi (redirection ke login/dashboard)
├── login.php       # Halaman otentikasi pengguna
├── logout.php      # Penanganan sesi keluar (destroy session)
└── sikj.sql        # Skema basis data dan data awalan (seed)
```

---

## 💻 Panduan Instalasi & Menjalankan Aplikasi

Ikuti langkah-langkah di bawah ini untuk menjalankan aplikasi di komputer lokal (Localhost):

### 1. Prasyarat Sistem
- Server lokal terpasang seperti **Laragon** (sangat disarankan) atau **XAMPP**.
- PHP minimal versi **7.4** atau **8.0+** (dengan ekstensi `mysqli`, `session`, `fileinfo` aktif).
- MySQL / MariaDB.
- Git.

### 2. Kloning Repositori
Tempatkan di direktori web root Anda (`C:\laragon\www\` untuk Laragon atau `C:\xampp\htdocs\` untuk XAMPP):
```bash
git clone https://github.com/malisyahbana/sinaik.git
cd sinaik
```

### 3. Persiapan Database
1. Buka browser dan buka **phpMyAdmin** (`http://localhost/phpmyadmin`).
2. Buat basis data baru dengan nama:
   ```sql
   CREATE DATABASE sikj;
   ```
3. Impor file skrip database [`sikj.sql`](sikj.sql) ke dalam database `sikj` yang baru saja dibuat.

### 4. Konfigurasi Koneksi Database
Buka file [`config/database.php`](config/database.php) dan sesuaikan kredensial server MySQL Anda jika berbeda:
```php
<?php
$sql_details = array(
    'user' => 'root',
    'pass' => '',
    'db'   => 'sikj',
    'host' => 'localhost'
);

$con = $sql_details;
```

Pastikan juga konfigurasi `base_url` di [`config/config.php`](config/config.php) sudah sesuai dengan path web server Anda:
```php
function base_url($url = null)
{
    $base_url = "http://localhost/sinaik";
    if ($url != null) {
        return $base_url . "/" . $url;
    } else {
        return $base_url;
    }
}
```

### 5. Akses Aplikasi
Buka peramban (browser) dan akses:
```
http://localhost/sinaik
```

---

## 🔑 Akun Default untuk Pengujian

Gunakan akun sampel berikut untuk mencoba fungsionalitas tiap peran pengguna:

| Peran | Username | Password | Keterangan |
|---|---|---|---|
| **Admin** | `admin` | `admin` | Akses penuh seluruh master data & verifikasi |
| **Kepala Dinas** | `rafif` | `rafif` | Otoritas approval, verifikasi akhir & TTD digital |
| **Pegawai** | `ali` | `ali` | Akun pegawai untuk simulasi pengajuan |
| **Pegawai** | `maulidi` | `maulidi` | Akun pegawai data lengkap |

*(Password pada database awal tersimpan dalam format hash MD5)*

---

## 📈 Roadmap & Pengembangan Lanjutan
Rencana peningkatan kualitas dan modernisasi sistem tercatat secara berkala pada dokumen [docs/update-php-code.md](docs/update-php-code.md), yang mencakup:
- [x] Migrasi dan pengujian kompatibilitas penuh pada PHP 8.2 – 8.4.
- [ ] Penguatan keamanan otentikasi (migrasi dari MD5 ke `password_hash()` BCRYPT/Argon2).
- [ ] Implementasi Prepared Statements (PDO / MySQLi) untuk perlindungan menyeluruh terhadap SQL Injection.
- [ ] Validasi MIME type berkas upload pada server-side.

---

## 👨‍💻 Pengembang
- **Malisyahbana** - [@malisyahbana](https://github.com/malisyahbana)

---
*Dibuat untuk mempermudah tata kelola kepegawaian Dinas Pendidikan Kabupaten Hulu Sungai Selatan.*
