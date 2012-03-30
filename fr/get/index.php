<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="fr" lang="fr">
<head>
	<title>SliTaz - T�l�chargements</title>
	<meta http-equiv="content-type" content="text/html; charset=ISO-8859-1" />
	<meta name="description" content="T�l�charger librement SliTaz GNU/Linux LiveCD/LiveUSB" />
	<meta name="keywords" lang="fr" content="Syst�me, libre, gnu, linux, logiciels opensource, livecd, autonome" />
	<meta name="author" content="Christophe Lincoln"/>
	<?php include("../../lib/html/meta-link.html"); ?>
</head>
<body>

<?php
include("../../config.php");
include("../../lib/html/header.html");
?>

<!-- Block -->
<div id="block">
	<?php include("../../lib/html/nav.fr.html"); ?>
	<!-- Information/image -->
	<div id="block_info">
		<h4>Obtenir SliTaz</h4>
		<p>
			T�l�chargez la derni�re version stable pour la production ou
			un solide environnement de bureau. Utilisez notre version
			Cooking pour tester les nouveaut�s et nous aider � am�liorer
			la distribution.
		</p>
		<div class="button">
			Chargement rapide:
			<?php echo "<a href='$stable_iso'>SliTaz $stable_ver</a>
				<a href='$cooking_iso'>SliTaz $cooking</a>"; ?>
		</div>
	</div>
</div>

<!-- Languages -->
<div id="lang">
	<a href="../i18n.php">
		<img src="../../images/locale.png" alt="locale.png" /></a>
	<a href="../../da/get/">Dansk</a>
	<a href="../../de/get/">Deutsch</a>
	<a href="../../en/get/">English</a>
	<a href="../../es/get/">Espa�ol</a>
	<a href="../../fr/get/">Fran�ais</a>
	<a href="../../it/get/">Italiano</a>
	<a href="../../pt/get/">Portugu�s</a>
	<a href="../../cn/get/">Chinese</a>
</div>

<!-- Content -->
<div id="content">

<h2>T�l�chargements</h2>

<ul>
	<li><a href="#stable">LiveCD version Stable</a> - Image ISO du
    LiveCD de la version stable de SliTaz.</li>
    <li><a href="#cooking">LiveCD version Cooking</a> - Image ISO du
    LiveCD de SliTaz en cuisson.</li>
    <li><a href="flavors.php">LiveCD � saveur</a> - Saveurs, dont les 'loram'.</li>
    <li><a href="#floppy">Disquette de d�marrage</a> - Image de disquette pour
    lancer le LiveCD, une cl� USB...</li>
</ul>

<div class="box">
	<p>
		Vous pouvez aider le projet via un petite donation ou en devenant
		(en) <a href="/en/sponsor/">sponsor</a> officiel.
	</p>
	<?php include("../../lib/html/donate.html"); ?>
</div>

<h3>Informations g�n�rales</h3>
<p>
	Cette partie du site vous permet de t�l�charger une image ISO gravable, du
	syst�me LiveCD installable de SliTaz. Pour utiliser le syst�me, vous pouvez
	vous r�f�rer au livre de main ou <a href="http://doc.slitaz.org/fr:handbook:start">Handbook</a>,
	toujours accessible via la partie <a href="../doc/">documentation</a>
	du site. Vous trouverez un support d'aide gratuit, simple et efficace, via
	<a href="../mailing-list.php">la liste de discussion</a> du projet.
</p>

<h3>Miroirs et torrents</h3>
<p>
	Un grand merci � l'�quipe de <a href="http://www.tuxfamily.org/">TuxFamily</a>,
	� <a href="http://mirror.switch.ch/">SWITCHmirror</a> et � 
	<a href="http://www.ads-lu.com/" target="_blank">ADS</a>
	qui h�bergent les miroirs principaux de SliTaz, en Suisse et en France, et
	en Chine � <a href="http://mirror.lupaworld.com/">LupaWorld</a> :
	les services sont de tr�s haute qualit� et sans vous, rien ne serait
	possible.
</p>

<ul>
	<li>Suisse - Miroir h�berg� par SWITCHmirror (10 Gbit/s)
	<a href="http://mirror.switch.ch/ftp/mirror/slitaz/">HTTP</a> ou
	<a href="ftp://mirror.switch.ch/mirror/slitaz/">FTP</a></li>

	<li>France - Miroir h�berg� par M�sobius (100 Mps)
	<a href="http://slitazmirror.linuxembarque.com">HTTP</a></li>

	<li>France - Miroir h�berg� par TuxFamily via
	<a href="http://download.tuxfamily.org/slitaz/">HTTP</a> ou
	<a href="ftp://download.tuxfamily.org/slitaz/">FTP</a></li>

	<li>Chine - Miroir h�berg� par LupaWorld
	<a href="http://mirror.lupaworld.com/slitaz/">HTTP</a></li>
</ul>

<a name="sources"></a>
<h3>Sources</h3>
<p>
	les archives sources de Tazpkg (Package manager), Tazlito (SliTaz Live Tool),
	Tazwok (Source builder), Tazusb (LiveUSB Tool), et des outils SliTaz, peuvent
	se t�l�charger depuis le r�pertoire
	<a href="http://mirror.slitaz.org/sources/">sources</a> des miroirs de SliTaz.
	Vous trouverez plus d'informations � propos des projets, sur
	<a href="http://labs.slitaz.org/projects">les SliTaz Labs</a> (laboratoires).
</p>

<a name="stable"></a>
<h2>LiveCD version Stable</h2>
<p>
	La version stable de SliTaz fournit un syst�me d'exploitation mature,
	largement test� par une communaut� active, elle propose une s�lection
	de paquets finement int�gr�s � la distribution, r�sultant dans un
	syst�me coh�rent et robuste. La version Stable actuelle est la version
	<?php echo "$stable_ver publi�e le $stable_rel."; ?>
</p>

<p class="box">
	<img src="/images/download.png" height="48px" width="48px" alt="[ DL ]" />
	<?php echo "SliTaz GNU/Linux $stable_ver ($stable_size) - 
	<a href='$stable_iso'>slitaz-$stable_ver.iso</a>
	[ <a href='$mirror/$stable_ver/slitaz-$stable_ver.md5'>md5</a> ]"; ?>
</p>

<p>
	Une image DVD bootable de tous les paquets disponibles pour la version
	3.0 est g�n�r�e chaque jour. Elle contient aussi une copie du site Web
	et permet gr�ce au script install.sh, une utilisation sans connexion
	Internet.
</p>

<p class="box">
	<img src="/images/download.png" height="48px" width="48px" alt="[ DL ]" />
	<?php echo "Ensemble des paquets SliTaz GNU/Linux $stable_ver ($stable_pkgs)
	- <a href='$pkgs_mirror/$stable_ver/packages-$stable_ver.iso'>packages-$stable_ver.iso</a>
	[ <a href='$pkgs_mirror/$stable_ver/packages-$stable_ver.md5'>md5</a> ]"; ?>
</p>

<a name="cooking"></a>
<h2>LiveCD version Cooking</h2>
<p>
	La version Cooking "en cuisson" est une version en constante �volution,
	utilisable, elle permet de tester les derni�res nouveaut�s, de nous faire
	des retours d'exp�riences, des demandes de fonctionnalit�s et des signalements
	de bugs.
</p>

<p class="box">
	<img src="/images/download.png" height="48px" width="48px" alt="[ DL ]" />
	<?php echo "SliTaz GNU/Linux Cooking $cooking_ver ($cooking_size) - 
	<a href='$cooking_iso'>slitaz-$cooking.iso</a>
	[ <a href='$mirror/cooking/slitaz-$cooking.md5'>md5</a> ]"; ?>
</p>

<p>
	Une image DVD bootable de tous les paquets disponibles pour la version
	Cooking est g�n�r�e chaque jour. Elle contient aussi une copie du site Web
	et permet gr�ce au script install.sh, une utilisation sans connexion Internet.<br>
	Cette image peut aussi �tre
	<a href="http://syslinux.zytor.com/wiki/index.php/Doc/isolinux#HYBRID_CD-ROM.2FHARD_DISK_MODE">
		install�e sur une cl� USB</a>, mais elle �crasera toutes les donn�es
	de la cl�.
</p>

<p class="box">
	<img src="/images/download.png" height="48px" width="48px" alt="[ DL ]" />
	<?php echo "Ensemble de paquets SliTaz GNU/Linux Cooking ($cooking_pkgs)
	- <a href='$pkgs_mirror/cooking/packages-cooking.iso'>packages-cooking.iso</a>
	[ <a href='$pkgs_mirror/cooking/packages-cooking.md5'>md5</a> ]"; ?>
</p>

<a name="floppy"></a>
<h2>Disquette de d�marrage</h2>
<p>
	Cette disquette permet de lancer Slitaz sur des PC anciens ou d�pourvus de
	lecteur de CD-ROM. Il est possible de d�marrer Slitaz depuis un CD-ROM/DVD,
	une cl� USB, un disque dur, le r�seau LAN par PXE et m�me le r�seau
	<a href="http://boot.slitaz.org/">Internet avec gPXE</a>.
</p>

<p class="box">
	<img src="/images/download.png" height="48px" width="48px" alt="[ DL ]" />
	Disquette de d�marrage (1,44 Mb) -
	<a href="http://mirror.slitaz.org/boot/floppy-grub4dos">image</a>
	[ <a href="http://mirror.slitaz.org/boot/floppy-grub4dos.md5">md5</a> ]
</p>

<p>
	Vous pouvez �crire cette image avec l'outil Slitaz bootfloppybox,
	<a href="http://en.wikipedia.org/wiki/RaWrite">Windows rawrite</a>
	ou simplement dd (dd if=floppy-grub4dos of=/dev/fd0).
</p>

<p>
	Une <a href="http://mirror.slitaz.org/floppies/">
		suite d'images de disquette</a> est aussi disponible pour les
	personnes qui ne peuvent utiliser CD-ROM, cl� USB ou carte Ethernet.
	Seul le lecteur de disquette est n�cessaire.
</p>

<!-- End of content -->
</div>

<?php include("../../lib/html/footer.html"); ?>

</body>
</html>
