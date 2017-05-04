<!DOCTYPE html>
<html lang="de">
<head>
	<meta charset="UTF-8">
	<title>SliTaz - archivierte Neuigkeiten 2011</title>
	<meta name="description" content="SliTaz news archives info release">
	<meta name="keywords" lang="en" content="System, free, gnu, linux, opensource software, livecd in RAM">
	<meta name="author" content="Christophe Lincoln, HGT">
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

<h2>2011</h2>

<div class="news">

<ul>
	<li id="d20110531">
		<strong>31. Mai 2011 - Neue Entwicklungsversion (20110531)</strong>
	<p>
		Das SliTaz-Team ist stolz, die Freigabe einer neuen Entwicklungsversion 
		ankündigen zu können, die mit den neuen Kochwerkzeugen („cookutils“) erstellt wurde.
		Die Kochwerkzeuge gehören zu einer neuen Generation von Werkzeugen zum Erzeugen
		von SliTaz-Paketen. Sie enthalten einen Kompilierungsautomaten mit einer
		gefälligen Web-Oberfläche, die auf jedem SliTaz ohne Konfigurierung genutzt werden
		kann. Die neuen Pakete wurden mit dem neuen Werkzeugkasten erzeugt, optimiert für
		die Architektur i486.
	</p>
	<p>
		Der ganze Vorgang der Systemeinleitung wurde verbessert und die ersten Konfigurationsabfragen
		geschehen über GTK-Fenster in einer X-Sitzung. Darüberhinaus ist die Ladezeit verkürzt worden.
		Neu in dieser Version ist das grafische Werkzeug TazPanel für die Systemkonfiguration.
		TazPanel ermöglicht die Konfigurierung des ganzen Systems über eine Web-Oberfläche mit xHTML und CSS
		(was auch für die Administration von einem anderen Rechner aus genutzt werden kann). Mit TazPanel
		können auch Pakete verwaltet werden. Es ersetzt das alte GTK-Fenster.
	</p>
	<p>
		Xorg bietet jetzt Unterstützung für DRI, so dass libdrm, linux-drm und linux-agp
		jetzt Bestandteil der „core“-Variante sind. Dadurch wird das komprimierte Wurzeldateisystem
		1&nbsp;MB größer. Andererseits konnten wir viel Platz in der „core“-Variante durch unsere
		neuen Pakete einsparen, wodurch wir eine Größe von 30&nbsp;MB erreicht haben! Diese neue
		Entwicklungsversion bietet auch eine verbesserte Internationalisierung und italienische
		Sprachunterstützung. Erhältlich als
		<a href="http://mirror.slitaz.org/iso/cooking/slitaz-cooking.iso">
			slitaz-cooking.iso</a>
	</p>
	</li>

	<li id="d20110329">
		<strong>29. März 2011 - Neue Entwicklungsversion (20110329)</strong>
	<p>
		Das SliTaz-Team ist erfreut, die Freigabe einer neuen Entwicklungsversion mit mehr
		als 2900 Paketen ankündigen zu können.
		Alle Pakete wurden mit den neuen Kochwerkzeugen, die jetzt in tazwok enthalten sind,
		neu erstellt. Die Version enthält den Linux-Kern 2.6.37, übersetzt mit glibc 2.13,
		binutils 2.21 und gcc 4.5.2. Die „core“-Variante enthält Midori 0.3.3. Tazpkg wurde
		vollständig ins Französische übersetzt und kann in weitere Sprachen übersetzt werden.
		Tazwok wurde vollständig neu geschrieben. Damit ist es jetzt möglich, SliTaz aus
		den Quellprogrammen in irgendeinem von einem Direktstart-ISO-Abbild geladenen SliTaz
		neu zu erzeugen. Diese Version ist die erste einer Reihe von Freigabekandidaten, die
		zur Freigabe der stabilen Version 4.0 führen sollen.
	</p>
	<p>
		Viel Arbeit wurde seit der Freigabe der letzten Entwicklungsversion im November investiert:
		Mehr als 2200 Änderungen wurden im Wok übergeben und einige Hundert
		mehr an selbstgemachten Programmen. Mit Stolz geben wir bekannt, dass die
		SliTaz-Nutzergemeinschaft sich in den letzten Monaten stark vergrößert hat:
		vergangenes Jahr wurden mehr Änderungen durchgeführt als in den davorliegenden vier Jahren
		zusammen. Dennoch, Quantität ist nicht gleich Qualität. Wir brauchen auch Ihre Hilfe beim
		Testen des neuen ISO-Abbilds durch Meldung von eventuellen Fehlern. Wenn Sie möchten,
		können Sie auch bei der Korrektur bereits bekannter Fehler helfen, bevor die Version 4.0
		freigegeben wird.
		Es gibt mehrere Wege, dem Team beizutreten: über unseren IRC, die Diskussionsrunde,
		das Forum oder durch eine E-mail an einen Paketbetreuer. Viel Vergnügen mit der neuen
		<a href="/de/get/">Entwicklungsversion!</a>
	</p>
	</li>
</ul>

<!-- End of news -->
</div>

<h2>Archivierte Neuigkeiten</h2>
<p>
	Bitte beachten Sie, dass einige Verknüpfungen ins Leere zeigen können, da die Struktur der
	Internetpräsenz geändert wurde (hauptsächlich wurde die Dokumentation unter einer eigenen Adresse
	abgelegt).
</p>
<p>
	<a href="index.php#archives">Archive nach Jahrgängen</a>
</p>

<!-- End of content -->
</div>

<?php include("../../lib/html/footer.html"); ?>

</body>
</html>
