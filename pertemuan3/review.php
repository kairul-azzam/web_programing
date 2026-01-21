<?php
$total_bayar = 0;
$total_nasi_goreng = 0;
$total_mie_ayam = 0;
$nasi_goreng = 0;
$mie_ayam = 0;
$harga_nasi_goreng = 0;
$harga_mie_ayam = 0;

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // ambil data dari form
    $nasi_goreng = $_POST["Nasi-goreng"] ?? 0;
    $mie_ayam   = $_POST["Mie-Ayam"] ?? 0;

    // harga
    $harga_nasi_goreng = 12000;
    $harga_mie_ayam   = 15000;

    // hitung total
    $total_nasi_goreng = $nasi_goreng * $harga_nasi_goreng;
    $total_mie_ayam   = $mie_ayam * $harga_mie_ayam;

    // total bayar
    $total_bayar = $total_nasi_goreng + $total_mie_ayam;
}
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

                        <button class="btn btn-primary w-100">Hitung Total</button>
                    </form>
                </div>

                <?php if ($total_bayar !== 0): ?>

                <!-- CARD FOOTER -->
                <div class="card-footer">
                    <p>
                        Nasi Goreng :
                        <?= $nasi_goreng ?> × Rp<?= number_format($harga_nasi_goreng, 0, ',', '.') ?>
                        = <strong>Rp<?= number_format($total_nasi_goreng, 0, ',', '.') ?></strong>
                    </p>

                    <p>
                        Mie Ayam :
                        <?= $mie_ayam ?> × Rp<?= number_format($harga_mie_ayam, 0, ',', '.') ?>
                        = <strong>Rp<?= number_format($total_mie_ayam, 0, ',', '.') ?></strong>
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
