<link rel="stylesheet" href="pegawai/login.css">
<?php
include('koneksi.php');

$nama = $_POST['nama'];
$username = $_POST['username'];
$password = $_POST['password'];
$level = $_POST['level'];


$query = mysqli_query($mysqli, "INSERT INTO login( nama, username, password, level) VALUES(  '$nama', '$username', '$password', '$level')");

if($query){
 echo "<script>
	alert('Data berhasil di simpan');

	window.location.href='login.php?page=crud/simpan';
	
	</script>";
}else{
 echo 'Data gagal diinput. Silakan coba lagi input <a href="index.php">di sini</a>';
}


?>