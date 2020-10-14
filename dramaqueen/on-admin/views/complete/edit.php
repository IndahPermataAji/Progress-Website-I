<?php
require_once('koneksi.php');
if($_POST){

	$sql = "UPDATE complete SET id ='".$_POST['id']."', judul='".$_POST['judul']."', tahun='".$_POST['tahun']."', jumlah_ep='".$_POST['jumlah_ep']."', genre='".$_POST['genre']."', negara ='".$_POST['negara']."' WHERE id=".$_POST['id'];

	if ($koneksi->query($sql) === TRUE) {
	    echo "<script>
	alert('Data berhasil di update');
	window.location.href='index.php?page=crud/index';
	</script>";
	} else {
	    echo "Gagal: " . $koneksi->error;
	}

	$koneksi->close();
	
}else{
	$query = $koneksi->query("SELECT * FROM complete WHERE id=".$_GET['id']);

	if($query->num_rows > 0){
		$data = mysqli_fetch_object($query);
	}else{
		echo "data tidak tersedia";
		die();
	}
?>
<div class="row">
	<div class="col-lg-6">
		<form action="" method="POST">
			<input type="hidden" name="id" value="<?= $data->id ?>">
			<div class="form-group">
				<label>ID</label>
				<input type="text" value="<?= $data->id ?>" class="form-control" name="id">
			</div>
			<div class="form-group">
				<label>Judul</label>
				<input type="text" value="<?= $data->judul ?>" class="form-control" name="judul">
			</div>
			<div class="form-group">
				<label>Tahun</label>
				<input type="text" value="<?= $data->tahun ?>" class="form-control" name="tahun">
			</div>
			<div class="form-group">
				<label>Jumlah Episode</label>
				<input type="text" value="<?= $data->jumlah_ep ?>" class="form-control" name="jumlah_ep">
			</div>
			<div class="form-group">
				<label>Genre</label>
				<input type="text" value="<?= $data->genre ?>" class="form-control" name="genre">
			</div>
			<div class="form-group">
				<label>Negara</label>
				<input type="text" value="<?= $data->negara ?>" class="form-control" name="negara">
			</div>
			<input type="submit" class="btn btn-primary btn-sm" name="Update" value="Update">
		</form>
	</div>
</div>
<?php
}
mysqli_close($koneksi);
?>