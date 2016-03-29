<!DOCTYPE html>
<html lang="fr">
<head>
	<meta charset="utf-8"/>
	<title>SliTaz - Actualité</title>
	<meta name="description" content="Archive des news de SliTaz GNU/Linux"/>
	<meta name="keywords" lang="fr" content="slitaz old news"/>
	<meta name="author" content="Christophe Lincoln"/>
	<?php include("../../lib/html/meta-link.html"); ?>
</head>
<body>

<?php
include("../../config.php");
include("../../lib/html/header.fr.html"); 
include("../../lib/html/nav.fr.html"); 
include("../../lib/lang.php");
?>

<!-- Content -->
<div id="content">

<h2>Actualité du projet</h2>

<p>
	Les news plus spécifiques sont publiées sur notre blog communautaire:
	<a href="http://scn.slitaz.org/">SliTaz Community blog</a>
</p>

<div class="news">
<ul>
	
	<li id="d20150520">
		<strong>20 mai 2015 - Publication de SliTaz 5.0 RC-3</strong>
		<p>
			L'équipe SliTaz est heureuse d'annoncer la publication de SliTaz 
			GNU/Linux 5.0 RC3. Nous avons fait un enorme travail pour corriger
			les bugs de la version RC2 avec environ 2500 commits dans note dépôt
			Mercurial. Les 4800 paquets ont été reconstruits pour trouver et
			corriger les bugs et garantir que tout peut être recontruit à
			partir des sources par des utilisateurs avancés.
		</p>
		<p>
			Nous avons retravaillé Tazpanel et ajouté la gestion multi utilisateurs.
			L'utilisateur par défault est nobody avec certains menus désactivés.
			Le bouton de login donne accés à plus de privilèges.
		</p>
		<p>
			Télécharger: 
			<a href="http://mirror.slitaz.org/iso/5.0/slitaz-5.0-rc3.iso">slitaz-5-0-rc3.iso</a>
			[ <a href="http://mirror.slitaz.org/iso/5.0/slitaz-5.0-rc3.md5">md5</a> ]
		</p>
	</li>
	
	<li id="d20140519">
		<strong>19 mai 2014 - Publication de SliTaz 5.0 RC-2</strong>
		<p>
			L'équipe SliTaz est heureuse d'annoncer la publication de SliTaz 
			GNU/Linux 5.0 RC2. Nous avons fait un enorme travail pour corriger
			les bugs de la version RC1 avec environ 500 commits dans note dépôt
			Mercurial. Les 4300 paquets ont été reconstruits pour trouver et
			corriger les bugs et garantir que tout peut être recontruit à
			partir des sources par des utilisateurs avancés.
		</p>
		<p>
			Nous avons pris beaucoup de temps à améliorer l'utilsation de
			nos bureaux LXDE par défault et personalisé. Les configurations
			de polkit et d'udisks ont été corrigées pour gérer correctement
			les périphériques externes et les partitions des disques internes.
		</p>
		<p>
			La RC2 supporte une nouvelle méthode d'installation. SliTaz peut
			être installée dans un répertoire sans repartitionner de disque
			dur et cette technique fonctionne avec tous les systèmes de fichier
			y compris NTFS et FAT32.
		</p>
		<p>
			Télécharger: 
			<a href="http://mirror.slitaz.org/iso/5.0/slitaz-5.0-rc2.iso">slitaz-5-0-rc2.iso</a>
			[ <a href="http://mirror.slitaz.org/iso/5.0/slitaz-5.0-rc2.md5">md5</a> ]
		</p>
	</li>
	
	<li id="d20140502">
		<strong>2 mai 2014 - Publication de SliTaz 5.0 RC-1</strong>
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
			Plus de 200 paquets ont été mis à jour, et 50 nouveaux 
			paquets ont été ajoutés. Finalement, le site principale adopte
			un nouveau style afin de vous fournir un moyen toujours plus 
			facile pour naviguer et trouver l'information qu'il vous faut. 
		</p>
		<p>
			Télécharger: 
			<a href="http://mirror.slitaz.org/iso/5.0/slitaz-5.0-rc1.iso">slitaz-5-0-rc1.iso</a>
			[ <a href="http://mirror.slitaz.org/iso/5.0/slitaz-5.0-rc1.md5">md5</a> ]
		</p>
	</li>
	
</ul>
<!-- End of news -->
</div>

<h2 id="archives">Archives des news</h2>
<p>
	Les archives de l'actualité du site classée par année. A noter que
	certains liens sont peut-ête cassés du à des changements de structure
	dans le site au fil du temps.
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
