<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fungsi</title>
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
                        <th>01 februari 2024</th>
                    </tr>
                </table>
               <img src="../image/me.jpg" alt="gambar-rusak" width="300">   <!-- DOKUMENTASI -->
        </div>
            </center>

            <h1>FUNGSI</h1>
            <!-- Fungsi adalah suatu kumpulan blok kode, yang menerima suatu inputan, 
                melakukan satu tugas tertentu, dan secara opsional ia bisa mengembalikan suatu nilai. -->

                <h1>Call a Function</h1>
                <?php
            function myMessage() {
            echo "Hello world!";
            }

            myMessage();
            ?> 

            <h1>PHP Function Arguments</h1>
                    <?php
        function familyName($fname) {
        echo "$fname Refsnes.<br>";
        }

        familyName("Jani");
        familyName("Hege");
        familyName("Stale");
        familyName("Kai Jim");
        familyName("Borge");
        ?>

        <h1>PHP Default Argument Value</h1>
                    <?php
            function setHeight($minheight = 50) {
            echo "The height is : $minheight <br>";
            }

            setHeight(350);
            setHeight();
            setHeight(135);
            setHeight(80);
            ?>

</body>
</html>