<!doctype html>
<html lang="en">

<head>
    <title>Berhasil</title>
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
        <div class="isi">
            <div class="position-relative flex items-center justify-content-center bg-primary py-5">
                <img src="images/logo.png" class="position-absolute" style="left: 8px; width: 120px; height: 120px;"
                    alt="logo">
                <h2 class="" style="color: red;">PERPUSTAKAAN <span class="text-white">INDONESIA</span></h2>
            </div>
            <div class="menu">
                <nav class="navbar navbar-expand-lg navbar-light bg-primary">
                    <div class="container-fluid">
                        <a class="navbar-brand" href="index.php">PERPUSTAKAAN</a>
                        <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                            data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                            aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse" id="navbarSupportedContent">
                            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                                <li class="nav-item">
                                    <a class="nav-link active" aria-current="page" href="index.php">Home</a>
                                </li>
                                <li class="nav-item dropdown">
                                    <a class="nav-link active dropdown-toggle" href="#" id="navbarDropdown"
                                        role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                        Daftar Buku
                                    </a>
                                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                        <li><a class="dropdown-item" href="insert_buku.php">Insert Buku</a></li>
                                        <li><a class="dropdown-item" href="#">Update Buku</a></li>
                                        <li><a class="dropdown-item" href="#">Delete Buku</a></li>
                                        <li>
                                            <hr class="dropdown-divider">
                                        </li>
                                        <li><a class="dropdown-item" href="daftar_buku.php">Daftar Buku</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                    </div>
                </nav>
            </div>
            <div class="halaman">
                <div class="container row row-cols-1 row-cols-md-1 g-4 mt-5">
                    <?php
include_once 'database.php';
if(isset($_POST['save'])){
    // var_dump($_POST);
    // var_dump($_FILES);
    // die;
	
		try {
    $kode_induk = $_POST['kode_induk'];
	$judul = $_POST['judul'];
	$penerbit = $_POST['penerbit'];
	$pengarang = $_POST['pengarang'];
	$jum_hal = $_POST['jum_hal'];
	$isbn = $_POST['isbn'];
	$tahun_terbit = $_POST['tahun_terbit'];
	$tgl_masuk = $_POST['tgl_masuk'];
	// $gambar = $_FILES['gambar'];

    $query = "INSERT INTO tbbuku(
		kode_induk, judul, penerbit, pengarang, 
		jum_hal, isbn, tahun_terbit, tgl_masuk) VALUES('$kode_induk', '$judul', 
		'$penerbit', '$pengarang', '$jum_hal', '$isbn', '$tahun_terbit', '$tgl_masuk')";

	$sql = mysqli_query($conn, $query);
            echo '<div class="alert alert-success" role="alert">';
            echo '<h4 class="alert-heading">Well done!</h4>';
            echo '<p>Aww yeah, Data Kamu Berhasil Disimpan!</p>';
            echo '<hr>';
            echo '<p class="mb-0">Ingin Tambah Data Lagi? <a href="insert_buku.php">Disini</a></p>';
            echo '<p class="mb-0">Ingin Ke Home? <a href="index.php">Disini</a></p>';
            echo '<p class="mb-0">Ingin Lihat Data? <a href="daftar_buku.php">Disini</a></p>';
            echo '</div>';
        } catch (\Throwable) {
            echo '<div class="alert alert-danger" role="alert">';
            echo '<h4 class="alert-heading">Gagal!</h4>';
            echo '<p>Ouh No, Data Kamu Tidak Berhasil Disimpan!</p>';
            echo '<hr>';
            echo '<p class="mb-0">Ingin Kembali Lagi? <a href="insert_buku.php">Disini</a></p>';
            echo '<p class="mb-0">Ingin Ke Home? <a href="index.php">Disini</a></p>';
            echo '</div>';
        }
}
?>
                </div>
            </div>
            <footer class="bd-footer py-4 py-md-5 mt-5 bg-light">
                <div class="container py-4 py-md-5 px-4 px-md-3">
                    <div class="row">
                        <div class="col-lg-3 mb-3">
                            <a class="d-inline-flex align-items-center mb-2 link-dark text-decoration-none" href="/"
                                aria-label="Bootstrap">
                                <img src="images/logo.png" class="" style="left: 8px; width: 60px; height: 60px;"
                                    alt="logo">
                                <span class="fs-5">Bootstrap</span>
                            </a>
                            <ul class="list-unstyled small text-muted">
                                <li class="mb-2">Designed and built by informatics student <a
                                        href="https://facebook.com/herikondk1">Heri Ramadhan</a>
                            </ul>
                        </div>
                        <div class="col-6 col-lg-2 offset-lg-1 mb-3">
                            <h5>Hubungi</h5>
                            <ul class="list-unstyled">
                                <li class="mb-2"><a href="https://wa.me/6282211470202"><i class="fa fa-whatsapp"
                                            aria-hidden="true"></i> Whatsapp</a></li>
                                <li class="mb-2"><a href="https://facebook.com/herikondk1"><i class="fa fa-facebook"
                                            aria-hidden="true"></i> Facebook</a></li>
                                <li class="mb-2"><a href="https://instagram.com/her1god"><i class="fa fa-instagram"
                                            aria-hidden="true"></i> Instagram</a></li>
                            </ul>
                        </div>
                        <div class="col-6 col-lg-2 offset-lg-1 mb-3">
                            <h5>Alamat Rumah</h5>
                            <ul class="list-unstyled">
                                <li class="mb">Sumatera Barat, Lubuk Sikaping</li>
                                <li class="mb">Jln. Tikalak, Perumahan Talago Mukminin</li>
                                <li class="mb">Blok No. C7</li>
                                <li class="mb">Kode POS 26313</li>
                            </ul>
                        </div>
                        <div class="col-6 col-lg-2 offset-lg-1 mb-3">
                            <h5>Alamat Sekarang</h5>
                            <ul class="list-unstyled">
                                <li class="mb">Sumatera Barat, Padang</li>
                                <li class="mb">Jln. Bungo Mas, Koto Panjang Ikua Koto</li>
                                <li class="mb">Blok No. A71</li>
                                <li class="mb">Kode POS 25176</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </footer>
            <!-- <footer class="container bg-primary mt-5">
                <p class="text-center tebal" style="font-weight: bold;">21343050, Heri Ramadhan <br> FT UNP <br> </p>
                <p class="text-left" style="font-weight: bold">
                    Hubungi Kami
                    <br>
                    <i class="fa fa-whatsapp" aria-hidden="true" style="font-weight: bold"> 082211470202</i>
                    <br>
                    <i class="fa fa-facebook" aria-hidden="true" style="font-weight: bold"> Heri Ramadhan</i>
                    <br>
                    <i class="fa fa-instagram" aria-hidden="true" style="font-weight: bold"> her1god</i>
                </p>
            </footer> -->
        </div>
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