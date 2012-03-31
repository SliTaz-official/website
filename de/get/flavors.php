<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
	"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="de" lang="de">
<head>
	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<title>SliTaz - Flavors Downloaden</title>
	<meta name="description" content="SliTaz GNU/Linux LiveCD" />
	<meta name="keywords" lang="en" content="slitaz download, get slitaz" />
	<meta name="author" content="F Steiner (Sevala)"/>
	<?php include("../../lib/html/meta-link.html"); ?>
</head>
<body>

<?php include("../../lib/html/header.html"); ?>

<!-- Block -->
<div id="block">
	<?php include("../../lib/html/nav.de.html"); ?>
	<!-- Information/image -->
	<div id="block_info">
		<h4>Flavors Downloaden</h4>
		<p>
			Get a LiveCD of your taste
		</p>
	</div>
</div>

<?php include("../../lib/lang.php"); ?>

<!-- Content -->
<div id="content">

<h2>Live-CD Flavors</h2>

<p>
Flavors sind SliTaz Derivate, die mit Tazlito und einer *.flavor-Datei erstellt wurden.  
Mit Tazlito besteht eine einfache Möglichkeit für bestimmte Zwecke angepasste ISO-Images
zu erstellen. Um dieses Image zu erzeugen benötigt Tazlito eine .flavor-Datei. 
Auf ihr sind alle Anweisungen enthalten, welche Pakete und Konfigurationsdateien das ISO-Image des 
Flavors einst enthalten soll. Man kann wahlweise eine eigene .flavor-Datei kreieren, oder eine 
vorgefertigte, die z.B. von der Community zur Verfügung gestellt wird verwenden.
</p>

<h3>Live-CD ISO Images</h3>

<p>
Diese Flavors werden vom SliTaz-Team veröffentlicht. Sie basieren auf der 
Cooking-Version. 
</p>
<p>Das <em>Loram</em> Flavor startet SliTaz auf Rechnern mit älterer Hardware,
benötigt werden blos 80 MB RAM.  Das
<em>Loram-cdrom</em> Flavor benötigt nur  16 MB Arbeitsspeicher und eine 
kleine Swap -Partition, 
allerdings kann die CD nicht mehr dem Laufwerk entnommen werden.
</p>
<p>
<a href="http://mirror.slitaz.org/iso/3.0/flavors/">Ein fertiges Flavor-Image downloaden</a>
</p>

<h3>Eine .flavor Datei generieren</h3>

<p>
Mit dem grafischen Tool Tazlitobox können Sie mit einigen wenigen Mouseklicks eine .flavor Datei 
erstellen. Das Tazlito-Manual (Achtung: noch keine vollständige Übersetzung) 
und das <a href="http://doc.slitaz.org/de:start">Wiki</a> im Allgemeinen bieten ausführliche 
Anweisungen zum Erzeugen einer .flavor-Datei. Über die Shell können Sie mit dem Befehl
<code>tazlito list-flavors</code> eine Liste der verfügbaren Dateien anzeigen lassen.
</p>

<h3>Das Flavor (-Image) erzeugen und verteilen</h3>

<p>
Von SliTaz Stable und Cooking gibt es ein <em>core</em> Flavor auf dem Mirror. 
Es kann gut als Basis für eigene Flavors genutzt werden. 
Weitere Informationen und Anweisungen finden Sie auch im 
<a href="http://doc.slitaz.org/de:start">SliTaz Wiki</a>.
</p>
<p>
Erstellte Flavors können gerne über die 
<a href="../mailing-list.php">Mailing Liste</a> eingesandt werden, 
getested und für gut befunden wird das Flavor auf dem offiziellen 
Mirror veröffentlicht.
</p>

<!-- End of content -->
</div>

<?php include("../../lib/html/footer.html"); ?>

</body>
</html>
