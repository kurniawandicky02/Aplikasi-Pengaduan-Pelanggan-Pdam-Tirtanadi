<?php

// include database connection file
include_once("koneksi.php");

// Check if form is submitted for user update, then redirect to homepage after update

if(isset($_POST['update']))
{   
    $nomor = $_POST['nomor'];
    $nipp=$_POST['nipp'];
    $nama=$_POST['nama'];
    $golongan=$_POST['golongan'];
    $jabatan=$_POST['jabatan'];
    $masa=$_POST['masa'];
 
    
    // update user data
    $result = mysqli_query($mysqli, "UPDATE tbl_data_pegawai SET nomor='$nomor', nama='$nama',golongan='$golongan', jabatan='$jabatan',masa='$masa' WHERE nipp=$nipp");

    // Redirect to homepage to display updated user in list
   echo "<script> 
alert('Data berhasil di edit');
           
            document.location.href = 'tampil_data_pegawai.php';
        </script>";
}
?>
<?php
// Display selected user data based on nis
// Getting nis from url
$nipp = $_GET['nipp'];

// Fetech user data based on nis
$result = mysqli_query($mysqli, "SELECT * FROM tbl_data_pegawai WHERE nipp=$nipp");

while($user_data = mysqli_fetch_array($result))
{
    $nomor = $user_data['nomor'];
    $nipp = $user_data['nipp'];
    $nama = $user_data['nama'];
    $golongan = $user_data['golongan'];
    $jabatan = $user_data['jabatan'];
    $masa = $user_data['masa'];
    
}

?>
<html>
<head>  
    <title>Edit User Data</title>
</head>

<body>
    <a class="fa fa-home leftNavIcon" href="tampil_data_pegawai.php"></a>
    <br/>
<html lang="en">
  <head>
  <body>
  <div id="card">
    <div id="card-content">
      <div id="card-title">
        <h2>Edit Data Pegawai</h2>
        <div class="underline-title"></div>
      </div>
       <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

<link rel="stylesheet" href="css/pegawai.css">
 <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
    <form name="update" method="post" action="edit_data_pegawai.php">
        <table border="0">
            <tr>
        <br>
        <label>No</label>
          <input type="text" name="nomor" value="<?php echo $nomor;?>" readonly class="form-control">
          <br>
        </td>
      </tr>
       <tr>
        <label>Nipp</label>
          <input type="text" name="nipp" value="<?php echo $nipp;?>" class="form-control">
          <br>
        </td>
      </tr>
      <tr>
        <label>Nama</label>
          <input type="text" name="nama" value="<?php echo $nama;?>" class="form-control">
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
         <input type="text" name="jabatan" value="<?php echo $jabatan;?>"class="form-control">
         <br>
        </td>
      </tr>
      <tr>
        <label>Masa Bekerja</label>
          <input type="text" name="masa" width="100" value="<?php echo $masa;?>" class="form-control">
        </td>
      </tr>
      </tr>
      <tr>
       
                <td><input type="hidden" name="nipp" value="<?php echo $_GET['nipp'];?>"></td>

              <td colspan="0" align="center"><input id="submit-btn" type="submit" name="update" value="Update" /></td>

           
        </table>
    </form>
    
</body>
</html>