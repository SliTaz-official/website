<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<!-- Danish (da) translation by Bo Vagner Højer - bohoejer@live.dk
   Member of Labitat Hackerspace, Copenhagen - www.labitat.dk
   visit our hackerspace every tuesday evening for free - always hot coffee -->
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="da" lang="da">
<head>
    <title>SliTaz - Packages</title>
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <meta name="description" content="SliTaz GNU/Linux LiveCD programpakker" />
    <meta name="keywords" lang="da" content="pakker, programpakker, tazpkg" />
    <meta name="robots" content="index, follow, all" />
    <meta name="modified" content="<?php echo (date( "Y-m-d H:i:s", getlastmod())); ?>" />
    <meta name="author" content="Linux User"/>
    <link rel="shortcut icon" href="../../favicon.ico" />
    <link rel="stylesheet" type="text/css" href="../../slitaz.css" />
</head>
<body>

<!-- Header -->
<div id="header">
	<div id="logo"></div>
	<div id="network">
		<a href="http://www.slitaz.org/netmap.php">
			<img src="../../images/network.png" alt="netværk: " /></a>
		<a href="http://scn.slitaz.org/">Samfund</a>
		<a href="http://doc.slitaz.org/">Vejledning</a>
		<a href="http://forum.slitaz.org/">Forum</a>
		<a href="http://bugs.slitaz.org">Fejl</a>
		<a href="http://hg.slitaz.org/">Hg</a>
	</div>
	<h1><a href="http://www.slitaz.org/">SliTaz GNU/Linux</a></h1>
</div>

<!-- Block -->
<div id="block">
	<!-- Navigation -->
	<div id="block_nav">
		<h4>Navigation</h4>
		<div class="right_box">
			<ul>
				<li><a href="../mailing-list.php">Postliste</a></li>
				<li><a href="../devel/">Udvikling</a></li>
				<li><a href="../packages/">Programpakker</a></li>
				<li><a href="../artwork/">Grafik</a></li>
				<li><a href="../search.php">Søgning</a></li>
			</ul>
		</div>
		<div class="left_box">
			<ul>
				<li><a href="../">Nyheder</a></li>
				<li><a href="../about/">Om SliTaz</a></li>
				<li><a href="../get/">Hent SliTaz</a></li>
				<li><a href="../asso/">Organisation</a></li>
				<li><a href="../doc/">Vejledning</a></li>
			</ul>				
		</div>
	</div>
	<!-- Information/image -->
	<div id="block_info">
		<h4>Pakker</h4>
		<p>
			Denne del af hjemmesiden tillader dig at gennemse alle
			tilgængelige programpakker på SliTaz filspejlet. Siderne
			er dagligt opdateret via et cronjob. Alle pakker er
			installerbare via den grafiske pakkehåndtering Tazpkg eller ved 
			brug af 
			kommandoen <code>tazpkg get-install pakkenavn</code>.
		</p>
		<p>
			Gennemse pakkelister: 
			<a href="http://pkgs.slitaz.org/stable/">Stabil version</a>
			| <a href="http://pkgs.slitaz.org/cooking/">Udviklingsversion</a>
		</p>
	</div>
</div>

<!-- Languages -->
<div id="lang">
	<a href="../../i18n.php"><img src="../../images/locale.png" alt="Locale:" /></a>
	<b>Dansk</b>
	<a href="../../de/packages/">Deutsch</a>
	<a href="../../en/packages/">English</a>
	<a href="../../es/packages/">Español</a>
	<a href="../../fr/packages/">Français</a>
	Indonesian
	<a href="../../it/packages/">Italiano</a>
	<a href="../../pt/packages/">Português</a>
	<a href="../../ru/packages/">Русский</a>
	<a href="../../cn/packages/">中文</a>
</div>

<!-- Content -->
<div id="content">

<div style="text-align: center; margin-bottom: 40px;">
	<form method="post" action="http://pkgs.slitaz.org/search.cgi">
		<div class="searchbox">
			<p>
				<input type="hidden" name="lang" value="en" />
				<input type="text" name="query" size="24" style="width: 80%;" />
				<input type="submit" name="search" value="Search" />
			</p>
		</div>
		Søg efter:
		<select name="object">
			<option value="Package">Pakke</option>
			<option value="Desc">Beskrivelse</option>
			<option value="Tags">Mærkat</option>
			<option value="Depends">Afhængigheder</option>
			<option value="BuildDepends">Byggeafhængigheder</option>
			<option value="File">Fil</option>
			<option value="File_list">Filliste</option>
			<option value="FileOverlap">fælles filer</option>
		</select>
		i
		<select name="version">
			<option value="cooking">udviklingsversion</option>
			<option value="stable">stabil version</option>
			<option value="2.0">2.0</option>
			<option value="1.0">1.0</option>
		</select>
	</form>
</div>

<div class="box">
	<img src="../../images/text.png" alt="text.png" />
	Rå pakkeliste:
	<a href="http://mirror.slitaz.org/packages/stable/packages.list"
		>Stabil version</a> |
	<a href="http://mirror.slitaz.org/packages/cooking/packages.list"
		>Udviklingsversion</a>
	<img src="../../images/network.png" alt="text.png" />
	Centralt filspejl:
	<a href="http://mirror.slitaz.org/packages/"
		>http://mirror.slitaz.org/packages/</a>
</div>

<h2>Aktivitet</h2>

<?php require_once("../../libs/get-feeds.php"); ?>

<div class="activity">
	<p>
		<a href="http://hg.slitaz.org/">
			<img src="../../images/development.png" alt="udvikling" /></a>
		Latest commits in wok
		<?php get_feed("wok.xml"); ?>
	</div>
	<p class="activity_more">
		<a href="http://hg.slitaz.org/">More commits</a>
	</p>
</div>

<h2>Vejledning</h2>
<p>
	SliTaz projektet tilbyder detaljeret 
	<a href="http://doc.slitaz.org/">vejledning</a> for at lære 
	dig at 	installere og håndtere programpakker på din SliTaz 
	GNU/Linux distribution. 
	Medlemmerne af  <a href="http://forum.slitaz.org/">support forumet</a> 
	vil hjælpe dig i tilfælde af problemmer og det er også stedet at efterspørge en 
	ny programpakke. 
</p>

<!-- End of content -->
</div>

<!-- Footer -->
<div id="footer">
	Ophavsret &copy; <span class="year"></span>
	<a href="http://www.slitaz.org/">SliTaz</a> - Netværk:
	<a href="http://scn.slitaz.org/">Samfund</a>
	<a href="http://doc.slitaz.org/">Vejledning</a>
	<a href="http://forum.slitaz.org/">Forum</a>
	<a href="http://pkgs.slitaz.org/">Programpakker</a>
	<a href="http://bugs.slitaz.org">Fejl</a>
	<a href="http://hg.slitaz.org/">Hg</a>
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
