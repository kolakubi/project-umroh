<!-- Judul -->
<div class="row">
    <h1>Form Pendaftaran Haji Khusus / Umroh</h1>
</div> <!-- end of row -->

<!-- Formn -->
<div class="row">
    <div class="col-xs-12 col-md-6">

        <!-- form -->
        <?php echo form_open('home/submitformpendaftaran') ?>
            <div class="form-group">
                <label style="color: #222">Nomor KTP: </label>
                <input type="text" name="ktp" class="form-control">
                <div style="background-color: #f44242; text-align: center;">
                    <span style="color: white;"><?php echo form_error('ktp') ?></span>
                </div>
            </div>
            <div class="form-group">
                <label style="color: #222">Nama Lengkap: </label>
                <input type="text" name="nama" class="form-control">
                <div style="background-color: #f44242; text-align: center;">
                    <span style="color: white;"><?php echo form_error('nama') ?></span>
                </div>
            </div>
            <div class="form-group">
                <label style="color: #222">Nama Ayah Kandung: </label>
                <input type="text" name="namaayah" class="form-control">
                <div style="background-color: #f44242; text-align: center;">
                    <span style="color: white;"><?php echo form_error('namaayah') ?></span>
                </div>
            </div>
            <div class="form-group">
                <label style="color: #222">Tempat Lahir: </label>
                <input type="text" name="tempatlahir" class="form-control">
                <div style="background-color: #f44242; text-align: center;">
                    <span style="color: white;"><?php echo form_error('tempatlahir') ?></span>
                </div>
            </div>
            <div class="form-group">
                <label style="color: #222">Tanggal Lahir: </label>
                <input type="date" name="tanggallahir" class="form-control">
                <div style="background-color: #f44242; text-align: center;">
                    <span style="color: white;"><?php echo form_error('tanggallahir') ?></span>
                </div>
            </div>
            <div class="form-group">
                <label style="color: #222">Jenis Kelamin: </label><br>
                <input type="radio" name="kelamin" value="Laki-laki"> Laki-Laki
                <input type="radio" name="kelamin" value="Perempuan"> Perempuan
                <div style="background-color: #f44242; text-align: center;">
                    <span style="color: white;"><?php echo form_error('kelamin') ?></span>
                </div>
            </div>
            <div class="form-group">
                <label style="color: #222">Kewarganegaraan: </label><br>
                <input type="radio" name="kewarganegaraan" value="WNI"> WNI
                <input type="radio" name="kewarganegaraan" value="WNA"> WNA
                <div style="background-color: #f44242; text-align: center;">
                    <span style="color: white;"><?php echo form_error('kewarganegaraan') ?></span>
                </div>
            </div>
            <div class="form-group">
                <label style="color: #222">Alamat: </label>
                <textarea name="alamat" class="form-control" rows="4"></textarea>
                <div style="background-color: #f44242; text-align: center;">
                    <span style="color: white;"><?php echo form_error('alamat') ?></span>
                </div>
            </div>
            <div class="form-group">
                <label style="color: #222">Desa/Keluarahan: </label>
                <input type="text" name="kelurahan" class="form-control">
                <div style="background-color: #f44242; text-align: center;">
                    <span style="color: white;"><?php echo form_error('kelurahan') ?></span>
                </div>
            </div>
            <div class="form-group">
                <label style="color: #222">Kecamatan: </label>
                <input type="text" name="kecamatan" class="form-control">
                <div style="background-color: #f44242; text-align: center;">
                    <span style="color: white;"><?php echo form_error('kecamatan') ?></span>
                </div>
            </div>
            <div class="form-group">
                <label style="color: #222">Kabupaten/Kota: </label>
                <input type="text" name="kabupaten" class="form-control">
                <div style="background-color: #f44242; text-align: center;">
                    <span style="color: white;"><?php echo form_error('kabupaten') ?></span>
                </div>
            </div>
            <div class="form-group">
                <label style="color: #222">Propinsi: </label>
                <input type="text" name="propinsi" class="form-control">
                <div style="background-color: #f44242; text-align: center;">
                    <span style="color: white;"><?php echo form_error('propinsi') ?></span>
                </div>
            </div>
            <div class="form-group">
                <label style="color: #222">Kode Pos: </label>
                <input type="text" name="kodepos" class="form-control">
                <div style="background-color: #f44242; text-align: center;">
                    <span style="color: white;"><?php echo form_error('kodepos') ?></span>
                </div>
            </div>
            <div class="form-group">
                <label style="color: #222">Telepon: </label>
                <input type="text" name="telepon" class="form-control">
                <div style="background-color: #f44242; text-align: center;">
                    <span style="color: white;"><?php echo form_error('telepon') ?></span>
                </div>
            </div>
            <div class="form-group">
                <label style="color: #222">HP: </label>
                <input type="text" name="hp" class="form-control">
                <div style="background-color: #f44242; text-align: center;">
                    <span style="color: white;"><?php echo form_error('hp') ?></span>
                </div>
            </div>
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
            <div class="form-group">
                <label style="color: #222">Pengalaman Haji: </label><br>
                <input type="radio" name="pengalamanhaji" value="Pernah"> Pernah<br>
                <input type="radio" name="pengalamanhaji" value="Belum Pernah"> Belum Pernah
                <div style="background-color: #f44242; text-align: center;">
                    <span style="color: white;"><?php echo form_error('pengalamanhaji') ?></span>
                </div>
            </div>
            <div class="form-group">
                <label style="color: #222">Nama Mahram: </label>
                <input type="text" name="namamahram" class="form-control">
                <div style="background-color: #f44242; text-align: center;">
                    <span style="color: white;"><?php echo form_error('namamahram') ?></span>
                </div>
            </div>
            <div class="form-group">
                <label style="color: #222">Hubungan Mahram: </label><br>
                <input type="radio" name="hubunganmahram" value="Orang Tua"> Orang Tua<br>
                <input type="radio" name="hubunganmahram" value="Anak"> Anak<br>
                <input type="radio" name="hubunganmahram" value="Suami/Istri"> Suami/Istri<br>
                <input type="radio" name="hubunganmahram" value="Merua"> Merua<br>
                <input type="radio" name="hubunganmahram" value="Saudara Kandung"> Saudara Kandung<br>
                <div style="background-color: #f44242; text-align: center;">
                    <span style="color: white;"><?php echo form_error('hubunganmahram') ?></span>
                </div>
            </div>
            <div class="form-group">
                <label style="color: #222">Nomor Pendaftar Mahram: </label>
                <input type="text" name="nomorpendaftarmahram" class="form-control">
                <div style="background-color: #f44242; text-align: center;">
                    <span style="color: white;"><?php echo form_error('nomorpendaftarmahram') ?></span>
                </div>
            </div>
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

            <!-- paket -->
            <div class="form-group">
                <label style="color: #222">Paket: </label>
                <select class="form-control" name="paket">

                    <option>-Pilih Paket-</option>
                    <?php foreach($hasil as $dataProduk) : ?>
                        <option value="<?php echo $dataProduk['kode_produk']?>"><?php echo $dataProduk['nama']?></option>
                    <?php endforeach ?>

                </select>
                <div style="background-color: #f44242; text-align: center;">
                    <span style="color: white;"><?php echo form_error('paket') ?></span>
                </div>
            </div>
            
            

            <div class="form-group">
                <button type="submit" class="btn btn-info btn-block">Login</button>
            </div>
        <?php echo form_close() ?>

    </div> <!-- end of form -->

</div> <!-- end of row -->