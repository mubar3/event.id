

  <!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex align-items-center">

    <div class="container">
      <div class="row">
        <div class="col-lg-6 d-flex flex-column justify-content-center pt-4 pt-lg-0 order-2 order-lg-1" data-aos="fade-up" data-aos-delay="200">
          <h1>Better Solutions To Found Many Event's</h1>
          <h2>Menyediakan Informasi dan Pembelian Tiket Event</h2>
          <div class="d-lg-flex">
            <a href="#portfolio" class="btn-get-started scrollto">Show Event's</a>
          </div>
        </div>
        <div class="col-lg-6 order-1 order-lg-2 hero-img" data-aos="zoom-in" data-aos-delay="200">
          <img src="assets/img/hero-img.png" class="img-fluid animated" alt="">
        </div>
      </div>
    </div>

  </section><!-- End Hero -->

  <!-- ======= Cliens Section ======= -->
                <section id="cliens" class="cliens section-bg">
                  <div class="container">

                    <div class="row" data-aos="zoom-in">

                      <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
                        <img src="assets/img/clients/client-1.png" class="img-fluid" alt="">
                      </div>

                      <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
                        <img src="assets/img/clients/client-2.png" class="img-fluid" alt="">
                      </div>

                      <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
                        <img src="assets/img/clients/client-3.png" class="img-fluid" alt="">
                      </div>

                      <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
                        <img src="assets/img/clients/client-4.png" class="img-fluid" alt="">
                      </div>

                      <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
                        <img src="assets/img/clients/client-5.png" class="img-fluid" alt="">
                      </div>

                      <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
                        <img src="assets/img/clients/client-6.png" class="img-fluid" alt="">
                      </div>

                    </div>

                  </div>
                </section><!-- End Cliens Section -->



    <!-- ======= Portfolio Section ======= -->
    <section id="portfolio" class="portfolio">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>EVENT</h2>
            <li data-toggle="modal" data-target="#mydaftarevent" class="d-flex justify-content-center"><a href="#">Daftarkan event</a></li>

          </div>

        <ul id="portfolio-flters" class="d-flex justify-content-center" data-aos="fade-up" data-aos-delay="100">
        <li data-filter="*" class="filter-active">All</li>
        <?php
          if( ! empty($jenis_event)){ // Jika data pada database tidak sama dengan empty (alias ada datanya)
          foreach($jenis_event as $data){?>
          <li data-filter=".filter-<?php echo "$data->jenis";?>"><?php echo "$data->jenis";?></li>
        <?php	} }?>
        </ul>

        <div class="row portfolio-container" data-aos="fade-up" data-aos-delay="200">

        <?php
            if( ! empty($event)){ // Jika data pada database tidak sama dengan empty (alias ada datanya)
            foreach($event as $data){?>
         <div class="col-lg-4 col-md-6 portfolio-item filter-<?php echo "$data->jenis";?>">
            <div class="portfolio-img" data-toggle="modal"
               data-id="<?php echo "$data->id";?>"
               data-nama="<?php echo "$data->nama";?>"
               data-tempat="<?php echo "$data->tempat";?>"
               data-deskripsi="<?php echo "$data->deskripsi";?>"
               data-tanggal="<?php echo "$data->tanggal";?>"
               data-waktu="<?php echo "$data->waktu";?>"
               data-target="#eventlogin"
               class="details-link" title="More Details">
               <img src="gambar/<?php echo "$data->pamflet";?>" class="img-fluid" alt="">
               </div>
            <div class="portfolio-info">
              <p><?php echo "$data->nama";?></p>

            </div>
          </div>
         <?php	} }?>

        </div>

      </div>



      </section><!-- End Portfolio Section -->
