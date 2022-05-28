<?= $this->extend('dashboard') ?>
<?= $this->section('content') ?>
<section class="section">
     <div class="row">
        <div class="col-lg-12">
          <div class="card">
            <div class="card-body">
              <h2 class="card-title"><b>Perubahan Data Fasilitas Kamar</b></h2>
              <p>Silahkan gunakan form di bawah ini untuk merubah data</p>
                <form method="POST" action="/fk/update"><b>
                    <div class="form-group">
                        <label class="font-weight-bold">Id_Fasilitas Kamar</label>
                        <input type="text" name="txtInputidFasilitas" class="form-control" placeholder=" " value="<?=$detailFasilitaskamar[0]['id_fasilitas_kamar'];?>" readonly>
                    </div>    
                    <div class="form-group">
                        <label class="font-weight-bold">Tipe Kamar</label>
                        <input type="text" name="txtTipeKamar" class="form-control" placeholder="Masukan Tipe Kamar " value="<?=$detailFasilitaskamar[0]['tipe_kamar'];?>">
                    </div>
                    <div class="form-group">
                        <label class="font-weight-bold">Nama Fasilitas</label>
                        <input type="text" name="txtInputNamaFasilitas" class="form-control" placeholder="Masukan Nama Fasilitas " value="<?=$detailFasilitaskamar[0]['nama_fasilitas'];?>">
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