<!DOCTYPE html>

<html lang="en">
<head>
	<title></title>
	 <link href="//netdna.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
</head>
<body>
<div id="layout">
            <a href="#menu" id="menuLink" class="menu-link"> <span></span> </a>

            <div id="menu">
                <div class="pure-menu pure-menu-open">
                    <a class="fa fa-home leftNavIcon" href="beranda.php"></a>
 <center><img src="images/cemara.jpg" width="130" height="100" style="border-radius: 50%; transform: translate(-220%, 70%);"/></center>
                    <ul>


                    </ul>
                </div>
            </div><!--div menu -->
<!--- Content ------------------------------->
	<center>

		<h2>DAFTAR PENANGANAN</h2>
		<h4></h4>

	</center>

	<?php 
	include 'koneksi.php';
	?>

	<table border="1" style="width: 100%">
		<tr>

			<th>Nomor</th>
			<th>Npa</th>
			<th>Nama</th>
			<th>Alamat</th>
			<th>Tanggal Keluhan</th>
			<th>Status</th>
			<th>Tanggal Selesai</th>
			
			
			
			
		</tr>
		
		 <?php  

     $sql = mysqli_query($mysqli,"select * from tbl_data_penanganan");  
 
 $nomor = 1;
		while($data = mysqli_fetch_array($sql)){
		?>
		<tr>
			
			<td><?php echo $data['nomor']; ?></td>
			<td><?php echo $data['npa']; ?></td>
			<td><?php echo $data['nama']; ?></td>
			<td><?php echo $data['alamat']; ?></td>
			<td><?php echo $data['tgl_keluhan']; ?></td>
			<td><?php echo $data['status']; ?></td>
			<td><?php echo $data['tgl_selesai']; ?></td>
			
			
			
		</tr>
		<?php 
		}
		?>
	</table>

	<script>
		window.print();
	</script>
</body>
</html>