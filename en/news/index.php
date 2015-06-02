<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8"/>
	<title>SliTaz - News</title>
	<meta name="description" content="SliTaz news archives info release"/>
	<meta name="keywords" lang="en" content="System, free, gnu, linux, opensource software, livecd in RAM"/>
	<meta name="author" content="Christophe Lincoln"/>
	<?php include("../../lib/html/meta-link.html"); ?>
</head>
<body>

<?php
include("../../config.php");
include("../../lib/html/header.html");
include("../../lib/html/nav.html"); 
include("../../lib/lang.php"); 
?>

<!-- Content -->
<div id="content">

<h2>SliTaz News</h2>
<p>
	Check out <a href="http://scn.slitaz.org/">Slitaz Community blog</a>
	for specific and small news about the project.
</p>

<div class="news">

<ul>
	<li id="d20150520">
		<strong>20 May 2015 - SliTaz 5.0 RC-3 release</strong>
	<p>
		The Slitaz team is pleased to announce the new SliTaz 5.0-RC3 release 
		candidate. We have done a huge amount of work fixing bugs from RC2 with
		about 2500 commits in our Mercurial repositories. All the 4800 packages
		have been rebuilt to find and fix bugs and to ensure everything can
		be rebuilt from source by advanced users.
	</p>
	<p>
		We have reshaped Tazpanel and add multi user support. The default user is
		nobody with some disabled menu. The login button provides more priviledges.
	</p>
	<p>
		Download: <a href="http://mirror.slitaz.org/iso/5.0/slitaz-5.0-rc3.iso"
			>slitaz-5.0-rc3.iso</a>
		[ <a href="http://mirror.slitaz.org/iso/5.0/slitaz-5.0-rc3.md5"
			>md5</a> ]
	</p>
	</li>
	
	<li id="d20140519">
		<strong>19 May 2014 - SliTaz 5.0 RC-2 release</strong>
	<p>
		The Slitaz team is pleased to announce the new SliTaz 5.0-RC2 release 
		candidate. We have done a huge amount of work fixing bugs from RC1 with
		about 500 commits in our Mercurial repositories. All the 4300 packages
		have been rebuilt to find and fix bugs and to ensure everything can
		be rebuilt from source by advanced users.
	</p>
	<p>
		We took a lot of time to improve users experience with our default and
		custom LXDE desktop. Polkit and udisks configuration has been fixed
		to correctly handle external devices and internal hard disk partitions.
	</p>
	<p>
		The RC2 supports a new installation method. SliTaz can be installed into 
		a single directory without partitioning any hard disk and this method works
		with all file systems including NTFS and FAT32.
	</p>
	<p>
		Download: <a href="http://mirror.slitaz.org/iso/5.0/slitaz-5.0-rc2.iso"
			>slitaz-5.0-rc2.iso</a>
		[ <a href="http://mirror.slitaz.org/iso/5.0/slitaz-5.0-rc2.md5"
			>md5</a> ]
	</p>
	</li>
	
	<li id="d20140502">
		<strong>02 May 2014 - SliTaz 5.0 RC-1 release</strong>
	<p>
		The Slitaz team is pleased to announce the availability of the SliTaz
		GNU/Linux 5.0 Release Candidate 1 (RC-1)! It's very mature, but still
		requires intensive testing before we'll be able to release a fully
		stable version.
	</p>
	<p>
		SliTaz 5.0 RC-1 includes many small bug fixes like the improved dialogs
		for the slitaz-config utility that gives new users the ability to easily
		setup their systems from a graphical or text interface, Tazpanel boasts
		a new look and feel and the distribution now has better language support
		than ever before. We've even fixed support for old ATA hard drives to
		keep with our tradition of being able to run even on ancient systems. 
	</p>
	<p>
		The desktop is again powered by PCmanFM, but with the addition of
		the trash can and gvfs/udisks support. The packages database has
		received over 200 package updates and we've added about 50 new
		packages to the repository. In preparation for the upcoming stable
		release, we've updated the main website with a new style while making
		the interface much easier to use.
	</p>
	<p>
		Download the new <a href="http://mirror.slitaz.org/iso/5.0/slitaz-5.0-rc1.iso"
			>slitaz-5.0-rc1.iso</a>
		[ <a href="http://mirror.slitaz.org/iso/5.0/slitaz-5.0-rc1.md5"
			>md5</a> ]
	</p>
	</li>

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

<h2 id="archives">News archives</h2>

<p>
	<img src="/images/news.png" alt="[ ]" />
	<a href="2007.php">2007</a> | <a href="2008.php">2008</a>
	| <a href="2009.php">2009</a> | <a href="2010.php">2010</a>
	| <a href="2011.php">2011</a> | <a href="2012.php">2012</a>
	| <a href="index.php">2014</a>
</p>

<p>
	Website news archives by year. Note that some links may be
	broken due to website structure changes (mainly the docs
	that moved to their own domain).
</p>

<!-- End of content -->
</div>

<?php include("../../lib/html/footer.html"); ?>

</body>
</html>
