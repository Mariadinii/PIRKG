<!-- service -->
  <section id="service" class="section-padding">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <h2 class="ser-title">Layanan Kami</h2>
          <hr class="botm-line">
        </div>
        <div class="col-md-1 col-sm-1"></div>
        <div class="col-md-2 col-sm-2">
          <div class="service-info">
            <div class="icon">
              <img src="<?php echo base_url(); ?>assets/img/layanan1.png" class="img-responsive" style="width: 140px; margin-top: -16px;">
            </div>
            <div class="icon-info">
              <h4>Pemeriksaan Gigi</h4>
            </div>
          </div>
        </div>
        <div class="col-md-2 col-sm-2">
          <div class="service-info">
            <div class="icon">
              <img src="<?php echo base_url(); ?>assets/img/layanan2.png" class="img-responsive" style="width: 140px; margin-top: -16px;">
            </div>
            <div class="icon-info">
              <h4>Pengobatan Gigi</h4>
            </div>
          </div>
        </div>
        <div class="col-md-2 col-sm-2">
          <div class="service-info">
            <div class="icon">
              <img src="<?php echo base_url(); ?>assets/img/layanan3.png" class="img-responsive" style="width: 140px; margin-top: -16px;">
            </div>
            <div class="icon-info">
              <h4>Edukasi Gigi</h4>
            </div>
          </div>
    </div>
        <div class="col-md-2 col-sm-2">
          <div class="service-info">
            <div class="icon">
              <img src="<?php echo base_url(); ?>assets/img/layanan4.png" class="img-responsive" style="width: 140px; margin-top: -16px;">
            </div>
            <div class="icon-info">
              <h4>Pencegahan Kerusakan Gigi</h4>
            </div>
          </div>
        </div>
        <div class="col-md-2 col-sm-2">
          <div class="service-info">
            <div class="icon">
              <img src="<?php echo base_url(); ?>assets/img/layanan5.png" class="img-responsive" style="width: 140px; margin-top: -16px;">
            </div>
            <div class="icon-info">
              <h4>Mengembalikan Fungsi Gigi</h4>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- /service -->

  <!--cta-->
  <section id="cta-1" class="section-padding">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <h2 class="ser-title">Artikel Kesehatan Gigi</h2>
          <hr class="botm-line">
        </div>

        <!-- Artikel Home -->
        <div class="schedule-tab">

          <?php 
            $post = 0; 
            foreach ($pages as $page) :
              $post = $post+1;
          ?>

          <?php if($post === 1): ?>
          <div class="col-md-4 col-sm-4 bor-left">
            <div class="mt-boxy-color"></div>
            <div class="medi-info">
              <h3><?php echo $page['judul']; ?>l</h3>
              <p><?php echo word_limiter($page['isi'], 19); ?></p>
              <a href="<?php echo site_url('/posts/'.$page['id_artikel']); ?>" class="medi-info-btn">Selengkapnya</a>
            </div>
          </div>

          <?php elseif($post === 2): ?>
          <div class="col-md-4 col-sm-4">
            <div class="medi-info">
              <h3><?php echo $page['judul']; ?></h3>
              <p><?php echo word_limiter($page['isi'], 19); ?></p>
              <a href="<?php echo site_url('/posts/'.$page['id_artikel']); ?>" class="medi-info-btn">Selengkapnya</a>
            </div>
          </div>

          <?php elseif($post === 3): ?>
          <div class="col-md-4 col-sm-4">
            <div class="mt-boxy-color"></div>
            <div class="end-info">
              <h3><?php echo $page['judul']; ?></h3>
              <p><?php echo word_limiter($page['isi'], 19); ?></p>
              <a href="<?php echo site_url('/posts/'.$page['id_artikel']); ?>" class="medi-info-btn">Selengkapnya</a>
            </div>
          </div>

          <?php endif; ?>


          <?php endforeach; ?>

<!--           <div class="col-md-4 col-sm-4 bor-left">
            <div class="mt-boxy-color"></div>
            <div class="medi-info">
              <h3>Judul Artikel</h3>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
              <a href="#" class="medi-info-btn">READ MORE</a>
            </div>
          </div>

          <div class="col-md-4 col-sm-4">
            <div class="medi-info">
              <h3>Judul Artikel</h3>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
              <a href="#" class="medi-info-btn">READ MORE</a>
            </div>
          </div>

          <div class="col-md-4 col-sm-4">
            <div class="mt-boxy-color"></div>
            <div class="end-info">
              <h3>Judul Artikel</h3>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
              <a href="#" class="medi-info-btn">READ MORE</a>
            </div>
          </div> -->

        </div>
        <!-- End Artikel Home -->

      </div>
    </div>
  </section>
  <!--cta