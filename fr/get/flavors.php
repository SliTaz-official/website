<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="fr" lang="fr">
<head>
    <title>SliTaz (fr) - LiveCD Flavors</title>
    <meta http-equiv="content-type" content="text/html; charset=ISO-8859-1" />
    <meta name="description" content="saveur LiveCD slitaz personnalis�" />
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
			Le syst�me des saveurs de LiveCD est un moyen simple et 
			communautaire permettant de g�n�rer des images ISO de 
			LiveCD destin�es � des t�ches particuli�res en proposant
			une s�lection de paquets sp�cifiques. Il existe deux
			possibilit�s pour cr�er une saveur : utiliser une saveur
			de la communaut� ou cr�er votre propre saveur.
		</p>
	</div>
</div>

<!-- Content -->
<div id="content">

<h2>Image ISO de LiveCD � saveur</h2>
<p>
Par commodit�, l'�quipe de SliTaz propose quelques images ISO de saveurs
pour la version stable et Cooking de SliTaz. Les saveurs <em>loram</em> 
permettent de d�marrer SliTaz sur des machines ayant tr�s peu de ressources.
La saveur <em>loram</em> a besoin de 80 MB et lib�re le cdrom, la
version <em>loram-cdrom</em> peut d�marrer avec 16 Mb et un peu de
m�moire swap, mais ne lib�re pas le cdrom.
</p>
<p>
<a href="http://mirror.slitaz.org/iso/3.0/flavors/"
	>T�l�charger une saveur</a>
</p>

<h3>Obtenir et g�n�rer une saveur</h3>
<p>
Une saveur consiste en un fichier (.flavor) permettant de g�n�rer une
saveur particuli�re. L'outil graphique Tazlitobox peut cr�er une saveur
en quelques cliques de souris. <a href="../doc/manuals/tazlito.html">
Le manuel de Tazlito</a> et <a href="http://doc.slitaz.org/fr:handbook:genlivecd">
la documentation</a> du Handbook donnent les instructions d�taill�es sur 
la g�n�ration de saveur. En ligne de commande, vous pouvez obtenir 
une liste des saveurs disponibles via <code>tazlito list-flavors</code>.
</p>

<h3>Cr�er et partager sa propre saveur</h3>
<p>
Les versions, Stable et Cooking, proposent une saveur <em>core</em> sur le 
miroir, elle peut �tre utilis�e comme base pour cr�er sa propre saveur.
La documentation du Handbook fournit toutes les instructions utiles �
<a href="http://doc.slitaz.org/fr:handbook:genlivecd">la cr�ation de sa propre saveur de LiveCD</a>
</p>
<p>
Si vous avez cr�� votre propre saveur, vous avez la possibilit� d'envoyer 
votre fichier de saveur sur <a href="../mailing-list.php">la liste de discussion</a> 
afin qu'il soit test� et inclus dans les saveurs officielles. 
Vous avez aussi la possibilit� de soumettre ou lister votre travail sur 
<a href="http://labs.slitaz.org/projects/show/flavors">les laboratoires Slitaz</a>.
Le syst�me des saveurs peut se comparer aux paquets, chaque saveur � son
mainteneur.
</p>

<!-- End of content -->
</div>

<?php include("../../lib/html/footer.html"); ?>

</body>
</html>
