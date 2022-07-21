<?php
session_start();

if (isset($_SESSION['username'])) {
    // header("Location: update_buku.php");
} else {
    echo '<script type ="text/JavaScript">';  
    echo 'alert("Hayolo mau nerobos? Login Dulu Dek!")';  
    echo '</script>';
    exit();
}
?>
<!doctype html>
<html lang="en">

<head>
    <title>Insert Buku</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS v5.2.0-beta1 -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css"
        integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <link rel="stylesheet" href="./css/gaya.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

</head>

<body>
    <div class="container-fluid">
        <?php
        include 'header.php';
        ?>
        <div class="container row row-cols-1 row-cols-md-1 g-4 mt-5">
            <form method="POST" action="proses_input.php">
                <h4><b>Input DataBuku</b></h4>
                <div class="row mb-2">
                    <label for="formGroupExampleInput" class="col-sm-2 col-form-label">Kode Induk</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="formGroupExampleInput" name="kode_induk" required>
                    </div>
                </div>
                <div class="row mb-2">
                    <label for="formGroupExampleInput" class="col-sm-2 col-form-label">Judul</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="formGroupExampleInput" name="judul" required>
                    </div>
                </div>
                <div class="row mb-2">
                    <label for="formGroupExampleInput" class="col-sm-2 col-form-label">Penerbit</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="formGroupExampleInput" name="penerbit" required>
                    </div>
                </div>
                <div class="row mb-2">
                    <label for="formGroupExampleInput" class="col-sm-2 col-form-label">Pengarang</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="formGroupExampleInput" name="pengarang" required>
                    </div>
                </div>
                <div class="row mb-2">
                    <label for="formGroupExampleInput" class="col-sm-2 col-form-label">Jumlah Halaman</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="formGroupExampleInput" name="jum_hal" required>
                    </div>
                </div>
                <div class="row mb-2">
                    <label for="formGroupExampleInput" class="col-sm-2 col-form-label">ISBN</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="formGroupExampleInput" name="isbn" required>
                    </div>
                </div>
                <div class="row mb-2">
                    <label for="formGroupExampleInput" class="col-sm-2 col-form-label">Tahun Terbit</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="formGroupExampleInput" name="tahun_terbit" required>
                    </div>
                </div>
                <div class="row mb-2">
                    <label for="formGroupExampleInput" class="col-sm-2 col-form-label">Tanggal Masuk</label>
                    <div class="col-sm-10">
                        <input type="date" class="form-control" id="formGroupExampleInput" name="tgl_masuk" required>
                    </div>
                </div>
                <!-- <div class="row mb-2">
                    <label for="formGroupExampleInput" class="col-sm-2 col-form-label">Gambar</label>
                    <div class="col-sm-10">
                        <input type="file" class="form-control" id="formGroupExampleInput" name="gambar">
                    </div>
                </div> -->
                <button type="submit" class="btn btn-primary" name="save">Simpan</button>
            </form>
        </div>
        <?php
        include 'footer.php';
        ?>
    </div>
    <!-- Bootstrap JavaScript Libraries -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js"
        integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous">
    </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.min.js"
        integrity="sha384-kjU+l4N0Yf4ZOJErLsIcvOU2qSb74wXpOhqTvwVx3OElZRweTnQ6d31fXEoRD1Jy" crossorigin="anonymous">
    </script>
</body>

</html>