<div class="Container mt-5">
	<div class="row">
		<div class="col-6">
			<h3>Daftar Mahasiswa</h3>
			<?php foreach ($data['mhs'] as $key ) : ?>
				<ul class="list-group">
					<li class="list-group-item d-flex justify-content-between align-items-center"><?= $key['nama']; ?> 
					<a href="<?= BASEURL; ?>/mahasiswa/detail/<?= $key['id']; ?>" class="badge badge-primary"> detail</a> 
					</li>
				</ul>
			<?php endforeach; ?>
		</div>
	</div>
</div> 

<!-- <div class="Container mt-5">
	<div class="row">
		<div class="col-6">
			<h3>Daftar Mahasiswa</h3>
			<?php foreach ($data['mhs'] as $key ) : ?>
				<ul>
					<li><?= $key['nama']; ?></li>
					<li><?= $key['nrp']; ?></li>
					<li><?= $key['email']; ?></li>
					<li><?= $key['jurusan']; ?></li>
				</ul>
			<?php endforeach; ?>
		</div>
	</div>
</div>