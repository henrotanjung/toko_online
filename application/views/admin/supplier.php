<div class="container-fluid">
    <h5>Table Supplier</h5>
    <a class="btn btn-sm btn-primary mb-2" href="<?php echo base_url('admin/partner/tambah_supplier') ?>">Tambah</a>

    <table class="table table-borderd">
        <tr>
            <th>NO</th>
            <th>NAMA</th>
            <th>Hp</th>
            <th>ALAMAT</th>
            <th colspan="3">AKSI</th>
        </tr>

        <?php
        $no = 1;
        foreach ($supplier as $row) :
        ?>
            <tr>
                <td><?php echo $no++;  ?></td>
                <td><?php echo $row->nama; ?></td>
                <td><?php echo $row->hp; ?></td>
                <td><?php echo $row->alamat; ?></td>
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