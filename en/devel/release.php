<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>SliTaz - Release Guide</title>
	<meta name="description" content="slitaz developers release guide cooking stable packages">
	<meta name="keywords" lang="en" content="slitaz, devel, tazdev, cooking, source">
	<meta name="author" content="Christophe Lincoln">
	<?php include("../../lib/html/meta-link.html"); ?>
</head>
<body>

<?php 
include("../../lib/html/header.html");
include("../../lib/html/nav.html"); 
include("../../lib/lang.php"); 
?>

<!-- Content -->
<section id="content">

<h2>Release Guides</h2>

<ul>
	<li><a href="#cooking">Cooking release</a></li>
	<li><a href="#stable">Stable release</a></li>
	<li><a href="#project">Project release</a></li>
</ul>

<h2 id="cooking">Cooking release</h2>

<p>
	TOWRITE - some non-updated info (we use cookiso now):
	<a href="http://doc.slitaz.org/en:cookbook:reltasks">on the wiki/cookbook</a>
</p>

<h2 id="stable">Stable release</h2>

<p>
	TOWRITE
</p>

<p>
	Instructions on using the build host are described in the Cookbook:
	<a href="http://doc.slitaz.org/en:cookbook:buildhost">
		SliTaz Build Host (tank)</a>.
</p>

<h2 id="project">Project release</h2>

<p>
	SliTaz sub projects are individually released using the SliTaz developers
	tool aka ‘tazdev’. Here is a handy cmdline guide to release a project.
	In this guide we are going to release ‘spk’ 1.0:
</p>

<pre>
$ cd spk
$ hg pull -u
$ hg tag 1.0
$ hg push
$ tazdev -rp spk
</pre>

<p>
	Some packages don't need to be archived on the mirror since they are
	mirrored in the full packages tree. Once that you have released the
	package and said yes to updating the wok (or done it manually), you can
	push it to hg.slitaz.org and wait for the package to build on the SliTaz packages
	<a href="http://cook.slitaz.org/">Cooker</a>. Push to Hg:
</p>

<pre>
$ cd ../wok
$ hg push
</pre>

<!-- End of content -->
</section>

<?php include("../../lib/html/footer.html"); ?>

</body>
</html>
