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
    $total = $jumlah + $harga;
    return $total;
}
//biar bisa menghitung total harga dari barang yang dibeli user
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $total_gaji = hitung_total(ambildata("gaji"), ambildata("tunjangan"));

    $total_bayar = $total_gaji;
}



//($name) adalah parameter. parameter adalah variabel yang digunakan di dalam function untuk menerima data dari luar saat function dipanggil.

?>




<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>gaji karyawan</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body class="bg-light">
<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-5">
            <div class="card shadow">

                <div class="card-header bg-primary text-white">
                    <h5 class="mb-0">gaji karyawan</h5>
                </div>

                <div class="card-body">
                    

                    <form method="POST">
                        <div class="mb-3">
                            <label>gaji pokok</label>
                            <input type="number" class="form-control" name="gaji" min="0">
                        </div>

                        <div class="mb-3">
                            <label>tunjangan</label>
                            <input type="number" class="form-control" name="tunjangan" min="0">
                        </div>

                        

                        <button class="btn btn-primary w-100">Hitung Total</button>
                    </form>
                </div>

                <?php if ($total_bayar !== 0): ?>

                <!-- CARD FOOTER -->
                <div class="card-footer">
                    <p>
                        total gaji :
                        <?= number_format($total_bayar, 0, ',', '.') ?>
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