<div class="row">
    <div class="col-xs-12">
        <h1 class="text-center">Berkas</h1>
    </div>
</div>


<div class="row">
    <div class="col-xs-12 col-md-4 col-md-offset-4">
        
        <!-- form upload -->
        <?php echo form_open_multipart('jamaah/uploadberkas/'.$kodependaftaran) ?>
            <?php if($pesan_error) : ?>
                <div style="background-color: #f44242; text-align: center;">
                    <span style="color: white;"><?php echo $pesan_error ?></span>
            </div>
            <?php endif ?>

            <!-- KTP -->
            <!-- <?php if($status_ktp != 'valid') : ?> -->
                <div class="form-group">
                    <label style="color: #222">KTP atau Akta Lahir: </label>
                    <input type="file" name="ktp" class="form-control">
                    <div style="background-color: #f44242; text-align: center;">
                        <span style="color: white;"><?php echo form_error('ktp') ?></span>
                    </div>
                </div>
            <!-- <?php endif ?> -->

            <!-- KK -->
            <!-- <?php if($status_kk != 'valid') : ?> -->
                <div class="form-group">
                    <label style="color: #222">Kartu Keluarga: </label>
                    <input type="file" name="kk" class="form-control">
                    <div style="background-color: #f44242; text-align: center;">
                        <span style="color: white;"><?php echo form_error('kk') ?></span>
                    </div>
                </div>
            <!-- <?php endif ?> -->

            <!-- Passport -->
            <!-- <?php if($status_passport != 'valid') : ?> -->
                <div class="form-group">
                    <label style="color: #222">Passport: </label>
                    <input type="file" name="passport" class="form-control">
                    <div style="background-color: #f44242; text-align: center;">
                        <span style="color: white;"><?php echo form_error('passport') ?></span>
                    </div>
                </div>
            <!-- <?php endif ?> -->

            <!-- notif -->
            <p class="text-danger">* Type file: jpg,png,gif</p>
            <p class="text-danger">* Ukuran file maksimal 500KB</p>

            <!-- submit -->
            <div class="form-group">
                <button type="submit" value="upload" class="btn btn-info btn-block">Upload</button>
            </div>
        <?php echo form_close() ?>
        
    </div>
</div>