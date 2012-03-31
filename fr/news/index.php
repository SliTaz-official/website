<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="fr" lang="fr">
<head>
	<title>SliTaz - News archives</title>
	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<meta name="description" content="Archive des news de SliTaz GNU/Linux" />
	<meta name="keywords" lang="fr" content="slitaz old news" />
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
		<h4>Archives des news</h4>
		<p>
			Les archives de l'actualité du site classée par année.
		</p>
		<p>
			<img src="/images/news.png" alt="[ News ]" />
			<a href="2007.php">2007</a> | <a href="2008.php">2008</a>
			| <a href="2009.php">2009</a> | <a href="2010.php">2010</a>
			| <a href="./">2011</a>
		</p>
	</div>
</div>

<!-- Content -->
<div id="content">

<h2>2011</h2>

<div class="news">

	<li><strong>31 Mai 2011 - Nouvelle et fraîche Cooking 20110329</strong>
	<p>
		L'équipe de SliTaz est fière d'annoncer la disponibilité d'une nouvelle
		version "cooking" de la distribution. Les paquetages ont été entièrement
		reconstruit et optimisé pour les architectures i486 avec Cookutils, une
		nouvelle génération d'outils de fabrication de paquetages pour SliTaz.
		Le nouveau robot de compilation a également une belle interface Web qui
		peut fonctionner sur n'importe quel système SliTaz.
	</p>
	<p>
		Le processus de démarrage a été améliorée et la configuration du
		premier démarrage est maintenant complétée par des dialogues graphiques
		simples. Une interface Web standard, TazPanel, vous permet de
		configurer votre système. (utile pour les connexions à distance), qui
		gère également les paquets. TazPanel remplace un certain
		nombre de «boîtes» dans les versions précédentes.
	</p>
	<p>
		Le système d'affichage (X.org) utilise le rendu direct (DRI), les
		paquetages libdrm, linux-drm et linux-agp font partie de l'ISO de base.
		Bien que cela ajoute de 1 Mo au système de fichiers compressé, nous
		avons par ailleurs gagné beaucoup d'espace avec les paquetages
		reconstruits. Cette nouvelle ISO Cooking fait tout juste 30Mo et inclut un
		support complet de l'italien! Téléchargement:
		<a href="http://mirror.slitaz.org/iso/cooking/slitaz-cooking.iso">
			slitaz-cooking.iso</a>
	</p>
	</li>
	
	<li><strong>29 Mars 2011 - Nouvelle Cooking 20110329</strong>
	<p>
		L'équipe SliTaz est heureuse d'annoncer la publication d'une
		nouvelle ISO "cooking" proposant plus de 2900 paquets. Tous les paquets
		ont été reconstruits avec notre nouvel outil de cuisson, désormais
		inclus dans tazwok. Elle contient le noyau Linux 2.6.37 compilé avec
		glibc 2.13, binutils 2.21 &amp; gcc 4.5.2. Le liveCD "Core" inclus Midori
		0.3.3. Tazpkg est désormais entièrement traduit en français et nous
		sommes ouverts à de nouvelles traductions. Tazwok a été entièrement
		ré-écrit et il est désormais possible de re-cuire SliTaz depuis les
		sources depuis toutes les ISO. Cette ISO est la première de la série
		précédant la publication de la version stable 4.0.
	</p>
	<p>
		Beaucoup de travail a été fait depuis la dernière ISO "cooking" publiée
		en novembre: plus de 2200 changements ont été apportés au wok, et
		plusieurs centaines aux outils faits maison. Nous sommes fiers
		d'annoncer que la communité SliTaz a beaucoup grandi ces derniers
		mois: cette année, il y a eu autant de changements apportés que les
		quatres précédentes - c'est à dire toute l'histoire de SliTaz.
		Néanmoins, la quantité ne suffit pas à faire la qualité. Nous avons
		besoin de votre aide pour tester cette nouvelle ISO et signaler les
		bugs éventuels. Si vous le souhaitez, vous êtes bienvenus pour aider à
		corriger les problèmes connus avant la publication de la 4.0. Vous
		pouvez joindre les membres de notre groupe via notre IRC, mailing list,
		forums ou les mainteneurs des paquets par courriel. Nous espérons que
		vous vous réjouirez, comme nous, de cette nouvelle 
		<a href="/fr/get/">publication!</a>
	</p>
	</li>

</div>

<!-- End of content  -->
</div>

<?php include("../../lib/html/footer.html"); ?>

</body>
</html>


