<!-- php -->
<?php

$hargabelanja = null;

function ambildata($name) {
    $ambil_semua = $_POST[$name] ?? 0;
    return $ambil_semua;
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $hargabelanja = ambildata("jumlahbelanja");
    if ($hargabelanja >= 200000) {
        $diskon = 0.2 * $hargabelanja;
        $totalbayar = $hargabelanja - $diskon;
        $hasil = "Selamat Anda Mendapatkan Diskon 20% <br> Total Bayar Setelah Diskon: Rp " . number_format($totalbayar, 0, ',', '.');
    } elseif ($hargabelanja >= 100000) {
        $diskon = 0.1 * $hargabelanja;
        $totalbayar = $hargabelanja - $diskon;
        $hasil = "Selamat Anda Mendapatkan Diskon 10% <br> Total Bayar Setelah Diskon: Rp " . number_format($totalbayar, 0, ',', '.');
    } else {
        $hasil = "Maaf, Anda Tidak Mendapatkan Diskon <br> Total Bayar: Rp " . number_format($hargabelanja, 0, ',', '.');
    }
}

?>



<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>diskon belanja</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
  </head>
  <body>
    <div class="container bg-light d-flex justify-content-center align-items-center min-vh-100" >
        <div class="card shadow" style="width: 40%;">
            <div class="card-body">
                <h2 class="card-title text-center fw-bold fs-2">diskon belanja</h2>
                <form method="POST">
                    <div>
                        <input class="form-control" type="number" name="jumlahbelanja" id="jumlahbelanja" placeholder="masukkan jumlah belanja" value="<?= $nilai ?>">
                    </div>
                    

                    <button class="btn btn-primary w-100 mt-3">Cek</button>
                </form>
                <?php
                if ($hargabelanja !== null): ?>
                    <div class="alert alert-success text-center mt-3">
                     <?= $hasil ?>
                    </div>
                <?php endif; ?> 
            </div>
        </div>

    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
  </body>



</html>