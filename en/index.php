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

<?php
include("../config.php");
include("../lib/html/header.html");
?>

<!-- Block -->
<div id="block">
	<?php include("../lib/html/nav.en.html"); ?>
	<?php //include("lib/random-image.php"); ?>
	<!-- Information/image -->
	<div id="block_info">
		<h4>English Website</h4>
		<p>
			SliTaz is an open source and free operating system providing
			a fully featured desktop or server in less than 40 MB. SliTaz
			is simple to use, fast, secure, and stable. 
			<a href="about/">More information...</a>
		</p>
		<div class="button" style="text-align: left; margin-top: 15px;">
			<img src="/images/download-30.png" />
			<?php echo "<a href='$stable_iso'>SliTaz $stable_ver</a>
				<a href='$cooking_iso'>SliTaz $cooking</a>"; ?>
		</div>
	</div>
</div>

<?php include("../lib/lang.php"); ?>

<!-- Content -->
<div id="content">

<div class="box-up">
	<a href="http://www.gofundme.com/slitaz2014?utm_medium=wdgt"
		title="Visit this page now."><img src="../images/gofundme.png"></a>
	<a href="http://www.gofundme.com/slitaz2014?utm_medium=wdgt">
		Check out our new SliTaz 2014 fundraising!</a>
</div>

<!--
    SliTaz news starting.
-->

<!-- Featured sponsor -->
<div id="sponsor">
	<p><strong>Featured sponsor</strong></p>
	<?php include("../lib/rand-sponsor.php"); ?>
	<p><a href="/en/sponsor/">Become a sponsor</a></p>
</div>

<!-- We just keep the last 3 web site news -->
<div class="news" style="margin-right: 220px;">

<h2>Latest Release</h2>

<ul>
	<li><strong><a href="news/#d20140216">New SliTaz Cooking</a></strong>
		<span>- 16 Fev 2014</span></li>
	<li><strong><a href="news/2012.php#d20120410">SliTaz 4.0 Release</a></strong>
		<span>- 10 Apr 2012</span></li>
	<li><strong><a href="news/2012.php#d20120303">SliTaz 4.0 RC2 is out</a></strong>
		<span>- 03 Mar 2012</span></li>
	<li><strong><a href="news/">Release news archives</a></strong>
		<span>- 2007-2013</span></li>
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

<!-- SCN blog posts  -->
<h2>Blog Posts</h2>

<div class="news">
	<?php get_feed_blog("blog.xml"); ?>
</div>

<!-- Twitter  -->
<div id="twitter">
<a class="twitter-timeline"  href="https://twitter.com/slitaz"  data-widget-id="420830244551938048">Tweets by @slitaz</a>
    <script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+"://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>
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

<h2>Spread SliTaz</h2>

<p>
	One way to help the project is to make SliTaz even more popular.
	Blog, Tweet this page, share and talk about the project. SliTaz
	is also social, you can join us, share artwork or post a blog on the
	<a href="http://scn.slitaz.org/">SliTaz Community Network</a>,
	"Like" the official SliTaz Facebook page and get involved!
</p>

<?php include("../lib/html/social.html"); ?>

<h2>Internationalization</h2>

<p>
The SliTaz web site is available in several languages and maintained by the
<a href="../i18n.php">internationalization</a> team (i18n). Help is often
needed and you're welcome to join us if you would like to see the website
translated into your language.
</p>
<p>
	<img src="../images/users.png" alt="*" />
	<a href="http://scn.slitaz.org/groups/i18n/">Join i18n group on SCN</a>
</p>

<!-- End of content  -->
</div>

<?php include("../lib/html/footer.html"); ?>

</body>
</html>
