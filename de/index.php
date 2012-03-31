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

<?php include("../lib/html/header.html"); ?>

<!-- Block -->
<div id="block">
	<?php include("../lib/html/nav.de.html"); ?>
	<!-- Information/image -->
	<div id="block_info">
		<h4>Startseite</h4>
		<p>
			SliTaz ist eine minimale, freie GNU/Linux Distribution. Das
			Ziel von SliTaz ist es, eine GNU/Linux Distribution zu 
			schaffen, die vollkommen aus dem Arbeitsspeicher (RAM) 
			läuft.
		</p>
		<p>
			SliTaz's CD-Image wird nie eine Größe von 35 MB übersteigen
			- bei einer sinnvollen Auswahl nützlicher Software.
			<a href="about/">Mehr erfahren...</a>
		</p>
	</div>
</div>

<?php include("../lib/lang.php"); ?>

<!-- Content -->
<div id="content">

<div class="box">
	<img src="/images/update.png" style="float: left; margin-right: 10px; " />
	<p>
		SliTaz German website needs a new maintainer and contributors. You
		can contact us on the
		<a href="http://scn.slitaz.org/groups/i18n/">i18n group</a>.
	</p>
</div>

<h2>Neuigkeiten</h2>

<p>
Die SliTaz-Webseite bietet die wichtigsten Projektneuheiten an, und ausserdem
neuerdings die Labors mit Nachrichten zu der allgemeinen Aktivität der
verschiedenen Unterprojekten. Diese Nachrichten sind auch als
<a href="/rss.xml">XML-Sendungen</a> erhältlich. Das Projekt bietet ausserdem
einen kleinen monatlichen Informationsbrief in Englisch und Chinesisch an.
</p>

<div class="box">
	<img src="/images/news.png" alt="[ ]" />
	<a href="http://scn.slitaz.org/">Blog-Nachrichten</a> | 
	<a href="http://doc.slitaz.org/en:newsletter:start">Monthly Newsletter</a>
</div>

<div class="news">

<ul>
	<!-- <li><strong>Date - Title</strong>
	<p></p>
	</li> -->
	<li><strong>See the English news</strong>
	<p>
		SliTaz German website needs a new maintainer and contributors.
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
		<a href="http://scn.slitaz.org/activity/"><img 
			src="/images/users.png" alt="[ ]" /></a>
		Community activity
		<?php get_feed("scn.xml"); ?>
	</div>
	<p class="activity_more">
		<a href="http://scn.slitaz.org/activity/">Mehr Aktivität</a>
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

<h3>Donate</h3>

<?php include("../lib/html/donate.html"); ?>

<h3>Twitter &amp; Facebook</h3>

<?php include("../lib/html/social.html"); ?>

<!-- End of content  -->
</div>

<?php include("../lib/html/footer.html"); ?>

</body>
</html>
