<?php

// include database connection file
include_once("koneksi.php");

// Check if form is submitted for user update, then redirect to homepage after update

if(isset($_POST['update']))
{   
    $nomor=$_POST['nomor'];
    $npa=$_POST['npa'];
    $nama=$_POST['nama'];
    $alamat=$_POST['alamat'];
      $no_rumah=$_POST['no_rumah'];
    $tgl_keluhan=$_POST['tgl_keluhan'];
    $keluhan=$_POST['keluhan'];

 
    
    // update user data
     $result = mysqli_query($mysqli, "UPDATE tbl_data_pengaduan SET nomor='$nomor',nama='$nama',alamat='$alamat', no_rumah='$no_rumah', tgl_keluhan='$tgl_keluhan',keluhan='$keluhan' WHERE npa=$npa");

 // Redirect to homepage to display updated user in list
    echo "<script> 
alert('Data berhasil di edit');
           
            document.location.href = 'tampil_pengaduan.php';
        </script>";
}
?>
<?php
// Display selected user data based on nis
// Getting nis from url
$npa = $_GET['npa'];

// Fetech user data based on nis
$result = mysqli_query($mysqli, "SELECT * FROM tbl_data_pengaduan WHERE npa=$npa");

while($user_data = mysqli_fetch_array($result))
{
    $nomor = $user_data['nomor'];
  
    $npa = $user_data['npa'];
    $nama = $user_data['nama'];
    $alamat = $user_data['alamat'];
      $no_rumah = $user_data['no_rumah'];
  
    $tgl_keluhan = $user_data['tgl_keluhan'];
    $keluhan = $user_data['keluhan'];
    
}
?>
<html>
<head>  
    <title>Edit User Data</title>
</head>

<body>
    <a class="fa fa-home leftNavIcon" href="tampil_pengaduan.php"></a>
    <br/>
<html lang="en">
  <head>
  <body>
  <div id="card">
    <div id="card-content">
      <div id="card-title">
        <h2>Edit Data Pengaduan</h2>
        <div class="underline-title"></div>
      </div>
      <br>
<link rel="stylesheet" href="css/pengaduan.css">
 <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
 <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <form name="update" method="post" action="edit_pengaduan.php">
        <table border="0">
        <tr>
        
        <label>Nomor</label>
         <input type="text" name="nomor" value="<?php echo $nomor?>" readonly class="form-control">
         <br>
        </td>
      </tr>
         
       <tr>
        <label>Npa</label>
          <input type="text" name="npa" value="<?php echo $npa;?>"class="form-control">
          <br>
       </td>
      </tr>
      <td>
        <tr>
      <tr>
        <label>Nama</label>
          <input type="text" name="nama" value="<?php echo $nama;?>"class="form-control">
          <br>
         </td>
      </tr>
      <td>
        <tr>
      <tr>
        
        <label>Alamat</label>
         <input type="text" name="alamat" value="<?php echo $alamat?>"class="form-control">
         <br>
        </td>
      </tr>
      <tr>
        
        <label>Nomor Rumah</label>
         <input type="text" name="no_rumah" value="<?php echo $no_rumah?>"class="form-control">
         <br>
        </td>
      </tr>
      
       <tr>
        <label>Tanggal Keluhan</label>
         <input type="date" name="tgl_keluhan"class="form-control">
         <br>
        </td>
      </tr>
      <td>
        <tr>
      <tr>
         <label>Keluhan</label>
        <select name="keluhan"class="form-control">
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
     
  </td>
       
                <td><input type="hidden" name="npa" value="<?php echo $_GET['npa'];?>"></td>

              <td colspan="0" align="center"><input id="submit-btn" type="submit" name="update" value="Update" /></td>
           
        </table>
    </form>
</body>
</html>  