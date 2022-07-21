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
    <title>Delete Buku</title>
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
        <div class="halaman row row-cols-2 row-cols-md-2 g-3 mt-3">
                <?php
    if (mysqli_num_rows($result) > 0) {
    ?>
                <table class="table">
                    <thead>
                        <th scope="col">No</th>
                        <th scope="col">Kode Induk</th>
                        <th scope="col">Judul</th>
                        <th scope="col">Penerbit</th>
                        <th scope="col">Jumlah Halaman</th>
                        <th scope="col">ISBN</th>
                        <th scope="col">Tahun Terbit</th>
                        <th scope="col">Tgl Masuk</th>
                        <th scope="col">Keterangan</th>
                    </thead>
                    <?php
        $i=1;
        while ($row = mysqli_fetch_array($result)) {
        ?>
                    <tbody>
                        <tr>
                            <th scope="row"><?php echo $i ?></th>
                            <td><?php echo $row['kode_induk'] ?></td>
                            <td><?php echo $row['judul'] ?></td>
                            <td><?php echo $row['penerbit'] ?></td>
                            <td><?php echo $row['jum_hal'] ?></td>
                            <td><?php echo $row['isbn'] ?></td>
                            <td><?php echo $row['tahun_terbit'] ?></td>
                            <td><?php echo $row['tgl_masuk'] ?></td>
                            <td><a href="deleteBuku_proses.php?id=<?php echo $row['id']; ?>"><button type="button"
                                        class="btn btn-danger">Hapus Buku</button></a></td>
                        </tr>
                    </tbody>
                    <?php
        $i++;
        }
        ?>
                </table>
                <?php
    }
    else{
        echo "Data tidak ditemukan";
    }
    ?>
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