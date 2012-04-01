<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
	"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="fr" lang="fr">
<head>
	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<title>SliTaz (fr) - LiveCD Flavors</title>
	<meta name="description" content="saveur LiveCD slitaz personnalisé" />
	<meta name="keywords" lang="fr" content="linux gnu live slitaz" />
	<meta name="author" content="Christophe Lincoln"/>
	<?php include("../../lib/html/meta-link.html"); ?>
</head>
<body>

<?php include("../../lib/html/header.html"); ?>

<!-- Block -->
<div id="block">
	<?php include("../../lib/html/nav.fr.html"); ?>
	<!-- Information/image -->
	<div id="block_info">
		<h4>Obtenir des saveurs</h4>
		<p>
			Le système des saveurs de LiveCD est un moyen simple et 
			communautaire permettant de générer des images ISO de 
			LiveCD destinées à des tâches particulières en proposant
			une sélection de paquets spécifiques. Il existe deux
			possibilités pour créer une saveur : utiliser une saveur
			de la communauté ou créer votre propre saveur.
		</p>
	</div>
</div>

<?php include("../../lib/lang.php"); ?>

<!-- Content -->
<div id="content">

<h2>Image ISO de LiveCD à saveur</h2>

<p>
Par commodité, l'équipe de SliTaz propose quelques images ISO de saveurs
pour la version stable et Cooking de SliTaz. Les saveurs <em>loram</em> 
permettent de démarrer SliTaz sur des machines ayant très peu de ressources.
La saveur <em>loram</em> a besoin de 80 MB et libère le cdrom, la
version <em>loram-cdrom</em> peut démarrer avec 16 Mb et un peu de
mémoire swap, mais ne libère pas le cdrom.
</p>
<p>
<a href="http://mirror.slitaz.org/iso/3.0/flavors/"
	>Télécharger une saveur</a>
</p>

<h3>Obtenir et générer une saveur</h3>

<p>
Une saveur consiste en un fichier (.flavor) permettant de générer une
saveur particulière. L'outil graphique Tazlitobox peut créer une saveur
en quelques cliques de souris. <a href="http://hg.slitaz.org/tazlito/raw-file/tip/doc/tazlito.fr.html">
Le manuel de Tazlito</a> et <a href="http://doc.slitaz.org/fr:handbook:genlivecd">
la documentation</a> du Handbook donnent les instructions détaillées sur 
la génération de saveur. En ligne de commande, vous pouvez obtenir 
une liste des saveurs disponibles via <code>tazlito list-flavors</code>.
</p>

<h3>Créer et partager sa propre saveur</h3>

<p>
Les versions, Stable et Cooking, proposent une saveur <em>core</em> sur le 
miroir, elle peut être utilisée comme base pour créer sa propre saveur.
La documentation du Handbook fournit toutes les instructions utiles à
<a href="http://doc.slitaz.org/fr:handbook:genlivecd">la création de sa propre saveur de LiveCD</a>
</p>
<p>
Si vous avez créé votre propre saveur, vous avez la possibilité d'envoyer 
votre fichier de saveur sur <a href="../mailing-list.php">la liste de discussion</a> 
afin qu'il soit testé et inclus dans les saveurs officielles. 
Vous avez aussi la possibilité de soumettre ou lister votre travail sur 
<a href="http://labs.slitaz.org/projects/show/flavors">les laboratoires Slitaz</a>.
Le système des saveurs peut se comparer aux paquets, chaque saveur à son
mainteneur.
</p>

<!-- End of content -->
</div>

<?php include("../../lib/html/footer.html"); ?>

</body>
</html>
