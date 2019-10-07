<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title> Halaman <?= $data['judul']; ?></title>
	<link rel="stylesheet" type="text/css" href="<?= BASEURL; ?>/css/bootstrap.css">
	<script src="<?= BASEURL; ?>/js/jquery-3.4.1.js" ></script>
  <script src="<?= BASEURL; ?>/js/bootstrap.min.js"></script>
  <script src="<?= BASEURL; ?>/js/bootstrap.js"></script>
  <script src="<?= BASEURL; ?>/js/script.js"></script>

</head>
<body>

	<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="#">PHP MVC</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="<?= BASEURL; ?>">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="<?= BASEURL; ?>">About</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="<?= BASEURL; ?>">Mahasiswa</a>
      </li>
    
      <li class="nav-item">
        <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">173040028</a>
      </li>
    </ul>
  
  </div>
</nav>