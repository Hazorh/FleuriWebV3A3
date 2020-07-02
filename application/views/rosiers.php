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
          <?php foreach($produitrosier as $produitrosier){ ?>
          <tr>
            <td><?php echo $produitrosier->pdt_ref; ?></td>
            <td><?php echo $produitrosier->pdt_designation; ?></td>
            <td><img src="<?php echo $produitrosier->pdt_image; ?>" alt="Bulbes de begonias"></td>
            <td><?php echo $produitrosier->pdt_prix; ?></td>
          </tr>
        <?php } ?>

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
