<?= $this->extend('dashboard') ?>
<?= $this->section('content') ?>
<div class="pagetitle">
      <h1>Data Tables</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.html">Home</a></li>
          <li class="breadcrumb-item active">Kamar</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->
<section class="section">
      <div class="row">
        <div class="col-lg-12">

          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Data Reservasi</h5>
              <p>Berikut ini daftar Reservasi</p>

              <!-- Table with stripped rows -->
              <table class="table datatable">
                <thead>
                  <tr>
                    <th scope="col">No</th>
                    <th scope="col">Nama Pemesan</th>
                    <th scope="col">Email</th>
                    <th scope="col">Nama Tamu</th>
                    <th scope="col">No HP</th>
                    <th scope="col">Cek In</th>
                    <th scope="col">Cek Out</th>
                    <th scope="col">Jml Kamar diPesan</th>
                    <th scope="col">Status</th>
                    <th scope="col">Aksi</th>
                  </tr>
                </thead>
                <tbody>
                <?php
                    $htmlData=null;
                    $nomor=null;
                    foreach ($ListReservasi as $row){
                    $nomor++;
                    $htmlData ='<tr>';
                    $htmlData .='<td class="text-center">'.$nomor.'</td>';
                    $htmlData .='<td class="text-center">'.$row['nama_pemesan'].'</td>';
                    $htmlData .='<td class="text-center">'.$row['email'].'</td>';
                    $htmlData .='<td class="text-center">'.$row['nama_tamu'].'</td>';
                    $htmlData .='<td class="text-center">'.$row['no_tlp'].'</td>';
                    $htmlData .='<td class="text-center">'.$row['tgl_cek_in'].'</td>';
                    $htmlData .='<td class="text-center">'.$row['tgl_cek_out'].'</td>';
                    $htmlData .='<td class="text-center">'.$row['jumlah_kamar_dipesan'].'</td>';
                    $htmlData .='<td class="text-center">'.$row['status'].'</td>';
                    $htmlData .='<td class="text-center">';
                    $htmlData .='<a href="/reservasi/in/'.$row['id_reservasi'].'" class="btn btn-success btn-sm mr-1">Cek In</a>';
                    $htmlData .='<a href="/reservasi/out/'.$row['id_reservasi'].'" class="btn btn-info btn-sm mr-1">Cek Out</a>';
                    $htmlData .='<a href="/reservasi/selesai/'.$row['id_reservasi'].'" class="btn btn-danger btn-sm mr-1">Selesai</a>';
                      
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