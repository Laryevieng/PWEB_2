<?php
require_once "latihan_02_05.php";
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $alumni = new Alumni();
    
    // Gunakan method untuk mencegah SQL injection
    $alumni->nama = htmlspecialchars(strip_tags($_POST["nama"]));
    $alumni->email = htmlspecialchars(strip_tags($_POST["email"]));
    $alumni->jurusan = htmlspecialchars(strip_tags($_POST["jurusan"]));
    $alumni->tahun_lulus = htmlspecialchars(strip_tags($_POST["tahun_lulus"]));
    
    // Tambahkan penanganan error
    try {
        if ($alumni->add()) {
            header("Location: latihan_02_06.php");
            exit;
        } else {
            echo "<div class='alert alert-danger'>Gagal menambahkan data.</div>";
        }
    } catch (PDOException $e) {
        echo "<div class='alert alert-danger'>Error: " . $e->getMessage() . "</div>";
    }
}
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <title>Tambah Alumni</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<div class="container mt-5">
    <h2>Tambah Alumni</h2>
    <form method="POST">
        <input type="text" name="nama" class="form-control mb-2" placeholder="Nama" required>
        <input type="email" name="email" class="form-control mb-2" placeholder="Email" required>
        <input type="text" name="jurusan" class="form-control mb-2" placeholder="Jurusan" required>
        <input type="number" name="tahun_lulus" class="form-control mb-2" placeholder="Tahun Lulus" required>
        <button type="submit" class="btn btn-success">Simpan</button>
        <a href="latihan_02_06.php" class="btn btn-secondary">Kembali</a>
    </form>
</div>
</body>
</html>