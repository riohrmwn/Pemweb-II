<?php

    //var_dump($GET['nilai'])

    $nilai = $_POST['nilai'];
    $index1 = "A";
    $index2 = "B";
    $index3 = "C";
    $index4 = "D";
    $index5 = "E";


    if($nilai >= 80) {
        <?= $_POST[$index1]?>
    } elseif ($nilai >= 60) {
        <?= $_POST[$index2]?>
    } elseif ($nilai >= 30) {
        <?= $_POST[$index3]?>
    } elseif ($nilai >= 10){
        <?= $_POST[$index4]?>
    } else ($nilai < 10) {
        <?= $_POST[$index5]?>
    }

    echo "Nilai anda adalah: " .$nilai;
?>    


