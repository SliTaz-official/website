<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
	"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="fr" lang="fr">
<head>
	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<title>SliTaz GNU/Linux (fr)</title>
	<meta name="description" content="SliTaz GNU/Linux LiveCD système libre autonome rapide linux cdrom vif gratuit" />
	<meta name="keywords" lang="fr" content="Système, libre, gnu, linux, logiciels opensource, livecd, swiss made" />
	<meta name="author" content="Christophe Lincoln"/>
	<?php include("../lib/html/meta-link.html"); ?>
</head>
<body>

<?php include("../lib/html/header.html"); ?>

<!-- Block -->
<div id="block">
	<?php include("../lib/html/nav.fr.html"); ?>
	<!-- Information/image -->
	<div id="block_info">
		<h4>Page principale</h4>
		<p>
			SliTaz est un système GNU/Linux fournissant un bureau ou un
			serveur complet dans moins de 30Mb.
		</p>
		<p>
			SliTaz est distribuée sous forme de LiveCD, le système est
			léger, rapide et simple à utiliser. SliTaz fournit un bureau
			graphique intuitif et élégant, le meilleur support matériel
			possible et dispose d'une active communauté.
			<a href="about/">Plus d'informations...</a>
		</p>
	</div>
</div>

<?php include("../lib/lang.php"); ?>

<!-- Content -->
<div id="content">

<!--<div class="box-up">
	<p>
		Aidez nous a obtenir un serveur dedié -
		<a href="http://www.gofundme.com/3ql70">Campagne de dons en ligne</a>
		ou devez
		<a href="/en/sponsor/">un sponsor officiel</a>
	</p>
</div>-->

<!--
    SliTaz news starting.
-->

<h2>Actualités du projet</h2>

<p>
	Le site web de SliTaz propose les principales nouvelles du projet, et
	<a href="http://scn.slitaz.org/">le blog officiel</a> des nouvelles
	sur l'activité générale des différents sous-projets. Ces nouvelles sont
	aussi disponibles sous forme de <a href="/rss.xml">flux XML</a>. De
	même, le projet propose une petite lettre d'information mensuelle et
	<a href="../">la page d'accueil</a> du site, elle, propose un synthèse
	de l'activité du projet avec les derniers paquets cuits, les commits
	et Tweets.
</p>

<div class="box">
	<img src="/images/news.png" alt="[ ]" />
	<a href="http://scn.slitaz.org/">Nouvelles du Blog</a> |
	<a href="http://doc.slitaz.org/fr:newsletter:start">Lettre d'information</a>
</div>

<div class="news">

<ul>
	<!-- <li><strong>Date - Title</strong>
	<p></p>
	</li> -->

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
		<a href="http://www.slitaz.org/fr/doc/releases/4.0/relnotes.fr.html"> 
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

	<li>
		<a href="news/">Plus d'actualité</a> ou voir les archives:
		<a href="news/2007.php">2007</a> |
		<a href="news/2008.php">2008</a> |
		<a href="news/2009.php">2009</a> |
		<a href="news/2010.php">2010</a> |
		<a href="news/">2011</a>
	</li>
</ul>

<!-- End of news -->
</div>

<h2>Activité du projet</h2>

<?php require_once("../lib/get-feeds.php"); ?>

<div class="activity">
	<p>
		<a href="http://scn.slitaz.org/activity/"><img
			src="/images/users.png" alt="[ ]" /></a>
		Activité de la communauté
		<?php get_feed("scn.xml"); ?>
	</div>
	<p class="activity_more">
		<a href="http://scn.slitaz.org/activity/">Plus d'activité</a>
	</p>
</div>

<div class="activity">
	<p>
		<a href="http://forum.slitaz.org/"><img
			src="/images/support.png" alt="[ ]" /></a>
		Activité du forum
		<?php get_feed_forum("forum.xml"); ?>
	</div>
	<p class="activity_more">
		<a href="http://forum.slitaz.org/">Plus de support</a>
	</p>
</div>

<div class="activity">
	<p>
		<a href="http://hg.slitaz.org/">
			<img src="/images/development.png" alt="[ ]" /></a>
		Derniers commits dans le wok
		<?php get_feed("wok.xml"); ?>
	</div>
	<p class="activity_more">
		<a href="http://hg.slitaz.org/">Plus de commits</a>
	</p>
</div>

<h2>Nous rejoindre et aider le projet</h2>

<p>
	SliTaz est une communauté active, toujours en mouvement et qui utilise
	beaucoup de resources malgré sa petite taille. Parlez de SliTaz, aidez
	nous à faire connaître la distribution, pasté sur voter blog, parlez en
	à des amis, sur Twitter ou encore Facebook. Rejoignez nous!
</p>

<?php include("../lib/html/social.html"); ?>

<p>
	Vous pouvez aussi faire un dons pour nous aidez à payer les serveur et
	continuer é developper SliTaz et son infrastructure. Même un petit dons
	de 1 Euro ou dollar via Flattr nous aide!
</p>

<?php include("../lib/html/donate.html"); ?>

<!-- End of content  -->
</div>

<?php include("../lib/html/footer.html"); ?>

</body>
</html>
