<!DOCTYPE html>
<html lang="de">
<head>
	<meta charset="utf-8"/>
	<title>SliTaz - Über SliTaz</title>
	<meta name="description" content="SliTaz GNU/Linux LiveCD"/>
	<meta name="keywords" lang="en" content="System, free, gnu, linux, software opensource, livecd LINUX in RAM"/>
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
<section id="content">

<h2>Über SliTaz</h2>
<p>
	Klein, schnell, stabil und anwenderfreundlich!
</p>
<ul>
	<li><a href="#intro">Einführung</a></li>
	<li><a href="#spec">SliTaz Spezifikationen</a></li>
	<li><a href="#overview">Steckbrief</a></li>
	<li><a href="#website">Internetpräsenz &amp; i18n</a></li>
	<li><a href="#reviews">Rezensionen</a></li>
	<li><a href="../asso/">Verein</a></li>
</ul>

<h2 id="intro">Einführung</h2>

<p>
SliTaz GNU/Linux ist ein freies und kostenloses Betriebssystem. Es wird von einem externen Speichermedium
(optischer Datenträger oder USB-Datenträger) vollständig in den Arbeitsspeicher geladen.
Die Installation auf Platte ist ebenfalls möglich. SliTaz wird als ISO-Abbild ausgeliefert, das sehr einfach
auf optische Datenträger geschrieben werden kann. Wenn SliTaz geladen ist, kann der Datenträger
entfernt werden und das Laufwerk für andere Zwecke genutzt werden. Der SliTaz-Direktstart-Datenträger
enthält eine vollständige grafische Oberfläche und ermöglicht es, eigene Daten und Einstellungen auf
USB-Datenträgern permanent zu speichern. Mit der Paketverwaltung <tt>tazpkg</tt> kann das System erweitert
werden. Sicherheitsaktualisierungen werden für die aktuelle und die stabilen Versionen angeboten.
</p>

<p>
Das SliTaz-Projekt bietet kostenlose technische Unterstützung an. Dazu stehen
Ihnen die <a href="../mailing-list.php">„Mailing List“</a> (i18n list) und das
<a href="http://forum.slitaz.org/">Benutzerforum</a> zur Verfügung.
Für Anregungen, Anfragen und mehr Informationen stehen wir Ihnen auch 
gerne per Mail zur Verfügung: &lt;devel(at)slitaz.org&gt;
</p>

<h2 id="spec">SliTaz-Spezifikationen</h2>

<p>
Das Standard ISO-Abbild enthält 4 Varianten: „base", „just-x", „gtk-only" und die
Variante mit vollständiger grafischer Oberfläche. SliTaz kann auch über das Netzwerk geladen werden.
Es kann den verschiedensten Anforderungen angepasst werden und auf vielerlei Hardware installiert werden:
auf alten Rechner bis hin zu leistungsstarken Rechnern und kleinen Rechner mit ARM-Architektur, wie
Raspberry Pi.
</p>

<p>
SliTaz ist auch für Linux-Anfänger leicht zu benutzen: es bietet eine vollständige und
moderne grafische Oberfläche, die den „Freedesktop“-Standards entspricht und selbstentwickelte 
Werkzeuge für die grafische Konfigurierung des gesamten Systems enthält. Mit unserer
web-basierten Konfigurierung kann das System sogar von einem anderen Rechner aus gesteuert werden.
</p>

<p>
Wir liefern eine „base"- und eine „just-x"-Variante, von denen ausgehend Sie Ihre eigene, angepasste
Variante erstellen können. Ein derart angepasstes System kann dann zum Laden von
optischen Datenträgern, USB-Datenträgern, SD-Karten, Platte oder über das Netzwerk verwendet werden.
</p>

<p>
SlTaz folgt der UNIX-Philosophie: d.h. alles ist eine Textdatei. Die Paketverwaltung
und alle Systemeinstellungen werden in einfachen Textdateien gespeichert. Damit sind sie
leicht zu modifizieren und gut lesbar. Die meisten Werkzeuge sind als Kommandoprozeduren
realisiert, auch dies um Anpassung und Entwicklung zu erleichtern.
</p>

<p>
Radikal vereinfachte Systemeinleitung mit 4 Kommandoprozeduren zum Konfigurieren des gesamten
Systems, die Ladeoptionen zu verarbeiten, das Netzwerk zu verwalten und weitere Kommandos auszuführen.
SliTaz lädt nur ein Minimum an Betriebsmitteln und überlässt die weitere Kontrolle dem Benutzer.
</p>

<p>
Wenn SliTaz von einem Direktstart-Datenträger oder von Platte in einer „sparsamen" Installation geladen wurde,
kann es vollständig im Arbeitsspeicher ablaufen. In dieser Betriebsart können Benutzerdaten in einer
eingehängten Partition eines (externen) Datenträgers gespeichert werden, während das System sehr schnell
und reaktionsschnell bleibt.
</p>

<p>
Strukturiertes Netzwerk tief in SliTaz integriert zur einfachen Navigation zwischen allen Rechnern
im Netzwerk. Strukturierte Entwicklung mit Mercurial und eigenen Werkzeugen wie <tt>bug tracker</tt>
und <tt>cookutils</tt>.
</p>

<h2 id="overview">Steckbrief</h2>

<ul>
	<li>Das installierte Betriebssystem umfasst etwa 100 MB, das ISO-Abbild weniger als 40 MB.</li>
	<li>Vorinstallierte Webserver mit CGI-Unterstützung und FTP-Server in Busybox</li>
	<li>Browser wie Midori, Firefox oder Lynx (im Textmodus).</li>
	<li>Audiounterstützung mit Alsa mixer, Audioplayer, CD-Ripper und -Encoder.</li>
	<li>Chat-, Mail- und FTP-Klienten.</li>
	<li>SSH-Client und -Server vermöge Dropbear.</li>
	<li>Datenbanksystem SQLite.</li>
	<li>Werkzeuge zum Generieren von Direktstart-ISO-Abbildern.</li>
	<li>Programme zum Schreiben von ISO-Abbildern auf optische Datenträger.</li>
	<li>Elegante grafische Oberfläche mit Openbox auf dem X-Server Xorg oder Xvesa.</li>
	<li>Selbsterstellte grafische Werkzeuge zum Ausführen von Kommandoprozeduren.</li>
	<li>4967 Pakete, die leicht aus einem Depot installiert werden können.</li>
	<li>Aktive und freundliche Nutzergemeinschaft.</li>
</ul>

<h2 id="website">Internetpräsenz &amp; i18n</h2>

<p>
Die SliTaz-Internetpräsenz gibt es in mehreren Sprachen und ist Bestandteil
des <a href="/i18n.php">"Internationalisierungs-Projekts"</a>. Von hier aus können Sie auch
SliTaz-ISO-Abbilder <a href="http://www.slitaz.org/de/get/">transferieren</a> oder uns bei
der Entwicklung helfen.
Sie können die <a href="http://www.slitaz.org/de/doc">deutsche Dokumentation</a> ansehen,
wo Sie lesen können, wie ein Direktstart-Datenträger verwendet und das System konfiguriert wird.
</p>

<h2 id="reviews">Rezensionen</h2>

<p>
Über SliTaz GNU/Linux wurde an verschiedenen Stellen berichtet. Wir danken allen für die Unterstützung.
</p>

<h3>4.0 - April 2012</h3>

<ul>
	<li><a href="http://badalhocando.blogspot.co.uk/2012/04/slitaz-40-review-small-but-fierce.html"
		>Blogspot</a> - Von Klaus Zimmermann.</li>
	<li><a href="http://linuxblog.darkduck.com/2012/04/slitaz-40-light-and-stable.html"
		>DarkDuck</a> - Von Dmitry.</li>
	<li><a href="http://frederic.bezies.free.fr/blog/?p=8760"
		>Weblog</a> (fr) - Von Frederic Bezies.</li>
</ul>

<h3>3.0 - März 2010 &amp; Entwicklung - Januar 2010</h3>

<ul>
	<li><a href="http://kmandla.wordpress.com/2010/03/29/greetings-from-slitaz-3-0/"
		>Wordpress</a> - Von K.Mandla.</li>
	<li><a href="http://www.linuxjournal.com/content/spotlight-linux-slitaz-gnulinux-30"
		>Linux Journal</a> - Von Susan Linton.</li>
	<li><a href="http://distrowatch.com/weekly.php?issue=20100111#feature"
		>Distrowatch</a> - Von Jesse Smith (Entwicklungsversion kurz vor 3.0).</li>
</ul>

<h3>2.0 - April 2009</h3>

<ul>
	<li><a href="http://www.gdhpress.com.br/blog/slitaz"
		>Gdhpress</a> (pt) - Von Carlos Morimoto.</li>
	<li><a href="http://www.frlinux.net/?section=distributions&amp;article=237"
		>FRLinux</a> (fr) - Von Steph.</li>
	<li><a href="http://www.junauza.com/2009/07/slitaz-20-simple-speedy-and-secure.html"
		>Tech Source</a> - Von Jun Auza.</li>
	<li><a href="http://www.dedoimedo.com/computers/slitaz-2.html"
		>Dedoimedo</a> - Von Dedoimedo.</li>
	<li><a href="http://linuxologist.com/reviews/slitaz-linux-zero-to-distro-in-30-mb/"
		>Linuxologist</a> - Von Brie Gordon.</li>
</ul>

<h3>1.0 - März 2008</h3>

<ul>
	<li><a href="http://distrowatch.com/weekly.php?issue=20080331" target="_blank" rel="noopener noreferrer"
		>Distrowatch</a>- Von Ladislav Bodnar.</li>
	<li><a href="http://www.junauza.com/2008/03/slitaz-gnulinux-smallest-desktop-distro.html" target="_blank" rel="noopener noreferrer"
		>Tech Source</a> - Von Jun Auza.</li>
	<li><a href="http://beranger.org/index.php?page=diary&amp;2008/03/31/07/04/42-a-quick-look-over-slitaz-1-0" target="_blank" rel="noopener noreferrer"
		>Planet Béranger</a> - Von Béranger.</li>
	<li><a href="http://kmandla.wordpress.com/2008/04/02/slitaz-10-on-450mhz-k6-2-256mb/" target="_blank" rel="noopener noreferrer"
		>K.Mandla Blog</a> - Von K.Mandla.</li>
	<li><a href="http://reddevil62-techhead.blogspot.com/2008/04/damn-minuscule-linux-first-look-at.html" target="_blank" rel="noopener noreferrer"
		>Red Devil's Tech Blog</a> - Von Steve Lawson.</li>
	<li><a href="http://www.linuxinfusion.com/slitaz-a-light-weight-gnulinux-distribution" target="_blank" rel="noopener noreferrer"
		>Linux Infusion</a> - Von Moparx.</li>	
	<li><a href="http://www.insidesocal.com/click/2008/06/a-second-look-at-slitaz-10.html" target="_blank" rel="noopener noreferrer"
		>Dailynews Blog</a> - Von Steven Rosenberg.</li>	
	<li><a href="http://www.linux.com/feature/140573" target="_blank" rel="noopener noreferrer"
		>Linux.com</a> - Von Dennis L. Ericson.</li>
	<li><a href="http://www.freesoftwaremagazine.com/columns/slitaz_live_cd_small_beautifully_marked" target="_blank" rel="noopener noreferrer"
		>Free Software Magazine</a> - Von Gary Richmond.</li>
	<li><a href="http://www.linux-magazine.com/issues/2008/97/slitaz" target="_blank" rel="noopener noreferrer"
		>Linux Pro Magazine</a> - Von Dimitri Popov.</li>
</ul>

<!-- End of content -->
</section>

<?php include("../../lib/html/footer.html"); ?>

</body>
</html>
