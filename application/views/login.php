<!DOCTYPE html>
<html>
<head>
	<title><?php echo $title; ?></title>
</head>
<body>
	<div class="container">
		<form method="post" action="<?php echo base_url("index.php/acceuil/login_validation"); ?>">
			<div class="form-group">
				<label>Enter Username</label>
				<input type="text" name="username" class="form-control"/>
			</div>
			<div class="form-group">
				<label>Enter Password</label>
				<input type="password" name="password" class="form-control"/>
			</div>
			<div class="form-group">
				<input type="submit" name="insert" value="Login" />
				<?php
				echo $this->session->flashdata("error");
				?>
			</div>
			<div class="bouton5">
				<a href="<?php echo site_url('acceuil'); ?>">Acceuil</a>
			</div>
	</div>

</body>
</html>