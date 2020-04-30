<div class="container">
<div class="article_container">
	<h2 class="judul"><?php echo $post['judul']; ?></h2>
	<small class="post-date">Diunggah pada: <?php echo $post['waktu']; ?></small>

	<div class="post-body">
		<?php
			$input = $post['isi'];
			$pecah = explode("\r\n", $input);
			$text = "";

			for ($i=0; $i<=count($pecah)-1; $i++) { 
				$part = str_replace($pecah[$i], "<p>".$pecah[$i]."<p>", $pecah[$i]);
				$text .= $part;
			}

			echo $text;
		?>
	</div>

	<?php if($this->session->userdata('logged_in') && ($this->session->userdata('nama') == 'admin')): ?>
	<hr>
	<?php echo form_open('/posts/delete/'.$post['id_artikel']); ?>
		<input type="submit" value="Delete" class="btn btn-danger">
	</form>
	<?php endif; ?>
</div>
</div>