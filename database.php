<?php
$servername = "localhost";
$username = 'heri' ;
$password = '27oktober' ;
$dbname = "pustaka";

$conn = mysqli_connect($servername, $username, $password, "$dbname");
if(!$conn){
	die('Tidak bisa terhubung ke MySQL:'.mysqli_error());
}
?>