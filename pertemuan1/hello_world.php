<!-- php -->
<?php

$hasil = null; //inisialisasi variabel hasil
//mengecek apakah form telah disubmit, jika berisi methode post maka ambil datanya
  if ($_SERVER["REQUEST_METHOD"] == "POST") {
    //ambil data angka1 dan angka2 dari form
    $angka1 = $_POST['angka1'];
    $angka2 = $_POST['angka2'];
    //lakukan perhitungan penjumlahan
    
    $operator = $_POST['operator']; //buat pilih +, -, *, /
    if ($operator == '+') {
        $hasil = $angka1 + $angka2;
    } elseif ($operator == '-') {
        $hasil = $angka1 - $angka2;
    } elseif ($operator == '*') {
        $hasil = $angka1 * $angka2;
    } elseif ($operator == '/') {
        if ($angka2 != 0) {
            $hasil = $angka1 / $angka2;
        } else {
            echo "Error: hasil tidak ditemukan"; //error jika tidak bisa dibagi 0
        }
    }
  }
?>



<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
  </head>
  <body>
    <div class="container bg-light d-flex justify-content-center align-items-center min-vh-100" >
        <div class="card shadow" style="width: 40%;">
            <div class="card-body">
                <h2 class="card-title text-center fw-bold fs-2">kalkulaktor</h2>
                <form method="POST">
                    <div>
                        <input class="form-control" type="number" name="angka1" id="angka1" placeholder="Angka Pertama" value="<?= $angka1 ?>">
                    </div>
                    <div class="mt-3">
                        <input class="form-control" type="number" name="angka2" id="angka2" placeholder="Angka kedua" value="<?= $angka2 ?>">
                    </div>

                    <select name="operator" class="form-control mt-3">
                          <option value="+">tambah</option>
                          <option value="/">bagi</option>
                          <option value="-">kurang</option>
                          <option value="*">kali</option>
                    </select>
                    

                    <button class="btn btn-primary w-100 mt-3">Hitung</button>
                </form>
                <?php
                if($hasil !== null): ?>
                    <div class="alert alert-success text-center mt-3">
                        hasil : <?= $hasil ?>
                    </div>
                <?php endif; ?> 
            </div>
        </div>

    </div>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
  </body>



</html>