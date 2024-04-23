Terima Kasih sudah mengisi data 🙏,
<?php 
    //tampilkan hasil submit nama
    if(isset($_POST["nama"])){
        echo $_POST["nama"];
        echo '<br>';
    }

    if(isset($_POST["Tempat"])){
        echo 'Tempat/Tanggal Lahir : ' .$_POST["Tempat"]. '/ ';
    }
    if(isset($_POST["Tanggal"])){
        echo $_POST["Tanggal"];
        echo "<br>";
    }

    if(isset($_POST["agama"])){
        echo ' Agama : ' .$_POST["agama"];
    }
?>