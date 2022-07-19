
<?php
$conn = mysqli_connect('localhost','root', '', 'db_keluhan');

$no = mysqli_query($conn, "SELECT nomor FROM tbl_data_pegawai ORDER BY nomor DESC");



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


$no = mysqli_query($conn, "SELECT nipp FROM tbl_data_pegawai ORDER BY nipp DESC");
$kd_anggota = mysqli_fetch_array($no);
$Kode = $kd_anggota['nipp'];
$urut = substr($Kode, 6, 9);
$tambah = (int) $urut +1;


if(strlen($tambah) == 1){
  $formats = "117601"."620".$tambah;


}else if (strlen($tambah) == 2){
  $formats = "117601"."62".$tambah;
}else{
  $formats = "117601".$tambah;
}


// Create database connection using config file
include_once("koneksi.php");

?>

<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">
     <link rel="stylesheet" href="login.css">
    <link href="http://fonts.googleapis.com/css?family=Open+Sans:400,700,600" rel="stylesheet" type="text/css">
    <link href="//netdna.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
    <link href="css/app.css" rel="stylesheet" type="text/css">

 <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

      <link rel="stylesheet" href="css/pegawai.css">
  <body>
    
  <div id="card">
    <div id="card-content">
      <div id="card-title">
        <h2>Tambah Data Pegawai</h2>
        <div class="underline-title"></div>
      </div>
   <br>
  
      <form action="proses_data_pegawai.php" method="post">
    <table border="0">
     <tr>
       <label>No</label>
        <input type="text" name ="nomor" value="<?php echo $format; ?>"readonly/ class="form-control">
        <br>
        </td>
      </tr>
      <tr>
        <label>Nipp</label>
      <input type="text" name ="nipp" value="<?php echo $formats; ?>" class="form-control">
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
      <tr>
       <label>Golongan</label>
        <select name="golongan" value="" class="form-control">
        
            <option value="">Pilih</option>
            <option value="C-1">C-1</option>
            <option value="C-2">C-2</option>
            <option value="C-3">C-3</option>
            <option value="C-4">C-4</option>
            <option value="D-1">D-1</option>
            
          </select>
          <br>
        </td>
      </tr>
      <tr>
        <label>Jabatan</label>
        <input type="text" value="" class="form-control" name="jabatan">
        <br>
        </td>
      </tr>
    <tr>
       <label>Masa Bekerja</label>
        <input type="text" value="" class="form-control" name="masa">
        

    </table>
    <input id="submit-btn" type="submit" name="Simpan" value="Simpan" />

  </body>
