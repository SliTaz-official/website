<!DOCTYPE html>
<html lang="fr">
<head>
	<meta charset="utf-8" />
	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<title>SliTaz - Téléchargements</title>
	<meta name="description" content="Télécharger librement SliTaz GNU/Linux LiveCD/LiveUSB" />
	<meta name="keywords" lang="fr" content="Système, libre, gnu, linux, logiciels opensource, livecd, autonome" />
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

<h2>Téléchargements</h2>

<p>
	Téléchargez la dernière version stable pour la production ou
	un solide environnement de bureau. Utilisez notre version
	Cooking pour tester les nouveautés et nous aider à améliorer
	la distribution.
</p>

<ul>
	<li><a href="#stable">LiveCD version Stable</a> - Image ISO du
		LiveCD de la version stable de SliTaz.</li>
	<li><a href="#cooking">LiveCD version Cooking</a> - Image ISO du
		LiveCD de SliTaz en cuisson.</li>
	<li><a href="flavors.php">LiveCD à saveur</a> - Saveurs, dont les 'loram'.</li>
	<li><a href="#floppy">Disquette de démarrage</a> - Image de disquette pour
		lancer le LiveCD, une clé USB...</li>
	<li><a href="http://arm.slitaz.org/rpi/">SliTaz Raspberry Pi</a></li>
</ul>

<div class="box">
	<p>
		Vous pouvez aider le projet via un petit don ou en devenant
		(en) <a href="/en/sponsor/">sponsor</a> officiel.
	</p>
	<?php include("../../lib/html/donate.html"); ?>
</div>

<h3>Informations générales</h3>

<p>
	Cette partie du site vous permet de télécharger une image ISO gravable, du
	système LiveCD installable de SliTaz. Pour utiliser le système, vous pouvez
	vous référer au livre de main ou <a href="http://doc.slitaz.org/fr:handbook:start">Handbook</a>,
	toujours accessible via la partie <a href="../doc/">documentation</a>
	du site. Vous trouverez un support d'aide gratuit, simple et efficace, via
	<a href="../mailing-list.php">la liste de discussion</a> du projet.
</p>

<h3>Miroirs et torrents</h3>

<p>
	Un grand merci à l'équipe de <a href="http://www.tuxfamily.org/">TuxFamily</a>,
	à <a href="http://mirror.switch.ch/">SWITCHmirror</a> et à
	<a href="http://www.ads-lu.com/" target="_blank">ADS</a>
	qui hébergent les miroirs principaux de SliTaz, en Suisse et en France, et
	en Chine à <a href="http://mirror.lupaworld.com/">LupaWorld</a> :
	les services sont de très haute qualité et sans vous, rien ne serait
	possible.
</p>

<ul>
	<li>Suisse - Miroir hébergé par SWITCHmirror (10 Gbit/s)
	<a href="http://mirror.switch.ch/ftp/mirror/slitaz/">HTTP</a> ou
	<a href="ftp://mirror.switch.ch/mirror/slitaz/">FTP</a></li>

	<li>France - Miroir hébergé par Mésobius (100 Mps)
	<a href="http://slitazmirror.linuxembarque.com">HTTP</a></li>

	<li>France - Miroir hébergé par TuxFamily via
	<a href="http://download.tuxfamily.org/slitaz/">HTTP</a> ou
	<a href="ftp://download.tuxfamily.org/slitaz/">FTP</a></li>

	<li>Chine - Miroir hébergé par LupaWorld
	<a href="http://mirror.lupaworld.com/slitaz/">HTTP</a></li>
</ul>

<h3 id="sources">Sources</h3>

<p>
	les archives sources de Tazpkg (Package manager), Tazlito (SliTaz Live Tool),
	Tazwok (Source builder), Tazusb (LiveUSB Tool), et des outils SliTaz, peuvent
	se télécharger depuis le répertoire
	<a href="http://mirror.slitaz.org/sources/">sources</a> des miroirs de SliTaz.
	Vous trouverez plus d'informations à propos des projets, sur
	<a href="http://labs.slitaz.org/projects">les SliTaz Labs</a> (laboratoires).
</p>

<h2 id="stable">LiveCD version Stable</h2>

<p>
	La version stable de SliTaz fournit un système d'exploitation mature,
	largement testé par une communauté active, elle propose une sélection
	de paquets finement intégrés à la distribution, résultant dans un
	système cohérent et robuste. La version Stable actuelle est la version
	<?php echo "$stable_ver publiée le $stable_rel."; ?>
</p>

<div class="box-dl"><p>
	<?php echo "SliTaz GNU/Linux $stable_ver ($stable_size) -
	<a href='$stable_iso'>slitaz-$stable_ver.iso</a>
	[ <a href='$mirror/$stable_ver/slitaz-$stable_ver.md5'>md5</a> ]"; ?>
</p></div>

<p>
	Une image DVD bootable de tous les paquets disponibles pour la version
	3.0 est générée chaque jour. Elle contient aussi une copie du site Web
	et permet grâce au script install.sh, une utilisation sans connexion
	Internet.
</p>

<div class="box-dl"><p>
	<?php echo "Ensemble des paquets SliTaz GNU/Linux $stable_ver ($stable_pkgs)
	- <a href='$pkgs_mirror/$stable_ver/packages-$stable_ver.iso'>packages-$stable_ver.iso</a>
	[ <a href='$pkgs_mirror/$stable_ver/packages-$stable_ver.md5'>md5</a> ]"; ?>
</p></div>

<p>
	Les utilisateurs Windows ou DOS peuvent installer SliTaz sans toucher
	aux partitions. Il suffit d'extraire l'archive ZIP suivante dans C:\
	et de suivre les indications de C:\slitaz\boot\install.txt
</p>

<div class="box-dl"><p>
	<?php echo "SliTaz GNU/Linux $stable_ver archive (51 Mb) - 
	<a href='http://mirror.slitaz.org/iso/$stable_ver/slitaz-$stable_ver.zip'>
	slitaz-$stable_ver.zip</a>"; ?>
</p></div>

<h2 id="cooking">LiveCD version Cooking</h2>

<p>
	La version Cooking "en cuisson" est une version en constante évolution,
	utilisable, elle permet de tester les dernières nouveautés, de nous faire
	des retours d'expériences, des demandes de fonctionnalités et des signalements
	de bugs.
</p>

<div class="box-dl"><p>
	<?php echo "SliTaz GNU/Linux Cooking $cooking_ver ($cooking_size) -
	<a href='$cooking_iso'>slitaz-$cooking.iso</a>
	[ <a href='$cooking_md5'>md5</a> ]"; ?>
</p></div>

<p>
	Une image DVD bootable de tous les paquets disponibles pour la version
	Cooking est générée chaque jour. Elle contient aussi une copie du site Web
	et permet grâce au script install.sh, une utilisation sans connexion Internet.<br />
	Cette image peut aussi être
	<a href="http://syslinux.zytor.com/wiki/index.php/Doc/isolinux#HYBRID_CD-ROM.2FHARD_DISK_MODE">
		installée sur une clé USB</a>, mais elle écrasera toutes les données
	de la clé.
</p>

<div class="box-dl"><p>
	<?php echo "Ensemble de paquets SliTaz GNU/Linux Cooking ($cooking_pkgs)
	- <a href='$pkgs_mirror/cooking/packages-cooking.iso'>packages-cooking.iso</a>
	[ <a href='$pkgs_mirror/cooking/packages-cooking.md5'>md5</a> ]"; ?>
</p></div>

<h2 id="floppy">Disquette de démarrage</h2>

<p>
	Cette disquette permet de lancer Slitaz sur des PC anciens ou dépourvus de
	lecteur de CD-ROM. Il est possible de démarrer Slitaz depuis un CD-ROM/DVD,
	une clé USB, un disque dur, le réseau LAN par PXE et même le réseau
	<a href="http://boot.slitaz.org/">Internet avec gPXE</a>.
</p>

<div class="box-dl"><p>
	Disquette de démarrage (1,44 Mb) -
	<a href="http://mirror.slitaz.org/boot/floppy-grub4dos">image</a>
	[ <a href="http://mirror.slitaz.org/boot/floppy-grub4dos.md5">md5</a> ]
</p></div>

<p>
	Vous pouvez écrire cette image avec l'outil Slitaz bootfloppybox,
	<a href="http://en.wikipedia.org/wiki/RaWrite">Windows rawrite</a>
	ou simplement dd (dd if=floppy-grub4dos of=/dev/fd0).
</p>

<p>
	Une <a href="http://mirror.slitaz.org/floppies/">
	suite d'images de disquette</a> est aussi disponible pour les
	personnes qui ne peuvent utiliser CD-ROM, clé USB ou carte Ethernet.
	Seul le lecteur de disquette est nécessaire.
</p>

<!-- End of content -->
</div>

<?php include("../../lib/html/footer.html"); ?>

</body>
</html>
