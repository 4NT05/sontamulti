<h1>Edit Data Penulis/h1>
	<?php foreach ($data_edit as $tes) {
		?>
		
		<form method="post" action="<?php echo base_url().'index.php/c_penulis/update' ?>">
			<table>
				<tr>
					<td><input type="hidden" name="penulis_id" value="<?php echo $tes->penulis_id ?>"></td>
				</tr>
				<tr>
					<td>Nama Penulis</td><td><input type="text" name="penulis_nm" value="<?php echo $tes->penulis_nm ?>"></td>
				</tr>
				<tr>
					<td>email</td><td><input type="text" name="penulis_email" value="<?php echo $tes->penulis_email ?>"></td>
				</tr>
				<tr>
					<td>No Telp</td><td><input type="text" name="penulis_hp" value="<?php echo $tes->penulis_hp ?>"></td>
				</tr>
				<tr>
					<td>Blokir</td>
					<td><input type="radio" name="blokir" value="Y" checked /> Yes 
					<input type="radio" name="blokir" value="N" checked /> No
					</td>
				</tr>
				<tr>
					<td></td><td><input type="submit" value="Update" ></td>
				</tr>
			</table>
		</form>
		<?php
	}
	?>