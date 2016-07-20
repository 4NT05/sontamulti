<h3>Tambah Penulis</h3>
<?php
echo form_open('c_penulis/post');
?>

<table>
	<tr><td>Nama Penulis</td><td>
		<input type="text" name="penulis_nm" placeholder="nama penulis"></td>
	</tr>
	<tr>	
		<td>email</td><td>
		<input type="text" name="penulis_email" placeholder="email@email.email"></td>
	</tr>
	<tr>	
		<td>No Telp</td><td>
		<input type="text" name="penulis_hp" placeholder="081234567890"></td>
	</tr>
	<tr>	
		<td>Blokir</td><td>
		<input type="radio" name="blokir" value="Y" checked /> Yes 
		<input type="radio" name="blokir" value="N" checked /> No</td>
	</tr>
	
	<tr><td colspan="2"><button type="submit" name="submit">Save</button></td></tr>
	<?php 
	echo anchor(base_url().'index.php/c_penulis/lihat','Back'); 
	?>
</table>
</form>