<div class="container-fluid">
    <h5>Table Customer</h5>

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
        foreach ($customer as $row) :
        ?>
            <tr>
                <td><?php echo $no++;  ?></td>
                <td><?php echo $row->nama; ?></td>
                <td><?php echo $row->hp; ?></td>
                <td><?php echo $row->alamat; ?></td>
                <td align="left">
                    <?php echo anchor('admin/data_barang/detail/' . $row->id, '<div class="btn btn-success btn-sm"><i class="fas fa-search-plus" ></i></div>') ?>
                    <?php echo anchor('admin/data_barang/edit/' . $row->id, '<div class="btn btn-success btn-sm"><i class="fas fa-edit" ></i></div>') ?>
                    <div class="btn btn-success btn-sm"><i class="fas fa-trash"></i></div>
                </td>
            </tr>
        <?php
        endforeach;
        ?>
    </table>

</div>