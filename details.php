<!DOCTYPE html>
<html>
<head>
<?php
require 'inc/config.php ';
require 'html/header.php';



?>
	<link rel="stylesheet" type="text/css" href="css/stylesdetail.css">
	<title>details</title>
	<meta charset=utf-8>
</head>
<body>
	<img src="<?php echo $currentFilmInfos['fil_affiche']; ?>" border="0" />
	<br/>
	<a class="titre"> href="<?php echo $currentFilmInfos['fil_titre']; ?>">Titre</a>
	Catégorie: 
	<br/>
	<p class="synopsis"> href ="<?php echo $currentFilmInfos['fil_synopsis']; ?>">Synopsis</p>
	<br/>
	<p  class="annee"> href ="<?php echo $currentFilmInfos['fil_annee']; ?>">Année</p>
	<br/>
	<p class="acteurs"> href ="<?php echo $currentFilmInfos['fil_acteurs']; ?>">Acteurs</p>
	<br/>
	<p class="support"> href ="<?php echo $currentFilmInfos['sup_id']; ?>">Support</p>
	<br/>
	<p class="id"> href ="<?php echo $currentFilmInfos['sup_id']; ?>">Source</p>


</body>
</html>
