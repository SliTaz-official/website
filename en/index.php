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
	<link rel="alternate" type="application/rss+xml" title="SliTaz SCN feed" href="http://scn.slitaz.org/activity/feed/" />
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
		<a href="http://bugs.slitaz.org">Bugs</a>
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
		<img src="../images/locale.png" alt="locale.png" /></a>
	<a href="../da/">Dansk</a>
	<a href="../de/">Deutsch</a>
	<a href="../en/">English</a>
	<a href="../es/">Español</a>
	<a href="../fr/">Français</a>
	<a href="../id/">Indonesian</a>
	<a href="../it/">Italiano</a>
	<a href="../pt/">Português</a>
	<a href="../cn/">Chinese</a>
</div>

<!-- Content -->
<div id="content">

<!-- <div class="box">
	<img src="../images/update.png" style="float: left; margin-right: 10px; " />
	<p>
		Call for sponsor!
	</p>
</div> -->

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
	<p></p>
	</li> -->
	<a name="20110531"></a>
	<li><strong>31 May 2011 - New and fresh Cooking 20110531</strong>
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

	<a name="20110329"></a>
	<li><strong>29 March 2011 - New Cooking 20110329</strong>
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
	
	<a name="20101104"></a>
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

	<li><a href="news/">More news</a> or browse the archives:
	<a href="news/2007.html">2007</a> |
	<a href="news/2008.html">2008</a> |
	<a href="news/2009.html">2009</a></li>
</ul>

<!-- End of news -->
</div>

<h2>Project Activity</h2>
<?php
	require_once("../libs/get-feeds.php");
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
	You may also want to become an official sponsor via mouthly donation or
	by provide us some hardware or server resources.
	<a href="asso/sponsor.html">More information</a>
</p>

<div>
	<!-- PayPal Button -->
	<form action="https://www.paypal.com/cgi-bin/webscr" method="post"
		style="display: inline;">
		<input type="hidden" name="cmd" value="_s-xclick" />
		<input type="hidden" name="hosted_button_id" value="4885025" />
		<input type="image" src="../images/paypal.png" name="submit" 
			alt="PayPal - The safer, easier way to pay online!" />
	</form>
	<!-- Flattr Button -->
	<a class="FlattrButton" style="display:none;" rev="flattr;button:compact;"
		href="http://www.slitaz.org/"></a>
	<!-- Twitter Button -->
	<script type="text/javascript" src="http://platform.twitter.com/widgets.js"></script>
	<a href="http://twitter.com/share" class="twitter-share-button" 
		data-text="SliTaz GNU/Linux" 
		data-count="horizontal"
		data-via="slitaz">Tweet</a>
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
	<a href="http://bugs.slitaz.org">Bugs</a>
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
