<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>SliTaz - Downloads</title>
	<meta name="description" content="SliTaz GNU/Linux LiveCD free download">
	<meta name="keywords" lang="en" content="source, iso, livecd, get, free">
	<meta name="author" content="Christophe Lincoln, Paul Issot">
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
<section id="content">

<h2>Get SliTaz</h2>

<p>
	Download the latest stable version for production purposes
	or a solid desktop environment. Use the Cooking version to
	test and help us improve the distribution.
</p>

<div class="box-warning"><p>Before using SliTaz — please read this post: <a href="http://forum.slitaz.org/topic/-important-info-about-meltdown-and-spectre-">Important info about Meltdown and Spectre</a></p></div>

<ul>
	<!-- li><a href="#stable">LiveCD Stable version</a> - 
		Bootable ISO image of the current stable version</li -->
	<li><a href="#rolling">LiveCD Rolling version</a> - 
		Bootable ISO image of the rolling version</li>
	<li><a href="#floppy">Floppy disk</a> - Bootable 
		startup disk to launch the LiveCD, a USB stick, etc</li>
	<li><a href="flavors.php">LiveCD to taste</a> - Custom flavors and loram</li>
	<li><a href="http://arm.slitaz.org/rpi/">SliTaz Raspberry Pi</a>
	- Custom distro from the SliTaz ARM project</li>
</ul>

<div class="box-up">
	<p>
		Help the project via a small donation or become an official
		<a href="../sponsor/">sponsor</a>.
	</p>
	<?php include("../../lib/html/donate.html"); ?>
</div>

<h3>General information</h3>

<p>
	This part of the site allows you to download a free copy of the SliTaz
	GNU/Linux LiveCD or to get utilities and tools source code. To start
	using the LiveCD ISO image you can refer to the English online
	<a href="../doc/">documentation</a>. You can also find help and support
	on SliTaz's <a href="http://forum.slitaz.org/">English Forum</a>.
</p>

<h3>Mirrors</h3>

<p>
	SliTaz is mirrored actually in France by <a href="http://www.ads-lu.com/">ADS</a>,
	and <a href="http://www.tuxfamily.org/">TuxFamily</a>.
	In the USA by <a href="http://distro.ibiblio.org/pub/linux/distributions/">Ibiblio</a>
	and in Brazil by <a href="http://www.c3sl.ufpr.br/en/index.html">UFPR</a>. Huge thanks.
</p>

<ul>
	<li>France - Mirror hosted by TuxFamily via
	<a href="http://download.tuxfamily.org/slitaz/">HTTP</a> or
	<a href="ftp://download.tuxfamily.org/slitaz/">FTP</a></li>

	<!-- li>China - Mirror hosted by LupaWorld
	<a href="http://mirror.lupaworld.com/slitaz/">HTTP</a></li -->

	<li>USA - Mirror hosted by Ibiblio via
	<a href="http://distro.ibiblio.org/pub/linux/distributions/slitaz/">HTTP</a> or
	<a href="ftp://distro.ibiblio.org/pub/linux/distributions/slitaz/">FTP</a></li>

	<li>Brazil - Mirror hosted by UFPR via
	<a href="http://slitaz.c3sl.ufpr.br/">HTTP</a> or
	<a href="ftp://slitaz.c3sl.ufpr.br/slitaz/">FTP</a></li>
</ul>

<h3 id="sources">Sources</h3>

<p>
	Tazpkg (Package manager), Tazlito (SliTaz Live Tool), Tazwok (Source
	builder), Tazusb (LiveUSB Tool) and the SliTaz Tools tarballs can all
	be downloaded from the <a href="http://www.tuxfamily.org/">TuxFamily</a>
	mirror. Note that all the utilities are installed by default on SliTaz
	and source code is commented in English. Download sources by
	<a href="http://mirror.slitaz.org/sources/">HTTP</a> or
	<a href="http://mirror.slitaz.org/sources/">FTP</a>
</p>

<!--
<h2 id="stable">LiveCD - Stable version</h2>

<p>
	SliTaz stable version provides a mature operating system, widely 
	tested by an active community. The core LiveCD offers you a large 
	selection of multi-use packages carefully integrated into the 
	distribution, thus resulting in a coherent and robust system.
	< ?php echo "Current $stable_ver stable version was released on $stable_rel."; ? >
</p>

<div class="box-dl"><p>
	< ?php echo "SliTaz GNU/Linux $stable_ver ($stable_size) - 
	<a href='$stable_iso'>slitaz-$stable_ver.iso</a>
	[ <a href='$mirror/$stable_ver/slitaz-$stable_ver.md5'>md5</a> ]"; ? >
</p></div>

<p>
	A bootable CD-ROM image of all available packages for the stable version
	is generated every day. It also contains a copy of the website and can
	be used without an internet connection via the install.sh script.
</p>

<div class="box-dl"><p>
	< ?php echo "Collection of SliTaz GNU/Linux $stable_ver packages ($stable_pkgs)
	- <a href='$pkgs_mirror/$stable_ver/packages-$stable_ver.iso'>packages-$stable_ver.iso</a>
	[ <a href='$pkgs_mirror/$stable_ver/packages-$stable_ver.md5'>md5</a> ]"; ? >
</p></div>

<p>
	Windows users and DOS users can install SliTaz without partitioning.
	The following ZIP archive has to be extracted in C:\ and the boot
	instructions can be found in C:\slitaz\boot\install.txt
</p>

<div class="box-dl"><p>
	< ?php echo "SliTaz GNU/Linux $stable_ver archive (51 Mb) - 
	<a href='http://mirror.slitaz.org/iso/$stable_ver/slitaz-$stable_ver.zip'>
	slitaz-$stable_ver.zip</a>"; ? >
</p></div>
-->

<h2 id="rolling">LiveCD - Rolling version</h2>

<p>
	SliTaz Rolling LiveCD is a constantly evolving version, fully usable,
	it allows you to test the latest improvements and packages, ask for new
	features or report bugs to help us to prepare for the stable version.
	SliTaz Rolling ISO released weekly.
</p>

<div class="box-dl"><p>
	<?php echo "SliTaz GNU/Linux Rolling (43 MB) - 
	<a href='$mirror/rolling/slitaz-rolling.iso'>slitaz-rolling.iso</a>
	[ <a href='$mirror/rolling/slitaz-rolling.md5'>md5</a> ]"; ?>
</p></div>

<p>
	Rolling flavors can be found <a href="http://mirror.slitaz.org/iso/rolling/"
	target="_blank" rel="noopener noreferrer">on mirror</a>.
</p>

<!-- p>
	A bootable DVD image of all available packages for the Cooking version
	is generated every day. It also contains a copy of the website and can
	be used without an internet connection via the install.sh script.
	Note: This image can also be
	<a href="http://syslinux.zytor.com/wiki/index.php/Doc/isolinux#HYBRID_CD-ROM.2FHARD_DISK_MODE">
	installed on a USB key</a>, but it will overwrite all data.
</p>

<div class="box-dl"><p>
	< ?php echo "Collection of SliTaz GNU/Linux Cooking packages ($cooking_pkgs)
	- <a href='$pkgs_mirror/cooking/packages-cooking.iso'>packages-cooking.iso</a>
	[ <a href='$pkgs_mirror/cooking/packages-cooking.md5'>md5</a> ]"; ? >
</p></div -->

<h2 id="floppy">Floppy boot disk</h2>

<p>
	This floppy diskette can start SliTaz on old PCs with or without a 
	CD-ROM. It can boot SliTaz from a usb flash drive, a SliTaz CD/DVD,
	a hard drive, the LAN by PXE and even the 
	<a href="http://boot.slitaz.org/">Internet with gPXE</a>.
</p>

<div class="box-dl"><p>
	Floppy disk (1,44 MB) -
	<a href="http://mirror.slitaz.org/boot/floppy-grub4dos">image</a>
	[ <a href="http://mirror.slitaz.org/boot/floppy-grub4dos.md5">md5</a> ]
</p></div>

<p>
	You can write this floppy image with SliTaz bootfloppybox,
	<a href="http://en.wikipedia.org/wiki/RaWrite">Windows rawrite</a>
	or simply dd (dd if=floppy-grub4dos of=/dev/fd0).
</p>

<p>
	A <a href="http://mirror.slitaz.org/floppies/">floppy image set</a>
	is also available for people who can't use a CD-ROM, USB key or Ethernet
	card.
</p>

<!-- End of content -->
</section>

<?php include("../../lib/html/footer.html"); ?>

</body>
</html>
