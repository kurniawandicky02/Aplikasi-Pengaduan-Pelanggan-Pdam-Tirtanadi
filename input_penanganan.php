<?php
$conn = mysqli_connect('localhost','root', '', 'db_keluhan');

$no = mysqli_query($conn, "SELECT nomor FROM tbl_data_penanganan ORDER BY nomor DESC");



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


$no = mysqli_query($conn, "SELECT npa FROM tbl_data_penanganan ORDER BY npa DESC");
$kd_anggota = mysqli_fetch_array($no);
$Kode = $kd_anggota['npa'];
$urut = substr($Kode, 6, 9);
$tambah = (int) $urut +1;


if(strlen($tambah) == 1){
  $formats = "280101"."000".$tambah;


}else if (strlen($tambah) == 2){
  $formats = "280101"."00".$tambah;
}else{
  $formats = "280101".$tambah;
}


// Create database connection using config file
include_once("koneksi.php");

?>

<html lang="en">
  <head>
     <link rel="stylesheet" href="login.css">
    <link href="http://fonts.googleapis.com/css?family=Open+Sans:400,700,600" rel="stylesheet" type="text/css">
    <link href="//netdna.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
    <link href="css/app.css" rel="stylesheet" type="text/css">
<link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" href="css/penanganan.css">
  <body>
    
  <div id="card">
    <div id="card-content">
      <div id="card-title">
        <h2>Tambah Data Penanganan</h2>
        <div class="underline-title"></div>
      </div>
      <br>
      
  
      <form action="proses_penanganan.php" method="post">
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
        </td>
        <tr>
         <label>Tanggal Keluhan</label>
        <input type="date" value="" class="form-control" name="tgl_keluhan">
        <br>
        </td> 
      </tr>

     <td>
      <tr>
        <tr>
          <label>Status</label>
         <select name="status" value="" class="form-control">
            <option value="">Pilih</option>
            <option value="Belum Selesai">Belum Selesai</option>
            <option value="Sudah Selesai">Sudah Selesai</option>
       
            
          </select>
          <br>
        </td>
      </tr>
     <td>
        <tr>
      <tr>
   <label>Tanggal Selesai</label>
        <input type="date" value="" class="form-control" name="tgl_selesai">
       
        </td> 
      </tr>

    </table>
    <input id="submit-btn" type="submit" name="Simpan" value="Simpan" />

  </body>
</html>
