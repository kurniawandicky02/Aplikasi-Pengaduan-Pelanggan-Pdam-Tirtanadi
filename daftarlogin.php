<?php
session_start();
$conn = mysqli_connect('localhost','root', '', 'db_keluhan');
$id = mysqli_query($conn, "SELECT id FROM login ORDER BY id DESC");



// Create database connection using config file
include_once("koneksi.php");

?>

<html lang="en">
  <head>
  <link rel="stylesheet" href="./assets/css/bootstrap.css">
    <link rel="stylesheet" href="daftarlogin.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">

  <body>
 

    <div id="card-content">

    <div class="daftar">
      <div id="card-title">

        <h2>Daftar Akun</h2>
        <div class="underline-title"></div>
      </div>
      
      <form action="proseslogin.php" method="post">
    <table border="0">
     
      <tr>
        <td>Nama:</td>
        <td>
          <input type="text" name="nama">
        </td>
       </tr>
        <td>
           <tr>
      <tr>
        <td>Username:</td>
        <td>
          <input type="text" name="username">
        </td>
        <tr>
        <td>Password:</td>
        <td>
          <input type="password" name="password">
           
        </td> 
      </tr>

     <td>
      <tr>
        <tr>
        <td>Level</td>
        <td>
          <select name="level">
            <option value="">Pilih</option>
            <option value="User">user</option>
            <option value="pegawai">pegawai</option>
       
            
          </select>
        </td>
      </tr>
     

    </table>
    <input id="submit-btn" type="submit" name="submit" value="Simpan" />

    <?php
if(isset($_POST['Simpan']))
{
$password=$_POST['pass'];
echo "Password= $password";
}
?>
<br>
<br>
<div>
  <br>
<div class="text-center" style="margin-top: 15px">
            Sudah punya akun? <a href="login.php" style="color:green">Silahkan Login</a>
          </div>

<script src="dist/sweetalert2.all.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/
  jquery/3.4.1/jquery.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" ></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/8.11.8/sweetalert2.all.min.js"></script>

  <script>
  
      

</script>

  </body>
</html>
