<div class="container-fluid">
    <h3><i class="fas"></i>EDIT DATA BARANG</h3>

    <form action="<?php echo base_url('admin/data_barang/update_data') ?>" method="post" enctype="multipart/form-data">
        <div class="form-group">
            <input type="hidden" name="id_brg" value="<?php echo $barang->id_brg; ?>" class="form-control">
            <label for="">Nama Barang</label>
            <input type="text" name="nama_brg" value="<?php echo $barang->nama_brg; ?>" class="form-control">
        </div>
        <div class="form-group">
            <label for="">Keterangan</label>
            <input type="text" name="keterangan" value="<?php echo $barang->keterangan; ?>" class="form-control">
        </div>
        <div class="form-group">
            <label for="">Kategori</label>
            <select name="kategori" id="" class="form-control">
                <option>Elektronik</option>
                <option>Pakaian Pria</option>
                <option>Pakaian Wanita</option>
                <option>Pakaian Anak-anak</option>
                <option>Peralatan Olahraga</option>
            </select>
        </div>
        <div class="form-group">
            <label for="">Harga</label>
            <input type="text" name="harga" value="<?php echo $barang->harga; ?>" class="form-control">
        </div>
        <div class="form-group">
            <label for="">Stok</label>
            <input type="text" name="stock" value="<?php echo $barang->stock; ?>" class="form-control">
        </div>

        <div class="modal-footer">
            <button type="submit" class="btn btn-danger" data-dismiss="modal">Close</button>
            <button type="submit" class="btn btn-primary">Simpan</button>
        </div>
    </form>


</div>