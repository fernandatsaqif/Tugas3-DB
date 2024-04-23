
<!DOCTYPE html>
<html>
<head>
  <title>Tugas 3 - Tugas Terstruktur Form dan DB</title>
  <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>

    <div class="image">
        <img src="LOGO SD.png" alt="logo" class="center">
    </div>

    <fieldset>
        <legend><h1>Formulir Pendaftaran Siswa</h1></legend>
    
    <form action="hasil.php" method="post">
        <table>

            <tr>
                <td>Nama Calon Siswa </td> 
                <td>:</td> 
                <td><input type="text" name="nama"></td>
            </tr>
            <tr>
                <td>Tempat/Tanggal Lahir </td> 
                <td>:</td> 
                <td><input type="text" name="tempat"><input type="date" name="tanggal"></td>
            </tr>
            <tr>
                <td>Agama</td> 
                <td>:</td>
                <td><select name="agama">
                    <option value="Islam">Islam</option>
                    <option value="Kristen">Kristen</option>
                    <option value="Hindu">Hindu</option>
                    <option value="Budha">Budha</option>
                    <option value="Khongucu">Khongucu</option>
                </select></td>
            </tr>
            <tr>
                <td>No. Telepon/Hp</td>
                <td>:</td>
                <td><input type="number" name="No. Telepon"></td>
            </tr>
            <tr>
                <td><input type="submit" value="SUBMIT"/></td>
             </tr>
        </table> 
    </fieldset>
    </form>

    <?php
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "registrasi";

        // Create connection
        $conn = new mysqli($servername, $username, $password,$dbname);

        // Check connection
        if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
        }
        echo "Connected successfully";

        $sql = "SELECT id, nama, tempat, tanggal, telepon, agama  FROM pendaftar";
        $result = $conn->query($sql);

        $conn ->close();
        ?>

    <h2>Data Pendaftaran Siswa</h2>
    <table class="Data">
            <tr>
                <th rowspan="2" width="20%">Nama</th>
                <th colspan="2" width="40%">Lahir</th>
                <th rowspan="2" width="20%">No Telpon</th>
                <th rowspan="2" width="20%">Agama</th>
            </tr>
            <tr>
                <th>Tempat</th>
                <th>Tanggal</th>
            </tr>
            </tr>


            <?php
                foreach($result as $index => $data2){
                    echo "<tr>";
                    
                    echo"<td class='Data'>". $data2["nama"]."</td>";
                    echo"<td class='Data'>". $data2["tempat"]."</td>";
                    echo"<td class='Data'>". $data2["tanggal"]."</td>";
                    echo"<td class='Data'>". $data2["telepon"]."</td>";
                    echo"<td class='Data'>". $data2["agama"]."</td>";

                    echo"</tr>";
                }
            ?>


    </table>

    

    <footer>
        <p>&copy; 2024 Fernanda Tsaqif. <br> Hak Cipta Dilindungi Undang-Undang.</p>
    </footer>

    
</body>
</html>


