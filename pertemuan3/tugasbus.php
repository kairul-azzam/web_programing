<?php

$total_bayar = 0;
$hitung_total = 0;
$total_pelajar = 0;
$total_umum = 0;
$total = 0;




function ambildata($name) {
    $ambil_semua = $_POST[$name] ?? 0;
    return $ambil_semua;
}
//biar bisa dapet inputan data dari user lewat form
function hitung_total($jumlah, $harga){
    $total = $jumlah * $harga;
    return $total;
}
//biar bisa menghitung total harga dari barang yang dibeli user
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $total_pelajar = hitung_total(ambildata("Pelajar"), 5000);
    $total_umum = hitung_total(ambildata("Umum"), 8000);

    $total_bayar = $total_pelajar + $total_umum;
}



//($name) adalah parameter. parameter adalah variabel yang digunakan di dalam function untuk menerima data dari luar saat function dipanggil.

?>




<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>tiket bus</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body class="bg-light">
<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-5">
            <div class="card shadow">

                <div class="card-header bg-primary text-white">
                    <h5 class="mb-0">tiket bus</h5>
                </div>

                <div class="card-body">
                    <div class="menu mb-3">
                        Pelajar | Rp5.000 <br>
                        Umum | Rp8.000
                    </div>

                    <form method="POST">
                        <div class="mb-3">
                            <label>Pelajar</label>
                            <input type="number" class="form-control" name="Pelajar" min="0">
                        </div>

                        <div class="mb-3">
                            <label>Umum</label>
                            <input type="number" class="form-control" name="Umum" min="0">
                        </div>

                        

                        <button class="btn btn-primary w-100">Hitung Total</button>
                    </form>
                </div>

                <?php if ($total_bayar !== 0): ?>

                <!-- CARD FOOTER -->
                <div class="card-footer">
                    <p>
                        Pelajar :
                        <?= ambildata("Pelajar") ?> × Rp<?= number_format($total_pelajar, 0, ',', '.') ?>
                    </p>

                    <p>
                        Umum :
                        <?= ambildata("Umum") ?> × Rp<?= number_format($total_umum, 0, ',', '.') ?>
                    </p>

                    <hr>

                    <p class="fs-5">
                        Total Bayar :
                        <strong>Rp<?= number_format($total_bayar, 0, ',', '.') ?></strong>
                    </p>

                    
                </div>
                <?php endif; ?>

            </div>
        </div>
    </div>

</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>