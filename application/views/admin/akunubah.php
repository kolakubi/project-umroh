<h1 class="text-center">Ubah Produk</h1>
<br><br>

<div class="row">
    <div class="col-xs-12 col-md-4 col-md-offset-4">

        <!-- form -->
        <?php echo form_open('admin/akunubah/'.$akun['username']) ?>
            <!-- username -->
            <div class="form-group">
                <label style="color: #222">Username: </label>
                <input type="text" name="username" class="form-control" readonly="true" value="<?php echo $akun['username'] ?>">
                <div style="background-color: #f44242; text-align: center;">
                    <span style="color: white;"><?php echo form_error('username') ?></span>
                </div>
            </div>
            <!-- password -->
            <div class="form-group">
                <label style="color: #222">Password: </label>
                <input type="text" name="password" class="form-control"  value="<?php echo $akun['password'] ?>">
                <div style="background-color: #f44242; text-align: center;">
                    <span style="color: white;"><?php echo form_error('password') ?></span>
                </div>
            </div>
            <!-- email -->
            <div class="form-group">
                <label style="color: #222">email: </label>
                <input type="email" name="email" class="form-control"  value="<?php echo $akun['email'] ?>">
                <div style="background-color: #f44242; text-align: center;">
                    <span style="color: white;"><?php echo form_error('email') ?></span>
                </div>
            </div>


            <div class="form-group">
                <div class="col-xs-6">
                    <button type="submit" class="btn btn-info btn-block">Ubah</button>
                </div>
                <div class="col-xs-6">
                    <a href="<?php echo base_url() ?>admin/akun" class="btn btn-warning btn-block">Batal</a>
                </div>
            </div>
        <?php echo form_close() ?>

    </div>
</div>
        