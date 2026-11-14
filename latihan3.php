<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Latihan 3 - Perulangan dan Array</title>
</head>
<body>
    <?php
    $mahasiswa = ["Biya", "Masha", "Caca", "Elyna"];
    echo "<h3>Daftar Mahasiswa</h3><ol>";
    foreach ($mahasiswa as $nama) {
        echo "<li>" . htmlspecialchars($nama) . "</li>";
    }
    echo "</ol>";
    ?>
</body>
</html>