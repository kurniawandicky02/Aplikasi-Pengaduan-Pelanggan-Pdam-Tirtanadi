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
    <link href="http://fonts.googleapis.com/css?family=Open+Sans:400,700,600" rel="stylesheet" type="text/css">
    <link href="//netdna.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
  
     <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
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
                <a href="beranda.php"><i class="fa fa-home leftNavIcon"></i> Beranda</a>
            </li>

          <li>
                <a href="#pageprofil" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle"><span class="fa fa-university leftNavIcon"></span> Profil</a>
                <ul class="collapse list-unstyled" id="pageprofil">
                <li>
                      <a href="sejarah1.php"><span class="fa fa-angle-right leftNavIcon"></span> Sejarah Perusahaan</a>
                </li>
                <li>
                     <a href="visi1.php"><span class="fa fa-angle-right leftNavIcon"></span> Visi Dan Misi </a>
                </li>
            
              </ul>
            </li>

 <li>
                <a href="#pagepeg" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle"><span class="fa fa-pencil-square-o leftNavIcon"></span> Pegawai</a>
                <ul class="collapse list-unstyled" id="pagepeg">
                <li>
                      <a href="input_data_pegawai.php"><i class="fa fa-angle-right leftNavIcon"></i> Tambah Data</a>
                </li>
                <li>
                      <a href="tampil_data_pegawai.php"><i class="fa fa-angle-right leftNavIcon"></i> Data Pegawai</a>
                </li>
            
              </ul>
            </li>

<li>
                <a href="#pagepel" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle"><span class="far fa-clipboard leftNavIcon"></span> Pelanggan</a>
                <ul class="collapse list-unstyled" id="pagepel">
                <li>
                        <a href="input_penanganan.php"><i class="fa fa-angle-right leftNavIcon"></i> Tambah Penanganan</a>
                </li>
                <li>
                         <a href="tampil_penanganan.php"><i class="fa fa-angle-right leftNavIcon"></i> Data Penanganan</a>
                </li>
            <li>
                      
                        <a href="tampil_pengaduan.php"><i class="fa fa-angle-right leftNavIcon"></i> Data Pengaduan</a>
                </li>

              </ul>
            </li>


<li>
                <a href="#pagelap" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle"><span class="fa fa-book leftNavIcon"></span> Laporan</a>
                <ul class="collapse list-unstyled" id="pagelap">
              
                <li>
                             <a href="cetak_pengaduan.php"><i class="fa fa-angle-right leftNavIcon"></i> Keluhan Pelanggan</a>
                </li>
            <li>
                      
                        <a href="cetak_penanganan.php"><i class="fa fa-angle-right leftNavIcon"></i> Penanganan</a>
                </li>
            
              </ul>
            </li>

      
            </li>
            <li class="clickable">
                <a href="logout.php"><i class="fa fa-power-off leftNavIcon"></i> Logout</a>
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

         <center><h2 class="mb-4">Sejarah Perusahaan</h2><center>
        <div id="contentRight">
        <div style ="color: black; font-size:
        15pt; text-align: left; font-family:Zapf-Chancery">
           
        
        <p style="padding-left: 45px">Pdam Tirtanadi dibangun oleh Pemerintah Kolonial Belanda pada tanggal 8 september 1905 yang diberi nama</p>
        <p>NV Waterleiding Maatschappij Ajer Beresih. Pembangunan ini dilakukan oleh Hendrik Cornelius Van Den Honert</p>
        <p> selaku Direktur Deli Steenkolen Maatschapiij dan Charles Marie Hernkenrath selaku Direktur Deli Spoorweg Maats</p>
        <p>chappij.</p>

        <p style="padding-left: 45px">Pada saat itu air yang di ambil dari sumber utama mata air Rumah sumbul di Sibolangit dengan kapasitas 300</p>
        <p>0 m3/hari. Air tersebut ditransmisikan ke Reservoir Menara yang memiliki kapasitas 1200 m3. Reservoir ini memiliki</p>
        <p>ketinggian 42m dari permukaan tanah. Reservoir ini di buat dari besi dengan diameter 14m. Setelah kemerdekaan</p>
        <p>indonesia, perusahaan ini diserahkan kepada Pemerintah Provinsi Sumatera Utara melalui Pemerintah Indonesia.</p>


        <p style="padding-left: 45px">Berdasarkan Perda Sumatera Utara No 11 tahun 1979,status perusahaan di ubah menjadi PDAM Tirtanadi di</p>
        <p>tunjuk sebagai operator sistem pengelolaan air. Dalam rangka pengembangan cakupan air minum bagi masyarakat </p>
        <p> Sumatera Utara, PDAM Tirtanadi melaksanakan kerjasama operasi dengan 9. PDAM dibeberapa Kabupaten di Sum</p>
        <p>atera Utara, yaitu Kabupaten Simalungun, Kabupaten Deli Serdang, Kabupaten Toba Samosir, Kabupaten Tapanuli</p>
        <p>Tengah, Kabupaten Mandailing Natal, Kabupaten Nias, Kabupaten Nias Selatan, dan Kabupaten Samosir.</p>
        <p style="padding-left: 45px">Pada Tanggal 10 September 2009, telah di tandatangani Peraturan Daerah Provinsi Sumatera Utara No 10 Ten</p>
        <p>tang Perusahaaan Daerah Air Minum Tirtanadi yang menyatakan bahwa tujuan pokok PDAM Tirtanadi adalah untuk </p>
        <p>mengelola dan menyelenggarakan pelayanan air minum yang memenuhi persayaratan kesehatan dan untuk meng</p>
        <p>embangkan perekonomian daerah, meningkatkan pendapatan daerah, serta meningkatkan kualitas lingkungan deng</p>
        <p>an memberikan pelayanan pengumpulan dan penyaluran air limbah melalui sistem perpipaan dalam rangka untuk m</p>
        <p>encapai kesejahteraan masyarakat pada umumnya.</p>
        <p style="padding-left: 45px">Secara garis besar daerah operasional PDAM Tirtanadi, wilayah pelayanan (kota medan dan sekitarnya) yang</p>
        <p>terdiri dari cabang-cabang:
        <p>a. Cabang Medan Kota.</p>
        <p>b. Cabang Medan Denai.</p>
        <p>c. Cabang Padang Bulan.</p>
        <p>d. Cabang Labuhan.</p>
        <p>e. Cabang Belawan Kota.</p>
        <p>f. Cabang Sei Agul.</p>
        <p>g. Cabang Tuasan.</p>
        <p>h. Cabang Deli Tua.</p>
        <p>i. Cabang Sunggal.</p>
        <p>j. Cabang Yamin.</p>
        <p>k. Cabang Cemara.</p>
        <p>l. Cabang Diski.</p>
        <p>m. Cabang Medan Amplas.</p>
        <p>n. Cabang Berastagi.</p>
        <p>o. Cabang Deli Serdang.</p>
        <p>p. Cabang Padang Sidempuan.</p>
        <p>q. Cabang Toba Samosir.</p>
        <p>r. Cabang Tapanuli Tengah.</p>
        <p>s. Cabang Samosir.</p>
        <p>t. Cabang Nias Selatan.</p>
        <p>u. Cabang Pemasaran Limbah-limbah</p>
    <script src="js/jquery.min.js"></script>
    <script src="js/popper.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/main.js"></script>
  </body>
</html>