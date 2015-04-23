<!DOCTYPE html>
<html lang="it">
<head>
	<meta charset="utf-8"/>
	<title>SliTaz - Documentazione Italiana</title>
	<meta name="description" content="SliTaz GNU/Linux English documentationx part livecd tazpkg packages"/>
	<meta name="keywords" lang="en" content="System, free, gnu, linux, opensource software, livecd in RAM"/>
	<meta name="author" content="Alessandro Frisenda"/>
<?php include("../../lib/html/meta-link.html"); ?>
</head>
<body>

<?php include("../../lib/html/header.html"); ?>

<!-- Block -->
<div id="block">
	<?php include("../../lib/html/nav.it.html"); ?>
	<!-- Information/image -->
	<div id="block_info">
		<h4>Documentazione Inglese</h4>
		<p>
			La documentazione ufficiale di SliTaz è disponibile sul Wiki
			della comunità. I manuali ed una guida per iniziare sono forniti
			da ogni LiveCD di SliTaz e disponibili attraverso il menù
			"Documentazione".
		</p>
		<ul>
			<li><a href="http://doc.slitaz.org/it:start">Novo Wiki della Comunità</a></li>
			<li><a href="http://doc.slitaz.org/en:start">Wiki della Comunità (EN)</a></li>
			<li><a href="http://hg.slitaz.org/slitaz-doc/raw-file/tip/slitaz/index.en.html"
				>Guida per Iniziare (EN)</a></li>
		</ul>
	</div>
</div>

<?php include("../../lib/lang.php"); ?>

<!-- Content -->
<div id="content">

<h2>Manuale &amp; "Ricettario"</h2>

<p>
	Il <a href="http://doc.slitaz.org/en:handbook:start">Manuale</a> di SliTaz - 
	Utilizzo del LiveCD, gestore pacchetti, amministrazione della rete e
	del sistema e istruzioni specifiche. Questo manuale è uno sforzo della
	comunità per fornire una documentazione di alta qualità agli utilizzatori
	di SliTaz. Esso vi aiuterà ad iniziare con SliTaz GNU/Linux e vi mostrerà
	come configurare il sistema in base alle vostre esigenze e preferenze.
	Questa è la documentazione che ti consigliamo di leggere, imparare e
	consultare per prima.
</p>
<p>
	<a href="http://doc.slitaz.org/en:cookbook:start">"Ricettario"</a> di SliTaz - 
	Informazioni per quanto riguarda la gestione, le operazioni e lo sviluppo
	della distribuzione. Istruzioni su come utilizzare le ricezioni dei
	pacchetti, descrizioni di scripts d'avvio, files rootcd e vari strumenti.
</p>

<h2>Scratchbook</h2>

<p>
	Storicamente, lo Scratchbook è stato scritto quando SliTaz è stato creato
	e non era fatto per essere aggiornato. Ma nel tempo, alcuni contibutori
	di SliTaz hanno migrato il libro verso il Wiki e hanno apportato alcuni
	aggiornamenti: <a href="http://doc.slitaz.org/en:scratchbook:start">
	Scratchbook della Comunità</a>
</p>
<p>
	<a href="/en/doc/scratchbook/">Scratchbook Originale</a> di SliTaz -
	Descrive le fasi della creazione della prima distribuzione SliTaz a partire
	con le istruzioni su come compilare il Kernel Linux, installare il server
	grafico (Xvesa), le applicazioni GTK ecc. Esso contiene tecniche
	richiedenti tempo e motivazione per abilitarvi a costruire un sistema
	GNU/Linux dali sorgenti.
</p>

<h2>Manuali</h2>
<ul>
	<li><a href="http://hg.slitaz.org/tazpkg/raw-file/tip/doc/tazpkg.en.html"
		>Manuale Tazpkg</a> -  Gestore pacchetti di SliTaz.</li>
	<li><a href="http://hg.slitaz.org/tazlito/raw-file/tip/doc/tazlito.en.html"
		>Manuale Tazlito</a> -  Strumento LiveCD di SliTaz.</li>
	<li><a href="http://hg.slitaz.org/tazusb/raw-file/tip/doc/tazusb.en.html"
		>Manuale TazUSB</a> -  Strumento LiveUSB di SliTaz.</li>
	<li><a href="http://hg.slitaz.org/cookutils/raw-file/tip/doc/cookutils.en.html"
		>Manuale Cookutils</a> -  Creatore Pacchetti di SliTaz.</li>
</ul>

<h2>Note di Rilascio</h2>

<p>
Le note di rilascio di SliTaz forniscono informazioni dettagliate riguardanti
la versione stabile e danno alcuni utili consigli per aiutarvi ad iniziare
l'utilizzo del sistema. Sul LiveCD, le note di rilascio sono installate e
disponibili attraverso il menù "Documentazione".
</p>

<ul>
<?php
	$relnotes = array();
	for ($release = 1;; $release++) {
		$file = "releases/".$release.".0/relnotes.it.html";
		if (!file_exists($file)) {
			$file = "../../en/doc/releases/".$release.".0/relnotes.en.html";
			if (!file_exists($file))
				break;
		}
		array_unshift($relnotes, array("release" => $release.".0", "file" => $file));
	}
	foreach ($relnotes as $release) {
		print "	<li><a href=\"".$release["file"]."\">SliTaz GNU/Linux ".$release["release"]." -\n";
		print "		Note di Rilascio</a></li>\n";
	}
?>
</ul>

<!-- End of content -->
</div>

<?php include("../../lib/html/footer.html"); ?>

</body>
</html>
