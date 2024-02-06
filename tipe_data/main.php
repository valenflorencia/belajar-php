<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>tipe data</title>
      <!-- nyambungin cssnya -->
      <link rel="stylesheet" href="style.css">
      
</head>
<body>
    <!-- IDENTITAS -->
<center>
            <div class="biodata">
                <table>
                    <tr>
                        <th>Nama</th>
                        <th>:</th>
                        <th>Valen Florencia Simanullang</th>
                    </tr>
                    <tr>
                        <th>kelas</th>
                        <th>:</th>
                        <th>XI RPL</th>
                    </tr>
                    <tr>
                        <th>Tanggal praktikum</th>
                        <th>:</th>
                        <th>29 januari 2024</th>
                    </tr>
                </table>
               <img src="../image/me.jpg" alt="gmbr rusak" width="300">   <!-- DOKUMENTASI -->
        </div>
            </center>

  <!-- Tipe data adalah klasifikasi jenis data atau bentukan dari suatu data. -->
        <!-- tipe data ada 5 yaitu, integer, float, boolean, string, array. -->

        <h1>Tipe Data Integer</h1>
        <!-- yang digunakan untuk menyimpan bilangan bulat. -->
    <?php
# inisiasi dan inisialisasi variabel
        $a = 10;
        $b = 5;
        $c = $a + 5;
        $d = $b + (10 * 5);
        $e = $d - $c;

# Tampilkan data dengan perintah echo

        echo "Variabel a: {$a} <br>";
        echo "Variabel b: {$b} <br>";
        echo "Variabel c: {$c} <br>";
        echo "Variabel d: {$d} <br>";
        echo "Variabel e: {$e} <br>";

# mengetahui tipe data dari variabel
    var_dump($e);
    ?>

<h1>Tipe Data Float</h1>
    <!-- menerima data desimal dengan angka -->
    <?php

    $nilaiMatematika = 5.1;
    $nilaiIPA = 6.7;
    $nilaiBahasaIndonesia = 9.3;

# hitung nilai rata-rata
    $rataRata = ($nilaiMatematika + $nilaiIPA + $nilaiBahasaIndonesia) / 3;

# Tampilkan data

    echo "Matematika: {$nilaiMatematika} <br>";
    echo "IPA: {$nilaiIPA} <br>";
    echo "Bahasa Indonesia: {$nilaiBahasaIndonesia} <br>";
    echo "Rata-rata: {$rataRata} <br>";

# lihat tipe data dari variabel $rataRata
    var_dump($rataRata);
    ?>
    
<h1>Tipe Data Boolean</h1>
    <!--  hanya bisa menampung nilai true atau false. -->
    <?php

    $apakahSiswaLulus = true;
    $apakahSiswaSudahUjian = false;

    var_dump($apakahSiswaLulus);
    echo "<br>";
    var_dump($apakahSiswaSudahUjian);
    ?>

<h1>Tipe Data String</h1>
    <!--  tipe data yang digunakan untuk menyimpan teks -->
    <?php

    $namaDepan = "Valen"; # pakai tanda petik dua
    $namaBelakang = 'Florencia'; # pakai tanda petik satu

# menggabungkan dua variabel dengan tanda
# petik dua
    $namaLengkap = "{$namaDepan} {$namaBelakang}";

# anda juga bisa menggabungkan string dengan menggunakan tanda titik (.)
    $namaLengkap2 = $namaDepan . ' ' . $namaBelakang;

# [Tampilkan Data]
# kita bisa memasukkan variabel lain jika menggunakan tanda petik dua
    echo "Nama Depan: {$namaDepan} <br>"; 
# ada pun jika pakai tanda petik satu, kita tidak bisa memasukkan variabel 
# di dalam string akan tetapi menggabungkannya dengan operator titik (.)
    echo 'Nama Belakang: ' . $namaBelakang . '<br>';

 echo $namaLengkap;
?>

<h1>Tipe Data Array</h1>
    <!-- berfungsi untuk menyimpan himpunan data -->
    <?php

$listMahasiswa = ["Wahid Abdullah", "Elmo Bachtiar", "Lendis Fabri"];
?>

<?php
echo $listMahasiswa[0]; // "Wahid Abdullah"
?>

</body>
</html>