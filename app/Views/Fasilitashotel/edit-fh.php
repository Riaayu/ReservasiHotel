<?= $this->extend('dashboard') ?>
<?= $this->section('content') ?>
<section class="section">
     <div class="row">
        <div class="col-lg-12">
          <div class="card">
            <div class="card-body">
              <h2 class="card-title"><b>Perubahan Data Fasilitas Hotel</b></h2>
              <p>Silahkan gunakan form di bawah ini untuk merubah data</p>
                <form method="POST" action="/fh/update"><b>
                    <div class="form-group">
                        <label class="font-weight-bold">Id Fasilitas</label>
                        <input type="text" name="txtidFasilitas" class="form-control" placeholder="" value="<?=$detailFasilitashotel[0]['id_fasilitas_hotel'];?>" readonly>
                    </div>
                    <div class="form-group">
                        <label class="font-weight-bold">Nama Fasilitas</label>
                        <input type="text" name="txtNamaFasilitas" class="form-control" placeholder="Masukan Nama Fasilitas " value="<?=$detailFasilitashotel[0]['nama_fasilitas'];?>">
                    </div>
                    <div class="form-group">
                        <label class="font-weight-bold">Deskripsi </label>
                        <input type="text" name="txtInputDeskripsi" class="form-control" placeholder="Masukan Deskripsi Fasilitas" value="<?=$detailFasilitashotel[0]['deskripsi'];?>">
                    </div>
                    <div class="form-group">
                        <label class="font-weight-bold">Foto</label><br>
                        <?php
                            if (!empty($detailFasilitashotel[0]['foto'])) {
                            echo '<img src="'.base_url("/gambar/".$detailFasilitashotel[0]['foto']).'" width="150">';
                            }
                        ?>
                    </div>
                    <br>
                    <div class="form-group">
                        <button class="btn btn-primary">Update</button>
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