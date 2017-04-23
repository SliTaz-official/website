<!DOCTYPE html>
<html lang="de">
<head>
	<meta charset="UTF-8"/>
	<title>SliTaz-Entwicklung</title>
	<meta name="description" content="SliTaz GNU/Linux Projekt Information Übersicht"/>
	<meta name="keywords" lang="en" content="slitaz download, get slitaz"/>
	<meta name="author" content="F Steiner (Sevala), HGT"/>
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

<h2>Entwicklung von SliTaz</h2>

<p>
	SliTaz ist eine GNU/Linux-Distribution, die von einer Gemeinschaft von Nutzern aus aller Welt 
	erstellt wird. Jeder ist eingeladen, sich an dem Projekt zu beteiligen und mit zu helfen.
</p>

<ul>
	<li><a href="forge.php">Schmiede</a> - Gemeinschaftliche Verwaltung, KISS,
	Leitfäden, Mercurial und andere Dienste</li>
	<li><a href="release.php">Freigaben</a> - Anleitungen für Freigaben der stabilen oder
	der Entwicklungs-Version oder von Teilprojekten</li>
	<li><a href="/i18n.php">Internationalisierungs-Projekt</a> -
	Übersetzungen, Ziele und Verwaltung</li>
	<li><a href="../artwork/">Design</a> - SliTaz-Symbol, Spinne und Design-Information</li>
	<li><a href="http://hg.slitaz.org/">Mercurial-Depots.</a></li>
	<li><a href="http://bugs.slitaz.org/">SliTaz Fehlermeldesystem</a> -
	Fehlermeldesystem per Kommando oder Weboberfläche</li>
</ul>

<h2>Beteiligen Sie sich!</h2>

<p>
SliTaz ist ein „open source“-Projekt, das von einer Nutzergemeinschaft entwickelt wird.
Jeder kann und darf gerne dazu seinen Beitrag leisten: Nutzer, Programmierer oder
Entwickler sind gleichermassen willkommen, es gibt immer etwas zu tun. Sei
es das Vervollständigen des <a href="http://doc.slitaz.org/de:start">Wikis</a> und der
Dokumentation, Fehler im <a href="http://bugs.slitaz.org">Fehlermeldesystem</a> zu
melden, neue Pakete zu erstellen und sie in die Depots zu transferieren oder einfach anderen
SliTaz-Nutzern im Forum oder der "Mailing"-Liste zu helfen. SliTaz verwendet Mercurial-Depots
auf <code>hg.slitaz.org</code> für die Versionsverwaltung. Entwickler können dort, wenn erforderlich,
neue Depots einrichten, andere Mitwirkende haben Schreibzugriff auf die Depots, um
Druckfehler, Kommandoprozeduren u.a. korrigieren zu können.
</p>

<p>
SliTaz hat eine kleine Nutzergemeinschaft und hört auf die Nutzer. Viele der Entwickler
sind im <a href="http://forum.slitaz.org/">Forum</a> und der
<a href="../mailing-list.php">„Mailing“-Liste</a> selbst aktiv.
</p>
<p><!-- which one? -->
	Für Designer gibt es eine spezielle Abteilung, wo Sie sich einfach registrieren können
	und dann Ihre Grafiken oder Bilder übergeben können. Auch diese wird von der Nutzergemeinschaft
	verwaltet. Wenn Sie dabei helfen wollen, wenden Sie sich bitte an einen Mitwirkenden oder
	schreiben Sie an die „Mailing“-Liste.
</p>

<h2>Aktivitäten</h2>

<?php require_once("../../lib/get-feeds.php"); ?>

<div class="activity">
	<p>
		<a href="http://hg.slitaz.org/"><img 
			src="/images/development.png" alt="[ ]" /></a>
		Letzte Übergaben im Wok
		<?php get_feed("wok.xml"); ?>
	</div>
	<p class="activity_more">
		<a href="http://hg.slitaz.org/">Mehr Übergaben</a>
	</p>
</div>

<!-- End of content -->
</section>

<?php include("../../lib/html/footer.html"); ?>

</body>
</html>
