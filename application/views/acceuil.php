<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<link rel="stylesheet" href="<?php echo base_url('assets/css/style.css') ?>">
		<title>Acceuil</title>
	</head>
	<h1>Societe Lafleur</h1>
	<h3>"Dites-le avec LaFleur"</h3>
	<body>
		<div class="image_acceuil">
			<img src="<?php echo base_url('assets/images/img_acceuil.jpg')?>" alt="Image d'acceuil">
		</div>
		<br>
		<div class="bouton1">
			<a href="<?php echo site_url(); ?>">Acceuil</a>
		</div>
		<br>
		<div class = "bouton2">
    		<a href="<?php echo site_url('acceuil/bulbes'); ?>">Bulbes</a>
		</div>
		<br>
		<div class = "bouton3">
    		<a href="<?php echo site_url('acceuil/massifs'); ?>">Plantes a massifs</a>
		</div>
		<br>
		<div class="bouton4">
			<a href="<?php echo site_url('acceuil/rosiers'); ?>">Rosiers</a>
		</div>
		<br>
	</body>
</html>
