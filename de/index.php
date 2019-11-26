<!DOCTYPE html>
<html lang="de">
<head>
	<meta charset="utf-8"/>
	<title>SliTaz GNU/Linux (de)</title>
	<meta name="description" content="SliTaz GNU/Linux German Website"/>
	<meta name="keywords" lang="en" content="System, free, gnu, linux, software opensource, livecd LINUX in RAM"/>
	<meta name="author" content="F Steiner (Sevala), François (oui), HGT"/>
	<?php include("../lib/html/meta-link.html"); ?>
</head>
<body>

<?php
include("../config.php");
include("../lib/html/header.de.html");
include("../lib/html/nav.de.html");
include("../lib/lang.php");
?>

<!-- Content -->
<section id="content">

<div class="box-up">
	<p>
		Die deutsche Internetpräsenz von SliTaz braucht einen neuen Betreuer und Mitwirkende.
		Interessenten können sich über die <a href="mailing-list.php">„Mailing-Liste“</a> melden.
	</p>
</div>

<!-- Featured sponsor -->
<div id="sponsor">
	<p><strong>besondere Förderer</strong></p>
	<?php include("../lib/rand-sponsor.php"); ?>
	<p><a href="/de/sponsor/">Fördern Sie uns</a></p>
</div>

<!--
    SliTaz news starting.
-->

<!-- We just keep the last 3 web site news -->
<div class="news" style="margin-right: 220px;">

<h2>Die letzten Freigaben</h2>

<ul>
	<li><strong><a href="http://mirror.slitaz.org/iso/rolling/">SliTaz 5.0 wöchentliche Freigabe</a></strong>
            <span>- <?php
            $rol_date_file = '../cache/rolling-date.txt';
            if (file_exists("$rol_date_file")) {
                    $rol_date = file_get_contents("../cache/rolling-date.txt");
                    print $rol_date;
            } ?></span></li>
	<li><strong><a href="news/#d20150520">SliTaz 5.0 RC-3 Freigabe</a></strong>
		<span>- 20. Mai 2015</span></li>
	<li><strong><a href="news/#d20140519">SliTaz 5.0 RC-2 Freigabe</a></strong>
		<span>- 19. Mai 2014</span></li>
	<li><strong><a href="news/#d20140502">SliTaz 5.0 RC-1 Freigabe</a></strong>
		<span>- 2. Mai 2014</span></li>
	<li><strong><a href="news/#d20140329">SliTaz Raspberry Pi Freigabe</a></strong>
		<span>- 29. März 2014</span></li>
	<li><strong><a href="news/">Archiv der Freigabemitteilungen</a></strong>
		<span>- 2007-<?php echo date('Y'); ?></span></li>
</ul>

<!-- End of news -->
</div>

<h2>Sofort-Transfer</h2>

<div class="box-warning"><p>Vor der Verwendung von SliTaz - bitte lesen Sie diesen Post: <a href="http://forum.slitaz.org/topic/-important-info-about-meltdown-and-spectre-">Important info about Meltdown and Spectre</a></p></div>

<div class="dldiv">
	<p><!-- ?php echo "<a class='dlbutton nav2' href='$stable_iso'>SliTaz $stable_ver</a>"; ? -->
	<!-- a class='dlbutton nav2' href='$cooking_iso'>SliTaz $cooking</a>"; ? -->
	<a class='dlbutton navpi' href='http://arm.slitaz.org/rpi/'>SliTaz Raspberry Pi</a>
	<a class='dlbutton nav2' href='http://mirror.slitaz.org/iso/rolling/slitaz-rolling.iso'>SliTaz wöchentlich 32 bit</a>
	<a class='dlbutton nav1' href='http://mirror.slitaz.org/iso/rolling/slitaz-rolling-core64.iso'>SliTaz wöchentlich 64 bit</a></p>
</div>

<h2>Projekt-Aktivität</h2>

<?php require_once("../lib/get-feeds.php"); ?>

<div class="activity">
	<p>
		<a href="http://forum.slitaz.org/"><img 
			src="/images/support.png" alt="[ ]" /></a>
		Aktivität im Forum
		<?php get_feed_forum("forum.xml"); ?>
	</div>
	<p class="activity_more">
		<a href="http://forum.slitaz.org/">Mehr Unterstützung</a>
	</p>
</div>

<div class="activity">
	<p>
		<a href="http://hg.slitaz.org/">
			<img src="/images/development.png" alt="[ ]" /></a>
		Letzte Aufträge im wok
		<?php get_feed("wok.xml"); ?>
	</div>
	<p class="activity_more">
		<a href="http://hg.slitaz.org/?sort=lastchange">Weitere Aufträge</a>
	</p>
</div>

<!-- Twitter  -->
<div id="twitter">
<a class="twitter-timeline"  href="https://twitter.com/slitaz" 
	data-widget-id="420830244551938048">Tweets bei @slitaz</a>
    <script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+"://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>
</div>

<h2>Unterstützen Sie uns</h2>

<p>
	Verbreiten Sie SliTaz weiter oder spenden Sie. Sie können „PayPal“
	oder „Flattr micropayment“ verwenden, um uns finanziell zu unterstützen. Sie können über alle
	möglichen Kanäle Ihre Meinung über das Projekt verbreiten und so dazu beitragen,
	den Bekanntheitsgrad von SliTaz zu erhöhen. Sie können sich auch selbst an dem
	Projekt beteiligen und in dem 
	<a href="http://scn.slitaz.org/">„SliTaz Community Network“</a> mitwirken.
</p>
<p>
	Sie können auch ein offizieller Förderer werden, indem Sie eine monatliche Spende leisten oder
	uns mit Hardware oder Rechnerleistung versorgen.
	<a href="/de/sponsor/">Weitere Informationen</a>
</p>

<?php include("../lib/html/donate.html"); ?>

<h2>Verbreiten Sie SliTaz</h2>

<p>
	Sie können uns helfen, indem Sie SliTaz noch bekannter machen.
	„Bloggen“ oder „tweeten“ Sie diese Seite, teilen Sie sie und reden Sie über das Projekt.
	SliTaz ist auch gesellig, Sie können beitreten und Beiträge jeder Art liefern über das
	<a href="http://scn.slitaz.org/">„SliTaz Community Network“</a>,
	die offizielle SliTaz Facebook-Seite „liken“ und mitarbeiten!
</p>

<?php include("../lib/html/social.html"); ?>

<h2>Internationalisierung</h2>

<p>
	Die SliTaz-Internetpräsenz liegt in mehreren Sprachen vor und wird vom
	<a href="/i18n.php">Internationalisierungsteam</a> (i18n) betreut. Hier wird viel Mithilfe
	benötigt. Daher ist jeder willkommen, der beitragen möchte, dass die „website“ auch in seine
	Muttersprache übersetzt wird.
</p>

<h2>Bebilderung</h2>

<p>
	Sie können SliTaz-Symbole und Hintergrundbilder
	im SliTaz-Designteam bearbeiten. Weitere Informationen in der
	<a href="artwork/">Design-Abteilung</a>.
</p>

<!-- End of content  -->
</section>

<?php include("../lib/html/footer.html"); ?>

</body>
</html>
