<html>
<head>
    <title> Menghitung Luas Lingkaran</title>
</head>
<body>

<?php

//konstanta untuk nilai judul
    define("Judul",'Hitung Luas Lingkaran');

//konstanta untuk nilai phi
    define("PHI",3.14);

    $r = 10;
    echo  Judul;
    echo "<br> Jari-jari : $r <br>";
    $luas = PHI*$r*$r;
    echo "Luas Lingkaran = $luas <br>";


//VOLUME KUBUS
    $sisi = 15;
    $teks1 = "Belajar Menghitung";
    $teks2 = "Volume Kubus";

    $volume = $sisi*$sisi*$sisi;
        echo "<br> $teks1.$teks2 <br>";
        echo "Panjang Sisi Kubus = $sisi <br>";
        echo "Volume Kubus = $volume cm3";
?>

</body>
</html
