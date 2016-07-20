<h3>Tambah User</h3>
<?php
echo form_open('c_users/post');
?>

<table>
	<tr><td>Nama Lengkap</td><td>
		<input type="text" name="nama_lengkap" placeholder="nama lengkap"></td>
	</tr>
	<tr>	
		<td>User Name</td><td>
		<input type="text" name="username" placeholder="username"></td>
	</tr>
	<tr>	
		<td>Password</td><td>
		<input type="text" name="password" placeholder="password"></td>
	</tr>
	<tr>	
		<td>alamat</td><td>
		<textarea id="alamat" name="alamat" placeholder="alamat lengkap" cols="18" rows="4"></textarea>
	</tr>
	<tr>	
		<td>email</td><td>
		<input type="text" name="email" placeholder="email@email.email"></td>
	</tr>
	<tr>	
		<td>Pekerjaan</td><td>
		<input type="text" name="pekerjaan" placeholder="PNS/Mahasiswa/Swasta"></td>
	</tr>
	<tr>	
		<td>Jenis Kelamin</td><td>
		<input type="radio" name="j_kel" value="pria" checked /> Pria 
		<input type="radio" name="j_kel" value="wanita" checked /> Wanita</td>
	</tr>
	<tr>	
		<td>No Telp</td><td>
		<input type="text" name="hp" placeholder="081298765432"></td>
	</tr>
	<tr>	
		<td>Level</td><td>
		<input type="text" name="level" placeholder="1=admin, 2=member"></td>
	</tr>
	
	<tr><td colspan="2"><button type="submit" name="submit">Save</button></td></tr>
</table>
</form>