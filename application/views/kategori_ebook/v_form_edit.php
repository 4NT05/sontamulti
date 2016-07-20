<h1>EDIT BUKU</h1>
	<?php foreach ($data_edit as $tes) {
		?>
		
		<form method="post" action="<?php echo base_url().'index.php/c_kategori_ebook/update' ?>">
			<table>
				<tr>
					<td><input type="hidden" name="kategori_ebook_id" value="<?php echo $tes->kategori_ebook_id ?>"></td>
				</tr>
				<tr>
					<td>Nama Ketegori eBook</td><td><input type="text" name="kategori_ebook_nm" value="<?php echo $tes->kategori_ebook_nm ?>"></td>
				</tr>
				<tr>
					<td></td><td><input type="submit" value="Update" ></td>
				</tr>
			</table>
		</form>
		<?php
	}
	?>