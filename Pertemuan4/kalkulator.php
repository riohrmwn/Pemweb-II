<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kalkulatot</title>
</head>
<body>
<h1>Struktur Kendali Percabangan Switch</h1>
    <form method="POST" action="hitung.php">
        <label for="angka1">Angka 1</label>
        <input type="number" name="angka1">
        <label for="hitung"></label>
        <select id="hitung" name="hitung">
            <option value ="option"><Option>+</Option>
            <option value ="option"><Option>-</Option>
            <option value ="option"><Option>x</Option>
            <option value ="option"><Option>:</Option>
            <option value ="option"><Option>%</Option>
        </select>
        <label for="angka2">Angka 2</label>
        <input type="number" name="angka2">
        <button type="submit" name="hitung">Hitung</button>
</body>
</html>