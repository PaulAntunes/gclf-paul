<?php
require 'inc/config.php';
require 'html/header.php';

$sql="
SELECT COUNT(*)AS nb, categorie.cat_id, categorie.cat_nom 
FROM film 
INNER JOIN categorie 
	ON categorie.cat_id = film.cat_id 
GROUP BY categorie.cat_id, categorie.cat_nom 
ORDER BY nb ASC 
	";
?>

<section>
	<form action="catalogue.php" method="get">
		<input type="text" name="q" value="" />
		<input type="submit" value="Rechercher"/>
	</form>
</section>
<p class="btn" href="catalogue.php?id=<?php echo $sql;?>"> Aventures </p> 
<br />


<?php
require 'html/footer.php';