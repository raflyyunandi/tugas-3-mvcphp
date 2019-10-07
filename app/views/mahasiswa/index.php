<div class="Container mt-5">
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