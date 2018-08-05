<h1 class="text-center">Pembatalan</h1>
<h2 class="text-center">Uang Kembali</h2>
<br><br>

<div class="row">
    <div class="col-xs-12">

        <!-- syarat dan ketentuan -->
        <div class="well">
            <p class="text-info text-center">
                <strong>Syarat dan Ketentuan</strong>
            </p>
            <ul>
                <li>
                    <p>Jamaah mendapat denda sebesar 25 % dari harga paket apabila hari melakukan pembatalan sekitar hari pendaftaran.</p>
                </li>
                <li>
                    <p>Jamaah mendapat denda sebesar 50 % dari harga paket apabila hari melakukan pembatalan sebulan sebelum hari keberangkatan.</p>
                </li>
                <li>
                    <p>Jamaah mendapat denda sebesar 75 % dari harga paket apabila hari melakukan pembatalan seminggu sebelum hari keberangkatan.</p>
                </li>
                <li>
                    <p>Pembatalan akan di review terlebih dahulu oleh petugas kami</p>
                </li>
            </ul>
        </div>
        
        <div class="col-xs-12 col-md-6 col-md-offset-3">

            <!-- form -->
            <?php echo form_open('jamaah/metodebatal1/'.$kodependaftaran) ?>

                 <!-- alasan -->
                 <div class="form-group">
                    <label>Alasan Pembatalan:</label>
                    <textarea class="form-control" name="alasan"></textarea>
                    <div style="background-color: #f44242; text-align: center;">
                        <span style="color: white;"><?php echo form_error('alasan') ?></span>
                    </div>
                </div>

                <!-- setuju -->
                <div class="form-group text-center">
                    <input type="checkbox" value="setuju" name="setuju">
                    <label>saya menyetujui syarat dan ketentuan diatas</label>
                    <div style="background-color: #f44242; text-align: center;">
                        <span style="color: white;"><?php echo form_error('setuju') ?></span>
                    </div>
                </div>

                <!-- button -->
                <div class="col-xs-6">
                    <button type="submit" class="btn btn-info btn-block">Submit</button>
                </div>

                <div class="col-xs-6">
                    <a href="<?php echo base_url() ?>jamaah/pembatalan" class="btn btn-warning btn-block">Kembali</a>
                </div>
                
            <?php echo form_close() ?>   

        </div>

    </div>
</div>