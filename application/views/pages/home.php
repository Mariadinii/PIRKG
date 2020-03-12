<!--service-->
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
  <!--/ service-->

  <!--cta-->
  <section id="cta-1" class="section-padding">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <h2 class="ser-title">Artikel Kesehatan Gigi</h2>
          <hr class="botm-line">
        </div>
        <div class="schedule-tab">
          <div class="col-md-4 col-sm-4 bor-left">
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
            <div class="medi-info">
              <h3>Judul Artikel</h3>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
              <a href="#" class="medi-info-btn">READ MORE</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!--cta-->
  <!--contact-->
  <section id="contact" class="section-padding">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <h2 class="ser-title">Hubungi Kami</h2>
          <hr class="botm-line">
        </div>
        <div class="col-md-4 col-sm-4">
          <h3>Contact Info</h3>
          <div class="space"></div>
          <p><i class="fa fa-map-marker fa-fw pull-left fa-2x"></i>Jalan Kiwi No. 18<br> Kedaton, Bandar Lampung, 35147</p>
          <div class="space"></div>
          <p><i class="fa fa-clock-o fa-fw pull-left fa-2x"></i>Setiap hari kerja<br> Pukul 16.00 - selesai</p>
          <div class="space"></div>
          <p><i class="fa fa-phone fa-fw pull-left fa-2x"></i>0813-8xxx-xxxx</p>
        </div>
        <div class="col-md-8 col-sm-8 marb20">
          <div class="contact-info">
            <h3 class="cnt-ttl">Mempunyai pertanyaan seputar gigi?</h3>
            <div class="space"></div>
            <div id="sendmessage">Your message has been sent. Thank you!</div>
            <div id="errormessage"></div>
            <form action="" method="post" role="form" class="contactForm">
              <div class="form-group">
                <input type="text" name="name" class="form-control br-radius-zero" id="name" placeholder="Nama" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
                <div class="validation"></div>
              </div>
              <div class="form-group">
                <input type="email" class="form-control br-radius-zero" name="email" id="email" placeholder="Email" data-rule="email" data-msg="Please enter a valid email" />
                <div class="validation"></div>
              </div>
              <div class="form-group">
                <input type="text" class="form-control br-radius-zero" name="subject" id="subject" placeholder="Subjek" data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject" />
                <div class="validation"></div>
              </div>
              <div class="form-group">
                <textarea class="form-control br-radius-zero" name="message" rows="5" data-rule="required" data-msg="Please write something for us" placeholder="Message"></textarea>
                <div class="validation"></div>
              </div>

              <div class="form-action">
                <button type="submit" class="btn btn-form">Kirim</button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!--/ contact-->