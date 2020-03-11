<h2><?= $title ?></h2>
<?php foreach ($posts as $post) : ?>
	<h3><?php echo $post['judul']; ?></h3>
	<small>Posted on: <?php echo $post['waktu']; ?></small>
	<br>
	<?php echo $post['ket']; ?>
	<br>
	<br>
	<p><a class="btn btn-outline-info" href="<?php echo site_url('/posts/'.$post['pk']); ?>">Read More</a></p>
	<br>
<?php endforeach; ?>