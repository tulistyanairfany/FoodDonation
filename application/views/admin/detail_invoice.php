<div class="container-fluid">
    <h4>Detail Pesanan <div class="btn btn-sm btn-success">No. Invoice: <?php echo $invoice->id ?></div></h4>

    <table class="table table-bordered table-hover table-striped">

        <tr>
            <th>Id Makanan</th>
            <th>Nama Makanan</th>
            <th>Jumlah Pesanan</th>
            <th>Harga Satuan</th>
            <th>SUB-TOTAL</th>
        </tr>

        <?php
        $total = 0;
        if (!empty($pesanan) && is_array($pesanan)) {
            foreach ($pesanan as $psn) :
                $subtotal = $psn->jumlah * $psn->harga;
                $total += $subtotal; 
        ?>

                <tr>
                    <td><?php echo $psn->id_makanan ?></td>
                    <td><?php echo $psn->nama_makanan ?></td>
                    <td><?php echo $psn->jumlah ?></td>
                    <td><?php echo number_format($psn->harga, 0, ',', '.') ?></td>
                    <td><?php echo number_format($subtotal, 0, ',', '.') ?></td>
                </tr>

        <?php
            endforeach;
        } else {
            // Tampilkan pesan atau aksi yang sesuai jika $pesanan kosong atau bukan array
            echo '<tr><td colspan="5">Tidak ada data pesanan</td></tr>';
        }
        ?>

        <tr>
            <td colspan="4" align="right">Grand Total</td>
            <td align="right">Rp. <?php echo number_format($total, 0, ',', '.') ?></td>
        </tr>

    </table>

    <a href="<?php echo base_url('admin/invoice/index') ?>"><div class="btn btn-sm btn-primary">Kembali</div></a>
</div>
