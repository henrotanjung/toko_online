<div class="container-fluid">
    <h4>Invoice Pemesanan Product</h4>

    <table class="table table-striped">
        <tr>
            <th>Id Invoice</th>
            <th>Nama Pemesan</th>
            <th>Alamat Pengiriman</th>
            <th>Tanggal Pemesanan</th>
            <th>Batas Pemesanan</th>
            <th>Status</th>
            <th colspan="3">Aksi</th>
        </tr>
        <?php foreach ($invoice as $inv): ?>
        <tr>
            <td><?php echo $inv->id; ?></td>
            <td><?php echo $inv->nama; ?></td>
            <td><?php echo $inv->alamat; ?></td>
            <td><?php echo $inv->tgl_pesan; ?></td>
            <td><?php echo $inv->batas_bayar; ?></td>
            <td><?php echo ($inv->status == 1 ? 'Pending': ($inv->status == 2 ? 'Paid': 'Cancel')); ?></td>
            <td><?php echo anchor('admin/invoice/detail/'. $inv->id, '<div class="btn btn-sm btn-primary">Detail</div>') ?> </td>
            <td><?php echo anchor('admin/invoice/bayar/'. $inv->id, '<div class="btn btn-sm btn-primary">Bayar</div>') ?> </td>
            <td><?php echo anchor('admin/invoice/cancel/'. $inv->id, '<div class="btn btn-sm btn-danger">Cancel</div>') ?> </td>
        </tr>

        <?php endforeach; ?>
        </table>
</div>