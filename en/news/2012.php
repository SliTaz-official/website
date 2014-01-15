<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
	"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<title>SliTaz - News archives 2011</title>
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

<h2>2012</h2>

<ul>
	<li id="d20120410">
		<strong>10 Apr 2012 - SliTaz GNU/Linux 4.0 Release</strong>
	<p>
		The SliTaz contributors are pleased to announce the release of 
		the new stable distribution SliTaz GNU/Linux 4.0. Two years of 
		community work have created a reliable system capable of even 
		shorter boot times with more than 1000 new installable packages.
	</p>
	<p>
		SliTaz provides a complete graphical desktop in 35 MB based
		on LXDE and Openbox that works entirely in 192MB of RAM. Its 
		new 4in1 CD image can be installed on a hard drive with only 48MB
		by automatically selecting a configuration most fully suited to
		your hardware.
	</p>
	<p>
		The home-made tools have grown. Tazpkg brings a new notification
		system and is much faster despite the increase in the number of 
		packages and Tazpanel enables a new centralized management system. 
		You can read the full <a href="/en/doc/releases/4.0/relnotes.en.html">Release Notes</a> 
		and download SliTaz 4.0 from our mirror:
		<a href="http://mirror.slitaz.org/iso/4.0/slitaz-4.0.iso">slitaz-4.0.iso</a>
	</p>
	</li>

	<li id="d20120303">
		<strong>03 Mar 2012 - SliTaz 4.0-RC2 is out</strong>
	<p>
		The Slitaz team is pleased to announce the new SliTaz 4.0-RC2 release
		candidate. We have done a huge amount of work fixing bugs from RC1 and
		on end-user home made tools such as TazPKG, TazPanel and TazUSB. Wifi
		connection is made easier via TazPanel or the new wifibox. TazPKG has
		better desktop integration and a new notification system.
	</p>
	<p>
		This new version comes with a full Xorg package and DRI support as
		well as the nv, intel, geode and vesa drivers working out-of-the-box.
		We have also rebuilt all packages once again and saved ~2Mb in the
		core LiveCD, so we now include Lxrandr, Parcellite and the
		transmission BiTorrent client.
	</p>
	<p>
		We want to thank everyone who tested the first release candidate; this
		RC2 is close to the upcoming SliTaz 4.0 version planned in 2 weeks.
		Download the RC2 ISO image from our mirror (35,1 Mb):
		<a href="http://mirror.slitaz.org/iso/cooking/slitaz-4.0-RC2.iso">SliTaz 4.0-RC2</a>
	</p>
	</li>

	<li id="d20120223">
		<strong>23 Feb 2012 - SliTaz 4.0 -RC1 is out</strong>
	<p>
		The SliTaz contributor team is pleased to announce the immediate
		availability of the first release candidate for SliTaz 4.0. SliTaz can
		boot in 10-12 seconds on fairly new hardware and with the new 4in1 ISO
		you can install a full SliTaz desktop with only 48MB of RAM. The 4in1
		ISO is able to auto detect the memory and can boot SliTaz in text mode,
		to a minimal X environment or a full graphical desktop.
	</p>
	<p>
		SliTaz 4.0 will have more than 3000 well tested packages in its
		repository and the RC series lets us track the latest bugs. From our last
		Cooking release the packages have all been rebuilt twice to ensure build
		quality.
	</p>
	<p>
		This RC2 ISO will prompt you with a new graphical menu and a graphical
		language and keyboard set up. The ISO features a new desktop layout and
		artwork as well as a new command line installer with a CGI/web interface
		accessible via TazPanel. You can download this new ISO from our mirror:
		<a href="http://mirror.slitaz.org/iso/cooking/slitaz-4.0-RC1.iso">SliTaz 4.0-RC1</a>
	</p>
	</li>
</ul>

<!-- End of content -->
</div>

<?php include("../../lib/html/footer.html"); ?>

</body>
</html>
