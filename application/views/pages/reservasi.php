<!-- Jika sudah login maka akan mengeluarkan form reservasi-->
<?php if($this->session->userdata('logged_in') && ($this->session->userdata('nama') !== 'admin')): ?>
<!--form reservasi-->
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
          <form action="" method="post" role="form" class="contactForm">
            <div class="form-group">
              <input type="text" name="name" class="form-control br-radius-zero" id="name" placeholder="Nama" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
              <div class="validation"></div>
            </div>
            <div class="form-group">
              <input type="number" class="form-control br-radius-zero" name="age" id="age" placeholder="Umur" data-rule="minlen:1" data-msg="Please enter a number" />
              <div class="validation"></div>
            </div>
            <div class="form-group">
              <div class="custom-control custom-radio custom-control-inline">
                <input type="radio" class="custom-control-input" id="lk" name="jeniskelamin" value="Laki-laki">
                <label class="custom-control-label" for="lk">Laki-laki</label>
                <input type="radio" class="custom-control-input" id="pr" name="jeniskelamin" value="Perempuan">
                <label class="custom-control-label" for="pr">Perempuan</label>
              </div>
            </div>
            <div class="form-group">
              <textarea class="form-control br-radius-zero" name="message" rows="5" data-rule="required" data-msg="Please write something for us" placeholder="Keluhan Penyakit"></textarea>
              <div class="validation"></div>
            </div>
            <div class="form-group">
	          <div class="row">
	        	<div class='col-sm-6'>
	            <div class="form-group">
	              <div class='input-group'>
	                <input type='text' name="datetime" class="form-control datetimepicker-input" id="datetimepicker5" data-toggle="datetimepicker" data-target="#datetimepicker5" placeholder="Tanggal & Waktu" />
	              </div>
	            </div>
	          </div>
            <script>
              $(function(){
                $('#datetimepicker5').datetimepicker();
              });
            </script>
	    	  </div>
	    	</div>
            <div class="form-action">
              <button type="submit" class="btn btn-form">Kirim</button>
            </div>
          </form>
        </div>
      </div>
      <div class="col-md-3 col-sm-3 marb20"></div>
    </div>
  </div>
</section>
<!-- / form reservasi-->
<!-- Jika bmum login maka tidak akan mengeluarkan form login-->
<?php elseif(!$this->session->userdata('logged_in')): ?>
  <h2 class="ser-title" style="text-align: center;">Anda Harus Login Jika Ingin Mengisi Form Reservasi</h2>
<!-- TAMPILAN ADMIN -->
<?php elseif($this->session->userdata('logged_in') && ($this->session->userdata('nama') == 'admin')): ?>
  <h2 class="ser-title" style="text-align: center;">TAMPILAN ADMIN TAPI BLOM JADI</h2>
<?php endif; ?>

<!-- Tabel Reservasi -->
<section id="about" class="section-padding">
  <div class="container">
  	<div class="col-md-12">
      <h2 class="ser-title">Informasi Reservasi</h2>
      <hr class="botm-line">
    </div>
  	<div class="col-md-3"></div>
    <div class="col-md-6">
      <div class="time-info">
        <table style="margin: 8px 0px 0px;" border="1">
          <thead>
            <tr>
              <th>ID Reservasi</th>
              <th>Nama</th>
              <th>Waktu Reservasi</th>
              <th>Keterangan</th>
            </tr>
          </thead>
          <tbody>
            <tr>
          	  <td>01</td>
              <td>M. Fatur</td>
              <td>15 Maret 2020 16.30</td>
              <td>Diterima</td>
            </tr>
            <tr>
              <td>02</td>
              <td>Diza Febriyan</td>
              <td>15 Maret 2020 17.00</td>
              <td>Diterima</td>
            </tr>
            <tr>
              <td>03</td>
              <td>Nurul Azizah</td>
              <td>15 Maret 2020 18.30</td>
              <td>Menunggu Konfirmasi</td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>
    <div class="col-md-3"></div>
  </div>
</section>
<!--/ tabel reservasi-->