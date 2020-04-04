<html>
<head>
	<title>Daftar</title>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/style_nurul.css">
</head>
<body> 
	
<div class="kotak_login">
		<div class="tulisan_login">
		<div class="judul">DAFTAR</div>
		</div>
		<?php echo form_open('users/register'); ?>
			<label>Nama : </label>
			<input type="text" name="nama" class="form_login" placeholder="Nama" value="<?= set_value('nama'); ?>">
            <?= form_error('nama', '<small style="color : red;">', '</small>'); ?>
            <br><br>
            <label>Email : </label>
            <input type="email" name="email" class="form_login" placeholder="Email" value="<?= set_value('email'); ?>">
            <?= form_error('email', '<small style="color : red;">', '</small>'); ?>
            <br><br>
            <label>No. Telepon : </label>
            <input type="text" name="no_tlp" class="form_login" placeholder="No.Telpon" value="<?= set_value('no_tlp'); ?>">
            <?= form_error('no_tlp', '<small style="color : red;">', '</small>'); ?>
            <br><br>
			<label>Kata Sandi : </label>
			<input type="password" name="password" class="form_login" placeholder="Katasandi" value="<?= set_value('password'); ?>">
			<?= form_error('password', '<small style="color : red;">', '</small>'); ?>
            <br>
			<br>
			<button type="submit" class="tombol_login">Daftar</button>
			<br>
			<br>
			<span class="text2">
				Anda sudah punya akun?<a href="<?php echo base_url(); ?>users/login"> Masuk</a>
			</span>		
		<?php echo form_close(); ?>
	</div>

</body>
</html>