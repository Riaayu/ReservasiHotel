<?= $this->extend('dashboard') ?>
<?= $this->section('content') ?>
<section class="section">
     <div class="row">
        <div class="col-lg-12">
          <div class="card">
            <div class="card-body">
              <h2 class="card-title"><b>Penambahan Data Petugas</b></h2>
              <p>Silahkan gunakan form di bawah ini untuk mendata data petugas baru</p>
                <form method="POST" action="/petugas/simpan"><b>
                    <div class="form-group">
                        <label class="font-weight-bold">Username</label>
                        <input type="text" name="txtInputUser" class="form-control" placeholder="Masukan username" autocomplete="off" autofocus>
                    </div>
                    <div class="form-group">
                        <label class="font-weight-bold">Nama Lengkap</label>
                        <input type="text" name="txtInputNama" class="form-control" placeholder="Masukan nama lengkap petugas" autocomplete="off">
                    </div>
                    <div class="form-group">
                        <label class="font-weight-bold">Password</label>
                        <input type="password" name="txtInputPassword" class="form-control" placeholder="Masukan password petugas" autocomplete="off">
                    </div>
                    <div class="form-group">
                        <label class="font-weight-bold">Level Petugas</label>
                        <select name="selectLevel" class="form-control">
                            <option value="admin">Admin </option>
                            <option value="petugas">Resepsionis</option>
                        </select>
                    </div>
                    <br>
                    <div class="form-group">
                        <button class="btn btn-primary">Simpan Petugas</button>
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