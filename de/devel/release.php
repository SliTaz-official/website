<!DOCTYPE html>
<html lang="de">
<head>
	<meta charset="UTF-8">
	<title>Anleitung für SliTaz-Freigaben</title>
	<meta name="description" content="slitaz Entwickler Freigabe Anleitung cooking stabil Pakete">
	<meta name="keywords" lang="en" content="slitaz, devel, tazdev, cooking, source">
	<meta name="author" content="Christophe Lincoln, HGT">
	<?php include("../../lib/html/meta-link.html"); ?>
</head>
<body>

<?php 
include("../../lib/html/header.de.html");
include("../../lib/html/nav.de.html"); 
include("../../lib/lang.php"); 
?>

<!-- Content -->
<section id="content">

<h2>Anleitung für Freigaben</h2>

<ul>
	<li><a href="#cooking">Freigabe einer Entwicklungsversion</a></li>
	<li><a href="#stable">Freigabe einer stabilen Version</a></li>
	<li><a href="#project">Freigabe eines Teilprojektes</a></li>
</ul>

<h2 id="cooking">Freigabe einer Entwicklungsversion</h2>

<p>
	wird ergänzt - einige nicht mehr aktuelle Informationen (jetzt wird <code>cookiso</code> verwendet)
	im <a href="http://doc.slitaz.org/de:cookbook:reltasks">Kochbuch</a>
</p>

<h2 id="stable">Freigabe einer stabilen Version</h2>

<p>
	wird ergänzt
</p>

<p>
	Anleitungen zur Verwendung des Entwicklungstanks finden sich im Kochbuch:
	<a href="http://doc.slitaz.org/en:cookbook:buildhost">Entwicklungstank</a>.
</p>

<h2 id="project">Freigabe eines Teilprojektes</h2>

<p>
	SliTaz-Teilprojekte werden einzeln freigegeben mithilfe des SliTaz-Entwicklerwerkzeuges
	<code>tazdev</code>. Hier folgt eine Kurzanleitung für die Freigabe eines Teilprojektes am
	Beispiel von <code>spk 1.0</code>:
</p>

<pre>
$ cd spk
$ hg pull -u
$ hg tag 1.0
$ hg push
$ tazdev -rp spk
</pre>

<p>
	Einige Pakete brauchen nicht im Depot archiviert zu werden, da sie
	im Baum aller Pakete gespiegelt sind. Wenn das Paket freigegeben wurde und
	der Aktualisierung des Woks zugestimmt wurde (oder dieser manuell aktualisiert wurde)
	kann das Paket mit <code>hg push</code> nach hg.slitaz.org transferiert werden.
	Es wird dann automatisch im <a href="http://cook.slitaz.org/">Kompilierungsautomat</a>
	erzeugt. Transfer in das Mercurial-Depot:
</p>

<pre>
$ cd ../wok
$ hg push
</pre>

<!-- End of content -->
</section>

<?php include("../../lib/html/footer.html"); ?>

</body>
</html>
