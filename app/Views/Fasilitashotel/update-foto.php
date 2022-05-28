<?= $this->extend('dashboard') ?>
<?= $this->section('content') ?>
<section class="section">
     <div class="row">
        <div class="col-lg-12">
          <div class="card">
            <div class="card-body">
              <h2 class="card-title"><b>Perubahan  Foto Kamar</b></h2>
              <p>Silahkan gunakan form di bawah ini untuk merubah data</p>
                <form method="POST" action="/fh/updatefoto" enctype="multipart/form-data"><b>
                    <div class="form-group">
                        <label class="font-weight-bold">Nama Fasilitas</label>
                        <input type="text" name="txtNamaFasilitas" class="form-control" placeholder="Masukan Nama Fasilitas " value="<?=$detailFasilitashotel[0]['nama_fasilitas'];?>"readonly>
                    </div>
                    <div class="form-group">
                        <label class="font-weight-bold">Foto</label><br>
                        <?php
                            if (!empty($detailFasilitashotel[0]['foto'])) {
                            echo '<img src="'.base_url("/gambar/".$detailFasilitashotel[0]['foto']).'" width="150">';
                            }
                        ?>
                        <input type="file" name="txtFoto" class="form-control">
                    </div>
                    <br>
                    <div class="form-group">
                        <button class="btn btn-primary">Update Foto</button>
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