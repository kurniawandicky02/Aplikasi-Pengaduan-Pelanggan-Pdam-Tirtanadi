<?php
//insert.php
if(isset($_POST["nama"]))
{
 include("connect.php");
 $nama = mysqli_real_escape_string($connect, $_POST["nama"]);
 $keluhan = mysqli_real_escape_string($connect, $_POST["keluhan"]);
 $query = "
 INSERT INTO tbl_data_pengaduan(nama, keluhan)
 VALUES ('$nama', '$keluhan')
 ";
 mysqli_query($connect, $query);
}
?>