<!-- php -->
<?php

$hasil = null; //inisialisasi variabel hasil
//mengecek apakah form telah disubmit, jika berisi methode post maka ambil datanya
  if ($_SERVER["REQUEST_METHOD"] == "POST") {
    //ambil data angka1 dan angka2 dari form
    $nilai = $_POST['nilai-siswa'];
    //lakukan perhitungan penjumlahan
    $kategori = ($nilai > 75) ? "Lulus" : "Tidak Lulus";

    if ($nilai > 75) {
        $kategori = "Lulus";
    } else {
        $kategori = "Tidak Lulus";
    }
  }
    
    
?>

<!DOCTYPE html>
<html lang="id">


<head>
    <meta charset="UTF-8">
    <title>Penjumlahan PHP</title>


    <!-- Bootstrap CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>




<body class="bg-light d-flex justify-content-center align-items-center min-vh-100">
    <div class="card shadow" style="width: 30%">
        <div class="card-body">
            <H5 class="card-title text-center">nilai</h5>
            <form method="POST">
                <div class="mb-3">
                    <input class="form-control" type="number" name="nilai-siswa" id="nilai" placeholder="Masukkan nilai" value="<?= $nilai ?>">
                </div>
                
                <button class=" btn btn-primary w-100"> Hitung </button>
            </form>
            <?php
            if ($kategori !== null): ?>
                <div class="alert alert-success text-center mt-3">
                    Hasil : <?= $kategori ?>
                </div>
            <?php endif; ?>
        






        </div>
</body>
</html>



