<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
	"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
    <title>SliTaz GNU/Linux</title>
    <meta http-equiv="content-type" content="text/html; charset=ISO-8859-1" />
    <meta name="description" content="SliTaz GNU/Linux LiveCD operating system" />
    <meta name="keywords" lang="en" content="System, libre, gnu, linux, logiciels opensource, livecd" />
    <meta name="robots" content="index, follow, all" />
    <meta name="revisit-after" content="3 days" />
    <meta name="expires" content="never" />
    <meta name="modified" content="<?php echo (date( "Y-m-d H:i:s", getlastmod())); ?>" />
    <meta name="author" content="Christophe Lincoln"/>
    <meta name="publisher" content="www.slitaz.org" />
    <meta name="verify-v1" content="qieECDfB5l+EBkG8QMNuHOGfol0/MEe4U22/4iVupNw=" />
	<link rel="shortcut icon" href="favicon.ico" />
    <link rel="stylesheet" type="text/css" href="slitaz.css" />
    <link rel="alternate" type="application/rss+xml" title="SliTaz Website feed" href="en/rss.xml" />
    <link rel="alternate" type="application/atom+xml" title="SliTaz Labs feed" href="http://labs.slitaz.org/news?format=atom" />
    <link rel="alternate" type="application/rss+xml" title="SliTaz SCN feed" href="http://scn.slitaz.org/rss.xml" />
    <script type="text/javascript" src="scripts/slideshow.js"></script>
    <link rel="Content" href="#content" />
</head>
<body>

<?php
	require_once("scripts/get_feed.php");
?>

<!-- Header -->
<div id="header">
	<!-- Logo -->
	<a href="http://www.slitaz.org/"><img id="logo"
		src="pics/website/logo.png" 
		title="www.slitaz.org" alt="www.slitaz.org" /></a>
	<p id="titre">#!/GNU/Linux</p>
</div>

<!-- Content -->
<div id="content-full">

<!-- For the main index with slideshow we keep block_nav and block_top
     at min-height: 220px; -->

<!-- Block begin -->
<div class="block">
	<!-- Nav block begin -->
	<div id="block_nav" style="min-height: 220px;">
		<h3><a href="i18n.html"><img src="pics/website/locale.png"
			alt="locale.png" /></a>Language</h3>
		<div class="right_box">
			<ul>
				<li><a href="id/">Indonesian</a></li>
				<li><a href="pt/">Português</a></li>
				<li><a href="cn/" title="Chinese">
				<img src="pics/website/cn.png" alt="cn"
					style="vertical-align: middle;" /></a></li>
				<!-- <li><a href="i18n.html">I18n info</a></li> -->
			</ul>
		</div>
		<ul>
			<li><a href="de/">Deutsch</a></li>
			<li><a href="en/">English</a></li>
			<li><a href="es/">Español</a></li>
			<li><a href="fr/">Français</a></li>
		</ul>
		<h3>Quick Download</h3>
		<div class="button">
			<a href="http://mirror.slitaz.org/iso/3.0/slitaz-3.0.iso">SliTaz 3.0</a>
			<a href="http://mirror.slitaz.org/iso/cooking/slitaz-cooking.iso">SliTaz Cooking</a>
		</div>
	<!-- Nav block end -->
	</div>
	<!-- Top block begin -->
	<div id="block_top" style="min-height: 220px;">
		<h1>Boot baby... boot!</h1>
		<div id="slideshow">
			<img src="pics/slideshow/1.png" alt="Desktop 1.png" />
			<img src="pics/slideshow/2.png" alt="Desktop 2.png" />
			<img src="pics/slideshow/3.png" alt="Desktop 3.png" />
			<img src="pics/slideshow/4.png" alt="Desktop 4.png" />
			<img src="pics/slideshow/5.png" alt="Desktop 5.png" />
		</div>	
	<!-- Top block end -->
	</div>
<!-- Block end -->
</div>

<h2>About SliTaz</h2>

<p>
SliTaz is an open source and free operating system providing a fully featured
desktop or server in less than 30 MB. SliTaz is simple to use, fast and stable.
We have an active community and contributors from from all over the world making
SliTaz better every day.
</p>

<!-- We just keep the last 4 web site news -->
<div id="news">

<h2>Latest news</h2>

<ul>
	<li><strong><a href="en/#news">4 November 2010 - New Cooking 20101104</a></strong></li>
	<li><strong>8 May 2010 - Summer of Documentation</strong></li>
	<li><strong>28 March 2010 - SliTaz GNU/Linux 3.0 released</strong></li>
	<li><strong>14 March 2010 - RC series and Solutionslinux 2010 (Paris)</strong></li>
	<li><strong>21 February 2010 - New Cooking 20100221</strong></li>
</ul>

<div class="infobox">
	<img src="pics/website/news.png" alt=".png" />
	Read the latest news in your language:
	<strong><a href="de/index.html#news">de</a></strong> |
	<strong><a href="en/index.html#news">en</a></strong> |
	<strong><a href="es/index.html#news">es</a></strong> |
	<strong><a href="fr/index.html#news">fr</a></strong> |
	<strong><a href="id/index.html#news">id</a></strong> |
	<strong><a href="pt/index.html#news">pt</a></strong> |
	<a href="cn/index.html#news"><img
		src="pics/website/cn.png"
		style="vertical-align: middle;"
		title="Chinese" alt="cn" /></a>
</div>

<h2>Latest Tweet</h2>
<div id="twitter">
	<script src="http://widgets.twimg.com/j/2/widget.js"></script>
	<script>
	new TWTR.Widget({
	  version: 2,
	  type: 'profile',
	  rpp: 4,
	  interval: 6000,
	  width: '100%',
	  height: 200,
	  theme: {
	    shell: {
	      background: '#eaeaea',
	      color: '#000000'
	    },
	    tweets: {
	      background: '#ffffff',
	      color: '#000000',
	      links: '#3a4885'
	    }
	  },
	  features: {
	    scrollbar: false,
	    loop: false,
	    live: false,
	    hashtags: true,
	    timestamp: true,
	    avatars: false,
	    behavior: 'all'
	  }
	}).render().setUser('slitaz').start();
	</script>
</div>

<!-- We display the 5 last commit and build for cooking -->

<?php
include("/var/cache/slitaz/website/latest.html");
?>

<h2>Community Network Feed</h2>
<div class="feedbox">
	<div>
		<?php get_feed("http://scn.slitaz.org/rss.xml"); ?>
	</div>
	<p>
		Want to get involve ? 
		<a href="http://scn.slitaz.org/user/register">Join us!</a>
	</p>
</div>

<!-- End of news -->
</div>

<h2>Spread SliTaz</h2>
<p>
	One way to help the project is to make SliTaz even more popular.
	Blog, Tweet, share and talk around you about the project. SliTaz
	is also social, you can join us, share artwork or blog post on the 
	<a href="http://scn.slitaz.org/">SliTaz Community Network</a>,
	"Like" the official SliTaz Facebook page and get involved!
</p>

<!-- Like Button -->
<script src="http://connect.facebook.net/en_US/all.js#xfbml=1"></script>
<fb:like 
	href="http://www.facebook.com/pages/SliTaz/125559834176383"
	show_faces="true" width="400">
</fb:like>
		
<h2>Internationalization</h2>
<p>
The SliTaz web site is available in several languages and maintained by the
<a href="i18n.html">internationalization</a> team (i18n). Help is often
needed and you're welcome to join us if you would like to see the website
translated into your language.
</p>

<!-- End of content -->
</div>

<!-- Footer -->
<div id="footer">
	<div class="right_box">
	<h4>SliTaz Network</h4>
		<ul>
			<li><a href="http://doc.slitaz.org/">Documentation</a></li>
			<li><a href="http://forum.slitaz.org/">Support Forum</a></li>
			<li><a href="http://scn.slitaz.org/">Community Network</a></li>
			<li><a href="http://labs.slitaz.org/">Laboratories</a></li>
			<li><a href="http://twitter.com/slitaz">SliTaz on Twitter</a></li>
			<li><a href="http://distrowatch.com/slitaz">SliTaz on DistroWatch</a></li>
		</ul>
	</div>
	<h4>SliTaz Website</h4>
	<ul>
		<li><a href="#header">Top of the page</a></li>
		<li>Copyright &copy; <span class="year"></span>
			<a href="http://www.slitaz.org/">SliTaz</a></li>
		<li><a href="about/">About the project</a></li>
		<li><a href="netmap.php">Network Map</a></li>
		<li>Page modified the <?php echo (date( "d M Y", getlastmod())); ?></li>
		<li><a href="http://validator.w3.org/check?uri=referer"><img
		src="pics/website/xhtml10.png" alt="Valid XHTML 1.0"
		title="Code validé XHTML 1.0"
		style="width: 80px; height: 15px; vertical-align: middle;" /></a></li>
	</ul>
</div>

</body>
</html>
