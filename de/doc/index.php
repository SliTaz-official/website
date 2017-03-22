<!DOCTYPE html>
<html lang="de">
<head>
	<meta charset="utf-8"/>
	<title>SliTaz (de) - Deutsche Dokumentation</title>
	<meta name="description" content="SliTaz GNU/Linux German documentation">
	<meta name="keywords" lang="de" content="System, frei, gnu, linux, quelloffene software, Direktstart">
	<meta name="author" content="Christophe Lincoln"/>
	<meta name="translated" content="2017-03-19 15:42:00">
	<?php include("../../lib/html/meta-link.html"); ?>
</head>
<body>

<?php 
include("../../lib/html/header.de.html"); 
include("../../lib/html/nav.de.html"); 
include("../../lib/lang.php");
?>

<!-- Content -->
<div id="content">

<h2>Deutsche Dokumentation</h2>

<p>
	Die offizielle SliTaz-Dokumentation befindet sich im Wiki der
	SliTaz-Nutzergemeinschaft. Handbücher und eine Einführung werden mit jedem
	SliTaz-Direktstart-Datenträger ausgeliefert und sind über das Menü
	"Dokumentation" zugänglich.
</p>
<ul>
	<li><a href="http://doc.slitaz.org/de:start">Wiki der Nutzergemeinschaft</a></li>
	<li><a href="http://hg.slitaz.org/slitaz-doc/raw-file/tip/slitaz/index.de.html">Einführung</a></li>
</ul>

<h2>Handbuch &amp; Kochbuch</h2>

<p>
	SliTaz-<a href="http://doc.slitaz.org/de:handbook:start">Handbuch</a> - 
	Verwendung von Direktstart-Datenträgern, Paketverwaltung, Netzwerk- und Systemverwaltung
	sowie spezielle Anleitungen. Das Handbuch wird von der Benutzergemeinschaft erstellt,
	um allen SliTaz-Benutzern Dokumentation in hoher Qualität zur Verfügung zu stellen.
	Es soll helfen, sich mit SliTaz GNU/Linux vertraut zu machen und das System an die
	eigenen Bedürfnisse und Vorlieben anzupassen. Diese Dokumentation sollten Sie zuerst lesen.
</p>
<p>
	SliTaz-<a href="http://doc.slitaz.org/de:cookbook:start">Kochbuch</a> - 
	Information über die Verwaltung, den Betrieb und die Entwicklung von Distributionen.
	Anleitungen für die Benutzung des wok und die Erstellung von Paketrezepten, Beschreibungen 
	von Kommando-Prozeduren für die Systemeinleitung und von "rootcd"-Dateien sowie
	diverser Dienstprogramme.
</p>

<h2>Konzeptbuch</h2>

<p>
	Historisch gesehen wurde das Konzeptbuch geschrieben, als SliTaz entstand und es war
	nicht geplant, dass es aktualisiert werden sollte.
	Im Laufe der Zeit haben aber einige Mitwirkende das Konzeptbuch in das Wiki integriert
	und einige Aktualisierungen vorgenommen:
	<a href="http://doc.slitaz.org/de:scratchbook:start">Konzeptbuch der Nutzergemeinschaft</a>
</p>
<p>
	Das <a href="../en/doc/scratchbook/">originale SliTaz-Konzeptbuch</a> -
	beschreibt die Entstehungsphasen der ersten SliTaz-Distribution, 
	beginnend mit den Anweisungen für die Übersetzung des Linux-Kerns, die Installation
	des Grafik-Servers (Xvesa) und von GTK-Anwendungen usw. Hier sind auch aufwendige Techniken
	beschrieben, die es ermöglichen, ein GNU/Linux-System aus dem Quellcode zu erzeugen.
</p>

<h2>Handbücher</h2>

<ul>
	<li><a href="http://hg.slitaz.org/tazpkg/raw-file/tip/doc/tazpkg.de.html">Tazpkg-Handbuch</a> -  SliTaz-Paketverwaltung.</li>
	<li><a href="http://hg.slitaz.org/tazlito/raw-file/tip/doc/tazlito.de.html">Tazlito-Handbuch</a> -  SliTaz-Direktstart-ISO-Abbilder bearbeiten.</li>
	<li><a href="http://hg.slitaz.org/tazusb/raw-file/tip/doc/tazusb.de.html">TazUSB-Handbuch</a> -  SliTaz-Direktstart-USB-Datenträger erstellen.</li>
	<li><a href="http://hg.slitaz.org/cookutils/raw-file/tip/doc/cookutils.en.html">Cookutils manual</a> - [en] SliTaz Package Cooker.</li>
</ul>

<h2>Freigabemitteilungen</h2>

<p>
SliTaz-Freigabemitteilungen enthalten detaillierte Informationen über die stabile Version
und einige nützliche Hinweise zum Einstieg in die Systembenutzung. In der "core"-Variante
des Direktstart-ISO-Abbildes sind die Freigabemitteilungen enthalten und über das Menü “Dokumentation”
zugreifbar.
</p>

<ul>
<?php
	$relnotes = array();
	for ($release = 1;; $release++) {
		$file = "releases/".$release.".0/relnotes.de.html";
		if (!file_exists($file)) {
			$file = "../../en/doc/releases/".$release.".0/relnotes.en.html";
			if (!file_exists($file))
				break;
		}
		array_unshift($relnotes, array("release" => $release.".0", "file" => $file));
	}
	foreach ($relnotes as $release) {
		print "	<li><a href=\"".$release["file"]."\">SliTaz GNU/Linux ".$release["release"]." -\n";
		print "		Freigabemitteilung</a></li>\n";
	}
?>
</ul>

<!-- End of content -->
</div>

<?php include("../../lib/html/footer.html"); ?>

</body>
</html>
