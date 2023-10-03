<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
</head>
<body>
    <h1>Form Registrasi</h1>
    <!--Input Nama Menggunakan TEXT-->
    <form method="POST" action="Done.php">
        <label for="nama">Nama</label>
        <input type="text" name="nama">
        <br>
        <br>

    <!-- Input Email menggunakan Email -->
        <label for="Email">Email</label>
        <input type="email" name="Email">
        <br>
        <br>
    
    <!-- Input Asal Program Studi menggunanakan select point-->
        <label for="Program Studi">Program Studi</label>
        <select id="prodi" name="prodi">
            <option value ="option"><Option>Manajemen Informatika</Option>
            <option value ="option"><Option>Akutansi Bisnis Digital</Option>
            <option value ="option"><Option>Agribisnis Pangan</Option>
            <option value ="option"><Option>Akutansi Pajak</Option>
        </select>
        <br>
        <br>

    <!-- Input Alamat menggunakan textarea-->
        <label for="Alamat">Alamat</label>
        <textarea id="Alamat" name="Alamat" rows="3" cols="25"></textarea>
        <br>
        <br>

        <label for="Umur">Umur</label>
        <input type="number" name="Umur">
        <br>
        <br>

        <label for="Jenis Kelamin">Jenis Kelamin</label>
        <input type="radio" name="gender" value= "male">Pria
        <input type="radio" name="gender" value= "female">Perempuan
        <br>
        <br>

        <label for="Hobbi">Hobbi</label>
        <input type="checkbox" name="Hobbi">Volly
        <input type="checkbox" name="Hobbi">Futsal
        <input type="checkbox" name="Hobbi">Bulutanggkis
        <br>
        <br>

        <label for="Username">Username</label>
        <input type="text" name="Username">
        <br>
        <br>

        <label for="Password">Password</label>
        <input type="password" name="Password">
        <br>
        <br>

        <button type="submit">Kirim</button>
</body>
</html>