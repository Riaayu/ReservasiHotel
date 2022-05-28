<?= $this->extend('dashboard') ?>
<?= $this->section('content') ?>
<div class="pagetitle">
      <h1>Data Tables</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.html">Home</a></li>
          <li class="breadcrumb-item active">Petugas</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->
<section class="section">
      <div class="row">
        <div class="col-lg-12">

          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Data Petugas</h5>
              <p>Berikut ini daftar petugas pengelola aplikasi  HOTEL Hebat</p>
              <p> <a href="/petugas/tambah" class="btn btn-primary btn-sm">Tambah Petugas</a> </p>


              <!-- Table with stripped rows -->
              <table class="table datatable">
                <thead>
                  <tr>
                    <th scope="col">No</th>
                    <th scope="col">Nama</th>
                    <th scope="col">Username</th>
                    <th scope="col">Password</th>
                    <th scope="col">Level User</th>
                    <th scope="col">Aksi</th>
                  </tr>
                </thead>
                <tbody>
                <?php
                  $htmlData=null;
                  $nomor=null;
                  foreach ($ListPetugas as $row){
                  $nomor++;
                  $htmlData ='<tr>';
                  $htmlData .='<td class="text-center">'.$nomor.'</td>';
                  $htmlData .='<td class="text-center">'.$row['nama_petugas'].'</td>';
                  $htmlData .='<td class="text-center">'.$row['username'].'</td>';
                  $htmlData .='<td class="text-center">'.$row['password'].'</td>';
                  $htmlData .='<td class="text-center">'.$row['level'].'</td>';
                  $htmlData .='<td class="text-center">';
                  $htmlData .='<a href="/petugas/edit/'.$row['id_petugas'].'" class="btn btn-info btn-sm mr-1">Edit</a>&nbsp';
                  $htmlData .='<a href="/petugas/hapus/'.$row['id_petugas'].'" class="btn btn-danger btn-sm">Hapus</a>';
                  $htmlData .='</td>';
                  $htmlData .='</tr>';
                  echo $htmlData;
                  }
                ?>
                  
                </tbody>
              </table>
              <!-- End Table with stripped rows -->

            </div>
          </div>

        </div>
      </div>
    </section>

  </main><!-- End #main -->

<?= $this->endSection() ?>