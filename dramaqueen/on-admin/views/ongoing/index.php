<?php
require_once('koneksi.php');

$query = "SELECT * FROM ongoing";
$urlcrud = "index.php?page=ongoing/";
?>
<div class="row">
	<div class="col-lg-12">
		<a href="<?= $urlcrud.'create' ?>" class="btn btn-success btn-sm"><span class="glyphicon glyphicon-plus"></span> Tambah</a>
		<table class="table table-hover table-bordered" style="margin-top: 10px">
			<tr class="success">
				
				<th>ID </th>
				<th>Judul</th>
				<th>Tahun</th>
				<th>Jumlah Episode</th>
				<th>Genre</th>
				<th>Negara</th>
				<th style="text-align: center;">Actions</th>
			</tr>
			<?php
			if($data=mysqli_query($koneksi,$query)){
				$a=1;
				while($obj=mysqli_fetch_object($data)){
					?>
					<tr>
						<td><?= $obj->id ?></td>
						<td><?= $obj->judul ?></td>
						<td><?= $obj->tahun ?></td>
						<td><?= $obj->jumlah_ep ?></td>
						<td><?= $obj->genre ?></td>
						<td><?= $obj->negara ?></td>
						<td style="text-align: center;">
						<a onclick="return confirm('Apakah yakin data akan di hapus?')" href="<?= $urlcrud.'hapus&id='.$obj->id ?>" class="btn btn-danger btn-sm"><span class="glyphicon glyphicon-trash"></span></a>
						<a href="<?= $urlcrud.'edit&id='.$obj->id ?>" class="btn btn-success btn-sm"><span class="glyphicon glyphicon-edit"></span></a>
						</td>
					</tr>
					<?php
					$a++;
				}
				mysqli_free_result($data);
			}
			?>
		</table>
	</div>
</div>
<?php
mysqli_close($koneksi);
?>