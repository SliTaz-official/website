<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
	"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<title>SliTaz GNU/Linux (bs)</title>
	<meta name="description" content="SliTaz GNU/Linux English Website" />
	<meta name="keywords" lang="en" content="System, free, gnu, linux, software opensource, livecd LINUX in RAM" />
	<meta name="author" content="Paul Issot"/>
	<?php include("../lib/html/meta-link.html"); ?>
</head>
<body>

<?php include("../lib/html/header.bs.html"); ?>

<!-- Block -->
<div id="block">
	<?php include("../lib/html/nav.en.html"); ?>
	<!-- Information/image -->
	<div id="block_info">
		<h4>Prevod na Bosanski</h4>
		<p>
			SliTaz je slobodan operativni sustav koji pruža potpuno 
			opremljen desktop ili poslužitelj manje od 35MB.
		</p>
		<p>
			U živoj modi, SliTaz može izvoditi u potpunosti RAM-a i 
			dignuti se iz prijenosnih medija kao što su CD ili USB ključa.
			Sustav je siguran, stabilan i jednostavan za korištenje.
			<a href="about/">Više informacija...</a>
		</p>
	</div>
</div>

<?php include("../lib/lang.php"); ?>

<!-- Content -->
<div id="content">

<div class="box-up">
	<p>
		Pomozite nam uzeti <a href="http://www.gofundme.com/3ql70">namjenski poslužitelj</a>,
		i pogledaj te naš <a href="http://usbkey.slitaz.org/">USB Projekt!</a>!
	</p>
</div>

<!--
    SliTaz news starting.
-->

<h2>Naslovi</h2>

<p>
	SliTaz web stranica pruža glavnu vijesti o projektu, vijesti 
	generalne aktivnost o potprojektima možete naći na
	<a href="http://scn.slitaz.org/">zajedničkoj stranici</a>. Oba su
    dostupni na <a href="/rss.xml">XML feed</a>. Ovaj projekt također 
    objavljuje male mjesečne oglase. Ova stranica i
	<a href="../">početna stranica</a> će vam dati lijep pregled najnovijih 
	vijesti, počine, i tweetove.
</p>

<div class="box">
	<img src="/images/news.png" alt="[ ]" />
	<a href="http://scn.slitaz.org/">Vijesti iz Blog</a> |
	<a href="http://doc.slitaz.org/en:newsletter:start">Mjesečni Oglasi</a>
</div>

<div class="news">
<a name="news"></a>

<ul>
	<!-- <li id="d20120223">
		<strong>Date - Title</strong>
	<p></p>
	</li> -->

	<li id="d20120410">
		<strong>10 Apr 2012 - SliTaz GNU/Linux 4.0</strong>
	<p>
		SliTaz suradnici su sa zadovoljstvom najavili izlazak nove 
		stabilne distribucije SliTaz GNU / Linux 4.0. Dvije godine rada, 
		zajednici su stvorili pouzdan sustav, čak i kraće 
		vrijeme dizanja s više od 1000 novih instalirani paketa.
	</p>
	<p>
        SliTaz pruža potpun grafički desktop u 35MB na temelju LXDE i OPENBOX 
        koji radi u potpunosti 192MB RAM-a. Njegov novi 4in1 CD image može 
        biti instalirana na hard disk sa samo 48MB, automatski birajući konfiguraciju 
        koja najbolje odgovara vašem hardveru.
	</p>
	<p>
		Domaći alati su narasli. Tazpkg donosi novi sustav obavijesti i 
		puno je brži čak sa povećanja broja paketa i Tazpanel omogućuje 
		novi centralizirani sustav upravljanja. 
        Možete pročitati <a href="doc/releases/4.0/relnotes.en.html">Obavijesti o Izdanju</a> 
		i preuzimanje SliTaz 4.0 sa našeg poslužavnika:
		<a href="http://mirror.slitaz.org/iso/4.0/slitaz-4.0.iso">slitaz-4.0.iso</a>
	</p>
	</li>

	<li id="d20120303">
		<strong>03 Mar 2012 - SliTaz 4.0-RC2</strong>
	<p>
		Slitaz tim sa zadovoljstvom najavljuje novi SliTaz 4.0-RC2 
		kandidat. Mi smo učinili veliku količinu posla popravljajući grešaka 
		iz RC1 i na krajnjeg korisnika domaćeg alata kao što su TazPKG, 
		TazPanel i TazUSB. WiFi veza je lakše preko TazPanel ili novog 
		wifibox. TazPKG ima bolju desktop integraciju i novi obavijest 
		sustav.
	</p>
	<p>
		Ova nova verzija dolazi s potpunim Xorg paketom i DRI podršku kao i 
		NV, Intel, Geode i vesa driveri rade iz kutije. Također smo 
		obnovili sve pakete opet i sačuvali ~ 2Mb u jezgru LiveCD, pa 
		sada uključujemo Lxrandr, Parcellite i transmission BiTorrent klijent.
	</p>
	<p>
		Želimo se zahvaliti svima koji su testirali prvi pustani kandidat, 
		ovaj RC2 je u blizini nadolazeći SliTaz 4.0 verzije koja je 
		planirana za dvije sedmice. Preuzmite RC2 ISO image sa našeg 
		poslužavnika (35.1Mb):
		<a href="http://mirror.slitaz.org/iso/cooking/slitaz-4.0-RC2.iso">SliTaz 4.0-RC2</a>
	</p>
	</li>

	<li id="d20120223">
		<strong>23 Feb 2012 - SliTaz 4.0 -RC1</strong>
	<p>
		Tim SliTaz sa zadovoljstvom najavljuje trenutnu 
		dostupnost prvog izlaska kandidata za SliTaz 4.0. SliTaz se može 
		dignuti u roku 10-12 sekundi, prilično novog hardvera i sa novom 
		4in1 ISO image možete instalirati SliTaz desktop samo sa 48MB 
		RAM-a. 4in1 ISO je u stanju automatski detektirati memorije i 
		može dignuti SliTaz u tekstualnoj modi, za minimalano X okolišce 
		ili potpun grafički desktop.
	</p>
	<p>
		SliTaz 4.0 će imati više od 3.000 paketa u 
		repozitorij i RC serija omogućuje nam praćenje novi bugova. 
		Od naše zadnje kuhane verzije, svi paketi su obnovljeni dva 
		puta, tako da bi se osiguralo izgradnje kvaliteta.
	</p>
	<p>
		RC2 ISO image će vas pitati s novim grafičkim izborniku
		konfiguracije jezika i tastature. ISO image ima novi desktop 
		izgled i umjetnička djela, kao i novi command line instaler sa 
		CGI/Web sučelja dostupni putem TazPanel. Možete preuzeti ovu 
		novu ISO image iz našeg poslužavnika:
		<a href="http://mirror.slitaz.org/iso/cooking/slitaz-4.0-RC1.iso">SliTaz 4.0-RC1</a>
	</p>
	</li>

	<li><a href="news/">Više vijesti</a> ili pregledaj arhivu:
		<a href="news/2007.php">2007</a> |
		<a href="news/2008.php">2008</a> |
		<a href="news/2009.php">2009</a> |
		<a href="news/2010.php">2010</a> |
		<a href="news/">2011</a>
	</li>
</ul>

<!-- End of news -->
</div>

<h2>Projekt aktivnosti</h2>

<?php require_once("../lib/get-feeds.php"); ?>

<div class="activity">
	<p>
		<a href="http://scn.slitaz.org/activity/"><img
			src="/images/users.png" alt="[ ]" /></a>
		Zajednička aktivnost
		<?php get_feed("scn.xml"); ?>
	</div>
	<p class="activity_more">
		<a href="http://scn.slitaz.org/activity/">Više akcije</a>
	</p>
</div>

<div class="activity">
	<p>
		<a href="http://forum.slitaz.org/"><img
			src="/images/support.png" alt="[ ]" /></a>
		Forum aktivnost
		<?php get_feed_forum("forum.xml"); ?>
	</div>
	<p class="activity_more">
		<a href="http://forum.slitaz.org/">Više podrška</a>
	</p>
</div>

<div class="activity">
	<p>
		<a href="http://hg.slitaz.org/">
			<img src="/images/development.png" alt="[ ]" /></a>
		Posljednji počini u woku
		<?php get_feed("wok.xml"); ?>
	</div>
	<p class="activity_more">
		<a href="http://hg.slitaz.org/">Više počina</a>
	</p>
</div>

<h2>Podrži nas</h2>

<p>
	Napravite SliTaz čak i više popularniji ili učinite donaciju. 
	Možete koristiti PayPal ili Flattr Micropayment monetarne potpore 
	nama. Možete Blog, Tweet, i razgovarati o projektu pomoći 
	u širenju SliTaz. Također se možete pridružiti projektu da se povežete i 
	uključiti na SliTaz
	<a href="http://scn.slitaz.org/">Zajedničkoj Mreži</a>.
</p>
<p>
	Vi također možete postati službeni sponzor putem mjesečne 
	donacije ili pružiti hardverska poslužiteljska sredstva.
	<a href="sponsor/">Više informacija</a>
</p>

<?php include("../lib/html/donate.html"); ?>

<h3>Twitter &amp; Facebook</h3>

<?php include("../lib/html/social.html"); ?>

<!-- End of content  -->
</div>

<?php include("../lib/html/footer.html"); ?>

</body>
</html>
