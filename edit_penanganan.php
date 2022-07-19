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
    $tgl_keluhan=$_POST['tgl_keluhan'];
    $status=$_POST['status'];
    $tgl_selesai=$_POST['tgl_selesai'];

 
    
    // update user data
     $result = mysqli_query($mysqli, "UPDATE tbl_data_penanganan SET nomor='$nomor',nama='$nama',alamat='$alamat', tgl_keluhan='$tgl_keluhan', status='$status',tgl_selesai='$tgl_selesai' WHERE npa=$npa");

    // Redirect to homepage to display updated user in list
    echo "<script> 
alert('Data berhasil di edit');
           
            document.location.href = 'tampil_penanganan.php';
        </script>";
}
?>
<?php
// Display selected user data based on nis
// Getting nis from url
$npa = $_GET['npa'];

// Fetech user data based on nis
$result = mysqli_query($mysqli, "SELECT * FROM tbl_data_penanganan WHERE npa=$npa");

while($user_data = mysqli_fetch_array($result))
{
    $nomor = $user_data['nomor'];
  
    $npa = $user_data['npa'];
    $nama = $user_data['nama'];
    $alamat = $user_data['alamat'];
    $tgl_keluhan = $user_data['tgl_keluhan'];
    $status = $user_data['status'];
    $tgl_selesai = $user_data['tgl_selesai'];
    
}
?>
<html>
<head>  
    <title>Edit User Data</title>
</head>

<body>
    <a class="fa fa-home leftNavIcon" href="tampil_penanganan.php"></a>
    <br/>
<html lang="en">
  <head>
  <body>
  <div id="card">
    <div id="card-content">
      <div id="card-title">
        <h2>Edit Data Penanganan</h2>
        <div class="underline-title"></div>
      </div>
      <link rel="stylesheet" href="css/penanganan.css">

 <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
 <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <form name="update" method="post" action="edit_penanganan.php">
        <table border="0">
         <tr>
        <br>
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
        
        <label>Tanggal Keluhan</label>
         <input type="date" name="tgl_keluhan"class="form-control">
         <br>
        </td>
      </tr>
      
       <tr>
        <label>Status</label>
         <select name="status"class="form-control">
            <option value="">Pilih</option>
             <option value="Sudah Selesai">Sudah Selesai</option>
            <option value="Belum Selesai">Belum Selesai</option>
             </select>
             <br>
        </td>
      </tr>
      <td>
        <tr>
      <tr>
        <label>Tanggal Selesai</label>
          <input type="date" name="tgl_selesai"class="form-control">
<br>
        </td>
      </tr>
      <td>
        <tr>
      <tr>
                <td><input type="hidden" name="npa" value="<?php echo $_GET['npa'];?>"></td>

              <td colspan="0" align="center"><input id="submit-btn" type="submit" name="update" value="Update" /></td>
           
        </table>
    </form>
</body>
</html>