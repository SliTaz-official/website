<!DOCTYPE html>
<html lang="de">
<head>
	<meta charset="utf-8"/>
	<title>SliTaz - Entwicklung</title>
	<meta name="description" content="SliTaz GNU/Linux LiveCD"/>
	<meta name="keywords" lang="en" content="slitaz download, get slitaz"/>
	<meta name="author" content="F Steiner (Sevala)"/>
	<?php include("../../lib/html/meta-link.html"); ?>
</head>
<body>

<?php
include("../../config.php");
include("../../lib/html/header.html");
include("../../lib/html/nav.de.html");
include("../../lib/lang.php");
?>

<!-- Content -->
<div id="content">

<h2>Entwicklung von SliTaz</h2>

<p>
	SliTaz is a community based distribution made by many people all over 
	the world and everyone is welcome to help and get involve in the project.
	<a href="http://scn.slitaz.org/">Join us on SCN</a> and the 
	<a href="../mailing-list.php">mailing list</a>
</p>

<ul>
	<li><a href="#repos">Mercurial Repositories.</a></li>
	<li><a href="#pkgs">Tazpkg Pakete.</a></li>
	<li><a href="#website">Website Management.</a></li>
	<li><a href="../mailing-list.php">Mailing List.</a></li>
	<li><a href="http://doc.slitaz.org/en:cookbook:wok">Wok &amp; Tools.</a></li>
	<li>Mercurial Repositories: <a href="http://hg.slitaz.org" >hg.slitaz.org</a></li>
	<li>SliTaz Laboratories: <a href="http://labs.slitaz.org/">labs.slitaz.org</a></li>
</ul>

<p>
SliTaz ist ein Opensource-Projekt, das von einer Community entwickelt wird.
Jeder kann und darf gerne dazu seinen Beitrag leisten, Nutzer, Grafiker oder
Programmierer sind gleichermassen willkommen, es gibt immer etwas zu tun. Sei
es das Vervollständigen des <a href="http://doc.slitaz.org/de:start">Wikis</a> und der
Dokumentation, Bugs im <a href="http://bugs.slitaz.org">Bug Tracking System</a>
melden, neue Pakete zu erstellen
und sie auf die Mirrors hochladen oder einfach anderen SliTaz-Nutzern im
Forum oder der Mailing-List zu helfen.
</p>

<p>
SliTaz besitzt eine kleine Community und hört auf die Nutzer. Viele der Entwickler
sind im <a href="http://forum.slitaz.org/">Forum</a> und der
<a href="../mailing-list.php">Mailing Liste</a> selbst aktiv. Einfach in der
jeweiligen Sprache/Forum ansprechen.
</p>

<h2 id="repos">Mercurial Repositories</h2>

<p>
Die Website, Konfigurationsdateien und Skripte von SliTaz werden über das
Mercurial Repository verwaltet.
SliTaz Mercurial oder "Hg Repositories" können von jedem unter der Addresse
<a href="http://hg.slitaz.org/">http://hg.slitaz.org/</a> angesehen werden.
Leute mit Schreibzugriff können über folgende Adresse
direkt auf das Repositorium zugreifen:
<code>repos.slitaz.org</code>, Nutzername und Passwort sind dabei erforderlich.
Mercurial arbeitet mit Python, unter SliTaz lässt es sich mit
<code>tazpkg get-install mercurial</code> installieren.
</p>

<h4>~/.hgrc</h4>

<p>
Bevor Du Deinen ersten Beitrag leistest, stelle bitte sicher, dass
die Konfigurationsdatei (.hgrc) für das Repository vorhanden und richtig
konfiguriert ist. Es sollte Deine E-Mail-Adresse enthalten, sowie den Nutzernamen
(üblicherweise kein Pseudonym). Beispiel einer lokalen, persönlichen
Datei ~/.hgrc :
</p>
<pre class="script">
[ui]
username = Vorname Nachname &lt;you@example.org&gt;
</pre>

<h4>"Clone", "modify", "commit" und "push"</h4>

<p>
Die repositories werden über die Kommandozeile verwaltet. Zuerst erstellt man eine
lokale Kopie:
</p>
<pre>
 $ hg clone http://repos.slitaz.org/website
</pre>
<p>
Im Dateimanager in das erstellte Verzeichnis wechseln. Um alle
Änderungen anzuzeigen dient der Befehl <code>log</code>
(mit der Option <code>log -l 2</code> nur die
beiden letzten Änderungen). <code>head</code> zeigt den letzten Logeintrag an.
Damit diese Befehle funktionieren musst Du Dich im lokalen Verzeichnis befinden!
</p>
<pre>
 $ hg log
 $ hg head
</pre>
<p>
Nach dem Editieren einer Datei, den Status abrufen:
</p>
<pre>
 $ hg status
</pre>
<p>
Soll eine Datei neu hinzugefügt werden, muss vorher der Befehl <code>add</code> verwendet werden.
Nun noch nach zwischenzeitlichen Neuerungen anfragen, und, falls welche existieren,
mit <code>update</code> in Deine Änderungen einfügen.
</p>
<pre>
 $ hg pull
</pre>
<p>
Nun die Änderungen in das lokale Logbuch eintragen:
</p>
<pre>
 $ hg commit -m "Logeintrag, kurze und kräftige Aussagen bitte..."
 $ hg log
</pre>
<p>
Um nun Deine Änderungen auf dem Server zu veröffentlichen
</p>
<pre>
 $ hg push
</pre>
<p>
Das war es auch schon; nach ein bisschen Eingewöhnungszeit geht es leicht von der Hand.
Mit dem Befehl <code>rollback</code> können die letzten Änderungen übrigens
wieder rückgängig gemacht werden.
</p>

<h2 id="pkgs">Tazpkg Pakete</h2>

<p>
Tazpkg Pakete werden bei SliTaz automatisch via Cookutils und einem "Rezept"
generiert.
</p>
<p>
Zuerst zur Auswahl des Paketes. Es sollen nur Pakete angeboten werden,
die nützlich erscheinen und funktionabel sind. Dabei bitte das kleinste
Paket aus der Anwendungskategorie verwenden. Existiert schon eine Anwendung
aus dem Bereich, bitte nicht noch ein ähnliches Paket erstellen.
Wenn Du aber eine Alternative dafür findest, die leichter ist, oder mehr Funktionalität
für ein paar kB mehr bietet, stelle es in der Mailing-List zur Diskussion.
Besondere Anforderungen werden an Pakete gestellt, die auf der Live-CD
mitgeliefert werden sollen. Erleichtern des Codes, Auflösen unnötiger
Abhängigkeiten gehören zur Selbstverständlichkeit!
Allgemein werden solche Pakete vorerst ebenfalls in der Mailing-List zur
Diskussion gestellt.
</p>
<p>
Bevor Du beginnst zu kompilieren und aus den Dateien ein SliTaz-Paket zu erstellen,
pprüfe, ob ein ähnliches, oder sogar gleiches Paket nicht schon
Auf dem SliTaz Mirror (v.a. Sektion "indigest") zur verfügung steht.
Nicht vergessen, die Mitglieder der Mailing-List stehen Dir gerne
zur Verfügung, ebenso das
<a href="http://hg.slitaz.org/tazwok/raw-file/tip/doc/tazwok.en.html">Tazwok Manual</a>.
</p>

<h2 id="website">Website Management und Handbuch</h2>

<p>
Das Management der Website findet über das Mercurial Repository
statt. Dazu gibt es einige Tools:<br />
<code>rsync</code> ist ist ein Synchronisierungstool, lokal und fürs Netzwerk. Es nutzt einen
enorm schnellen und kleinen Algorithmus, der es zu einer nützlichen Anwendung macht.
<code>diff</code> wird dafür verwendet, Logs hochzualden, <code>patch</code>
dient des Uploads des eigentlichen Inhalte.
<br /><br />
Das deutsche Handbuch ist vollständig ins Wiki verlegt, jeder kann sich gerne daran
konstruktiv beteiligen. Eine Anmeldung ist erforderlich.
</p>
<p>
Als grafische Oberfläche kann Grsync dienen, schneller geht es aber über die
Kommandozeile. Um die Seite zum ersten Mal in das  Vezeichnis
<code>/home/tux/Public/slitaz/website</code> herunterzuladen:
</p>
<pre>
 $ rsync -r -t -p -v \
       --progress --delete \
       rsync://slitaz.org/website /home/tux/Public/slitaz/website
</pre>

<h3>Diff und patch</h3>

<p>
Die Anwendungen <code>diff</code> und <code>patch</code> sind Kommando-Zeilen
Tools zur Erzeugung von Unterschieden zwischen zwei Dateien.
Diese Methode wird häufig bei Zusammenarbeit genutzt, Veränderungen und Metadaten
können leicht und schnell eingesehen werden.
Um eine <code>diff</code> Datei zu erstellen, die in einem Texteditor gelesen werden kann
dient die Option <code>-u</code> :
</p>
<pre>
 $ diff -u file.orig file.new &gt; file.diff
</pre>
<p>
Um den Patch zu übernehmen:
</p>
<pre>
 $ patch file.orig file.diff
</pre>

<!-- End of content -->
</div>

<?php include("../../lib/html/footer.html"); ?>

</body>
</html>
