<!doctype html>
<html lang=''>
<head>
   <meta charset='utf-8'>
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <link rel="stylesheet" href="styles.css">
   <script src="script.js"></script>
   <title>E-SURATDESA</title>
</head>
<body>

<div id="wrapper">
<div id="header">
    <img src="images/logo.jpg" />
		<h3>PEMERINTAH KABUPATEN BANDUNG BARAT</H3>
		<H3>KECAMATAN CISARUA</H3>
		<h2>DESA KERTAWANGI</h2>
		 
  </div>

<div id='cssmenu'>
<ul>
   <li><a href='index.php?menu=home&action=tampil'><span>Beranda</span></a></li>
   
   <li class='active has-sub'><a href='#'><span>Layanan Surat</span></a>
      <ul>
         <li class='has-sub'><a href='#'><span>Buat Surat</span></a>
            <ul>
            
			<li><a href="index.php?menu=jenis&action=tampil" class="menu">jenis surat</a></li>
            </ul>
         </li>         
      </ul>
   </li>
</ul>
</div>

<div id="content">
    
	
	
            <?php
				
				if ((isset($_GET['menu'])) && ($_GET['menu']=="home") && ($_GET['action']=="tampil")) {
					include "tampil.php";
				} else if ((isset($_GET['menu'])) && ($_GET['menu']=="jenis") && ($_GET['action']=="tampil")) {
					include "jenis_surat.php";
				} else if ((isset($_GET['menu'])) && ($_GET['menu']=="validnik") && ($_GET['action']=="tampil")) {
					include "validasi_nik.php";
					} else if ((isset($_GET['menu'])) && ($_GET['menu']=="aksivalidnik") && ($_GET['action']=="tampil")) {
					include "aksivalidnik.php";
				} else { include "tampil.php"; }
			?>
  </div>


</div>
  
</body>
<html>
