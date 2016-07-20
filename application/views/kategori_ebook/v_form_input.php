<h3>Tambah Kategori eBook</h3>
<?php
echo form_open('c_kategori_ebook/post');
?>

<table>
	<tr><td>Nama Ketegori eBook</td><td>
		<input type="text" name="kategori_ebook_nm" placeholder="kategori ebook">
	</td></tr>
	<tr><td colspan="2"><button type="submit" name="submit">Save</button></td></tr>
</table>
</form>