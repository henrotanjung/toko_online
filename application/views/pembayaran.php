<div class="container-fluid">
    <div class="row">
        <div class="col-md-2"></div>
        <div class="col-md-8">
            <div class="btn btn-sm btn-success">
                <?php
                $grand_total = 0;
                if ($keranjang = $this->cart->contents()) {
                    foreach ($keranjang as $item) {
                        $grand_total = $grand_total + $item['subtotal'];
                    }
                    echo 'Total Belanja Anda: Rp. ' . number_format($grand_total, 0, ',', '.');
                
                ?>
            </div>
            <br><br>
            <h3>Input alamat pengiriman dan pembayaran</h3>
            <form method='post' action="<?php echo base_url('dashboard/proses_pesanan') ?>">

                <div class="form-group">
                    <label for="">Input nama lengkap</label>
                    <input class="form-control" type="text" name="nama">
                </div>
                <div class="form-group">
                    <label for="">Alamat Lengkap</label>
                    <input class="form-control" type="text" name="alamat">
                </div>
                <div class="form-group">
                    <label for="">No. Telpon</label>
                    <input class="form-control" type="text" name="no_telp">
                </div>
                <div class="form-group">
                    <label for="">Jasa Pengiriman</label>
                    <select class="form-control" name="" id="">
                        <option value="">JNE</option>
                        <option value="">TIKI Pos Indonesia</option>
                        <option value="">Pos Indoneisa</option>
                        <option value="">Gojek</option>
                        <option value="">Grab</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="">Pilih Bank</label>
                    <select class="form-control" name="" id="">
                        <option value="">BCA</option>
                        <option value="">BNI</option>
                        <option value="">MANDIRI</option>
                        <option value="">BRI</option>
                    </select>
                </div>
                <button class="btn btn-sm btn-primary mb-3" type="submit">Pesan</button>
            </form>
                <?php } else {
                    echo "<h4 style='font-color: yellow;'>Keranjang belanja anda masih kosong!</h4>";
                }
        
         ?>
        </div>


        <div class="col-md-2"></div>
    </div>
</div>