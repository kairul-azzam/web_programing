<!-- php -->
<?php

$kategori1 = null;
$kategori2 = null;
$kategori3 = null;
$kategori4 = null;
$kategori5 = null;
$kategori6 = null; //inisialisasi variabel hasil
//mengecek apakah form telah disubmit, jika berisi methode post maka ambil datanya
  if ($_SERVER["REQUEST_METHOD"] == "POST") {
    //ambil data angka1 dan angka2 dari form
    $nama = $_POST["nama"];
    $gambar_1 = $_POST["gambar1"];
    $gambar_2 = $_POST["gambar2"];
    $gambar_3 = $_POST["gambar3"];
    $gambar_4 = $_POST["gambar4"];
    $gambar_5 = $_POST["gambar5"];
    $gambar_6 = $_POST["gambar6"];

    //lakukan perhitungan penjumlahan
    $kategori1 = ($gambar_1 == 12) ? "benar" : "salah";
    $kategori2 = ($gambar_2 == 6) ? "benar" : "salah";
    $kategori3 = ($gambar_3 == 74) ? "benar" : "salah";
    $kategori4 = ($gambar_4 == 96) ? "benar" : "salah";
    $kategori5 = ($gambar_5 == 424) ? "benar" : "salah";
    $kategori6 = ($gambar_6 == 10) ? "benar" : "salah";
    if ($gambar_1 == 12) {
        $kategori1 = "benar";
    } else {
        $kategori1 = "salah";
    }
    if ($gambar_2 == 6) {
        $kategori2 = "benar";
    } else {
        $kategori2 = "salah";
    }
    if ($gambar_3 == 74) {
        $kategori3 = "benar";
    } else {
        $kategori3 = "salah";
    }
    if ($gambar_4 == 96) {
        $kategori4 = "benar";
    } else {
        $kategori4 = "salah";
    }
    if ($gambar_5 == 424) {
        $kategori5 = "benar";
    } else {
        $kategori5 = "salah";
    }
    if ($gambar_6 == 10) {
        $kategori6 = "benar";
    } else {
        $kategori6 = "salah";
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
    <div class="container shadow">
        <div class="mb-3">
            
         </div>
        <div class="card-body">
<form method="POST">
            Nama<input class="form-control" type="text" name="nama" id="" placeholder="Masukkan nama">
    <div class="row g-3">

        <div class="col-md-4">
            <div class="gambar1 border rounded p-2 text-center">
                <h5>Gambar 1</h5>
                <img src="https://d5t1imywkwxu8.cloudfront.net/121o47d1sfo1o.png" class="img-fluid mb-2">
                <input class="form-control" type="number" name="gambar1" placeholder="Masukkan angka">
            </div>
        </div>

        <div class="col-md-4">
            <div class="gambar2 border rounded p-2 text-center">
                <h5>Gambar 2</h5>
                <img src="https://www.warbyparker.com/learn/wp-content/uploads/2023/02/types-of-colorblindness.jpg" class="img-fluid mb-2">
                <input class="form-control" type="number" name="gambar2" placeholder="Masukkan angka">
            </div>
        </div>

        <div class="col-md-4">
            <div class="gambar3 border rounded p-2 text-center">
                <h5>Gambar 3</h5>
                <img src="https://colormax.org/wp-content/uploads/2019/07/color-blind-test.png" class="img-fluid mb-2">
                <input class="form-control" type="number" name="gambar3" placeholder="Masukkan angka">
            </div>
        </div>

        <div class="col-md-4">
            <div class="gambar4 border rounded p-2 text-center">
                <h5>Gambar 4</h5>
                <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQOvUnwdH6ydTXSLzBEX5KHrGZo5FHlx_DERA&s" class="img-fluid mb-2" width="70%">
                <input class="form-control" type="number" name="gambar4" placeholder="Masukkan angka">
            </div>
        </div>

        <div class="col-md-4">
            <div class="gambar5 border rounded p-2 text-center">
                <h5>Gambar 5</h5>
                <img src="https://www.covisn.com/wp-content/uploads/2021/02/Ishiahra_color_test_plate_6.webp" class="img-fluid mb-2">
                <input class="form-control" type="number" name="gambar5" placeholder="Masukkan angka">
            </div>
        </div>

        <div class="col-md-4">
            <div class="gambar6 border rounded p-2 text-center">
                <h5>Gambar 6</h5>
                <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTKNCJngBO1S-4QhX5SyFF__2dY3SWBf3vrow&s" class="img-fluid mb-5 mt-3" width="200%">
                <input class="form-control" type="number" name="gambar6" placeholder="Masukkan angka">
            </div>
        </div>

    </div>

    <button class="btn btn-primary w-100 mt-3">Periksa</button>
</form>


            <?php if ($kategori1 !== null): ?>
                <p>Nama : <?= $nama ?> </p>
                <div class="alert alert-success text-center mt-3">
                    <p>Hasil tes 1 : <?= $kategori1 ?></p>
                    <p>Hasil tes 2 : <?= $kategori2 ?></p>
                    <p>Hasil tes 3 : <?= $kategori3 ?></p>
                    <p>Hasil tes 4 : <?= $kategori4 ?></p>
                    <p>Hasil tes 5 : <?= $kategori5 ?></p>
                    <p>Hasil tes 6 : <?= $kategori6 ?></p>
                </div>

            <?php endif; ?>

            

            
        






        </div>
    </div>
    
</body>
</html>



