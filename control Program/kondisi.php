<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>control Program</title>
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
                        <th>05 februari 2024</th>
                    </tr>
                </table>
               <img src="../image/me.jpg" alt="gambar-rusak" width="300">   <!-- DOKUMENTASI -->
        </div>
            </center>

            <h1>Pernyataan Kondisional PHP </h1>
            <!-- Di PHP kami memiliki pernyataan kondisional berikut:
                    - pernyataan if - mengeksekusi beberapa kode jika satu kondisi benar 
                    - pernyataan if...else - mengeksekusi beberapa kode jika suatu kondisi benar dan kode lain jika kondisi tersebut salah
                    - pernyataan if...elseif...else mengeksekusi kode yang berbeda untuk lebih dari dua kondisi 
                    - • pernyataan switch - memilih salah satu dari banyak blok kode yang akan dieksekusi saat ini -->

                    <h4>PHP - Pernyataan if</h4>
                    <!-- Pernyataan if mengeksekusi beberapa kode jika salah satu kondisinya benar. -->

            <?php
        if (5 > 3) {
        echo "Have a good day!";
        }
    ?>

        <?php   
        $t = 14;

        if ($t < 20) {
        echo "Good lock bro !";
        }
    ?>


        <?php
        for ($i= 1; $i <= 50; $i++)
        {
            echo "<li>$i</li>";
        }
        ?>
        
</body>
</html>