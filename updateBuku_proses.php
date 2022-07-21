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
include_once("database.php");
$id = $_GET['id'];
if(isset($_POST['update']))
{	
	
	
	// Redirect to homepage to display updated user in list
	// if ($check) {
	// 	header("Location:update_buku.php");
	// } else {
	// 	print("Gak bisa");
	// }
    try {
        $ki=$_POST['kode_induk'];
	$jdl=$_POST['judul'];
	$pn=$_POST['penerbit'];
	$pg=$_POST['pengarang'];
	$jh=$_POST['jum_hal'];
	$isbn=$_POST['isbn'];
	$tt=$_POST['tahun_terbit'];
	$tm=$_POST['tgl_masuk'];
		
	// update user data
	$check = mysqli_query($conn, "UPDATE tbbuku SET kode_induk='$ki'
    ,judul='$jdl',penerbit='$pn',pengarang='$pg',jum_hal='$jh' ,
    isbn='$isbn' ,tahun_terbit='$tt' ,tgl_masuk='$tm' WHERE id='$id'");
    } catch (\Throwable $th) {
        echo '<script>
        alert("Gagal Update Data!");
        </script>';
    }
}
?>

<?php
// Display selected user data based on id
// Getting id from url

 
// Fetech user data based on id
$result = mysqli_query($conn, "SELECT * FROM tbbuku WHERE id='". $_GET['id']."'");
?>
<!doctype html>
<html lang="en">

<head>
    <title>Proses Edit Buku</title>
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
        <div class="halaman row row-cols-2 row-cols-md-2 g-4 mt-3">
                <form method="POST" action="">
                    <?php
                    while ($row = mysqli_fetch_array($result)) {
                        ?>
                    <h4><b>Edit DataBuku: <?php echo $row['judul']; ?></b></h4>
                    <div class="row mb-2">
                        <label for="formGroupExampleInput" class="col-sm-2 col-form-label">Kode Induk</label>
                        <div class="col-sm-10">
                            <input type="text" value="<?php echo $row['kode_induk']; ?>" class="form-control" id="formGroupExampleInput" name="kode_induk">
                        </div>
                    </div>
                    <div class="row mb-2">
                        <label for="formGroupExampleInput" class="col-sm-2 col-form-label">Judul</label>
                        <div class="col-sm-10">
                            <input type="text" value="<?php echo $row['judul']; ?>" class="form-control" id="formGroupExampleInput" name="judul">
                        </div>
                    </div>
                    <div class="row mb-2">
                        <label for="formGroupExampleInput" class="col-sm-2 col-form-label">Penerbit</label>
                        <div class="col-sm-10">
                            <input type="text" value="<?php echo $row['penerbit']; ?>" class="form-control" id="formGroupExampleInput" name="penerbit">
                        </div>
                    </div>
                    <div class="row mb-2">
                        <label for="formGroupExampleInput" class="col-sm-2 col-form-label">Pengarang</label>
                        <div class="col-sm-10">
                            <input type="text" value="<?php echo $row['pengarang']; ?>" class="form-control" id="formGroupExampleInput" name="pengarang">
                        </div>
                    </div>
                    <div class="row mb-2">
                        <label for="formGroupExampleInput" class="col-sm-2 col-form-label">Jumlah Halaman</label>
                        <div class="col-sm-10">
                            <input type="text" value="<?php echo $row['jum_hal']; ?>" class="form-control" id="formGroupExampleInput" name="jum_hal">
                        </div>
                    </div>
                    <div class="row mb-2">
                        <label for="formGroupExampleInput" class="col-sm-2 col-form-label">ISBN</label>
                        <div class="col-sm-10">
                            <input type="text" value="<?php echo $row['isbn']; ?>" class="form-control" id="formGroupExampleInput" name="isbn">
                        </div>
                    </div>
                    <div class="row mb-2">
                        <label for="formGroupExampleInput" class="col-sm-2 col-form-label">Tahun Terbit</label>
                        <div class="col-sm-10">
                            <input type="text" value="<?php echo $row['tahun_terbit']; ?>" class="form-control" id="formGroupExampleInput" name="tahun_terbit">
                        </div>
                    </div>
                    <div class="row mb-2">
                        <label for="formGroupExampleInput" class="col-sm-2 col-form-label">Tanggal Masuk</label>
                        <div class="col-sm-10">
                            <input type="date" value="<?php echo $row['tgl_masuk']; ?>" class="form-control" id="formGroupExampleInput" name="tgl_masuk">
                        </div>
                    </div>
                        <?php
                    }
                    ?>
                    <button type="submit" class="btn btn-primary" name="update">Simpan</button>
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