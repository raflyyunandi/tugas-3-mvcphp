<div class="Container mt-5">

	<div class="eow">
		<div class="col-lg-6">
			<?php Flasher::flash(); ?>
		</div>
	</div>


		<div class="col-4 " >
			<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#formModal">Tambah data Mahasiswa
</button>
			<h3>Daftar Mahasiswa</h3>
			<?php foreach ($data['mhs'] as $key ) : ?>
				<ul class="list-group">
					<li class="list-group-item"><?= $key['nama']; ?> 
					<a href="<?= BASEURL; ?>/mahasiswa/detail/<?= $key['id']; ?>" class="badge badge-pill badge-success float-right ml-1 p-2" > detail</a> 
					<a href="<?= BASEURL; ?>/mahasiswa/hapus/<?= $key['id']; ?>"  class="badge badge-pill badge-danger float-right ml-1 p-2" onclick="return confirm('Ingin hapus data mahasiswa?')"> hapus</a> 
                    </li>
					</li>
				</ul>
			<?php endforeach; ?>
		</div>
	</div>
</div> 


<!-- Modal -->
<div class="modal fade" id="formModal" tabindex="-1" role="dialog" aria-labelledby="judulModal" aria-hidden="true">
	  <div class="modal-dialog" role="document">
	    <div class="modal-content">
	      <div class="modal-header">
	        <h5 class="modal-title" id="judulModal">Tambah Data Mahasiswa</h5>
	        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
	          <span aria-hidden="true">&times;</span>
	        </button>
	      </div>
	      <div class="modal-body">

	      <form action="<?= BASEURL; ?>/mahasiswa/tambah" method="POST">
			  
			  <div class="form-group">
			    <label for="nama">Nama</label>
			    <input type="text" class="form-control" id="nama" name="nama" laceholder="masukan nama">
			  </div>

	        	<div class="form-group">
			    <label for="nrp">Nrp</label>
			    <input type="number" class="form-control" id="nrp" name="nrp" laceholder="masukan nrp">
			  </div>

	        <div class="form-group">
			    <label for="email">Email</label>
			    <input type="email" class="form-control" id="email" name="email" laceholder="masukan email">
			  </div>


	        <div class="form-group">
		    <label for="jurusan">Jurusan</label>
		    <select class="form-control" id="jurusan" name="jurusan">
		      <option value="Teknik Informatika">Teknik Informatika</option>
		      <option value="Teknik Mesin">Teknik Mesin</option>
		      <option value="Teknik Pangan">Teknik Pangan</option>
		      <option value="Teknik Teknik Perencanaan & Wilayah Kota">Teknik Perencanaan & Wilayah Kota </option>
		      <option value="Teknik Lingkungan">Teknik Lingkungan</option>
		    </select>
			</div>

	      <div class="modal-footer">
	        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
	        <button type="submit" class="btn btn-primary">Tambah Data</button>
	       	</form>

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