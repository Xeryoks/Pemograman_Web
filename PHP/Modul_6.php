<html>
<head>
    <title> Form Metode Get</title>
</head>
<body>
      <!--- Metode POST ----->
      <form action="Modul_6.php" method="POST">
        Masukkan nama : <input type = "text" name="nama" size="25">
        <input type="submit" value="Proses">
    </form> 
</body>
</html>


<?php 
    //FORM METODE POST PROSES 
    if (isset($_POST["nama"])){
        $nama = $_POST["nama"];
        echo "Data Nama Yang Diinputkan adalah : ".$nama;
    }
?>
