<!--form artikel-->
<section id="contact" class="section-padding">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <h2 class="ser-title">Pembuatan Artikel</h2>
        <hr class="botm-line">
      </div>
      <div class="col-md-3 col-sm-3 marb20"></div>
      <div class="col-md-6 col-sm-6 marb20">
        <div class="contact-info">
          <div class="space"></div>
          <div id="sendmessage">Reservasi Anda sudah Kami terima. Mohon tunggu konfirmasi selanjutnya.</div>
          <div id="errormessage"></div>

          <!-- Start Form -->
          <?php echo form_open('posts/create'); ?>

            <!-- judul artikel-->
            <label>Judul Atikel: </label>
            <div class="form-group">
              <input type="text" name="judul" class="form-control br-radius-zero" id="name" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
              <div class="validation"></div>
              <?= form_error('judul', '<small style="color : red;">', '</small>'); ?>
            </div>

            <!-- isi artikel-->
            <label>Isi Artikel: </label>
            <div class="form-group">
              <textarea class="form-control br-radius-zero" name="isi" rows="5" data-rule="required" data-msg="Please write something for the article"></textarea>
              <div class="validation"></div>
              <?= form_error('isi', '<small style="color : red;">', '</small>'); ?>
            </div>

            <!-- Send Button -->
            <div class="form-action">
              <button type="submit" class="btn btn-form">Buat Artikel</button>
            </div>

          <?php echo form_close(); ?>
          <!-- End Form -->

        </div>
      </div>
      <div class="col-md-3 col-sm-3 marb20"></div>
    </div>
  </div>
</section>

<br><br>