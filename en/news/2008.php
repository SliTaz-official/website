<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
	"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<title>SliTaz - News archives 2008</title>
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
			| <a href="./">2014</a>
		</p>
	</div>
</div>

<?php include("../../lib/lang.php"); ?>

<!-- Content -->
<div id="content">

<h2>2008</h2>

<ul>
	<li>
		<strong>31 Dec 2008 - Cooking 20081231 - Wifi and NTFS support</strong>
	<p>
	The SliTaz project is proud to announce a new Cooking version of the
	LiveCD. It allows you to utilize and test the work done in recent months,
	it contains many new features, bug fixes and several updates. The
	distribution now includes a tiny control center, easily managed WiFi
	via Netbox and tazndis, a lighter version of ndiswrapper to use non-free
	Windows network card drivers. Perl is now on the cdrom (with Lua removed).
	WiFi support is also accompanied by support for NTFS partitions, so
	mplayer had to be dropped from the default packages that make up the
	heart of the LiveCD. The Tazpkg manager has been greatly improved, it
	allows the preservation of configuration files, software to be updated
	according to the construction (build) date on the server, log files to
	be kept when the packages are actioned, and several fixes have been
	applied. Also improved are the boot scripts, and the LiveCD tool
	(Tazlito) is now more coherent. The Cooking repository now contains more
	than 1100 packages thanks to the SliTaz developers. You can
	<a href="../get/#cooking">download</a> this new version from one of the
	official mirrors of the project.
	</p></li>

	<li>
		<strong>16 Jul 2008 - Cooking 20080716 - Web boot and MPlayer</strong>
	<p>
	SliTaz project members are proud to announce the availability of a new
	Cooking version, including many new features and bug fixes. This version
	provides the boot option <code>web</code> which lets you boot SliTaz
	from the internet using gPXE from
	<a href="http://boot.slitaz.org/">boot.slitaz.org</a>. This new
	unique service offers the possibility to use SliTaz in Live mode
	(all in RAM), using the Live options to store your data permanently
	and preconfigure the system. This new Cooking takes an extra 3 Mb so we can provide:
	a multimedia player with MPlayer, a notes manager with Notecase,
	a new version of Tazpkg package manager with md5sum support, XFS
	filesystem support built into the Kernel, a 'man' command and a few
	updates. This version requires at least 160 Mb to boot and run properly,
	we offer loram <a href="../get/flavors.php">flavors</a> for machines with less
	resources. <a href="../get/#cooking">Download SliTaz Cooking ISO</a>.
	</p></li>

	<li>
		<strong>26 Jun 2008 - Cooking 20080626 with new Kernel</strong>
	<p>
	Summer time is here and also the new Cooking from the 26 June. A lot
	of work has been done to improve user experience. This Cooking version
	provides a new Kernel (2.6.25.5) with many new built-in drivers and
	modules, linux package was also split to have a fairly modular Kernel.
	Default user has changed to <code>tux</code> and the new option
	<code>user=name</code> lets you choose the default user name. Most
	of the Slitaz utils and tools have been improved: tazpkgbox provides
	some new commands for package management and bootfloppybox can be used in
	text mode, Netbox wifi and PPPoE support are now both working well and
	a new function called zeroconf is available. Most packages are up-to-date
	and Firefox 3.0 is part of the 25.2 Mb ISO. Cooking version can be
	<a href="../get/#cooking">downloaded</a> from SliTaz mirror. Bugs can
	be reported on SliTaz Bug Tracking System:
	<a href="http://bugs.slitaz.org">BTS</a>
	</p></li>

	<li>
		<strong>18 May 2008 - Cooking 20080518 and LinuxDays.ch</strong>
	<p>
	SliTaz team is proud to announce the availability of a new Cooking
	LiveCD ISO image providing huge changes from the stable release.
	SliTaz now uses Openbox as its default Window Manager, desktop icons let
	you launch your favorite applications and manage files and dbus and hal
	will automatically mount removable media such as USB keys or Hard disks.
	Packages can now be managed through the graphical Packages Manager
	Tazpkgbox and mountbox and netbox are now much more usable and complete.
	The LiveCD now offers: lua, a desktop search engine with searchmonkey,
	system information with Hardinfo, task management with LXTasks and a
	password and clipboard manager. All the major packages have been updated -
	SliTaz now uses a new toolchain using the last glibc-2.7, GTK 2.12.9
	and Firefox 3.0 RC1! You will now find 580 packages on the mirror
	including wireless support for the kernel and the necessary tools
	for a manual connection or one managed by SliTaz netbox. This new announced
	Cooking version can be <a href="../get/#cooking">downloaded</a> from
	SliTaz mirror. Note: This version is going to be used at the
	<a href="http://www.linuxdays.ch/">LinuxDay.ch</a> in Geneva
	Switzerland.
	</p></li>

	<li>
		<strong>22 Mar 2008 - SliTaz GNU/Linux 1.0 release</strong>
	<p>
	The SliTaz contributors team are proud to announce the publication of SliTaz
	GNU/Linux 1.0. This is the first stable release after 2 years of work. The
	system is distributed as a bootable LiveCD of 24.8 MB providing a fully
	featured desktop environment and a generous selection of multi-use applications.
	SliTaz GNU/Linux 1.0 uses the Linux Kernel 2.6.24.2, providing Firefox 2.0.0.12,
	Rsync 3.0.0, Gparted 0.3.5 and sound support with Alsa 1.0.16. The distribution
	lets you listen to music, surf the Web, edit a video studio and much more
	with the 448 available packages that can be installed with our very own
	package manager Tazpkg. The LiveCD lets you create a custom distro or a LiveUSB
	device in one single command. Security updates are provided by the project and
	popular packages like Firefox will also get upgraded for functionality. You
	can get SliTaz GNU/Linux 1.0 from the Web site
	<a href="../get/#stable">download page</a>. Read the
	<a href="../doc/releases/1.0/relnotes.en.html">Release Notes</a> for more
	detailed information on this stable version.
	</p></li>

	<li>
		<strong>26 Feb 2008 - Updated Cooking ISO (20080225)</strong>
	<p>
	SliTaz project is proud to announce an updated version of the LiveCD
	with many bug fixes, new boot options, ACPI support and some package updates
	such as: Alsa 1.0.16, PHP 5.2.5, Htop 0.7, Firefox 2.0.0.12, Nano 2.0.7 and
	Sqlite 3.5.6. The option <code>home=*</code> now supports devices by UUID or
	label (Thanks Andrew) and the <code>laptop</code> option will automatically
	load ac and battery Kernel modules. The project also provides a new tool
	Tazusb, dedicated to LiveUSB media. Tazusb lets you create bootable USB
	media or write the current filesystem to the media in one single command.
	This version is ready for stable release, we are now writing Release Notes,
	preparing final artwork and a stable packages repository. You can try this
	updated Cooking by <a href="../get/#cooking">downloading</a> the LiveCD ISO from
	SliTaz Web site.</p></li>

	<li>
		<strong>10 Jan 2008 - New Cooking ISO (20080107)</strong>
	<p>Paving the road to a stable release, we published a new Cooking ISO with many
	bug fixes and some new features. We added Asunder for audio CD ripping,
	Burnbox to burn ISO images, a new boot option to let you load Kernel modules
	at boot time (<code>modprobe=modules</code>) and the LiveCD now uses Xvesa
	from Xorg 7.2. All the SliTaz tools and utilities have been updated with
	new features. Tazpkg can repack packages from a running system, Tazlito
	can generate a LiveCD distribution flavor with a few commands and Tazwok can
	check for build dependencies when building a package from source. Please
	check <a href="../get/#cooking">downloads area</a> to get a copy of SliTaz
	LiveCD.</p></li>
</ul>

<!-- End of content -->
</div>

<?php include("../../lib/html/footer.html"); ?>

</body>
</html>
