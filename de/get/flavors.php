<!DOCTYPE html>
<html lang="de">
<head>
	<meta charset="UTF-8"/>
	<title>SliTaz-Varianten</title>
	<meta name="description" content="SliTaz GNU/Linux Direktstart Variante"/>
	<meta name="keywords" lang="en" content="slitaz download, get slitaz, flavor"/>
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

<h2>Varianten transferieren</h2>

<p>
Varianten von SliTaz sind ISO-Abbilder, die von der Nutzergemeinschaft für spezielle Aufgaben
durch eine angepasste Auswahl von Paketen erstellt wurden.
Man kann wahlweise eine eigene Variante über eine benutzerfreundliche grafische Oberfläche erzeugen
oder eine von der Nutzergemeinschaft vorgefertigte Variante einsetzen.
</p>

<h3>Direktstart-ISO-Abbilder zum Ausprobieren</h3>

<p>
Diese Varianten der stabilen und der Entwicklungs-Version schägt das SliTaz-Team vor:
</p>

<div class="box-dl"><p>
	<a href="http://mirror.slitaz.org/iso/3.0/flavors/slitaz-3.0-xvesa.iso">
		slitaz-3.0-xvesa.iso</a>
	[29 MB] - mit vollständiger grafischer Oberfläche unter Verwendung des winzigen Xvesa-Grafik-Servers
	und einem Bündel an Software für alltägliche Aufgaben</p>
</div>

<div class="box-dl"><p>
	<a href="http://mirror.slitaz.org/iso/4.0/flavors/slitaz-4.0-firefox.iso">
		slitaz-4.0-firefox.iso</a>
	[43 MB] - kleine grafische Oberfläche mit Mozilla Firefox</p>
</div>

<div class="box-dl"><p>
	<a href="http://mirror.slitaz.org/iso/4.0/flavors/slitaz-4.0-justx.iso">
		slitaz-4.0-justx.iso</a>
	[16,1 MB] - kleine grafische Oberfläche unter Verwendung von Xorg und Openbox, wobei nur
	eine X-Umgebung mit Werkzeugen zum Erstellen einer eigenen grafischen Oberfläche bereitgestellt wird</p>
</div>

<div class="box-dl"><p>
	<a href="http://mirror.slitaz.org/iso/4.0/flavors/slitaz-4.0-base.iso">
		slitaz-4.0-base.iso</a>
	[8,1 MB] - Basissystem im Text-Modus mit nützlichen Dienstprogrammen.
	Diese Variante empfiehlt sich für einen „Server“</p>
</div>

<div class="box-dl"><p>
	<a href="http://mirror.slitaz.org/iso/4.0/flavors/slitaz-4.0-loram.iso">
		slitaz-4.0-loram.iso</a>
	[41 MB] - Mit der Loram-Variante kann SliTaz auf Rechnern mit sehr beschränkten
	Betriebsmitteln geladen werden. Diese Variante benötigt nur 128 MiB Arbeitsspeicher
	und der Datenträger, von dem geladen wurde, kann nach dem Laden entfernt werden.</p>
</div>

<div class="box-dl"><p>
	<a href="http://mirror.slitaz.org/iso/4.0/flavors/slitaz-4.0-loram-cdrom.iso">
		slitaz-4.0-loram-cdrom.iso</a>
	[163 MB] - Mit dieser Loram-Variante kann SliTaz auf Rechnern mit nur 24 MiB Arbeitsspeicher
	und etwas Seitenwechselspeicher geladen werden,
	allerdings kann der Datenträger, von dem geladen wurde, nicht mehr dem Laufwerk entnommen werden.</p>
</div>

<div class="box-dl"><p>
	<a href="http://mirror.slitaz.org/iso/4.0/slitaz-4.0.iso">
		slitaz-4.0.iso</a>
	[34,7 MB] - 4in1-Variante, die die Varianten „base“, „justx“, „gtkonly“ und „core“ enthält</p>
</div>

<div class="box">
	<img src="/images/network.png" alt="[ ]" />
	Sehen Sie sich die Varianten im Depot an:
	<a href="http://mirror.slitaz.org/iso/stable/flavors/">Stabil</a> |
	<a href="http://mirror.slitaz.org/iso/cooking/flavors/">Entwicklung</a>
</div>

<h2>Eine vorgefertigte Variante transferieren und eine Variante erzeugen</h2>

<p>
	Eine Variante wird mithilfe einer Datei <code>.flavor</code> erzeugt.
	Mit dem grafischen Werkzeug Tazlitobox kann eine Variante mit wenigen
	Mausklicks erzeugt werden. Das  
	<a href="http://hg.slitaz.org/tazlito/raw-file/tip/doc/tazlito.de.html">Tazlito-Handbuch</a> 
	und die <a href="http://doc.slitaz.org/de:handbook:genlivecd">Dokumentation</a>
	enthalten detaillierte Anleitungen für die Erzeugung einer Variante. Mit dem Kommando 
	<code>tazlito list-flavors</code> erhalten Sie eine Liste der vorhandenen Varianten.
</p>

<h3>Eine eigene Variante erzeugen und publizieren</h3>

<p>
Von der stabilen und der Entwicklungs-Version von SliTaz gibt es im Depot eine „core“-Variante. 
Diese eignet sich gut als Basis für die Erzeugung eigener Varianten. 
Das Handbuch zum <a href="http://doc.slitaz.org/de:handbook:genlivecd">
Erzeugen einer eigenen Variante eines Direktstart-ISO-Abbildes</a>.
enthält alle dazu nötigen Anleitungen.
</p>

<p>
Nach Ihrem Geschmack erstellte Varianten können Sie gerne an die 
<a href="../mailing-list.php">Diskussionsrunde</a> zum Testen übermitteln.
Für gut befundene Varianten können als offizielle Varianten übernommen werden. 
</p>

<!-- End of content -->
</div>

<?php include("../../lib/html/footer.html"); ?>

</body>
</html>
