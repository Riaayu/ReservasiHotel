<?= $this->extend('index') ?>
<?= $this->section('content') ?>

<!-- ======= Breadcrumbs ======= -->
<div class="breadcrumbs">
      <div class="container">
        <h2>Kamar yang Tersedia</h2>
        <p>Di HOTEL Hebat tersedia berbagai macam kamar yang sangat nyaman, bersih, wangi, desain kamar yang elegan dan di sertai fasilitas-fasilitas yang mudah di gunakan.  </p>
      </div>
    </div><!-- End Breadcrumbs -->

<!-- ======= Courses Section ======= -->
<section id="courses" class="courses">
      <div class="container" data-aos="fade-up">
        <div class="row" data-aos="zoom-in" data-aos-delay="100">
            <?php foreach($ListKamar as $row){ ?>
              
          <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
            <div class="course-item">
              <img src="<?=base_url("/gambar/".$row['foto']);?>" class="img-fluid" alt="...">
              <div class="course-content">

                <h3><a href=""> <?= $row['tipe_kamar'];?></a></h3>
                <p><b>Rp : <?= $row['tarif'];?>   / malam</b></p>
                <p><?= $row['deskripsi'];?></p>
                <p><b>Fasilitas Kamar : </b><?=$row['nama_fasilitas'];?></p>
                <p><b><?= $row['jumlah_kamar'];?> Kamar Tersedia</b></p>
        
              </div>
              
              
            </div>
          </div> <!-- End Course Item-->
          <?php } ?>
        </div>
      </div>
    </section><!-- End Courses Section -->

  <?= $this->endSection() ?>