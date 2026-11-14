<?php
$data = null;
$error = [];

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $nama = trim($_POST["nama"] ?? "");
    $nim = trim($_POST["nim"] ?? "");
    $prodi = trim($_POST["prodi"] ?? "");
    $semesterInput = $_POST["semester"] ?? "";
    $email = trim($_POST["email"] ?? "");

    // Validasi server-side
    if ($nama === "") $error[] = "Nama wajib diisi.";
    if ($nim === "") $error[] = "NIM wajib diisi.";
    if ($prodi === "") $error[] = "Program studi wajib diisi.";
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $error[] = "Format email tidak valid.";
    }
    if (!ctype_digit((string)$semesterInput) || (int)$semesterInput < 1 || (int)$semesterInput > 14) {
        $error[] = "Semester harus berupa angka 1-14.";
    }

    // Jika tidak ada error, simpan data ke array
    if (empty($error)) {
        $data = compact("nama", "nim", "prodi", "email");
        $data["semester"] = (int)$semesterInput;
    }
}
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Mini Project - Formulir Data Mahasiswa</title>
</head>
<body>
    <h2>Formulir Data Mahasiswa</h2>

    <!-- Tampilkan pesan error jika ada -->
    <?php if (!empty($error)): ?>
        <div style="color: red; background: #ffe6e6; padding: 10px; margin-bottom: 15px; border-radius: 5px;">
            <strong>Terjadi Kesalahan:</strong>
            <ul>
                <?php foreach ($error as $err): ?>
                    <li><?= htmlspecialchars($err, ENT_QUOTES, "UTF-8") ?></li>
                <?php endforeach; ?>
            </ul>
        </div>
    <?php endif; ?>

    <!-- Form Input -->
    <form method="POST" action="">
        <label>Nama Lengkap:<br>
            <input type="text" name="nama" value="<?= htmlspecialchars($_POST['nama'] ?? '', ENT_QUOTES, 'UTF-8') ?>" required>
        </label><br><br>

        <label>NIM:<br>
            <input type="text" name="nim" value="<?= htmlspecialchars($_POST['nim'] ?? '', ENT_QUOTES, 'UTF-8') ?>" required>
        </label><br><br>

        <label>Program Studi:<br>
            <input type="text" name="prodi" value="<?= htmlspecialchars($_POST['prodi'] ?? '', ENT_QUOTES, 'UTF-8') ?>" required>
        </label><br><br>

        <label>Semester (1-14):<br>
            <input type="number" name="semester" min="1" max="14" value="<?= htmlspecialchars($_POST['semester'] ?? '', ENT_QUOTES, 'UTF-8') ?>" required>
        </label><br><br>

        <label>Email:<br>
            <input type="email" name="email" value="<?= htmlspecialchars($_POST['email'] ?? '', ENT_QUOTES, 'UTF-8') ?>" required>
        </label><br><br>

        <button type="submit">Kirim Data Mahasiswa</button>
    </form>

    <!-- Tampilkan Hasil Ringkasan Data Jika Valid -->
    <?php if ($data): ?>
        <hr>
        <div style="background: #e6f9e6; padding: 15px; border-radius: 5px;">
            <h3>Ringkasan Data Mahasiswa Berhasil Disimpan</h3>
            <p><strong>Nama:</strong> <?= htmlspecialchars($data["nama"], ENT_QUOTES, "UTF-8") ?></p>
            <p><strong>NIM:</strong> <?= htmlspecialchars($data["nim"], ENT_QUOTES, "UTF-8") ?></p>
            <p><strong>Program Studi:</strong> <?= htmlspecialchars($data["prodi"], ENT_QUOTES, "UTF-8") ?></p>
            <p><strong>Semester:</strong> <?= $data["semester"] ?></p>
            <p><strong>Email:</strong> <?= htmlspecialchars($data["email"], ENT_QUOTES, "UTF-8") ?></p>
        </div>
    <?php endif; ?>
</body>
</html>