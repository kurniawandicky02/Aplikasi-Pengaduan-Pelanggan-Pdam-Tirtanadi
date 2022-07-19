<?php
session_start();

?>
<!DOCTYPE html>
<html lang="en">
  <head>
  	 <title>PDAM Tirtanadi Cabang Cemara</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900" rel="stylesheet">
		
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
		<link rel="stylesheet" href="css/style.css">
        <link rel="stylesheet" href="css/visi.css">

  </head>
  <body>
<script>
        function startTime() {
            var today = new Date();
            var h = today.getHours();
            var m = today.getMinutes();
            var s = today.getSeconds();
            m = checkTime(m);
            s = checkTime(s);
            document.getElementById('txt').innerHTML =
            h + ":" + m + ":" + s;
            var t = setTimeout(startTime, 500);
        }
        function checkTime(i) {
  if (i < 10) {i = "0" + i};  // add zero in front of numbers < 10
  return i;
}
</script>
<body onload="startTime()">

		<div id="contentWrapper">
		<div class="wrapper d-flex align-items-stretch">
			<nav id="sidebar">
				<div class="custom-menu">
					<button type="button" id="sidebarCollapse" class="btn btn-primary">
	        </button>
        </div>
	  		<div class="img bg-wrap text-center py-4" style="background-image: url(images/menara.jpg);">
	  			<div class="user-logo">
	  				<div class="img" style="background-image: url(images/kyy.jpg);"></div>
	  			<center><a style="font-size: 20px; color:white">Halo, <?php echo $_SESSION['nama']?></a></center>
 <br>
	  			</div>
	  		</div>
        <ul class="list-unstyled components mb-5">
          
          <li class="active">
           
           <li class="clickable">
                <a href="#"><i class="fa fa-desktop leftNavIcon"></i> Dashboard</a>
            </li>

           <li class="clickable">
                <a href="beranda1.php"><i class="fa fa-home leftNavIcon"></i> Beranda</a>
            </li>

          <li>
                <a href="#pageprofil" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle"><span class="fa fa-university leftNavIcon"></span> Profil</a>
                <ul class="collapse list-unstyled" id="pageprofil">
                <li>
                      <a href="sejarah.php"><span class="fa fa-angle-right leftNavIcon"></span> Sejarah Perusahaan</a>
                </li>
                <li>
                     <a href="Visi.php"><span class="fa fa-angle-right leftNavIcon"></span> Visi Dan Misi </a>
                </li>
            
              </ul>
            </li>

 <li>
                <a href="#pageSubpel" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle"><span class="fa fa-pencil leftNavIcon"></span> Pelanggan</a>
                <ul class="collapse list-unstyled" id="pageSubpel">
                <li>
                          <a href="tampil_data_penanganan.php"><i class="fa fa-angle-right leftNavIcon"></i> Data Penanganan</a>
                </li>

                <li>
                     <a href="input_pengaduan.php"><i class="fa fa-angle-right leftNavIcon"></i> Keluhan Pengaduan</a>
                </li>
            </ul>
            
      
            </li>
            <li class="clickable">
                <a href="logout.php"><i class="fa fa-sign-out leftNavIcon"></i> Logout</a>
            </li>
        </li>

        <br>
                  <center>
                  
<div style ="color: white; font-family:Zapf-Chancery; font-size: 22px;
                    <h4 class="profile-desc-title">Informasi Waktu</h4><br>
                        <span class="profile-desc-text"> <?php echo date('l, d-m-Y');?></span>
                        <div id="txt" class="profile-desc-title"></div>
                                                    </li>
        </ul>

    	</nav>

        <!-- Page Content  -->
      <div id="content" class="p-4 p-md-5 pt-5">

         <h2 class="mb-4" ><p style="padding-left: 420px">Visi Dan Misi</h2>
            <br>
       
        <div style ="color: black; font-size:
        15pt; text-align: left; font-family:Zapf-Chancery">
           
        <h4 id="heading"><p style="padding-left: 500px">Visi:</h4>
        <p style="padding-left: 45px">Pdam Tirtanadi menjadi perusahaan pengelola air minum dan air limbah yang terdepan di indonesia, sehat dan </p>
        <p>memberikan pelayanan prima kepada pelanggan.</p>
     
        <h4 id="heading"><p style="padding-left: 500px">Misi:</h4>
        <p style="padding-left: 45px">Memberikan pelayanan air minum kepada masyarakat yang memenuhi azas kualitas, kuantitas, dan kontinuitas </p>
        <p>serta keterjangkauan masyarakat dengan menerapkan Good Corporate Govermance yang di dukung oleh SDM yang</p>
        <p>berintegrasi, berkemampuan dan profesional.</p>
       <p style="padding-left: 5px">a. Menunjang peningkatan kualitas lingkungan dengan mengembangkan pelayanan air limbah.</p>
       <p style="padding-left: 5px">b. Memberikan kontribusi dalam peningkatan pendapatan asli daerah dan membantu mengembangkan daerah.</p>
        
       
         
    <script src="js/jquery.min.js"></script>
    <script src="js/popper.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/main.js"></script>
  </body>
</html>