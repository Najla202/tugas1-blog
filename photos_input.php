<?php

$post = new App\Post();
$rowPost = $post->tampil()
?>

<h2>Tambah Photos</h2>
<form method="POST" action="photos_proses.php">
	<table>
		<tr>
			<td>Date</td>
			<td><input type="date" name="photo_date"></td>
		</tr>
		<tr>
			<td>Title</td>
			<td><input type="text" name="photo_title"></td>
		</tr>
		<tr>
			<td>Text</td>
			<td><input type="text" name="photo_text"></td>
		</tr>
		<tr>
			<td>Post</td>
			<td>
				<select class="nama" name="post_id">
				<?php foreach ($rowPost as $row ) { ?>
					<option value="<?php echo $row['post_id'] ?>"><?php echo $row['post_id'] ?></option>
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