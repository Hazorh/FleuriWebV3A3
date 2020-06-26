<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<link rel="stylesheet" href="<?php echo base_url('assets/css/style.css') ?>">
		<title>Rosiers</title>
	</head>
	<body>
		<h1>Rosiers</h1>
		<div class = "table_rosiers">
			<table>
  				<tr>
    				<td>Référence</td>
    				<td>Désignation</td>
    				<td>Photo</td>
    				<td>Prix</td>
  				</tr>
  				<tr>
  					<td>r01</td>
    				<td>1 pied spécial grandes fleurs</td>
    				<td><img src="<?php echo base_url('assets/images/rosiers_gdefleur.jpg')?>" alt="Pied pour grandes fleurs"></td>
    				<td>20,00€</td>
  				</tr>
  				<tr>
  					<td>r02</td>
    				<td>Une variété selectionnée pour son parfum</td>
    				<td><img src="<?php echo base_url('assets/images/rosiers_parfum.jpg')?>" alt="Fleur odorante"></td>
    				<td>9,00€</td>
  				</tr>
  				<tr>
  					<td>r03</td>
    				<td>Rosier arbuste</td>
    				<td><img src="<?php echo base_url('assets/images/rosiers_arbuste.jpg')?>" alt="Rosiers arbuste"></td>
    				<td>8,00€</td>
  				</tr>
  			</table>
		</div>
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
	</body>
</html>
