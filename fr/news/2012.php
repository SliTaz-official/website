<!DOCTYPE html>
<html lang="fr">
<head>
	<meta charset="utf-8"/>
	<title>SliTaz - 2012 News archives</title>
	<meta name="description" content="Archive des news de SliTaz GNU/Linux 2009"/>
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

<h2>2012</h2>

<div class="news">

<ul>

	<li id="d20120410">
		<strong>10 Avr 2012 - SliTaz 4.0</strong>
	<p>
		Les contributeurs de SliTaz sont heureux d'annoncer la publication
		de SliTaz GNU/Linux 4.0, la nouvelle version stable de la distribution.
		Deux années de travail communautaire ont apporté un procédé de
		fabrication fiable, un temps de démarrage encore plus court et plus de
		1000 nouveaux paquets installables.
	</p>
	<p>
		SliTaz propose un bureau graphique complet dans 35 MB s'appuyant sur
		OpenBox et LXDE et qui fonctionne entrièrement en RAM avec 192Mo.
		Sa nouvelle image CD 4-en-1 peut être installée sur disque dur
		avec 48Mo seulement en sélectionnant automatiquement la configuration
		logicielle adaptée.
	</p>
	<p>
		Les outils maisons ont progressé. Tazpkg introduit un nouveau système de
		notification, il est beaucoup plus véloce malgré l'augmentation du
		nombre des paquets ; TazPanel permet de centraliser la gestion du
		système.
	</p>
	<p>
		Vous pouvez lire les 
		<a href="../doc/releases/4.0/relnotes.fr.html"> 
		notes de publication</a> : et télécharger SliTaz 4.0 depuis notre miroir : 
		<a href="http://mirror.slitaz.org/iso/4.0/slitaz-4.0.iso">slitaz-4.0.iso</a> 
	</p>
	</li>

	<li id="d20120303">
		<strong>03 Mar 2012 - SliTaz 4.0-RC2</strong>
	<p>
		L'équipe de SliTaz est fière de vous annoncer la sortie de SliTaz
		4.0-RC2.
		Nous avons fait un énorme travail pour corriger les bugs de la RC1
		et des outils fait maison tels que Tazpkg, TazPanel et TazUSB.
		La connexion WiFi est rendue plus facile par l'intermédiaire de
		TazPanel ou du nouveau wifibox. Tazpkg est maintenant mieux intégré
		au bureau et un nouveau système de notification a été mis au point.
	</p>
	<p>
		Cette nouvelle version vient avec un paquet Xorg complet et le
		support DRI.
		Les pilotes Intel, Geode et vesa fonctionnent out-of-the-box.
		Nous avons également reconstruit tous les paquets une fois de plus
		et réduit d'environ 2Mo le LiveCD de base. Celui-ci comprend
		maintenant Lxrandr, Parcellite et le client bitorrent Transmission.
	</p>
	<p>
		Nous tenons à remercier tous les contributeurs qui ont testé la
		première version candidate.
		La RC2 est proche de ce que sera la version 4.0 de SliTaz prévue dans
		2 semaines.
		Télécharger l'image ISO à partir de RC2 notre miroir (35,1 Mo):
		<a href="http://mirror.slitaz.org/iso/cooking/slitaz-4.0-RC2.iso">SliTaz 4.0-RC2</a>
	</p>
	</li>

	<li id="d20120223">
		<strong>23 Feb 2012 - SliTaz 4.0-RC1</strong>
	<p>
		L'équipe des contributeurs SliTaz est heureuse de pouvoir annoncer
		la disponibilité immédiate de la première version candidate pour
		SliTaz 4.0. SliTaz peut démarrer en 10-12 secondes sur du matériel
		assez récent et ne nécessite que 48 Mb de RAM pour installer un
		bureau graphique. La nouvelle 4en1 est capable de détecter la
		mémoire disponible et démarrer en mode texte ou graphique selon
		la machine.
	</p>
	<p>
		SliTaz 4.0 aura plus de 3000 paquets bien testés dans son dépôt et la
		série de RC va nous permettre de chasser les dernières anomalies.
		Depuis notre dernière version stable les paquets on été reconstruits
		2 fois pour s'assurer de leur qualité.
	</p>
	<p>
		Cette RC2 fournit maintenant un menu de démarrage graphique, la
		configuration de la langue et du clavier en mode graphique, un
		nouveau bureau plus moderne et plus abouti. Vous pouvez télécharger
		cette nouvelle ISO depuis notre serveur:
		<a href="http://mirror.slitaz.org/iso/cooking/slitaz-4.0-RC1.iso">SliTaz 4.0-RC1</a>
	</p>
	</li>
</ul>


<!-- End of news -->
</div>

<h2>Archives des news</h2>
<p>
	A noter que certains liens sont peut-ête cassés du à des changements
	de structure dans le site au fil du temps.
</p>
<p>
	<a href="index.php#archives">Archives par année</a>
</p>

<!-- End of content  -->
</div>

<?php include("../../lib/html/footer.html"); ?>

</body>
</html>
