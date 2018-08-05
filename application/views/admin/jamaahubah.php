<!-- Judul -->
<div class="row">
    <h1 class="text-center">Ubah Data Jamaah</h1>
</div> <!-- end of row -->

<!-- Formn -->
<div class="row">
    <div class="col-xs-12 col-md-6 col-md-offset-3">

        <!-- form -->
        <?php echo form_open_multipart('admin/jamaahubah/'.$hasil['ktp']) ?>

            <!-- nomor ktp -->
            <div class="form-group">
                <label style="color: #222">Nomor KTP: </label>
                <input type="text" name="ktp" class="form-control" maxlength="20" value="<?php echo $hasil['ktp'] ?>" readonly>
                <div style="background-color: #f44242; text-align: center;">
                    <span style="color: white;"><?php echo form_error('ktp') ?></span>
                </div>
            </div>

            <!-- nama lengkap -->
            <div class="form-group">
                <label style="color: #222">Nama Lengkap: </label>
                <input type="text" name="nama" class="form-control" value="<?php echo $hasil['nama'] ?>">
                <div style="background-color: #f44242; text-align: center;">
                    <span style="color: white;"><?php echo form_error('nama') ?></span>
                </div>
            </div>

            <!-- nama ayah kandung -->
            <div class="form-group">
                <label style="color: #222">Nama Ayah Kandung: </label>
                <input type="text" name="namaayah" class="form-control" value="<?php echo $hasil['namaayah'] ?>">
                <div style="background-color: #f44242; text-align: center;">
                    <span style="color: white;"><?php echo form_error('namaayah') ?></span>
                </div>
            </div>

            <!-- tempat lahir -->
            <div class="form-group">
                <label style="color: #222">Tempat Lahir: </label>
                <input type="text" name="tempatlahir" class="form-control" value="<?php echo $hasil['tempatlahir'] ?>">
                <div style="background-color: #f44242; text-align: center;">
                    <span style="color: white;"><?php echo form_error('tempatlahir') ?></span>
                </div>
            </div>

            <!-- tanggal lahir -->
            <div class="form-group">
                <label style="color: #222">Tanggal Lahir: </label>
                <input type="date" name="tanggallahir" class="form-control" value="<?php echo $hasil['tanggallahir'] ?>">
                <div style="background-color: #f44242; text-align: center;">
                    <span style="color: white;"><?php echo form_error('tanggallahir') ?></span>
                </div>
            </div>

            <!-- jenis kelamin -->
            <div class="form-group">
                <label style="color: #222">Jenis Kelamin: </label><br>
                <input type="radio" name="kelamin" value="Laki-laki" <?php if($hasil['kelamin'] == 'Laki-laki'){echo 'checked';} ?>> Laki-Laki
                <input type="radio" name="kelamin" value="Perempuan" <?php if($hasil['kelamin'] == 'Perempuan'){echo 'checked';} ?>> Perempuan
                <div style="background-color: #f44242; text-align: center;">
                    <span style="color: white;"><?php echo form_error('kelamin') ?></span>
                </div>
            </div>

            <!-- kewarganegaraan -->
            <div class="form-group">
                <label style="color: #222">Kewarganegaraan: </label><br>
                <input type="radio" name="kewarganegaraan" value="WNI" <?php if($hasil['kewarganegaraan'] == 'WNI'){echo 'checked';} ?>> WNI
                <input type="radio" name="kewarganegaraan" value="WNA" <?php if($hasil['kewarganegaraan'] == 'WNA'){echo 'checked';} ?>> WNA
                <div style="background-color: #f44242; text-align: center;">
                    <span style="color: white;"><?php echo form_error('kewarganegaraan') ?></span>
                </div>
            </div>

            <!-- alamat -->
            <div class="form-group">
                <label style="color: #222">Alamat: </label>
                <textarea name="alamat" class="form-control" rows="4"><?php echo $hasil['alamat'] ?>"</textarea>
                <div style="background-color: #f44242; text-align: center;">
                    <span style="color: white;"><?php echo form_error('alamat') ?></span>
                </div>
            </div>

            <!-- desa / keluarahan -->
            <div class="form-group">
                <label style="color: #222">Desa/Keluarahan: </label>
                <input type="text" name="kelurahan" class="form-control" value="<?php echo $hasil['kelurahan'] ?>">
                <div style="background-color: #f44242; text-align: center;">
                    <span style="color: white;"><?php echo form_error('kelurahan') ?></span>
                </div>
            </div>

            <!-- kecamatan -->
            <div class="form-group">
                <label style="color: #222">Kecamatan: </label>
                <input type="text" name="kecamatan" class="form-control" value="<?php echo $hasil['kecamatan'] ?>">
                <div style="background-color: #f44242; text-align: center;">
                    <span style="color: white;"><?php echo form_error('kecamatan') ?></span>
                </div>
            </div>

            <!-- kabupaten/kota -->
            <div class="form-group">
                <label style="color: #222">Kabupaten/Kota: </label>
                <input type="text" name="kabupaten" class="form-control" value="<?php echo $hasil['kabupaten'] ?>">
                <div style="background-color: #f44242; text-align: center;">
                    <span style="color: white;"><?php echo form_error('kabupaten') ?></span>
                </div>
            </div>

            <!-- propinsi -->
            <div class="form-group">
                <label style="color: #222">Propinsi: </label>
                <input type="text" name="propinsi" class="form-control" value="<?php echo $hasil['propinsi'] ?>">
                <div style="background-color: #f44242; text-align: center;">
                    <span style="color: white;"><?php echo form_error('propinsi') ?></span>
                </div>
            </div>

            <!-- kode pos -->
            <div class="form-group">
                <label style="color: #222">Kode Pos: </label>
                <input type="text" name="kodepos" class="form-control" value="<?php echo $hasil['kodepos'] ?>">
                <div style="background-color: #f44242; text-align: center;">
                    <span style="color: white;"><?php echo form_error('kodepos') ?></span>
                </div>
            </div>

            <!-- telepon -->
            <div class="form-group">
                <label style="color: #222">Telepon: </label>
                <input type="text" name="telepon" class="form-control" value="<?php echo $hasil['telepon'] ?>">
                <div style="background-color: #f44242; text-align: center;">
                    <span style="color: white;"><?php echo form_error('telepon') ?></span>
                </div>
            </div>

            <!-- hp -->
            <div class="form-group">
                <label style="color: #222">HP: </label>
                <input type="text" name="hp" class="form-control" value="<?php echo $hasil['hp'] ?>">
                <div style="background-color: #f44242; text-align: center;">
                    <span style="color: white;"><?php echo form_error('hp') ?></span>
                </div>
            </div>

            <!-- pendidikan -->
            <div class="form-group">
                <label style="color: #222">Pendidikan: </label><br>
                <input type="radio" name="pendidikan" value="SD" <?php if($hasil['pendidikan'] == 'SD'){echo 'checked';} ?>> SD<br>
                <input type="radio" name="pendidikan" value="SLTP" <?php if($hasil['pendidikan'] == 'SLTP'){echo 'checked';} ?>> SLTP<br>
                <input type="radio" name="pendidikan" value="SLTA" <?php if($hasil['pendidikan'] == 'SLTA'){echo 'checked';} ?>> SLTA<br>
                <input type="radio" name="pendidikan" value="SM/D1/D2/D3" <?php if($hasil['pendidikan'] == 'SM/D1/D2/D3'){echo 'checked';} ?>> SM/D1/D2/D3<br>
                <input type="radio" name="pendidikan" value="S1" <?php if($hasil['pendidikan'] == 'S1'){echo 'checked';} ?>> S1<br>
                <input type="radio" name="pendidikan" value="S2" <?php if($hasil['pendidikan'] == 'S2'){echo 'checked';} ?>> S2<br>
                <input type="radio" name="pendidikan" value="S3" <?php if($hasil['pendidikan'] == 'S3'){echo 'checked';} ?>> S3<br>
                <input type="radio" name="pendidikan" value="Lainnya" <?php if($hasil['pendidikan'] == 'Lainnya'){echo 'checked';} ?>> Lainnya
                <div style="background-color: #f44242; text-align: center;">
                    <span style="color: white;"><?php echo form_error('pendidikan') ?></span>
                </div>
            </div>

            <!-- pekerjaan -->
            <div class="form-group">
                <label style="color: #222">Pekerjaan: </label><br>
                <input type="radio" name="pekerjaan" value="PNS" <?php if($hasil['pekerjaan'] == 'PNS'){echo 'checked';} ?>> PNS<br>
                <input type="radio" name="pekerjaan" value="TNI/Polri" <?php if($hasil['pekerjaan'] == 'TNI/Polri'){echo 'checked';} ?>> TNI/Polri<br>
                <input type="radio" name="pekerjaan" value="Pengusaha" <?php if($hasil['pekerjaan'] == 'Pengusaha'){echo 'checked';} ?>> Pengusaha<br>
                <input type="radio" name="pekerjaan" value="Tani/NElayan" <?php if($hasil['pekerjaan'] == 'Tani/NElayan'){echo 'checked';} ?>> Tani/NElayan<br>
                <input type="radio" name="pekerjaan" value="Swasta"> <?php if($hasil['pekerjaan'] == 'Swasta'){echo 'checked';} ?> Swasta<br>
                <input type="radio" name="pekerjaan" value="Ibu Rumah Tangga" <?php if($hasil['pekerjaan'] == 'Ibu Rumah Tangga'){echo 'checked';} ?>> Ibu Rumah Tangga<br>
                <input type="radio" name="pekerjaan" value="Pelajar" <?php if($hasil['pekerjaan'] == 'Pelajar'){echo 'checked';} ?>> Pelajar<br>
                <input type="radio" name="pekerjaan" value="Lainnya" <?php if($hasil['pekerjaan'] == 'Lainnya'){echo 'checked';} ?>> Lainnya
                <div style="background-color: #f44242; text-align: center;">
                    <span style="color: white;"><?php echo form_error('pekerjaan') ?></span>
                </div>
            </div>
            
            <!-- golongan darah -->
            <div class="form-group">
                <label style="color: #222">Golongan Darah: </label>
                <input type="text" name="golongandarah" class="form-control" value="<?php echo $hasil['golongandarah'] ?>">
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
                        <input type="text" name="rambut" class="form-control" value="<?php echo $hasil['rambut'] ?>">
                        <div style="background-color: #f44242; text-align: center;">
                            <span style="color: white;"><?php echo form_error('rambut') ?></span>
                        </div>
                    </div>
                    <div class="col-xs-12 col-md-4">
                        <label style="color: #222">2. Alis: </label>
                        <input type="text" name="alis" class="form-control" value="<?php echo $hasil['alis'] ?>">
                        <div style="background-color: #f44242; text-align: center;">
                            <span style="color: white;"><?php echo form_error('alis') ?></span>
                        </div>
                    </div>
                    <div class="col-xs-12 col-md-4">
                        <label style="color: #222">3. Hidung: </label>
                        <input type="text" name="hidung" class="form-control" value="<?php echo $hasil['hidung'] ?>">
                        <div style="background-color: #f44242; text-align: center;">
                            <span style="color: white;"><?php echo form_error('hidung') ?></span>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-xs-12 col-md-4">
                        <label style="color: #222">4. Tinggi: </label>
                        <input type="text" name="tinggi" class="form-control" value="<?php echo $hasil['tinggi'] ?>">
                        <div style="background-color: #f44242; text-align: center;">
                            <span style="color: white;"><?php echo form_error('tinggi') ?></span>
                        </div>
                    </div>
                    <div class="col-xs-12 col-md-4">
                        <label style="color: #222">5. Berat: </label>
                        <input type="text" name="berat" class="form-control" value="<?php echo $hasil['berat'] ?>">
                        <div style="background-color: #f44242; text-align: center;">
                            <span style="color: white;"><?php echo form_error('berat') ?></span>
                        </div>
                    </div>
                    <div class="col-xs-12 col-md-4">
                        <label style="color: #222">6. Muka: </label>
                        <input type="text" name="muka" class="form-control" value="<?php echo $hasil['muka'] ?>">
                        <div style="background-color: #f44242; text-align: center;">
                            <span style="color: white;"><?php echo form_error('muka') ?></span>
                        </div>
                    </div>
                </div>
            </div>

            <div class="form-group">
                <div class="col-xs-6">
                    <button type="submit" class="btn btn-info btn-block">Ubah</button>
                </div>
                <div class="col-xs-6">
                    <a class="btn btn-danger btn-block" href="<?php echo base_url() ?>admin/jamaah">Kembali</a>
                </div>
            </div>
        <?php echo form_close() ?>

    </div> <!-- end of form -->

</div> <!-- end of row -->