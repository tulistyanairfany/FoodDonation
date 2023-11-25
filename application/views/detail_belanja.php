<div class="container-fluid">
	<h4>Detail Belanja</h4>

	<table class="table table-bordered table-hover table-striped">
		
		<tr>
			<th>NO</th>
			<th>NAMA PRODUK</th>
			<th>JUMLAH PESANAN</th> 
		</tr>

		<?php  
		$total = 0;
		$no=1;
		foreach ($pesanan as $psn) :
			$subtotal = $psn->jumlah * $psn->harga;
			$total += $subtotal;
		 ?>

		 <tr>
		 	<td><?php echo $no++ ?></td> 
		 	<td><?php echo $psn->nama_makanan ?></td>
		 	<td><?php echo $psn->jumlah ?></td>  
		 </tr>

		<?php endforeach ?>

		<tr>
			<td colspan="4" align="right">Total</td> 
		</tr>
 
	</table>

	<a href="<?php echo base_url('lanjutan/riwayat_belanja') ?>"><div class="btn btn-sm btn-primary">Kembali</div></a>

</div>
