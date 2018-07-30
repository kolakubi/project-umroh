<h1 class="text-center">Pembatalan</h1>
<h3 class="text-center">diwariskan</h3>
<br><br>

<div class="row">
    <div class="col-xs-12 col-md-4 col-md-offset-4">

        <h4 class="text-center">isi biodata yang akan diwariskan</h4>
        <!-- form -->
        <?php echo form_open_multipart('home/submitformpendaftaran/umroh') ?>

            <!-- nomor ktp -->
            <div class="form-group">
                <label style="color: #222">Nomor KTP: </label>
                <input type="text" name="ktp" class="form-control" maxlength="20">
                <div style="background-color: #f44242; text-align: center;">
                    <span style="color: white;"><?php echo form_error('ktp') ?></span>
                </div>
            </div>

            <!-- nama lengkap -->
            <div class="form-group">
                <label style="color: #222">Nama Lengkap: </label>
                <input type="text" name="nama" class="form-control">
                <div style="background-color: #f44242; text-align: center;">
                    <span style="color: white;"><?php echo form_error('nama') ?></span>
                </div>
            </div>

            <!-- nama ayah kandung -->
            <div class="form-group">
                <label style="color: #222">Nama Ayah Kandung: </label>
                <input type="text" name="namaayah" class="form-control">
                <div style="background-color: #f44242; text-align: center;">
                    <span style="color: white;"><?php echo form_error('namaayah') ?></span>
                </div>
            </div>

            <!-- tempat lahir -->
            <div class="form-group">
                <label style="color: #222">Tempat Lahir: </label>
                <input type="text" name="tempatlahir" class="form-control">
                <div style="background-color: #f44242; text-align: center;">
                    <span style="color: white;"><?php echo form_error('tempatlahir') ?></span>
                </div>
            </div>

            <!-- tanggal lahir -->
            <div class="form-group">
                <label style="color: #222">Tanggal Lahir: </label>
                <input type="date" name="tanggallahir" class="form-control">
                <div style="background-color: #f44242; text-align: center;">
                    <span style="color: white;"><?php echo form_error('tanggallahir') ?></span>
                </div>
            </div>

            <!-- jenis kelamin -->
            <div class="form-group">
                <label style="color: #222">Jenis Kelamin: </label><br>
                <input type="radio" name="kelamin" value="Laki-laki"> Laki-Laki
                <input type="radio" name="kelamin" value="Perempuan"> Perempuan
                <div style="background-color: #f44242; text-align: center;">
                    <span style="color: white;"><?php echo form_error('kelamin') ?></span>
                </div>
            </div>

            <!-- kewarganegaraan -->
            <div class="form-group">
                <label style="color: #222">Kewarganegaraan: </label><br>
                <input type="radio" name="kewarganegaraan" value="WNI"> WNI
                <input type="radio" name="kewarganegaraan" value="WNA"> WNA
                <div style="background-color: #f44242; text-align: center;">
                    <span style="color: white;"><?php echo form_error('kewarganegaraan') ?></span>
                </div>
            </div>

            <!-- alamat -->
            <div class="form-group">
                <label style="color: #222">Alamat: </label>
                <textarea name="alamat" class="form-control" rows="4"></textarea>
                <div style="background-color: #f44242; text-align: center;">
                    <span style="color: white;"><?php echo form_error('alamat') ?></span>
                </div>
            </div>

            <!-- desa / keluarahan -->
            <div class="form-group">
                <label style="color: #222">Desa/Keluarahan: </label>
                <input type="text" name="kelurahan" class="form-control">
                <div style="background-color: #f44242; text-align: center;">
                    <span style="color: white;"><?php echo form_error('kelurahan') ?></span>
                </div>
            </div>

            <!-- kecamatan -->
            <div class="form-group">
                <label style="color: #222">Kecamatan: </label>
                <input type="text" name="kecamatan" class="form-control">
                <div style="background-color: #f44242; text-align: center;">
                    <span style="color: white;"><?php echo form_error('kecamatan') ?></span>
                </div>
            </div>

            <!-- kabupaten/kota -->
            <div class="form-group">
                <label style="color: #222">Kabupaten/Kota: </label>
                <input type="text" name="kabupaten" class="form-control">
                <div style="background-color: #f44242; text-align: center;">
                    <span style="color: white;"><?php echo form_error('kabupaten') ?></span>
                </div>
            </div>

            <!-- propinsi -->
            <div class="form-group">
                <label style="color: #222">Propinsi: </label>
                <input type="text" name="propinsi" class="form-control">
                <div style="background-color: #f44242; text-align: center;">
                    <span style="color: white;"><?php echo form_error('propinsi') ?></span>
                </div>
            </div>

            <!-- kode pos -->
            <div class="form-group">
                <label style="color: #222">Kode Pos: </label>
                <input type="text" name="kodepos" class="form-control">
                <div style="background-color: #f44242; text-align: center;">
                    <span style="color: white;"><?php echo form_error('kodepos') ?></span>
                </div>
            </div>

            <!-- telepon -->
            <div class="form-group">
                <label style="color: #222">Telepon: </label>
                <input type="text" name="telepon" class="form-control">
                <div style="background-color: #f44242; text-align: center;">
                    <span style="color: white;"><?php echo form_error('telepon') ?></span>
                </div>
            </div>

            <!-- hp -->
            <div class="form-group">
                <label style="color: #222">HP: </label>
                <input type="text" name="hp" class="form-control">
                <div style="background-color: #f44242; text-align: center;">
                    <span style="color: white;"><?php echo form_error('hp') ?></span>
                </div>
            </div>

            <!-- pendidikan -->
            <div class="form-group">
                <label style="color: #222">Pendidikan: </label><br>
                <input type="radio" name="pendidikan" value="SD"> SD<br>
                <input type="radio" name="pendidikan" value="SLTP"> SLTP<br>
                <input type="radio" name="pendidikan" value="SLTA"> SLTA<br>
                <input type="radio" name="pendidikan" value="SM/D1/D2/D3"> SM/D1/D2/D3<br>
                <input type="radio" name="pendidikan" value="S1"> S1<br>
                <input type="radio" name="pendidikan" value="S2"> S2<br>
                <input type="radio" name="pendidikan" value="S3"> S3<br>
                <input type="radio" name="pendidikan" value="Lainnya"> Lainnya
                <div style="background-color: #f44242; text-align: center;">
                    <span style="color: white;"><?php echo form_error('pendidikan') ?></span>
                </div>
            </div>

            <!-- pekerjaan -->
            <div class="form-group">
                <label style="color: #222">Pekerjaan: </label><br>
                <input type="radio" name="pekerjaan" value="PNS"> PNS<br>
                <input type="radio" name="pekerjaan" value="TNI/Polri"> TNI/Polri<br>
                <input type="radio" name="pekerjaan" value="Pengusaha"> Pengusaha<br>
                <input type="radio" name="pekerjaan" value="Tani/NElayan"> Tani/NElayan<br>
                <input type="radio" name="pekerjaan" value="Swasta"> Swasta<br>
                <input type="radio" name="pekerjaan" value="Ibu Rumah Tangga"> Ibu Rumah Tangga<br>
                <input type="radio" name="pekerjaan" value="Pelajar"> Pelajar<br>
                <input type="radio" name="pekerjaan" value="Lainnya"> Lainnya
                <div style="background-color: #f44242; text-align: center;">
                    <span style="color: white;"><?php echo form_error('pekerjaan') ?></span>
                </div>
            </div>
            
            <!-- golongan darah -->
            <div class="form-group">
                <label style="color: #222">Golongan Darah: </label>
                <input type="text" name="golongandarah" class="form-control">
                <div style="background-color: #f44242; text-align: center;">
                    <span style="color: white;"><?php echo form_error('golongandarah') ?></span>
                </div>
            </div>

            <!-- ciri-ciri -->
            <div class="form-group">
                <label style="color: #222">Ciri-ciri: </label>
                <div class="row">
                    <div class="col-xs-12 col-md-4">
                        <label style="color: #222">1. Rambut: </label>
                        <input type="text" name="rambut" class="form-control">
                        <div style="background-color: #f44242; text-align: center;">
                            <span style="color: white;"><?php echo form_error('rambut') ?></span>
                        </div>
                    </div>
                    <div class="col-xs-12 col-md-4">
                        <label style="color: #222">2. Alis: </label>
                        <input type="text" name="alis" class="form-control">
                        <div style="background-color: #f44242; text-align: center;">
                            <span style="color: white;"><?php echo form_error('alis') ?></span>
                        </div>
                    </div>
                    <div class="col-xs-12 col-md-4">
                        <label style="color: #222">3. Hidung: </label>
                        <input type="text" name="hidung" class="form-control">
                        <div style="background-color: #f44242; text-align: center;">
                            <span style="color: white;"><?php echo form_error('hidung') ?></span>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-xs-12 col-md-4">
                        <label style="color: #222">4. Tinggi: </label>
                        <input type="text" name="tinggi" class="form-control">
                        <div style="background-color: #f44242; text-align: center;">
                            <span style="color: white;"><?php echo form_error('tinggi') ?></span>
                        </div>
                    </div>
                    <div class="col-xs-12 col-md-4">
                        <label style="color: #222">5. Berat: </label>
                        <input type="text" name="berat" class="form-control">
                        <div style="background-color: #f44242; text-align: center;">
                            <span style="color: white;"><?php echo form_error('berat') ?></span>
                        </div>
                    </div>
                    <div class="col-xs-12 col-md-4">
                        <label style="color: #222">6. Muka: </label>
                        <input type="text" name="muka" class="form-control">
                        <div style="background-color: #f44242; text-align: center;">
                            <span style="color: white;"><?php echo form_error('muka') ?></span>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- foto -->
            <div class="form-group">
                <label style="color: #222">Foto: </label>
                <input type="file" name="foto" class="form-control">
                <div style="background-color: #f44242; text-align: center;">
                    <span style="color: white;"><?php echo form_error('foto') ?></span>
                </div>
            </div>

            <!-- notif -->
            <p class="text-danger">* Type file: jpg,png,gif</p>
            <p class="text-danger">* Ukuran file maksimal 500KB</p>
            

            <div class="form-group">
                <button type="submit" class="btn btn-info btn-block">Submit</button>
            </div>

        <?php echo form_close() ?>

    </div>
</div>