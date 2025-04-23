<?php include 'koneksi.php'; ?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Dashboard Pengguna</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .profile-img {
            width: 220px;
            height: auto;
            border-radius: 10px;
            border: 3px solid #0d6efd;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        .form-container {
            max-width: 500px;
        }
    </style>
</head>
<body class="bg-light">

<div class="container py-5">
    <h2 class="text-center mb-4">📂 Dashboard Pengguna</h2>

    <!-- Form input ID pengguna -->
    <form action="" method="get" class="form-container mx-auto mb-4">
        <div class="input-group">
            <input type="number" name="id_pengguna" class="form-control" placeholder="Masukkan ID Pengguna" required>
            <button class="btn btn-primary" type="submit">Lihat Profil</button>
        </div>
    </form>

    <!-- Tombol kembali ke halaman upload -->
    <div class="text-center mb-5">
        <a href="upload_profil.php" class="btn btn-outline-secondary">⬅ Kembali ke Halaman Upload</a>
    </div>

    <?php
    if (isset($_GET['id_pengguna'])) {
        $id_pengguna = intval($_GET['id_pengguna']);

        $sql = "SELECT * FROM foto_profil WHERE id_pengguna = $id_pengguna ORDER BY uploaded_at DESC LIMIT 1";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            $data = $result->fetch_assoc();
            echo "<div class='text-center'>";
            echo "<div class='card shadow-sm p-4 mx-auto' style='max-width: 350px;'>";
            echo "<h5 class='mb-3'>Foto Profil Pengguna ID: {$id_pengguna}</h5>";
            echo "<img src='{$data['lokasi_file']}' class='profile-img mb-3' alt='Foto Profil'>";
            echo "<p class='text-muted'><small>📅 Diunggah: {$data['uploaded_at']}</small></p>";
            echo "</div></div>";
        } else {
            echo "<div class='alert alert-warning text-center'>⚠️ Foto profil belum tersedia untuk pengguna ID <strong>$id_pengguna</strong>.</div>";
        }
    }
    ?>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
