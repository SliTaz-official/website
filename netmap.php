<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
	"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<title>Network Map | SliTaz</title>
	<meta name="description" content="slitaz network map" />
	<meta name="keywords" lang="en" content="slitaz network, slitaz support, slitaz sites" />
	<meta name="author" content="Christophe Lincoln"/>
	<?php include("lib/html/meta-link.html"); ?>
</head>
<body>

<?php include("lib/html/header.html"); ?>

<!-- Block -->
<div id="block">
	<!-- Navigation -->
	<div id="block_nav" style="text-align: center; padding: 10px;">
		<?php include("lib/random-image.php"); ?>
	</div>
	<!-- Information/image -->
	<div id="block_info">
		<h4>Network Map</h4>
		<p>
			Since the start of the SliTaz project with the main website,
			SliTaz has grown into a wider network. Documentation Wiki,
			support forum, developers services and the community site are 
			all part of the SliTaz network.
		</p>
		<p>
			Keeping a clean style and the same layout for each site, we
			hope you enjoy your web experience using our network and 
			employ SliTaz to browse it!
		</p>
	</div>
</div>

<?php include "lib/lang.php" ?>

<!-- Content -->
<div id="content">

<div>
	<div class="left_box">
		<h3><img src="images/network.png" alt="*" />Website</h3>
		<ul>
			<li><a href="/">Main Page &amp; News</a></li>
			<li><a href="/i18n.php">Internationalization</a></li>
			<li><a href="/en/about/">About SliTaz</a></li>
			<li><a href="/en/get/">Download</a></li>
			<li><a href="/en/packages/">Packages</a></li>
		</ul>
	</div>
	<div class="right_box">
		<h3><img src="images/support.png" alt="*" />Help &amp; Support</h3>
		<ul>
			<li><a href="http://doc.slitaz.org/">Documentation</a></li>
			<li><a href="http://doc.slitaz.org/en:handbook:start">Handbook</a></li>
			<li><a href="http://forum.slitaz.org/">Support Forum</a></li>
			<li><a href="/en/mailing-list.php">Mailing List</a></li>
			<li>IRC: <b>irc.freenode.net <a href="webchat.php">#slitaz</a></b></li>
		</ul>
	</div>
</div>

<div style="clear: both;"></div>

<div>
	<div class="left_box" >
		<h3><img src="images/users.png" alt="*" />Community</h3>
		<ul>
			<li><a href="http://scn.slitaz.org/">Community Network</a></li>
			<li><a href="http://doc.slitaz.org/en:newsletter:start">Monthly Newsletter</a></li>
			<li><a href="http://pizza.slitaz.org/">LiveCD Online Builder</a></li>
			<li><a href="http://people.slitaz.org/">SliTaz People</a></li>
			<li><a href="http://www.facebook.com/slitaz">SliTaz on Facebook</a></li>
			<li><a href="http://en.wikipedia.org/wiki/SliTaz_GNU/Linux">SliTaz on Wikipedia</a></li>
		</ul>
	</div>
	<div class="right_box">
		<h3><img src="images/development.png" alt="*" />Development</h3>
		<ul>
			<li><a href="http://hg.slitaz.org/">Mercurial Repositories</a></li>
			<li><a href="http://scn.slitaz.org/groups/devel/">SCN Group</a></li>
			<li><a href="http://bugs.slitaz.org">Bug Tracker</a></li>
			<li><a href="http://tank.slitaz.org/">Main Server</a></li>
			<li><a href="http://cook.slitaz.org/">Build Bot</a></li>
			<li><a href="/en/devel/">Developers Corner</a></li>
		</ul>
	</div>
</div>

<div style="clear: both;"></div>

<!-- End of content -->
</div>

<div style="margin-top: 100px;"></div>

<?php include("lib/html/footer.html"); ?>

</body>
</html>
