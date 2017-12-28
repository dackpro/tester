	<?php
	include "koneksi.php";
	
	$namasurat = $_GET['jsurat'];
	$sql = "SELECT * from jenis_surat where kode_surat = '$namasurat';";
	$result = $conn->query($sql);	
	?>	
	
	<fieldset> 
	<legend>
		Pembuatan
		<?php 
			if ($result->num_rows > 0) {
					while($row = $result->fetch_assoc()) {
						ECHO $row['nama_surat'];
					}
			}
		?>
	</legend>
	
	<br>
	
	<div id="validasinik">
    	<form method="post" action="validasi_nikA.php">
        	VALIDASI NIK/NO KTP :      
        	<input type="text" class="textbox" name="txtcari" required/>
			<input type="hidden" class="textbox" name="jenissurat" value="<?php echo $namasurat;?>"/>
            <input type="submit" value="Submit" class="cari" />
        </form>
    </div>
	</fieldset>




