<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
    <title>SliTaz - Pacchetti</title>
    <meta http-equiv="content-type" content="text/html; charset=ISO-8859-1" />
    <meta name="description" content="SliTaz GNU/Linux LiveCD packages" />
    <meta name="keywords" lang="en" content="package, tazpkg" />
    <meta name="robots" content="index, follow, all" />
    <meta name="modified" content="<?php echo (date( "Y-m-d H:i:s", getlastmod())); ?>" />
    <meta name="author" content="Alessandro Frisenda"/>
    <link rel="shortcut icon" href="../../favicon.ico" />
    <link rel="stylesheet" type="text/css" href="../../slitaz.css" />
</head>
<body>

<!-- Header -->
<div id="header">
	<div id="logo"></div>
	<div id="network">
		<a href="http://www.slitaz.org/netmap.php">
			<img src="../../images/network.png" alt="network.png" /></a>
		<a href="http://scn.slitaz.org/">Comunit�</a>
		<a href="http://doc.slitaz.org/">Documentazione</a>
		<a href="http://forum.slitaz.org/">Forum</a>
		<a href="http://bugs.slitaz.org">Bugs</a>
		<a href="http://hg.slitaz.org/">Repo</a>
	</div>
	<h1><a href="http://www.slitaz.org/">SliTaz GNU/Linux</a></h1>
</div>

<!-- Block -->
<div id="block">
	<!-- Navigation -->
	<div id="block_nav">
		<h4>Navigazione</h4>
		<div class="right_box">
			<ul>
				<li><a href="../mailing-list.html">Mailing List</a></li>
				<li><a href="../../en/devel/">Sviluppo</a> (en)</li>
				<li><a href="../packages/">Pacchetti</a></li>
				<li><a href="../../en/artwork/">Artwork</a> (en)</li>
				<li><a href="../../en/search.html">Cerca</a> (en)</li>
			</ul>
		</div>
		<div class="left_box">
			<ul>
				<li><a href="../">Ultime Novit�</a></li>
				<li><a href="../../en/about/">Informazioni</a> (en)</li>
				<li><a href="../get/">Scarica</a></li>
				<li><a href="../../en/asso/">Associazione</a> (en)</li>
				<li><a href="../doc/">Documentazione</a></li>
			</ul>
		</div>
	</div>
	<!-- Information/image -->
	<div id="block_info">
		<h4>Pacchetti</h4>
		<p>
			Questa parte del sito vi permette di vedere tutto dei pacchetti
			software disponibili nelle fonti di SliTaz. Le pagine sono
			automaticamente aggiornate quotidianamente. Tutti i pacchetti sono
			installabili tramite il gestore pacchetti Tazpkg usando
			l'interfaccia grafica o il comando:
			<code>tazpkg get-install pkgname</code>.
		</p>
		<p>
			Sfoglia l'interfaccia web dei pacchetti: 
			<a href="http://pkgs.slitaz.org/stable/">Stabile</a>
			| <a href="http://pkgs.slitaz.org/cooking/">Cooking</a>
		</p>
	</div>
</div>

<!-- Content -->
<div id="content">

<div style="text-align: center; margin-bottom: 40px;">
	<form method="post" action="http://pkgs.slitaz.org/search.cgi">
		<div class="searchbox">
			<p>
				<input type="hidden" name="lang" value="en" />
				<input type="text" name="query" size="24" style="width: 80%;" />
				<input type="submit" name="search" value="Cerca" />
			</p>
		</div>
		Cerca per:
		<select name="object">
			<option value="Package">Pacchetto</option>
			<option value="Desc">Descrizione</option>
			<option value="Tags">Parole Chiave</option>
			<option value="Depends">Dipendenze</option>
			<option value="BuildDepends">Dipendenze di Costruzione</option>
			<option value="File">File</option>
			<option value="File_list">Lista File</option>
			<option value="FileOverlap">Files Comuni</option>
		</select>
		in
		<select name="version">
			<option value="cooking">Cooking</option>
			<option value="stable">Stabile</option>
			<option value="2.0">2.0</option>
			<option value="1.0">1.0</option>
		</select>
	</form>
</div>

<div class="box">
	<img src="../../images/text.png" alt="text.png" />
	Lista pacchetti:
	<a href="http://mirror.slitaz.org/packages/stable/packages.list"
		>Stabile</a> |
	<a href="http://mirror.slitaz.org/packages/cooking/packages.list"
		>Cooking</a>
	<img src="../../images/network.png" alt="text.png" />
	Fonte principale:
	<a href="http://mirror.slitaz.org/packages/"
		>http://mirror.slitaz.org/packages/</a>
</div>

<h2>Attivit�</h2>

<?php require_once("../../libs/get-feeds.php"); ?>

<div class="activity">
	<p>
		<a href="http://hg.slitaz.org/">
			<img src="../../images/development.png" alt="development.png" /></a>
		Ultimi impegni in progresso
		<?php get_feed("wok.xml"); ?>
	</div>
	<p class="activity_more">
		<a href="http://hg.slitaz.org/">Pi� impegni</a>
	</p>
</div>

<h2>Documentazione</h2>
<p>
	Il progetto SliTaz fornisce una
	<a href="http://doc.slitaz.org/">documentazione</a>
	dettagliata per permettervi di imparare come installare e gestire i
	pacchetti sulla vostra distribuzione SliTaz GNU/Linux. 
	I membri del <a href="http://forum.slitaz.org/">forum di supporto</a>
	vi aiuteranno in caso di complicazioni, ed � inoltre il posto dove
	richiedere un nuovo pacchetto.
</p>

<!-- End of content -->
</div>

<!-- Footer -->
<div id="footer">
	Copyright &copy; <span class="year"></span>
	<a href="http://www.slitaz.org/">SliTaz</a> - Rete:
	<a href="http://scn.slitaz.org/">Comunit�</a>
	<a href="http://doc.slitaz.org/">Documentazione</a>
	<a href="http://forum.slitaz.org/">Forum</a>
	<a href="http://pkgs.slitaz.org/">Pacchetti</a>
	<a href="http://bugs.slitaz.org">Bugs</a>
	<a href="http://hg.slitaz.org/">Repo</a>
	<p>
		SliTaz @
		<a href="http://twitter.com/slitaz">Twitter</a>
		<a href="http://www.facebook.com/slitaz">Facebook</a>
		<a href="http://distrowatch.com/slitaz">Distrowatch</a>
		<a href="http://en.wikipedia.org/wiki/SliTaz">Wikipedia</a>
		<a href="http://flattr.com/profile/slitaz">Flattr</a>
	</p>
</div>

</body>
</html>