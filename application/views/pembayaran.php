<div class="container-fluid">
	<div class="row">
		<div class="col-md-2"></div>
		<div class="col-md-8"> 
				<?php 
				$grand_total = 0;
				if ($keranjang = $this->cart->contents())
				{
					foreach ($keranjang as $item)
					{
						$grand_total = $grand_total + $item['subtotal'];
					}
				// echo "<h4>Total Belanja Anda: Rp. ".number_format($grand_total,0,',','.');
				 ?>
			

			<h3>Masukkan Kelengkapan Data </h3>

			<form method="post" action="<?php echo base_url('dashboard/proses_pesanan') ?> ">
				
				<div class="form-group">
					<label>Nama Penerima Makanan</label>
					<input type="text" name="nama" placeholder="Nama Lengkap Anda" class="form-control">
				</div>
				<div class="form-group">
					<label>No. Telepon (Whatshapp)</label>
					<input type="text" name="tlp" placeholder="Nomor Lengkap Anda" class="form-control">
				</div>

				<div class="form-group">
					<label>Pengiriman</label>
					<select class="form-control" name="jasa">
						<option>Pick Up</option>
					</select>
				</div>

				<div class="form-group">
					<label>Total Harga</label>
					<select class="form-control" name="jasa">
						<option>0</option>
					</select>
				</div>

				<button type="submit" class="btn btn-sm btn-primary mb-3">Pesan</button>
			</form>

			<?php  
		} else 
		{
			echo "<h4>Keranjang Belanja Anda Masih Kosong";
		} 
			?>
		</div>


		<div class="col-md-2"></div>
	</div>
</div>
