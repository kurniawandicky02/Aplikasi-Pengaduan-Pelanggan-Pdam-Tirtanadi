<?php
// include database connection file
include_once("koneksi.php");
// Get nis from URL to delete that user
$npa = $_GET['npa'];

// Delete user row from table based on given nis
$result = mysqli_query($mysqli, "DELETE FROM tbl_data_penanganan WHERE npa=$npa");
echo "<script> 
alert('Data berhasil di hapus');
           
            document.location.href = 'tampil_penanganan.php';
        </script>";
// After delete redirect to Home, so that latest user list will be displayed.

?>

