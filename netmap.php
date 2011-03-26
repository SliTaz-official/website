<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<title>SliTaz - Network Map</title>
	<meta http-equiv="content-type" content="text/html; charset=ISO-8859-1" />
	<meta name="description" content="slitaz network map" />
	<meta name="keywords" lang="en" content="slitaz network, slitaz support, slitaz sites" />
	<meta name="robots" content="index, follow, all" />
    <meta name="modified" content="<?php echo (date( "Y-m-d H:i:s", getlastmod())); ?>" />
	<meta name="author" content="Christophe Lincoln"/>
	<link rel="shortcut icon" href="favicon.ico" />
	<link rel="stylesheet" type="text/css" href="slitaz.css" />
</head>
<body>

<!-- Header -->
<div id="header">
	<div id="logo"></div>
	<div id="network">
		<a href="./netmap.php">
			<img src="images/network.png" alt="network.png" /></a>
		<a href="http://scn.slitaz.org/">Community</a>
		<a href="http://doc.slitaz.org/">Doc</a>
		<a href="http://forum.slitaz.org/">Forum</a>
		<a href="http://labs.slitaz.org/issues">Bugs</a>
		<a href="http://hg.slitaz.org/">Hg</a>
	</div>
	<h1><a href="./">SliTaz GNU/Linux</a></h1>
</div>

<!-- Block -->
<div id="block">
	<!-- Navigation -->
	<div id="block_nav" style="text-align: center; padding: 10px;">
		<?php include("libs/random-image.php"); ?>
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

<!-- Content -->
<div id="content">

<div>
	<div class="left_box">
		<h3><img src="images/network.png" alt=".png" />Website</h3>
		<ul>
			<li><a href="http://www.slitaz.org/">Main Page &amp; News</a></li>
			<li><a href="http://www.slitaz.org/i18n.php">Internationalization</a></li>
			<li><a href="http://www.slitaz.org/en/about/">About SliTaz</a></li>
			<li><a href="http://www.slitaz.org/en/get/">Download</a></li>
			<li><a href="http://www.slitaz.org/en/packages/">Packages</a></li>
		</ul>
	</div>
	<div class="right_box">
		<h3><img src="images/support.png" alt=".png" />Help &amp; Support</h3>
		<ul>
			<li><a href="http://doc.slitaz.org/">Documentation</a></li>
			<li><a href="http://doc.slitaz.org/en:handbook:start">Handbook</a></li>
			<li><a href="http://forum.slitaz.org/">Support Forum</a></li>
			<li><a href="http://www.slitaz.org/en/mailing-list.html">Mailing List</a></li>
			<li>IRC: <b>irc.toile-libre.org #slitaz</b></li>
		</ul>
	</div>
</div>

<div style="clear: both;"></div>

<div>
	<div class="left_box" >
		<h3><img src="images/users.png" alt=".png" />Community</h3>
		<ul>
			<li><a href="http://scn.slitaz.org/">Community Network</a></li>
			<li><a href="http://doc.slitaz.org/en:newsletter:start">Monthly Newsletter</a></li>
			<li><a href="http://pizza.slitaz.org/">LiveCD Online Builder</a></li>
			<li><a href="http://people.slitaz.org/">SliTaz People</a></li>
			<li><a href="http://www.facebook.com/pages/SliTaz/125559834176383">SliTaz on Facebook</a></li>
			<li><a href="http://en.wikipedia.org/wiki/SliTaz_GNU/Linux">SliTaz on Wikipedia</a></li>
		</ul>
	</div>
	<div class="right_box">
		<h3><img src="images/development.png" alt=".png" />Development</h3>
		<ul>
			<li><a href="http://hg.slitaz.org/">Mercurial Repositories</a></li>
			<li><a href="http://labs.slitaz.org/">SliTaz Laboratories</a></li>
			<li><a href="http://labs.slitaz.org/issues">Bug Tracker</a></li>
			<li><a href="http://tank.slitaz.org/">Main Server</a></li>
			<li><a href="http://bb.slitaz.org/">Build Bot</a></li>
			<li><a href="http://www.slitaz.org/en/devel/">Developers Corner</a></li>
		</ul>
	</div>
</div>

<div style="clear: both;"></div>

<!-- End of content -->
</div>

<div style="margin-top: 100px;"></div>

<!-- Footer -->
<div id="footer">
	Copyright &copy; <span class="year"></span>
	<a href="http://www.slitaz.org/">SliTaz</a> - Network:
	<a href="http://scn.slitaz.org/">Community</a>
	<a href="http://doc.slitaz.org/">Doc</a>
	<a href="http://forum.slitaz.org/">Forum</a>
	<a href="http://pkgs.slitaz.org/">Packages</a>
	<a href="http://labs.slitaz.org/issues">Bugs</a>
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
