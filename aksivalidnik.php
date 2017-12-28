<?php
include "koneksi.php";
$jenissurat = $_GET['jsurat'];
$j = $_GET['j'];
$nik = $_GET['nik'];
$tgl=date('Y/m/d');

$sql = "INSERT INTO registrasi (jenis_surat, nik, tgl)
VALUES ('$jenissurat', '$nik' , '$tgl')";
$conn->query($sql);

$sql2 = "SELECT no_registrasi from registrasi order by no_registrasi desc limit 1";
$result = $conn->query($sql2);

$sql3 = "Select * from penduduk where nik = '$nik'";
$result3 = $conn->query($sql3);

if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
		$noreg = 'No Registrasi Anda: '.$row['no_registrasi'];
		echo $noreg;
	}
}
else{
	echo "eweuh";
}

echo "<br>";


$sql4 = "Select * from jenis_surat where kode_surat = '$jenissurat'";
$result4 = $conn->query($sql4);
if ($result4->num_rows > 0) {
					while($row4 = $result4->fetch_assoc()) {
						$suratfix = $row4['nama_surat'];
					}
			}

?>

<fieldset>
	<legend><h3>Data Anda</h3></legend>


<?php while($row3 = $result3->fetch_assoc()) { ?>
<form method="post" action="buktireg.php">
	<table width="auto" border="0">
    	<tr align="left">
        	<th width="117" scope="row"><label>NIK</label></th>
            <th width="14"><label>:</label></th>
            <th width="145">
            	<input type="text" class="textbox" name="nik" value="<?php echo $row3['nik'];?>"required disabled>
            </th>
        </tr>
        <tr align="left">
        	<th><label>Nama </label></th>
            <th><label>:</label></th>
            <th>
            	<input type="text" class="textbox" name="nama" value="<?php echo $row3['nama'];?>" required disabled>
            </th>
        </tr>
        <th colspan="3">
        </th>
        <tr>
        <tr align="left">
            <th><label>Tempat lahir</label></th>
            <th><label>:</label></th>
            <th>
                <input type="text" class="textbox" name="tempatlahir" value="<?php echo $row3['tempat_lahir'];?>" required disabled>
            </th>
        </tr>
        <th colspan="3">
        </th>
        <tr>
        <tr align="left">
            <th><label>Tanggal lahir</label></th>
            <th><label>:</label></th>
            <th>
                <input type="text" class="textbox" name="tanggallahir" value="<?php echo $row3['tanggal_lahir'];?>" required disabled>
            </th>
        </tr>
		
		<th colspan="3">
        </th>
        <tr>
        <tr align="left">
            <th><label>Jenis kelamin</label></th>
            <th><label>:</label></th>
            <th>
                <input type="text" class="textbox" name="jeniskelamin" value="<?php echo $row3['jenis_kelamin'];?>" required disabled>
            </th>
        </tr>
		
        <th colspan="3">
        </th>
        <tr>
        <tr align="left">
            <th><label>alamat</label></th>
            <th><label>:</label></th>
            <th>
                <textarea class="textbox" name="alamat" cols="20" rows="5" disabled>
				<?php echo $row3['alamat'].' RT '.$row3['rt'].' RW '.$row3['rw'].' Dusun '.$row3['dusun'];?>
				</textarea> 
            </th>
        </tr>
		
		<th colspan="3">
        </th>
        <tr>
        <tr align="left">
            <th><label>Agama</label></th>
            <th><label>:</label></th>
            <th>
                <input type="text" class="textbox" name="agama" value="<?php echo $row3['agama'];?>" required disabled>
            </th>
        </tr>
		
		<th colspan="3">
        </th>
        <tr>
        <tr align="left">
            <th><label>Status perkawinan</label></th>
            <th><label>:</label></th>
            <th>
                <input type="text" class="textbox" name="status" value="<?php echo $row3['status_perkawinan'];?>" required disabled>
            </th>
        </tr>
		
		<th colspan="3">
        </th>
        <tr>
        <tr align="left">
            <th><label>Pekerjaan</label></th>
            <th><label>:</label></th>
            <th>
                <input type="text" class="textbox" name="pekerjaan" value="<?php echo $row3['pekerjaan'];?>" required disabled>
            </th>
        </tr>
		

		
    </table>
	<br>
			
			<input type="hidden" name="nik" value="<?php echo $row3['nik'];?> ">
			<input type="hidden" name="nama" value="<?php echo $row3['nama'];?> ">
			<input type="hidden" name="suratfix" value="<?php echo $suratfix;?> ">
			<input type="hidden" name="noreg" value="<?php echo $noreg;?> ">
			<input type="submit" value="CETAK BUKTI REGISTRASI"></input>
</form>

<?php } ?>

</fieldset>

	<!--<fieldset>
	<legend>
	<h3>Wajib Diisi</h3>
	</legend>
    	<form method="post">
        	No Handphone Yang Dapat Dihubungi : 
        	<input type="text" class="textbox" name="txtcari" />
            <input type="submit" value="Kirim" class="cari" />
        </form>
	
	</fieldset>-->
		



