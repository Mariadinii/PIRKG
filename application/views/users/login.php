<html>
<head>
	<title>Masuk</title>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/style_nurul.css">
</head>
<body> 
	
	<div class="kotak_login">
		<div class="tulisan_login">
		
		<div class="judul">MASUK</div>
		</div>
		<form>
			<label>Nama : </label>
			<input type="text" name="username" class="form_login" placeholder="Nama/email">
 
			<label>Kata Sandi :</label>
			<input type="password" name="password" class="form_login" placeholder="Katasandi">
			<div class="text">
				<a href="#">Lupa kata sandi?</a>
			</div>
			<input type="submit" class="tombol_login" value="Masuk">
			<br>
			<br>
			<span class="text2">
				Anda tidak punya akun?<a href="#">Daftar</a>
			</span>		
		</form>
	</div>
</body>
</html>