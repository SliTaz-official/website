<!DOCTYPE html>
<html lang="de">
<head>
	<meta charset="utf-8"/>
	<title>SliTaz - Pakete</title>
	<meta name="description" content="SliTaz GNU/Linux Pakete"/>
	<meta name="keywords" lang="de" content="slitaz download, get slitaz, tazpkg"/>
	<meta name="author" content="F Steiner (Sevala)"/>
	<?php include("../../lib/html/meta-link.html"); ?>
</head>
<body>

<?php include("../../lib/html/header.html"); ?>

<!-- Block -->
<div id="block">
	<?php include("../../lib/html/nav.de.html"); ?>
	<!-- Information/image -->
	<div id="block_info">
		<h4>Pakete</h4>
		<p>
			Über die folgenden Listen können Sie alle auf dem 
			SliTaz-Mirror verfügbaren Pakete einsehen. Die Listen werden
			jeden Tag automatisch neu generiert. Sofern Sie einen 
			Internetzugang besitzen können Sie jedes dieser Pakete 
			mit dem Befehl <code>tazpkg get-install "pkgname"</code>
			installieren. Genauere Informationen dazu erhalten Sie im 
			<a href="http://doc.slitaz.org/de:start">Wiki</a>.
		</p>
	</div>
</div>

<?php include("../../lib/lang.php"); ?>

<!-- Content -->
<div id="content">

<div style="text-align: center; margin-bottom: 40px;">
	<form method="post" action="http://pkgs.slitaz.org/">
		<div class="searchbox">
			<p>
				<input type="hidden" name="lang" value="de" />
				<input type="text" name="query" size="24" style="width: 80%;" />
				<input type="submit" name="search" value="Suchen" />
			</p>
		</div>
		Suche für:
		<select name="object">
			<option value="Package">Pakete</option>
			<option value="Desc">Beschreibung</option>
			<option value="Tags">Tags</option>
			<option value="Depends">Depends</option>
			<option value="BuildDepends">BuildDepends</option>
			<option value="File">Datei</option>
			<option value="File_list">Datei liste</option>
			<option value="FileOverlap">common files</option>
		</select>
		in
		<select name="version">
			<option value="cooking">cooking</option>
			<option value="stable">stable</option>
			<option value="2.0">2.0</option>
			<option value="1.0">1.0</option>
		</select>
	</form>
</div>

<div class="box">
	<img src="/images/text.png" alt="[ ]" />
	Raw packages.list:
	<a href="http://mirror.slitaz.org/packages/stable/packages.list"
		>Stable</a> |
	<a href="http://mirror.slitaz.org/packages/cooking/packages.list"
		>Cooking</a><br />
	<img src="/images/network.png" alt="[ ]" />
	Main mirror:
	<a href="http://mirror.slitaz.org/packages/"
		>http://mirror.slitaz.org/packages/</a>
</div>

<h2>Activity</h2>

<?php require_once("../../lib/get-feeds.php"); ?>

<div class="activity">
	<p>
		<a href="http://hg.slitaz.org/"><img 
			src="/images/development.png" alt="[ ]" /></a>
		Latest commits in wok
		<?php get_feed("wok.xml"); ?>
	</div>
	<p class="activity_more">
		<a href="http://hg.slitaz.org/">More commits</a>
	</p>
</div>

<h2>Documentation</h2>
<p>
	The SliTaz project provides detailed 
	<a href="http://doc.slitaz.org/">documentation</a>
	to let you learn how to install and manage packages on your SliTaz 
	GNU/Linux distribution. 
	The <a href="http://forum.slitaz.org/">support forum</a> members 
	will help you in case of trouble and is also the place to request 
	a new package.
</p>

<!-- End of content -->
</div>

<?php include("../../lib/html/footer.html"); ?>

</body>
</html>
