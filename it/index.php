<!DOCTYPE html>
<html lang="it">
<head>
	<meta charset="utf-8"/>
	<title>SliTaz GNU/Linux (it)</title>
	<meta name="description" content="SliTaz GNU/Linux LiveCD in italian"/>
	<meta name="keywords" lang="it" content="System, free, gnu, linux, software opensource, livecd LINUX in RAM"/>
	<meta name="author" content="Alessandro Frisenda"/>
	<?php include("../lib/html/meta-link.html"); ?>
</head>
<body>

<?php include("../lib/html/header.html"); ?>

<!-- Block -->
<div id="block">
	<?php include("../lib/html/nav.it.html"); ?>
	<!-- Information/image -->
	<div id="block_info">
		<h4>Sito Web Italiano</h4>
		<p>
			SliTaz è un sistema operativo gratuito che offre un desktop o server
			completo in meno di 35 MB.
		</p>
		<p>
			In modalità Live SliTaz può girare completamente nella memoria RAM
			e partire da dispositivi portatili e rimovibili come un cdrom o una
			chiavetta USB. Il sistema è sicuro, stabile e facile da utilizzare.
			<a href="../en/about/">Più informazioni...(en)</a>
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

<h2>Ultime Novità</h2>

<p>
	Il sito di SliTaz offre le novità principali del progetto nonché le novità
	sulle attività generali dei sotto-progetti sul
	<a href="http://scn.slitaz.org/">sito della comunità</a>. Entrambi sono
	disponibili come <a href="/rss.xml">feed XML</a>. Il progetto pubblica
	anche una piccola Newsletter mensile. Questa pagina e il sito web
	<a href="../">Pagina Principale</a> vi darà una buona panoramica delle
	ultime novità, impegni e Tweets.
</p>

<div class="box">
	<img src="/images/news.png" alt="[ ]" />
	<a href="http://scn.slitaz.org/">Novità dal Blog</a> |
	<a href="http://doc.slitaz.org/en:newsletter:start">Newsletter Mensile</a>
</div>

<div class="news">

<ul>
	<!-- <li><strong>Date - Title</strong>
	<p></p>
	</li> -->
	        <li><strong><a href="http://mirror.slitaz.org/iso/rolling/">SliTaz 5.0 Rolling release</a></strong> (weekly) 
                <span>- <?php
                $rol_date_file = '../cache/rolling-date.txt';
                if (file_exists("$rol_date_file")) {
                        $rol_date = file_get_contents("../cache/rolling-date.txt");
                        print $rol_date;
                } ?></span></li>

	<li>
		<strong>29 Marzo 2011 - Nuova Cooking 20110329</strong>
	<p>
	Il team di SliTaz è felice di annunciare il rilascio di una nuova cooking
	ISO caratterizzata da oltre 2900 pacchetti. Tutti i pacchetti sono stati
	ricostruiti usando il nostro nuovo strumento di cooking , ora incluso in
	tazwok. Esso contiene il Kernel Linux 2.6.37 compilato su glibc 2.13,
	binutils 2.21 &amp; gcc 4.5.2. Il Core LiveCD include Midori 0.3.3. Tazpkg
	ora è interamente tradotto in Francese e siamo disponibili per ricevere
	ulteriori traduzioni. Tazwok è stato interamente reiscritto ed è ora
	possibile ricucocere SliTaz da Scratch usando qualsiasi ISO. Questa ISO
	è la prima di una serie di release candidate che ci porterà ad un rilascio
	stabile ovvero la 4.0.
	</p>
	<p>
	Un sacco di lavoro è stato fatto dalla nostra ultima cooking ISO rilasciata
	a novembre: più di 2200 cambiamenti sono stati apportati al lavoro, e diverse
	centinaia ancora negli strumenti fatti in casa. Siamo orgogliosi di
	annunciare che la comunità di SliTaz è cresciuta un sacco in questi ultimi
	mesi: lo scorso anno, molti più cambiamenti sono stati apportati che nei
	quattro precedenti. Comunque, quantità non significa qualità. Abbiamo
	bisogno il vostro aiuto per testare questa nuova ISO per poi riportare
	eventuali bugs. Se volete, siete i benvenuti per aiutare a sistemare i
	problemi conosciuti prima che la 4.0 venga rilasciata. Puoi partecipare
	ai membri della squadra via IRC, mailing-list, forums o mandando una mail
	ai manutentori dei pacchetti. Speriamo gradiate questo nuovo
	<a href="get/">rilascio!</a>
	</p>
	</li>

	<li><a href="/en/news/">Più novità</a> o sfoglia gli archivi (English):
	<a href="/en/news/2007.php">2007</a> |
	<a href="/en/news/2008.php">2008</a> |
	<a href="/en/news/2009.php">2009</a></li>
</ul>

<!-- End of news -->
</div>

<h2>Attività del Progetto</h2>

<?php require_once("../lib/get-feeds.php"); ?>

<div class="activity">
	<p>
		<a href="http://scn.slitaz.org/?log"><img
			src="/images/users.png" alt="[ ]" /></a>
		Bacheca degli Sviluppatori
		<?php get_feed("scn.xml"); ?>
	</div>
	<p class="activity_more">
		<a href="http://scn.slitaz.org/?log">Più Attività</a>
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
		Ultimi impegni in progresso
		<?php get_feed("wok.xml"); ?>
	</div>
	<p class="activity_more">
		<a href="http://hg.slitaz.org/">Più Impegni</a>
	</p>
</div>

<h2>Supportaci</h2>

<p>
	Rendi SliTaz ancora più popolare o fai una donazione. Puoi utlizzare PayPal
	o un Flattr micropayment per supportarci monetariamente. Puoi parlare
	del nostro progetto tramite Blog, Tweets, o qualsiasi altra cosa per
	aiutarci a diffonderlo. Puoi anche prendere parte direttamente al
	progetto sulla <a href="http://scn.slitaz.org/">Comunità di SliTaz</a>.
</p>

<?php include("../lib/html/donate.html"); ?>

<h3>Twitter &amp; Facebook</h3>

<?php include("../lib/html/social.html"); ?>

<!-- End of content  -->
</div>

<?php include("../lib/html/footer.html"); ?>

</body>
</html>
