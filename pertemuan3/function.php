<?php

$nasi_goreng = 0;
$total_bayar = 0;
$total_nasi_goreng = 0;
$total_mie_ayam = 0;
$mie_ayam = 0;




function ambildata($name) {
    $ambil_semua = $_POST[$name];
    return $ambil_semua;
}
//biar bisa dapet inputan data dari user lewat form
function hitung_total($jumlah, $harga){
    $total = $jumlah * $harga;
    return $total;
}
//biar bisa menghitung total harga dari barang yang dibeli user
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $total_nasi_goreng = hitung_total(ambildata("Nasi-goreng"), 12000);
    $total_mie_ayam = hitung_total(ambildata("Mie-Ayam"), 15000);
    $total_es_jeyuk = hitung_total(ambildata("es-jeyuk"), 10000);

    $total_bayar = $total_nasi_goreng + $total_mie_ayam + $total_es_jeyuk;
}



//($name) adalah parameter. parameter adalah variabel yang digunakan di dalam function untuk menerima data dari luar saat function dipanggil.

?>




<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Kasir Kantin</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body class="bg-light">
<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-5">
            <div class="card shadow">

                <div class="card-header bg-primary text-white">
                    <h5 class="mb-0">Kasir Kantin Sekolah</h5>
                </div>

                <div class="card-body">
                    <div class="menu mb-3">
                        Nasi Goreng | Rp12.000 <br>
                        Mie Ayam | Rp15.000
                    </div>

                    <form method="POST">
                        <div class="mb-3">
                            <label>Nasi Goreng</label>
                            <input type="number" class="form-control" name="Nasi-goreng" min="0">
                        </div>

                        <div class="mb-3">
                            <label>Mie Ayam</label>
                            <input type="number" class="form-control" name="Mie-Ayam" min="0">
                        </div>

                        <div class="mb-3">
                            <label>es jeyuk</label>
                            <input type="number" class="form-control" name="es-jeyuk" min="0">
                        </div>

                        <button class="btn btn-primary w-100">Hitung Total</button>
                    </form>
                </div>

                <?php if ($total_bayar !== 0): ?>

                <!-- CARD FOOTER -->
                <div class="card-footer">
                    <p>
                        Nasi Goreng :
                        <?= ambildata("Nasi-goreng") ?> × Rp<?= number_format($total_nasi_goreng, 0, ',', '.') ?>
                    </p>

                    <p>
                        Mie Ayam :
                        <?= ambildata("Mie-Ayam") ?> × Rp<?= number_format($total_mie_ayam, 0, ',', '.') ?>
                    </p>

                    <p>
                        es jeyuk :
                        <?= ambildata("es-jeyuk") ?> × Rp<?= number_format($total_es_jeyuk, 0, ',', '.') ?>
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