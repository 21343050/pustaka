<?php
include 'database.php';
$id = $_GET['id'];
$result = mysqli_query($conn, "DELETE FROM tbbuku WHERE id='$id'") or die(mysql_error());

if ($result) {
    print"Berhasil Hapus";
    header("location: delete_buku.php");
} else {
    print"Gagal Hapus";
}
?>