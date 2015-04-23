<!DOCTYPE html>
<html lang="de">
<head>
	<meta charset="utf-8"/>
	<title>SliTaz - Neuigkeiten Archiv</title>
	<meta name="description" content="SliTaz GNU/Linux Deutch Neuigkeiten Archiv"/>
	<meta name="keywords" lang="de" content="slitaz Neuigkeiten"/>
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
		<h4>Neuigkeiten Archiv</h4>
		<p>
			Neuigkeiten Archiv
		</p>
	</div>
</div>

<?php include("../../lib/lang.php"); ?>

<!-- Content -->
<div id="content">

<div id="news">

<h2>2007-2009</h2>

<ul>
	<li>
		<strong>16 April 2009 - Veröffentlichung von SliTaz GNU/Linux 2.0</strong>
	<p>
	Das SliTaz-Projekt verkündet stolz das Erscheinen der neuen stabilen
	Version:   SliTaz GNU/Linux 2.0. Diese neue Version ist das Ergebnis
	einjähriger Arbeit; sie bietet ein ultraschnelles, leichtes
	und stabiles Betriebssystem. inklusive graphischer Oberfläche auf einem
	ISO-Image von unter 30MB. Mittlerweile umfasst das Angebot im
	Software-Repositorium etwa 1400 Pakete (installierbar über einen
	Paketmanager mit wenigen Mausklicks). Wifi-Support,
	das automatische Mounten von Partitionen (auch NTFS), Netzwerk-booting
	mittels gPXE von <a href="http://boot.slitaz.org/">boot.slitaz.org</a>,
	automatische Detektion von USB und PCI Peripherie, eine GUI für den
	Paketmanager, ein Kontrollcenter und weitere graphische Tools zur
	Verwaltung werden mittlerweile angeboten. Ebenso wurde die Erstellung eines bootfähigen USB-Mediums
	vereinfacht. Die Standardversion enthält Firefox 3.0.8, FTP, LostIRC
	ePDFView, mtPaint, Transmission, Osmo und Alsaplayer. Weite Teile der
	Dokumentation wurden neu geschrieben. Für genauere Informationen lesen
	Sie bitte die <a href="/de/doc/releases/2.0/relnotes.de.html">Release Notes</a>.
	SliTaz GNU/Linux 2.0 steht zum <a href="/de/get/">Download auf</a> den
	offiziellen Mirrors bereit.</p></li>

	<li>
		<strong>20 März 2009 - SliTaz auf der Solutionslinux 2009 (Paris)</strong>
	<p>
	Das SliTaz-Projekt wird auf der Solutionlinux 2009 in Paris zugegen sein.
	Drei Mitglieder des Teams werden an dem dreitägigen Event teilnehmen,
	einige weitere Entwickler werden zeitweise ebenfalls anwesend sein.
	An dem Stand wird sich die Möglichkeit bieten verschiedene Rechner mit
	SliTaz zu testen (EeePc zum Beispiel), sowie einen eigenen bootfähigen SliTaz-
	USB-Stick zu erstellen. Ebenfalls werden SliTaz Live-CDs und USB-Sticks zum Verkauf
	angeboten werden.
	Natürlich ist es ebenfalls eine gute Gelegenheit die SliTaz-Mitglieder und -Entwickler
	kennenzulernen.<br />
	Website der Messe:
	<a href="http://www.solutionslinux.fr/">www.solutionslinux.fr</a>,
	<a href="http://www.solutionslinux.fr/associations.php?pg=2_7">Village associations</a>,
	<a href="http://www.solutionslinux.fr/exposant_fiche.php?id=763&amp;pg=2_4">SliTaz Stand</a>.
	</p></li>

	<li>
		<strong>28. Februar 2009 - Cooking 20090228</strong>
	<p>
	Kurz vor dem nächsten stabilen Release! -
	Das SliTaz Projekt stellt eine neue Cooking Version vor, mit weiteren Bugfixes,
	Updates, Verbesserungen und neuen Funktionen. PCI/USB - Erkennung wird nun durch
	Tazhw durchgeführt, Firmware kann über ein grafisches Tool leicht installiert werden.
	Tazndis hat ebenfalls eine einfache GUI bekommen. Der grafische Paketmanager ist nun
	im Umgang deutlich vereinfacht worden; Über Netbox können alle Netzwerkschnittstellen angezeigt und
	konfiguriert werden, Wifibox managet das WLAN.
	Neu ist auch ein Notifikationssystem und die Verwaltung der Autostart-Einträge.
	Die neue Cooking kann von einem der offiziellen Mirrors heruntergeladen werden
	(siehe <a href="/de/get/">Downloadsektion</a>).
	</p></li>

	<li>
		<strong>31. Dezember 2008 - Cooking 20081231 - Wifi und NTFS Unterstützung</strong>
	<p>
	Das SliTaz Projekt veröffentlicht eine neue Cooking-Version.
	Alle Neuerungen, Bugfixes und Updates
	der letzten Monate können getestet bzw. verwendet
	werden. Wieder sind einige Änderungen vorgenommen worden. SliTaz
	beinhaltet nun ein eigenes Kontrollzentrum und WiFi Unterstützung mit
	Netbox und tazndis, einer verkleinerten Version von ndiswrapper für
	den Gebrauch von (proprietären) Windows-Treibern. Lua (Interpreter)
	wurde durch Perl ersetzt, MPlayer wurde aus den Standard-Paketen
	der Live-CD entfernt. Tazpkg ist noch mächtiger geworden, so werden
	nun Updates nach den Build-Zeiten des Paketes ausgeführt.
	Auch einige Bugs wurden behoben. Ebenfalls verbessert wurden die
	Boot-Skripte und Tazlito. Die Paketquelle der Cooking-Version umfasst
	nun (dank der Arbeit vieler Entwickler) mehr als 1100 Pakete.
	Zum Herunterladen gibt es die neue Version  von den offiziellen Mirrors
	des Projektes (siehe <a href="/de/get/">Downloadsektion</a>).
	</p></li>
	
	<li>
		<strong>16. Juli 2008 - Neue Cooking-Version (20080716) - Web Boot und MPlayer!</strong>
	<p>
	Diese Cooking-Version enthält viele neue Funktionen und Bugfixes. So existiert nun mit der Boot-Option
	<code>web</code> die Möglichkeit SliTaz mit Hilfe von gPXE über das Internet zu starten:
	<a href="http://boot.slitaz.org/">boot.slitaz.org</a>.
	3 MB schwerer wurde SliTaz-Cooking, dafür
	beinhaltet SliTaz einige Neuerungen: Der Multimediaplayer MPlayer, ein Desktop-Notizzettel namens Notecase,
	eine neue Version des Paketmanagers Tazpkg mit md5sum-Support, XFS
	Dateisystemunterstützung des Kernels, ein 'man' Kommando
	sind nur einige Beispiele. Für den Bootvorgang und flüssiges Arbeiten wird ein mindestens 160 MB großer Arbeitsspeicher
	benötigt, für ältere Rechner, die diesen Anforderungen nicht genügen existiert eine modifizierte
	<a href="/de/get/flavors.php">Loram Version</a>. <br />
	<a href="/de/get/#cooking">Download SliTaz Cooking ISO</a>.
	</p></li>

	<li>
		<strong>26. Juni 2008 - Cooking 20080626 mit neuem Kernel</strong>
	<p>
	Der Sommer ist angekommen und mit ihm die neue Cooking-Version vom 26. Juni. Viel
	Arbeit wurde diesmal darauf verwendet, das System benutzerfreundlicher zu machen.
	Der Standard-User heißt nun <code>tux</code>, mit der Option
	<code>user=name</code> kann er aber leicht verändert werden. Ein Großteil
	der Anwendungen wurde überarbeitet: Tazpkgbox bietet nun
	einige neue Befehle für das Softwaremanagement, Bootfloppybox kann in einem Text-Modus verwendet
	werden, Netbox Wifi und PPPoE-Support arbeiten nun stabil. Bestehende Anwendungen
	wurden auf den neuesten Stand gebracht, so zum Beispiel
	Firefox auf die neueste Version 3.0. Ein neuer Kernel (2.6.25.5) mit vielen integrierten Treibern und
	Modulen verrichtet nun seine Arbeit in SliTaz. Downloaden kann man die 25,2MB große Version
	<a href="/de/get/#cooking">vom SliTaz-Mirror</a>. Bugs sind bitte
	über das <a href="http://bugs.slitaz.org">Bug Tracking System</a>
	zu melden.
	</p></li>

	<li>
		<strong>18. Mai 2008 - Cooking 20080518 und LinuxDays.ch</strong>
	<p>
	Eine neue Cooking Version steht nun zum Download!!! Grundlegende Änderungen wurden
	vorgenommen. So nutzt SliTaz jetzt Openbox als Standard-Fenstermanager, Tazpkg kann über eine grafische
	Oberfläche verwendet werden, Dienste mounten automatisch
	USB-Sticks oder Festplatten. Tazpkgbox, Mountbox und Netbox sind
	nun vollständig benutzbar. Außerdem wurde ein lua-Interpreter, eine Suchmaschine (Searchmoneky) zum
	Auffinden von Dateien und Ordnern, ein Taskmanager (LXTask), eine Zwischenablage
	und eine Verwaltungssoftware für Passwörter hinzugefügt. Alle wichtigeren
	Pakete haben ein Update bekommen, so glibc (2.7), GTK (2.12.9) und Firefox (3.0 RC2).
	Die Anzahl der Pakete auf den Mirrors hat sich auf etwa 580 erhöht, enthalten sind jetzt
	auch Wireless-Tools (wpa-Supplicant..).
	Die Cooking-Version steht auf dem SliTaz-Mirror zum <a href="/de/get/#cooking">Download</a>.
	Übrigens: Diese Version wird auf dem
	<a href="http://www.linuxdays.ch/">LinuxDay.ch</a> in Genf (Schweiz) genutzt werden.
	</p></li>

	<li>
		<strong>22. März 2008 - SliTaz GNU/Linux 1.0 Release</strong>
	<p>
	Das SliTaz Entwicklerteam darf mit Stolz das stabile Release SliTaz GNU/Linux 1.0 ankündigen.
	Nach zwei Jahren Entwicklung ist das die erste stabile Version.
	In einem 24,8 MB großen ISO-Image stellt die Live-CD ein schnelles, voll funktionsfähiges
	Betriebssystem mit grafischer Oberfläche und einer Auswahl üblicher, sinnvoller Software bereit.
	Enthalten sind unter anderem der Linux Kernel 2.6.24.2, Firefox 2.0.0.12,
	Rsync 3.0.0, Gparted 0.3.5 und Sound-Unterstützung mit Alsa 1.0.16.
	Sie können Musik hören, im Internet surfen, Dokumente bearbeiten, betrachten und erstellen,
	weitere Software installieren und damit den Einsatzbereich vom
	Einsatz als Rettungssystem bis hin zur Multimediabearbeitung erweitern. 448 Pakete stellt
	SliTaz Ihnen hierfür in den Paketlagern (Software-Repositories) zur Verfügung.
	Weiter bietet SliTaz 1.0 Entwicklern auch die Möglichkeit modifizierte (mit Tazlito)
	Versionen zu erstellen. Auch der Einsatz als Live-USB-System ist leicht möglich.<br />
	Sicherheitsupdates werden ebenso wie Softwareupdates weiterhin veröffentlicht
	werden. Herunterladen können Sie SliTaz 1.0 vom
	<a href="/de/get/#stable">SliTaz Mirror</a> . Lesen Sie bitte auch die
	<a href="/de/doc/releases/1.0/relnotes.de.html">"Release Notes"</a> und die
	<a href="http://doc.slitaz.org/en:handbook:installation">
	Übersicht über die installierten Programme</a> für detailliertere
	Informationen zur stabilen Version SliTaz 1.0.
	</p></li>

	<li>
		<strong>26. Februar 2008 - Cooking-Version (20080225) Update!</strong>
	<p>
	Ein weiteres Update der Cooking-Version ist veröffentlicht. Wieder mit einigen Bugfixes, neuen
	Bootoptionen und Softwareupdates, wie Alsa 1.0.16, PHP 5.2.5, Htop 0.7, Firefox 2.0.0.12,
	Nano 2.0.7 und Sqlite 3.5.6. Die Option <code>home=*</code> unterstützt nun auch
	UUIDs oder Labels (Danke Andrew). Mit dem Kommando <code>laptop</code> werden
	automatisch Kernelmodule für Laptops (Batterie) geladen. Desweiteren besteht durch ein neues SliTaz
	Tool, TazUSB, die Möglichkeit mit einem einzigen Befehlen einen USB-Stick bootfähig zu machen.
	Damit ist SliTaz bereit für die stabile Version 1.0. Momentan wird an den
	"Release Notes" und einem neuen Repository gearbeitet.
	Die Cooking-Version gibt es zum
	<a href="/de/get/#cooking">Download</a> auf der SliTaz Website.
	</p></li>

	<li>
		<strong>10. Januar 2008 - Neue Cooking-Version (20080107)</strong>
	<p>
	Der Roadmap zur stabilen Version folgend, wird heute (10.Januar 2008) eine
	neue Cooking mit einer Menge Bugfixes und neuen Funktionen veröffentlicht.
	Als neue Anwendung sind Asunder, mit dem es möglich ist Audio CDs zu rippen,
	Burnbox, um ISO-Images auf CD zu brennen, sowie eine neue Bootoption, die Kernel Module
	(<code>modprobe=modules</code>) lädt hinzugekommen. Die Live-CD verwendet nun Xvesa,
	ein Derivat von Xorg 7.2. Sämtliche SliTaz Tools wurden mit Updates versorgt.
	Tazpkg kann nun von einem laufendem System Pakete packen, Tazlito mit nur einigen Kommandos
	eine angepasste Live-CD erstellen und Tazwok Abhängigkeiten bei der Paketerstellung
	aus Quellcode prüfen. Um an die neue Version zu gelangen, schauen Sie bitte
	in die <a href="/de/get/#cooking">Download Sektion</a>
	</p></li>

	<li>
		<strong>16. Dezember 2007 - Neues Forum</strong>
	<p>
	Nun gibt es für SliTaz ein englischsprachiges Support-Forum:
	<a href="http://forum.slitaz.org/forum/de">English Forum</a>
	Seitdem das Projekt auf der französischen Sprache basiert habe wir eine Menge
	Zusprüche und Anfragen von der englisch sprechenden Gemeinde bekommen, die
	wir hiermit belohnen wollen. Das Forum hat eine eigene Domain:
	<a href="http://forum.slitaz.org/">forum.slitaz.org</a>. SliTaz ist standardmäßig
	auf französisch, die Spracheinstellung kann aber nach dem Login geändert werden.
	Wir arbeiten momentan auch an einer englischen Dokumentation, für dieses Projekt ist Hilfe
	natürlich herzlich willkommen.
	</p></li>

	<li>
		<strong>06. Dezember 2007 - In zwei Tagen eine neue Version, die zweimal so schnell bootet!</strong>
	<p>
	Mit der neuen lzma Kompression verringert sich die Zeit für den Bootvorgang drastisch. Nach zwei Tagen
	durchgehender Arbeit steht eine neue Version zur Verfügung, die nur die halbe Zeit für den
	Bootvorgang benötigt. Außerdem sind ein lzma-Patch für den Kernel sowie einige Bugfixes	für den
	Bootvorgang vorhanden. Tests ergaben, dass die Live-CD jetzt auf neueren PCs zwischen 20 und 30 Sekunden,
	auf älteren 60 bis 80 Sekunden für den Bootvorgang benötigt.
	<a href="/de/get/#cooking">Download</a>.
	</p></li>

	<li>
		<strong>04. Dezember 2007 - Neue Cooking-Version mit Sound Unterstützung</strong>
	<p>
	Besserer Hardware-Support auf der Live-CD, wie Sound- und PCMCIA-Unterstützung sind der Grund
	für eine weitere Cooking vor dem stabilen Release 1.0. Das hat eine komplette Neugestaltung der Roadmap
	erforderlich gemacht. Das Releasedatum hat sich auf März 2008 verschoben, ein Jahr nach
	der ersten Veröffentlichung von SliTaz. In dieser Zeit wird SliTaz neben den ganzen neuen Funktionen
	auch hochstabil werden. <br />
	Diese Cooking-Version enthält Alsa und den zugehörigen Mixer, Alsaplayer, mpg123, Gcolor2,
	pcmciautils und einen neuen Kernel. Dazu gibt es noch eine neue Bootoption und isapnptools
	für sehr alte Hardware wie IBM GL300 6272/6282 oder P133/32M. All das passt in
	das ISO-Archiv mit einer Größe von 22,4 MB. Die "Simple
	Light Incredible Temporary Autonomous Zone" eben! SliTaz (cooking) LiveCD ist vom SliTaz Mirror
	zu beziehen.  <a href="/de/get/#cooking">Download</a>. Enjoy!
	</p></li>

	<li>
		<strong>06. November 2007 - Letzte Cooking-Version vor 1.0 Release</strong>
	<p>
	Die letzte Cooking vor dem 1.0 Release ist veröffentlicht!
	Neu sind auf dem 24,7 MB großen ISO-Image PHP 5.2.5, Grsync, ISO Master 1.2,
	Busybox 1.7.2, ein neues GTK-Theme, Tango-Icon-Theme und ein neues Wallpaper.
	Zum kostenlosen <a href="/de/get/#cooking">Download</a>  gibt es SliTaz wie immer vom TuxFamily Mirror.
	Feedback ist willkommen, nutzt dazu bitte die Mailing List oder eine normale
	E-Mail an &lt;devel at Slitaz.org&gt;.
	</p></li>

	<li>
		<strong>12. Oktober 2007 - Neue Cooking-Version und Erhöhung der Stabilität</strong>
	<p>
	Das 24 MB großen ISO-Image enthält Firefox 2.0.0.7,
	Linux Kernel 2.6.22.9, Rsync, ISO Master 1.1, LightTPD 1.4.18, SQLite 3.5.1,
	ein neues Theme und Hintergrundbild. Ebenso wurde die Paketverwaltung mit
	Tazwok und den SliTaz-Tools ausgebaut. Mit Transmission 0.82 ist es nun möglich Torrent-Filesharing
	zu nutzen.
	SliTaz (cooking) LiveCD kann kostenlos bei "TuxFamily" heruntergeladen werden.
	<a href="/de/get/#cooking">Download</a>.
	</p></li>
</ul>

</div>

<!-- End of content -->
</div>

<?php include("../../lib/html/footer.html"); ?>

</body>
</html>
