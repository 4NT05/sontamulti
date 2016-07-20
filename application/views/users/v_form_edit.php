<h1>Edit User</h1>
	<?php foreach ($data_edit as $tes) {
		?>
		
		<form method="post" action="<?php echo base_url().'index.php/c_users/update' ?>">
			<table>
				<tr>
					<td><input type="hidden" name="users_id" value="<?php echo $tes->users_id ?>"></td>
				</tr>
				<tr>
					<td>Nama Lengkap</td><td><input type="text" name="nama_lengkap" value="<?php echo $tes->nama_lengkap ?>"></td>
				</tr>
				<tr>
					<td>Username</td><td><input type="text" name="username" value="<?php echo $tes->username ?>"></td>
				</tr>
				<tr>
					<td>alamat</td><td><input type="text" name="alamat" value="<?php echo $tes->alamat ?>" size="80" ></td>
				</tr>
				<tr>
					<td>email</td><td><input type="text" name="email" value="<?php echo $tes->email ?>"></td>
				</tr>
				<tr>
					<td>Pekerjaan</td><td><input type="text" name="pekerjaan" value="<?php echo $tes->pekerjaan ?>"></td>
				</tr>
				<tr>
					<td>Jenis Kelamin</td>
					<td><input type="radio" name="j_kel" value="pria" checked /> Pria 
					<input type="radio" name="j_kel" value="wanita" checked /> Wanita
					</td>
				</tr>
				<tr>
					<td>No Telp</td><td><input type="text" name="hp" value="<?php echo $tes->hp ?>"></td>
				</tr>
				<tr>
					<td>Level</td><td><input type="text" name="level" value="<?php echo $tes->level ?>"></td>
				</tr>
				<tr>
					<td></td><td><input type="submit" value="Update" ></td>
				</tr>
			</table>
		</form>
		<?php
	}
	?>
