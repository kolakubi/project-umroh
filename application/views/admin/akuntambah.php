<!-- judul -->
<h1 class="text-center">Tambah Akun</h1>
<br><br>

<!-- form -->
<div class="row">
    <div class="col-xs-12 col-md-6 col-md-offset-3">

        <!-- notif jika username sudah terdaftar -->
        <?php if($gagal) : ?>
            <p class="text-center" style="color: white; background-color: #f44242">Username Sudah Terdaftar</p>
        <?php endif ?>

        <!-- form -->
        <?php echo form_open('admin/akunTambah') ?>
            <!-- username -->
            <div class="form-group">
                <label style="color: #222">Username: </label>
                <input type="text" name="username" class="form-control">
                <div style="background-color: #f44242; text-align: center;">
                    <span style="color: white;"><?php echo form_error('username') ?></span>
                </div>
            </div>
            <!-- email -->
            <div class="form-group">
                <label style="color: #222">Email: </label>
                <input type="email" name="email" class="form-control">
                <div style="background-color: #f44242; text-align: center;">
                    <span style="color: white;"><?php echo form_error('email') ?></span>
                </div>
            </div>
            <!-- password -->
            <div class="form-group">
                <label style="color: #222">Password: </label>
                <input type="password" name="password" class="form-control">
                <div style="background-color: #f44242; text-align: center;">
                    <span style="color: white;"><?php echo form_error('password') ?></span>
                </div>
            </div>
            <!-- level -->
            <div class="form-group">
                <label style="color: #222">level: </label>
                <select name="level" class="form-control">
                    <option value="">-Pilih Level-</option>
                    <option value="1">Admin</option>
                    <option value="2">Keuangan</option>
                    <option value="3">Direktur</option>
                    <option value="4">Jamaah</option>
                    <option value="5">Front Office</option>
                </select>
                <div style="background-color: #f44242; text-align: center;">
                    <span style="color: white;"><?php echo form_error('level') ?></span>
                </div>
            </div>

            <!-- button -->
            <div class="row">
                <div class="col-xs-6">
                    <button type="submit" class="btn btn-info btn-block">Daftar</button>
                </div>
                <div class="col-xs-6">
                    <a href="<?php echo base_url() ?>admin/akun" class="btn btn-warning btn-block">Kembali</a>
                </div>
            </div>
            
        <?php echo form_close() ?>

    </div>
</div>

