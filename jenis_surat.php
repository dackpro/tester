<?php
include "koneksi.php";

$sql = "SELECT * from jenis_surat order by kode_surat asc";
$result = $conn->query($sql);	

?>


<!doctype html>
<html lang=''>
<head>
   <meta charset='utf-8'>
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <link rel="stylesheet" href="styles.css">
   <script src="script.js"></script>
   <title>Jenis Surat</title>
</head>
<body>

<div id="wrapper">

	<h2> Jenis Surat </h2><br>
	
	<div id="menusurat">
		<ul>
			<?php
				if ($result->num_rows > 0) {
					while($row = $result->fetch_assoc()) {
			?>
			<li><a href='index.php?menu=validnik&action=tampil&jsurat=<?php echo $row['kode_surat'];?>'><span><?php echo $row['nama_surat'];?> </span></a></li>

			<?php
					}
				}
			?>
		</ul>
	</div>
</div>
</body>
<html>