<!DOCTYPE html>
<html lang="de">
<head>
	<meta charset="UTF-8">
	<title>SliTaz - archivierte Neuigkeiten 2009</title>
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

<h2>2009</h2>

<div class="news">

<ul>
	<li>
		<strong>4. November 2009 - Neue Entwicklungs-Version (20091104)</strong>
	<p>
	Das SliTaz-Team ist stolz, die Freigabe einer neuen Entwicklungsversion mit mehr als 2100 Paketen
	im SliTaz-Depot ankündigen zu können.
	Das System wurde mit einem neuen Werkzeugkasten vollständig neu erstellt. Dieser
	verwendet Glibc 2.10.1 und GCC 4.4.1.
	Diese neue Entwicklungs-Version verwendet den Linux-Kern 2.6.30.6 mit besserer
	Hardware-Unterstützung und mehr integrierten Modulen. Der Urladevorgang wurde weiter
	verbessert und das Laden geht jetzt so schnell wie nie zuvor. Die wichtigsten Pakete
	in dem Direkstart-ISO-Abbild, so wie Firefox, wurden auf die aktuelle stabile Version gebracht.
	Selbsterstellte Grafikfenster wurden verbessert. Die Paketverwaltung <code>tazpkg</code> erhielt
	neue Funktionen, darunter das Umsetzen von Paketen der Formate deb, rpm, arch, slackware und ipk
	in das SliTaz-eigene Format. Das Direkstart-ISO-Abbild enthält ein neues Design für Openbox, GTK
	und Symbole für eine elegante und schönere grafische Oberfläche. ePDFview wurde durch ein
	„online“-PDF-Anzeigeprogramm ersetzt. Durch alldies ist das ISO-Abbild
	etwas größer als 30&nbsp;MB (31,5&nbsp;MB) geworden, hauptsächlich wegen des größeren Linux-Kerns und
	vieler neuer Abhängigkeiten.</p>
	<p>Wir teilen ebenfalls mit, dass das SliTaz-Projekt eine neue
	<a href="http://forum.slitaz.org/">Unterstützungsplattform</a> und eine neue
	<a href="http://scn.slitaz.org/">Platfform der Nutzergemeinschaft</a> hat, wo
	sich jeder gerne umsehen und beteiligen kann! Diese neue Entwicklungs-Version
	kann aus dem Bereich <a href="../get/#cooking">Software /a> transferiert werden.</p>
	</li>

	<li>
		<strong>19. Mai 2009 - SliTaz bei den LinuxDays 2009 (Genf)</strong>
	<p>
	Auf der Messe „LinuxDays“ in der Schweiz hat der Verein einen
	Stand im Vereinsdorf, wo am Mittwochvormittag ein Vortrag gehalten werden wird,
	der eine Fallstudie aus kommerzieller Sicht über die Benutzung eines 
	„SliTaz Business Server“ mit einem „switchboard“, integriertem ERP, mail, LDAP
	usw. zum Thema hat.
	</p>
	<p>
	Während der drei Messetage wird der Ausstellungsstand von Mitgliedern des
	SliTaz-Projekts bemannt sein. Dort wird unter anderem vorgeführt, wie urladefähige
	USB-Datenträger und optische Datenträger erzeugt werden. Das Direkstart-ISO-Abbild
	der „LinuxDays“ wird eine Auswahl an Software zum Einsatz auf mobilen Geräten
	enthalten. In der Messe-„lounge“ wird es auch ein SliTaz-Forum geben, wo wir gern
	Fragen aller Art beantworten. Sie sind herzlich eingeladen! Informationen finden Sie unter
	<a href="http://labs.slitaz.org/wiki/events/2009-linuxdays">SliTaz Labs</a>
	und der <a href="http://2009.linuxdays.ch/">Internetpräsenz</a> der „LinuxDays“.
	</p>
	</li>

	<li>
		<strong>16. April 2009 - Freigabe von SliTaz GNU/Linux 2.0</strong>
	<p>
	Das SliTaz-Projekt verkündet stolz die Freigabe der neuen stabilen
	Version SliTaz GNU/Linux 2.0. Diese neue Version ist das Ergebnis
	einjähriger Arbeit der Nutzergemeinschaft; sie bietet ein ultraleichtes, schnelles,
	skalierbares und stabiles Betriebssystem. In einem ISO-Abbild von weniger als
	30&nbsp;MB bietet SliTaz eine vollständige grafische Oberfläche, Anwendungen für eine
	zuverlässige und stabile Produktivumgebung und in den Depots sind
	etwa 1400 leicht zu installierende Pakete verfügbar.
	Die neue Version ermöglicht das automatische Einhängen von Partitionen (auch NTFS),
	unterstützt Drahtlos-Netzwerke, bietet Büroanwendungen nach den Freedesktop.org-Standards
	(ziehen und ablegen), ermöglicht Urladen über das Netzwerk mit gPXE von
	<a href="http://boot.slitaz.org/">boot.slitaz.org</a>,
	kann USB- und PCI-Geräte automatisch erkennen, hat eine Paket- und Systemverwaltung im Grafikmodus
	und weitere grafische Werkzeuge zur	Verwaltung des Systems.
	Ebenso wurde die Erstellung von Direkstart-ISO-Abbildern für USB-Datenträger und von Varianten
	vereinfacht und stark verbessert. Die „core“-Variante enthält Firefox 3.0.8, gFTP, LostIRC
	ePDFView, mtPaint, Transmission, Osmo und Alsaplayer. Weite Teile der
	Dokumentation wurden aktualisiert. Genauere Informationen über die stabile Version
	finden Sie in der <a href="/de/doc/releases/2.0/relnotes.de.html">Freigabemitteilung</a>.
	SliTaz GNU/Linux 2.0 steht in den offiziellen <a href="/de/get/">Depots</a> bereit.</p>
	</li>

	<li>
		<strong>27. März 2009 - Laboratorien und neue Depots</strong>
	<p>
	In unserem ständigen Bestreben, die Distribution und unsere Dienstleistungen zu verbessern,
	können wir jetzt stolz den Start von <a href="http://labs.slitaz.org/">SliTaz-Laboratorien</a> verkünden.
	Diese Plattform ermöglicht den Mitwirkenden eine effektivere Zusammenarbeit, das Melden von Fehlern
	oder die Anforderung neuer Funktionen. Die Laboratorien bieten jedem
	<a href="http://labs.slitaz.org/projects">Projekt</a> ein Wiki, ein Fehlermeldesystem,
	<a href="http://labs.slitaz.org/news">Neuigkeitens</a> usw.
	Die Laboratorien ermöglichen den Überblick über Aktivitäten in einem Projekt und
	die Verfolgung von regulären Aktualisierungen. Um teilzunehmen oder Kommentare abzugeben
	müssen Sie sich registrieren. Mit Stolz können wir auch zwei neue Spiegeldepots bekanntgeben:
	In der Schweiz bei <a href="http://mirror.switch.ch/">SWITCHmirror</a>
	(10&nbsp;Gb/s) und in China bei <a href="http://www.lupaworld.com">LupaWorld</a>.
	Vielen Dank für die Unterstützung.</p>
	</li>

	<li>
		<strong>20. März 2009 - SliTaz auf der Solutionslinux 2009 (Paris)</strong>
	<p>
	Das SliTaz-Projekt wird auf der Solutionslinux 2009 in Paris vertreten sein.
	Drei Mitglieder des Teams werden an der dreitägigen Veranstaltung teilnehmen,
	einige weitere Entwickler werden zeitweilig ebenfalls anwesend sein.
	An dem Stand wird sich die Möglichkeit bieten, verschiedene Rechner mit
	SliTaz zu testen (EeePc zum Beispiel), sowie einen eigenen urladefähigen
	SliTaz-USB-Datenträger zu erstellen. Ebenfalls werden optische und USB-Datenträger mit
	SliTaz-Direkstart-ISO-Abbildern zum Kauf angeboten werden.
	Natürlich ist es ebenfalls eine gute Gelegenheit, die SliTaz-Vereinsmitglieder und -Entwickler
	kennenzulernen.<br />
	Internetpräsenz der Messe:
	<a href="http://www.solutionslinux.fr/">www.solutionslinux.fr</a>,
	<a href="http://www.solutionslinux.fr/associations.php?pg=2_7">Village associations</a>,
	<a href="http://www.solutionslinux.fr/exposant_fiche.php?id=763&amp;pg=2_4">SliTaz-Stand</a>.
	</p>
	</li>

	<li>
		<strong>28. Februar 2009 - Neue Entwicklungs-Version (20090228)</strong>
	<p>
	Kurz vor Freigabe der nächsten stabilen Version! - Das SliTaz-Projekt stellt eine neue
	Entwicklungs-Version mit vielen Fehlerkorrekturen, Aktualisierungen,
	Verbesserungen und neuen Funktionen vor. PCI- und USB-Geräte-Erkennung wird nun von
	Tazhw durchgeführt, Firmware kann über eine grafische Oberfläche leicht mit einem Klick
	installiert werden.	Tazndis zur Verwaltung von Windows-Treibern hat ebenfalls eine
	einfache grafische Oberfläche bekommen. Die grafische Paketverwaltung ist nun
	in der Handhabung deutlich vereinfacht worden. SliTaz-Direkstart-ISO-Abbilder können jetzt leicht
	über ein Grafikfenster erzeugt werden. Mit Netbox können alle Netzwerkschnittstellen angezeigt und
	konfiguriert werden, Wifibox verwaltet das WLAN. In der grafischen Oberfläche gibt es jetzt auch 
	die Möglichkeit festzulegen, welche Anwendungen mit einer Openbox-Sitzung gestartet werden sollen.
	Neu ist auch ein Notifikationssystem mit Ivman und desktopbox.
	Die neue Entwicklungs-Version kann von einem der offiziellen Depots transferiert werden
	(siehe <a href="/de/get/">Software</a>).
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
