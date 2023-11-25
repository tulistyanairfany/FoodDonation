<div class="container-fluid">
	<button class="btn btn-sm btn-primary mb-3" data-toggle="modal" data-target="#tambah_makanan"><i class="fas fa-plus fa-sm"></i> Tambah Makanan</button>

	<table class="table table-bordered">
		<tr>
			<th>No</th>
			<th>Nama Makanan</th>
			<th>Keterangan</th>  
			<th>Jenis Makanan</th>
			<th>Jumlah Porsi</th>
			<th colspan="3">Action</th>
		</tr>

		<?php
		$no=1;
		 foreach ($makanan as $lpt) : ?>

		 <tr>
		 	<td><?php echo $no++ ?></td>
		 	<td><?php echo $lpt->nama_makanan ?></td>
		 	<td><?php echo $lpt->keterangan ?></td> 
		 	<td><?php echo $lpt->jenis_makanan ?></td> 
		 	<td><?php echo $lpt->stok ?></td> 
		 	<td><?php echo anchor('admin/data_makanan/edit/' .$lpt->id_makanan, '<div class="btn btn-primary btn-sm"><i class="fas fa-edit"></i></div>') ?></td>
		 	<td><?php echo anchor('admin/data_makanan/hapus/' .$lpt->id_makanan, '<div class="btn btn-danger btn-sm"><i class="fas fa-trash"></i></div>') ?></td>
		 </tr>


		 <?php endforeach ?>
	</table>
</div>

<!-- Modal -->
<div class="modal fade" id="tambah_makanan" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Form Tambah Makanan</h5>
        <button type="button" class="fas fa-times" data-dismiss="modal" aria-label="Close">
        </button>
      </div>
      <div class="modal-body">
        <form action="<?php echo base_url(). 'admin/data_makanan/tambah_aksi' ?>" method="post" enctype="multipart/form-data">

        	<div class="form-group">
        		<label>Nama makanan</label>
        		<input type="text" name="nama_makanan" class="form-control">
        	</div>

        	<div class="form-group">
        		<label>Keterangan</label>
        		<input type="text" name="keterangan" class="form-control">
        	</div>  

			<div class="form-group">
        		<label>Jenis Makanan</label>
            <select class="form-control" name="jenis_makanan">
              <option>Makanan Berat</option>
              <option>Makanan Ringan</option> 
            </select>
        	</div>

        	<div class="form-group">
        		<label>Jumlah Porsi</label>
        		<input type="text" name="stok" class="form-control">
        	</div>

			<div class="form-group">
        		<label>Harga</label>
        		<input type="text" name="harga" class="form-control">
        	</div>

        	<div class="form-group">
        		<label>Gambar Makanan</label>
        		<input type="file" name="gambar" class="form-control">
        	</div>
        	
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Save changes</button>
      </div>

      </form>
      
    </div>
  </div>
</div>
