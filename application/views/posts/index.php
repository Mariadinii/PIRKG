
<!--cta-->
<section id="cta-1" class="section-padding">
    <div class="container">
      <div class="row"></div>
      	<div class="col-md-12">
          <h2 class="ser-title">Artikel Seputar Gigi </h2>
          <hr class="botm-line">
        </div>

        <!-- Isi -->
        <?php foreach ($posts as $post) : ?>
        <div class="schedule-tab">
            <div class="mt-boxy-color"></div>
            <div class="medi-info">
              <h5><?php echo $post['waktu']; ?></h5>
              <h3><?php echo $post['judul']; ?></h3>
              <p><?php echo word_limiter($post['isi'], 60); ?></p>
              <a href="<?php echo site_url('/posts/'.$post['id_artikel']); ?>" class="medi-info-btn">Selengkapnya</a>
            </div>
             <hr class="botm-line2"></h>
            </div>
         <?php endforeach; ?>
         <!-- End of isi -->

        </div>
      </div>
      <div class="banner-text text-center">
        <a href="#contact" class="btn btn-appoint">Selanjutnya >></a>
      </div>
  </section>


  <!--cta-->