<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="it" lang="it">
<head>
	<title>SliTaz GNU/Linux (it)</title>
	<meta http-equiv="content-type" content="text/html; charset=ISO-8859-1" />
	<meta name="description" content="SliTaz GNU/Linux LiveCD in italian" />
	<meta name="keywords" lang="it" content="System, free, gnu, linux, software opensource, livecd LINUX in RAM" />
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
			SliTaz � un sistema operativo gratuito che offre un desktop o server
			completo in meno di 35 MB.
		</p>
		<p>
			In modalit� Live SliTaz pu� girare completamente nella memoria RAM
			e partire da dispositivi portatili e rimovibili come un cdrom o una
			chiavetta USB. Il sistema � sicuro, stabile e facile da utilizzare.
			<a href="../en/about/">Pi� informazioni...(en)</a>
		</p>
	</div>
</div>

<!-- Languages -->
<div id="lang">
	<a href="../i18n.php">
		<img src="../images/locale.png" alt="locale.png" /></a>
	<a href="../da/">Dansk</a>
	<a href="../de/">Deutsch</a>
	<a href="../en/">English</a>
	<a href="../es/">Espa�ol</a>
	<a href="../fr/">Fran�ais</a>
	<a href="../id/">Indonesian</a>
	<a href="../it/">Italiano</a>
	<a href="../pt/">Portugu�s</a>
	<a href="../cn/">Chinese</a>
</div>

<!-- Content -->
<div id="content">

<!-- <div class="box">
	<img src="../images/update.png" style="float: left; margin-right: 10px; " />
	<p>
		Call for sponsor!
	</p>
</div> -->

<!--
    SliTaz news starting.
-->

<h2>Ultime Novit�</h2>
<p>
	Il sito di SliTaz offre le novit� principali del progetto nonch� le novit�
	sulle attivit� generali dei sotto-progetti sul
	<a href="http://scn.slitaz.org/">sito della comunit�</a>. Entrambi sono
	disponibili come <a href="../en//rss.xml">feed XML</a>. Il progetto pubblica
	anche una piccola Newsletter mensile. Questa pagina e il sito web
	<a href="../">Pagina Principale</a> vi dar� una buona panoramica delle
	ultime novit�, impegni e Tweets.
</p>

<div class="box">
	<img src="../images/news.png" alt=".png" />
	<a href="http://scn.slitaz.org/">Novit� dal Blog</a> |
	<a href="http://doc.slitaz.org/en:newsletter:start">Newsletter Mensile</a>
</div>

<div class="news">

<ul>
	<!-- <li><strong>Date - Title</strong>
	<p></p>
	</li> -->

	<li>
	<strong>29 Marzo 2011 - Nuova Cooking 20110329</strong>
	<p>
	Il team di SliTaz � felice di annunciare il rilascio di una nuova cooking
	ISO caratterizzata da oltre 2900 pacchetti. Tutti i pacchetti sono stati
	ricostruiti usando il nostro nuovo strumento di cooking , ora incluso in
	tazwok. Esso contiene il Kernel Linux 2.6.37 compilato su glibc 2.13,
	binutils 2.21 &amp; gcc 4.5.2. Il Core LiveCD include Midori 0.3.3. Tazpkg
	ora � interamente tradotto in Francese e siamo disponibili per ricevere
	ulteriori traduzioni. Tazwok � stato interamente reiscritto ed � ora
	possibile ricucocere SliTaz da Scratch usando qualsiasi ISO. Questa ISO
	� la prima di una serie di release candidate che ci porter� ad un rilascio
	stabile ovvero la 4.0.
	</p>
	<p>
	Un sacco di lavoro � stato fatto dalla nostra ultima cooking ISO rilasciata
	a novembre: pi� di 2200 cambiamenti sono stati apportati al lavoro, e diverse
	centinaia ancora negli strumenti fatti in casa. Siamo orgogliosi di
	annunciare che la comunit� di SliTaz � cresciuta un sacco in questi ultimi
	mesi: lo scorso anno, molti pi� cambiamenti sono stati apportati che nei
	quattro precedenti. Comunque, quantit� non significa qualit�. Abbiamo
	bisogno il vostro aiuto per testare questa nuova ISO per poi riportare
	eventuali bugs. Se volete, siete i benvenuti per aiutare a sistemare i
	problemi conosciuti prima che la 4.0 venga rilasciata. Puoi partecipare
	ai membri della squadra via IRC, mailing-list, forums o mandando una mail
	ai manutentori dei pacchetti. Speriamo gradiate questo nuovo
	<a href="get/">rilascio!</a>
	</p>
	</li>

	<li><a href="../en/news/">Pi� novit�</a> o sfoglia gli archivi (English):
	<a href="../en/news/2007.html">2007</a> |
	<a href="../en/news/2008.html">2008</a> |
	<a href="../en/news/2009.html">2009</a></li>
</ul>

<!-- End of news -->
</div>

<h2>Attivit� del Progetto</h2>
<?php
	require_once("../lib/get-feeds.php");
?>

<div class="activity">
	<p>
		<a href="http://scn.slitaz.org/activity/"><img
			src="../images/users.png" alt="users.png" /></a>
		Bacheca degli Sviluppatori
		<?php get_feed("scn.xml"); ?>
	</div>
	<p class="activity_more">
		<a href="http://scn.slitaz.org/activity/">Pi� Attivit�</a>
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
			<img src="../images/development.png" alt="development.png" /></a>
		Ultimi impegni in progresso
		<?php get_feed("wok.xml"); ?>
	</div>
	<p class="activity_more">
		<a href="http://hg.slitaz.org/">Pi� Impegni</a>
	</p>
</div>

<h2>Supportaci</h2>
<p>
	Rendi SliTaz ancora pi� popolare o fai una donazione. Puoi utlizzare PayPal
	o un Flattr micropayment per supportarci monetariamente. Puoi parlare
	del nostro progetto tramite Blog, Tweets, o qualsiasi altra cosa per
	aiutarci a diffonderlo. Puoi anche prendere parte direttamente al
	progetto sulla <a href="http://scn.slitaz.org/">Comunit� di SliTaz</a>.
</p>

<?php include("../lib/html/donate.html"); ?>

<h3>Twitter &amp; Facebook</h3>

<?php include("../lib/html/social.html"); ?>

<!-- End of content  -->
</div>

<?php include("../lib/html/footer.html"); ?>

</body>
</html>
