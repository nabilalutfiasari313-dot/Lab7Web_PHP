<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Latihan 4 - Membuat Function</title>
</head>
<body>
    <h2>Penggunaan Function di PHP</h2>
    <?php
    // Function untuk menghitung diskon
    function hitungDiskon($harga, $persen) {
        $potongan = $harga * ($persen / 100);
        return $harga - $potongan;
    }

    $hargaAkhir = hitungDiskon(150000, 10);
    echo "Harga setelah diskon: Rp" . number_format($hargaAkhir, 0, ",", ".") . "<br><br>";

    // Function tambahan: Menghitung luas persegi panjang (Sesuai instruksi modul)
    function hitungLuasPersegiPanjang($panjang, $lebar) {
        return $panjang * $lebar;
    }

    echo "Luas Persegi Panjang (Panjang: 8, Lebar: 4) = " . hitungLuasPersegiPanjang(8, 4);
    ?>
</body>
</html>