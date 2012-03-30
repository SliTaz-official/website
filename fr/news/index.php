<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="fr" lang="fr">
<head>
	<title>SliTaz - News archives</title>
	<meta http-equiv="content-type" content="text/html; charset=ISO-8859-1" />
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
			Les archives de l'actualit� du site class�e par ann�e.
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

	<li><strong>31 Mai 2011 - Nouvelle et fra�che Cooking 20110329</strong>
	<p>
		L'�quipe de SliTaz est fi�re d'annoncer la disponibilit� d'une nouvelle
		version "cooking" de la distribution. Les paquetages ont �t� enti�rement
		reconstruit et optimis� pour les architectures i486 avec Cookutils, une
		nouvelle g�n�ration d'outils de fabrication de paquetages pour SliTaz.
		Le nouveau robot de compilation a �galement une belle interface Web qui
		peut fonctionner sur n'importe quel syst�me SliTaz.
	</p>
	<p>
		Le processus de d�marrage a �t� am�lior�e et la configuration du
		premier d�marrage est maintenant compl�t�e par des dialogues graphiques
		simples. Une interface Web standard, TazPanel, vous permet de
		configurer votre syst�me. (utile pour les connexions � distance), qui
		g�re �galement les paquets. TazPanel remplace un certain
		nombre de �bo�tes� dans les versions pr�c�dentes.
	</p>
	<p>
		Le syst�me d'affichage (X.org) utilise le rendu direct (DRI), les
		paquetages libdrm, linux-drm et linux-agp font partie de l'ISO de base.
		Bien que cela ajoute de 1 Mo au syst�me de fichiers compress�, nous
		avons par ailleurs gagn� beaucoup d'espace avec les paquetages
		reconstruits. Cette nouvelle ISO Cooking fait tout juste 30Mo et inclut un
		support complet de l'italien! T�l�chargement:
		<a href="http://mirror.slitaz.org/iso/cooking/slitaz-cooking.iso">
			slitaz-cooking.iso</a>
	</p>
	</li>
	
	<li><strong>29 Mars 2011 - Nouvelle Cooking 20110329</strong>
	<p>
		L'�quipe SliTaz est heureuse d'annoncer la publication d'une
		nouvelle ISO "cooking" proposant plus de 2900 paquets. Tous les paquets
		ont �t� reconstruits avec notre nouvel outil de cuisson, d�sormais
		inclus dans tazwok. Elle contient le noyau Linux 2.6.37 compil� avec
		glibc 2.13, binutils 2.21 &amp; gcc 4.5.2. Le liveCD "Core" inclus Midori
		0.3.3. Tazpkg est d�sormais enti�rement traduit en fran�ais et nous
		sommes ouverts � de nouvelles traductions. Tazwok a �t� enti�rement
		r�-�crit et il est d�sormais possible de re-cuire SliTaz depuis les
		sources depuis toutes les ISO. Cette ISO est la premi�re de la s�rie
		pr�c�dant la publication de la version stable 4.0.
	</p>
	<p>
		Beaucoup de travail a �t� fait depuis la derni�re ISO "cooking" publi�e
		en novembre: plus de 2200 changements ont �t� apport�s au wok, et
		plusieurs centaines aux outils faits maison. Nous sommes fiers
		d'annoncer que la communit� SliTaz a beaucoup grandi ces derniers
		mois: cette ann�e, il y a eu autant de changements apport�s que les
		quatres pr�c�dentes - c'est � dire toute l'histoire de SliTaz.
		N�anmoins, la quantit� ne suffit pas � faire la qualit�. Nous avons
		besoin de votre aide pour tester cette nouvelle ISO et signaler les
		bugs �ventuels. Si vous le souhaitez, vous �tes bienvenus pour aider �
		corriger les probl�mes connus avant la publication de la 4.0. Vous
		pouvez joindre les membres de notre groupe via notre IRC, mailing list,
		forums ou les mainteneurs des paquets par courriel. Nous esp�rons que
		vous vous r�jouirez, comme nous, de cette nouvelle 
		<a href="/fr/get/">publication!</a>
	</p>
	</li>

</div>

<!-- End of content  -->
</div>

<?php include("../../lib/html/footer.html"); ?>

</body>
</html>


