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
                        <th>05 februari 2024</th>
                    </tr>
                </table>
               <img src="../image/me.jpg" alt="gambar-rusak" width="300">   <!-- DOKUMENTASI -->
        </div>
            </center>

            <!-- PHP  (PHP: Hypertext Preprocessor) adalah sebuah bahasa pemrograman server side scripting yang bersifat open source. -->

                        <script>
            function showUser(str) {
            if (str == "") {
                document.getElementById("txtHint").innerHTML = "";
                return;
            } else {
                var xmlhttp = new XMLHttpRequest();
                xmlhttp.onreadystatechange = function() {
                if (this.readyState == 4 && this.status == 200) {
                    document.getElementById("txtHint").innerHTML = this.responseText;
                }
                };
                xmlhttp.open("GET","getuser.php?q="+str,true);
                xmlhttp.send();
            }
            }
</script>
</body>
</html>
        <form>
        <select name="users" onchange="showUser(this.value)">
        <option value="">Select a person:</option>
        <option value="1">Peter Griffin</option>
        <option value="2">Lois Griffin</option>
        <option value="3">Joseph Swanson</option>
        <option value="4">Glenn Quagmire</option>
        </select>
        </form>
        <br>
        <div id="txtHint"><b>Person info will be listed here...</b></div>

        </body>
        </html>