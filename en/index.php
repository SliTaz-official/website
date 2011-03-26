<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<title>SliTaz GNU/Linux (en)</title>
	<meta http-equiv="content-type" content="text/html; charset=ISO-8859-1" />
	<meta name="description" content="SliTaz GNU/Linux LiveCD" />
	<meta name="keywords" lang="en" content="System, free, gnu, linux, software opensource, livecd LINUX in RAM" />
	<meta name="robots" content="index, follow, all" />
	<meta name="modified" content="<?php echo (date( "Y-m-d H:i:s", getlastmod())); ?>" />
	<meta name="author" content="Paul Issot"/>
	<link rel="shortcut icon" href="../favicon.ico" />
	<link rel="stylesheet" type="text/css" href="../slitaz.css" />
	<link rel="alternate" type="application/rss+xml" title="SliTaz Website feed" href="rss.xml" />
	<link rel="alternate" type="application/atom+xml" title="SliTaz Labs feed" href="http://labs.slitaz.org/news?format=atom" />
	<link rel="alternate" type="application/rss+xml" title="SliTaz SCN feed" href="http://scn.slitaz.org/rss.xml" />
</head>
<body>

<!-- Header -->
<div id="header">
	<div id="logo"></div>
	<div id="network">
		<a href="http://www.slitaz.org/netmap.php">
			<img src="../images/network.png" alt="network.png" /></a>
		<a href="http://scn.slitaz.org/">Community</a>
		<a href="http://doc.slitaz.org/">Doc</a>
		<a href="http://forum.slitaz.org/">Forum</a>
		<a href="http://labs.slitaz.org/issues">Bugs</a>
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
				<li><a href="mailing-list.html">Mailing List</a></li>
				<li><a href="devel/">Development</a></li>
				<li><a href="packages/">Packages</a></li>
				<li><a href="artwork/">Artwork</a></li>
				<li><a href="search.html">Search</a></li>
			</ul>
		</div>
		<div class="left_box">
			<ul>
				<li><a href="./">Headlines</a></li>
				<li><a href="about/">About</a></li>
				<li><a href="get/">Download</a></li>
				<li><a href="asso/">Association</a></li>
				<li><a href="doc/">Documentation</a></li>
			</ul>
		</div>
	</div>
	<!-- Information/image -->
	<div id="block_info">
		<h4>English Website</h4>
		<p>
			SliTaz is a free operating system providing a fully featured
			desktop or server in less than 30 Mb. 
		</p>
		<p>
			In Live mode SliTaz can run completely in RAM and boot from
			removable media such as a cdrom or USB key. The system is 
			secure, stable and easy to use.
			<a href="about/">More information...</a>
		</p>
	</div>
</div>

<!-- Languages -->
<div id="lang">
	<a href="../i18n.php"><img src="../images/locale.png" alt="locale.png" /></a>
	<a href="../de/">Deutsch</a>
	<a href="../en/">English</a>
	<a href="../es/">Espa�ol</a>
	<a href="../fr/">Fran�ais</a>
	<a href="../id/">Indonesian</a>
	<a href="../pt/">Portugu�s</a>
</div>

<!-- Content -->
<div id="content">

<!--
    SliTaz news starting.
-->

<h2>Headlines</h2>
<p>
	The SliTaz website offers the main news of the project as well as 
	news on the general activity of the subprojects on the
	<a href="http://labs.slitaz.org/">laboratories</a>. Both are
	available as a <a href="rss.xml">XML feed</a>. The project also
	publishes a small monthly Newsletter. The website <a href="../">main page</a>
	will give you a nice overview of the latest news, commits, cooked packages, 
	and Tweets.
</p>

<div class="box">
	<img src="../images/news.png" alt=".png" />	
	<a href="http://labs.slitaz.org/news">News from the Labs</a>
	(<a href="http://labs.slitaz.org/news?format=atom">Feed</a>) | 
	<a href="http://doc.slitaz.org/en:newsletter:start">Monthly Newsletter</a>
</div>

<div id="news">

<ul>
	<!-- <li><strong>Date - Title</strong>
	<p></p>
	</li> -->
	
	<li><strong>4 November 2010 - New Cooking 20101104</strong>
	<p>The SliTaz team is pleased to announce the release of a new cooking ISO
	featuring over 2600 packages. It contains Linux Kernel 2.6.34 and was
	rebuilt with a new toolchain using glibc 2.11.2 and gcc 4.5.1. Xorg has
	been fully updated to 1.9.2. The LiveCD includes Midori, the Deadbeef audio
	player, and many more applications. Tazpkg and Tazctrlbox now support
	gettext translations and more UTF locales have been added. Many bugfixes,
	updates and improvements can also be found. A lot of work has been done 
	during these past 6 months. You can <a href="get/#cooking>">download</a> 
	this new cooking version from one of the official mirrors of the project.
	All feedback is welcome and can be done through the mailing list or 
	the forum.</p>
	</li>
	
	<li><strong>08 May 2010 - Summer of Documentation</strong>
	<p>The SliTaz team is organizing a 'Summer of Documentation' from May 10th to June 10th. 
	The main aim is to centralize, review and update all online documentation. 
	More details can be found at <a href="http://doc.slitaz.org/">doc.slitaz.org</a>. 
	We hope that SliTaz users will be able to contribute by adding to or updating the 
	documentation.
	</p>
	</li>
	
	<li><strong>28 March 2010 - SliTaz GNU/Linux 3.0 release</strong>
	<p>All of the SliTaz team are proud to announce the release of the SliTaz 
	GNU/Linux 3.0 operating system. It's simpler, faster, customizable, 
	mightier and yet incredibly tiny. The new SliTaz stable version is now 
	out after one year of development.</p>
	<p>The core desktop provides a fully featured desktop powered by Xorg 7.4, 
	Openbox, LXDE components and home made tools. It lets you easily connect to
	the Internet to surf the web with the Midori web browser, listen to music
	or manage your pictures.</p>
	<p>The default core system fits into a 30 MB ISO image and LiveCD flavors 
	start at 8 MB. This stable version has been built by a new toolchain including
	GCC 4.4.1 and uses the Linux kernel 2.6.30.6. You can read the full 
	<a href="doc/releases/3.0/relnotes.en.html">Releases Notes</a> for more
	information and <a href="get/#stable>">download</a> a LiveCD image from the
	SliTaz mirrors.</p>
	</li>
	
	<li><strong>14 March 2010 - RC series and Solutionslinux 2010 (Paris)</strong>
	<p>Since we're getting closer to the next stable release, we have updated the
	core ISO image to start with a RC series. The Major change is the switch to
	Midori as the default web browser, this will improve user experience and let
	us keep SliTaz at 30Mb. Midori is a modern browser powered by the webkit engine -
	it is fast, simple to use and well integrated with the SliTaz desktop.</p>
	<p>This updated ISO comes with a bunch of bug and dependency fixes, we have 
	also improved the home made tools and scripts. This new ISO image can be 
	downloaded from the SliTaz mirrors (30 Mb): 
	<a href="http://mirror.slitaz.org/iso/cooking/slitaz-cooking.iso">slitaz-cooking.iso</a></p>
	<p>By the way, the SliTaz project will be at 
	<a href="http://www.solutionslinux.fr/">Solutionslinux</a> 2010 next 
	week in Paris. You will be able to learn about the project and make
	contact with members of the association and the development team.</p>
	</li>
	
	<li><strong>21 February 2010 - New Cooking 20100221</strong>
	<p>SliTaz contributors are proud to announce a new Cooking version of the
	LiveCD. This is the last Cooking RC before 3.0 is released. The core ISO image
	is at 27 MB and comes with many changes and improvments. This Cooking uses
	Xorg as X server instead of Xvesa and provides full UTF-8 support. With
	a clean desktop environment, it also provides many applications for daily
	usage and common tasks. Netsurf replaces firefox as the default web browser.
	Nevertheless, a Firefox flavor at 29 Mb with sound and wifi support can 
	also be downloaded from the official mirrors.</p>
	<p>On the updates and improvements side: tazpkg is faster, boot-scripts are 
	updated and home-made toolboxes are improved. Wifibox uses awk for better
	network scanning. WPA support in the boot scripts have been improved. Boot
	time is logged for performance measuring. The SliTaz installer will now 
	try to use files from an USB device if no cdrom is found, allow you to 
	create a default user account, set a root password and use a separate /home
	partition. And finally, LiveCD customization is now much easier: users
	just have to boot, modify and use writefs via the Tazlito graphical interface
	or from the command line to generate their own customized CD.</p>
	<p>As usual, you can <a href="get/#cooking">download</a> these new
	flavors from one of the official mirrors of the project and provide feedback
	on the SliTaz forum.</p>
	</li>
	<li><strong>News archives:</strong> 
	<a href="news/2007.html">2007</a> |
	<a href="news/2008.html">2008</a> |
	<a href="news/2009.html">2009</a></li>
</ul>

<!-- End of news -->
</div>

<!-- End of content  -->
</div>

<!-- Footer -->
<div id="footer">
	Copyright &copy; <span class="year"></span>
	<a href="http://www.slitaz.org/">SliTaz</a> - Network:
	<a href="http://scn.slitaz.org/">Community</a>
	<a href="http://doc.slitaz.org/">Doc</a>
	<a href="http://forum.slitaz.org/">Forum</a>
	<a href="http://pkgs.slitaz.org/">Packages</a>
	<a href="http://labs.slitaz.org/issues">Bugs</a>
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
