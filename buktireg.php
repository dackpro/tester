<?php
$suratfix = $_POST['suratfix'];
$nik = $_POST['nik'];
$nama = $_POST['nama'];
$noreg = $_POST['noreg'];
?>


<html>
<head>
<title>Tanda Bukti</title>
</head>
<body onload="setInterval(onTimerElapsed, 1000);">
<center>

<h3>FORMULIR BUKTI REGISTRASI PENGAJUAN PEMBUATAN SURAT</31>
<h3><?php echo $suratfix;?></h3>
<br>
<table border="0">
	<tr>
		<td>No. KTP</td>
		<td>:</td>
		<Td><?php echo $nik;?></td>
	</tr>
	<tr>
		<td>Nama</td>
		<td>:</td>
		<Td><?php echo $nama;?></td>
	</tr>
	<tr>
		<td>Tanggal Pengajuan</td>
		<td>:</td>
		<Td><?php echo date("Y/m/d");?></td>
	</tr>
</table>
<br>
<h2>--- <?php echo $noreg; ?> ---</h2>
<h3>Bukti ini harap dibawa pada saat percetakan surat di kelurahan.</h3>
<br>
<br>

<b>
<p style="margin-left:500px;">Bandung, <?php echo date("Y/m/d ");?></p>
</b>


<button  id="as"style="display:none; " onclick="window.print();" > CETAK !!! </button>

<script type="text/javascript">
    function onTimerElapsed() {
        var myDiv = document.getElementById('as');
        myDiv.click();
    }
</script>





</center>
</body>
</html>