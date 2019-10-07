<div class="Container mt-5">
	<div class="row">
		<div class="col-6">
			<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
  Launch demo modal
</button>
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

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        ...
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
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