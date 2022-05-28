<?= $this->extend('dashboard') ?>
<?= $this->section('content') ?>
<section class="section">
     <div class="row">
        <div class="col-lg-12">
          <div class="card">
            <div class="card-body">
              <h2 class="card-title"><b>Perubahan Data Kamar</b></h2>
              <p>Silahkan gunakan form di bawah ini untuk merubah data</p>
                <form method="POST" action="/kamar/update"><b>
                    <div class="form-group">
                        <label class="font-weight-bold">Nomor Kamar</label>
                        <input type="text" name="txtNoKamar" class="form-control" placeholder="Masukan nomor kamar, misal : 1A" value="<?=$detailKamar[0]['no_kamar'];?>" readonly>
                    </div>
                    <div class="form-group">
                        <label class="font-weight-bold">Tipe Kamar</label>
                        <input type="text" name="txtInputTipeKamar" class="form-control" placeholder="Masukan Tipe Kamar" value="<?=$detailKamar[0]['tipe_kamar'];?>">
                    </div>
                    <div class="form-group">
                        <label class="font-weight-bold">Deskripsi Kamar</label>
                        <input type="text" name="txtInputDeskripsi" class="form-control" placeholder="Masukan Deskripsi Kamar" value="<?=$detailKamar[0]['deskripsi'];?>">
                    </div>
                    <div class="form-group">
                        <label class="font-weight-bold">Tarif</label>
                        <input type="text" name="txtTarif" class="form-control" value="<?=$detailKamar[0]['tarif'];?>">
                    </div>
                    <div class="form-group">
                        <label class="font-weight-bold">Jumlah Kamar</label>
                        <input type="text" name="txtJumlah_kamar" class="form-control"required>
                    </div>
                    <div class="form-group">
                        <label class="font-weight-bold">Foto Kamar</label><br>
                        <?php
                            if (!empty($detailKamar[0]['foto'])) {
                            echo '<img src="'.base_url("/gambar/".$detailKamar[0]['foto']).'" width="150">';
                            }
                        ?>
                                            </div>
                    <br>
                    <div class="form-group">
                        <button class="btn btn-primary">Update </button>
                    </div>
                    </br>
                </b>
                </form>
            </div>
          </div>
        </div>
    </div>
</section>
<?= $this->endSection() ?>