<!DOCTYPE html>
<html lang="de">
<head>
	<meta charset="utf-8"/>
	<title>SliTaz GNU/Linux (de)</title>
	<meta name="description" content="SliTaz GNU/Linux LiveCD"/>
	<meta name="keywords" lang="en" content="System, free, gnu, linux, software opensource, livecd LINUX in RAM"/>
	<meta name="author" content="F Steiner (Sevala), François (oui)"/>
	<?php include("../lib/html/meta-link.html"); ?>
</head>
<body>

<?php
include("../config.php");
include("../lib/html/header.html");
include("../lib/html/nav.de.html");
include("../lib/lang.php");
?>

<!-- Content -->
<section id="content">

<div class="box-up">
	<p>
		SliTaz German website needs a new maintainer and contributors. You
		can contact us on the
		<a href="mailing-list.php">mailing list</a>.
	</p>
</div>

<!-- Featured sponsor -->
<div id="sponsor">
	<p><strong>Featured sponsor</strong></p>
	<?php include("../lib/rand-sponsor.php"); ?>
	<p><a href="/en/sponsor/">Become a sponsor</a></p>
</div>

<!--
    SliTaz news starting.
-->

<!-- We just keep the last 3 web site news -->
<div class="news" style="margin-right: 220px;">

<h2>Neuigkeiten</h2>

<ul>
	<!-- <li><strong>Date - Title</strong>
	<p></p>
	</li> -->
    <li><strong><a href="http://mirror.slitaz.org/iso/rolling/">SliTaz 5.0 Rolling release</a></strong> (weekly)  
            <span>- <?php
            $rol_date_file = '/var/cache/slitaz/website/rolling-date.txt';
            if (file_exists("$rol_date_file")) {
                    $rol_date = file_get_contents("/var/cache/slitaz/website/rolling-date.txt");
                    print $rol_date;
            } ?></span></li>
	<li>Neuigkeiten Archiv: <a href="news/">2007-2009</a></li>
</ul>

<!-- End of news -->
</div>

<h2>Projekt-Aktivität</h2>

<?php require_once("../lib/get-feeds.php"); ?>

<div class="activity">
	<p>
		<a href="http://scn.slitaz.org/?log"><img 
			src="/images/users.png" alt="[ ]" /></a>
		Community activity
		<?php get_feed("scn.xml"); ?>
	</div>
	<p class="activity_more">
		<a href="http://scn.slitaz.org/?log">Mehr Aktivität</a>
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
		<a href="http://hg.slitaz.org/">Mehr Commits</a>
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

<h3>Donate</h3>

<?php include("../lib/html/donate.html"); ?>

<h3>Twitter &amp; Facebook</h3>

<?php include("../lib/html/social.html"); ?>

<!-- End of content  -->
</div>

<?php include("../lib/html/footer.html"); ?>

</body>
</html>
