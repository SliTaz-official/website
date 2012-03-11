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
	<link rel="alternate" type="application/rss+xml" title="SliTaz Website feed" href="/rss.xml" />
	<link rel="alternate" type="application/rss+xml" title="SliTaz SCN feed" href="http://scn.slitaz.org/activity/feed/" />
</head>
<body>

<?php include("../lib/html/header.html"); ?>

<!-- Block -->
<div id="block">
	<?php include("../lib/html/nav.en.html"); ?>
	<!-- Information/image -->
	<div id="block_info">
		<h4>English Website</h4>
		<p>
			SliTaz is a free operating system providing a fully featured
			desktop or server in less than 35 MB. 
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
	<a href="../i18n.php">
		<img src="../images/locale.png" alt="Locale:" /></a>
	<a href="../da/">Dansk</a>
	<a href="../de/">Deutsch</a>
	<a href="../en/">English</a>
	<a href="../es/">Espa�ol</a>
	<a href="../fr/">Fran�ais</a>
	<a href="../id/">Indonesian</a>
	<a href="../it/">Italiano</a>
	<a href="../pt/">Portugu�s</a>
	<a href="../cn/">Chinese</a>
</div>

<!-- Content -->
<div id="content">

<div class="box">
	<img src="/images/update.png" alt="Update:" style="float: left; margin-right: 10px; " />
	<p>
		Help us get a dedicated server - Check out our
		<a href="http://www.gofundme.com/3ql70">online fundraising</a>
	</p>
</div>

<!--
    SliTaz news starting.
-->

<h2>Headlines</h2>
<p>
	The SliTaz website offers the main news of the project as well as 
	news on the general activity of the subprojects on the
	<a href="http://scn.slitaz.org/">community site</a>. Both are
	available as a <a href="rss.xml">XML feed</a>. The project also
	publishes a small monthly Newsletter. This page and the website 
	<a href="../">main page</a> will give you a nice overview of the
	latest news, commits, and Tweets.
</p>

<div class="box">
	<img src="../images/news.png" alt=".png" />	
	<a href="http://scn.slitaz.org/">News from the Blog</a> | 
	<a href="http://doc.slitaz.org/en:newsletter:start">Monthly Newsletter</a>
</div>

<div class="news">
<a name="news"></a>

<ul>
	<!-- <li><strong>Date - Title</strong>
	<a name="20120223"></a>
	<p></p>
	</li> -->
	
	<li><strong>03 Mar 2012 - SliTaz 4.0-RC2 is out</strong>
	<a name="20120303"></a>
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
	
	<li><strong>23 Feb 2012 - SliTaz 4.0 -RC1 is out</strong>
	<a name="20120223"></a>
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
	
	<li><strong>31 May 2011 - New and fresh Cooking 20110531</strong>
	<a name="20110531"></a>
	<p>
		The Slitaz team is proud to announce the release of a new Cooking version
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

	<li><strong>29 March 2011 - New Cooking 20110329</strong>
	<a name="20110329"></a>
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
	<a href="get/">release!</a>
	</p>
	</li>

	<li><a href="news/">More news</a> or browse the archives:
	<a href="news/2007.html">2007</a> |
	<a href="news/2008.html">2008</a> |
	<a href="news/2009.html">2009</a></li>
</ul>

<!-- End of news -->
</div>

<h2>Project Activity</h2>
<?php
	require_once("../lib/get-feeds.php");
?>

<div class="activity">
	<p>
		<a href="http://scn.slitaz.org/activity/"><img 
			src="../images/users.png" alt="users.png" /></a>
		Community activity
		<?php get_feed("scn.xml"); ?>
	</div>
	<p class="activity_more">
		<a href="http://scn.slitaz.org/activity/">More activity</a>
	</p>
</div>

<div class="activity">
	<p>
		<a href="http://hg.slitaz.org/">
			<img src="../images/development.png" alt="development.png" /></a>
		Latest commits in wok
		<?php get_feed("wok.xml"); ?>
	</div>
	<p class="activity_more">
		<a href="http://hg.slitaz.org/">More commits</a>
	</p>
</div>

<h2>Support us</h2>
<p>
	Make SliTaz even more popular or make a donation. You can use PayPal
	or a Flattr micropayment to monetary support us. You can Blog, Tweet,
	share and talk about the project to help spread SliTaz. You can also
	join the project to connect and share or get involved on the SliTaz 
	<a href="http://scn.slitaz.org/">Community Network</a>.
</p>
<p>
	You may also want to become an official sponsor via a monthly donation or
	by providing us with some hardware or server resources.
	<a href="asso/sponsor.php">More information</a>
</p>

<?php include("../lib/html/donate.html"); ?>

<h3>Twitter &amp; Facebook</h3>

<?php include("../lib/html/social.html"); ?>

<!-- End of content  -->
</div>

<?php include("../lib/html/footer.html"); ?>

</body>
</html>
