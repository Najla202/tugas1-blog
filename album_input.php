<?php

$photos = new App\Photos();
$rowPhotos = $photos->tampil()
?>

<section class="courses">
	
</section>
<h2 class="">Tambah Album</h2>
<form method="POST" action="album_proses.php">
	<table>
		<tr>
			<td>Nama Album</td>
			<td><input type="text" name="album_nama"></td>
		</tr>
		<tr>
			<td>Text</td>
			<td><input type="text" name="album_text"></td>
		</tr>
		<tr>
			<td>Photo</td>
			<td>
				<select class="nama" name="photo_id">
				<?php foreach ($rowPhotos as $row ) { ?>
					<option value="<?php echo $row['photo_id'] ?>"><?php echo $row['photo_id'] ?></option>
				<?php } ?>
			</select>
			</td>
		</tr>
		<tr>
			<td></td>
			<td><input type="submit" name="btn-simpan" value="Simpan"></td>
		</tr>
	</table>
</form>