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
          <?php foreach($produit as $produit){ ?>
  				<tr>
  					<td><?php echo $produit->pdt_ref; ?></td>
    				<td><?php echo $produit->pdt_designation; ?></td>
    				<td><img src="<?php echo $produit->pdt_image; ?>" alt="Bulbes de begonias"></td>
    				<td><?php echo $produit->pdt_prix; ?></td>
  				</tr>
        <?php } ?>

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
