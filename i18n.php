<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
    <title>SliTaz - Internationalisation</title>
	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<meta name="description" content="SliTaz GNU/Linux LiveCD operating system" />
    <meta name="keywords" lang="en" content="Système, libre, gnu, linux, logiciels opensource, livecd" />
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
		<h4>About i18n</h4>
		<p>
			The main goal of SliTaz is to provide full support for a given
			language, including the website, official Wiki documentation,
			a dedicated forum and all SliTaz related projects such as the
			LiveCD GUI builder.
		</p>
		<p>
			<img src="images/users.png" alt="users.png" />
			<a href="http://scn.slitaz.org/groups/i18n/">Join us on SCN</a>
		</p>
	</div>
</div>

<!-- Content -->
<div id="content">

<h2>Internationalization</h2>
<p>
	Translation is a community effort and everyone can help. You're
	welcome to join the team! You can find more pot files on 
	<a href="http://hg.slitaz.org/">Hg</a>, just pick one up,
	translate it and send it to the mailing list or upload it onto the
	SliTaz Community Network aka <a href="http://scn.slitaz.org/">SCN</a>.
</p>

<p>
	SliTaz project Website is available in the following languages:
</p>

<div class="box">
	<img src="images/locale.png" alt="locale.png" />
	<a href="de/">Deutsch</a> -
	<a href="en/">English</a> -
	<a href="es/">Español</a> -
	<a href="fr/">Français</a> -
	<a href="id/">Indonesian</a> -
	<a href="pt/">Português</a> -
	<a href="cn/">Chinese</a>
</div>

<h2>Information</h2>

<p>
	The website and documentation has been translated and is kept 
	up-to-date by several contributors. For now, the actively maintained
	languages are English, French, German, Portuguese and Chinese. 
	Spanish is on the stove, but more help is needed. Most of the 
	communication is done through the
	<a href="en/mailing-list.html">Mailing List</a> and the
	<a href="http://labs.slitaz.org/i18n/wiki">Labs</a>.
</p>

<p>
	Some additional languages can be installed through the Package 
	Manager, but we are not able to provide support and documentation.
	SliTaz is a community based project, everyone can help out and is
	more than welcome to join us.
</p>

<!-- End of content -->
</div>

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
