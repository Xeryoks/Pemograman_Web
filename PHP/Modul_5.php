<html>
<head>
    <title> Form Metode Get</title>
</head>
<body>
    <!--- Metode GET ----->
    <form action="Modul_5.php" method="get">
        Masukkan nama : <input type = "text" name="nama" size="25">
        <input type="submit" value="Proses">
    </form> 
</body>
</html>
    
   
<?php
        //FORM METODE GET PROSES 
        if (isset($_GET["nama"])){
            $nama = $_GET["nama"];
            echo "Data Nama Yang Diinputkan adalah : ".$nama;
        }
       
?>

 