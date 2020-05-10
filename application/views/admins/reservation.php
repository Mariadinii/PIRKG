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
        <div class="more-features-box-text">
                <h3>Ketentuan :</h3>
                <p>&#9658; Jarak tiap pemesanan harus satu jam setelah pemesanan sebelumnya</p>
                <p>&#9658; Waktu dan Tanggal harus melewati waktu dan tanggal sekarang </p>
                <p>&#9658; Pengguna harus mendaftar 2 jam sebelum pertemuan berlangsung </p>
                <p>&#9658; Jika tidak memenuhi semua ketentuan diatas, maka pemesanan akan ditolak oleh admin </p>
                <p>&#9658; Jika pemesanan sudah dikonfirmasi maka pengguna akan di SMS melalui nomor telepon yang tertera pada profile </p>
                <p>&#9658; Jika pengguna tidak datang pada pemesanan yang sudah dipesan maka pengguna akan dilarang mendaftar selama 1 minggu </p>
            </div>
        <div class="contact-info">
          <div class="space">
            
          </div>
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
<!-- Jika belum login maka tidak akan mengeluarkan form login-->
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
      <div class="reservation_admin">
        <table>
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
              <td>&nbsp; <?php 
                foreach ($users as $user) {
                  if ($user['id_pengguna'] === $admin['id_pengguna']) {
                    echo $user['no_tlp'];
                  }
                }
              ?></td> 
              <td>&nbsp;&nbsp;<?php echo $admin['jenis_kelamin']; ?></td>
              <td><?php echo $admin['ket_reservasi']; ?></td>
              <td><?php echo $admin['waktu_reservasi']; ?></td>
              <td><?php echo $admin['konfirmasi']; ?></td>
              <td>
                <?php  
                  if ($admin['konfirmasi'] === 'Diterima' || $admin['konfirmasi'] === 'Menunggu Konfirmasi') {
                     echo $admin['keterangan_reservasi'];
                  }else{
                    echo "Info Tidak Valid";
                  }
                ?>
              </td>
              <td>
                <?php echo form_open('admins/edit/'.$admin['id_reservasi']); ?>
                  <input type="submit" value="Edit" class="btn btn-warning">
                </form>
                <br>
                <?php echo form_open('admins/delete/'.$admin['id_reservasi']); ?>
                  <input type="submit" value="Delete" class="btn btn-danger">
                </form>
              </td>
            </tr>
            <?php endforeach; ?>
          </tbody>
        </table>
      </div>
      <br>  
    </div>
    
    <!-- Keterangan kehadiran dokter-->
    <div class="doctor_info">
    <?php echo form_open('admins/edit_dokter/14') ?>
      <input type="radio" name="admin_dokter" value="hadir"> Dokter Hadir
      <input type="radio" name="admin_dokter"  value="tidak hadir"> Dokter Tidak Hadir
      &nbsp;&nbsp;<input type="submit" value="Ubah Keterangan">
    <?php echo form_close()?>
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
      <div class="reservation_user">
        <table>
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
          </tbody>
        </table>
      </div>
    </div>
    <div class="col-md-3"></div>
  </div>
  <?php 
    foreach ($users as $user) {
      if ($user['id_pengguna'] ==='14') {
        if ($user['admin_dokter'] === 'hadir') {
           echo '<h1 style="text-align: center;">Hari Ini Dokter Hadir</h1>';
        }else{
           echo '<h1 style="text-align: center;">Dokter Tidak Hadir Hari Ini</h1>';
        }
      }
    }
   ?>
</section>
<!-- /tabel reservasi-->

