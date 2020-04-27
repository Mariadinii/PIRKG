<!--masih belum ada cssnya -->
<div class="container">

<h2><?php echo $post['judul']; ?></h2>
<small class="post-date">Posted on: <?php echo $post['waktu']; ?></small>
<div class="post-body">
	<?php echo $post['isi']; ?>

</div>

<?php if($this->session->userdata('logged_in') && ($this->session->userdata('nama') == 'admin')): ?>
<hr>
<?php echo form_open('/posts/delete/'.$post['id_artikel']); ?>
	<input type="submit" value="Delete" class="btn btn-danger">
</form>
<?php endif; ?>

</div>