<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
	"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<title>SliTaz - News</title>
	<meta name="description" content="SliTaz news archives info release" />
	<meta name="keywords" lang="en" content="System, free, gnu, linux, opensource software, livecd in RAM" />
	<meta name="author" content="Christophe Lincoln"/>
	<?php include("../../lib/html/meta-link.html"); ?>
</head>
<body>

<?php include("../../lib/html/header.html"); ?>

<!-- Block -->
<div id="block">
	<?php include("../../lib/html/nav.en.html"); ?>
	<!-- Information/image -->
	<div id="block_info">
		<h4>News archives</h4>
		<p>
			Website news archives by year. Note that some links may be
			broken due to website structure changes (mainly the docs
			that moved to their own domain).
		</p>
		<p>
			<img src="/images/news.png" alt="[ ]" />
			<a href="2007.php">2007</a> | <a href="2008.php">2008</a>
			| <a href="2009.php">2009</a> | <a href="2010.php">2010</a>
			| <a href="2011.php">2011</a> | <a href="2012.php">2012</a>
		</p>
	</div>
</div>

<?php include("../../lib/lang.php"); ?>


<!-- Content -->
<div id="content">

<h2>SliTaz News</h2>

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

</div>

<!-- End of content -->
</div>

<?php include("../../lib/html/footer.html"); ?>

</body>
</html>
