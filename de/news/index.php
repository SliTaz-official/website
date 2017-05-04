<!DOCTYPE html>
<html lang="de">
<head>
	<meta charset="UTF-8"/>
	<title>SliTaz-Neuigkeiten</title>
	<meta name="description" content="SliTaz GNU/Linux Deutsch Neuigkeiten Archiv"/>
	<meta name="keywords" lang="de" content="slitaz Neuigkeiten"/>
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

<h2>SliTaz-Neuigkeiten</h2>
<p>
	Sehen Sie auch im <a href="http://scn.slitaz.org/">„SliTaz Community Blog“</a>
	nach speziellen, kurzen Neuigkeiten aus dem Projekt.
</p>

<div id="news">

<ul>
	<li id="d20150520">
		<strong>20. Mai 2015 - Freigabe von SliTaz 5.0 RC-3</strong>
	<p>
		Das SliTaz-Team freut sich, den neuen Freigabekandidaten SliTaz 5.0-RC3
		ankündigen zu können. Viel Arbeit wurde investiert, um Fehler in RC2 zu
		beheben: etwa 2500 Beiträge in unseren Mercurial-Depots. Um Fehler zu
		entdecken und zu beheben und um sicherzustellen, dass alles von
		fortgeschrittenen Anwendern aus den Quellprogrammen	neu erstellt werden kann,
		wurden alle 4800 Pakete neu erzeugt.
	</p>
	<p>
		Tazpanel wurde umgestaltet und unterstützt jetzt mehrere gleichzeitige Benutzer.
		Der Standard-Benutzer ist <code>nobody</code>, für den einige Menüs deaktiviert
		sind.
		Über die Anmeldeschaltfläche kann man mehr Rechte erlangen.
	</p>
	<p>
		Transfer: <a href="http://mirror.slitaz.org/iso/5.0/slitaz-5.0-rc3.iso"
			>slitaz-5.0-rc3.iso</a>
		[ <a href="http://mirror.slitaz.org/iso/5.0/slitaz-5.0-rc3.md5"
			>md5</a> ]
	</p>
	</li>

	<li id="d20140519">
		<strong>19. Mai 2014 - Freigabekandidat SliTaz 5.0 RC-2</strong>
	<p>
		Das SliTaz-Team freut sich, den neuen Freigabekandidaten SliTaz 5.0-RC2
		ankündigen zu können. Viel Arbeit wurde investiert, um Fehler in RC1 zu
		beheben: etwa 500 Beiträge in unseren Mercurial-Depots.
		Um Fehler zu entdecken und zu beheben und um sicherzustellen, dass alles
		von fortgeschrittenen Anwendern aus den Quellprogrammen	neu erstellt werden
		kann, wurden alle 4300 Pakete neu erzeugt.
	</p>
	<p>
		Viel Zeit wurde investiert, die standarmäßige LXDE-Benutzeroberfläche
		benutzerfreundlicher zu gestalten. Die Konfiguration von Polkit und udisks
		wurde korrigiert, damit externe Geräte und Partitionen auf internen Platten
		richtig	behandelt werden.
	</p>
	<p>
		Der Freigabekandidat RC2 unterstützt eine neue Installationsmethode:
		SliTaz kann	jetzt in einem Verzeichnis installiert werden, ohne dass eine
		Platte umpartitioniert werden muss.
		Dies funktioniert auf allen Dateisystemen einschließlich NTFS und FAT32.
	</p>
	<p>
		Transfer: <a href="http://mirror.slitaz.org/iso/5.0/slitaz-5.0-rc2.iso"
			>slitaz-5.0-rc2.iso</a>
		[ <a href="http://mirror.slitaz.org/iso/5.0/slitaz-5.0-rc2.md5"
			>md5</a> ]
	</p>
	</li>

	<li id="d20140502">
		<strong>2. Mai 2014 - Freigabekandidat SliTaz 5.0 RC-1</strong>
	<p>
		Das SliTaz-Team freut sich, den Freigabekandidaten SliTaz 5.0-RC1 ankündigen
		zu können. Dieser ist bereits ausgereift, muss aber vor der Freigabe einer
		stabilen Version noch intensiv getestet werden.
	</p>
	<p>
		Der Freigabekandidat SliTaz 5.0 RC-1 enthält viele kleine Fehlerkorrekturen,
		so die verbesserten Dialoge von <code>slitaz-config</code>, das dem Anwender
		eine einfache Möglichkeit zur Anpassung des Systems über eine grafische oder
		Text-Oberfäche bietet.
		Tazpanel erhielt ein neues Design.
		Die Sprachunterstützung ist jetzt besser als je zuvor.
		Wir haben sogar die Unterstützung alter ATA-Plattenlaufwerke korrigiert,
		entsprechend unserer Tradition, dass SliTaz auch auf uralten Rechnern 
		ablauffähig bleiben soll. 
	</p>
	<p>
		Die grafische Oberfläche basiert wiederum auf PCmanFM. Es wurde ein Papierkorb
		hinzugefügt und die Unterstützung von gvfs/udisks.
		Das Paketdepot erhielt mehr als 200 Paketaktualisierungen und etwa 50 neue Pakete.
		Zur Vorbereitung auf die kommende stabile Version haben wir unserem Internetauftritt
		ein neues Aussehen gegeben und die Benutzerfreundlichkeit verbessert.
	</p>
	<p>
		Transfer des neuen <a href="http://mirror.slitaz.org/iso/5.0/slitaz-5.0-rc1.iso"
			>slitaz-5.0-rc1.iso</a>
		[ <a href="http://mirror.slitaz.org/iso/5.0/slitaz-5.0-rc1.md5"
			>md5</a> ]
	</p>
	</li>

	<li id="d20140329">
		<strong>29. März 2014 - Freigabe von SliTaz für Raspberry Pi</strong>
	<p>
		Das SliTaz-Team freut sich, SliTaz für Raspberry Pi (20140329) freigeben
		zu können, nachdem zwei Jahre an der Portierung auf die ARM-Plattform
		und der Stabilisierung des Systems gearbeitet wurde.
		Diese Freigabe enthält mehr als 420 der neuesten Pakete, die mit den
		offiziellen Kochwerkzeugen für die ARM-Plattform übersetzt wurden.
		Die „base“-Variante ist 22&nbsp;MB groß und auch die Variante mit der
		grafischen Oberfläche JWM/FOX erreicht nur 34&nbsp;MB.
		Letztere enthält den Texteditor Adie, die Dateiverwaltung PathFinder,
		den Webbrowser Links2, TazIRC, einen Webserver, den SSH-Klienten Dropbear
		und viele gebräuchliche GNU/Linux-Kommandos.
	</p>
	<p>
		SliTaz für Raspberry Pi enthält auch das Ncurses-Dienstprogramm TazBerry 
		zum Konfigurieren des Systems und die SliTaz-Fernadministration für ARM
		mit einem für RPi angepassten Systemlade-Zusatzprogramm. Wenn Sie SliTaz
		auf RPi einsetzen wollen, transferieren Sie ein Archiv der Variante,
		packen es aus und starten die Kommandoprozedur <code>install.sh</code>.
		Anschließend können Sie SliTaz auf dem Raspberry Pi laden.
	</p>
	<p>
		<a href="http://mirror.slitaz.org/arm/rpi/slitaz-rpi-desktop-20140329.tar.bz2"
			>slitaz-rpi-desktop-20140329</a> (34&nbsp;MB) -
		<a href="http://mirror.slitaz.org/arm/rpi/slitaz-rpi-base-20140329.tar.bz2"
			>slitaz-rpi-base-20140329</a> (22&nbsp;MB) -
		<a href="http://arm.slitaz.org/rpi/">Internetpräsenz von SliTaz Raspberry Pi</a>
	</p>
	</li>

	<li id="d20140216">
		<strong>16. Februar 2014 - Neue Entwicklungs-Version</strong>
	<p>
		Das SliTaz-Team ist stolz, die Freigabe einer neuen Entwicklungs-Version
		bekannt geben zu können, die den Weg zu SliTaz 5.0 ebnen wird.
		In diese neue Entwicklungs-Version wurden fast zwei Jahre Arbeit investiert;
		sie hat ein	unglaubliches Änderungsprotokoll.
		Alle selbstgemachten Werkzeuge wurden verbessert und einige großartige neue
		Werkzeuge wie <code>frugal</code> und <code>decode</code> sind dazugekommen.
		Wir haben einen Großteil unserer Arbeit	auf die grafische Benutzeroberfläche
		konzentriert, um die Benutzerfreundlichkeit	zu steigern.
		Desweiteren wurde die Konfiguration des Linux-Kerns (3.2.53) erheblich verbessert.
	</p>
	<p>
		Alle vorhandenen Pakete wurden aktualisiert und eine Reihe neuer Pakete wurde
		hinzugefügt, so dass sich jetzt mehr als 4200 Pakete im Depot der
		Entwicklungs-Version befinden.
		Viel Arbeit wurde auch in die SliTaz-Installationsprozedur investiert,
		die nun über eine neue Ncurses-Text-Benutzeroberfläche verfügt.
	</p>
	<p>
		Das Direktstart-ISO-Abbild fragt jetzt bei der Systemeinleitung nach den
		Spracheinstellungen, so dass der Benutzer nach Ausführen aller vorgesehenen
		Kommandoprozeduren direkt auf die grafische Oberfläche gelangt. Die Größe
		des ISO-Abbildes ist aufgrund besserer Hardware-Unterstützung und neuer
		Funktionen etwas gewachsen.
		Es kann aus dem Depot transferiert werden (40&nbsp;MB):
		<a href="http://mirror.slitaz.org/iso/cooking/slitaz-cooking.iso"
			>slitaz-cooking.iso</a>
		[ <a href="http://mirror.slitaz.org/iso/cooking/slitaz-cooking.md5"
			>md5</a> ]
	</p>
	</li>
	
</ul>

<!-- End of news -->
</div>

<h2 id="archives">Archivierte Neuigkeiten</h2>

<p>
	<img src="/images/news.png" alt="[ ]" />
	<a href="2007.php">2007</a> | <a href="2008.php">2008</a>
	| <a href="2009.php">2009</a> | <a href="2010.php">2010</a>
	| <a href="2011.php">2011</a> | <a href="2012.php">2012</a>
	| <a href="index.php">2014</a>
</p>

<p>
	Archive nach Jahrgängen.<br/>
	Bitte beachten Sie, dass einige Verknüpfungen ins Leere zeigen können, da die Struktur der
	Internetpräsenz geändert wurde (hauptsächlich wurde die Dokumentation unter einer eigenen Adresse
	abgelegt).
</p>

<!-- End of content -->
</div>

<?php include("../../lib/html/footer.html"); ?>

</body>
</html>
