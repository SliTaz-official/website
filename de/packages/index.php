<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="de" lang="de">
<head>
	<title>SliTaz - Pakete</title>
	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<meta name="description" content="SliTaz GNU/Linux Pakete" />
	<meta name="keywords" lang="de" content="slitaz download, get slitaz, tazpkg" />
	<meta name="robots" content="index, follow, all" />
	<meta name="modified" content="2011-03-26 19:00:00" />
	<meta name="author" content="F Steiner (Sevala)"/>
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
		<a href="http://scn.slitaz.org/">Community</a>
		<a href="http://doc.slitaz.org/">Doc</a>
		<a href="http://forum.slitaz.org/">Forum</a>
		<a href="http://bugs.slitaz.org">Bugs</a>
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
				<li><a href="../mailing-list.php">Mailing List</a></li>
				<li><a href="../devel/">Entwicklung</a></li>
				<li><a href="../packages/">Pakete</a></li>
				<li><a href="../artwork/">Artwork</a></li>
				<li><a href="../search.php">Suchen</a></li>
			</ul>
		</div>
		<div class="left_box">
			<ul>
				<li><a href="../">Neuigkeiten</a></li>
				<li><a href="../about/">Über SliTaz</a></li>
				<li><a href="../get/">Download</a></li>
				<li><a href="../../en/asso/">Association (en)</a></li>
				<li><a href="http://doc.slitaz.org/de:start">Dokumentation</a></li>
			</ul>
		</div>
	</div>
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
	<form method="post" action="http://pkgs.slitaz.org/search.cgi">
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
	<img src="../../images/text.png" alt="text.png" />
	Raw packages.list:
	<a href="http://mirror.slitaz.org/packages/stable/packages.list"
		>Stable</a> |
	<a href="http://mirror.slitaz.org/packages/cooking/packages.list"
		>Cooking</a>
	<img src="../../images/network.png" alt="text.png" />
	Main mirror:
	<a href="http://mirror.slitaz.org/packages/"
		>http://mirror.slitaz.org/packages/</a>
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

<!-- Footer -->
<div id="footer">
	Copyright &copy; <span class="year"></span>
	<a href="http://www.slitaz.org/">SliTaz</a> - Network:
	<a href="http://scn.slitaz.org/">Community</a>
	<a href="http://doc.slitaz.org/">Doc</a>
	<a href="http://forum.slitaz.org/">Forum</a>
	<a href="http://pkgs.slitaz.org/">Packages</a>
	<a href="http://bugs.slitaz.org">Bugs</a>
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
