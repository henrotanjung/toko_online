<div class="container-fluid">
    <h1>Edit Supplier</h1>
    <form action="<?php echo base_url('admin/partner/update') ?>" method="post" enctype="multipart/form-data">
        <div class="row">
            <div class="col-6">
                <div class="form-group">
                    <label for="">Nama</label>
                    <input hidden name="id" value="<?php echo $supplier->id; ?>">
                    <input type="text" name="nama" value="<?php echo $supplier->nama; ?>" class="form-control">
                </div>
                <div class="form-group">
                    <label for="">Hp</label>
                    <input type="text" name="hp" value="<?php echo $supplier->hp; ?>" class="form-control">
                </div>

                <div class="form-group">
                    <label for="">Alamat</label>
                    <textarea name="alamat" id="" rows="3" class="form-control"><?php echo $supplier->alamat;?></textarea>
                </div>
            </div>
            <div class="col-6 form-group">
                <div class="form-check form-check-inline">
                    <input class="col-2 form-check-input" type="checkbox" id="supplier" name="supplier" <?php echo ($supplier->supplier == '1' ? 'checked="checked"': ''); ?> value="1">
                    <label class="form-check-label pr-2" for="customer">Supplier</label>
                    <input class="col-2 form-check-input" type="checkbox" id="customer" name="customer" value="1">
                    <label class="form-check-label" for="customer">Customer</label>
                </div>
            </div>
        </div>
        <div class="modal-footer">
            <button type="submit" class="btn btn-danger" data-dismiss="modal">Close</button>
            <button type="submit" class="btn btn-primary">Simpan</button>
        </div>
    </form>
</div>