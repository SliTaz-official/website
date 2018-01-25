<!DOCTYPE html>
<html lang="de">
<head>
	<meta charset="UTF-8"/>
	<title>SliTaz-Software</title>
	<meta name="description" content="SliTaz GNU/Linux LiveCD free download"/>
	<meta name="keywords" lang="en" content="slitaz download, get slitaz"/>
	<meta name="author" content="F Steiner (Sevala), HGT"/>
	<?php include("../../lib/html/meta-link.html"); ?>
</head>
<body>

<?php
include("../../config.php");
include("../../lib/html/header.de.html");
include("../../lib/html/nav.de.html");
include("../../lib/lang.php");
?>

<!-- Content -->
<div id="content">

<h2>SliTaz transferieren</h2>

<p>
	Holen Sie sich die neueste stabile Version für Ihre Produktionsumgebung 
	oder einen zuverlässigen Betrieb auf Ihrem persönlichen Rechner. Verwenden Sie die
	Version in Entwicklung zum Testen und helfen Sie uns damit bei der Verbesserung der Distribution.
</p>

<div class="box-warning">Vor der Verwendung von SliTaz - bitte lesen Sie diesen Post: <a href="http://forum.slitaz.org/topic/-important-info-about-meltdown-and-spectre-">Important info about Meltdown and Spectre</a></div>

<ul>
	<!-- li><a href="#stable">Direktstart-ISO-Abbild Stabile Version</a> -
		Urladefähiges ISO-Abbild mit der aktuellen stabilen Version.</li -->
	<li><a href="#rolling">Direktstart-ISO-Abbild der Version in Entwicklung</a> -
		Urladefähiges ISO-Abbild mit der aktuellen Version in Entwicklung.</li>
	<li><a href="#floppy">Diskette</a> - Urladefähiges Diskettenabbild zum Starten 
		eines Direktstart-ISO-Abbildes auf optischen oder USB-Datenträgern</li>
	<li><a href="flavors.php">Varianten der ISO-Abbilder</a> -
		SliTaz-Varianten einschließlich Loram.</li>
	<li><a href="http://arm.slitaz.org/rpi/">SliTaz für Raspberry Pi</a>
	- Spezielle Distribution aus dem SliTaz-ARM-Projekt</li>

</ul>

<div class="box-up">
	<p>
		Unterstützen Sie das Projekt mit einer kleinen Spende oder werden Sie ein 
		offizieller <a href="../sponsor/">Förderer</a>.
	</p>
	<?php include("../../lib/html/donate.html"); ?>
</div>

<h3>Allgemeine Informationen</h3>

<p>
Hier finden Sie die Direktstart-ISO-Abbilder der SliTaz-GNU/Linux-Versionen, einzelne Pakete und den zugehörigen Quellcode zum kostenlosen Dateitransfer.
Über den Umgang mit den Direktstart-ISO-Abbildern und SliTaz im Allgemeinen erfahren Sie mehr in den
<a href="http://doc.slitaz.org/de:handbook:start">SliTaz-Handbüchern</a>. Hilfe erhalten
Sie auch im <a href="http://forum.slitaz.org/forum/de">deutschen Forum</a> von SliTaz.
</p>

<h3>Depots</h3>

<p>
SliTaz wird momentan in Frankreich von <a href="http://www.ads-lu.com/">ADS</a> und
<a href="http://www.tuxfamily.org/">TuxFamily</a> bereitgestellt, in der Schweiz von
<a href="http://mirror.switch.ch/">SWITCHmirror</a>, <!-- in China von LupaWorld, -->
in den USA von <a href="http://distro.ibiblio.org/pub/linux/distributions/">Ibiblio</a>
und in Brasilien von <a href="http://www.c3sl.ufpr.br/en/index.html">UFPR</a>.
Herzlichen Dank.
</p>

<ul>
	<li>Schweiz - Depot bereitgestellt von SWITCHmirror (10 Gbit/s)
	<a href="http://mirror.switch.ch/ftp/mirror/slitaz/">HTTP</a> oder
	<a href="ftp://mirror.switch.ch/mirror/slitaz/">FTP</a></li>

	<li>Frankreich - Depot bereitgestellt von TuxFamily
	<a href="http://download.tuxfamily.org/slitaz/">HTTP</a> oder
	<a href="ftp://download.tuxfamily.org/slitaz/">FTP</a></li>

	<!-- li>China - Depot bereitgestellt von LupaWorld
	<a href="http://mirror.lupaworld.com/slitaz/">HTTP</a></li -->

	<li>USA - Depot bereitgestellt von Ibiblio via
	<a href="http://distro.ibiblio.org/pub/linux/distributions/slitaz/">HTTP</a> oder
	<a href="ftp://distro.ibiblio.org/pub/linux/distributions/slitaz/">FTP</a></li>

	<li>Brasilien - Depot bereitgestellt von UFPR via
	<a href="http://slitaz.c3sl.ufpr.br/">HTTP</a> oder
	<a href="ftp://slitaz.c3sl.ufpr.br/slitaz/">FTP</a></li>
</ul>

<h3 id="sources">Quellcode</h3>

<p>
Die Pakete <code>tazpkg</code> (Paketverwaltung), <code>tazlito</code> („SliTaz Live Tool“), <code>tazwok</code> (Paketerzeuger), <code>tazusb</code> (Erstellung von Direktstart-ISO-Abbildern für USB-Datenträger) und die Archive der SliTaz-Werkzeuge können aus dem Depot von <a href="http://www.tuxfamily.org/">TuxFamily</a> transferiert werden.
All diese Anwendungen sind schon in SliTaz vorhanden. Der Quellcode ist in Englisch kommentiert.
Quellcode kann aus dem Depot transferiert werden mit:
<a href="http://mirror.slitaz.org/sources/">HTTP</a> oder
<a href="ftp://mirror.slitaz.org/sources/">FTP</a>
</p>

<!--
<h2 id="stable">Direktstart-ISO-Abbild - Stabile Version</h2>

<p>
	Die stabile Version von SliTaz ist ein ausgereiftes Betriebssystem, das ausgiebig von einer aktiven
	Nutzergemeinschaft getestet wurde. Es enthält eine Vielzahl nützlicher
	Anwendungen, die sorgfältig in eine benutzerfreundliche Oberfläche integriert wurden, woraus ein
	schlüssiges und robustes System resultiert.
	< ?php echo "Die aktuelle stabile Freigabe $stable_ver wurde am $stable_rel freigegeben."; ? >
</p>

<div class="box-dl"><p>
	< ?php echo "SliTaz GNU/Linux $stable_ver ($stable_size) - 
	<a href='$stable_iso'>slitaz-$stable_ver.iso</a>
	[ <a href='$mirror/$stable_ver/slitaz-$stable_ver.md5'>md5</a> ]"; ? >
</p></div>

<p>
	Ein urladefähiges ISO-Abbild mit allen verfügbaren Paketen der stabilen Version
	wird täglich neu erstellt. Es enthält auch eine Kopie des Internetauftritts und kann
	auch ohne Internetverbindung von der Installationsprozedur <code>install.sh</code> verwendet werden.
</p>

<div class="box-dl"><p>
	< ?php echo "Sammlung aller Pakete der SliTaz-GNU/Linux-Version $stable_ver ($stable_pkgs)
	- <a href='$pkgs_mirror/$stable_ver/packages-$stable_ver.iso'>packages-$stable_ver.iso</a>
	[ <a href='$pkgs_mirror/$stable_ver/packages-$stable_ver.md5'>md5</a> ]"; ? >
</p></div>

<p>
	Windows- und DOS-Nutzer können SliTaz ohne Umpartitionierung installieren.
	Das folgende ZIP-Archiv muss in dem Laufwerk <code>C:\</code> entpackt werden. Die Anleitung zum Laden des Systems
	findet sich in der Datei <code>C:\slitaz\boot\install.txt</code>
</p>

<div class="box-dl"><p>
	< ?php echo "SliTaz GNU/Linux $stable_ver Archive (51 MB) - 
	<a href='http://mirror.slitaz.org/iso/$stable_ver/slitaz-$stable_ver.zip'>
	slitaz-$stable_ver.zip</a>"; ? >
</p></div>
-->

<h2 id="rolling">Direktstart-ISO-Abbild - Entwicklungsversion</h2>

<p>
Diese Version wird ständig modifiziert und weiterentwickelt („rolling“). Dennoch
ist sie vollständig benutzbar und ermöglicht das Testen der neuesten Verbesserungen und Pakete.
Ihre Anforderungen von neuen Funktionen oder Berichte von Fehlern helfen uns, die nächste stabile Version zu verbessern. Das Direktstart-ISO-Abbild der Entwicklungsversion wird wöchentlich neu erstellt.
</p>

<div class="box-dl"><p>
	<?php echo "SliTaz GNU/Linux Entwicklungsversion (43 MB) - 
	<a href='$mirror/rolling/slitaz-rolling.iso'>slitaz-rolling.iso</a>
	[ <a href='$mirror/rolling/slitaz-rolling.md5'>md5</a> ]"; ?>
</p></div>

<p>
	Varianten der Entwicklungsversion befinden sich in <a href="http://mirror.slitaz.org/iso/rolling/"
	target="_blank" rel="noopener noreferrer">diesem Depot</a>.
</p>

<h2 id="floppy">urladefähige Diskette</h2>

<p>
	Mit dieser Diskette kann SliTaz auf alten Rechnern mit oder ohne optisches Laufwerk geladen werden,
	wobei SliTaz sich auf einem USB-Datenträger, einem optischen Datenträger oder einer Platte befinden
	kann. Auch das Laden von SliTaz über LAN (mit PXE) oder das
	<a href="http://boot.slitaz.org/">Internet mit gPXE</a> ist damit möglich.
</p>

<div class="box-dl"><p>
	Diskette (1,44 MB) -
	<a href="http://mirror.slitaz.org/boot/floppy-grub4dos">Abbild</a>
	[ <a href="http://mirror.slitaz.org/boot/floppy-grub4dos.md5">md5</a> ]
</p></div>

<p>
	Dieses Diskettenabbild können Sie in SliTaz mit <code>bootfloppybox</code>, mit
	<a href="http://en.wikipedia.org/wiki/RaWrite">Windows rawrite</a>
	oder einfach mit <code>dd (dd if=floppy-grub4dos of=/dev/fd0)</code> auf Diskette schreiben.
</p>

<p>
	Es gibt auch einen <a href="http://mirror.slitaz.org/floppies/">Satz von Diskettenabbildern</a>
	für diejenigen, die weder optische Laufwerke noch USB- oder Ethernet-Anschlüsse an ihrem Rechner haben.
</p>

<!-- End of content -->
</section>

<?php include("../../lib/html/footer.html"); ?>

</body>
</html>
