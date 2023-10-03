<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <table border="1" cellpadding="5" cellspacing>
        <tr>
            <td>Nama</td>
            <td><?= $_POST['nama']?></td>
        </tr>
        <tr>
            <td>Email</td>
            <td><?= $_POST['Email']?></td>
        </tr>
        <tr>
            <td>Program Studi</td>
            <td><?= $_POST['prodi']?></td>
        </tr>    
            <td>Alamat</td>
            <td><?= $_POST['Alamat']?></td>
        </tr>   
        <tr>
            <td>Umur</td>
            <td><?= $_POST['Umur']?></td>
        </tr>
        <tr>
            <td>Jenis Kelamin</td>
            <td><?= $_POST['gender']?></td>
        </tr>
        <tr>
            <td>Hobbi</td>
            <td><?= $_POST['Hobbi']?></td>
        </tr>
        <tr>
            <td>Username</td>
            <td><?= $_POST['Username']?></td>
        </tr>
        <tr>
            <td>Password</td>
            <td><?= $_POST['Password']?></td>
        </tr>    
</table>
</body>
</html>
