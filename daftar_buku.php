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

<?php
include_once 'database.php';
$result = mysqli_query($conn, "SELECT * FROM tbbuku");
?>
<!doctype html>
<html lang="en">

<head>
    <title>Daftar Buku</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS v5.2.0-beta1 -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css"
        integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <link rel="stylesheet" href="./css/gaya.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    <!-- <style type="text/css">
        .card-title {
            min-height: 100px;
        }

        .card-text {
            min-height: 120px;
        }
    </style> -->

</head>

<body>
    <div class="container-fluid">
        <?php
        include 'header.php';
        ?>
        <div class="halaman row row-cols-md-2 g-3 mt-3">
            <div class="container-fluid ">
                <h2 align="center">Data Buku</h2>
                <div class="row" id="load_data">
                    <?php
        include 'database.php';
        $query = "SELECT * FROM tbbuku ORDER BY id ASC";
        $tampung1 = $conn->prepare($query);
        $tampung1->execute();
        $tampung2 = $tampung1->get_result();
        while ($row = $tampung2->fetch_assoc()) {
        //   $id = $row["id"];
          $kode_induk = $row["kode_induk"];
          $judul = $row["judul"];
          if (strlen($judul) > 60) {
            $judul = substr($judul, 0, 60) . "...";
          }
          $penerbit = $row["penerbit"];
          $pengarang = $row["pengarang"];
          $jum_hal = $row["jum_hal"];
          $isbn = $row["isbn"];
          $tahun_terbit = $row["tahun_terbit"];
          $tgl_masuk = $row["tgl_masuk"];
      ?>
                    <div class="col-sm-6 mb-3">
                        <div class="card">
                            <img src="images/book.png" class="card-img-top" alt="gambar">
                            <div class="card-body">
                                <h5 class="card-title" style="text-align: center;"><?php echo $judul; ?></h5>
                                <p class="card-text"><?php echo 'Kode Induk: '.$kode_induk ?></p>
                                <p class="card-text"><?php echo 'Penerbit: '.$penerbit; ?></p>
                                <p class="card-text"><?php echo 'Pengarang: '.$pengarang; ?></p>
                                <p class="card-text"><?php echo 'Jumlah Halaman: '.$jum_hal; ?></p>
                                <p class="card-text"><?php echo 'ISBN: '.$isbn; ?></p>
                                <p class="card-text"><?php echo 'Tahun Terbit: '.$tahun_terbit; ?></p>
                            </div>
                            <div class="card-footer">
                                <small class="text-muted">Post on <?php echo $tgl_masuk; ?></small>
                            </div>
                        </div>
                    </div>
                    <?php } ?>

                </div>
            </div>
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