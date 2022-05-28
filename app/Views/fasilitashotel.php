<?= $this->extend('index') ?>
<?= $this->section('content') ?>

<!-- ======= Breadcrumbs ======= -->
<div class="breadcrumbs">
      <div class="container">
        <h2>Fasilitas Umum Hotel yang Tersedia</h2>
        <p>Di HOTEL Hebat tersedia berbagai macam fasilitas umum hotel yang sangat nyaman, bersih, wangi, desain kamar yang elegan dan di sertai fasilitas-fasilitas yang mudah di gunakan.  </p>
      </div>
    </div><!-- End Breadcrumbs -->

<!-- ======= Courses Section ======= -->
<section id="courses" class="courses">
      <div class="container" data-aos="fade-up">
        <div class="row" data-aos="zoom-in" data-aos-delay="100">
            <?php foreach($ListFasilitashotel as $row) { ?>

          <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
            <div class="course-item">
              <img src="<?=base_url("/gambar/".$row['foto']);?>" class="img-fluid" alt="...">
              <div class="course-content">

                <h3><a href=""> <?= $row['nama_fasilitas'];?></a></h3>
                <p><?= $row['deskripsi'];?></p>
              </div>
            </div>
          </div> <!-- End Course Item-->
          <?php } ?>
        </div>
      </div>
    </section><!-- End Courses Section -->

  <?= $this->endSection() ?>