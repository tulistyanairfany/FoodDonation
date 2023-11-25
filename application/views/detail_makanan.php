<div class="container-fluid">
	
	<div class="card">
  		<h5 class="card-header">Detail Makanan</h5>
  		<div class="card-body">
  			<?php foreach($makanan as $lpt) : ?>
   			<div class="row">
   				<div class="col-md-4">
   					<img src="<?php echo base_url().'/uploads/'.$lpt->gambar ?>" class="card-img-top">
   				</div>
   				<div class="col-md-8"></div>
   					<table class="table">
   						<tr>
   							<td>Nama Makanan</td>
   							<td><strong><?php echo $lpt->nama_makanan ?></strong></td>
   						</tr>

   						<tr>
   							<td>Keterangan</td>
   							<td><strong><?php echo $lpt->keterangan ?></strong></td>
   						</tr>

   						<tr>
   							<td>Jenis Makanan</td>
   							<td><strong><?php echo $lpt->jenis_makanan ?></strong></td>
   						</tr>	

   						<tr>
   							<td>Stok</td>
   							<td><strong><?php echo $lpt->stok ?></strong></td>
   						</tr> 
   					</table>

   					<?php echo anchor('dashboard/tambah_ke_keranjang/'.$lpt->id_makanan, '<div class="btn btn-sm btn-primary">Tambah ke Keranjang</div>') ?>

   					<?php echo anchor('welcome', '<div class="btn btn-sm btn-danger ml-3">Kembali</div>') ?>	
   			</div>
   			<?php endforeach; ?>
   		
  </div>
</div>
</div>
