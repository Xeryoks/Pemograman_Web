<?php
    //OPERATOR PERBANDINGAN
    $bil1=200;
    $bil2=40;
    $teks1="PHP";
    $teks2="php";

    $hasil = $bil1 == $bil2;
        echo "$bil1 == $bil2 = $hasil <br>";
    
    $hasil = $bil1 != $bil2;
        echo "$bil1 != $bil2 = $hasil <br>";

    $hasil = $bil1 >= $bil2;
        echo "$bil1 >= $bil2 = $hasil <br>";

    $hasil = $teks1 == $teks2;
        echo "$teks1 == $teks2 = $hasil <br>";

    $hasil = $teks1 != $teks2;
        echo "$teks1 != $teks2 = $hasil <br>";


    //OPERATOR LOGIKA
    $bil1=100;
    $bil2=20;
    $teks1="PHP";
    $teks2="php";
    
    $hasil = ($bil1 <> $bil2) or ($teks1 == $teks2);
        echo " $bil1 <> $bil2 or $teks1 == $teks2 adalah $hasil <br>";
    
    $hasil = !($teks1 == $teks2);
        echo " !($teks1 == $teks2) adalah $hasil <br>";
        
?>
