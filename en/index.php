<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
	"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<title>SliTaz GNU/Linux (en)</title>
	<meta name="description" content="SliTaz GNU/Linux English Website" />
	<meta name="keywords" lang="en" content="System, free, gnu, linux, software opensource, livecd LINUX in RAM" />
	<meta name="author" content="Paul Issot"/>
	<?php include("../lib/html/meta-link.html"); ?>
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

<?php include("../lib/lang.php"); ?>

<!-- Content -->
<div id="content">

<div class="box-up">
	<p>
		Help us get a <a href="http://www.gofundme.com/3ql70">dedicated server</a>,
		and check out our <a href="http://usbkey.slitaz.org/">USB Key Project</a>!
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
	available as a <a href="/rss.xml">XML feed</a>. The project also
	publishes a small monthly Newsletter. This page and the website
	<a href="../">main page</a> will give you a nice overview of the
	latest news, commits, and Tweets.
</p>

<div class="box">
	<img src="/images/news.png" alt="[ ]" />
	<a href="http://scn.slitaz.org/">News from the Blog</a> |
	<a href="http://doc.slitaz.org/en:newsletter:start">Monthly Newsletter</a>
</div>

<div class="news">
<a name="news"></a>

<ul>
	<!-- <li id="d20120223">
		<strong>Date - Title</strong>
	<p></p>
	</li> -->

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

	<li><a href="news/">More news</a> or browse the archives:
		<a href="news/2007.php">2007</a> |
		<a href="news/2008.php">2008</a> |
		<a href="news/2009.php">2009</a> |
		<a href="news/2010.php">2010</a> |
		<a href="news/">2011</a>
	</li>
</ul>

<!-- End of news -->
</div>

<h2>Project Activity</h2>

<?php require_once("../lib/get-feeds.php"); ?>

<div class="activity">
	<p>
		<a href="http://scn.slitaz.org/activity/"><img
			src="/images/users.png" alt="[ ]" /></a>
		Community activity
		<?php get_feed("scn.xml"); ?>
	</div>
	<p class="activity_more">
		<a href="http://scn.slitaz.org/activity/">More activity</a>
	</p>
</div>

<div class="activity">
	<p>
		<a href="http://forum.slitaz.org/"><img
			src="/images/support.png" alt="[ ]" /></a>
		Forum activity
		<?php get_feed_forum("forum.xml"); ?>
	</div>
	<p class="activity_more">
		<a href="http://forum.slitaz.org/">More support</a>
	</p>
</div>

<div class="activity">
	<p>
		<a href="http://hg.slitaz.org/">
			<img src="/images/development.png" alt="[ ]" /></a>
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
	<a href="sponsor/">More information</a>
</p>

<?php include("../lib/html/donate.html"); ?>

<h3>Twitter &amp; Facebook</h3>

<?php include("../lib/html/social.html"); ?>

<!-- End of content  -->
</div>

<?php include("../lib/html/footer.html"); ?>

</body>
</html>
