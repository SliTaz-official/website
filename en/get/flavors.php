<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>SliTaz LiveCD Flavors</title>
	<meta name="description" content="SliTaz GNU/Linux LiveCD">
	<meta name="keywords" lang="en" content="System, free, gnu, linux, software opensource, livecd LINUX in RAM">
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

<h2>Download flavors</h2>

<p>
	The system of LiveCD flavors is a simple means for the community 
	to generate ISO images for certain tasks by offering a selection
	of specific packages. There are two possibilities to create a 
	flavor, use a flavor made by the community or create your own 
	via a simple to use graphical interface.
</p>

<h2>LiveCD ISO Image to taste</h2>

<p>
	For convenience, the SliTaz team propose some ISO flavors for the stable
	and cooking versions:
</p>

<div class="box-dl"><p>
	<a href="http://mirror.slitaz.org/iso/3.0/flavors/slitaz-3.0-xvesa.iso">
		slitaz-3.0-xvesa.iso</a>
	[29.0M] - Fully-featured desktop environment using the tiny Xvesa graphical
	server and providing a nice range of software for daily tasks
</p></div>

<div class="box-dl"><p>
	<a href="http://mirror.slitaz.org/iso/4.0/flavors/slitaz-4.0-firefox.iso">
		slitaz-4.0-firefox.iso</a>
	[43.0M] - Small desktop environment featuring Mozilla Firefox
</p></div>

<div class="box-dl"><p>
	<a href="http://mirror.slitaz.org/iso/4.0/flavors/slitaz-4.0-justx.iso">
		slitaz-4.0-justx.iso</a>
	[16.0M] - Small desktop environment powered by Xorg and Openbox, using just
	an X environment and tools to build your own desktop
</p></div>

<div class="box-dl"><p>
	<a href="http://mirror.slitaz.org/iso/4.0/flavors/slitaz-4.0-base.iso">
		slitaz-4.0-base.iso</a>
	[8.0M] - Base system in text mode and including useful commandline tools.
	A good choice for a server installation
</p></div>

<div class="box-dl"><p>
	<a href="http://mirror.slitaz.org/iso/4.0/flavors/slitaz-4.0-loram.iso">
		slitaz-4.0-loram.iso</a>
	[41.0M] - Loram flavor that can start SliTaz on machines with very limited
	resources and needs only 128MB without disabling the CD-ROM
</p></div>

<div class="box-dl"><p>
	<a href="http://mirror.slitaz.org/iso/4.0/flavors/slitaz-4.0-loram-cdrom.iso">
		slitaz-4.0-loram-cdrom.iso</a>
	[163.0M] - Loram flavor that can boot with only 24 MB and a little swap
	memory, but is unable to release the CD-ROM
</p></div>

<div class="box-dl"><p>
	<a href="http://mirror.slitaz.org/iso/4.0/slitaz-4.0.iso">
		slitaz-4.0.iso</a>
	[35.0M] - 4in1 flavor containing the base, justx, gtkonly and core ISOs
</p></div>


<div class="box">
	<img src="/images/network.png" alt="[ ]" />
	Browse flavors directory on the mirror: 
	<a href="http://mirror.slitaz.org/iso/stable/flavors/">Stable</a> |
	<a href="http://mirror.slitaz.org/iso/cooking/flavors/">Cooking</a>
</div>

<h2>Getting and generating a flavor</h2>

<p>
	A <em>flavor</em> is a (.flavor) file to generate a special flavor.
	The graphical tool Tazlitobox can create a flavor in a few 
	mouse clicks. The Tazlito 
	<a href="http://hg.slitaz.org/tazlito/raw-file/tip/doc/tazlito.en.html">manual</a> 
	and <a href="http://doc.slitaz.org/en:handbook:genlivecd">documentation</a>
	provide detailed instructions on the generation of flavors. On the 
	command line, you can get a list of available flavors via
	<code>tazlito list-flavors</code>.
</p>

<h3>Create and share your own flavor</h3>

<p>
	The stable and cooking versions offer the flavor <em>core</em> on the
	mirror, it can be used as a basis to create your own flavor.
	The documentation in the Handbook provides all the necessary
	instructions to <a href="http://doc.slitaz.org/en:handbook:genlivecd"
		>create your own LiveCD flavor</a>.
</p>
<p>
	If you have created your own flavor to taste, you can send it on the
	<a href="../mailing-list.php">discussion list</a> for it to be 
	tested and included in the official flavors.
</p>

<!-- End of content -->
</div>

<?php include("../../lib/html/footer.html"); ?>

</body>
</html>
