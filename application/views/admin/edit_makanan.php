<div class="container-fluid">
	<h3> </i>Edit Data Makanan</h3>

	<?php foreach ($makanan as $lpt)	: ?>

		<form method="post" action="<?php echo base_url().'admin/data_makanan/update' ?>">
			
			<div class="for-group">
				<label>Nama Makanan</label>
				<input type="text" name="nama_makanan" class="form-control" value="<?php echo $lpt->nama_makanan ?>">
			</div>

			<div class="for-group">
				<label>Keterangan</label>
				<input type="hidden" name="id_makanan" class="form-control" value="<?php echo $lpt->id_makanan ?>">
				<input type="text" name="keterangan" class="form-control" value="<?php echo $lpt->keterangan ?>">
			</div>

			<div class="for-group">
				<label>Jenis Makanan</label> 
				<input type="text" name="jenis_makanan" class="form-control" value="<?php echo $lpt->jenis_makanan ?>">
			</div> 

			<div class="for-group">
				<label>Jumlah Porsi</label>
				<input type="text" name="stok" class="form-control" value="<?php echo $lpt->stok ?>">
			</div>

			<button type="submit" class="btn btn-primary btn-sm mt-3">Simpan</button>

		</form>
	<?php endforeach; ?>
		
	
</div>
