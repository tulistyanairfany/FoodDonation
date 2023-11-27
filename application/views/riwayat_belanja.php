<div class="container-fluid">
	<h4>Riwayat Belanja</h4>

	<table class="table table-bordered table-hover table-striped">
		<tr>
			<th>NO</th>
			<th>Nama Penerima Makanan</th> 
			<th>No. Telp</th>
			<th>Jasa Kirim</th>
			<th>Tanggal Pemesanan</th> 
			<th>Status Pemesanan</th> 
			<th>Aksi</th>
		</tr>

		<?php
		$no=1;
		foreach ($riwayat as $inv): ?>
		<tr>
			<td><?php echo $no++ ?></td> 
			<td><?php echo $inv->nama ?></td> 
			<td><?php echo $inv->tlp ?></td>
			<td><?php echo $inv->jasa ?></td>
			<td><?php echo $inv->tgl_pesan ?></td>
			<td>
					<center>
					<?php if($inv->status_invoice == 0): ?>
                                        <button class="btn btn-warning btn-sm">Proses</button>
                                        <?php elseif($inv->status_invoice == 1): ?>                                               
                                            <button class="btn btn-success btn-sm">Selesai</button>
                                    <?php endif; ?>
                                   
					</center>
				</td>  
			<td>
				<center>
					
				<?php echo anchor('lanjutan/detail/'.$inv->id, '<div class="btn btn-sm btn-primary">Detail</div>') ?>
				</center>
			</td>
				
				
		</tr>

	<?php endforeach; ?>	

	</table>
</div>
