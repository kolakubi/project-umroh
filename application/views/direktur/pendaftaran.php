<?php $index = 0; ?>

<h1 class="text-center">Laporan Pendaftaran</h1>

<div class="row">
  <div class="col-xs-12 col-md-4 col-md-offset-4">
  <h5 class="text-center text-">Berdasarkan Tanggal Pendaftaran</h5>
    <?php echo form_open() ?>
      <div class="form-group">
        <label>Dari: </label>
        <input type="date" name="tanggaldari" class="form-control">
        <span class="text-danger"><?php echo form_error('tanggaldari') ?></span>
      </div>
      <div class="form-group">
        <label>Sampai: </label>
        <input type="date" name="tanggalsampai" class="form-control">
        <span class="text-danger"><?php echo form_error('tanggalsampai') ?></span>
      </div>
      <div class="form-group">
        <button type="submit" class="btn btn-info btn-block">Cari</button>
      </div>
    <?php echo form_close() ?>

  </div>
</div>
<br><br>

<!-- info tanggal pencarian -->
<?php if(!empty($tanggal)) : ?>
  <div class="well" style="margin-bottom: -20px;">
    <p class="text-center"><strong>Menampilkan pencarian tanggal</strong></p>
    <p style="font-size: 18px; margin-top: -10px;" class="text-center text-success"><strong><?php echo $tanggal['dari']?> <span style="color: #555555">s/d</span> <?php echo $tanggal['sampai']?></strong></p>
  </div>
<?php endif ?>
<br><br>

<table class="table table-striped table-bordered table-hover table-condensed table-responsive" id="datatablepembelian">
  <thead>
    <tr class="info">
      <th>No</th>
      <th>Kode Pendaftaran</th>
      <th>Tgl Daftar</th>
      <th>Nama Jamaah</th>
      <th>Paket</th>
    </tr>
  </thead>
  <tbody>
    <?php $i = 0; ?>
    <?php foreach ($pendaftaran as $pendaftaranDetail) : ?>
      <?php $index++; ?>
      <tr>
        <td><?php echo $i+=1;?></td>
        <td><?php echo $pendaftaranDetail['kode_pendaftaran']?></td>
        <td><?php echo $pendaftaranDetail['tanggaldaftar']?></td>
        <td><?php echo $pendaftaranDetail['nama'] ?></td>
        <td><?php echo $pendaftaranDetail['nama_produk'] ?></td>
      </tr>
    <?php endforeach ?>
  </tbody>
  <tfoot>
    <td></td>
    <td>Kode Pendaftaran</td>
    <td>Tgl Daftar</td>
    <td>Nama Jamaah</td>
    <td>Paket</td>
  </tfoot>
</table>
<br>

<!-- summary -->
<h4 class="text-center text-uppercase text-danger"><strong>Total pendaftar: <?php echo $index ?></strong></h4>
