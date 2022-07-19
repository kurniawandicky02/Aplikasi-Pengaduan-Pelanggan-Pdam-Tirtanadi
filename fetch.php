<?php
//fetch.php;
if(isset($_POST["view"]))
{
 include("connect.php");
 if($_POST["view"] != '')
 {
  $update_query = "UPDATE tbl_data_pengaduan SET nomor=1 WHERE nomor=0";
  mysqli_query($connect, $update_query);
 }
 $query = "SELECT * FROM tbl_data_pengaduan ORDER BY nomor DESC LIMIT 1";
 $result = mysqli_query($connect, $query);
 $output = '';
 
 if(mysqli_num_rows($result) > 0)
 {
  while($row = mysqli_fetch_array($result))
  {
   $output .= '
   <li>
    <a href="tampil_pengaduan.php">
     <h4>'.$row["nama"].'</h4>
     <h4><em>'.$row["keluhan"].'</em></h4>
    </a>
   </li>
   <li class="divider"></li>
   ';
  }
 }
 else
 {
  $output .= '<li><a href="#" class="text-bold text-italic">No Notification Found</a></li>';
 }
 
 $query_1 = "SELECT * FROM tbl_data_pengaduan WHERE nomor=1";
 $result_1 = mysqli_query($connect, $query_1);
 $count = mysqli_num_rows($result_1);
 $data = array(
  'notification'   => $output,
  'unseen_notification' => $count
 );
 echo json_encode($data);
}
?>