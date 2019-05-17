<head>
	<meta charset="utf-8">
	<title>Welcome to MHBC application</title>
	<link rel="stylesheet" href="<?php echo base_url('/assets/css/bootstrap.min.css');?>">
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script></head>

	<nav class="navbar navbar-expand-lg navbar-light bg-light">

		<a class="navbar-brand" href="<?php echo base_url('welcome'); ?>">
			<img src="<?php echo base_url('assets/image/logo_MHBC.png'); ?>" height="30" alt="logo_MHBC">
		</a>

		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		</button>

		<div class="collapse navbar-collapse" id="navbarNav">
			<ul class="navbar-nav">

				<li class="nav-item">
					<a class="nav-link" href="<?php echo base_url('welcome/connection'); ?>">Se connecter</a>
				</li>
				
				<li class="nav-item">
					<a class="nav-link" href="<?php echo base_url('welcome/registration'); ?>">S'inscrire</a>
				</li>

			</ul>
		</div>
	</nav>
