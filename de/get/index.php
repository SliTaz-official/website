<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="de" lang="de">
<head>
	<title>SliTaz - Downloadsektion</title>
	<meta http-equiv="content-type" content="text/html; charset=ISO-8859-1" />
	<meta name="description" content="SliTaz GNU/Linux LiveCD" />
	<meta name="keywords" lang="en" content="slitaz download, get slitaz" />
	<meta name="author" content="F Steiner (Sevala)"/>
	<?php include("../../lib/html/meta-link.html"); ?>
</head>
<body>

<?php 
include("../../config.php");
include("../../lib/html/header.html");
?>

<!-- Block -->
<div id="block">
	<?php include("../../lib/html/nav.de.html"); ?>
	<!-- Information/image -->
	<div id="block_info">
		<h4>Downloadsektion</h4>
		<p>
			Laden Sie die neueste stabile Version für deren Produktion 
			oder einem festen Desktop-Umgebung. Verwenden Sie das Kochen
			Version zu testen und uns bei der Verbesserung der Distribution.
		</p>
		<div class="button">
			Quick Download:
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
	<a href="../../es/get/">Español</a>
	<a href="../../fr/get/">Français</a>
	<a href="../../it/get/">Italiano</a>
	<a href="../../pt/get/">Português</a>
	<a href="../../cn/get/">Chinese</a>
</div>

<!-- Content -->
<div id="content">

<h2>Download SliTaz</h2>

<ul>
	<li><a href="#stable">Live-CD Stabile Version</a> - Bootfähiges ISO Image der
	aktuellen stabilen Version.</li>
	<li><a href="#cooking">Live-CD Cooking Version</a> - Bootfähiges ISO Image der
	aktuellen Cooking-Version.</li>
	<li><a href="flavors.html">Live-CD Derivate</a> - SliTaz-Derivate und Loram-Version.</li>
</ul>

<div class="box">
	<p>
		Helfen Sie das Projekt über eine kleine Spende oder werden, ein 
		Offizieller <a href="../sponsor/">Sponsor</a>.
	</p>
	<?php include("../../lib/html/donate.html"); ?>
</div>

<h3>Allgemeine Informationen</h3>
<p>
Auf dieser Seite stehen die ISO-Images der SliTaz
GNU/Linux Live-CD-Versionen der Paket-CDs sowie einzelne Pakete (über die verschiedenen
Mirrors) und zugehöriger Quellcode zum Download.
Über den Umgang mit der Live-CD und SliTaz im Allgemeinen erfahren Sie mehr im
<a href="http://doc.slitaz.org/de:handbook:start">SliTaz Wiki</a>. Hilfe erhalten
Sie auch im <a href="http://forum.slitaz.org/#idx3">deutschen Forum</a> von SliTaz.
</p>

<h3>Mirrors</h3>
<p>
SliTaz wird momentan in Frankreich von <a href="http://www.ads-lu.com/">ADS</a>,
<a href="http://www.tuxfamily.org/">TuxFamily</a> und Erjo (Ja! Ein SliTaz-Entwickler!)
<a href="http://info.pimentvert.com/">Pimentvert</a> gehostet. Herzlichen Dank.
</p>

<ul>
	<li>Schweitz - Mirror hosted by SWITCHmirror (10 Gbit/s)
	<a href="http://mirror.switch.ch/ftp/mirror/slitaz/">HTTP</a> ou
	<a href="ftp://mirror.switch.ch/mirror/slitaz/">FTP</a></li>

	<li>Frankreich - Mirror hosted by TuxFamily
	<a href="http://download.tuxfamily.org/slitaz/">HTTP</a> oder
	<a href="ftp://download.tuxfamily.org/slitaz/">FTP</a></li>

	<li>China - Mirror hosted by LupaWorld
	<a href="http://mirror.lupaworld.com/slitaz/">HTTP</a></li>
</ul>

<a name="sources"></a>
<h3>Quellcode</h3>
<p>
Tazpkg (Paketmanager), Tazlito (SliTaz Live Tool), Tazwok (Source Builder),
Tazusb (LiveUSB Tool) und die SliTaz Tools können alle vom
<a href="http://www.tuxfamily.org/">TuxFamily</a> Mirror heruntergeladen werden.
All diese Anwendungen sind schon in SliTaz vorhanden. Der Quelltext ist auf Englisch kommentiert,
er kann von einem der folgenden Mirrors heruntergeladen werden:
<a href="http://mirror.slitaz.org/sources/">HTTP</a> oder
<a href="http://mirror.slitaz.org/sources/">FTP</a>
</p>

<a name="stable"></a>
<h2>LiveCD - Stabile Version</h2>
<p>
	Die stabile Version von SliTaz ist ein kleines und schnelles Betriebssystem,
	ausgiebig von einer aktiven Community getestet. Es enthält eine Anzahl nützlicher
	Anwendungen, ist leicht erweiterbar und bietet eine benutzerfreundliche Oberfläche.
	<?php echo "Das aktuelle stabile Release $stable_ver wurde am $stable_rel veröffentlicht."; ?>
</p>

<p class="box">
	<img src="/images/download.png" height="48px" width="48px" alt="[ DL ]" />
	<?php echo "SliTaz GNU/Linux $stable_ver ($stable_size) - 
	<a href='$stable_iso'>slitaz-$stable_ver.iso</a>
	[ <a href='$mirror/$stable_ver/slitaz-$stable_ver.md5'>md5</a> ]"; ?>
</p>

<p class="box">
	<img src="/images/download.png" height="48px" width="48px" alt="[ DL ]" />
	<?php echo "Paket-CD; alle Pakete der Version SliTaz GNU/Linux $stable_ver ($stable_pkgs)
	- <a href='$pkgs_mirror/$stable_ver/packages-$stable_ver.iso'>packages-$stable_ver.iso</a>
	[ <a href='$pkgs_mirror/$stable_ver/packages-$stable_ver.md5'>md5</a> ]"; ?>
</p>

<a name="cooking"></a>
<h2>LiveCD - Cooking version</h2>
<p>
SliTaz "Cooking" ist ein "Snapshot" der laufenden Entwicklung von SliTaz.
Es ist vollständig benutzbar und erlaubt das Testen der <a href="http://slitaz.org/de">
neuesten Veränderungen und Anwendungen</a>. Anfrage nach neuen Features oder das
Berichten von Bugs helfen uns die nächste stabile Version zu verbessern. Die
<a href="http://doc.slitaz.org/de:vocab:vocab">
Paket-CD</a> enthält alle verfügbaren Pakete, sodass sie Software auch ohne lokale
Internetanbindung installieren können.
</p>

<p class="box">
	<img src="/images/download.png" height="48px" width="48px" alt="[ DL ]" />
	<?php echo "SliTaz GNU/Linux Cooking $cooking_ver ($cooking_size) - 
	<a href='$cooking_iso'>slitaz-$cooking.iso</a>
	[ <a href='$mirror/cooking/slitaz-$cooking.md5'>md5</a> ]"; ?>
</p>

<p class="box">
	<img src="/images/download.png" height="48px" width="48px" alt="[ DL ]" />
	<?php echo "Paket-CD; alle Pakete der Version SliTaz GNU/Linux Cooking ($cooking_pkgs)
	- <a href='$pkgs_mirror/cooking/packages-cooking.iso'>packages-cooking.iso</a>
	[ <a href='$pkgs_mirror/cooking/packages-cooking.md5'>md5</a> ]"; ?>
</p>

<!-- End of content -->
</div>

<?php include("../../lib/html/footer.html"); ?>

</body>
</html>
