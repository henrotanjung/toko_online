<div class="container-fluid">
    <h4>DETAIL PENDAPATAN</h4>
    <table class="table table-borderd">
        <tr>
            <th>NO</th>
            <th>ID Invoice</th>
            <th>Tanggal Bayar</th>
            <th>Metode Pembayaran</th>
            <th class="text-right">Total Terima</th>
        </tr>

        <?php
        $no = 1;
        $total = 0;
        foreach ($pendapatan as $row) :             ?>
            <tr>
                <td><?php echo $no++; ?></td>
                <td><?php echo $row->id_invoice; ?></td>
                <td><?php echo $row->tgl_bayar; ?></td>
                <td><?php echo $row->metode_pembayaran; ?></td>
                <td class="text-right"><?php echo $row->total_terima; ?></td>
            </tr>
        <?php 
        $total += $row->total_terima;  
        endforeach; ?>

        <tr>
            <td colspan="4" class="text-right"><strong>Grand Total</strong></td>
            <td class="text-right"><strong><?php echo $total; ?></strong></td>
        </tr>
    </table>

</div>