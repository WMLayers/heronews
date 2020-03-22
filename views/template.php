<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
	<title><?php echo $title; ?></title>
	<link rel="stylesheet" type="text/css" href="<?php echo BASE_URL; ?>wpast/css/material_icons/icons.css">
	<link rel="stylesheet" type="text/css" href="<?php echo BASE_URL; ?>wpast/css/fonts/fonts.css">
	<link rel="stylesheet" type="text/css" href="<?php echo BASE_URL; ?>wpast/css/style.css">
</head>
<body>
<header>
	<a href="<?php echo BASE_URL; ?>">
		<img src="<?php echo BASE_URL; ?>wpast/images/logos/logoV.png" height="90">
	</a>
</header>
<div class="menu">
	<div class="left">
		<ul>
			<li><a href="<?php echo BASE_URL; ?>">artigos</a></li>
			<li><a href="<?php echo BASE_URL; ?>">listas</a></li>
			<li><a href="<?php echo BASE_URL; ?>home/contato">contato</a></li>
			<li><a href="<?php echo BASE_URL; ?>home/equipe">equipe</a></li>
		</ul>
	</div>
	<div class="right">
		<i class="material-icons">search</i>
		<input type="search" name="pesquisa" placeholder="pesquisar">
	</div>
</div>

<?php $this->loadVinT($V, $d); ?>

<script type="text/javascript" src="<?php echo BASE_URL; ?>wpast/js/jquery-3.3.1.min.js"></script>
<script type="text/javascript" src="<?php echo BASE_URL; ?>ckeditor/ckeditor.js"></script>
<script type="text/javascript" src="<?php echo BASE_URL; ?>wpast/js/script.js"></script>
</body>
</html>