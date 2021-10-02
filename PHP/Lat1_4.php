<?php
    $nilai = 85;
    $nama = "Amir";
    if ($nilai >= 80)
        {
            echo $nama. " Mendapat nilai A";
        }
    elseif ($nilai >= 70)
        {
            echo $nama. " Mendapat nilai B";
        }
    elseif ($nilai >= 60)
        {
            echo $nama. " Mendapat nilai C";
        }
    else
        {
            echo $nama. " Mendapat nilai D";
        }
?>