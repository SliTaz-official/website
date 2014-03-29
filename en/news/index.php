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
	<li id="d20140329">
		<strong>29 Mar 2014 - SliTaz Raspberry Pi release</strong>
	<p>
		The SliTaz team is pleased to announce the SliTaz Raspberry Pi 
		20140329 release after 2 years of stabilization and work porting
		SliTaz to the ARM platform. The release provides the latest packages
		cross compiled by the official SliTaz Cooker with more than 420
		mirrored packages. The base flavor size is 22Mb and the JWM/FOX desktop
		flavor reaches only 34 Mb. The desktop flavor provides Adie text
		editor, PathFinder file manager, Links2 web browser, TazIRC,
		a web server, Dropbear SSH client and many common GNU/Linux command
		line tools.
	</p>
	<p>
		SliTaz Raspberry Pi also includes the TazBerry Ncurses utility to 
		configure the system and the SliTaz ARM CGI remote control interface
		with a custom RPi boot plugin. To use SliTaz RPi: download a flavor
		tarball, extract it, run the install.sh script and boot your 
		Raspberry Pi.
	</p>
	<p>
		<a href="http://mirror.slitaz.org/arm/rpi/slitaz-rpi-desktop-20140329.tar.bz2"
			>slitaz-rpi-desktop-20140329</a> (34 Mb) -
		<a href="http://mirror.slitaz.org/arm/rpi/slitaz-rpi-base-20140329.tar.bz2"
			>slitaz-rpi-base-20140329</a> (22 Mb) -
		<a href="http://arm.slitaz.org/rpi/">SliTaz Raspberry Pi Home</a>
	</p>
	<p>
		
	</p>
	</li>
	
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
