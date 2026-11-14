<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Latihan 2 - Variabel & Percabangan</title>
</head>
<body>
    <h2>Hitung Nilai Akhir Mahasiswa</h2>
    <?php
    $nama = "Nabila";
    $tugas = 90 ;
    $uts = 95;
    $uas = 90;
    
    // Menghitung nilai akhir dengan bobot tertentu
    $nilaiAkhir = ($tugas * 0.30) + ($uts * 0.30) + ($uas * 0.40);

    // Menentukan predikat berdasarkan nilai akhir menggunakan percabangan if-elseif-else
    if ($nilaiAkhir >= 85) {
        $predikat = "A";
    } elseif ($nilaiAkhir >= 75) {
        $predikat = "B";
    } elseif ($nilaiAkhir >= 60) {
        $predikat = "C";
    } else {
        $predikat = "D";
    }

    echo "Nama: " . htmlspecialchars($nama) . "<br>";
    echo "Nilai akhir: " . number_format($nilaiAkhir, 2) . "<br>";
    echo "Predikat: " . $predikat;
    ?>
</body>
</html>