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
    <meta name="author" content="Linux User"/>
	<?php include("../../lib/html/meta-link.html"); ?>
</head>
<body>

<?php include("../../lib/html/header.da.html"); ?>

<!-- Block -->
<div id="block">
	<?php include("../../lib/html/nav.da.html"); ?>
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

<?php include("../../lib/lang.php"); ?>

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

<?php include("../../lib/html/footer.da.html"); ?>

</body>
</html>
