<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>string</title>
      <!-- nyambungin cssnya -->
      <link rel="stylesheet" href="style.css">
      
</head>
<body>
    <!-- String merupakan salah satu tipe data PHP sederhana. 
    Pada dasarnya, string adalah kumpulan dari karakter-karakter seperti huruf, angka, 
    dan karakter-karakter khusus. Pada artikel kali ini, kami secara khusus akan membahas tentang string. -->

    <!-- Ciri-ciri dari String PHP:

1. String adalah urutan karakter. Sebagai contoh “Selamat Belajar!”. Jumlah karakter tersebut disebut panjang string PHP.
2. String adalah salah satu dari delapan tipe data PHP.
3. PHP memiliki fungsi bawaan untuk memproses string -->

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
               <img src="../image/me.jpg" alt="gambar-rusak" width="300">   <!-- DOKUMENTASI -->
        </div>
            </center>

            <h1>strlen()</h1>
            <!-- Fungsi string ini digunakan untuk mengembalikan jumlah karakter dalam string yang ditentukan sebagai angka atau memberi panjang string pada PHP. Berikut contoh penggunaannya: -->
            <?php
            $pesan = 'Selamat Belajar!';
            echo 'Jumlah karakter dari string pesan adalah ' . strlen($pesan);
            ?>

        <h1>str_word_count()</h1>
        <!-- Fungsi ini mengembalikan jumlah kata individual dalam string PHP yang ditentukan sebagai angka. Berikut contoh penggunaannya: -->
                    <?php 
            $pesan = "Selamat belajar bahasa pemrograman PHP!";
            print_r(str_word_count($pesan, 1)); 
            ?>    

        <h1>strrev()</h1>
        <!-- Fungsi string ini digunakan untuk mengembalikan string secara terbalik. Dengan menggunakan fungsi ini pada string “Selamat Belajar!”, Anda akan menerima “!rajaleB tamaleS”. Berikut ini adalah contohnya: -->

                    <?php
            $pesan=strrev("Selamat Belajar!");
            echo $pesan;
            ?>

            <h1>strops()</h1>
            <!-- Fungsi ini mencari string pada php untuk pencocokan teks. Setelah menemukan kecocokan, ia mengembalikan posisi kejadian pertama sebagai angka. Berikut contohnya: -->

                    <?php 
        function look($kunci, $pesan){ 
            $text = strpos($pesan, $kunci, 5);   
            if ($text == true){ 
                return "Kata kunci ditemukan " . $text; 
            } 
            else{ 
                return "Kata kunci tidak ditemukan"; 
            } 
        } 

        $pesan = "Selamat Belajar PHP!"; 
        $kunci = "PHP"; 
        echo look($kunci, $pesan); 
        ?>

        <h1>str_replace()</h1>
        <!-- Fungsi ini digunakan untuk mengganti bagian dari string pada php. Saat Anda menambahkan str_replace ke string pada php, metode akan mencari teks tertentu di dalamnya -->

                <?php
        $pesan="Selamat Belajar PHP!";
        echo str_replace("HTML", "PHP", $pesan);
  /*
    nilai pertama yang diinputkan adalah kata yang ingin diganti
    nilai kedua yang diinputkan adalah kata pengganti
    nilai ketiga adalah kalimat atau variabel string yang kata-katanya
    ingin diganti
  */
?>

            <!-- Ada beberapa hal yang harus Anda perhatikan terkait dengan String pada PHP.
                Urutan karakter yang dikelilingi oleh tanda kutip disebut string. Hal ini adalah salah satu tipe data paling dasar.
                Jumlah karakter yang terdiri dari satu string disebut panjang string PHP. Jumlah karakter itu bisa diambil menggunakan fungsi strlen (). -->
    </body>
    </html>