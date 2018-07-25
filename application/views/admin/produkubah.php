<h1 class="text-center">Ubah Produk</h1>
<br><br>

<div class="row">
    <div class="col-xs-12 col-md-4 col-md-offset-4">

        <!-- form -->
        <?php echo form_open('admin/produkubah') ?>
            <div class="form-group">
                <label style="color: #222">Kode Produk: </label>
                <input type="text" name="kodeproduk" class="form-control" readonly="true" value="<?php echo $produk['kode_produk'] ?>">
                <div style="background-color: #f44242; text-align: center;">
                    <span style="color: white;"><?php echo form_error('kodeproduk') ?></span>
                </div>
            </div>
            <div class="form-group">
                <label style="color: #222">Nama Produk: </label>
                <input type="text" name="namaproduk" class="form-control"  value="<?php echo $produk['nama_produk'] ?>">
                <div style="background-color: #f44242; text-align: center;">
                    <span style="color: white;"><?php echo form_error('namaproduk') ?></span>
                </div>
            </div>
            <div class="form-group">
                <label style="color: #222">Harga: </label>
                <input type="number" name="harga" class="form-control"  value="<?php echo $produk['harga'] ?>">
                <div style="background-color: #f44242; text-align: center;">
                    <span style="color: white;"><?php echo form_error('harga') ?></span>
                </div>
            </div>
            <div class="form-group">
                <label style="color: #222">Hotel: </label>
                <input type="text" name="hotel" class="form-control"  value="<?php echo $produk['hotel'] ?>">
                <div style="background-color: #f44242; text-align: center;">
                    <span style="color: white;"><?php echo form_error('hotel') ?></span>
                </div>
            </div>
            <div class="form-group">
                <label style="color: #222">Hari: </label>
                <input type="text" name="hari" class="form-control"  value="<?php echo $produk['hari'] ?>">
                <div style="background-color: #f44242; text-align: center;">
                    <span style="color: white;"><?php echo form_error('hari') ?></span>
                </div>
            </div>
            <div class="form-group">
                <label style="color: #222">Kuota: </label>
                <input type="number" name="kuota" class="form-control"  value="<?php echo $produk['kuota'] ?>">
                <div style="background-color: #f44242; text-align: center;">
                    <span style="color: white;"><?php echo form_error('kuota') ?></span>
                </div>
            </div>


            <div class="form-group">
                <div class="col-xs-6">
                    <button type="submit" class="btn btn-info btn-block">Ubah</button>
                </div>
                <div class="col-xs-6">
                    <a href="<?php echo base_url() ?>admin" class="btn btn-warning btn-block">Batal</a>
                </div>
            </div>
        <?php echo form_close() ?>

    </div>
</div>
        