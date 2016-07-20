<h1>EDIT EVENT</h1>
	<?php foreach ($data_edit as $tes) {
		?>
		
		<form method="post" action="<?php echo base_url().'index.php/c_kategori_event/update' ?>">
			<table>
				<tr>
					<td><input type="hidden" name="kategori_event_id" value="<?php echo $tes->kategori_event_id ?>"></td>
				</tr>
				<tr>
					<td>Nama Ketegori Event</td><td><input type="text" name="kategori_event_nm" value="<?php echo $tes->kategori_event_nm ?>"></td>
				</tr>
				<tr>
					<td></td><td><input type="submit" value="Update" ></td>
				</tr>
			</table>
		</form>
		<?php
	}
	?>