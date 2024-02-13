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
               <img src="../image/me.jpg" alt="gambar-rusak" width="300">   
               <!-- DOKUMENTASI -->
        </div>
            </center>

            <h1>PHP Directory Functions</h1>
            <!--    chdir() 	Changes the current directory
                    chroot()	Changes the root directory
                    closedir()	Closes a directory handle
                    dir()	    Returns an instance of the Directory class
                    getcwd()	Returns the current working directory
                    opendir()	Opens a directory handle
                    readdir()	Returns an entry from a directory handle
                    rewinddir()	Resets a directory handle
                    scandir()	Returns an array of files and directories of a specified directory --> 

            <h2>Sebelum Di Hapus</h2>

            <h3>Membuat Direktori</h3>
            <!-- Parameter yang diberikan ke fungsi mkdir() berupa string. Parameter ini yang akan menjadi nama direktori. -->
             <?php mkdir("one piece"); ?>

            <br>

            <h3>Melihat isi Direktori dengan php</h3>
            <?php
            $dir = scandir("one piece");
            print_r($dir);
            ?>

            <h2>Sesudah Di Hapus</h2>

            <h3>Membuat Direktori</h3>
            <!-- Parameter yang diberikan ke fungsi mkdir() berupa string. Parameter ini yang akan menjadi nama direktori. -->
            <?php mkdir("Luffy"); ?>

            <br>

            <h3>Melihat isi Direktori dengan php</h3>
            <?php
            $dir = scandir("Luffy");
            print_r($dir);
            ?>

            <br>

            <h3>Menghapus Direktori</h3>
            <?php
            $nama_dir = "Luffy";

            if( is_dir($nama_dir) ) {
                rmdir($nama_dir); 
            } else {
                echo "Direktori tidak ditemukan"; 
            }
            ?>
</body>
</html>