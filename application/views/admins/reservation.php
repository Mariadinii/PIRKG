<?php validation_errors(); ?>
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

          <!-- Start Form -->
          <?php echo form_open('admins/reservation'); ?>

            <!-- Nama -->
            <label>Nama: </label>
            <div class="form-group">
              <input type="text" name="nama" class="form-control br-radius-zero" id="name" placeholder="Nama" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
              <div class="validation"></div>
            </div>
            
            <!-- Umur -->
            <label>Umur: </label>
            <div class="form-group">
              <input type="number" class="form-control br-radius-zero" name="umur" id="age" placeholder="Umur" data-rule="minlen:1" data-msg="Please enter a number" />
              <div class="validation"></div>
            </div>

            <!-- Jenis Kelamin -->
            <label>Jenis Kelamin: </label>
            <div class="form-group">
              <div class="custom-control custom-radio custom-control-inline">
                <input type="radio" class="custom-control-input" id="lk" name="jenis_kelamin" value="Laki-Laki">
                <label class="custom-control-label" for="lk">Laki-Laki &nbsp; </label>
                <input type="radio" class="custom-control-input" id="pr" name="jenis_kelamin" value="Perempuan">
                <label class="custom-control-label" for="pr">Perempuan</label>
              </div>
            </div>

            <!-- Keterangan reservasi -->
            <label>Keterangan Reservasi: </label>
            <div class="form-group">
              <textarea class="form-control br-radius-zero" name="ket_reservasi" rows="5" data-rule="required" data-msg="Please write something for us" placeholder="Keluhan Penyakit"></textarea>
              <div class="validation"></div>
            </div>

            <!-- Waktu reservasi -->
            <label>Waktu Reservasi: </label>
            <div class="form-group">
            <div class="row">
            <div class='col-sm-6'>
              <div class="form-group">
                <div class='input-group'>
                  <input type='text' name="waktu_reservasi" class="form-control datetimepicker-input" id="datetimepicker5" data-toggle="datetimepicker" data-target="#datetimepicker5" placeholder="Tanggal & Waktu" />
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

            <!-- Send Button -->
            <div class="form-action">
              <button type="submit" class="btn btn-form">Pesan Reservasi</button>
            </div>

          <?php echo form_close(); ?>
          <!-- End Form -->

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
<section id="about" class="section-padding">
  <div class="container">
    <div class="col-md-12">
      <h2 class="ser-title">Daftar Reservasi</h2>
      <hr class="botm-line">
    </div>
    <div class="col-md-0"></div>
    <div class="col-md-12">
      <div class="time-info">
        <table style="margin: 8px -200px 0px;" border="1">
          <thead>
            <tr>
              <th> No </th>
              <th> Nama </th>
              <th> Umur </th>
              <th> No. Telepon </th>
              <th> Jenis Kelamin </th>
              <th> Keterangan Reservasi </th>
              <th> Waktu Reservasi </th>
              <th> Konfirmasi </th>
              <th> Keterangan </th>
              <th> Aksi </th>
            </tr>
          </thead>
          <tbody>
            <tr></tr>
            <?php 
              date_default_timezone_set('Asia/Jakarta');
            ?>
            <?php $i=0; ?>
            <?php foreach ($admins as $admin) : ?>
              <?php $i++; ?>
            <tr>
              <td>&nbsp;&nbsp;<?php echo $i; ?></td>
              <td><?php echo $admin['nama']; ?></td> 
              <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $admin['umur']; ?></td>
              <td>&nbsp; <?php ?></td> 
              <td>&nbsp;&nbsp;<?php echo $admin['jenis_kelamin']; ?></td>
              <td><?php echo $admin['ket_reservasi']; ?></td>
              <td><?php echo $admin['waktu_reservasi']; ?></td>
              <td><?php echo $admin['konfirmasi']; ?></td>
              <td>&nbsp;
                <?php  
                  if ($admin['konfirmasi'] === 'Diterima' || $admin['konfirmasi'] === 'Menunggu Konfirmasi') {
                     echo $admin['keterangan_reservasi'];
                  }else{
                    echo "Info Tidak Valid";
                  }
                ?>
              </td>
              <td>
                <a href='' class="medi-info-btn">Edit</a>
                
                <a href='' class="medi-info-btn">Delete</a>
              </td>
            </tr>
            <?php endforeach; ?>
          </tbody>
        </table>
      </div>
    </div>
    <div class="col-md-3"></div>
  </div>
</section>
<?php endif; ?>

<!-- Tabel Reservasi -->
<section id="about" class="section-padding">
  <div class="container">
  	<div class="col-md-12">
      <h2 class="ser-title">Informasi Reservasi</h2>
      <hr class="botm-line">
    </div>
  	<div class="col-md-2"></div>
    <div class="col-md-9">
      <div class="time-info">
        <table style="margin: 8px 0px 0px;" border="1">
          <thead>
            <tr>
              <th>&nbsp; No &nbsp;</th>
              <th>&nbsp; Nama &nbsp;</th>
              <th>&nbsp; Waktu Reservasi &nbsp;</th>
              <th>&nbsp; Konfirmasi &nbsp;</th>
              <th>&nbsp; Keterangan &nbsp;</th>
            </tr>

          </thead>
          <tbody>
            <tr></tr>
            <?php 
              date_default_timezone_set('Asia/Jakarta');
            ?>
            <?php $i=0; ?>
            <?php foreach ($admins as $admin) : ?>
              <?php $i++; ?>
            <tr>
              <td>&nbsp;&nbsp;<?php echo $i; ?></td>
              <td>&nbsp;<?php echo $admin['nama']; ?></td> 
              <td>&nbsp;<?php echo $admin['waktu_reservasi']; ?></td>
              <td>&nbsp;<?php echo $admin['konfirmasi']; ?></td>
              <td>&nbsp;
                <?php  
                  if ($admin['konfirmasi'] === 'Diterima' || $admin['konfirmasi'] === 'Menunggu Konfirmasi') {
                     echo $admin['keterangan_reservasi'];
                  }else{
                    echo "Info Tidak Valid";
                  }
                ?>
              </td>
            </tr>
            <?php endforeach; ?>
            <!-- <tr>
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
            </tr> -->
          </tbody>
        </table>
      </div>
    </div>
    <div class="col-md-3"></div>
  </div>
</section>
<!--/ tabel reservasi