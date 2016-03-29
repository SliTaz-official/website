<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>SliTaz - News archives 2011</title>
	<meta name="description" content="SliTaz news archives info release">
	<meta name="keywords" lang="en" content="System, free, gnu, linux, opensource software, livecd in RAM">
	<meta name="author" content="Christophe Lincoln">
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

<h2>2011</h2>

<div class="news">

<ul>
	<li id="d20110531">
		<strong>31 May 2011 - New and fresh Cooking 20110531</strong>
	<p>
		The SliTaz team is proud to announce the release of a new Cooking version
		built with our new and fresh packages from cookutils. Cookutils is one of
		the new generation of tools to build SliTaz packages and provides a Build
		Bot with a nice web interface that works out-of-the-box on any SliTaz
		system. These new packages have been built with a new i486 optimized
		toolchain.
	</p>
	<p>
		The full boot process has been improved and the first boot configuration
		is now done through GTK boxes in a X session and the boot time is also
		faster. This version comes with a new GUI tool for system configuration
		as well as our new system configuration panel aka TazPanel. TazPanel
		lets you configure the entire system via a xHTML/CSS web interface
		(useful for remote control) and it also handles package management and
		replaces the old GTK box.
	</p>
	<p>
		Xorg now has dri support, so libdrm, linux-drm as well as linux-agp
		are part of the core ISO. This adds 1MB to the compressed root
		filesystem. But we managed to save a lot of space in the core ISO with
		our new packages and this new Cooking is 30MB! This new cooking also
		provides better internationalization and Italian support! Download:
		<a href="http://mirror.slitaz.org/iso/cooking/slitaz-cooking.iso">
			slitaz-cooking.iso</a>
	</p>
	</li>

	<li id="d20110329">
		<strong>29 March 2011 - New Cooking 20110329</strong>
	<p>
		The SliTaz team is pleased to announce the release of a new cooking
		ISO featuring over 2900 packages. All packages have been rebuilt using
		our new cooking tool, now included in tazwok. It contains Linux Kernel
		2.6.37 compiled against glibc 2.13, binutils 2.21 &amp; gcc 4.5.2. The Core
		LiveCD includes Midori 0.3.3. Tazpkg is now entirely translated to
		French and we are open to additional translations. Tazwok has been
		entirely rewritten and it's now possible to recook SliTaz from Scratch
		using any ISO. This ISO is the first of a release candidate series which
		leads us to a stable 4.0 release.
	</p>
	<p>
		A lot of work has been done since our last cooking ISO released in november:
		more than 2200 changes have been commited to the wok, and several
		hundreds more to home-built tools. We are proud to announce that the SliTaz
		community has grown a lot these last months: the last year, many
		changes was commited than in the previous four. However, quantity doesn't mean
		quality. We need you to help to test this new ISO and report eventual bugs. If
		you want to, you are welcome to help fix known problems before 4.0 is released.
		You can join members of the crew via our IRC, mailing-list, forums or by
		mailing the packages maintainers. We hope you will enjoy this new
		<a href="/en/get/">release!</a>
	</p>
	</li>
</ul>

<!-- End of news -->
</div>

<h2>News archives</h2>
<p>
	please note that some links may be broken due to website structure 
	changes (mainly the docs that moved to their own domain).
</p>
<p>
	<a href="index.php#archives">Archives by year</a>
</p>

<!-- End of content -->
</div>

<?php include("../../lib/html/footer.html"); ?>

</body>
</html>
