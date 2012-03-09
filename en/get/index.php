<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
    <title>SliTaz - Downloads</title>
    <meta http-equiv="content-type" content="text/html; charset=ISO-8859-1" />
    <meta name="description" content="SliTaz GNU/Linux LiveCD free download" />
    <meta name="keywords" lang="en" content="source, iso, livecd, get, free" />
    <meta name="robots" content="index, follow, all" />
    <meta name="modified" content="<?php echo (date( "Y-m-d H:i:s", getlastmod())); ?>" />
    <meta name="author" content="Christophe Lincoln, Paul Issot"/>
    <link rel="shortcut icon" href="../../favicon.ico" />
    <link rel="stylesheet" type="text/css" href="../../slitaz.css" />
</head>
<body>

<?php
include("../../config.php");
include("../../lib/html/header.html");
?>

<!-- Block -->
<div id="block">
	<!-- Navigation -->
	<div id="block_nav">
		<h4>Navigation</h4>
		<div class="right_box">
			<ul>
				<li><a href="../../webchat.php">Web Chat</a></li>
				<li><a href="../mailing-list.html">Mailing List</a></li>
				<li><a href="../devel/">Development</a></li>
				<li><a href="../packages/">Packages</a></li>
				<li><a href="../artwork/">Artwork</a></li>
				<li><a href="../search.html">Search</a></li>
			</ul>
		</div>
		<div class="left_box">
			<ul>
				<li><a href="../">Headlines</a></li>
				<li><a href="../about/">About</a></li>
				<li><a href="../get/">Download</a></li>
				<li><a href="../doc/">Documentation</a></li>
				<li><a href="../asso/">Association</a></li>
				<li><a href="../asso/sponsor.html">Sponsor</a></li>
			</ul>
		</div>
	</div>
	<!-- Information/image -->
	<div id="block_info">
		<h4>Download</h4>
		<p>
			Download the latest stable version for production purposes
			or a solid desktop environment. Use the Cooking version to
			test and help us improve the distribution.
		</p>
		<div class="button">
			Quick Download:
			<?php echo "<a href='$stable_iso'>SliTaz $stable_ver</a>
				<a href='$cooking_iso'>SliTaz $cooking</a>"; ?>
		</div>
	</div>
</div>

<!-- Languages -->
<div id="lang">
	<a href="../i18n.php">
		<img src="../../images/locale.png" alt="locale.png" /></a>
	<a href="../../da/get/">Dansk</a>
	<a href="../../de/get/">Deutsch</a>
	<a href="../../en/get/">English</a>
	<a href="../../es/get/">Español</a>
	<a href="../../fr/get/">Français</a>
	<a href="../../it/get/">Italiano</a>
	<a href="../../pt/get/">Português</a>
	<a href="../../cn/get/">Chinese</a>
</div>

<!-- Content -->
<div id="content">

<h2>Get SliTaz</h2>
	
<ul>
	<li><a href="index.html#stable">LiveCD Stable version</a> - 
	Bootable ISO image of the current stable version.</li>
	<li><a href="index.html#cooking">LiveCD Cooking version</a> - 
	Bootable ISO image of the cooking version.</li>
	<li><a href="index.html#floppy">Floppy disk</a> - Bootable 
	startup disk to launch the LiveCD, a USB stick, etc.</li>
	<li><a href="flavors.html">LiveCD to taste</a> - Flavors and loram.</li>
</ul>

<p>
	Help the project via a small donation or become an official
	<a href="../asso/sponsor.html">sponsor</a>.
</p>
<!-- PayPal boutton -->
<form action="https://www.paypal.com/cgi-bin/webscr" method="post"
	style="display: inline;">
		<input type="hidden" name="cmd" value="_s-xclick" />
		<input type="hidden" name="hosted_button_id" value="4885025" />
		<input type="image" src="../../images/paypal.png" name="submit" 
			alt="PayPal - The safer, easier way to pay online!" />
</form>
<!-- Flattr boutton -->
<script type="text/javascript">
/* <![CDATA[ */
    (function() {
        var s = document.createElement('script'), t = document.getElementsByTagName('script')[0];
        s.type = 'text/javascript';
        s.async = true;
        s.src = 'http://api.flattr.com/js/0.6/load.js?mode=auto';
        t.parentNode.insertBefore(s, t);
    })();
/* ]]> */
</script>
<a class="FlattrButton" style="display:none;" rev="flattr;button:compact;"
	href="http://www.slitaz.org/"></a>

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
	and <a href="http://www.tuxfamily.org/">TuxFamily</a>. In Switzerland by
	<a href="http://mirror.switch.ch/">SWITCHmirror</a>, in China by LupaWorld,
	in the USA by <a href="http://distro.ibiblio.org/pub/linux/distributions/">Ibiblio</a>
	and in Brazil by <a href="http://www.c3sl.ufpr.br/en/index.html">UFPR</a>. Huge thanks.
</p>

<ul>
	<li>Switzerland - Mirror hosted by SWITCHmirror (10 Gbit/s)
	<a href="http://mirror.switch.ch/ftp/mirror/slitaz/">HTTP</a> or
	<a href="ftp://mirror.switch.ch/mirror/slitaz/">FTP</a></li>

	<li>France - Mirror hosted by TuxFamily via
	<a href="http://download.tuxfamily.org/slitaz/">HTTP</a> or
	<a href="ftp://download.tuxfamily.org/slitaz/">FTP</a></li>

	<li>China - Mirror hosted by LupaWorld
	<a href="http://mirror.lupaworld.com/slitaz/">HTTP</a></li>

	<li>USA - Mirror hosted by Ibiblio via
	<a href="http://distro.ibiblio.org/pub/linux/distributions/slitaz/">HTTP</a> or
	<a href="ftp://distro.ibiblio.org/pub/linux/distributions/slitaz/">FTP</a></li>

	<li>Brazil - Mirror hosted by UFPR via
	<a href="http://slitaz.c3sl.ufpr.br/">HTTP</a> or
	<a href="ftp://slitaz.c3sl.ufpr.br/slitaz/">FTP</a></li>
</ul>

<a name="sources"></a>
<h3>Sources</h3>
<p>
	Tazpkg (Package manager), Tazlito (SliTaz Live Tool), Tazwok (Source
	builder), Tazusb (LiveUSB Tool) and the SliTaz Tools tarballs can all
	be downloaded from the <a href="http://www.tuxfamily.org/">TuxFamily</a>
	mirror. Note that all the utilities are installed by default on SliTaz
	and source code is commented in English. Download sources by
	<a href="http://mirror.slitaz.org/sources/">HTTP</a> or
	<a href="http://mirror.slitaz.org/sources/">FTP</a>
</p>

<a name="stable"></a>
<h2>LiveCD - Stable version</h2>
<p>
	SliTaz stable version provides a mature operating system, widely 
	tested by an active community. The core LiveCD offers you a large 
	selection of multi-use packages carefully integrated into the 
	distribution, thus resulting in a coherent and robust system.
	<?php echo "Current $stable_ver stable version was released on $stable_rel."; ?>
</p>

<p class="box">
	<?php echo "SliTaz GNU/Linux $stable_ver ($stable_size) - 
	<a href='$stable_iso'>slitaz-$stable_ver.iso</a>
	[ <a href='$mirror/$stable_ver/slitaz-$stable_ver.md5'>md5</a> ]"; ?>
</p>

<p>
	A bootable CDROM image of all available packages for the stable version
	is generated every day. It also contains a copy of the website and can
	be used without an internet connection via the install.sh script.
</p>

<p class="box">
	<?php echo "Collection of SliTaz GNU/Linux $stable_ver packages ($stable_pkgs)
	- <a href='$pkgs_mirror/$stable_ver/packages-$stable_ver.iso'>packages-$stable_ver.iso</a>
	[ <a href='$pkgs_mirror/$stable_ver/packages-$stable_ver.md5'>md5</a> ]"; ?>
</p>

<a name="cooking"></a>
<h2>LiveCD - Cooking version</h2>
<p>
	SliTaz "Cooking" LiveCD is a constantly evolving version, fully usable,
	it allows you to test the latest improvements and packages, ask for new
	features or report bugs to help us to prepare for the stable version.
</p>

<p class="box">
	<?php echo "SliTaz GNU/Linux Cooking $cooking_ver ($cooking_size) - 
	<a href='$cooking_iso'>slitaz-$cooking.iso</a>
	[ <a href='$mirror/cooking/slitaz-$cooking.md5'>md5</a> ]"; ?>
</p>

<p>
	A bootable DVD image of all available packages for the Cooking version
	is generated every day. It also contains a copy of the website and can
	be used without an internet connection via the install.sh script.
	Note: This image can also be
	<a href="http://syslinux.zytor.com/wiki/index.php/Doc/isolinux#HYBRID_CD-ROM.2FHARD_DISK_MODE">
		installed on an USB key</a>, but it will overwrite all data.
</p>

<p class="box">
	<?php echo "Collection of SliTaz GNU/Linux Cooking packages ($cooking_pkgs)
	- <a href='$pkgs_mirror/cooking/packages-cooking.iso'>packages-cooking.iso</a>
	[ <a href='$pkgs_mirror/cooking/packages-cooking.md5'>md5</a> ]"; ?>
</p>

<a name="floppy"></a>
<h2>Floppy boot disk</h2>
<p>
	This floppy diskette can start SliTaz on old PCs with or without a 
	CD-ROM. It can boot SliTaz from an usb flash drive, a SliTaz CD/DVD,
	a hard drive, the LAN by PXE and even the 
	<a href="http://boot.slitaz.org/">Internet with gPXE</a>.
</p>

<p class="box">
	Floppy disk (1,44 MB) -
	<a href="http://mirror.slitaz.org/boot/floppy-grub4dos">image</a>
	[ <a href="http://mirror.slitaz.org/boot/floppy-grub4dos.md5">md5</a> ]
</p>

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
</div>

<?php include("../../lib/html/footer.html"); ?>

</body>
</html>
