<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<link rel="stylesheet" href="<?php echo base_url('assets/css/style.css') ?>">
		<title>Plantes à massifs</title>
	</head>
	<body>
		<h1>Plantes a massifs</h1>
		<div class = "table_massifs">
			<table>
  				<tr>
    				<td>Référence</td>
    				<td>Désignation</td>
    				<td>Photo</td>
    				<td>Prix</td>
  				</tr>
  				<tr>
  					<td>m01</td>
    				<td>Lot de 3 marguerites</td>
    				<td><img src="<?php echo base_url('assets/images/massif_marguerite.jpg')?>" alt="Lot de 3 marguerites"></td>
    				<td>5,00€</td>
  				</tr>
  				<tr>
  					<td>m02</td>
    				<td>Pour un bouquet de 6 pensées</td>
    				<td><img src="<?php echo base_url('assets/images/massif_pensee.jpg')?>" alt="Bouquet de pensées"></td>
    				<td>6,00€</td>
  				</tr>
  				<tr>
  					<td>m03</td>
    				<td>Mélange varié de 10 plantes à massifs</td>
    				<td><img src="<?php echo base_url('assets/images/massif_melange.jpg')?>" alt="Mélange varié de 10 plantes à massifs"></td>
    				<td>15,00€</td>
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
		<div class="bouton4">
			<a href="<?php echo site_url('acceuil/rosiers'); ?>">Rosiers</a>
		</div>
    <br>
	</body>
</html>
