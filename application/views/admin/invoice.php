<div class="container-fluid">
	<h4>Invoice Pemesanan Produk</h4>

	<table class="table table-bordered table-hover table-striped">
		<tr>
			<th>Id Invoice</th>
			<th>Nama Penerima Makanan</th> 
			<th>Tanggal Pemesanan</th> 
			<th>Status Pemesanan</th> 
			<th>Aksi</th>
		</tr>

		<?php foreach ($invoice as $inv): ?>
			
			<tr>
				<td><?php echo $inv->id ?></td>
				<td><?php echo $inv->nama ?></td> 
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
					<?php echo anchor('admin/invoice/detail/'.$inv->id, '<div class="btn btn-sm btn-primary">Detail</div>')?>
					<?php if($inv->status_invoice == 0): ?>
                                            <?php echo anchor('admin/invoice/ValidasiInvoice/'.$inv->id, '<div class="btn btn-sm btn-primary">Selesai</div>')?>"
                                            <?php endif; ?> 
					</center>
				</td>
				
			</tr>

		<?php endforeach; ?>
	</table>
</div>	
