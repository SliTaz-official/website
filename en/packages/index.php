<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
    <title>SliTaz - Packages</title>
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <meta name="description" content="SliTaz GNU/Linux LiveCD packages" />
    <meta name="keywords" lang="en" content="package, tazpkg" />
    <meta name="author" content="Christophe Lincoln, Paul Issot"/>
    <?php include("../../lib/html/meta-link.html"); ?>
</head>
<body>

<?php include("../../lib/html/header.html"); ?>

<!-- Block -->
<div id="block">
	<?php include("../../lib/html/nav.en.html"); ?>
	<!-- Information/image -->
	<div id="block_info">
		<h4>Packages</h4>
		<p>
			This part of the site allows you to view all of the software
			packages available on the SliTaz mirror. The pages are 
			automatically updated daily via a cron job. All packages are
			installable via the package manager Tazpkg using the GUI or
			the command <code>tazpkg get-install pkgname</code>.
		</p>
		<p>
			Browse the packages web interface: 
			<a href="http://pkgs.slitaz.org/stable/">Stable</a>
			| <a href="http://pkgs.slitaz.org/cooking/">Cooking</a>
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
		Search for:
		<select name="object">
			<option value="Package">Package</option>
			<option value="Desc">Description</option>
			<option value="Tags">Tags</option>
			<option value="Depends">Depends</option>
			<option value="BuildDepends">BuildDepends</option>
			<option value="File">File</option>
			<option value="File_list">File list</option>
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

<h2>Activity</h2>

<?php require_once("../../lib/get-feeds.php"); ?>

<div class="activity">
	<p>
		<a href="http://hg.slitaz.org/"><img 
			src="/images/development.png" alt="[ Devel ]" /></a>
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
