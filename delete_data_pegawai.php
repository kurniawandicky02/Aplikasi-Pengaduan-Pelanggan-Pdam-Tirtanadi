<link rel='stylesheet' href='https://cdn.jsdelivr.net/npm/sweetalert2@7.12.15/dist/sweetalert2.min.css'>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@7.12.15/dist/sweetalert2.all.min.js"></script>
<?php

// include database connection file
include_once("koneksi.php");
// Get nis from URL to delete that user
$nipp = $_GET['nipp'];

// Delete user row from table based on given nis
$result = mysqli_query($mysqli, "DELETE FROM tbl_data_pegawai WHERE nipp=$nipp");


 
echo "<script> 
alert('Data berhasil di hapus');



            document.location.href = 'tampil_data_pegawai.php';

        </script>";
 

?>

  