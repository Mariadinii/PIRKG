<html>
<head>
	<title>Masuk</title>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/style_nurul.css">
</head>
<body> 
	
	<div class="kotak_login">
		<div class="tulisan_login">
		
		<div class="judul">MASUK</div>
		<div class="container">
			<?php if($this->session->flashdata('login_failed')): ?>
			<?php echo '<p style="color : red;">'.$this->session->flashdata('login_failed').'</p>'; ?>
			<?php endif; ?>
		</div>	

		</div>
		<?php echo form_open('users/login'); ?>
			<label>Nama : </label>
			<input type="text" name="nama" class="form_login" placeholder="Nama" required autofocus>
 			
 			<br><br>
			<label>Kata Sandi :</label>
			<input type="password" name="password" class="form_login" placeholder="Katasandi" required autofocus>

			<br><br>
			
				<p style="text-align: center;">Jika anda lupa kata sandi, silahkan hubungi admin.</p>
			
			<button type="submit" class="tombol_login">Masuk</button>
			<br>
			<br>
			<span class="text2">
				Anda tidak punya akun?<a href="<?php echo base_url(); ?>users/register">Daftar</a>
			</span>		
		<?php echo form_close(); ?>
	</div>
</body>
</html>