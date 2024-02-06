<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Operator</title>
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
               <img src="../image/me.jpg" alt="gambar-rusak" width="300">   <!-- DOKUMENTASI -->
        </div>
            </center>

    <h1>Operator Aritmatika</h1>
    <!-- Operator aritmatika adalah operator untuk menghitung operasi matematika dasar. Mulai dari:
        penjumlahan (+)
        pengurangan (-)
        perkalian (*)
        dan pembagian (/) 

    Aritmatika Tambahan
modulus dengan simbol (%)
eksponensial dengan simbol (**)
dan yang terakhir adalah negasi dengan simbol (-) -->

<?php

$a = 5;
$b = 10;

# operator aritmatika standar
    echo "{$a} + {$b} = " . ($a + $b) . " <br>";
    echo "{$a} - {$b} = " . ($a - $b) . " <br>";
    echo "{$a} * {$b} = " . ($a * $b) . " <br>";
    echo "{$a} / {$b} = " . ($a / $b) . " <br>";

# modulus
    echo "{$a} % {$b} = " . ($a % $b) . " <br>";
# eksponensial
    echo "{$a} ** {$b} = " . ($a ** $b) . " <br>";
# negasi
    echo "-a = " . (-$a) . " <br>";
?>

<h1>Operator Penugasan (Assignment)</h1>
    <!-- operator yang berfungsi untuk memberi nilai kepada suatu variabel. -->
            <!-- Operator penugasan dalam PHP adalah operator = -->

<?php

$nilaiMatematika = 8;
$rataRata = (10 + 7 + $nilaiMatematika) / 3;

$namaDepan = "valen";
$namaLengkap = "{$namaDepan} florencia";

$a = 5;
$a += 10; # sama dengan $a = $a + 10;
echo var_dump($a) . "<br>";

$a -= 20; # sama dengan $a = $a - 20;
echo var_dump($a) . "<br>";

$a *= 100; # sama dengan $a = $a * 100;
echo var_dump($a) . "<br>";

$a /= 10; # sama dengan $a = $a / 10;
echo var_dump($a) . "<br>";
?>

<h1>Operator Perbandingan</h1>
    <!-- digunakan untuk membandingkan antara dua nilai. -->
        <!-- yang bisa kita gunakan dalam PHP 
                >	Lebih dari
                >=	Lebih dari atau sama dengan
                <	Kurang dari
                <=	Kurang dari atau sama dengan -->

<?php

$nilai = 90;
# membanding variabel
$lulus = $nilai > 80;

    echo "{$nilai} > 80 = ";
    var_dump($lulus);
    echo "<br>";

# membandingkan langsung angka
    echo "3 >= 3 = ";
    var_dump(3 >= 3);
    echo "<br>";

    echo "3 < 6 = ";
    var_dump(3 < 6);
    echo "<br>";

    echo "5 <= 3 = ";
    var_dump(5 <= 3);
    echo "<br>";


# anda juga bisa membandingkan antar 2 string
    echo "'a' < 'b' = ";
    var_dump('a' < 'b');
    echo '<br>';

    echo "'abc' < 'b' = ";
    var_dump('abc' < 'b');
    echo '<br>';
?>


<h1>Perbandingan Equal dan Identik</h1>
    <!--    ==	sama secara equal
            ===	sama secara identik
            !=	tidak sama secara equal
            !==	tidak sama secara identik
            <>	sama dengan operator != -->

 <?php

    var_dump(10 == "10");
    echo "<br>";

    var_dump(10 === "10");
    echo "<br>";

    var_dump(10 === 10);
    echo "<br>";

    var_dump(10 != "10");
    echo "<br>";

    var_dump(10 !== "10");
    echo "<br>";

    var_dump(10 <> "10");
    echo "<br>";
?>

<h1>Operator Logika</h1>
    <!--    and	(&&) atau and	akan bernilai true jika kedua operan bernilai true.
            or	(`)	
            negasi	(!)	akan membalik yang true menjadi false dan yang false menjadi true. -->

<?php

    $a = true && true; # true
    $b = true and false; # false
    $c = false && false; # false
    $d = true || false; # false

# ekspresi berikut akan diselesaikan dari kiri ke kanan
    $e = true && false && false;

# ekspresi yang berada di dalam kurung diselesaikan terlebih dahulu
    $f = "a" === "a" && ((3 > 5) or 3 + 5 >= 7);

# negasi
    $g = !true;
    $h = !(true && !false);

# var_dump semua variabel di atas untuk melihat hasilnya
    var_dump($a); echo "<br>";
    var_dump($b); echo "<br>";
    var_dump($c); echo "<br>";
    var_dump($d); echo "<br>";
    var_dump($e); echo "<br>";
    var_dump($f); echo "<br>";
    var_dump($g); echo "<br>";
    var_dump($h); echo "<br>";
?>

<h1>Operator Increment dan Decrement</h1>
    <!-- Operator increment (++) atau decrement (--) adalah jalan pintas dari operator += atau -= yang telah berlalu penjelasannya pada bagian operator penugasan. -->

<?php
/**
 * Increment
 */
    $a = 1;
    echo "a = {$a} <br>";
    $a++;
    echo "a = {$a} <br>";
    $a++;
    echo "a = {$a} <br>";

# isi dari variabel $a dimasukkan lebih dulu ke variabel $b
# lalu variabel $a menambah dirinya sendiri dengan angka 1
    $b = $a++;
    echo "b = {$b} <br>";
    echo "a = {$a} <br>";

/**
 * Decrement
 */
    $a--;
    echo "a = {$a} <br>";
    $a--;
    echo "a = {$a} <br>";

# isi dari variabel $a dimasukkan lebih dulu ke variabel $b
# lalu variabel $a mengurangi dirinya sendiri dengan angka 1
    $b = $a--;
    echo "b = {$b} <br>";
    echo "a = {$a} <br>";
?>

<?php
$a = 5;
--$a;

# variabel $a menambah dirinya sendiri dengan angka 1
# lalu hasil terbaru tersebut akan dimasukkan ke variabel $b
    $b = --$a;
# begitu juga yang $c.
    $c = ++$b;
?>

</body>
</html>