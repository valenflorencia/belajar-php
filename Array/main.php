<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Array</title>
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

            <h1>Array</h1>
            <!-- Ia adalah suatu tipe data yang bersifat spesial dalam PHP, 
            ia bisa menyimpan himpunan beberapa nilai dalam satu variabel saja. -->

            <pre>
        <?php
            $cars = array("Volvo", "BMW", "Toyota"); 

            var_dump($cars);
        ?>
            </pre>

            <h1>Array Functions</h1>

            <?php
$cars = array("Volvo", "BMW", "Toyota");
echo count($cars);
?>

</pre>
</body>
</html>