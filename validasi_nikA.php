<?php
include "koneksi.php";
$nik = $_POST['txtcari'];
$jenissurat = $_POST['jenissurat'];

$sql = "SELECT nik from penduduk where nik ='$nik'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
		echo '
        <script type="text/javascript">
            alert("NIK yang dicari ditemukan"); 
            window.location.href = "index.php?menu=aksivalidnik&action=tampil&jsurat='.$jenissurat.'&j=a&nik='.$nik.'";</script>';   
    }
	} else {
		 echo '
        <script type="text/javascript">
            alert("NIK yang dicari tidak ditemukan."); 
            window.location.href = "index.php?menu=validnik&action=tampil&jsurat=Belum%20Nikah&j=sk";</script>';    
}
?>