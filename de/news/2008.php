<!DOCTYPE html>
<html lang="de">
<head>
	<meta charset="UTF-8">
	<title>SliTaz - archivierte Neuigkeiten 2008</title>
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

<h2>2008</h2>

<div class="news">

<ul>
	<li>
		<strong>31. Dezember 2008 - Entwicklung 20081231 - Drahtlosnetzwerk- und NTFS-Unterstützung</strong>
	<p>
	Das SliTaz-Team ist stolz, die Freigabe einer neuen Entwicklungsversion ankündigen zu können.
	Damit können alle Neuerungen, Fehlerkorrekturen und Aktualisierungen
	der letzten Monate getestet und verwendet werden.
	SliTaz beinhaltet nun ein eigenes Kontrollzentrum und die Unterstützung für Drahtlosnetzwerke mit
	Netbox und tazndis, einer verkleinerten Version von ndiswrapper für
	den Gebrauch von (proprietären) Windows-Treibern für Netzwerkadapter. Der Lua-Interpreter
	wurde durch Perl ersetzt, MPlayer wurde aus den Standard-Paketen
	des Direktstart-ISO-Abbildes entfernt. Tazpkg ist noch mächtiger geworden: es ermöglicht die
	Sicherung von Konfigurationsdateien (in einem Paket), die Aktualisierung von
	Paketen gemäß ihrem Erstellungsdatum und die Beibehaltung von Protokolldateien.
	Auch wurden einige Fehler behoben. Ebenfalls verbessert wurden die
	Kommandoprozeduren für die Systemeinleitung und Tazlito. Das Depot der Entwicklungs-Version enthält
	jetzt, dank der Arbeit vieler Entwickler, mehr als 1100 Pakete.
	Die neue Version kann aus den offiziellen Depots <a href="../get/#cooking">transferiert</a>) werden.
	</p></li>

	<li>
		<strong>16. Juli 2008 - Neue Entwicklungs-Version (20080716) - Laden über Netzwerk und MPlayer</strong>
	<p>
	Das SliTaz-Team ist stolz, die Freigabe einer neuen Entwicklungsversion ankündigen zu können.
	Diese Version enthält viele neue Funktionen und Fehlerkorrekturen. So kann jetzt mit der Urlade-Option
	<code>web</code> SliTaz mit Hilfe von gPXE über das Internet von
	<a href="http://boot.slitaz.org/">boot.slitaz.org</a> geladen werden.
	So kann SliTaz im Direktstartmodus (vollständig im Arbeitsspeicher) genutzt werden, wobei mithilfe von
	Optionen Nutzerdaten und Konfigurationsdateien auf Speichermedien abgelegt werden können.
	Diese Entwicklungs-Version ist 3 MB größer geworden, enthält damit aber auch
	das Multimedia-Abspielprogramm MPlayer, eine Notizzettelfunktion namens Notecase,
	eine neue Version der Paketverwaltung Tazpkg mit md5sum-Unterstützung, XFS-Dateisystemunterstützung
	integriert in den Linux-Kern, ein <code>man</code>-Kommando und einige Aktualisierungen.
	Diese Version benötigt mindestens 160 MB Arbeitsspeicher zum Ablauf.
	Für ältere Rechner, die diese Anforderungen nicht erfüllen, existieren
	<a href="/de/get/flavors.php">Loram-Varianten</a>. <br />
	<a href="/de/get/#cooking">Transferieren des SliTaz-ISO-Abbilds</a>.
	</p></li>

	<li>
		<strong>26. Juni 2008 - Entwicklungs-Version (20080626) mit neuem Linux-Kern</strong>
	<p>
	Der Sommer ist gekommen und mit ihm die neue Entwicklungs-Version vom 26. Juni. Diesmal wurde
	viel Arbeit darauf verwendet, das System benutzerfreundlicher zu machen.
	Die Entwicklungs-Version beinhaltet einen neuen Linux-Kern (2.6.25.5), der viele neue integrierte
	Treiber	und Module enthält. Das Paket <code>linux</code> wurde aufgeteilt, um einen modularen
	Kern zu erhalten.
	Die Standard-Benutzerkennung heißt nun <code>tux</code>, mit der Option
	<code>user=name</code> kann diese aber leicht verändert werden. Ein Großteil
	der Anwendungen wurde überarbeitet: Tazpkgbox bietet nun
	einige neue Befehle für die Paketverwaltung, Bootfloppybox kann im Textmodus verwendet
	werden, Netbox Wifi und PPPoE-Unterstützung funktionieren nun stabil und es gibt eine neue
	Funktion namens <code>zeroconf</code>. Bestehende Anwendungen
	wurden auf den neuesten Stand gebracht, so zum Beispiel
	Firefox auf die neueste Version 3.0. Transferieren kann man die 25,2 MB große Version aus dem
	<a href="/de/get/#cooking">SliTaz-Depot</a>. Fehler können
	über das <a href="http://bugs.slitaz.org">SliTaz-Fehlermeldesystem</a>
	gemeldet werden.
	</p></li>

	<li>
		<strong>18. Mai 2008 - Entwicklungs-Version (20080518) und LinuxDays.ch</strong>
	<p>
	Das SliTaz-Team ist stolz, die Freigabe einer neuen Entwicklungsversion ankündigen zu können,
	die grundlegende Änderungen gegenüber der stabilen Version enthält.
	So nutzt SliTaz jetzt Openbox als Standard-Fensterverwaltung, Anwendungen können über
	Symbole auf der grafischen Oberfläche gestartet werden und die Dienste <code>dbus</code> und
	<code>hal</code> hängen automatisch Wechseldatenträger ein.
	Pakete können jetzt im Grafikmodus mit Tazpkgbox verwaltet werden, Mountbox und Netbox sind
	nun vollständig benutzbar. Außerdem wurde dem Direktstart-ISO-Abbild ein lua-Interpreter,
	ein Suchprogramm (<code>searchmonkey</code>) zum Auffinden von Dateien und Ordnern,
	ein Taskmanager (LXTask), eine Zwischenablage und eine Verwaltungssoftware für Kennwörter hinzugefügt.
	Alle wichtigeren Pakete wurden aktualisiert, so glibc (2.7), GTK (2.12.9) und Firefox (3.0 RC1).
	Die Anzahl der Pakete im Depot hat sich auf etwa 580 erhöht, enthalten sind jetzt
	auch Pakete für die Unterstützung von Drahtlos-Netzwerken, sowohl für den Linux-Kern als auch
	Verwaltungsprogramme.
	Die Entwicklungs-Version steht im SliTaz-Depot zum <a href="/de/get/#cooking">transferieren</a>
	bereit.
	Übrigens: Diese Version wird auf dem
	<a href="http://www.linuxdays.ch/">LinuxDay.ch</a> in Genf (Schweiz) genutzt werden.
	</p></li>

	<li>
		<strong>22. März 2008 - SliTaz GNU/Linux Freigabe 1.0</strong>
	<p>
	Das SliTaz-Entwicklerteam ist stolz, die Freigabe der stabilen SliTaz GNU/Linux-Version 1.0
	ankündigen zu können.
	Nach zwei Jahren Entwicklung ist das die erste stabile Version.
	In einem 24,8 MB großen Direktstart-ISO-Abbild steht ein schnelles, voll funktionsfähiges
	Betriebssystem mit grafischer Oberfläche und einer Auswahl üblicher, sinnvoller Software bereit.
	Enthalten sind unter anderem der Linux-Kern 2.6.24.2, Firefox 2.0.0.12,
	Rsync 3.0.0, Gparted 0.3.5 und Audio-Unterstützung mit Alsa 1.0.16.
	Sie können Musik hören, im Internet surfen, Dokumente bearbeiten, betrachten und erstellen,
	weitere Software installieren und damit den Einsatzbereich vom
	Einsatz als Rettungssystem bis hin zur Multimediabearbeitung erweitern. 448 Pakete stellt
	SliTaz Ihnen hierfür in den Paketlagern (Depots) zur Verfügung, die mit <code>tazpkg</code>
	installiert werden können.
	Weiter bietet SliTaz 1.0 Entwicklern auch die Möglichkeit, (mit Tazlito) modifizierte 
	Varianten zu erstellen. Auch der Einsatz als USB-Direktstart-System ist leicht möglich.<br />
	Sicherheitsaktualisierungen werden ebenso wie Aktualisierungen verbreiteter Software
	weiterhin veröffentlicht werden. Transferieren können Sie SliTaz 1.0 vom
	<a href="/de/get/#stable">SliTaz-Depot</a>. Detailliertere Informationen über die
	stabile Version SliTaz 1.0 finden Sie in der
	<a href="/de/doc/releases/1.0/relnotes.de.html">Freigabemitteilung</a>.
	</p></li>

	<li>
		<strong>26. Februar 2008 - Entwicklungs-Version (20080225) aktualisiert</strong>
	<p>
	Das SliTaz-Team ist stolz, die Freigabe einer neuen Entwicklungsversion ankündigen zu können,
	die viele Fehlerkorrekturen, neue Urladeoptionen und einige aktualisierte Pakete enthält, wie
	Alsa 1.0.16, PHP 5.2.5, Htop 0.7, Firefox 2.0.0.12,	Nano 2.0.7 und
	Sqlite 3.5.6. Die Option <code>home=*</code> unterstützt nun auch
	UUIDs oder Kennsätze (Dank an Andrew) und mit der Option <code>laptop</code> werden
	automatisch Module des Linux-Kerns für die Energieverwaltung geladen.
	Desweiteren können mit dem neuen TazUSB urladefähige USB-Datenträger erstellt werden.
	Damit ist SliTaz bereit für die stabile Version 1.0. Momentan wird an der Freigabemitteilung,
	dem endgültigen Design und einem neuen Depot für die stabile Version gearbeitet.
	Diese Entwicklungs-Version gibt es zum
	<a href="/de/get/#cooking">transferieren</a> auf der SliTaz-Internetpräsenz.
	</p></li>

	<li>
		<strong>10. Januar 2008 - Neue Entwicklungs-Version (20080107)</strong>
	<p>
	Der Planung für die stabile Version folgend, wird eine neue Entwicklungs-Version mit
	vielen Fehlerkorrekturen und einigen neuen Funktionen veröffentlicht.
	Als neue Anwendungen sind Asunder, mit dem es möglich ist Audio CDs zu „rippen“,
	Burnbox, um ISO-Abbilder auf optische Datenträger zu schreiben, sowie eine neue Urladeoption 
	(<code>modprobe=modules</code>), die Module des Linux-Kerns nachlädt, hinzugekommen.
	Das Direktstart-ISO-Abbild verwendet nun Xvesa, ein Derivat von Xorg 7.2.
	Sämtliche SliTaz-Dienstprogramme wurden aktualisiert und mit neuen Funktionen ergänzt.
	Tazpkg kann nun von einem laufendem System Pakete packen, Tazlito kann mit wenigen Kommandos
	ein angepasstes Direktstart-ISO-Abbild erstellen und Tazwok Abhängigkeiten bei der Paketerstellung
	aus dem Quellcode prüfen. Um an die neue Version zu gelangen, schauen Sie bitte
	in den Bereich <a href="/de/get/#cooking">Software</a>
	</p></li>
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
