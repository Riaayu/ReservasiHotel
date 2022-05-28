<?= $this->extend('dashboard') ?>
<?= $this->section('content') ?>
<section class="section">
     <div class="row">
        <div class="col-lg-12">
          <div class="card">
            <div class="card-body">
              <h2 class="card-title"><b>Penambahan Data Fasilitas Kamar</b></h2>
              <p>Silahkan gunakan form di bawah ini untuk mendata data fasilitas kamar baru</p>
                <form method="POST" action="/fk/simpan"><b>
                <div class="form-group">
                    <label class="font-weight-bold">Tipe Kamar</label>
                    <input type="text" name="txtTipeKamar" class="form-control" placeholder="Masukkan tipe kamar" autocomplete="off" autofocus>
                </div>
                <div class="form-group">
                    <label  for="exampleFormControlTextarea1" class="font-weight-bold">Nama Fasilitas</label>
                    <input name="txtNamaFasilitas" class="form-control rounded-0" placholder="Masukkan fasilitas" id="exampleFormControlTextarea1" rows="10">
                </div>    
                <br>
                    <div class="form-group">
                        <button class="btn btn-primary">Simpan</button>
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