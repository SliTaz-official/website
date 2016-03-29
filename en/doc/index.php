<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>SliTaz - English documentation</title>
	<meta name="description" content="SliTaz GNU/Linux English documentationx part livecd tazpkg packages">
	<meta name="keywords" lang="en" content="System, free, gnu, linux, opensource software, livecd in RAM">
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

<h2>English documentation</h2>

<p>
	SliTaz official documentation is available on the community
	Wiki site. Manuals and a getting started guide is provided
	by each SliTaz LiveCD and available through the 
	"Documentation" menu.
</p>
<ul>
	<li><a href="http://doc.slitaz.org/en:start">Community Wiki</a></li>
	<li><a href="http://hg.slitaz.org/slitaz-doc/raw-file/tip/slitaz/index.en.html"
		>Getting started guide</a></li>
</ul>

<h2>Handbook &amp; Cookbook</h2>

<p>
	SliTaz <a href="http://doc.slitaz.org/en:handbook:start">Handbook</a> - 
	LiveCD usage, package management, network or system administration
	and specific instructions. This Handbook is a community effort to provide
	high quality documentation for SliTaz users. It will help you get started
	with SliTaz GNU/Linux and show you how to configure the system to your own
	needs and preferences. This is the documentation that we advise you to read, 
	learn and consult first.
</p>
<p>
	SliTaz <a href="http://doc.slitaz.org/en:cookbook:start">Cookbook</a> - 
	Information regarding the management, operation and development of the distribution.
	Instructions on how to use the wok and package receipts, descriptions of boot scripts
	and rootcd files, and various tools.
</p>

<h2>Scratchbook</h2>

<p>
	Historically, the Scratchbook was written when SliTaz was created and wasn't
	made to be updated. But over time, some SliTaz contributors migrated the book 
	over to the Wiki and have made some updates:
	<a href="http://doc.slitaz.org/en:scratchbook:start">Community Scratchbook</a>
</p>
<p>
	SliTaz <a href="scratchbook/">Original Scratchbook</a> -
	Describes the stages of creating the very first SliTaz distribution 
	commencing with instructions on compiling the Linux Kernel, installing
	the graphical server (Xvesa) and GTK applications, etc. It contains
	techniques requiring time and motivation that enable you to build a
	GNU/Linux system from source.
</p>

<h2>Manuals</h2>

<ul>
	<li><a href="http://hg.slitaz.org/tazpkg/raw-file/tip/doc/tazpkg.en.html"
		>Tazpkg manual</a> -  SliTaz Package Manager.</li>
	<li><a href="http://hg.slitaz.org/tazlito/raw-file/tip/doc/tazlito.en.html"
		>Tazlito manual</a> -  SliTaz LiveCD utility.</li>
	<li><a href="http://hg.slitaz.org/tazusb/raw-file/tip/doc/tazusb.en.html"
		>TazUSB manual</a> -  SliTaz LiveUSB utility.</li>
	<li><a href="http://hg.slitaz.org/cookutils/raw-file/tip/doc/cookutils.en.html"
		>Cookutils manual</a> -  SliTaz Package Cooker.</li>
</ul>

<h2>Release Notes</h2>

<p>
SliTaz Release Notes provide detailed information about the stable version
and give a few useful tips to help you start using the system. On the core
LiveCD, Release Notes are installed and available through the “Documentation”
menu.
</p>

<ul>
<?php
	$relnotes = array();
	for ($release = 1;; $release++) {
		$file = "releases/".$release.".0/relnotes.en.html";
		if (!file_exists($file))
			break;
		array_unshift($relnotes, array("release" => $release.".0", "file" => $file));
	}
	foreach ($relnotes as $release) {
		print "	<li><a href=\"".$release["file"]."\">SliTaz GNU/Linux ".$release["release"]." -\n";
		print " 	Release Notes</a></li>\n";
	}
?>
</ul>

<!-- End of content -->
</section>

<?php include("../../lib/html/footer.html"); ?>

</body>
</html>
