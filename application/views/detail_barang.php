<div class="container-fluid">

    <div class="card">
        <div class="card-header">Detail Product</div>
        <div class="card-body">
            <?php foreach ($barang as $brg) : ?>
                <div class="row">
                    <div class="col-md-4">
                        <img src="<?php echo base_url('uploads/' . $brg->gambar); ?>" alt="" class="card-img-top">
                    </div>
                    <div class="col-md-8">
                        <table class="table">
                            <tr>
                                <td>Nama Produk</td>
                                <td><strong><?php echo $brg->nama_brg; ?></strong></td>
                            </tr>
                            <tr>
                                <td>Keterangan</td>
                                <td><strong><?php echo $brg->keterangan; ?></strong></td>
                            </tr>
                            <tr>
                                <td>Kategori</td>
                                <td><strong><?php echo $brg->kategori; ?></strong></td>
                            </tr>
                            <tr>
                                <td>Stok</td>
                                <td><strong><?php echo $brg->stock; ?></strong></td>
                            </tr>
                            <tr>
                                <td>Harga</td>
                                <td><strong><button class="btn-sm btn-success">Rp. <?php echo number_format($brg->harga, 0,',','.') ; ?></button></strong></td>
                            </tr>
                        </table>
                        <?php echo anchor('dashboard/tambah_ke_keranjang/'.$brg->id_brg, '<div class="btn btn-sm btn-primary">Tambah ke keranjang</div>') ?>
                        <?php echo anchor('dashboard/index/', '<div class="btn btn-sm btn-danger">Kembali</div>') ?>
                    </div>
                </div>

            <?php endforeach; ?>

        </div>
    </div>