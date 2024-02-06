<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Document</title>
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
                        <th>02 februari 2024</th>
                    </tr>
                </table>
               <img src="../image/me.jpg" alt="gambar-rusak" width="300">   <!-- DOKUMENTASI -->
        </div>
            </center>

    <h1>Jenis-Jenis metode perulangan pada PHP</h1>
        <!--beberapa metode perulangan yang bisa kita gunakan. Mulai dari:
                perulangan for
                perulangan while
                perulangan do-while
                perulangan foreach
                purulangan rekursif -->
            <h3>Perulangan for</h3>
            <?php

for ($i = 0; $i < 50; $i++) {
    echo "Saya berjanji tidak akan mengulangi <br>";
}
?>
     <!-- Penjelasan:
        ekspresi pertama digunakan untuk menginisialisasi variabel
        ekspresi kedua digunakan untuk boolean statement, yang mana perulangan akan terus dilakukan selama statemen ini bernilai true
        ekspresi ketiga adalah suatu aksi yang akan selalu dijalankan setiap kali satu perulangan telah selesai dilakukan. -->

<!-- Contoh-contoh yang lain dari perulangan for: -->
<?php

# inisialisasi variabel tidak harus dari angka 0
for ($i = 1; $i <= 10; $i++) {
    echo "Perulangan ke-{$i} <br>";
}
?>

<h5>hitung mundur:</h5>
<?php

for ($i = 10; $i > 0; $i--) {
    echo "Nilai i = {$i} <br>";
}
?>

<?php
# kode program ini akan menampilkan * dalam bentuk persegi
# dengan ukuran 5x5
for ($i = 0; $i < 5; $i++) {
    for ($j = 0; $j < 5; $j++) {
        echo "* ";
    }

    echo "<br>";
}
?>

<h5>menggunakan kelipatan lebih dari 1:</h5>

<?php

for ($i = 2; $i < 30; $i += 2) {
    echo "Nilai i = {$i} <br>";
}
?>

<h5>menggunakan nama variabel sesuka kita:</h5>
<?php

for ($x = 1; $x < 11; $x++) {
    echo "Nilai x = {$x} <br>";
}
?>

<h1>Menampilkan Array</h1>
    <!-- menampilkan seluruh isi dari suatu array menggunakan perulangan for. -->

    <?php

$listMahasiswa = ['valen florencia', 'riska nurlaila', 'ebot samsudin'];

for ($i = 0; $i < count($listMahasiswa); $i++) {
    echo "Nama: {$listMahasiswa[$i]} <br>";
}
?>

<h1>Perintah Break dan Continue</h1>
        <!-- memberhentikan proses perulangan dengan perintah break sebelum ia sampai pada iterasi yang terakhir. -->
<?php

# inisialisasi variabel tidak harus dari angka 0
for ($i = 1; $i <= 50; $i++) {
    if ($i % 10 === 0) {
      continue; # skip perulangan jika nilai $i habis dibagi 10
    }
    
    echo "Perulangan ke-{$i} <br>";

    if ($i > 40) {
      break; # hentikan perulangan jika $i lebih dari 20
    }
}
?>

</body>
</html>