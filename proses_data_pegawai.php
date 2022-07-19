<link rel="stylesheet" href="css/login.css">
<?php
include('koneksi.php');
$nomor = $_POST['nomor'];
$nipp = $_POST['nipp'];
$nama = $_POST['nama'];
$golongan = $_POST['golongan'];
$jabatan = $_POST['jabatan'];
$masa = $_POST['masa'];

$query = mysqli_query($mysqli, "INSERT INTO tbl_data_pegawai(nomor, nipp, nama, golongan, jabatan, masa) VALUES('$nomor', '$nipp', '$nama', '$golongan', '$jabatan', '$masa')");

if($query){
 echo "<script>
	alert('Data berhasil di simpan');
	window.location.href='menu.php?page=crud/simpan';
	</script>";
}else{
 echo 'Data gagal diinput. Silakan coba lagi input <a href="index.php">di sini</a>';
}


?>