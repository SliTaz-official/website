<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
	"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="da" lang="da">
<head>
	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<title>SliTaz GNU/Linux (en)</title>
	<meta name="description" content="SliTaz GNU/Linux LiveCD" />
	<meta name="keywords" lang="en" content="System, free, gnu, linux, software opensource, livecd LINUX in RAM" />
	<meta name="author" content="Bo Vagner Højer" />
	<?php include("../lib/html/meta-link.html"); ?>
</head>
<body>
<!-- Danish (da) translation by Bo Vagner Højer - bohoejer@live.dk
	Member of Labitat Hackerspace, Copenhagen - www.labitat.dk
	visit our hackerspace every tuesday evening for free - always hot coffee -->

<?php include("../lib/html/header.da.html"); ?>

<!-- Block -->
<div id="block">
	<?php include("../lib/html/nav.da.html"); ?>
	<!-- Information/image -->
	<div id="block_info">
		<h4>Dansk hjemmeside</h4>
		<p>
			SliTaz er et frit og gratis operativsystem, som giver en fuldt udstyret
			skrivebordsmaskine eller server i mindre end 35 MB.
		</p>
		<p>
		   Som live-os kan SliTaz køre fuldstændig i ram-hukommelsen og startes
		   fra flytbare medier så som en cdrom eller usb-pind.
		   Operativsystemmet er sikkert, stabilt og let at bruge.
			<a href="about/">Mere information...</a>
		</p>
	</div>
</div>

<?php include("../lib/lang.php"); ?>

<!-- Content -->
<div id="content">

<!-- <div class="box-up">
	<p>
		Call for sponsor!
	</p>
</div> -->

<!--
    SliTaz news starting.
-->

<h2>Nyheder</h2>

<p>
	SliTaz hjemmesiden tilbyder projektets hovednyheder så vel som
	nyheder om den generelle aktivitet i underprojekter på
	<a href="http://scn.slitaz.org/">SliTaz netværket</a>. Begge er
	tilgængelige som et  <a href="/rss.xml">rssfeed</a>.
	Projektet udgiver også
	et lille månedligt nyhedsbrev. Denne side og hjemmesidens
	<a href="../">hovedside</a> vil give dig et flot overblik over de
	sidste nyheder, bidrag og Tweets.
</p>

<div class="box">
	<img src="../images/news.png" alt="[ ]" />
	<a href="http://scn.slitaz.org/">Nyheder fra bloggen</a> |
	<a href="http://doc.slitaz.org/en:newsletter:start">Månedligt nyhedsbrev</a>
</div>

<div class="news">

<ul>
	<!-- <li><strong>Date - Title</strong>
	<p></p>
	</li> -->
	<li>
		<strong>31 Maj 2011 - Ny og frisk udviklingsversion 20110531</strong>
	<p>
		SliTaz holdet er stolt af at kunne annoncere frigivelsen af en ny
		udviklingsversion bygget med vores nye og friske programpakker fra cookutils.
		Cookutils er en af den nye genneration af værktøjer til at bygge SliTaz
		programpakker og giver en byggerobot
		med en flot webgrændseflade der arbejder ud-af-boksen på ethvert SliTaz
		system. Disse nye pakker er blevet bygget med en ny i486 optimeret
		værktøjskæde.
	</p>
	<p>
		Hele opstartsprocessen er blevet forbedret og den første konfiguration sker nu
		gennem GTK-kasser i en X session og opstartstiden er også hurtigere.
		Denne version kommer med et nyt grafisk værktøj til systemkonfiguration
		så vel som vores nye systemkonfigurationspanel kendt som TazPanel.
		TazPanel lader dig konfigurer hele systemet via en xHTML/CSS
		webgrændseflade (god til fjernkontrol) og det laver også pakkehåndtering
		og afløser derved den gamle GTK-kasse.
	</p>
	<p>
		Nu har Xorg dri understøttelse, så libdrm, linux-drm såvel som linux-agp
		er del af kerne-cdén. Dette gør det komprimerede rodfilsystem 1Mb større.
		Vi har dog klaret at spare en masse plads i kerne-cdén med vores nye
		programpakker og denne nye udviklingsudgave er på 30Mb! Denne nye
		version giver også bedre internationalisering og Italiensk understøttelse!
		Hent:
		<a href="http://mirror.slitaz.org/iso/cooking/slitaz-cooking.iso">
			slitaz-cooking.iso</a>
	</p>
	</li>

	<li>
		<strong>29 March 2011 - New Cooking 20110329</strong>
	<p>
	The SliTaz team is pleased to announce the release of a new cooking
	ISO featuring over 2900 packages. All packages have been rebuilt using
	our new cooking tool, now included in tazwok. It contains Linux Kernel
	2.6.37 compiled against glibc 2.13, binutils 2.21 &amp; gcc 4.5.2. The Core
	LiveCD includes Midori 0.3.3. Tazpkg is now entirely translated to
	French and we are open to additional translations. Tazwok has been
	entirely rewritten and it's now possible to recook SliTaz from Scratch
	using any ISO. This ISO is the first of a release candidate series which
	leads us to a stable 4.0 release.
	</p>
	<p>
	A lot of work has been done since our last cooking ISO released in november:
	more than 2200 changes have been commited to the wok, and several
	hundreds more to home-built tools. We are proud to announce that the SliTaz
	community has grown a lot these last months: the last year, many
	changes was commited than in the previous four. However, quantity doesn't mean
	quality. We need you to help to test this new ISO and report eventual bugs. If
	you want to, you are welcome to help fix known problems before 4.0 is released.
	You can join members of the crew via our IRC, mailing-list, forums or by
	mailing the packages maintainers. We hope you will enjoy this new
	<a href="get/">release!</a>
	</p>
	</li>

	<li id="d20101104">
		<strong>4 November 2010 - New Cooking 20101104</strong>
	<p>The SliTaz team is pleased to announce the release of a new cooking ISO
	featuring over 2600 packages. It contains Linux Kernel 2.6.34 and was
	rebuilt with a new toolchain using glibc 2.11.2 and gcc 4.5.1. Xorg has
	been fully updated to 1.9.2. The LiveCD includes Midori, the Deadbeef audio
	player, and many more applications. Tazpkg and Tazctrlbox now support
	gettext translations and more UTF locales have been added. Many bugfixes,
	updates and improvements can also be found. A lot of work has been done
	during these past 6 months. You can <a href="get/#cooking>">download</a>
	this new cooking version from one of the official mirrors of the project.
	All feedback is welcome and can be done through the mailing list or
	the forum.</p>
	</li>

	<li><a href="/en/news/">Flere nyheder</a> eller gennemse arkiverne (på engelsk):
	<a href="/en/news/2007.php">2007</a> |
	<a href="/en/news/2008.php">2008</a> |
	<a href="/en/news/2009.php">2009</a></li>
</ul>

<!-- End of news -->
</div>

<h2>Projekt aktivitet</h2>

<?php require_once("../lib/get-feeds.php"); ?>

<div class="activity">
	<p>
		<a href="http://scn.slitaz.org/activity/"><img
			src="/images/users.png" alt="[ ]" /></a>
		Aktivitet i samfundet
		<?php get_feed("scn.xml"); ?>
	</div>
	<p class="activity_more">
		<a href="http://scn.slitaz.org/activity/">Mere aktivitet</a>
	</p>
</div>

<div class="activity">
	<p>
		<a href="http://forum.slitaz.org/"><img
			src="/images/support.png" alt="[ Support ]" /></a>
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
		Seneste bidrag i wokken
		<?php get_feed("wok.xml"); ?>
	</div>
	<p class="activity_more">
		<a href="http://hg.slitaz.org/">Flere bidrag</a>
	</p>
</div>

<h2>Støt os</h2>

<p>
	Gør SliTaz endnu mere populær eller lav en donation. Du kan benytte PayPal
	eller en Flattr mikrobetaling til at støtte os pengemæssigt. Du kan blogge, tweette,
	dele og tale om projektet for at hjælpe med at udbrede SliTaz. Du kan også deltage
	på <a href="http://scn.slitaz.org/">SliTaz netværket</a> for at kontakte, dele eller blive
	indvoldveret i projektet.
</p>

<?php include("../lib/html/donate.html"); ?>

<h3>Twitter &amp; Facebook</h3>

<?php include("../lib/html/social.html"); ?>

<!-- End of content  -->
</div>

<?php include("../lib/html/footer.da.html"); ?>

</body>
</html>
