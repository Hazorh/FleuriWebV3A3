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
          <?php foreach($produitmassif as $produitmassif){ ?>
          <tr>
            <td><?php echo $produitmassif->pdt_ref; ?></td>
            <td><?php echo $produitmassif->pdt_designation; ?></td>
            <td><img src="<?php echo $produitmassif->pdt_image; ?>" alt="Bulbes de begonias"></td>
            <td><?php echo $produitmassif->pdt_prix; ?></td>
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
		<div class="bouton4">
			<a href="<?php echo site_url('acceuil/rosiers'); ?>">Rosiers</a>
		</div>
    <br>
	</body>
</html>
