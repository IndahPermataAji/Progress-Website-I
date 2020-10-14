<?php
require_once('koneksi.php');
if($_POST){
	try {
		$sql = "INSERT INTO complete (id,judul,tahun,jumlah_ep,genre,negara) VALUES ('".$_POST['id']."','".$_POST['judul']."','".$_POST['tahun']."','".$_POST['jumlah_ep']."','".$_POST['genre']."','".$_POST['negara']."')";
		if(!$koneksi->query($sql)){
			echo $koneksi->error;
			die();
		}

	} catch (Exception $e) {
		echo $e;
		die();
	}
	  echo "<script>
	alert('Data berhasil di simpan');
	window.location.href='index.php?page=crud/index';
	</script>";
}
?>
<div class="row">
	<div class="col-lg-6">
		<form action="" method="POST">
			<div class="form-group">
				<label>ID</label>
				<input type="text" value="" class="form-control" name="id" required>
			</div>
			<div class="form-group">
				<label>Judul</label>
				<input type="text" value="" class="form-control" name="judul" required>
			</div>
			<div class="form-group">
				<label>Tahun</label>
				<input type="text" value="" class="form-control" name="tahun" required>
			</div>
			<div class="form-group">
				<label>Jumlah Episode</label>
				<input type="text" value="" class="form-control" name="jumlah_ep" required>
			</div>
			<div class="form-group">
				<label>Genre</label>
				<input type="text" value="" class="form-control" name="genre" required>
			</div>
			<div class="form-group">
				<label>Negara</label>
				<input type="text" value="" class="form-control" name="negara" required>
			</div>
			<input type="submit" class="btn btn-primary btn-sm" name="create" value="Create">
		</form>
	</div>
</div>