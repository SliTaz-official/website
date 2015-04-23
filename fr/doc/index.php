<!DOCTYPE html>
<html lang="fr">
<head>
	<meta charset="utf-8" />
	<title>SliTaz (fr) - Documentation</title>
	<meta name="description" content="Documentation du projet SliTaz GNU/Linux shell howto make live-cd" />
	<meta name="keywords" lang="fr" content="Système, libre, gnu, linux, logiciels opensource, livecd, autonome" />
	<meta name="author" content="Christophe Lincoln"/>
	<?php include("../../lib/html/meta-link.html"); ?>
</head>
<body>

<?php 
include("../../lib/html/header.fr.html"); 
include("../../lib/html/nav.fr.html"); 
include("../../lib/lang.php");
?>

<!-- Content -->
<div id="content">

<h2>Documentation</h2>

<p>
	La documentation officielle de SliTaz se trouve sur le Wiki
	communautaire. Les manuels et un guide de démarrage rapide
	sont fournis avec chaque LiveCD de la distribution et
	accessibles depuis le menu "Documentation".
</p>

<h2>Handbook &amp; Cookbook</h2>

<p>
	<a href="http://doc.slitaz.org/fr:handbook:start">Handbook</a> -
	Le livre de main de SliTaz. Référence au sujet de l'utilisation du 
	système au niveau utilisateur, administrateur et développeur en
	général. Il réunit des travaux de référence, des mini manuels et 
	une collection d'instructions destinées à fournir un livre complet,
	de haute qualité, facilement consultable et fournissant des réponses
	rapides sur un sujet spécifique. Le Handbook explique comment 
	utiliser le LiveCD, donne les instructions d'installation, fournit 
	des références pour vous aidez à lancer une ligne de commandes, 
	installer des paquets logiciels générer un LiveCD et touche à de 
	nombreux sujets, de près ou de loin.
</p>
<p>
	<a href="http://doc.slitaz.org/fr:cookbook:start">Cookbook</a> -
	Le livre de cuisine de Slitaz. informations au sujet de la gestion,
	du fonctionnement et du développement de la distribution. Création
	de paquets, description des recettes, du wok, des scripts de 
	démarrages, etc.
</p>

<h2>Scratchbook</h2>

<p>
	<a href="scratchbook/">Scratchbook</a> - Le livre de création de
	la version initial de SliTaz. Description des étapes de création 
	de SliTaz, en commençant par la compilation du noyau Linux, en 
	passant par l'installation d'un server graphique (Xvesa), de 
	bibliothèques GTK+ et d'applications graphiques. Le Cookbook est 
	un livre technique permettant de construire un système GNU/Linux 
	depuis les sources, il demande du temps et de la motivation.
</p>

<h2>Manuels des utilitaires</h2>

<ul>
	<li><a href="http://hg.slitaz.org/tazpkg/raw-file/tip/doc/tazpkg.fr.html"
		>Tazpkg manuel</a> -  Gestionnaire de paquet SliTaz</li>
	<li><a href="http://hg.slitaz.org/tazlito/raw-file/tip/doc/tazlito.fr.html"
		>Tazlito manuel</a> -  Createur de LiveCD SliTaz</li>
	<li><a href="http://hg.slitaz.org/tazusb/raw-file/tip/doc/tazusb.fr.html"
		>TazUSB manuel</a> -  Créateur de LiveUSB SliTaz</li>
	<li><a href="http://hg.slitaz.org/cookutils/raw-file/tip/doc/cookutils.en.html"
		>Cookutils manuel</a> -  Constructeur de paquets SliTaz</li>
</ul>

<h2>Wiki et Forum</h2>

<p>
	Le <a href="http://doc.slitaz.org/fr:start">wiki</a>, site collaboratif et 
	communautaire, fournit divers ressources traitant de sujets particuliers.
	Le <a href="http://forum.slitaz.org/">forum</a> de support est aussi une
	source d'informations proposant des sujets très spécifiques.
</p>

<h2>Notes de publication</h2>

<p>
	Les notes de publication de SliTaz fournissent des informations spécifiques au
	sujet d'une version stable du système et donnent quelques astuces utiles pour
	commencer à utiliser SliTaz. Sur le corps du LiveCD, les notes de publication
	sont installées et accessible depuis le menu "Documentation".
</p>

<ul>
<?php
	$relnotes = array();
	for ($release = 1;; $release++) {
		$file = "releases/".$release.".0/relnotes.fr.html";
		if (!file_exists($file)) {
			$file = "../../en/doc/releases/".$release.".0/relnotes.en.html";
			if (!file_exists($file))
				break;
		}
		array_unshift($relnotes, array("release" => $release.".0", "file" => $file));
	}
	foreach ($relnotes as $release) {
		print "	<li><a href=\"".$release["file"]."\">SliTaz GNU/Linux ".$release["release"]." -\n";
		print "		Notes de publication</a></li>\n";
	}
?>
</ul>

<!-- End of content -->
</div>

<?php include("../../lib/html/footer.html"); ?>

</body>
</html>
