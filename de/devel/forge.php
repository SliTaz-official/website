<!DOCTYPE html>
<html lang="de">
<head>
	<meta charset="UTF-8">
	<title>SliTaz-Schmiede</title>
	<meta name="description" content="slitaz Entwickler Schmiede">
	<meta name="keywords" lang="en" content="slitaz, devel, hg, bugs">
	<meta name="author" content="Christophe Lincoln, HGT">
	<?php include("../../lib/html/meta-link.html"); ?>
</head>
<body>

<?php 
include("../../lib/html/header.de.html");
include("../../lib/html/nav.de.html"); 
include("../../lib/lang.php"); 
?>

<!-- Content -->
<section id="content">

<h2>Gemeinschaftliche Verwaltung</h2>

<ul>
	<li><a href="#kiss">„KISS“ und Standards respektieren.</a></li>
	<li><a href="#tank">Rechner für die Entwicklung und die Internetpräsenz.</a></li>
	<li><a href="#repos">Mercurial-Depots.</a></li>
	<li><a href="#gui">Grafische Oberflächen in GTK und CGI</a></li>
	<li><a href="#iconv">Implementierung von iconv().</a></li>
	<li><a href="#pkgs">SliTaz-Pakete erzeugen.</a></li>
	<li><a href="#website">Verwaltung der Internetpräsenz.</a></li>
</ul>

<h2 id="kiss">„KISS“ und Standards respektieren</h2>

<p>
	„Keep it simple (KISS)“: befolgen Sie die besten Standards, entwerfen und schreiben
	Sie sorgfältig Dokumentation von hoher Qualität, erzeugen Sie ein stabiles und robustes System und
	halten Sie das Wurzeldateisystem <code>rootfs</code> in dem Direktstatrt-ISO-Abbild so klein, dass
	es auf Rechnern mit mindestens 128 MiB Arbeitsspeicher geladen werden kann. Dennoch ist es möglich
	GTK+2, Dialog, Kommandoprozeduren oder PHP-Werkzeuge in die Distribution zu übernehmen. Die Idee ist
	keine Doppelarbeit zu leisten und nicht schmalspurig zu denken...
</p>

<h2 id="tank">Entwicklungstank - Rechner für die Entwicklung und die Internetpräsenz</h2>

<p>
	Jeder Mitwirkende kann sich über einen sicheren Zugang an dem Projekt-Rechner anmelden, kann dort
	Plattenplatz belegen, ein Verzeichnis <code>Public</code> anlegen und all Entwicklerwerkzeuge nutzen.
	Entwickler können Pakete erzeugen und Verwalter der Spiegel-Depots können diese synchronisieren.
	Auf diesem Rechner befindet sich auch der Kompilierungsautomat, die Dateien zum Laden über das
	Netzwerk und „SliTaz Pro“: <a href="http://tank.slitaz.org/">tank.slitaz.org</a>
</p>

<p>
	Anleitungen zum Erstellen von Paketen auf diesem Rechner finden sich im Kochbuch: 
	<a href="http://doc.slitaz.org/de:cookbook:buildhost">Entwicklungstank</a>.
</p>

<h2 id="repos">Mercurial-Depots</h2>

<p>
	SliTaz-Mercurial- (oder Hg-) Depots können von jedem unter dem URL
	<a href="http://hg.slitaz.org/">http://hg.slitaz.org/</a> angesehen und dupliziert werden.
	Benutzer mit Schreibrecht können über die Adresse <code>repos.slitaz.org</code> direkt auf
	die Depots zugreifen. Beim Schreiben müssen ein Benutzername und ein Kennwort angegeben werden.
	Mercurial verwendet Python. Es kann auf SliTaz mit <code>tazpkg get-install mercurial</code>
	installiert werden.
</p>

<h3>~/.hgrc</h3>

<p>
	Vor dem Transfer des ersten Beitrags auf den Entwicklungsrechner (mit <code>hg push</code>)
	muss eine korrekte Konfigurationsdatei <code>~/.hgrc</code> erstellt werden. Darin sollte
	Ihre E-Mail-Adresse und Ihr richtiger Name enthalten sein. Hier ein Beispiel:
</p>
<pre class="script">
[ui]
username = Vorname Nachname &lt;name@example.de&gt;
</pre>

<h4>Duplizieren, Ändern, Änderungen lokal übernehmen und Änderungen transferieren</h4>

<p>
Ein Depot, z.B. der Wok <code>wok</code>, wird wie folgt lokal dupliziert:
</p>
<pre>
 $ hg clone http://repos.slitaz.org/wok
</pre>
<p>
Jetzt muss das Verzeichnis <code>wok</code> als Arbeitsverzeichnis eingestellt werden, sonst funktionieren die 
<code>hg</code>-Kommandos nicht. Zum Anzeigen aller oder nur der letzten Änderungen:
</p>
<pre>
 $ hg log
 $ hg head
</pre>
<p>
Nach dem Hinzufügen oder Ändern von einer oder auch mehrerer Dateien den Änderungsstatus anzeigen und die Änderungen
lokal übernehmen:
</p>
<pre>
 $ hg add
 $ hg status
 $ hg commit -m "kurze beschreibung der vorgenommenen änderungen"
 $ hg log
</pre>
<p>
Mit <code>hg rollback</code> können Sie die letzte Änderung rückgängig machen. Bevor Sie die
Änderungen in das Depot transferieren, sollten Sie zwischenzeitliche Änderungen anderer übernehmen:
</p>
<pre>
 $ hg pull
 $ hg push
</pre>
<p>
Das ist schon alles; Ihre Änderungen, Quellprogramme oder Korrekturen sind jetzt im Depot.
</p>

<h4>Ein lokal dupliziertes Depot aktualisieren</h4>

<p>
Ein lokal dupliziertes Depot kann aus dem SliTaz-Depot aktualisiert werden mit:
</p>
<pre>
 $ hg pull -u
</pre>

<h4>Weitere nützliche Kommandos</h4>

<p>
Weitere <code>hg</code>-Kommandos:
</p>
<ul>
	<li><code>hg help</code> : Zeigt alle möglichen Kommandos.</li>
	<li><code>hg rollback</code> : Die letzte Aktion (commit, pull, push) rückgängig machen.</li>
	<li><code>hg log &lt;package&gt;</code> : Das Änderungsprotokoll eines Paketes zeigen.</li>
	<li><code>hg head</code> : Die letzte Änderung anzeigen.</li>
</ul>

<h2 id="gui">Grafische Oberflächen - reines C/GTK, Yad, Vala/Genie und CGI</h2>

<p>
	Es gibt viele Möglichkeiten, mit „open source“-Produkten eine Benutzeroberfläche zu erzeugen.
	Bis zur Version 3.0 von SliTaz haben wir hauptsächlich Gtkdialog verwendet, um gefällige
	und komplexe Oberflächen in GTK zu erstellen, wobei die Anweisungen ausgeführt wurden ohne
	übersetzt werden zu müssen. Aber gtkdialog wird nicht mehr gewartet und es fehlen viele
	neuere GTK-Funktionalitäten. Daher sind wir bei einfachen Grafikfenstern auf Yad umgestiegen.
	Bei der Verwaltung des Systems und der Pakete sowie bei den Konfigurationswerkzeugen sind wir
	auf TazPanel umgestiegen, eine Web-Oberfläche mit CGI-Nutzung, die mit xHTML&nbsp;5 und CSS&nbsp;3
	programmiert wird.
</p>
<p>
	Yad ist sehr einfach, kann aber keine komplexen Oberflächen erzeugen: schon 
	zwei oder drei Einträge mit Marken und einige Schaltflächen sind nicht möglich. Daher mussten
	wir eine andere Möglichkeit suchen. Der Vorteil eines Interpreters ist, dass die Anweisungen
	nicht übersetzt werden müssen sondern zur Laufzeit verarbeitet werden, was die Anwendung
	allerdings verlangsamt.
	Programme in C zu schreiben ist komplex und daran werden sich weniger Mitwirkende beteiligen, da
	Kommandoprozeduren leichter zu verstehen sind. Daher lautet die Richtlinie jetzt:
	unsere Kommandoprozeduren beibehalten und verbessern und Benutzeroberflächen dafür in GTK oder CGI
	zur Verfügung stellen.
</p>
<p>
	Es gibt viele neue Programmiersprachen, die GTK verwenden, z.B. Genie, Vala oder GTKaml.
	Beachten Sie aber, dass sie nicht so verbreitet sind wie C und GTK und nicht wirklich
	leichter zu erlernen und zu nutzen sind. Für einfache Grafikfenster können Sie Kommandoprozeduren
	benutzen. Sie können auch Vala benutzen, aber reines GTK braucht für ein einzelnes Fenster auch nur 14
	Anweisungszeilen:
</p>
<pre>
#include &lt;gtk/gtk.h&gt;

int main(int argc, char *argv[])
{
	GtkWidget *window;

	gtk_init(&amp;argc, &amp;argv);
	window = gtk_window_new(GTK_WINDOW_TOPLEVEL);
	g_signal_connect (G_OBJECT (window), "destroy",
			G_CALLBACK (gtk_main_quit), NULL);

	gtk_widget_show(window);
	gtk_main();
	return 0;
}
</pre>
<p>
	Wenn Sie sich nicht sicher sind, welche Programmiersprache Sie verwenden sollen, können Sie Ihre Wahl
	bei der „Mailing“-Liste zur Diskussion stellen.
	Wenn Sie nur eine einfache grafische Oberfläche brauchen, können Sie sich <code>tazbox</code> im
	Depot <code>slitaz-tools</code> ansehen; das Paket enthält kleine Programme für die grafische Oberfläche
	wie z.B. ein Abmeldefenster. TazWeb ist das erste Teilprojekt von SliTaz, das in reinem GTK geschrieben wurde.
	Sie können es ansehen um zu lernen, wie man die Funktion <code>system()</code> in einer grafischen
	Oberfläche verwenden kann. So verwendet TazWeb beispielsweise <code>wget</code> zum Dateitransfer und
	<code>sed</code> um Lesezeichen hinzuzufügen.
</p>
<p>
	Yad-Anweisungsprozeduren sollten die TazYad-Richtlinien befolgen:
	<a href="http://hg.slitaz.org/slitaz-dev-tools/raw-file/tip/tazyad/README">README</a> und
	<a href="http://hg.slitaz.org/slitaz-dev-tools/raw-file/tip/tazyad/tazyad">Programmierbeispiele</a>
</p>

<h2 id="iconv">Implementierung von iconv()</h2>

<p>
	SliTaz verwendet iconv() aus der GNU glibc - alle Pakete, die <code>libiconv</code> anbieten,
	müssen die Bibliothek aus <code>glibc-locale</code> verwenden.
	Daher gibt es kein Paket <code>libiconv</code> (1.2 MB) mehr in SliTaz.
</p>

<h2 id="pkgs">SliTaz-Pakete erzeugen</h2>

<p>
	Für die offizielle Paketerzeugung werden die Kochwerkzeuge verwendet. Diese sind in dem Paket <code>cookutils</code>
	enthalten, das in jedem SliTaz-System installiert ist, wie auch das 
	<a href="http://hg.slitaz.org/cookutils/raw-file/tip/doc/cookutils.de.html">Kochwerkzeuge-Handbuch</a> für die Verwendung der Kochwerkzeuge. Damit werden Pakete erzeugt, die von TazPKG verwaltet werden können.
</p>
<p>
	Die Pakete werden bei SliTaz automatisch von <a href="http://cook.slitaz.org/">„Cooker“</a> aus einem
	Quellpaket und einem Rezep im Wok erzeugt. Im Kochbuch ist das Format der
	<a href="http://doc.slitaz.org/de:cookbook:receipt">Rezepte</a> beschrieben.
	Die Beschreibung der Kochwerkzeuge und der Rezepte sollten Sie gelesen haben, bevor Sie mit der
	Paketerzeugung beginnen.
</p>
<p>
	Bei der Auswahl eines Paketes für SliTaz sollten nur solche in Betracht kommen, die
	nützlich sind und funktionieren. Davon sollten Sie das kleinste verfügbare auswählen.
	Es sollten nicht mehrere Pakete mit gleicher Funktionalität erstellt werden.
	Die aktuelle Auswahl der Pakete ist aber nicht festgeschrieben. Wenn es eine Alternative zu einem Paket
	gibt, die noch kleiner ist, mehr Funktionen enthält oder mit ein paar KB mehr <em>attraktiver</em> ist,
	kann die Übernahme bei der „Mailing-Liste“ diskutiert werden.
	Besondere Anforderungen werden an Pakete gestellt, die in Direktstart-ISO-Abbilder
	übernommen werden sollen. Bei diesen sollten Symbolinformationen aus den Objektprogrammen
	sowie unnötige Abhängigkeiten und Übersetzeroptionen entfernt werden.
	Im Allgemeinen werden solche Pakete vor der Freigabe ebenfalls bei der „Mailing-Liste“ zur
	Diskussion gestellt.
</p>
<p>
	Bevor Sie beginnen, Pakete für SliTaz zu übersetzen und erzeugen, stellen Sie zur Vermeidung von
	Doppelarbeit sicher, dass es etwas entsprechendes nicht schon im
	<a href="http://download.tuxfamily.org/slitaz/packages/undigest/">inoffiziellen Wok</a>
	gibt. Die Mitglieder der „Mailing-Liste“ geben gerne Hinweise und das
	<a href="http://hg.slitaz.org/cookutils/raw-file/tip/doc/cookutils.de.html">Kochwerkzeuge-Handbuch</a>
	sollte für Anfänger hilfreich sein.
</p>

<h3 id="pkgs-naming">Benennung von Paketen</h3>

<p>
	In den meisten Fällen stimmt der Name des Paketes mit dem Namen des Quellpaketes überein. Ausnahmen sind
	Python, Perl, PHP, Ruby und Lua-Module. Beispielsweise heisst das Paket,
	das ein „Kid template system“, in Python und XML geschrieben, enthält:
	<code>python-kid</code>.
</p>

<h2 id="website">Verwaltung der Internetpräsenz</h2>

<p>
	Die Internetpräsenz wird über das Mercurial-Depot <code>website</code> administriert. Dieses kann dupliziert
	werden mit:
</p>
<pre>
 $ hg clone http://hg.slitaz.org/website
  oder wenn Sie die entsprechende Berechtigung haben:
 $ hg clone http://repos.slitaz.org/website
</pre>

<h3>xHTML-Programmierstil</h3>

<p>
	Die Seiten und verschiedene <em>Handbücher</em> sind in xHTML&nbsp;1.0&nbsp;transitional
	programmiert. Die Überschrift der Stufe 1 wird nur einmal (ganz oben) verwendet,
	Stufe 2 ist der Titel des Dokuments und die Stufen 3 und 4 werden für weitere Abstufungen
	der Überschriften benutzt. Wenn eine Liste statt „smart anchors“ verwendet wird, 
	beginnt sie oben, direkt unterhalb einer Überschrift der Stufe 2.
	Absätze werden in die Markierungen <code>&lt;p&gt;&lt;/p&gt;</code> eingeschlossen.
	Für Einrückungen werden Tabulatoren verwendet. Dies ist in der Semantik begründet und sie
	benötigen weniger Speicherplatz. Zur Darstellung von Kommandonamen oder ähnlichem innerhalb
	eines Absatzes wird vorzugsweise <code>&lt;code&gt;</code> verwendet.
	Beispiele für die Anwendung von Kommandos in einem Terminal werden als formatierter Text mit
	<code>&lt;pre&gt;</code> ausgegeben, z.B.:
</p>
<pre>
 $ command
</pre>
<p>
	Zur Anzeige von Text, der kopiert und eingefügt werden kann, wie etwa Kommandoprozeduren,
	Quellprogrammausschnitte, Konfigurationsdateien usw. wird ebenfalls
	<code>&lt;pre&gt;</code> verwendet, aber mit einer  CSS-Klasse namens “script”. Beispiel:
</p>
<pre class="script">
&lt;pre class="script"&gt;

code...

&lt;/pre&gt;
</pre>
<p>
	<em>Hervorgehobene</em> Wörter erhalten das Merkmal <code>&lt;em&gt;</code>
	und interne Verknüpfungen sind stets relativ. Denken Sie auch daran, Ihr Programm
	mit dem <em>„validator“</em> des W3C auf Konformität zu prüfen.
</p>

<h2 id="diff">Diff und patch</h2>

<p>
	Die Programme <code>diff</code> und <code>patch</code> dienen der Erstellung einer Datei, die 
	Unterschiede zwischen zwei Dateien enthält und mit deren Hilfe die Änderungen angewendet werden	können.
	Diese Technik wird oft angewendet, wenn mehrere Personen an einem Projekt arbeiten, damit Änderungen
	an einer Originaldatei klar extrahiert werden können. Um eine <code>diff</code>-Datei zu erstellen,
	die mit einem Texteditor für Menschen gut lesbar ist, muss die Option <code>-u</code> angegeben werden:
</p>
<pre>
 $ diff -u file.orig file.new &gt; file.diff
</pre>
<p>
Zum Anbringen der Änderungen an der Originaldatei:
</p>
<pre>
 $ patch file.orig file.diff
</pre>

<!-- End of content -->
</section>

<?php include("../../lib/html/footer.html"); ?>

</body>
</html>
