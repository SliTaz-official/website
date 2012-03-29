<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="da" lang="da">
<!-- Danish (da) translation by Bo Vagner Højer - bohoejer@slitaz.org
   Member of Labitat Hackerspace, Copenhagen - www.labitat.dk
   visit our hackerspace every tuesday evening for free - always hot coffee -->
<head>
    <title>SliTaz - Hent den nu</title>
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <meta name="description" content="Hent SliTaz GNU/Linux LiveCD gratis" />
    <meta name="keywords" lang="da" content="kildekode, iso, cdrom, livecd, hent, gratis, fri" />
    <meta name="author" content="Bo Vagner Højer" />
	<?php include("../../lib/html/meta-link.html"); ?>
</head>
<body>

<?php 
include("../../config.php");
include("../../lib/html/header.da.html");
?>

<!-- Block -->
<div id="block">
	<?php include("../../lib/html/nav.da.html"); ?>
	<!-- Information/image -->
	<div id="block_info">
		<h4>Hent SliTaz</h4>
		<p>
			Hent den seneste stabile version til dagligt brug. 
			Brug udviklingsversionen til at teste og hjælpe os med at forbedre distibutionen.
		</p>
		<div class="button">
			Hent:
			<?php echo "<a href='$stable_iso'>SliTaz $stable_ver</a>
				<a href='$cooking_iso'>SliTaz $cooking</a>"; ?>
		</div>
	</div>
</div>

<!-- Languages -->
<div id="lang">
	<a href="../../i18n.php"><img src="../../images/locale.png" alt="Locale:" /></a>
	<b>Dansk</b>
	<a href="../../de/get/">Deutsch</a>
	<a href="../../en/get/">English</a>
	<a href="../../es/get/">Español</a>
	<a href="../../fr/get/">Français</a>
	Indonesian
	<a href="../../it/get/">Italiano</a>
	<a href="../../pt/get/">Português</a>
	<a href="../../ru/get/">Русский</a>
	<a href="../../cn/get/">中文</a>
</div>

<!-- Content -->
<div id="content">

<h2>Hent SliTaz</h2>
	
<ul>	
	<li><a href="#stable">LiveCD Stabil version</a> - 
	Startbar cdrom med den seneste stabile version.</li>
	<li><a href="#cooking">LiveCD udviklingsversion</a> - 
	Startbar cdrom med den seneste udviklingsversion.</li>
	<li><a href="#floppy">diskette</a> - Opstartsdiskette til at
	affyre LiveCDen, en usb-pind eller lignende</li>
	<li><a href="flavors.php">LiveCD to taste</a> - Varianter og minimal ram.</li>
</ul>

<h3>General information</h3>
<p>
	Denne del af hjemmesiden giver dig mulighed for at hente en gratis kopi
	af SliTaz GNU/Linux LiveCDen eller hente værktøjer og kilde kode.
	For at komme igang med at benytte LiveCD afbildningen kan du læse den engelske
	<a href="../doc/">vejledning</a>. Du kan også finde hjælp og støtte på
	SliTaz's <a href="http://forum.slitaz.org/forum/scandinavian">skandinaviske forum</a>.
</p>

<h3>Filspejle</h3>
<p>
	SliTaz er spejlet i Frankrig af <a href="http://www.ads-lu.com/">ADS</a>
	og <a href="http://www.tuxfamily.org/">TuxFamily</a>. I Schwietz af
	<a href="http://mirror.switch.ch/">SWITCHmirror</a>,
	i Kina af LupaWorld, i USA af
	<a href="http://distro.ibiblio.org/pub/linux/distributions/">Ibiblio</a>
	og i Brasilien af <a href="http://www.c3sl.ufpr.br/en/">UFPR</a>. Kæmpe 
	stor tak til værterne.
</p>

<ul>
	<li>Schweitz - filspejl beværtet af SWITCHmirror (10 Gbit/s) via
	<a href="http://mirror.switch.ch/ftp/mirror/slitaz/">HTTP</a> eller
	<a href="ftp://mirror.switch.ch/mirror/slitaz/">FTP</a></li>

	<li>Frankrig - filspejl beværtet af TuxFamily via
	<a href="http://download.tuxfamily.org/slitaz/">HTTP</a> eller
	<a href="ftp://download.tuxfamily.org/slitaz/">FTP</a></li>

	<li>Kina - filspejl beværtet af LupaWorld via
	<a href="http://mirror.lupaworld.com/slitaz/">HTTP</a></li>

	<li>USA - filspejl beværtet af by Ibiblio via
	<a href="http://distro.ibiblio.org/pub/linux/distributions/slitaz/">HTTP</a> eller
	<a href="ftp://distro.ibiblio.org/pub/linux/distributions/slitaz/">FTP</a></li>

	<li>Brasilien - filspejl beværtet af UFPR via
	<a href="http://slitaz.c3sl.ufpr.br/">HTTP</a> eller
	<a href="ftp://slitaz.c3sl.ufpr.br/slitaz/">FTP</a></li>
</ul>

<a name="sources"></a>
<h3>Kildekode</h3>
<p>
	Tazpkg (pakkehåndtering), Tazlito (SliTaz Live værktøj), Tazwok (kildekodebygger),
	Tazusb (LiveUSB værktøj) og SliTaz værktøjer kan alle hentes fra
	<a href="http://www.tuxfamily.org/">TuxFamily</a> filspejlet. Bemærk at 
	alle værktøjerne er som standard installeret på SliTaz og 
	kildekode er kommenteret på engelsk. 
	Hent kildekode med
	<a href="http://mirror.slitaz.org/sources/">HTTP</a> eller
	<a href="http://mirror.slitaz.org/sources/">FTP</a>
</p>

<a name="stable"></a>
<h2>LiveCD - Stabil version</h2>
<p>
	SliTaz stabile version giveret modent operativsystem, testet bedt af
	en aktiv brugerskare. Kerne LiveCDen tilbyder dig et stort udvalg 
	universelt anvendelige programpakker omhyggeligt integreret til denne
	distribution, således at du får et sammenhængende og robust system.
	<?php echo "Nuværende stabile version $stable_ver blev frigivet den: $stable_rel."; ?>
</p>

<p class="box">
	<img src="/images/download.png" height="48px" width="48px" alt="[ DL ]" />
	<?php echo "SliTaz GNU/Linux $stable_ver ($stable_size) - 
	<a href='$stable_iso'>slitaz-$stable_ver.iso</a>
	[ <a href='$mirror/$stable_ver/slitaz-$stable_ver.md5'>md5</a> ]"; ?>
</p>

<p>
	En startbar cdrom med alle tilgængelige programpakker for version stabil
	genereres hver dag. Den indeholder også en kopi af denne hjemmeside og
	kan benyttes uden en internetforbindelse via install.sh scriptet.
</p>

<p class="box">
	<img src="/images/download.png" height="48px" width="48px" alt="[ DL ]" />
	<?php echo "Samling af SliTaz GNU/Linux $stable_ver programpakker ($stable_pkgs)
	- <a href='$pkgs_mirror/$stable_ver/packages-$stable_ver.iso'>packages-$stable_ver.iso</a>
	[ <a href='$pkgs_mirror/$stable_ver/packages-$stable_ver.md5'>md5</a> ]"; ?>
</p>

<a name="cooking"></a>
<h2>LiveCD - udviklingsversion</h2>
<p>
	SliTaz "Cooking" LiveCD  er en fuldt brugbar, men konstant udviklet 
	version. Den lader dig teste de seneste forbedringer og programpakker,
	efterspørge nye funktioner eller reportere fejl for at hjælpe os med 
	at forberede den næste stabile version.
</p>

<p class="box">
	<img src="/images/download.png" height="48px" width="48px" alt="[ DL ]" />
	<?php echo "SliTaz GNU/Linux Cooking $cooking_ver ($cooking_size) - 
	<a href='$cooking_iso'>slitaz-$cooking.iso</a>
	[ <a href='$mirror/cooking/slitaz-$cooking.md5'>md5</a> ]"; ?>
</p>

<p>
	En startbar dvd med alle tilgængelige programpakker for udviklingsversionen
	genereres hver dag. Den indeholder også en kopi af denne hjemmeside og
	kan benyttes uden en internetforbindelse via install.sh scriptet.
	Bemærk: Denne dvd kan også 
	<a href="http://syslinux.zytor.com/wiki/index.php/Doc/isolinux#HYBRID_CD-ROM.2FHARD_DISK_MODE">
	installeres på en usb-pind</a>, men vil overskrive alle data.
</p>

<p class="box">
	<img src="/images/download.png" height="48px" width="48px" alt="[ DL ]" />
	<?php echo "Samling af SliTaz GNU/Linux Cooking programpakker ($cooking_pkgs)
	- <a href='$pkgs_mirror/cooking/packages-cooking.iso'>packages-cooking.iso</a>
	[ <a href='$pkgs_mirror/cooking/packages-cooking.md5'>md5</a> ]"; ?>
</p>

<a name="floppy"></a>
<h2>Floppy startdisk</h2> 
<p>
	Denne floppydisk kan starte SliTaz på en gammel pc med eller uden 
	cdromdrev. Den kan starte SliTaz fra en usb-pind, en SliTaz cd/dvd, 
	en harddisk, netværk gennem PXE og selv 
	<a href="http://boot.slitaz.org/">internettet gennem gPXE</a>.
</p>

<p class="box">
	<img src="/images/download.png" height="48px" width="48px" alt="[ DL ]" />
	Diskette (1,44 MB) -
	<a href="http://mirror.slitaz.org/boot/floppy-grub4dos">billede</a>
	[ <a href="http://mirror.slitaz.org/boot/floppy-grub4dos.md5">md5</a> ]
</p>

<p>
	Du kan kan skrive dette billede til diskette med SliTaz bootfloppybox,
	<a href="http://en.wikipedia.org/wiki/RaWrite">Windows rawrite</a>
	eller ganske enkelt med dd (dd if=floppy-grub4dos of=/dev/fd0).
</p>

<p>
	Et <a href="http://mirror.slitaz.org/floppies/">diskettesæt</a>
	er også tilgængelig for mennesker som ikke kan benytte en cdrom,
	usb-pind eller netkort.
</p>

<!-- End of content -->
</div>

<?php include("../../lib/html/footer.da.html"); ?>

</body>
</html>
