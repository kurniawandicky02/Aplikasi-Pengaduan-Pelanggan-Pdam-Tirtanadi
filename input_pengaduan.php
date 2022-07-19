<?php
$conn = mysqli_connect('localhost','root', '', 'db_keluhan');

$no = mysqli_query($conn, "SELECT nomor FROM tbl_data_pengaduan ORDER BY nomor DESC");
$kd_anggota = mysqli_fetch_array($no);
$Kode = $kd_anggota['nomor'];
$urut = substr($Kode, 0, 2);
$tambah = (int) $urut +1;


if(strlen($tambah) == 1){
  $format = ""."".$tambah;


}else if (strlen($tambah) == 2){
  $format = ""."".$tambah;
}else{
  $format = "".$tambah;
}

$no = mysqli_query($conn, "SELECT npa FROM tbl_data_pengaduan ORDER BY npa DESC");
$kd_anggota = mysqli_fetch_array($no);
$Kode = $kd_anggota['npa'];
$urut = substr($Kode, 6, 6);
$tambah = (int) $urut +1;


if(strlen($tambah) == 1){
  $formats = "280101"."000".$tambah;


}else if (strlen($tambah) == 2){
  $formats = "280101"."00".$tambah;
}else{
  $formats = "280".$tambah;
}

// Create database connection using config file
include_once("koneksi.php");


?>

<html lang="en">
	<head>
    <link href="http://fonts.googleapis.com/css?family=Open+Sans:400,700,600" rel="stylesheet" type="text/css">
    <link href="//netdna.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
    
<link rel="stylesheet" href="css/pengaduan.css">
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
	<body>
	<div id="card">
    <div id="card-content">
      <div id="card-title">
        <h2>Tambah Data Pengaduan</h2>
        <div class="underline-title"></div>
      </div>
			
      <br>
  		<form action="proses_pengaduan.php" method="post">
    <table border="0">
      <tr>
       <label>No</label>
        <input type="text" name ="nomor" value="<?php echo $format; ?>"readonly/ class="form-control">
        <br>
        </td>
      </tr>
     
      <tr>
       <label>Npa</label>
      <input type="text" name ="npa" value="<?php echo $formats; ?>" class="form-control">
      <br>
        </td>
      </tr>
      <td>
        <tr>
      <tr>
       <label>Nama</label>
        <input type="text" value="" class="form-control" name="nama">
        <br>
        </td>
      </tr>
       <td>
        <tr>
      <tr>
       <label>Alamat</label>
        <input type="text" value="" class="form-control" name="alamat">
        <br>
        <tr>
        <label>Nomor Rumah</label>
        <input type="text" value="" class="form-control" name="no_rumah">
        <br>
        </td>
      </tr>
    
      <tr>
        <label>Tanggal Keluhan</label>
        <input type="date" value="" class="form-control" name="tgl_keluhan">
        <br>
        </td> 
      </tr>
    
        <tr>
      <tr>
       <label>Keluhan</label>
          <select name="keluhan" value="" class="form-control">
            <option value="">Pilih</option>
            <option value="Air Mati">Air Mati</option>
            <option value="Air Keruh">Air Keruh</option>
            <option value="Air Berbau">Air Berbau</option>
            <option value="Meter Mati">Meter Mati</option>
            <option value="Kaca Meter Kabur">Kaca Meter Kabur</option>
            <option value="Tinggikan Letak Meter">Tinggikan Letak Meter</option>
            <option value="Air Kecil">Air Kecil</option>
            <option value="Pindah Letak Meter">Pindah Letak Meter</option>
            <option value="Pasang Baru">Pasang Baru</option>
            <option value="Kaca Meter Pecah">Kaca Meter Pecah</option>
            <option value="Air Tidak Normal">Air Tidak Normal</option>
            <option value="Pipa Bocor">Pipa Bocor</option>
            <option value="Komplain Tagihan">Komplain Tagihan</option>
            <option value="Stop kran Tidak Berfungsi">Stop Kran Tidak Berfungsi</option>
          </select>
    
      </tr>

    </table>
    <input id="submit-btn" type="submit" name="Simpan" value="Simpan" />

	</body>
  </html>
