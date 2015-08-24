<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="utf-8"/>
	<title>Архив новостей | SliTaz</title>
	<meta name="description" content="Архив новостей SliTaz"/>
	<meta name="keywords" lang="ru" content="система, свободная, Gnu, Linux, открытое ПО, Livecd в RAM"/>
	<meta name="author" content="Christophe Lincoln"/>
	<?php include("../../lib/html/meta-link.html"); ?>
</head>
<body>

<?php
include("../../config.php");
include("../../lib/html/header.ru.html");
include("../../lib/html/nav.ru.html"); 
include("../../lib/lang.php"); 
?>

<!-- Content -->
<div id="content">

<h2>SliTaz новостей</h2>
<p>
	Check out <a href="http://scn.slitaz.org/">Slitaz Community blog</a>
	for specific and small news about the project.
</p>

<div class="news">

<ul>
	<li id="d20140216">
		<strong>16 Feb 2014 - New SliTaz Cooking Release</strong>
	<p>
		The Slitaz team is proud to announce the release of a new Cooking
		version which paves the road to SliTaz 5.0. This new Cooking includes
		almost 2 years of work and has an incredible ChangeLog. All our home
		made tools have been improved with some great new tools such as 
		'frugal' or 'decode'. We focused a lot of work on Desktop integration
		to provide a finer user experience and have largely improved the Linux
		Kernel (3.2.53) configuration.
	</p>
	<p>
		On the packages side we updated all existing packages and also added
		a bunch of new packages to reach more than 4200 packages in the 
		Cooking database. Lots of work has also been done on the SliTaz 
		installer which provides a new Ncurses/text front-end.
	</p>
	<p>
		The LiveCD will now ask for language settings before booting so users
		can get directly to the Desktop after boot scripts have been executed.
		The size of the ISO image has grown a little due to better hardware
		support and new functions. You can download the ISO image from a SliTaz
		mirror (40 Mb): 
		<a href="http://mirror.slitaz.org/iso/cooking/slitaz-cooking.iso"
			>slitaz-cooking.iso</a>
		[ <a href="http://mirror.slitaz.org/iso/cooking/slitaz-cooking.md5"
			>md5</a> ]
	</p>
	</li>
</ul>

<!-- End of news -->
</div>

<h2 id="archives">News archives</h2>

<p>
	<img src="/images/news.png" alt="*" />
	<a href="2007.php">2007</a> | <a href="2008.php">2008</a> |
	<a href="2009.php">2009</a> | <a href="2010.php">2010</a> |
	<a href="2011.php">2011</a> | <a href="2012.php">2012</a> |
	<a href="index.php">2014</a>
</p>

<!-- End of content -->
</div>

<?php include("../../lib/html/footer.ru.html"); ?>

</body>
</html>
