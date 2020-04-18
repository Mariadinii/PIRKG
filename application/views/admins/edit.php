<section id="contact" class="section-padding">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <h2 class="ser-title">Form Reservasi</h2>
        <hr class="botm-line">
      </div>
      <div class="col-md-3 col-sm-3 marb20"></div>
      <div class="col-md-6 col-sm-6 marb20">
        <div class="contact-info">
          <div class="space"></div>
          <div id="sendmessage">Reservasi Anda sudah Kami terima. Mohon tunggu konfirmasi selanjutnya.</div>
          <div id="errormessage"></div>

          <!-- Start Form -->
          <?php echo form_open('admins/update'); ?>

            <input type="hidden" name="id_reservasi" value="<?php echo $admins['id_reservasi']; ?>" >

            <!-- Konfirmasi -->
            <label>Konfirmasi: </label>
            <div class="form-group">
              <div class="custom-control custom-radio custom-control-inline">
                <input type="radio" class="custom-control-input" id="lk" name="konfirmasi" value="Menunggu Konfirmasi">
                <label class="custom-control-label" for="lk">Menunggu Konfirmasi &nbsp; </label>
                <input type="radio" class="custom-control-input" id="pr" name="konfirmasi" value="Diterima">
                <label class="custom-control-label" for="pr">Diterima</label>
                <input type="radio" class="custom-control-input" id="pr" name="konfirmasi" value="Tidak Diterima">
                <label class="custom-control-label" for="pr">Tidak Diterima</label>
              </div>
            </div>

            <!-- Keterangan -->
            <label>Keterangan: </label>
            <div class="form-group">
              <div class="custom-control custom-radio custom-control-inline">
                <input type="radio" class="custom-control-input" id="lk" name="keterangan_reservasi" value="Belum Dilayani">
                <label class="custom-control-label" for="lk">Belum Dilayani &nbsp; </label>
                <input type="radio" class="custom-control-input" id="pr" name="keterangan_reservasi" value="Sudah Dilayani">
                <label class="custom-control-label" for="pr">Sudah Dilayani</label>
              </div>
            </div>

         <!-- Send Button -->
         <br>
            <div class="form-action">
              <button type="submit" class="btn btn-form">Ubah Keterangan Reservasi</button>
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