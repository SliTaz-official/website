<!DOCTYPE html>
<html lang="fr">
<head>
	<meta charset="utf-8" />
	<title>SliTaz - Actualité</title>
	<meta name="description" content="Archive des news de SliTaz GNU/Linux" />
	<meta name="keywords" lang="fr" content="slitaz old news" />
	<meta name="author" content="Christophe Lincoln"/>
	<?php include("../../lib/html/meta-link.html"); ?>
</head>
<body>

<?php
include("../../config.php");
include("../../lib/html/header.html");
include("../../lib/html/nav-ng.fr.html"); 
include("../../lib/lang.php");
?>

<!-- Content -->
<div id="content">

<h2>Actualité du projet</h2>

<div class="news">
<ul>
	
	<li id="d20140502">
		<strong>Publication de SliTaz 5.0 -RC-1</strong>
		<p>
			L'équipe SliTaz est heureuse d'annoncer la publication de SliTaz 
			GNU/Linux 5.0 RC1. Cette relase est très mature, mais nous 
			poursuivons nos effort afin de sortir au plus tôt la version 
			5.0 définitive.
		</p>
		<p>
			Divers bugs ont été corrigés et des améliorations ont été apportés 
			dans cette release. Encore merci à tous ceux qui ont pris le temps de 
			remonté les bugs.
		</p>
		<p>
			Les outils de configuration ont été retouchés afin que la configuration 
			du système puisse se faire aisement même en mode texte. A noter 
			également un meilleur support des langues, Tazpanel s'est vu 
			apporté une cure de jouvence au niveau de l'interface, le support 
			pour les anciens pilotes des disques ATA à été corrigé.
		</p>
		<p>
			Le bureau utilise de nouveau PCmanFM, qui dans sa nouvelle 
			version apporte le support de la corbeille. Epaulé par gvfs/udisks, 
			PCmanFM peut également gérer les disques amovibles.
		</p>
		<p>
			Plus de 200 000 paquets ont été mis à jour, et 50 nouveaux 
			paquets ont été ajoutés. Finalement, le site principale adopte
			un nouveau style afin de vous fournir un moyen toujours plus 
			facile pour naviguer et trouver l'information qu'il vous faut. 
		</p>
		<p>
			Télécharger: 
			<a href="http://mirror.slitaz.org/iso/5.0/slitaz-5.0-rc1.iso">slitaz-5-0-rc1.iso</a>
		</p>
	</li>
	
</ul>
<!-- End of news -->
</div>

<h2 id="archives">Archives des news</h2>
<p>
	Les archives de l'actualité du site classée par année. A noter que certain
	sont peut-ête cassé du à des changements de structure dan le site avec 
	le temps.
</p>
<p>
	<a href="2007.php">2007</a> | <a href="2008.php">2008</a>
	| <a href="2009.php">2009</a> | <a href="2010.php">2010</a>
	| <a href="2011.php">2011</a> | <a href="2012.php">2012</a>
	| <a href="./">2014</a>
</p>
	
<!-- End of content  -->
</div>

<?php include("../../lib/html/footer.html"); ?>

</body>
</html>
