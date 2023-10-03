<?php 
//var_dump($_POST['angka1])
//var_dump($_POST['angka2'])

if (isset($_POST["angka1"]) && isset(!$_POST["angka2"])) {
    $angka1 = $_POST['angka1'];
    $hitung = $_POST['hitung'];
    $angka2 = $_POST['angka2'];

    switch ($hitung) {
        case '+':
            <?= echo $angka1 + $angka2 ?>
            break;
        case '-':
            <?= echo $angka1 - $angka2 ?>
            break;
        case 'x':
            <?= echo $angka1 * $angka2 ?> 
            break;    
        case ':':
            <?= echo $angka1 / $angka2 ?>
            break;
                    
    }
}