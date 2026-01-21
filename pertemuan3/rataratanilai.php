<?php






function ambildata($name) {
    $ambil_semua = $_POST[$name] ?? 0;
    return $ambil_semua;
}
//biar bisa dapet inputan data dari user lewat form
function hitung_ratarata($mtk, $b_indo, $produktif){
    $total = ($mtk + $b_indo + $produktif) / 3;
    return $total;
}
//biar bisa menghitung total harga dari barang yang dibeli user
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $total_ratarata = hitung_ratarata(ambildata("matematika"), ambildata("bahasa_indonesia"), ambildata("produktif"));
    $total_nilai = $total_ratarata;
}



//($name) adalah parameter. parameter adalah variabel yang digunakan di dalam function untuk menerima data dari luar saat function dipanggil.

?>




<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>rata rata nilai</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body class="bg-light">
<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-5">
            <div class="card shadow">

                <div class="card-header bg-primary text-white">
                    <h5 class="mb-0">rata rata nilai</h5>
                </div>

                <div class="card-body">
                    

                    <form method="POST">
                        <div class="mb-3">
                            <label>matematika</label>
                            <input type="number" class="form-control" name="matematika" min="0">
                        </div>

                        <div class="mb-3">
                            <label>bahasa indonesia</label>
                            <input type="number" class="form-control" name="bahasa_indonesia" min="0">
                        </div>

                        <div class="mb-3">
                            <label>produktif</label>
                            <input type="number" class="form-control" name="produktif" min="0">
                        </div>

                        

                        <button class="btn btn-primary w-100">Hitung Total</button>
                    </form>
                </div>

                <?php if ($total_nilai !== 0): ?>

                <!-- CARD FOOTER -->
                <div class="card-footer">
                    <p class="mb-0">rata rata nilai : <?= $total_nilai ?></p>
                    
                </div>
                <?php endif; ?>

            </div>
        </div>
    </div>

</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>