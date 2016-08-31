<!DOCTYPE html>
<html lang="it">
<head>
	<meta charset="utf-8"/>
	<title>SliTaz - Scarica</title>
	<meta name="description" content="SliTaz GNU/Linux LiveCD free download"/>
	<meta name="keywords" lang="en" content="source, iso, livecd, get, free"/>
	<meta name="author" content="Alessandro Frisenda"/>
	<?php include("../../lib/html/meta-link.html"); ?>
</head>
<body>

<?php
include("../../config.php");
include("../../lib/html/header.html");
?>

<!-- Block -->
<div id="block">
	<?php include("../../lib/html/nav.it.html"); ?>
	<!-- Information/image -->
	<div id="block_info">
		<h4>Scarica</h4>
		<p>
			Scarica l'ultima versione stabile per fini produttini o per avere
			un solido sistema. Usa la versione Cooking (beta della prossima
			versione) per testare e aiutarci a migliorare la distribuzione.
		</p>
		<div class="button">
			Download veloce:
			<?php echo "<a href='$stable_iso'>SliTaz $stable_ver</a>
				<a href='$mirror/rolling/slitaz-rolling.iso'>SliTaz Rolling</a>"; ?>
		</div>
	</div>
</div>

<?php include("../../lib/lang.php"); ?>

<!-- Content -->
<div id="content">

<h2>Ottieni SliTaz</h2>

<ul>
	<li><a href="#stable">LiveCD Versione Stabile</a> - 
		ISO avviabile della versione stabile corrente.</li>
	<li><a href="#rolling">LiveCD Versione Rolling</a> - 
		ISO avviabile della versione Rolling corrente.</li>
	<li><a href="#floppy">Disco Floppy</a> -
		Disco d'avvio per lanciare il il LiveCD, una chiavetta USB ecc.</li>
	<li><a href="/en/get/flavors.php">LiveCD di gusto</a> (en) - Sapori.</li>
</ul>

<div class="box">
	<p>
		Aiuta il progetto tramite una piccola donazione o diventare uno sponsor
		<a href="/en/sponsor/">sponsor</a> ufficiale.
	</p>
	<?php include("../../lib/html/donate.html"); ?>
</div>

<h3>Informazioni Generali</h3>

<p>
	Questa parte del sito vi permette di scaricare una copia gratuita del LiveCD
	di SliTaz GNU/Linux o di ottenere strumenti o codice sorgente dello stesso.
	Per iniziare ad utilizzare il LiveCD contenente l'immagine ISO si può fare
	riferimento alla <a href="../doc/">documentazione</a> online in inglese.
	Puoi anche trovare aiuto e supporto sul
	<a href="http://forum.slitaz.org/">Forum di Supporto Italiano</a>.
</p>

<h3>Fonti</h3>

<p>
	SliTaz è attualmente offerto da fonti Francesi come
	<a href="http://www.ads-lu.com/" target="_blank" rel="noopener noreferrer">ADS</a>, and
	<a href="http://www.tuxfamily.org/">TuxFamily</a>. Da fonti Svizzere
	come <a href="http://mirror.switch.ch/">SWITCHmirror</a>,
	Cinesi come LupaWorld, Americane come
	<a href="http://distro.ibiblio.org/pub/linux/distributions/">Ibiblio</a>
	e Brasiliane come <a href="http://www.c3sl.ufpr.br/en/">UFPR</a>.
	Un grazie enorme.
</p>

<ul>
	<li>Svizzera - Offerto da SWITCHmirror (10 Gbit/s)
	<a href="http://mirror.switch.ch/ftp/mirror/slitaz/">HTTP</a> or
	<a href="ftp://mirror.switch.ch/mirror/slitaz/">FTP</a></li>

	<li>Francia - Offerto da TuxFamily via
	<a href="http://download.tuxfamily.org/slitaz/">HTTP</a> or
	<a href="ftp://download.tuxfamily.org/slitaz/">FTP</a></li>

	<li>Cina - Offerto da LupaWorld
	<a href="http://mirror.lupaworld.com/slitaz/">HTTP</a></li>

	<li>America - Offerto da Ibiblio via
	<a href="http://distro.ibiblio.org/pub/linux/distributions/slitaz/">HTTP</a> or
	<a href="ftp://distro.ibiblio.org/pub/linux/distributions/slitaz/">FTP</a></li>

	<li>Brasile - Offerto da UFPR via
	<a href="http://slitaz.c3sl.ufpr.br/">HTTP</a> or
	<a href="ftp://slitaz.c3sl.ufpr.br/slitaz/">FTP</a></li>
</ul>

<h3 id="sources">Sorgenti</h3>

<p>
	Tazpkg (Gestore pacchetti), Tazlito (SliTaz Strumenti Live), Tazwok
	(Costruttore Sorgenti), Tazusb (Strumento LiveUSB) e altri strumenti
	SliTaz possono tutti essere scaricate dalla fonte di
	<a href="http://www.tuxfamily.org/">TuxFamily</a>. Nota che tutti
	gli strumenti sono già installati su SliTaz e il codice sorgente è
	commentato in Inglese. Scarica i sorgenti da
	<a href="http://mirror.slitaz.org/sources/">HTTP</a> o
	<a href="http://mirror.slitaz.org/sources/">FTP</a>
</p>

<h2 id="stable">LiveCD - Versione Stabile</h2>

<p>
	La versione stabile di SliTaz fornisce un sistema operativo maturo, ampiamente
	estato da una comunità attiva. Il LiveCD offre una larga selezione di pacchetti
	multi-uso accuratamente integrati nella distribuzione, io risultato è un
	sistema coerente e robusto.
	<?php echo "La corrente versione stabile $stable_ver  stata rilasciat il: $stable_rel."; ?>
</p>

<div class="box-dl"><p>
	<?php echo "SliTaz GNU/Linux $stable_ver ($stable_size) - 
	<a href='$stable_iso'>slitaz-$stable_ver.iso</a>
	[ <a href='$mirror/$stable_ver/slitaz-$stable_ver.md5'>md5</a> ]"; ?>
</p></div>

<p>
	Un'immagine CDRoom avviabile di tutti i pacchetti per la versione 3.0 viene
	generata ogni giorno. Essa contiene anche una copia del sito web e può essere
	utilizzata senza una connessione ad internet tramite lo script install.sh.
</p>

<div class="box-dl"><p>
	<?php echo "Collezione dei pacchetti SliTaz GNU/Linux $stable_ver ($stable_pkgs)
	- <a href='$pkgs_mirror/$stable_ver/packages-$stable_ver.iso'>packages-$stable_ver.iso</a>
	[ <a href='$pkgs_mirror/$stable_ver/packages-$stable_ver.md5'>md5</a> ]"; ?>
</p></div>

<h2 id="rolling">LiveCD - Versione Rolling</h2>

<p>
SliTaz Rolling LiveCD è una versione in evoluzione costante, completamente
usabile, essa vi permette di testare gli ultimi miglioramenti e pacchetti,
chiedere per nuove funzionalità o riportare bugs per aiutare a prepararci
una versione stabile.
	SliTaz Rolling ISO released weekly.
</p>

<div class="box-dl"><p>
	<?php echo "SliTaz GNU/Linux Rolling (43 MB) - 
	<a href='$mirror/rolling/slitaz-rolling.iso'>slitaz-rolling.iso</a>
	[ <a href='$mirror/rolling/slitaz-rolling.md5'>md5</a> ]"; ?>
</p></div>

<p>
	Rolling flavors can be found <a href="http://mirror.slitaz.org/iso/rolling/"
	target="_blank" rel="noopener noreferrer">on mirror</a>.
</p>

<!-- p>
	Un'immagine DVD avviabile di tutti i pacchetti per la versione Cooking viene
	generata ogni giorno. Essa contiene anche una copia del sito web e può essere
	utilizzata senza una connessione ad internet tramite lo script install.sh.
	Nota: Quest'immagine può anche essere
	<a href="http://syslinux.zytor.com/wiki/index.php/Doc/isolinux#HYBRID_CD-ROM.2FHARD_DISK_MODE">installata su una chiavetta USB</a>,
	ma sovrascriverà tutti gli altri dati.
</p>

<div class="box-dl"><p>
	<?php echo "Collezione dei pacchetti SliTaz GNU/Linux Cooking ($cooking_pkgs)
	- <a href='$pkgs_mirror/cooking/packages-cooking.iso'>packages-cooking.iso</a>
	[ <a href='$pkgs_mirror/cooking/packages-cooking.md5'>md5</a> ]"; ?>
</p></div -->

<h2 id="floppy">Disco di avvio Floppy</h2>

<p>
	Questo dischetto floppy può avviare SliTaz sui vecchi PC con o senza un CD-ROM.
	Esso può avviare SliTaz da una chiavetta USB, un CD/DVD SliTaz, un disco
	rigido, il LAN da PXE e anche
	<a href="http://boot.slitaz.org/">Internet con gPXE</a>.
</p>

<div class="box-dl"><p>
	Disco Floppy (1,44 MB) -
	<a href="http://mirror.slitaz.org/boot/floppy-grub4dos">immagine</a>
	[ <a href="http://mirror.slitaz.org/boot/floppy-grub4dos.md5">md5</a> ]
</p></div>

<p>
	Puoi scrivere quest'immagine floppy con SliTaz bootfloppybox,
	<a href="http://en.wikipedia.org/wiki/RaWrite">Windows rawrite</a>
	o semplicemente dd (dd if=floppy-grub4dos of=/dev/fd0).
</p>

<p>
	Un <a href="http://mirror.slitaz.org/floppies/">set di immagini floppy</a>
	è inoltre disponibile per chi non può utilizzare CD-ROM, chiavetta USB o
	cavo Ethernet.
</p>

<!-- End of content -->
</div>

<?php include("../../lib/html/footer.html"); ?>

</body>
</html>
