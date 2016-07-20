<h3>Tambah Kategori Event</h3>
<?php
echo form_open('c_kategori_event/post');
?>

<table>
	<tr><td>Nama Ketegori event</td><td>
		<input type="text" name="kategori_event_nm" placeholder="kategori event">
	</td></tr>
	<tr><td colspan="2"><button type="submit" name="submit">Save</button></td></tr>
</table>
</form>