<div class="container-fluid">
    <h5>Table Purchase</h5>
    <a class="btn btn-sm btn-primary mb-2" href="<?php echo base_url('admin/purchase/tambah_purchase') ?>">Tambah</a>

    <table class="table table-borderd">
        <tr>
            <th>No. Order</th>
            <th>Supplier</th>
            <th>Tanggal Order</th>
            <th>Due Date</th>
            <th>Status</th>
            <th colspan="3">AKSI</th>
        </tr>

        <?php
        foreach ($purchases as $row) :
        ?>
            <tr>
                <td><?php echo $row->id; ?></td>
                <td><?php echo $row->nama_part; ?></td>
                <td><?php echo $row->tgl_order; ?></td>
                <td><?php echo $row->due_date; ?></td>
                <td><?php echo $row->status; ?></td>
                <td align="left">
                    <?php echo anchor('admin/data_barang/detail/' . $row->id, '<div class="btn btn-success btn-sm"><i class="fas fa-search-plus" ></i></div>') ?>
                    <?php echo anchor('admin/partner/edit_supplier/' . $row->id, '<div class="btn btn-success btn-sm"><i class="fas fa-edit" ></i></div>') ?>
                    <div class="btn btn-success btn-sm"><i class="fas fa-trash"></i></div>
                </td>
            </tr>
        <?php
        endforeach;
        ?>

    </table>

</div>