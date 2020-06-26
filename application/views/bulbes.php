<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<link rel="stylesheet" href="<?php echo base_url('assets/css/style.css') ?>">
		<title>Bulbes</title>
	</head>
	<body>
		<h1>Bulbes</h1>
		<div class = "table_bulbes">
			<table>
  				<tr>
    				<td>Référence</td>
    				<td>Désignation</td>
    				<td>Photo</td>
    				<td>Prix</td>
  				</tr>
  				<tr>
  					<td>b01</td>
    				<td>Bulbes de bégonias</td>
    				<td><img src="<?php echo base_url('assets/images/bulbes_begonia.jpg')?>" alt="Bulbes de begonias"></td>
    				<td>5,00€</td>
  				</tr>
  				<tr>
  					<td>b02</td>
    				<td>10 bulbes de dahlias</td>
    				<td><img src="<?php echo base_url('assets/images/bulbes_dahlia.jpg')?>" alt="Bulbes de dahlias"></td>
    				<td>12,00€</td>
  				</tr>
  				<tr>
  					<td>b03</td>
    				<td>50 glaïeuls</td>
    				<td><img src="<?php echo base_url('assets/images/bulbes_glaieul.jpg')?>" alt="Bulbes de begonias"></td>
    				<td>9,00€</td>
  				</tr>
  			</table>
		</div>
		<div class="bouton1">
			<a href="<?php echo site_url(); ?>">Acceuil</a>
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
