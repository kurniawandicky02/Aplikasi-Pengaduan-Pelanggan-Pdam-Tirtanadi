<link rel="stylesheet" href="css/login.css">
<?php
include('koneksi.php');
$nomor = $_POST['nomor'];
$npa = $_POST['npa'];
$nama = $_POST['nama'];
$alamat = $_POST['alamat'];
$no_rumah = $_POST['no_rumah'];
$tgl_keluhan = $_POST['tgl_keluhan'];
$keluhan = $_POST['keluhan'];


$query = mysqli_query($mysqli, "INSERT INTO tbl_data_pengaduan(nomor,npa, nama, alamat, no_rumah, tgl_keluhan, keluhan) VALUES( '$nomor', '$npa', '$nama', '$alamat', '$no_rumah', '$tgl_keluhan', '$keluhan')");

if($query){
 echo "<script>
	alert('Data berhasil di simpan');
	window.location.href='menu.php?page=crud/simpan';
	</script>";
}else{
 echo 'Data gagal diinput. Silakan coba lagi input <a href="index.php">di sini</a>';
}

?>