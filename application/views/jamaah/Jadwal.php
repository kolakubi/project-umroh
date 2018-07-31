<h1 class="text-center">Jadwal</h1>
<br><br>

<div class="row">
    <div class="col-xs-12 col-md-4 col-md-offset-4">

        <table class="table table-responsive table-bordered table-hover table-striped">

            <thead>
                <tr>
                    <th>Kode Pendaftaran</th>
                    <th>Waktu Keberangkatan</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach($hasil as $jadwal) : ?>
                    <tr>
                        <td><?php echo $jadwal['kode_pendaftaran'] ?></td>
                        <td class="<?php if($jadwal['tanggal_berangkat'] == '0000-00-00'){echo 'danger';}else{echo 'success';} ?>">
                            <?php if($jadwal['tanggal_berangkat'] == '0000-00-00') : ?>
                            <?php echo 'belum ada jadwal'?>
                            <?php else : ?>
                            <?php echo $jadwal['tanggal_berangkat'] ?>
                            <?php endif ?>
                        </td>
                    </tr>
                <?php endforeach ?>
            </tbody>

        </table>

    </div>
</div>