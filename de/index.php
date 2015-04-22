<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
	"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="de" lang="de">
<head>
	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<title>SliTaz GNU/Linux (de)</title>
	<meta name="description" content="SliTaz GNU/Linux LiveCD" />
	<meta name="keywords" lang="en" content="System, free, gnu, linux, software opensource, livecd LINUX in RAM" />
	<meta name="author" content="F Steiner (Sevala), François (oui)"/>
	<?php include("../lib/html/meta-link.html"); ?>
</head>
<body>

<?php
include("../config.php");
include("../lib/html/header.html");
?>

<!-- Block -->
<div id="block">
	<?php include("../lib/html/nav.de.html"); ?>
	<!-- Information/image -->
	<div id="block_info">
		<h4>Startseite</h4>
		<p>
			SliTaz ist eine minimale, freie GNU/Linux Distribution.
			SliTaz's CD-Image wird nie eine Größe von 35 MB übersteigen
			- bei einer sinnvollen Auswahl nützlicher Software.
			<a href="about/">Mehr erfahren...</a>
		</p>
		<div class="button" style="text-align: left; margin-top: 15px;">
			<img src="/images/download-30.png" />
			<?php echo "<a href='$stable_iso'>SliTaz $stable_ver</a>
				<a href='$cooking_iso'>SliTaz $cooking</a>"; ?>
		</div>
	</div>
</div>

<?php include("../lib/lang.php"); ?>

<!-- Content -->
<div id="content">

<div class="box-up">
	
	<a href="http://www.gofundme.com/slitaz2014?utm_medium=wdgt"
		title="Visit this page now."><img src="../images/gofundme.png"></a>
	<a href="http://www.gofundme.com/slitaz2014?utm_medium=wdgt">
		Check out our new SliTaz 2014 fundraising!</a>
	
	<p>
		SliTaz German website needs a new maintainer and contributors. You
		can contact us on the
		<a href="http://scn.slitaz.org/groups/i18n/">i18n group</a>.
	</p>

</div>

<div class="news">
	

<h2>Neuigkeiten</h2>

<ul>
	<!-- <li><strong>Date - Title</strong>
	<p></p>
	</li> -->
	<li id="d20140216">
		<strong>16. Februar 2014 - Neue Cooking-Version (20140216)</strong>
	<p>
 	Das Slitaz-Team ist stolz, die Veröffentlichung einer neuen Cooking
	Release bekannt geben zu können, die den Weg zu SliTaz 5.0 ebnen wird.
	Diese neue Cooking Release enthält fast zwei Jahre Arbeit und hat ein
	unglaubliches Änderungsprotokoll. Alle unsere hausgemachten Werkzeuge
	wurden verbessert und neue großartige Tools wie "frugal" oder
	"decode" hinzufügt. Wir konzentrierten unsere Arbeit auf die 
	Desktop-Integration um die Anwenderfreundlichkeit zu und verbesserten 
	die Konfiguration des Linux-Kernels (3.2.53).
	</p>
	<p>
	Wir haben die Paketlisten erneuert, alle vorhandenen Pakete
	aktualisiert und wir eine Reihe von neuen hinzugefügt um mehr als
 	4200 Pakete in der Cooking-Relase Datenbank zu erreichen.
	Viele Arbeit wurde auch an dem SliTaz Installationsassistent getan
	der nun ein neues Ncurses/Text-Frontend bereitstellt.
	</p>
	<p>
	Die LiveCD wird jetzt vor dem Booten nach den Spracheinstellungen
	fragen, so dass Sie als Benutzer wird direkt auf den Desktop bekommen, 
	nachdem alle Boot-Skripte ausgeführt wurden. Die Größe des ISO-Image 
	ist etwas für eine bessere hadware Unterstützung und neue Funktionen 
	gewachsen. Sie können das ISO-Image von folgendem SliTaz Mirror herunterladen:
	<a href="http://mirror.slitaz.org/iso/cooking/slitaz-cooking.iso"
		>slitaz-cooking.iso</a>
	[ <a href="http://mirror.slitaz.org/iso/cooking/slitaz-cooking.md5"
		>md5</a> ]
	</p>
	</li>

	<li>Neuigkeiten Archiv: <a href="news/">2007-2009</a></li>
</ul>

<!-- End of news -->
</div>

<h2>Projekt-Aktivität</h2>

<?php require_once("../lib/get-feeds.php"); ?>

<div class="activity">
	<p>
		<a href="http://scn.slitaz.org/?log"><img 
			src="/images/users.png" alt="[ ]" /></a>
		Community activity
		<?php get_feed("scn.xml"); ?>
	</div>
	<p class="activity_more">
		<a href="http://scn.slitaz.org/?log">Mehr Aktivität</a>
	</p>
</div>

<div class="activity">
	<p>
		<a href="http://forum.slitaz.org/"><img 
			src="/images/support.png" alt="[ ]" /></a>
		Forum activity
		<?php get_feed_forum("forum.xml"); ?>
	</div>
	<p class="activity_more">
		<a href="http://forum.slitaz.org/">More support</a>
	</p>
</div>

<div class="activity">
	<p>
		<a href="http://hg.slitaz.org/">
			<img src="/images/development.png" alt="[ ]" /></a>
		Latest commits in wok
		<?php get_feed("wok.xml"); ?>
	</div>
	<p class="activity_more">
		<a href="http://hg.slitaz.org/">Mehr Commits</a>
	</p>
</div>

<!-- SCN blog posts  -->
<h2>Blog Posts</h2>

<div class="news">
	<?php get_feed_blog("blog.xml"); ?>
</div>

<!-- Twitter  -->
<div id="twitter">
<a class="twitter-timeline"  href="https://twitter.com/slitaz"  data-widget-id="420830244551938048">Tweets by @slitaz</a>
    <script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+"://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>
</div>

<h3>Donate</h3>

<?php include("../lib/html/donate.html"); ?>

<h3>Twitter &amp; Facebook</h3>

<?php include("../lib/html/social.html"); ?>

<!-- End of content  -->
</div>

<?php include("../lib/html/footer.html"); ?>

</body>
</html>
