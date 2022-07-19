<link rel="stylesheet" href="css/login.css">
<?php
include('koneksi.php');
$nomor = $_POST['nomor'];
$npa = $_POST['npa'];
$nama = $_POST['nama'];
$alamat = $_POST['alamat'];
$tgl_keluhan = $_POST['tgl_keluhan'];
$status = $_POST['status'];
$tgl_selesai = $_POST['tgl_selesai'];


$query = mysqli_query($mysqli, "INSERT INTO tbl_data_penanganan(nomor,npa, nama, alamat, tgl_keluhan, status, tgl_selesai) VALUES( '$nomor', '$npa', '$nama', '$alamat', '$tgl_keluhan', '$status', '$tgl_selesai')");

if($query){
 echo "<script>
	alert('Data berhasil di simpan');
	window.location.href='menu.php?page=crud/simpan';
	</script>";
}else{
 echo 'Data gagal diinput. Silakan coba lagi input <a href="index.php">di sini</a>';
}


?>